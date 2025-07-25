<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/me/website/system/languages/fi.yaml',
    'modified' => 1730133084,
    'size' => 3295,
    'data' => [
        'GRAV' => [
            'FRONTMATTER_ERROR_PAGE' => '---
otsikko: %1$s
---

# Virhe: Virheellinen Frontmatter

Polku: `%2$s`

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
                0 => '',
                1 => '',
                2 => 'riisi',
                3 => 'raha',
                4 => 'lajit',
                5 => '',
                6 => 'kala',
                7 => 'lammas'
            ],
            'INFLECTOR_IRREGULAR' => [
                'person' => 'ihmiset',
                'man' => 'miehet',
                'child' => 'lapset',
                'sex' => 'sukupuoli'
            ],
            'INFLECTOR_ORDINALS' => [
                'default' => '.',
                'first' => '.',
                'second' => '.',
                'third' => '.'
            ],
            'NICETIME' => [
                'NO_DATE_PROVIDED' => 'Päivämäärää ei annettu',
                'BAD_DATE' => 'Virheellinen päivämäärä',
                'AGO' => 'sitten',
                'FROM_NOW' => 'tästä lähtien',
                'JUST_NOW' => 'juuri nyt',
                'SECOND' => 'sekuntti',
                'MINUTE' => 'minuutti',
                'HOUR' => 'tunti',
                'DAY' => 'päivä',
                'WEEK' => 'viikko',
                'MONTH' => 'kuukausi',
                'YEAR' => 'vuosi',
                'DECADE' => 'vuosikymmen',
                'SEC' => 'sek',
                'MIN' => 'min',
                'HR' => 'h',
                'WK' => 'vk',
                'MO' => 'kk',
                'YR' => 'v',
                'DEC' => 'vuosikymmen',
                'SECOND_PLURAL' => 'sekuntia',
                'MINUTE_PLURAL' => 'minuuttia',
                'HOUR_PLURAL' => 'tuntia',
                'DAY_PLURAL' => 'päivää',
                'WEEK_PLURAL' => 'viikkoa',
                'MONTH_PLURAL' => 'kuukautta',
                'YEAR_PLURAL' => 'vuotta',
                'DECADE_PLURAL' => 'vuosikymmentä',
                'SEC_PLURAL' => 'sek',
                'MIN_PLURAL' => 'min',
                'HR_PLURAL' => 'h',
                'WK_PLURAL' => 'v',
                'MO_PLURAL' => 'kk',
                'YR_PLURAL' => 'v',
                'DEC_PLURAL' => 'vuosikymmentä'
            ],
            'FORM' => [
                'VALIDATION_FAIL' => '<b>Vahvistus epäonnistui:</b>',
                'INVALID_INPUT' => 'Syöte ei kelpaa',
                'MISSING_REQUIRED_FIELD' => 'Puuttuva pakollinen kenttä:'
            ],
            'MONTHS_OF_THE_YEAR' => [
                0 => 'Tammikuu',
                1 => 'Helmikuu',
                2 => 'Maaliskuu',
                3 => 'Huhtikuu',
                4 => 'Toukokuu',
                5 => 'Kesäkuuta',
                6 => 'Heinäkuu',
                7 => 'Elokuu',
                8 => 'Syyskuu',
                9 => 'Lokakuu',
                10 => 'Marraskuu',
                11 => 'Joulukuu'
            ],
            'DAYS_OF_THE_WEEK' => [
                0 => 'Maanantai',
                1 => 'Tiistai',
                2 => 'Keskiviikko',
                3 => 'Torstai',
                4 => 'Perjantai',
                5 => 'Lauantai',
                6 => 'Sunnuntai'
            ],
            'CRON' => [
                'EVERY' => 'joka',
                'EVERY_HOUR' => 'joka tunti',
                'EVERY_MINUTE' => 'joka minuutti',
                'EVERY_DAY_OF_WEEK' => 'viikon jokaisena päivänä',
                'EVERY_DAY_OF_MONTH' => 'kuukauden jokaisena päivänä',
                'EVERY_MONTH' => 'joka kuukausi',
                'TEXT_PERIOD' => 'Joka <b />'
            ]
        ]
    ]
];
