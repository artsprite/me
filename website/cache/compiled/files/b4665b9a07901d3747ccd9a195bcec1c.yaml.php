<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/me/website/user/plugins/login/languages/lt.yaml',
    'modified' => 1730133084,
    'size' => 13307,
    'data' => [
        'PLUGIN_LOGIN' => [
            'USERNAME' => 'Vartotojo vardas',
            'EMAIL' => 'El. paštas',
            'USERNAME_EMAIL' => 'Vartotojo vardas/El. paštas',
            'PASSWORD' => 'Slaptažodis',
            'ACCESS_DENIED' => 'Priįjimo nėra...',
            'LOGIN_FAILED' => 'Prisijungimas nepavyko...',
            'LOGIN_SUCCESSFUL' => 'Sėkmingai prisijungėte.',
            'BTN_LOGIN' => 'Prisijungti',
            'BTN_LOGOUT' => 'Atsijungti',
            'BTN_FORGOT' => 'Pamiršau',
            'BTN_REGISTER' => 'Registruotis',
            'BTN_SUBMIT_PROFILE' => 'Siųsti',
            'BTN_RESET' => 'Atstatyti',
            'BTN_RESET_PASSWORD' => 'Atstatyti slpatažodį',
            'BTN_SEND_INSTRUCTIONS' => 'Siųsti atstatymo instrukcijas',
            'BTN_SUBMIT' => 'Siųsti',
            'RESET_LINK_EXPIRED' => 'Atstatymo nuoroda nebegalioja, bandykite dar kartą',
            'RESET_PASSWORD_RESET' => 'Slaptažodis atstatytas',
            'RESET_INVALID_LINK' => 'Panaudota neteisinga atstatymo nuoroda, bandykite dar kartą',
            'FORGOT_INSTRUCTIONS_SENT_VIA_EMAIL' => 'Jeigu vartotojo paskyra egzistuoja, slaptažodžio atstatymo instrukcijos buvo išsiųstos el. paštu',
            'FORGOT_FAILED_TO_EMAIL' => 'Instrukcijų išsiuntimas nepavyko, bandykite dar kartą',
            'FORGOT_EMAIL_NOT_CONFIGURED' => 'Negalima atstatyti slaptažodžio. Ši svetainė nenustatyta siųsti el. laiškus',
            'FORGOT_EMAIL_SUBJECT' => '%s slaptažodžio atstatymo užklausa',
            'FORGOT_EMAIL_BODY' => '<h1>Slaptažodis atstatytas</h1><p>Miela(s) %1$s,</p><p><b>%4$s</b> buvo gauta užklausa jūsų slaptažodžio atstatymui.</p><p><br /><a href="%2$s" class="btn-primary">Paspauskite čia norėdami atstatyti slaptažodį</a><br /><br /></p><p>Taip pat galite nukopijuoti sekančią nuorodą į savo naršyklės adreso juostą:</p> <p class="word-break"><a href="%2$s">%2$s</a></p> <p><br />Linkėjimai,<br /><br />%3$s</p>',
            'SESSION' => '&ldquo;Prisiminti mane&rdquo;-sesija',
            'REMEMBER_ME' => 'Prisiminti',
            'REMEMBER_ME_HELP' => 'Nustato sausainiuką (Cookie) jūsų naršyklėje, kad būtų palaikomas pastovus prisijungimas tarp sesijų.',
            'REMEMBER_ME_STOLEN_COOKIE' => 'Kažkas pasinaudojo jūsų prisijungimo informacija šioje svetainėje! Visos sesijos buvo atjungtos. Prašome prisijungti su savo prisijungimais ir patikrinti duomenis.',
            'BUILTIN_CSS' => 'Naudoti įdiegtą CSS',
            'BUILTIN_CSS_HELP' => 'Naudoti CSS, pateiktą su Admin įskiepiu',
            'ROUTE' => 'Prisijungimo kelias',
            'ROUTE_HELP' => 'Suasmenintas kelias (route) į suasmenintą prisijungimo puslapį, kurį pateikia esama tema',
            'ROUTE_REGISTER' => 'Registracijos kelias',
            'ROUTE_REGISTER_HELP' => 'Kelias (route) į registracijos puslapį. Nurodykite, jei norite naudoti įdiegtą registracijos puslapį. Palikite tuščią, jei naudojate savo registracijos formą',
            'USERNAME_NOT_VALID' => 'Vartotojo vardas turi būti nuo 3-jų iki 16-os simbolių, įskaitant mažąsias raides, numerius, brūkšnius bei pabraukimus. Didžiosios raidės, tarpai ir specialūs simboliai neleidžiami',
            'USERNAME_NOT_AVAILABLE' => '%s vartotojas jau egzistuoja, pasirinkite kitą vartotojo vardą',
            'EMAIL_NOT_AVAILABLE' => '%s el. paštas jau egzistuoja, pasirinkite kitą el. pašto adresą',
            'PASSWORD_NOT_VALID' => 'Slaptažodyje turi būti bent vienas skaičius ir bent po vieną didžiąją bei bažąją raidę. Taip pat turi būti 8 ar daugiau simbolių',
            'PASSWORDS_DO_NOT_MATCH' => 'Slaptažodžiai nesutampa. Patikrinkite dar kartą ar įvedėte tą patį slaptažodį abu kartus',
            'USER_NEEDS_EMAIL_FIELD' => 'Vartotojui reikalingas el. pašto laukas',
            'EMAIL_SENDING_FAILURE' => 'Įvyko klaida siunčiant laišką',
            'ACTIVATION_EMAIL_SUBJECT' => 'Aktyvuokite savo paskyrą %s',
            'ACTIVATION_EMAIL_BODY' => '<h1>Paskyros aktyvacija</h1><p>Labas %1$s, </p><p>Jūsų paskyra sėkmingai sukurta <b>%3$s</b>, bet negalėsite prisijungti kol ji nebus aktyvuota.</p><p><br/><a href="%2$s" class="btn-primary">Aktyvuokite paskyrą dabar</a><br/><br/></p><p>Taip pat galite nukopijuoti sekančią nuorodą į savo naršyklės adreso juostą:</p><p class="word-break"><a href="%2$s">%2$s</a></p><p><br/>Linkėjimai,<br/><br/>%4$s</p>',
            'ACTIVATION_NOTICE_MSG' => 'Labas %s, jūsų paskyra sukurta, patikrinkite savo el. paštą, kad pilnai aktyvuotumėt',
            'WELCOME_EMAIL_SUBJECT' => 'Sveiki atvykę į %s',
            'WELCOME_EMAIL_BODY' => '<h1>Paskyra sukurta</h1><p>Labas %1$s, </p><p>Jūsų paskyra sėkmingai sukurta <b>%3$s</b>.</p><p><br/><a href="%2$s" class="btn-primary">Prisijunkite dabar</a><br/><br/></p><p>Taip pat galite nukopijuoti sekančią nuorodą į savo naršyklės adreso juostą:</p><p class="word-break"><a href="%2$s">%2$s</a></p><p><br/>Linkėjimai,<br/><br/>%4$s</p>',
            'WELCOME_NOTICE_MSG' => 'Labas %s, jūsų paskyra sėkmingai sukurta',
            'NOTIFICATION_EMAIL_SUBJECT' => 'Naujas vartotojas %s',
            'NOTIFICATION_EMAIL_BODY' => '<h1>Naujas vartotojas</h1><p>Labas, naujas vartotojas užsiregistravo %1$s.</p><p><ul><li>Vartotojo vardas: <b>%2$s</b></li><li>El. paštas: <b>%3$s</b></ul><p><p><br/><a href="%4$s" class="btn-primary">Aplankykite %1$s</a><br/><br/></p>',
            'EMAIL_FOOTER' => 'GetGrav.org',
            'ACTIVATION_LINK_EXPIRED' => 'Aktyvacijos nuoroda nebegalioja',
            'USER_ACTIVATED_SUCCESSFULLY' => 'Vartotojo paskyra sėkmingai aktyvuota',
            'USER_ACTIVATED_SUCCESSFULLY_NOT_ENABLED' => 'Vartotojo paskyra aktyvuota, tačiau ji yra peržiūrima',
            'INVALID_REQUEST' => 'Bloga užklausa',
            'USER_REGISTRATION' => 'Vartotojo registracija',
            'USER_REGISTRATION_ENABLED_HELP' => 'Įjungti vartotojų registraciją',
            'VALIDATE_PASSWORD1_AND_PASSWORD2' => 'Tikrinti dukart įvestą slaptažodį',
            'VALIDATE_PASSWORD1_AND_PASSWORD2_HELP' => 'Patikrinti ir palyginti du skirtingus slaptažodžių laukus pavadinimais `password1` ir `password2`. Įjunkite, jei registracijos formoje turite du slaptažodžių laukus',
            'SET_USER_DISABLED' => 'Nustatyti vartotoją kaip išjungtą',
            'SET_USER_DISABLED_HELP' => 'Geriausia naudoti kartu su `Siųsti aktyvacijos laišką` el. laišku. Prideda vartotoją prie Grav, bet nustato kaip išjungtą',
            'LOGIN_AFTER_REGISTRATION' => 'Po registracijos vartotoją prijungti',
            'LOGIN_AFTER_REGISTRATION_HELP' => 'Po registracijos iš karto prijungti vartotoją. Jei reikalaujama el. pašto aktyvacija, vartotojas bus prijungtas iš karto aktyvavus paskyrą',
            'SEND_ACTIVATION_EMAIL' => 'Siųsti aktyvacijos laišką',
            'SEND_ACTIVATION_EMAIL_HELP' => 'Siunčia vartotojui laišką aktyvuoti paskyrą. Naudojant šį nustatymą, įjunkite `Nustatyti vartotoją kaip išjungtą` nuostatą, kad vartotojas būtų išjungtas ir išsiųstas paskyros aktyvacijos laiškas',
            'SEND_NOTIFICATION_EMAIL' => 'Siųsti pranešimo laišką',
            'SEND_NOTIFICATION_EMAIL_HELP' => 'Pranša puslapio administratoriui, kad užsiregistravo naujas vartotojas. Laiškas bus išsiųstas `Kam` lauke nurodytu adresu El. Pašto įskiepio nustatymuose',
            'SEND_WELCOME_EMAIL' => 'Siųsti pasveikinimo laišką',
            'SEND_WELCOME_EMAIL_HELP' => 'Siųs laišką naujai užsiregistravusiam vartotojui',
            'DEFAULT_VALUES' => 'Reikšmės pagal nutylėjimą',
            'DEFAULT_VALUES_HELP' => 'Susijusių laukų pavadinimų ir reikšmių sąrašas, kuris bus pridėtas prie vartotojo profilio (yaml byloje) pagal nutylėjimą, be vartotojo rankinio konfigūravimo. Atskirkite kelias reikšmes kableliu be tarpų tarp reikšmių',
            'ADDITIONAL_PARAM_KEY' => 'Parametras',
            'ADDITIONAL_PARAM_VALUE' => 'Reikšmė',
            'REGISTRATION_FIELDS' => 'Registracijos laukai',
            'REGISTRATION_FIELDS_HELP' => 'Pridėkite laukus, kurie bus pridėti prie vartotojo Yaml bylos. Čia nenurodyti laukai nebus pridėti, net jei jie bus įvesti registracijos formoje',
            'REGISTRATION_FIELD_KEY' => 'Lauko pavadinimas',
            'REDIRECT_TO_LOGIN' => 'Nukreipti į prisijungimą',
            'REDIRECT_TO_LOGIN_HELP' => 'Ar vartotojas turėtų būti nukreiptas į prisijungimo langą, ar rodyti prisijungimą tame pačiame kelyje?',
            'REDIRECT_AFTER_LOGIN' => 'Nukreipti po prisijungimo',
            'REDIRECT_AFTER_LOGIN_HELP' => 'Ar vartotojas turėtų būti nukreiptas į tam tikrą kelią po prisijungimo?',
            'ROUTE_AFTER_LOGIN' => 'Kelias po prisijungimo',
            'ROUTE_AFTER_LOGIN_HELP' => 'Kelias (route) į kurį nukreipti po prisijungimo',
            'REDIRECT_AFTER_LOGOUT' => 'Nukreipti po atsijungimo',
            'REDIRECT_AFTER_LOGOUT_HELP' => 'Ar vartotojas turėtų būti nukreiptas į tam tikrą kelią po atsijungimo?',
            'ROUTE_AFTER_LOGOUT' => 'Kelias po atsijungimo',
            'ROUTE_AFTER_LOGOUT_HELP' => 'Kelias (route) į kurį nukreipti po atsijungimo',
            'REDIRECT_AFTER_REGISTRATION' => 'Kelias po registracijos',
            'REDIRECT_AFTER_REGISTRATION_HELP' => 'Kelias (route) į kurį nukreipti po registracijos',
            'OPTIONS' => 'Parinktys',
            'EMAIL_VALIDATION_MESSAGE' => 'Turi būti teisingas el. pašto adresas',
            'PASSWORD_VALIDATION_MESSAGE' => 'Slaptažodyje turi būti bent vienas skaičius ir bent po vieną didžiąją bei bažąją raidę. Taip pat turi būti 8 ar daugiau simbolių',
            'TIMEOUT_HELP' => 'Nustato sesijos galiojimo trukmę, kai `Pisiminti` įjungta ir vartotojo pažymėta. Mažiausiai yra 604800, t. y. viena savaitė',
            'GROUPS_HELP' => 'Grupių, kurioms priklausys naujai užsiregistravęs vartotojas, sąrašas, jei nurodyta',
            'SITE_ACCESS_HELP' => 'Puslapio priėjimo lygių, kuriems priklausys naujai užsiregistravęs vartotojas, sąrašas. Pvz.: `login` -> `true` ',
            'WELCOME' => 'Sveiki atvykę',
            'REDIRECT_AFTER_ACTIVATION' => 'Kelias po vartotojo aktyvacijos',
            'REDIRECT_AFTER_ACTIVATION_HELP' => 'Naudojama, jei vartotojo reikalaujama paštu aktyvuoti paskyrą. Jei aktyvuota, bus rodomas šis kelias (route)',
            'REGISTRATION_DISABLED' => 'Registracija išjungta',
            'USE_PARENT_ACL_LABEL' => 'Naudoti tėvinius leidimus',
            'USE_PARENT_ACL_HELP' => 'Jei nenurodytos taisyklės, tikrinti tėvinius leidimus',
            'PROTECT_PROTECTED_PAGE_MEDIA_LABEL' => 'Saugoti prisijungimu apsaugotų puslapių mediją',
            'PROTECT_PROTECTED_PAGE_MEDIA_HELP' => 'Jei įjungta, prisijungimu apsaugotų puslapių medija bus taip pat apsaugota prisijungimu ir negalės būti peržiūrėta neprisijungus',
            'SECURITY_TAB' => 'Apsauga',
            'MAX_RESETS_COUNT' => 'Maks. slaptažodžio atstatymų skaičius',
            'MAX_RESETS_COUNT_HELP' => 'Slaptažodžio atstatymo srauto apsaugos nustatymas (0 - neribojama)',
            'MAX_RESETS_INTERVAL' => 'Maks. slaptažodžio atstatymų intervalas',
            'MAX_RESETS_INTERVAL_HELP' => 'Laiko intervalas tarp maks. slaptažodžio atstatymų skaičiaus',
            'FORGOT_CANNOT_RESET_IT_IS_BLOCKED' => 'Negalima atstatyti %s slaptažodžio, atstatymo fukcija laikinai užblokuota, pabandykite vėliau (daugiausia už %s minučių)',
            'MAX_LOGINS_COUNT' => 'Maks. prisijungimų skaičius',
            'MAX_LOGINS_COUNT_HELP' => 'Srauto apsaugos nustatymas (0 - neribojama)',
            'MAX_LOGINS_INTERVAL' => 'Maks. prisijungimų intervalas',
            'MAX_LOGINS_INTERVAL_HELP' => 'Laiko intervalas tarp maks. prisijungimų skaičiaus',
            'TOO_MANY_LOGIN_ATTEMPTS' => 'Viršytas klaidingų prisijungimų bandymų skaičius per nustatytą laiką (%s minučių)',
            'SECONDS' => 'sekundės',
            'MINUTES' => 'minutės',
            'RESETS' => 'atstatymai',
            'ATTEMPTS' => 'bandymai',
            'ROUTES' => 'Keliai',
            'ROUTE_FORGOT' => 'Pamiršto slaptažodžio kelias',
            'ROUTE_RESET' => 'Slaptažodžio atstatymo kelias',
            'ROUTE_PROFILE' => 'Vartotojo profilio kelias',
            'ROUTE_ACTIVATE' => 'Vartotojo aktyvacijos kelias',
            'LOGGED_OUT' => 'Jūs buvote sėkmingai atjungtas...',
            'PAGE_RESTRICTED' => 'Priėjimas ribojamas, prisijunkite...',
            'DYNAMIC_VISIBILITY' => 'Dinaminis puslapio matomumas',
            'DYNAMIC_VISIBILITY_HELP' => 'Leidžia dinamiškai apdoroti puslapio matomumą, paremtą leidimai, jei `login.visibility_requires_access` yra nustatyta `true` reikšmė puslapyje',
            'USER_IS_REMOTE_ONLY' => 'Šis vartotojas autorizavosi nuotoliniu servisu, todėl profilis negali būti išsaugotas',
            '2FA_TITLE' => '2-jų lygių autorizacija',
            '2FA_INSTRUCTIONS' => '##### 2-jų lygių autorizacija
Jūsų paskyrai yra įjungta **2FA**. Norėdami prisijungti, įveskite **6-ių skaitmenų kodą** naudodami **2FA** programėlę.',
            '2FA_REGEN_HINT' => 'Slapto kodo pergeneravimas pareikalaus atnaujinti ir autorizacijos programėlę',
            '2FA_FAILED' => 'Neteisingas 2-jų lygių autorizacijos kodas, bandykite dar kartą...',
            '2FA_ENABLED' => '2FA įjungta',
            '2FA_ENABLED_HELP' => 'Įjungia 2-jų lygių autorizaciją visiems vartotojams',
            '2FA_CODE_INPUT' => '000000',
            '2FA_SECRET' => '2FA slaptas kodas',
            '2FA_SECRET_HELP' => 'Nuskenuokite šį QR kodą savo [autorizacijos programėlėje](https://learn.getgrav.org/admin-panel/2fa#apps). Taip pat patartina išsisaugoti slaptą kodą patikimoje vietoje, jei tektų iš naujo įdiegti programėlę. Daugiau informacijos rasite [Grav dokumentacijoje](https://learn.getgrav.org/admin-panel/2fa) ',
            '2FA_REGENERATE' => 'Pergeneruoti',
            'BTN_CANCEL' => 'Atšaukti',
            'MANUALLY_ENABLE' => 'Įjungti rankiniu būdu',
            'MANUALLY_ENABLE_HELP' => 'Kai naudojami aktyvacijos ir pranešimų laiškai, galite užtikrinti, kad vartotojai patys aktyvuotųsi, bet reikalautų rankinės aktyvacijos prisijungimui',
            'IPV6_SUBNET_SIZE' => 'IPv6 potinklio dydis',
            'IPV6_SUBNET_SIZE_HELP' => 'IPv6 adresų kiekis paprastai priskirtų mašinai',
            'PROFILE_UPDATED' => 'Jūsų profilis atnaujintas',
            'ENTER_EMAIL' => 'Įveskite savo el. paštą',
            'ENTER_NEW_PASSWORD' => 'Įveskite naują slaptažodį',
            'ENTER_PASSWORD' => 'Įveskite slaptažodį',
            'ENTER_PASSWORD_AGAIN' => 'Pakartokite slaptažodį',
            'REGISTRATION_THANK_YOU' => 'Ačiū, kad užsiregistravote.',
            'USER_ACCOUNT_DISABLED' => 'Jūsų vartotojo paskyra išjungta arba dar nebuvo aktyvuota.',
            'SESSION_USER_SYNC' => 'Sinchronizuoti vartotoją sesijoje',
            'SESSION_USER_SYNC_HELP' => 'Jei įjungta, sesijos vartotojas sinchronizuojamas su saugoma vartotojo byla. ĮSPĖJIMAS: Ši funkcija gali sugadinti kai kuriuos esančius įskiepius, kurie atnaujina vartotojo objektą sesijoje neišsaugant jo failų sistemoje naudojant `$user->save()` metodą.'
        ]
    ]
];
