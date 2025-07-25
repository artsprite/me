//FormBundle
Mautic.formOnLoad = function (container) {

    if (mQuery(container + ' #list-search').length) {
        Mautic.activateSearchAutocomplete('list-search', 'form.form');
    }

    Mautic.toggleThemeSelectorVisibility();
    mQuery('#mauticform_renderStyle_0, #mauticform_renderStyle_1').on('change', Mautic.toggleThemeSelectorVisibility);

    Mautic.formBuilderNewComponentInit();
    Mautic.iniNewConditionalField();

    var bodyOverflow = {};

    if (mQuery('#mauticforms_fields')) {
        //make the fields sortable
        mQuery('#mauticforms_fields').sortable({
            items: '.form-field-wrapper',
            cancel: '',
            helper: function(e, ui) {
                ui.children().each(function() {
                    mQuery(this).width(mQuery(this).width());
                });

                // Fix body overflow that messes sortable up
                bodyOverflow.overflowX = mQuery('body').css('overflow-x');
                bodyOverflow.overflowY = mQuery('body').css('overflow-y');
                mQuery('body').css({
                    overflowX: 'visible',
                    overflowY: 'visible'
                });

                return ui;
            },
            scroll: true,
            axis: 'y',
            containment: '#mauticforms_fields .drop-here',
            stop: function(e, ui) {
                // Restore original overflow
                mQuery('body').css(bodyOverflow);
                mQuery(ui.item).attr('style', '');

                mQuery.ajax({
                    type: "POST",
                    url: mauticAjaxUrl + "?action=form:reorderFields",
                    data: mQuery('#mauticforms_fields').sortable("serialize", {attribute: 'data-sortable-id'}) + "&formId=" + mQuery('#mauticform_sessionId').val()
                });
            }
        });

        Mautic.initFormFieldButtons();
    }

    if (mQuery('#mauticforms_actions')) {
        //make the fields sortable
        mQuery('#mauticforms_actions').sortable({
            items: '.panel',
            cancel: '',
            helper: function(e, ui) {
                ui.children().each(function() {
                    mQuery(this).width(mQuery(this).width());
                });

                // Fix body overflow that messes sortable up
                bodyOverflow.overflowX = mQuery('body').css('overflow-x');
                bodyOverflow.overflowY = mQuery('body').css('overflow-y');
                mQuery('body').css({
                    overflowX: 'visible',
                    overflowY: 'visible'
                });

                return ui;
            },
            scroll: true,
            axis: 'y',
            containment: '#mauticforms_actions .drop-here',
            stop: function(e, ui) {
                // Restore original overflow
                mQuery('body').css(bodyOverflow);
                mQuery(ui.item).attr('style', '');

                mQuery.ajax({
                    type: "POST",
                    url: mauticAjaxUrl + "?action=form:reorderActions",
                    data: mQuery('#mauticforms_actions').sortable("serialize") + "&formId=" + mQuery('#mauticform_sessionId').val()
                });
            }
        });

        mQuery('#mauticforms_actions .mauticform-row').on('dblclick.mauticformactions', function(event) {
            event.preventDefault();
            mQuery(this).find('.btn-edit').first().click();
        });
    }

    if (mQuery('#mauticform_formType').length && mQuery('#mauticform_formType').val() == '') {
        mQuery('body').addClass('noscroll');
    }

    Mautic.initHideItemButton('#mauticforms_fields');
    Mautic.initHideItemButton('#mauticforms_actions');
};

Mautic.formBuilderNewComponentInit = function () {
    mQuery('select.form-builder-new-component:not(.initialized)').change(function (e) {
        const select = mQuery(this);
        select.addClass('initialized');
        select.find('option:selected');
        Mautic.ajaxifyModal(select.find('option:selected'));
        // Reset the dropdown
        select.val('');
        select.chosen('destroy').chosen();
    });
};

Mautic.changeSelectOptions = function(selectEl, options) {
    selectEl.empty();
    mQuery.each(options, function(key, field) {
        selectEl.append(
            mQuery('<option></option>')
                .attr('value', field.value)
                .attr('data-list-type', field.isListType ? 1 : 0)
                .text(field.label)
        );
    });
    selectEl.trigger('chosen:updated');
};

Mautic.fetchFieldsOnObjectChange = function() {
    var fieldSelect = mQuery('select#formfield_mappedField');
    fieldSelect.attr('disable', true);
    mQuery.ajax({
        url: mauticAjaxUrl + "?action=form:getFieldsForObject",
        data: {
            mappedObject: mQuery('select#formfield_mappedObject').val(),
            mappedField: mQuery('input#formfield_originalMappedField').val(),
            formId: mQuery('input#mauticform_sessionId').val()
        },
        success: function (response) {
            Mautic.changeSelectOptions(fieldSelect, response.fields);
        },
        error: function (response, textStatus, errorThrown) {
            Mautic.processAjaxError(response, textStatus, errorThrown);
        },
        complete: function () {
            fieldSelect.removeAttr('disable');
        }
    });
};

Mautic.updateFormFields = function () {
    Mautic.activateLabelLoadingIndicator('campaignevent_properties_field');

    var formId = mQuery('#campaignevent_properties_form').val();
    Mautic.ajaxActionRequest('form:updateFormFields', {'formId': formId}, function(response) {
        if (response.fields) {
            var select = mQuery('#campaignevent_properties_field');
            select.find('option').remove();
            var fieldOptions = {};
            mQuery.each(response.fields, function(key, field) {
                var option = mQuery('<option></option>')
                    .attr('value', field.alias)
                    .text(field.label);
                select.append(option);
                fieldOptions[field.alias] = field.options;
            });
            select.attr('data-field-options', JSON.stringify(fieldOptions));
            select.trigger('chosen:updated');
            Mautic.updateFormFieldValues(select);
        }
        Mautic.removeLabelLoadingIndicator();
    });
};

Mautic.updateFormFieldValues = function (field) {
    field = mQuery(field);
    var fieldValue = field.val();
    var options = jQuery.parseJSON(field.attr('data-field-options'));
    var valueField = mQuery('#campaignevent_properties_value');
    var valueFieldAttrs = {
        'class': valueField.attr('class'),
        'id': valueField.attr('id'),
        'name': valueField.attr('name'),
        'autocomplete': valueField.attr('autocomplete'),
        'value': valueField.attr('value')
    };

    if (typeof options[fieldValue] !== 'undefined' && !mQuery.isEmptyObject(options[fieldValue])) {
        var newValueField = mQuery('<select/>')
            .attr('class', valueFieldAttrs['class'])
            .attr('id', valueFieldAttrs['id'])
            .attr('name', valueFieldAttrs['name'])
            .attr('autocomplete', valueFieldAttrs['autocomplete'])
            .attr('value', valueFieldAttrs['value']);
        mQuery.each(options[fieldValue], function(key, optionVal) {
            var option = mQuery("<option></option>")
                .attr('value', key)
                .text(optionVal);
            newValueField.append(option);
        });
        valueField.replaceWith(newValueField);
    } else {
        var newValueField = mQuery('<input/>')
            .attr('type', 'text')
            .attr('class', valueFieldAttrs['class'])
            .attr('id', valueFieldAttrs['id'])
            .attr('name', valueFieldAttrs['name'])
            .attr('autocomplete', valueFieldAttrs['autocomplete'])
            .attr('value', valueFieldAttrs['value']);
        valueField.replaceWith(newValueField);
    }
};

Mautic.formFieldOnLoad = function (container, response) {
    //new field created so append it to the form
    if (response.fieldHtml) {
        var newHtml = response.fieldHtml;
        var fieldId = '#mauticform_' + response.fieldId;
        var fieldContainer = mQuery(fieldId).closest('.form-field-wrapper');

        if (mQuery(fieldId).length) {
            //replace content
            mQuery(fieldContainer).replaceWith(newHtml);
            var newField = false;
        } else {
            var parentContainer = mQuery('#mauticform_'+response.parent);
            if (parentContainer.length) {
                (parentContainer.parents('.panel:first')).append(newHtml);
            }else {
                //append content
                var panel = mQuery('#mauticforms_fields .mauticform-button-wrapper').closest('.form-field-wrapper');
                panel.before(newHtml);
            }
            var newField = true;
        }

        // Get the updated element
        var fieldContainer = mQuery(fieldId).closest('.form-field-wrapper');

        //activate new stuff
        mQuery(fieldContainer).find("[data-toggle='ajax']").click(function (event) {
            event.preventDefault();
            return Mautic.ajaxifyLink(this, event);
        });

        //initialize tooltips
        mQuery(fieldContainer).find("*[data-toggle='tooltip']").tooltip({html: true});

        //initialize ajax'd modals
        mQuery(fieldContainer).find("[data-toggle='ajaxmodal']").on('click.ajaxmodal', function (event) {
            event.preventDefault();
            Mautic.ajaxifyModal(this, event);
        });

        Mautic.initFormFieldButtons(fieldContainer);
        Mautic.initHideItemButton(fieldContainer);

        //show fields panel
        if (!mQuery('#fields-panel').hasClass('in')) {
            mQuery('a[href="#fields-panel"]').trigger('click');
        }

        if (newField) {
            mQuery('.bundle-main-inner-wrapper').scrollTop(mQuery('.bundle-main-inner-wrapper').height());
        }

        if (mQuery('#form-field-placeholder').length) {
            mQuery('#form-field-placeholder').remove();
        }

        Mautic.activateChosenSelect(mQuery('.form-builder-new-component'));
        Mautic.formBuilderNewComponentInit();
        Mautic.iniNewConditionalField();
    }
};

Mautic.iniNewConditionalField = function(){
    mQuery('.add-new-conditional-field').click(function (e) {
        e.preventDefault();
        mQuery(this).parent().next().show('normal');
    })
    mQuery('.add-new-conditional-field').parent().next().hide();

}

Mautic.initFormFieldButtons = function (container) {
    if (typeof container == 'undefined') {
        mQuery('#mauticforms_fields .mauticform-row').off(".mauticformfields");
        var container = '#mauticforms_fields';
    }

    mQuery(container).find('.mauticform-row').on('dblclick.mauticformfields', function(event) {
        event.preventDefault();
        mQuery(this).closest('.form-field-wrapper').find('.btn-edit').first().click();
    });
};

Mautic.formActionOnLoad = function (container, response) {
    //new action created so append it to the form
    if (response.actionHtml) {
        var newHtml = response.actionHtml;
        var actionId = '#mauticform_action_' + response.actionId;
        if (mQuery(actionId).length) {
            //replace content
            mQuery(actionId).replaceWith(newHtml);
            var newField = false;
        } else {
            //append content
            mQuery(newHtml).appendTo('#mauticforms_actions .drop-here');
            var newField = true;
        }
        //activate new stuff
        mQuery(actionId + " [data-toggle='ajax']").click(function (event) {
            event.preventDefault();
            return Mautic.ajaxifyLink(this, event);
        });
        //initialize tooltips
        mQuery(actionId + " *[data-toggle='tooltip']").tooltip({html: true});

        //initialize ajax'd modals
        mQuery(actionId + " [data-toggle='ajaxmodal']").on('click.ajaxmodal', function (event) {
            event.preventDefault();

            Mautic.ajaxifyModal(this, event);
        });

        Mautic.initHideItemButton(actionId);

        mQuery('#mauticforms_actions .mauticform-row').off(".mauticform");
        mQuery('#mauticforms_actions .mauticform-row').on('dblclick.mauticformactions', function(event) {
            event.preventDefault();
            mQuery(this).find('.btn-edit').first().click();
        });

        //show actions panel
        if (!mQuery('#actions-panel').hasClass('in')) {
            mQuery('a[href="#actions-panel"]').trigger('click');
        }

        if (newField) {
            mQuery('.bundle-main-inner-wrapper').scrollTop(mQuery('.bundle-main-inner-wrapper').height());
        }

        if (mQuery('#form-action-placeholder').length) {
            mQuery('#form-action-placeholder').remove();
        }
    }
};

Mautic.initHideItemButton = function(container) {
    mQuery(container).find('[data-hide-panel]').click(function(e) {
        e.preventDefault();
        mQuery(this).closest('.form-field-wrapper,.form-field-wrapper').hide('fast');
    });
}

Mautic.onPostSubmitActionChange = function(value) {
    if (value == 'return') {
        //remove required class
        mQuery('#mauticform_postActionProperty').prev().removeClass('required');
    } else {
        mQuery('#mauticform_postActionProperty').prev().addClass('required');
    }

    mQuery('#mauticform_postActionProperty').next().html('');
    mQuery('#mauticform_postActionProperty').parent().removeClass('has-error');
};

Mautic.selectFormType = function(formType) {
    if (formType == 'standalone') {
        mQuery('option.action-standalone-only').removeClass('hide');
        mQuery('.page-header h3').text(mauticLang.newStandaloneForm);
    } else {
        mQuery('option.action-standalone-only').addClass('hide');
        mQuery('.page-header h3').text(mauticLang.newCampaignForm);
    }

    mQuery('.available-actions select').trigger('chosen:updated');

    mQuery('#mauticform_formType').val(formType);

    mQuery('body').removeClass('noscroll');

    mQuery('.form-type-modal').remove();
    mQuery('.form-type-modal-backdrop').remove();
};

/**
 * Toggles theme selection field visibility and manages theme selection
 */
Mautic.toggleThemeSelectorVisibility = function () {
    var selectField = mQuery('#mauticform_template');
    var chosenContainer = mQuery('#mauticform_template_chosen');

    if (mQuery('#mauticform_renderStyle_0').prop('checked')) {
        selectField.val('').trigger('chosen:updated');
        chosenContainer.addClass('chosen-disabled');
    } else {
        chosenContainer.removeClass('chosen-disabled');
    }
};
