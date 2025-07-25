<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/me/website/system/languages/sr.yaml',
    'modified' => 1730133084,
    'size' => 4323,
    'data' => [
        'GRAV' => [
            'FRONTMATTER_ERROR_PAGE' => '---
наслов: %1$s
---

# Грешка: неисправан Frontmatter

Путања: `%2$s`

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
                0 => 'опрема',
                1 => 'информација',
                2 => 'пиринач',
                3 => 'новац',
                4 => 'врсте',
                5 => 'серије',
                6 => 'риба',
                7 => 'овца'
            ],
            'INFLECTOR_IRREGULAR' => [
                'person' => 'особе',
                'man' => 'људи',
                'child' => 'деца',
                'sex' => 'полови',
                'move' => 'помери'
            ],
            'INFLECTOR_ORDINALS' => [
                'default' => 'ти',
                'first' => 'први',
                'second' => 'други',
                'third' => 'трећи'
            ],
            'NICETIME' => [
                'NO_DATE_PROVIDED' => 'Нема датума',
                'BAD_DATE' => 'Погрешан датум',
                'AGO' => 'од пре',
                'FROM_NOW' => 'од сада',
                'JUST_NOW' => 'управо сада',
                'SECOND' => 'секунда',
                'MINUTE' => 'минута',
                'HOUR' => 'сат',
                'DAY' => 'дан',
                'WEEK' => 'недеља',
                'MONTH' => 'месец',
                'YEAR' => 'година',
                'DECADE' => 'декада',
                'SEC' => 'сек',
                'MIN' => 'мин',
                'HR' => 'сат',
                'WK' => 'нед',
                'MO' => 'мес',
                'YR' => 'год',
                'DEC' => 'дек',
                'SECOND_PLURAL' => 'секунди',
                'MINUTE_PLURAL' => 'минута',
                'HOUR_PLURAL' => 'сати',
                'DAY_PLURAL' => 'дана',
                'WEEK_PLURAL' => 'недеља',
                'MONTH_PLURAL' => 'месеци',
                'YEAR_PLURAL' => 'године(а)',
                'DECADE_PLURAL' => 'декаде(а)',
                'SEC_PLURAL' => 'сек',
                'MIN_PLURAL' => 'мин',
                'HR_PLURAL' => 'сати',
                'WK_PLURAL' => 'недеља',
                'MO_PLURAL' => 'месеци',
                'YR_PLURAL' => 'година',
                'DEC_PLURAL' => 'декада'
            ],
            'FORM' => [
                'VALIDATION_FAIL' => '<b>Провера неуспела:</b>',
                'INVALID_INPUT' => 'Неисправан унос у',
                'MISSING_REQUIRED_FIELD' => 'Недостаје обавезн поље:',
                'XSS_ISSUES' => 'Потенцијална грешка у XSS-у детектована у пољу \'%s\' '
            ],
            'MONTHS_OF_THE_YEAR' => [
                0 => 'Јануар',
                1 => 'Фебруар',
                2 => 'Март',
                3 => 'Април',
                4 => 'Мај',
                5 => 'Јуни',
                6 => 'Јули',
                7 => 'Август',
                8 => 'Септембар',
                9 => 'Октобар',
                10 => 'Новембар',
                11 => 'Децембар'
            ],
            'DAYS_OF_THE_WEEK' => [
                0 => 'Понедељак',
                1 => 'Уторак',
                2 => 'Среда',
                3 => 'Четвртак',
                4 => 'Петак',
                5 => 'Субота',
                6 => 'Недеља'
            ],
            'YES' => 'Да',
            'NO' => 'Не',
            'CRON' => [
                'EVERY' => 'сваки',
                'EVERY_HOUR' => 'сваки сат',
                'EVERY_MINUTE' => 'сваки минут',
                'EVERY_DAY_OF_WEEK' => 'сваки дан у недељи',
                'EVERY_DAY_OF_MONTH' => 'сваки дан у месецу',
                'EVERY_MONTH' => 'сваки месец',
                'TEXT_PERIOD' => 'Сваки <b />',
                'TEXT_MINS' => ' у <b /> минути(а) прошлог сата',
                'TEXT_TIME' => ' у <b />:<b />',
                'TEXT_DOW' => ' на <b />',
                'TEXT_MONTH' => ' од <b />',
                'TEXT_DOM' => ' на <b />',
                'ERROR1' => 'Таг %s није подржан!',
                'ERROR2' => 'Погрешан број елемената',
                'ERROR3' => 'јquery_element би требао да буде постављен у jqCron подешавању',
                'ERROR4' => 'Непрепознат израз'
            ]
        ]
    ]
];
