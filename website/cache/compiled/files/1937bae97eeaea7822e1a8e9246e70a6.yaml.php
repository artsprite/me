<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/me/website/system/languages/zh-cn.yaml',
    'modified' => 1730133084,
    'size' => 3478,
    'data' => [
        'GRAV' => [
            'FRONTMATTER_ERROR_PAGE' => '---
标题: %1$s
---

# 错误：无效参数

位置： `%2$s`

**%3$s**

```
%4$s
```',
            'INFLECTOR_PLURALS' => [
                '/(quiz)$/i' => '\\1zes',
                '/^(ox)$/i' => '\\1en',
                '/([m|l])ouse$/i' => '\\1ice',
                '/(matr|vert|ind)ix|ex$/i' => '\\1ices',
                '/(x|ch|ss|sh)$/i' => '\\1es',
                '/([^aeiouy]|qu)ies$/i' => '\\1y',
                '/([^aeiouy]|qu)y$/i' => '\\1ies',
                '/(hive)$/i' => '\\1s',
                '/(?:([^f])fe|([lr])f)$/i' => '\\1\\2ves',
                '/sis$/i' => 'ses',
                '/([ti])um$/i' => '\\1a',
                '/(buffal|tomat)o$/i' => '\\1oes',
                '/(bu)s$/i' => '\\1ses',
                '/(alias|status)/i' => '\\1es',
                '/(octop|vir)us$/i' => '\\1i',
                '/(ax|test)is$/i' => '\\1es',
                '/s$/i' => 's',
                '/$/' => 's'
            ],
            'INFLECTOR_SINGULAR' => [
                '/(quiz)zes$/i' => '\\1',
                '/(matr)ices$/i' => '\\1ix',
                '/(vert|ind)ices$/i' => '\\1ex',
                '/^(ox)en/i' => '\\1',
                '/(alias|status)es$/i' => '\\1',
                '/([octop|vir])i$/i' => '\\1us',
                '/(cris|ax|test)es$/i' => '\\1is',
                '/(shoe)s$/i' => '\\1',
                '/(o)es$/i' => '\\1',
                '/(bus)es$/i' => '\\1',
                '/([m|l])ice$/i' => '\\1ouse',
                '/(x|ch|ss|sh)es$/i' => '\\1',
                '/(m)ovies$/i' => '\\1ovie',
                '/(s)eries$/i' => '\\1eries',
                '/([^aeiouy]|qu)ies$/i' => '\\1y',
                '/([lr])ves$/i' => '\\1f',
                '/(tive)s$/i' => '\\1',
                '/(hive)s$/i' => '\\1',
                '/([^f])ves$/i' => '\\1fe',
                '/(^analy)ses$/i' => '\\1sis',
                '/((a)naly|(b)a|(d)iagno|(p)arenthe|(p)rogno|(s)ynop|(t)he)ses$/i' => '\\1\\2sis',
                '/([ti])a$/i' => '\\1um',
                '/(n)ews$/i' => '\\1ews'
            ],
            'INFLECTOR_UNCOUNTABLE' => [
                0 => '装备',
                1 => '信息',
                2 => '大米',
                3 => '钱',
                4 => '物种',
                5 => '系列',
                6 => '鱼',
                7 => '羊'
            ],
            'INFLECTOR_IRREGULAR' => [
                'person' => '人员',
                'man' => '男人',
                'child' => '儿童',
                'sex' => '性别',
                'move' => '移动'
            ],
            'INFLECTOR_ORDINALS' => [
                'default' => 'th',
                'first' => 'st',
                'second' => 'md',
                'third' => 'rd'
            ],
            'NICETIME' => [
                'NO_DATE_PROVIDED' => '无日期信息',
                'BAD_DATE' => '无效日期',
                'AGO' => '前',
                'FROM_NOW' => '距今',
                'JUST_NOW' => '刚刚',
                'SECOND' => '秒',
                'MINUTE' => '分钟',
                'HOUR' => '小时',
                'DAY' => '天',
                'WEEK' => '周',
                'MONTH' => '月',
                'YEAR' => '年',
                'DECADE' => '十年',
                'SEC' => '秒',
                'MIN' => '分钟',
                'HR' => '小时',
                'WK' => '周',
                'MO' => '月',
                'YR' => '年',
                'DEC' => '年代',
                'SECOND_PLURAL' => '秒',
                'MINUTE_PLURAL' => '分',
                'HOUR_PLURAL' => '小时',
                'DAY_PLURAL' => '天',
                'WEEK_PLURAL' => '周',
                'MONTH_PLURAL' => '月',
                'YEAR_PLURAL' => '年',
                'DECADE_PLURAL' => '十年',
                'SEC_PLURAL' => '秒',
                'MIN_PLURAL' => '分',
                'HR_PLURAL' => '时',
                'WK_PLURAL' => '周',
                'MO_PLURAL' => '月',
                'YR_PLURAL' => '年',
                'DEC_PLURAL' => '年代'
            ],
            'FORM' => [
                'VALIDATION_FAIL' => '<b>验证失败：</b>',
                'INVALID_INPUT' => '无效输入',
                'MISSING_REQUIRED_FIELD' => '必填字段缺失：'
            ],
            'MONTHS_OF_THE_YEAR' => [
                0 => '1月',
                1 => '2月',
                2 => '3月',
                3 => '4月',
                4 => '5月',
                5 => '6月',
                6 => '7月',
                7 => '8月',
                8 => '9月',
                9 => '10月',
                10 => '11月',
                11 => '12月'
            ],
            'DAYS_OF_THE_WEEK' => [
                0 => '星期一',
                1 => '星期二',
                2 => '星期三',
                3 => '星期四',
                4 => '星期五',
                5 => '星期六',
                6 => '星期日'
            ],
            'YES' => '是',
            'NO' => '否',
            'CRON' => [
                'EVERY' => '每隔',
                'EVERY_HOUR' => '每小时',
                'EVERY_MINUTE' => '每分钟',
                'EVERY_DAY_OF_WEEK' => '一周中的每一天',
                'EVERY_DAY_OF_MONTH' => '月份中的每一天',
                'EVERY_MONTH' => '每月',
                'TEXT_PERIOD' => '所有 <b />',
                'TEXT_MINS' => ' 在 <b /> 小时过后的分钟',
                'TEXT_TIME' => ' 在 <b />:<b />',
                'TEXT_DOW' => ' on <b />',
                'TEXT_MONTH' => ' of <b />',
                'TEXT_DOM' => ' on <b />',
                'ERROR1' => '不支持分享类型 %s',
                'ERROR2' => '无效数字',
                'ERROR3' => '请在 jqCron 设置中设定 jquery_element',
                'ERROR4' => '无法识别表达式'
            ]
        ]
    ]
];
