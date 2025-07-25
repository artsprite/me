<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/me/website/system/languages/gl.yaml',
    'modified' => 1730133084,
    'size' => 3658,
    'data' => [
        'GRAV' => [
            'FRONTMATTER_ERROR_PAGE' => '---
título: %1$s
---

# Erro: Limiar incorrecto

Ruta: `%2$s`

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
                '/(alias|status)/i' => '\\1',
                '/(octop|vir)us$/i' => '\\1',
                '/(ax|test)is$/i' => '\\1es',
                '/s$/i' => 's',
                '/$/' => 's'
            ],
            'INFLECTOR_SINGULAR' => [
                '/(quiz)zes$/i' => '\\1ces',
                '/(matr)ices$/i' => '\\1ix',
                '/(vert|ind)ices$/i' => '\\1ex',
                '/^(ox)en/i' => '\\1',
                '/(alias|status)es$/i' => '\\1',
                '/([octop|vir])i$/i' => '\\1',
                '/(cris|ax|test)es$/i' => '\\1es',
                '/(shoe)s$/i' => '\\1',
                '/(o)es$/i' => '\\1',
                '/(bus)es$/i' => '\\1',
                '/([m|l])ice$/i' => '\\1ouse',
                '/(x|ch|ss|sh)es$/i' => '\\1',
                '/(m)ovies$/i' => '\\1ovie',
                '/(s)eries$/i' => '\\1eries',
                '/([^aeiouy]|qu)ies$/i' => '\\1',
                '/([lr])ves$/i' => '\\1f',
                '/(tive)s$/i' => '\\1',
                '/(hive)s$/i' => '\\1',
                '/([^f])ves$/i' => '\\1fe',
                '/(^analy)ses$/i' => '\\1se',
                '/((a)naly|(b)a|(d)iagno|(p)arenthe|(p)rogno|(s)ynop|(t)he)ses$/i' => '\\1\\2se',
                '/([ti])a$/i' => '\\1um',
                '/(n)ews$/i' => '\\1ews'
            ],
            'INFLECTOR_UNCOUNTABLE' => [
                0 => 'equipo',
                1 => 'información',
                2 => 'arroz',
                3 => 'diñeiro',
                4 => 'especies',
                5 => 'series',
                6 => 'peixe',
                7 => 'ovella'
            ],
            'INFLECTOR_IRREGULAR' => [
                'person' => 'xente',
                'man' => 'home',
                'child' => 'neno',
                'sex' => 'sexos',
                'move' => 'move'
            ],
            'INFLECTOR_ORDINALS' => [
                'default' => 'º',
                'first' => 'º',
                'second' => 'º',
                'third' => 'º'
            ],
            'NICETIME' => [
                'NO_DATE_PROVIDED' => 'Non fornece unha data',
                'BAD_DATE' => 'Data errada',
                'AGO' => 'hai',
                'FROM_NOW' => 'dende agora',
                'JUST_NOW' => 'xusto agora',
                'SECOND' => 'segundo',
                'MINUTE' => 'minuto',
                'HOUR' => 'hora',
                'DAY' => 'día',
                'WEEK' => 'semana',
                'MONTH' => 'mes',
                'YEAR' => 'ano',
                'DECADE' => 'década',
                'SEC' => 'seg',
                'MIN' => 'min',
                'HR' => 'hr',
                'WK' => 'Sem',
                'MO' => 'm',
                'YR' => 'a',
                'DEC' => 'dec',
                'SECOND_PLURAL' => 'segundos',
                'MINUTE_PLURAL' => 'minutos',
                'HOUR_PLURAL' => 'horas',
                'DAY_PLURAL' => 'días',
                'WEEK_PLURAL' => 'semanas',
                'MONTH_PLURAL' => 'meses',
                'YEAR_PLURAL' => 'anos',
                'DECADE_PLURAL' => 'décadas',
                'SEC_PLURAL' => 'segs',
                'MIN_PLURAL' => 'mins',
                'HR_PLURAL' => 'hrs',
                'WK_PLURAL' => 'sem',
                'MO_PLURAL' => 'mes',
                'YR_PLURAL' => 'a',
                'DEC_PLURAL' => 'deca'
            ],
            'FORM' => [
                'VALIDATION_FAIL' => '<b>Fallou a validación:</b>',
                'INVALID_INPUT' => 'Entrada incorrecta en',
                'MISSING_REQUIRED_FIELD' => 'Falta un campo requirido:',
                'XSS_ISSUES' => 'Detectáronse posibles problemas XSS no campo \'% s\''
            ],
            'MONTHS_OF_THE_YEAR' => [
                0 => 'xaneiro',
                1 => 'febreiro',
                2 => 'marzo',
                3 => 'abril',
                4 => 'maio',
                5 => 'xuño',
                6 => 'xullo',
                7 => 'agosto',
                8 => 'setembro',
                9 => 'outubro',
                10 => 'novembro',
                11 => 'decembro'
            ],
            'DAYS_OF_THE_WEEK' => [
                0 => 'luns',
                1 => 'martes',
                2 => 'mércores',
                3 => 'xoves',
                4 => 'venres',
                5 => 'sábado',
                6 => 'domingo'
            ],
            'YES' => 'Si',
            'NO' => 'Non',
            'CRON' => [
                'EVERY' => 'cada',
                'EVERY_HOUR' => 'Cada hora',
                'EVERY_MINUTE' => 'Cada minuto',
                'EVERY_DAY_OF_WEEK' => 'cada día da semana',
                'EVERY_DAY_OF_MONTH' => 'cada día do mes',
                'EVERY_MONTH' => 'cada mes',
                'TEXT_PERIOD' => 'Cada <b />',
                'TEXT_MINS' => ' dentro de <b /> minuto(s) despois da hora',
                'TEXT_TIME' => ' dentro <b />:<b />',
                'TEXT_DOW' => ' o <b />',
                'TEXT_MONTH' => ' de <b />',
                'TEXT_DOM' => ' o <b />',
                'ERROR1' => 'A etiqueta %s non é compatíbel!',
                'ERROR2' => 'Mal número de elementos',
                'ERROR3' => 'O jquery_element debería estar determinado na configuración de jqCron',
                'ERROR4' => 'Expresión non recoñecida'
            ]
        ]
    ]
];
