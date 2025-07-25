<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/me/website/user/plugins/login/languages/zh.yaml',
    'modified' => 1730133084,
    'size' => 10100,
    'data' => [
        'PLUGIN_LOGIN' => [
            'USERNAME' => '用户名',
            'EMAIL' => '邮箱',
            'USERNAME_EMAIL' => '用户名/邮箱',
            'PASSWORD' => '密码',
            'ACCESS_DENIED' => '拒绝访问...',
            'LOGIN_FAILED' => '登录失败...',
            'LOGIN_SUCCESSFUL' => '您已经成功登入。',
            'BTN_LOGIN' => '登录',
            'BTN_LOGOUT' => '登出',
            'BTN_FORGOT' => '忘记密码',
            'BTN_REGISTER' => '注册',
            'BTN_RESET' => '重置密码',
            'BTN_SEND_INSTRUCTIONS' => '发送重置指引',
            'RESET_LINK_EXPIRED' => '重置链接已过期，请重试',
            'RESET_PASSWORD_RESET' => '密码已经重置',
            'RESET_INVALID_LINK' => '重置链接已经使用，请重试',
            'FORGOT_INSTRUCTIONS_SENT_VIA_EMAIL' => '重置密码指引已经发送到您的邮箱。',
            'FORGOT_FAILED_TO_EMAIL' => '发送指引邮件失败，请稍后重试。',
            'FORGOT_EMAIL_NOT_CONFIGURED' => '无法重置密码，本站点尚未配置邮件系统。',
            'FORGOT_EMAIL_SUBJECT' => '%s 的密码重置请求',
            'FORGOT_EMAIL_BODY' => '<h1>密码充值</h1><p>尊敬的 %1$s,</p><p>我们收到一个重置您的 <b>%4$s</b> 密码的请求。</p><p><br /><a href="%2$s" class="btn-primary">点击这里进行重置密码</a><br /><br /></p><p>另外，您也可以复制下面的链接到浏览器地址栏中访问：</p> <p class="word-break"><a href="%2$s">%2$s</a></p> <p><br />此致<br /><br />%3$s</p>',
            'SESSION' => '&ldquo;记住登录&rdquo;-Session',
            'REMEMBER_ME' => '记住登录',
            'REMEMBER_ME_HELP' => '设置浏览器上的持久cookie以允许会话之间的持久登录身份验证。',
            'REMEMBER_ME_STOLEN_COOKIE' => '其他人已经使用您的登录信息来访问这个页面！所有会话都已注销。请使用您的凭证登录并检查您的数据。',
            'BUILTIN_CSS' => '使用内建的CSS',
            'BUILTIN_CSS_HELP' => '包含管理面板提供的 CSS',
            'ROUTE' => '登录路径',
            'ROUTE_HELP' => '自定义路由到主题提供的自定义登录页',
            'ROUTE_REGISTER' => '注册路径',
            'ROUTE_REGISTER_HELP' => '到注册页面的路径。设置你要使用内建的注册页面。如果你有自定义的注册表单，此项请留空。',
            'USERNAME_NOT_VALID' => '用户名应该在3到16个字符之间，包括大小写字母、数字、下划线和连字符。不允许使用大写字母、空格和特殊字符。',
            'USERNAME_NOT_AVAILABLE' => '用户名 %s 已存在，请选择其他名字。',
            'EMAIL_NOT_AVAILABLE' => '邮箱地址 %s 已存在，请选择其他的邮箱。',
            'PASSWORD_NOT_VALID' => '密码必须包含至少一个数字、一个大写字母和一个小写字母，并且至少有8个字符。',
            'PASSWORDS_DO_NOT_MATCH' => '密码不匹配，请检查两次密码输入是否相同。',
            'USER_NEEDS_EMAIL_FIELD' => '用户需要填写邮箱字段。',
            'EMAIL_SENDING_FAILURE' => '发送邮件时出错。',
            'ACTIVATION_EMAIL_SUBJECT' => '激活您在 %s 上的账户',
            'ACTIVATION_EMAIL_BODY' => '<h1>账户激活</h1><p>嗨，%1$s！ </p><p>您的 <b>%3$s</b> 账户已成功创建, 但是激活前尚不能登录。</p><p><br/><a href="%2$s" class="btn-primary">点击这里立刻激活您的账户</a><br/><br/></p><p>另外，您也可以复制下方链接到浏览器地址栏中访问：</p><p class="word-break"><a href="%2$s">%2$s</a></p><p><br/>此致<br/><br/>%4$s</p>',
            'ACTIVATION_NOTICE_MSG' => '嗨， %s！您的账户已经创建，请查收激活邮件。',
            'WELCOME_EMAIL_SUBJECT' => '欢迎来到 %s',
            'WELCOME_EMAIL_BODY' => '<h1>账户已创建</h1><p>嗨，%1$s！ </p><p>您的 <b>%3$s</b> 账户已经创建成功。</p><p><br/><a href="%2$s" class="btn-primary">点击这里立即登录</a><br/><br/></p><p>另外，您也只可以复制下方链接到浏览器地址栏中访问：</p><p class="word-break"><a href="%2$s">%2$s</a></p><p><br/>此致<br/><br/>%4$s</p>',
            'WELCOME_NOTICE_MSG' => '嗨，%s！您的账户已经成功创建。',
            'NOTIFICATION_EMAIL_SUBJECT' => '%s 上的新用户',
            'NOTIFICATION_EMAIL_BODY' => '<h1>新用户</h1><p>嗨，%1$s 上注册了一个新用户。</p><p><ul><li>用户名：<b>%2$s</b></li><li>邮箱：<b>%3$s</b></ul><p><p><br/><a href="%4$s" class="btn-primary">访问 %1$s</a><br/><br/></p>',
            'EMAIL_FOOTER' => 'GetGrav.org',
            'ACTIVATION_LINK_EXPIRED' => '激活链接已过期',
            'USER_ACTIVATED_SUCCESSFULLY' => '账户已经成功激活。',
            'USER_ACTIVATED_SUCCESSFULLY_NOT_ENABLED' => '账户已激活，但仍需一步审核。',
            'INVALID_REQUEST' => '非法请求',
            'USER_REGISTRATION' => '用户注册',
            'USER_REGISTRATION_ENABLED_HELP' => '启用用户注册',
            'VALIDATE_PASSWORD1_AND_PASSWORD2' => '验证两次密码输入',
            'VALIDATE_PASSWORD1_AND_PASSWORD2_HELP' => '验证和比较密码的两个不同字段“password1”和“password2”。如果注册表单中有两个密码字段，请启用此选项。',
            'SET_USER_DISABLED' => '将用户设置为禁用',
            'SET_USER_DISABLED_HELP' => '最好与“发送激活邮件”一起使用。将用户添加到Grav，但将其设置为禁用。',
            'LOGIN_AFTER_REGISTRATION' => '用户注册后自动登录',
            'LOGIN_AFTER_REGISTRATION_HELP' => '注册后立即登录用户。如果需要激活电子邮件，用户将在激活帐户后立即登录。',
            'SEND_ACTIVATION_EMAIL' => '发送激活邮件',
            'SEND_ACTIVATION_EMAIL_HELP' => '发送电子邮件给用户激活他的帐户。启用“将用户设置为禁用”选项，这样用户将被设置为禁用，并将发送一封电子邮件来激活帐户。',
            'SEND_NOTIFICATION_EMAIL' => '发送提醒邮件',
            'SEND_NOTIFICATION_EMAIL_HELP' => '提醒站点管理员有一个新注册用户。邮件将发送 Email 插件配置中的收件人（To）。',
            'SEND_WELCOME_EMAIL' => '发送欢迎邮件',
            'SEND_WELCOME_EMAIL_HELP' => '向新注册用户发送欢迎邮件。',
            'DEFAULT_VALUES' => '默认值',
            'DEFAULT_VALUES_HELP' => 'List of field names and values associated, that will be added to the user profile (yaml file) by default, without being configurable by the user. Separate multiple values with a comma, with no spaces between the values',
            'ADDITIONAL_PARAM_KEY' => '参数',
            'ADDITIONAL_PARAM_VALUE' => '值',
            'REGISTRATION_FIELDS' => '注册字段',
            'REGISTRATION_FIELDS_HELP' => '创建将会添加到用户 yaml 文件中的字段。注册表单中存在而此处未列出的字段，将不会保存。',
            'REGISTRATION_FIELD_KEY' => '字段名',
            'REDIRECT_AFTER_LOGIN' => '登录后跳转',
            'REDIRECT_AFTER_LOGIN_HELP' => '自定义登录后的跳转路径',
            'REDIRECT_AFTER_LOGOUT' => '登出后跳转',
            'REDIRECT_AFTER_LOGOUT_HELP' => '自定义登出后的跳转路径。',
            'REDIRECT_AFTER_REGISTRATION' => '注册后跳转',
            'REDIRECT_AFTER_REGISTRATION_HELP' => '自定义注册后的跳转路径。',
            'OPTIONS' => '选项',
            'EMAIL_VALIDATION_MESSAGE' => '必须为合法邮箱',
            'PASSWORD_VALIDATION_MESSAGE' => '密码必须包含至少1个数字、一个大写字母和一个小写字母。并且至少8个字符。',
            'TIMEOUT_HELP' => '设置用户勾选启用记住登录的会话过期秒数。最小值为 604800，意味着一个星期过期。',
            'GROUPS_HELP' => '新注册用户将加入的组的列表(如果有的话)',
            'SITE_ACCESS_HELP' => '新注册用户将拥有的站点访问级别列表。例如:`login` -> `true` ',
            'WELCOME' => '欢迎',
            'REDIRECT_AFTER_ACTIVATION' => '用户激活后跳转路径',
            'REDIRECT_AFTER_ACTIVATION_HELP' => '当用户需要使用邮箱激活时有效。一旦激活，将展示此路径的内容。',
            'REGISTRATION_DISABLED' => '注册已禁止',
            'USE_PARENT_ACL_LABEL' => '使用父访问规则',
            'USE_PARENT_ACL_HELP' => '如果没有定义规则，则检查父访问规则',
            'PROTECT_PROTECTED_PAGE_MEDIA_LABEL' => '保护受登录保护的页面媒体',
            'PROTECT_PROTECTED_PAGE_MEDIA_HELP' => '如果启用，受登录保护的页面的媒体也受登录保护，除非登录才能看到。',
            'SECURITY_TAB' => '安全',
            'MAX_RESETS_COUNT' => '密码重置最多次数',
            'MAX_RESETS_COUNT_HELP' => '密码重置防讯设置(0 - 不限制)',
            'MAX_RESETS_INTERVAL' => '密码重置最大间隔',
            'MAX_RESETS_INTERVAL_HELP' => '达到重置密码最大次数的时间间隔',
            'FORGOT_CANNOT_RESET_IT_IS_BLOCKED' => '无法重置 %s 的密码，密码重置功能暂时封锁，请稍后再试(最多需要 %s 分钟)',
            'MAX_LOGINS_COUNT' => '最大登录次数',
            'MAX_LOGINS_COUNT_HELP' => '防讯设定值(0 -不限制)',
            'MAX_LOGINS_INTERVAL' => '最大登录间隔',
            'MAX_LOGINS_INTERVAL_HELP' => '达到最大登录次数的时间间隔',
            'TOO_MANY_LOGIN_ATTEMPTS' => '在配置的时间内尝试了太多失败的登录( %s 分钟)',
            'SECONDS' => '秒',
            'MINUTES' => '分',
            'RESETS' => '重置',
            'ATTEMPTS' => '尝试',
            'ROUTES' => '路径',
            'ROUTE_FORGOT' => '忘记密码路径',
            'ROUTE_RESET' => '重置密码路径',
            'ROUTE_PROFILE' => '用户资料路径',
            'ROUTE_ACTIVATE' => '用户激活路径',
            'LOGGED_OUT' => '您已成功登出…',
            'PAGE_RESTRICTED' => '访问受限，请登录…',
            'DYNAMIC_VISIBILITY' => '动态页面可见性',
            'DYNAMIC_VISIBILITY_HELP' => '允许在登录时基于访问规则对页面可见性进行动态处理。在页面上，visibility_requires_access 设置为 true',
            'USER_IS_REMOTE_ONLY' => '此用户已通过外部服务身份验证，因此无法保存配置文件',
            '2FA_TITLE' => '双因素身份验证',
            '2FA_INSTRUCTIONS' => '##### 双因素验证
您已在此账户上启用了 **2FA** ，请使用您的 **2FA** app 来输入**6位数字** 来完成登录。',
            '2FA_REGEN_HINT' => '重新生成秘密将需要你更新你的认证应用程序',
            '2FA_FAILED' => '无效的验证码，请重试…',
            '2FA_ENABLED' => '2FA 已启用',
            '2FA_ENABLED_HELP' => '为所有用户启用双因素验证（2FA）',
            '2FA_CODE_INPUT' => '000000',
            '2FA_SECRET' => '2FA 密钥',
            '2FA_SECRET_HELP' => '使用你的[Authenticator App](https://learn.getgrav.org/admin-panel/2fa#apps)扫描这个二维码。另外，在一个安全的地方备份密钥也是一个好主意，以防你需要重新安装你的应用程序。查看[Grav文档](https://learn.getgrav.org/admin-panel/2fa)以获得更多信息',
            '2FA_REGENERATE' => 'Regenerate',
            'BTN_CANCEL' => '取消',
            'MANUALLY_ENABLE' => '手动启用',
            'MANUALLY_ENABLE_HELP' => '当使用“激活邮件”和“通知邮件”时，您可以确保用户可以自行激活，但需要手动启用用户登录。',
            'IPV6_SUBNET_SIZE' => 'IPv6子网大小',
            'IPV6_SUBNET_SIZE_HELP' => '通常分配给一台机器的IPv6地址的数量'
        ]
    ]
];
