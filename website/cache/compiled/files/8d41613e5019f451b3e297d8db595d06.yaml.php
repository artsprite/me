<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/me/website/system/languages/th.yaml',
    'modified' => 1730133084,
    'size' => 4838,
    'data' => [
        'GRAV' => [
            'FRONTMATTER_ERROR_PAGE' => '---
title: %1$s
---

# Error: Invalid Frontmatter

Path: `%2$s`

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
                0 => 'อุปกรณ์',
                1 => 'ข้อมูล',
                2 => 'ข้าว',
                3 => 'เงิน',
                4 => 'สายพันธุ์',
                5 => 'ซีรีส์',
                6 => 'ปลา',
                7 => 'แกะ'
            ],
            'INFLECTOR_IRREGULAR' => [
                'person' => 'คน',
                'man' => 'ผู้ชาย',
                'child' => 'เด็กเด็ก',
                'sex' => 'เพศ',
                'move' => 'ย้าย'
            ],
            'INFLECTOR_ORDINALS' => [
                'default' => 'th',
                'first' => 'st',
                'second' => 'nd',
                'third' => 'rd'
            ],
            'NICETIME' => [
                'NO_DATE_PROVIDED' => 'ไม่มีวันที่ให้',
                'BAD_DATE' => 'รูปแบบวันที่ผิด',
                'AGO' => 'ที่ผ่านมา',
                'FROM_NOW' => 'จากตอนนี้',
                'JUST_NOW' => 'เมื่อกี้',
                'SECOND' => 'วินาที',
                'MINUTE' => 'นาที',
                'HOUR' => 'ชั่วโมง',
                'DAY' => 'วัน',
                'WEEK' => 'สัปดาห์',
                'MONTH' => 'เดือน',
                'YEAR' => 'ปี',
                'DECADE' => 'ทศวรรษที่ผ่านมา',
                'SEC' => 'วิ',
                'MIN' => 'นาที',
                'HR' => 'ชม.',
                'WK' => 'wk',
                'MO' => 'mo',
                'YR' => 'yr',
                'DEC' => 'dec',
                'SECOND_PLURAL' => 'วินาที',
                'MINUTE_PLURAL' => 'นาที',
                'HOUR_PLURAL' => 'ชั่วโมง',
                'DAY_PLURAL' => 'วัน',
                'WEEK_PLURAL' => 'สัปดาห์',
                'MONTH_PLURAL' => 'เดือน',
                'YEAR_PLURAL' => 'ปี',
                'DECADE_PLURAL' => 'ทศวรรษที่ผ่านมา',
                'SEC_PLURAL' => 'วินาที',
                'MIN_PLURAL' => 'นาที',
                'HR_PLURAL' => 'ชั่วโมง',
                'WK_PLURAL' => 'wks',
                'MO_PLURAL' => 'mos',
                'YR_PLURAL' => 'ปี',
                'DEC_PLURAL' => 'decs'
            ],
            'FORM' => [
                'VALIDATION_FAIL' => '<b>ตรวจสอบล้มเหลว: </b>',
                'INVALID_INPUT' => 'ป้อนข้อมูลไม่ถูกต้องใน',
                'MISSING_REQUIRED_FIELD' => 'ขาดข้อมูลที่จำเป็น:',
                'XSS_ISSUES' => 'ตรวจพบปัญหา XSS ที่เป็นไปได้ในฟิลด์ \'%s\''
            ],
            'MONTHS_OF_THE_YEAR' => [
                0 => 'มกราคม',
                1 => 'กุมภาพันธ์',
                2 => 'มีนาคม',
                3 => 'เมษายน',
                4 => 'พฤษภาคม',
                5 => 'มิถุนายน',
                6 => 'กรกฏาคม',
                7 => 'สิงหาคม',
                8 => 'กันยายน',
                9 => 'ตุลาคม',
                10 => 'พฤศจิกายน',
                11 => 'ธันวาคม'
            ],
            'DAYS_OF_THE_WEEK' => [
                0 => 'จันทร์',
                1 => 'อังคาร',
                2 => 'พุธ',
                3 => 'พฤหัสบดี',
                4 => 'ศุกร์',
                5 => 'เสาร์',
                6 => 'อาทิตย์'
            ],
            'YES' => 'ใช่',
            'NO' => 'ไม่',
            'CRON' => [
                'EVERY' => 'ทุก ๆ',
                'EVERY_HOUR' => 'ทุกชั่วโมง',
                'EVERY_MINUTE' => 'ทุกนาที',
                'EVERY_DAY_OF_WEEK' => 'ทุกวันในสัปดาห์',
                'EVERY_DAY_OF_MONTH' => 'ทุกวันของเดือน',
                'EVERY_MONTH' => 'ทุกเดือน',
                'TEXT_PERIOD' => 'ทุก ๆ <b />',
                'TEXT_MINS' => ' ที่ <b /> นาทีที่ผ่านไปแล้ว',
                'TEXT_TIME' => ' เวลา <b />:<b />',
                'TEXT_DOW' => ' บน <b />',
                'TEXT_MONTH' => ' จาก <b />',
                'TEXT_DOM' => ' บน <b />',
                'ERROR1' => 'ไม่รองรับแท็ก %s!',
                'ERROR2' => 'จำนวนองค์ประกอบไม่ดี',
                'ERROR3' => 'ควรตั้งค่า jquery_element เป็นการตั้งค่า jqCron',
                'ERROR4' => 'นิพจน์ที่ไม่รู้จัก'
            ]
        ]
    ]
];
