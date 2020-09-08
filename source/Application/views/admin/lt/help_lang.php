<?php
/**
 * Copyright © OXID eSales AG. All rights reserved.
 * See LICENSE file for license details.
 */

/**
 * In this file, the content for help popups is stored:
 *
 * Syntax for identifier: HELP_TABNAME_INPUTNAME, e.g. HELP_SHOP_CONFIG_BIDIRECTCROSS.
 * !!!The INPUTNAME is same as in lang.php for avoiding even more different Identifiers.!!!
 * In some cases, in lang.php GENERAL_ identifiers are used. In this file, always the tab name is used.
 *
 *
 * HTML Tags for markup (same as in online manual):
 * <span class='navipath_or_inputname'>...</span> for names of input fields, selectlists and Buttons, e.g. <span class='navipath_or_inputname'>Active</span>
 * <span class='userinput_or_code'>...</span> for input in input fields (also options in selectlists) and code
 * <span class='filename_filepath_or_italic'>...</span> for filenames, filepaths and other italic stuff
 * <span class='warning_or_important_hint'>...</span> for warning and important things
 * <ul> and <li> for lists
 */

$aLang =  [
'charset'                                     => '',

'HELP_SHOP_SYSTEM_OTHERCOUNTRYORDER'          => '' .
                                                 '' .
                                                 '',

'HELP_SHOP_SYSTEM_DISABLENAVBARS'             => 'Jei varnelė uždėta, labiausiai naviguojami elementai nėra rodomi užsakymo siuntimo metu. Todėl vartotojai nereikalingai neblaškomi užsakymo formavimo metu.',

'HELP_SHOP_SYSTEM_DEFAULTIMAGEQUALITY'        => '' .
                                                 ''.
                                                 ''.
                                                 '',

'HELP_SHOP_SYSTEM_LDAP'                       => '',

'HELP_SHOP_SYSTEM_SHOWVARIANTREVIEWS'         => 'Šis parametras nurodo kaip variantų peržiūros yra tvarkomos: Jei parametras yra patikrintas, variantų pastabos taip pat yra rodomos prie prekės.',

'HELP_SHOP_SYSTEM_VARIANTSSELECTION'          => 'Parduotuvėje yra daug prekių priskirtų sąrašams, pavyzdžiui, nuolaidai priskirtos prekės. Jei varnelė uždėta, tada variantai rodomi šiuose sąrašuose.',

'HELP_SHOP_SYSTEM_VARIANTPARENTBUYABLE'       => '' .
                                                 '' .
                                                 '',

'HELP_SHOP_SYSTEM_VARIANTINHERITAMOUNTPRICE'  => 'Čia galite nurodyti pagrindinės prekės kainos paveldimumą variantams. Jei varnelė uždėta, pagrindinės prekės kaina yra priskiriama prekių variantams.',

'HELP_SHOP_SYSTEM_ISERVERTIMESHIFT'           => 'Serveryje parduotuvė gali veikti ir kitoje laiko zonoje. Naudojant šį parametrą laiko poslinkis gali būti koreguojamas: Įveskite valandas, kad galėtumėte pridėti / atimti iš serverio laiką, pvz. <kdb>+2</kdb> arba <kdb>-2</kdb>',

'HELP_SHOP_SYSTEM_INLINEIMGEMAIL'             => 'Jei varnelė uždėta, el. laiškai siunčiami su paveikslėliais. Jei varnelė neuždėta, paveikslėliai yra parsiunčiami el. pašto programos, tada kai atidaromas el. laiškas.',

'HELP_SHOP_SYSTEM_UTILMODULE'                 => '',


'HELP_SHOP_CACHE_ENABLED'                     => 'Jei dinaminio turinio kešavimas yra aktyvus, papildomas turinys yra kešuojamas padidintu efektyvumu. Deaktyvuokite šiuos nustatymus, tol kol bus adaptuota parduotuvei (įrašymo moduliai, šablonų adaptavimas ir tt.).',

'HELP_SHOP_CACHE_LIFETIME'                    => 'Čia galite nustatyti, kiek sekundžių kešuojamas turinys yra saugomas iki atnaujinimo. Numatytas nustatymas yra 36000 sekundžių.',

'HELP_SHOP_CACHE_CLASSES'                     => 'Čia jūs nustatote, kurios matomos klasės yra kešuojamos.<br /> Tik pakeiskite šį nustatymą, jei jis artimas su kitais kešavimo mechanizmais!',

'HELP_SHOP_CACHE_REVERSE_PROXY_ENABLED'       => '',

'HELP_SHOP_CACHE_LAYOUT_CACHE_AGE'            => '',

'HELP_SHOP_CONFIG_ORDEROPTINEMAIL'            => '' .
                                                 '',

'HELP_SHOP_CONFIG_BIDIRECTCROSS'              => '' .
                                                 '',

'HELP_SHOP_CONFIG_STOCKONDEFAULTMESSAGE'      => '' .
                                                 '',

'HELP_SHOP_CONFIG_STOCKOFFDEFAULTMESSAGE'     => '' .
                                                 '',

'HELP_SHOP_CONFIG_OVERRIDEZEROABCPRICES'      => '' .
                                                 '' .
                                                 '',

'HELP_SHOP_CONFIG_SEARCHFIELDS'               => '' .
                                                 '' .
                                                 '' .
                                                 '' .
                                                 '' .
                                                 '',

'HELP_SHOP_CONFIG_SORTFIELDS'                 => '' .
                                                 '' .
                                                 '' .
                                                 '' .
                                                 '' .
                                                 '' .
                                                 '' .
                                                 '',

'HELP_SHOP_CONFIG_MUSTFILLFIELDS'             => '' .
                                                 '' .
                                                 '' .
                                                 '' .
                                                 '' .
                                                 '' .
                                                 '' .
                                                 '' .
                                                 '' .
                                                 '' .
                                                 '' .
                                                 '' .
                                                 '' .
                                                 '' .
                                                 '' .
                                                 '' .
                                                 '' .
                                                 '' .
                                                 '',

'HELP_SHOP_CONFIG_USENEGATIVESTOCK'           => '' .
                                                 '' .
                                                 '',

'HELP_SHOP_CONFIG_SETORDELETECURRENCY'        => ''.
                                                 ''.
                                                 ''.
                                                 ''.
                                                 ''.
                                                 ''.
                                                 ''.
                                                 ''.
                                                 ''.
                                                 '',

'HELP_SHOP_CONFIG_NEWARTBYINSERT'             => 'Parduotuvės pagrindiniame puslapyje yra rodomas blokas <i> Naujausios prekės! </i>. Jei varnelė uždėta, tai naujausios prekės bus skaičiuojamos pagal sukūrimo datą.',

/** @deprecated since v6.5.4 (2020-04-06); Suggest feature will be removed completely */
'HELP_SHOP_CONFIG_ALLOW_SUGGEST_ARTICLE'      => '',
/** end deprecated */

'HELP_SHOP_CONFIG_SEND_TECHNICAL_INFORMATION_TO_OXID' => ''
                                                        .''
                                                        .''
                                                        .''
                                                        .''
                                                        .''
                                                        .''
                                                        .'',

'HELP_SHOP_CONFIG_DELETERATINGLOGS'           => 'Vartotojas gali įvertinti prekę tik vieną kartą. Čia galite nurodyti, po kurio laiko vartotojas vėl galės įvertinti prekę. Palikus tuščią - prekės gali būti įvertintos vartotojo tik vieną kartą.',

'HELP_SHOP_CONFIG_DISABLEONLINEVATIDCHECK'    => ''.
                                                 '',

'HELP_SHOP_CONFIG_ALTVATIDCHECKINTERFACEWSDL' => 'Čia jūs galite įvesti alternatyvų URL PVM ID tikrinimui online. Jei PVM ID tikrinimo nuoroda nepasiekiama per URL, parduotuvė bando pasiekti ją per naudojamą URL čia.',

'HELP_SHOP_CONFIG_PSLOGIN'                    => '' .
                                                 '' .
                                                 '',

'HELP_SHOP_CONFIG_BASKETEXCLUDE'              => '' .
                                                 '' .
                                                 '' .
                                                 '',

'HELP_SHOP_CONFIG_BASKETRESERVATION'          => '' .
                                                 '' .
                                                 '' .
                                                 ''.
                                                 '',

'HELP_SHOP_CONFIG_BASKETRESERVATIONTIMEOUT'   => 'Praėjus rezervacijos laikui prekės likutis atstatomas ir pirkėjo krepšelis išvalomas.',

'HELP_SHOP_CONFIG_INVITATION'                 => '' .
                                                 '',

'HELP_SHOP_CONFIG_POINTSFORINVITATION'        => '' .
                                                 '' .
                                                 '',

'HELP_SHOP_CONFIG_POINTSFORREGISTRATION'      => '' .
                                                 '' .
                                                 '',

// @deprecated since v6.5.1 (2019-02-07); credit card payment method will be no longer supported
'HELP_SHOP_CONFIG_ATTENTION'                  => '',
// END deprecated

'HELP_SHOP_CONFIG_SHOWTSINTERNATIONALFEESMESSAGE' => '',

'HELP_SHOP_CONFIG_SHOWTSCODMESSAGE'           => '',

'HELP_SHOP_CONFIG_DOWNLOADS'                  => '',

'HELP_SHOP_CONFIG_DOWNLOADS_PATH'             => '',

'HELP_SHOP_CONFIG_MAX_DOWNLOADS_COUNT'        => ''.
                                                 '',

'HELP_SHOP_CONFIG_LINK_EXPIRATION_TIME_UNREGISTERED' => ''.
                                                 '',

'HELP_SHOP_CONFIG_LINK_EXPIRATION_TIME'       => ''.
                                                 '',

'HELP_SHOP_CONFIG_PARCELSERVICE'              => '',

'HELP_SHOP_CONFIG_DOWNLOAD_EXPIRATION_TIME'   => ''.
                                                 '',

'HELP_SHOP_CONFIG_LOADREVIEWS'                  => '' .
                                                   '',

'HELP_SHOP_CONFIG_INCLUDE_PRODUCT_REVIEW_LINKS_IN_ORDER_EMAIL' => '',

'HELP_SHOP_MALL_MALLMODE'                     => '' .
                                                 '' .
                                                 '',

'HELP_SHOP_MALL_PRICEADDITION'                => 'Jūs galite apibrėžti visų prekių kainų antkainį šioje parduotuvėje: Įveskite antkainį ir pažymėkite ar jis procentinis (<span class="userinput_or_code">%</span>) ar absoliutus (<span class="userinput_or_code">abs</span>).',



'HELP_SHOP_PERF_NEWESTARTICLES'               => '' .
                                                 '' .
                                                 '' .
                                                 '',

'HELP_SHOP_PERF_TOPSELLER'                    => '' .
                                                 '' .
                                                 '' .
                                                 '',

'HELP_SHOP_PERF_LOADFULLTREE'                 => 'Jei varnelė uždėta, visas kategorijų medis yra rodomas kategorijų navigacijoje (visos kategorijos yra matomos). Veikia tada, kai kategorijos navigacija yra rodoma viršuje.',

'HELP_SHOP_PERF_LOADACTION'                   => 'Jei šis parametras parinktas, akcijos <i>Naujausios!</i> ir <i>Perkamiausios</i> yra užkraunamos ir rodomos.',

'HELP_SHOP_PERF_USESELECTLISTPRICE'           => 'Savybių sąrašuose antkainiai/nuolaidos gali būti nustatomos. Jei varnelė uždėta, antkainiai/nuolaidos yra pritaikomi. Jei varnelė neuždėta, antkainiai/nuolaidos nėra pritaikomi.',

'HELP_SHOP_PERF_DISBASKETSAVING'              => 'Registruotų vartotojų pirkinių krepšelis yra saugomas, kai vartotojai ateina į parduotuvę antrą kartą, pirkinių krepšelis yra užkraunamas. Jei uždėsite varnelę, pirkinių krepšeliai neregistruotų vartotojų nebus saugomi.',

'HELP_SHOP_PERF_LOADDELIVERY'                 => 'Jei varnelė neuždėta, pristatymo mokestis nebus skaičiuojamas: Pristatymo mokestis visada bus 0.00.',

'HELP_SHOP_PERF_LOADPRICE'                    => 'Jei varnelė neuždėta, prekės kainos nebus skaičiuojamos: Kainos nebus rodomos.',

'HELP_SHOP_PERF_PARSELONGDESCINSMARTY'        => 'Jei varnelė uždėta, prekių ir kategorijų aprašymai bus apdoroti per Smarty: Jūs galite naudoti Smarty korteles (pvz. naudojant reikšmes) <br />',

'HELP_SHOP_PERF_LOADSELECTLISTSINALIST'       => 'Prekių savybės yra rodomos detaliame prekės aprašyme. Jei varnelė aktyvi, prekės savybės taip pat rodomos prekių sąrašuose (pvz. paieškos rezultatai, kategorijos).',

'HELP_SHOP_PERF_CHECKIFTPLCOMPILE'            => 'Jei varnelė uždėta, parduotuvė tikrina kiekvieną užklausą, ar visi šablonai buvo pakeisti. Jei taip, rezultatai yra perskaičiuojami. Aktyvuokite šį parametrą, kai adaptuojami šablonai, nuimkite varnelę, jei parduotuvė yra veikianti. <br />',

'HELP_SHOP_PERF_CLEARCACHEONLOGOUT'           => 'Dažniausia kešas yra išvalomas, kad jūs galėtumėte išsaugoti pakeitimus parduotuvės administravimo aplinkoje. Tai gali sukelti našumo problemų administravime. Jei varnelė uždėta, kešas yra išvalomas atsijungus iš parduotuvės administravimo.',





'HELP_SHOP_SEO_TITLEPREFIX'                   => '' .
                                                 '',

'HELP_SHOP_SEO_TITLESUFFIX'                   => '' .
                                                 '',

'HELP_SHOP_SEO_IDSSEPARATOR'                  => '' .
                                                 '',

'HELP_SHOP_SEO_SAFESEOPREF'                   => 'Jei kelios prekės turi tokį patį pavadinimą, ir jos yra toje pačioje kategorijoje, joms bus suteiktas toks pat SEO URL. Norėdami to išvengti, SEO priešdėlis yra pridedamas. Jei nėra SEO priešdėlio yra naudojamas standartinis <i>oxid</i> skyriklis.',

'HELP_SHOP_SEO_RESERVEDWORDS'                 => 'Keletas URL yra fiksuoti, tokie kaip www.youreshop.com/admin - prieiga prie parduotuvės administravimo. Jei kategorija buvo pervadinta, <i>admin</i> SEO URL turi būti www.youreshop.com/admin taip pat - kategorija negali būti prieinama. Todėl SEO priešdėlis yra pridedamas prie šių URL. Jūs galite nustatyti, kurie URL yra pridedami automatiškai.',

'HELP_SHOP_SEO_SKIPTAGS'                      => 'Jei nėra META kortelių yra apibrėžtos prekių ir kategorijų, META kortelės yra sukurtos automatiškai. Taip žodžiai labai dažnai gali būti praleidžiami. Visi žodžiai įvedami čia kai sukuriama META kortelė.',
'HELP_SHOP_SEO_LOWERCASEURLS'                 => '',

'HELP_SHOP_SEO_STATICURLS'                    => 'Specialiems puslapiams (pvz. taisyklės ir grąžinimo teisė) jūs galite įvesti fiksuotą SEO URL. Pažymėkite statinį URL, standartiškai URL yra rodomas <var>Standartinis URL</var>. Įvedimo laukuose galite nurodyti SEO URL kiekvienai kalbai.',



'HELP_SHOP_MAIN_PRODUCTIVE'                   => '' .
                                                 '' .
                                                 '',

'HELP_SHOP_MAIN_ACTIVE'                       => 'Laukelyje <var>Aktyvavimas</var> galite aktyvuoti/deaktyvuoti pilnai parduotuvę. Jei parduotuvė yra neaktyvi, rodoma žinutė, kad parduotuvė šiuo metu yra neprieinama vartotojams. Tai gali būti naudingai pritaikyta.',

'HELP_SHOP_MAIN_INFOEMAIL'                    => 'Nurodytu el. pašto adresu bus siunčiami visi laiškai iš paklausimų formos("Turite klausimų apie šią prekę?", "Parašykite mums").',

'HELP_SHOP_MAIN_ORDEREMAIL'                   => 'Vartotojui atlikus užsakymą, jis el. paštu gauna užsakymo kopiją. Jei vartotojas turi klausimų apie atliktą užsakymą, jis gali paklausti atsakymas į gautą užsakymo laiško kopiją, kuri bus nusiųsta el. paštu <var>Užsakymų inform. el. paštas</var>.',

'HELP_SHOP_MAIN_OWNEREMAIL'                   => 'Vartotojui atlikus užsakymą, parduotuvės administratorius gauna el. laišką apie atliktą užsakymą. Šie el. laiškai siunčiami el. paštu nurodytu <var>Užsakymų valdymo el. paštas</var>.',

'HELP_SHOP_MAIN_SMTPSERVER'                   => 'SMTP duomenys reikalingi laiškų siuntimui (pvz. užsakymo patvirtinimo laiško siuntimas klientams).',

'HELP_ARTICLE_MAIN_ALDPRICE'                  => 'Laukelyje <span class="navipath_or_inputname">Alt. kaina</span> galite įvesti specialias kainas pasirinktiems vartotojų grupėms A, B ir C.',

'HELP_ARTICLE_MAIN_VAT'                       => 'Laukelyje galite įvesti specialų PVM prekei. Šis PVM bus naudojamas visiems skaičiavimams atlikti (krepšelyje, užsakyme, sąskaitoje).',

'HELP_ARTICLE_EXTEND_UNITQUANTITY'            => '<var>Kiekį</var> ir <var>Matą</var> galite panaudoti kainos už kiekio vienetą rodymui(pvz. 1.43 Lt už litrą). <var>Kiekio laukelyje</var>, įveskite prekės kiekį (pvz. <kbd>1.5</kbd>), <var>Mato laukelyje</var> pagal kiekio vienetą (pvz. <kbd>litras</kbd>). Kaina nuo kiekio vieneto yra skaičiuojama ir rodoma prie prekės.',

'HELP_ARTICLE_EXTEND_EXTURL'                  => 'Išorinio URL laukelyje</var> galite įvesti nuorodą, kurioje pateikiama papildoma informacija apie prekę (pvz. gamintojo puslapyje). <var>Išoriniam URL teksto laukelyje</var> galite įvesti tekstą, kuris turi nuorodą, pvz. <kbd>Kita informacija gamintojo svetainėje</kbd>.',

'HELP_ARTICLE_EXTEND_TPRICE'                  => '<var>Senos kainos laukelyje</var> galite įrašyti gamintojo rekomenduojamą pardavimo kainą. Jei jūs įvesite seną kainą ji bus rodoma vartotojams: aukščiau prekės kainos rodoma: <i>Sena kaina...,dabar tik</i>.',

'HELP_ARTICLE_EXTEND_QUESTIONEMAIL'           => '<var>Alt. kontaktų laukelyje</var> galite įvesti el. pašto adresą. Vartotojui parašius užklausą apie prekę, užklausa nusiunčiama šiuo el. pašto adresu. Jei nėra įvesta el. pašto, užklausos bus siunčiamos į informacinį el. pašto adresą.',

'HELP_ARTICLE_EXTEND_NONMATERIAL'             => 'Nustatymas yra paveldėtas iš pagrindinės prekės variantams ir taikomas visai prekei.',

'HELP_ARTICLE_EXTEND_FREESHIPPING'            => 'Nustatymas yra paveldėtas iš pagrindinės prekės variantams ir taikomas visai prekei.',

'HELP_ARTICLE_EXTEND_BLFIXEDPRICE'            => '',

'HELP_ARTICLE_EXTEND_SKIPDISCOUNTS'           => 'Jei varnelė <var>Praleisti visas neigiamas nuolaidas</var> uždėta, neaktyvios nuolaidos šiai prekei nebus skaičiuojamos. Tai liečia nuolaidas ir kuponus.',

'HELP_ARTICLE_EXTEND_TEMPLATE'                => 'Prekės peržiūros puslapis gali būti matomas skirtingais šablonais. Norint taip padaryti, įveskite norimo naudoti šablono failo pavadinimą.',

'HELP_ARTICLE_EXTEND_ISCONFIGURABLE'          => ''.
                                                 '',

'HELP_ARTICLE_EXTEND_UPDATEPRICE'             => '',

'HELP_ARTICLE_EXTEND_SHOWCUSTOMAGREEMENT'     => '',

'HELP_ARTICLE_FILES_MAX_DOWNLOADS_COUNT'      => '',

'HELP_ARTICLE_FILES_LINK_EXPIRATION_TIME_UNREGISTERED' => '',

'HELP_ARTICLE_FILES_LINK_EXPIRATION_TIME'     => '',

'HELP_ARTICLE_FILES_NEW'                      => '',

'HELP_ARTICLE_FILES_DOWNLOAD_EXPIRATION_TIME' => '',

'HELP_ARTICLE_PICTURES_ICON'                  => ''.
                                                 '' .
                                                 '',

'HELP_ARTICLE_PICTURES_THUMB'                 => '' .
                                                 '' .
                                                 '',

'HELP_ARTICLE_PICTURES_PIC1'                  => '' .
                                                 '',

'HELP_ARTICLE_PICTURES_ZOOM1'                 => '' .
                                                 '',

'HELP_ARTICLE_STOCK_REMINDACTIV'              => 'Laukelyje <var>Siųsti pranešimą sumažėjus likučiui iki </var> galite nurodyti, kad būtų siunčiamas el. laiškas informuojantis apie likučio sumažėjimą. Pažymėkite langelį ir įveskite požymį, pagal kurį jums būtų pranešta apie likučio sumažėjimą.',

'HELP_ARTICLE_STOCK_STOCKFLAG'                => '' .
                                                 '' .
                                                 '' .
                                                 '' .
                                                 '',

'HELP_ARTICLE_IS_DOWNLOADABLE'                => '',

'HELP_ARTICLE_STOCK_REMINDAMAOUNT'            => '<span class="navipath_or_inputname">Siunčiamas el. laiškas jei prekės likutis nukrenta žemiau reikšmės</span> jūs galite nurodyti, kad el.laiškas bus išsiųstas kai prekės likutis nukris žemiau įvestos reikšmės. Pažymėkite varnelė, ir įvesite lygį, nuo kuriuo norite būti informuojamas.',

'HELP_ARTICLE_STOCK_DELIVERY'                 => 'Čia galite įvesti datą, kuri nurodo kada prekę vėl bus galima nusipirkti. Datos formatas YYYY-MM-DD, pvz. 2009-02-16.',

'HELP_ARTICLE_SEO_FIXED'                      => 'Parduotuvė automatiškai pergeneruoja SEO URL. Pavyzdžiui, prekės SEO URL bus pergeneruotas, jei prekės pavadinimas bus pakeistas. Jei uždėta varnelė<span class="navipath_or_inputname"> Fiksuotas URL</span>, senas SEO URL yra saugomas, naujai negeneruojamas.',

'HELP_ARTICLE_SEO_KEYWORDS'                   => 'Šie raktažodžiai yra integruoti į prekės puslapio HTML kodą (META raktažodžiai). Ši informacija naudojama paieškai. Prekei tinkami raktažodžiai įrašomi čia. Jei paliksite tuščią lauką, raktažodžiai bus generuojami automatiškai.',

'HELP_ARTICLE_SEO_DESCRIPTION'                => 'Šis aprašymas yra integruotas į prekės puslapio HTML kodą (META aprašymas). Šis tekstas dažnai rodomas puslapių paieškos rezultatuose. Aprašymui tinkami raktažodžiai įrašomi čia. Jei paliksite tuščią lauką, aprašymas bus sugeneruotas automatiškai.',

'HELP_ARTICLE_SEO_ACTCAT'                     => 'Prekei galite nustatyti keletą SEO URL: tai tikriems gamintojų ir kategorijų puslapiams. Laukelyje <var>Aktyvi kategorija/gamintojas</var> galite pasirinkti SEO URL, kurį norite koreguoti.',

'HELP_ARTICLE_STOCK_STOCKTEXT'                => 'Čia galite įvesti žinutę, kuri bus matoma, kai prekės likutis bus pasibaigęs.',

'HELP_ARTICLE_STOCK_NOSTOCKTEXT'              => 'Čia galite įvesti žinutę, kuri bus matoma kai prekės nebus sandėlyje.',

'HELP_ARTICLE_STOCK_AMOUNTPRICE_AMOUNTFROM'   => 'Laukeliuose <span class="navipath_or_inputname">Kiekis nuo/iki</span> galite nustatyti kokiam kiekio intervalui galioja kaina.<br />',

'HELP_ARTICLE_STOCK_AMOUNTPRICE_PRICE'        => '' .
                                                 '',

'HELP_ARTICLE_VARIANT_VARNAME'                => '<span class="navipath_or_inputname">Savybės pavadinimas</span> apibrėžiamas kaip variantų pavadinimas, pvz. <span class="userinput_or_code">Spalva</span> ar <span class="userinput_or_code">Dydis</span>.<br />',

'HELP_ATTRIBUTE_MAIN_DISPLAYINBASKET'         => '',

'HELP_CATEGORY_MAIN_HIDDEN'                   => 'Laukelyje <var>Paslėpta</var> <galite nustatyti ar šią kategoriją rotyti klientams. Jei kategorija yra paslėpta, ji nerodoma vartotojams, net jeigu yra aktyvi.',

'HELP_CATEGORY_MAIN_PARENTID'                 => '' .
                                                 '' .
                                                 '',

'HELP_CATEGORY_MAIN_EXTLINK'                  => 'Laukelyje <var>Išorinė nuoroda</var>, galite įrašyti nuorodą, kuri atsidarys vartotojui paspaudus ant kategorijos. <strong>Naudokite šią funkciją tada, jei norite rodyti nuorodą kategorijos navigacijoje. Tačiau kategorija gali prarasti savo įprastą funkciją!</strong>',

'HELP_CATEGORY_MAIN_PRICEFROMTILL'            => 'Laukelyje <var>Kaina Nuo/Iki</var> galite nurodyti, kad <strong>visos</strong> prekės su pagrindine kaina rodomos šioje kategorijoje. Įveskite mažiausią limitą pirmame laukelyje ir didesnį limitą kitame laukelyje. Tada <strong>visos parduotuvės prekės</strong>, kurios patenka į šį kainų intervalą bus rodomos kategorijoje.',

'HELP_CATEGORY_MAIN_DEFSORT'                  => 'Laukelyje <span class="navipath_or_inputname">Greitas rikiavimas</span> pasirinkite kaip rikiuoti prekes kategorijoje.',

'HELP_CATEGORY_MAIN_SORT'                     => 'Jūs galite naudoti lauką <var>Rikiavimas</var>, kuris nurodo, kokia tvarka kategorijos bus rodomos: Kategorija su mažiausiu numeriu rodoma viršuje, o kategorija su didžiausiu numeriu - apačioje.',

'HELP_CATEGORY_MAIN_THUMB'                    => 'Laukeliuose <var>Nuotraukos pavadinimas</var> ir <var>Įkelti nuotrauką</var> jūs galite įkelti paveikslėlį kategorijai. Paveikslėliai yra matomi kategorijos viršuje. Pasirinkite <var>Įkelti nuotrauką</var>, po paspausdimo <var>Išsaugoti</var>, paveikslėlis bus įkeltas. Po įkėlimo, paveikslėlio pavadinimas bus rodomas laukelyje <var>Nuotraukos pavadinimas</var>.',

'HELP_CATEGORY_MAIN_PROMOTION_ICON'           => 'Laukelyje <span class="navipath_or_inputname">Akcijos piktograma</span> ir  <span class="navipath_or_inputname">Įkelti piktogramą</span> jūs galite įkelti kategorijos paveikslėlį akcijoms matomoms pirmame puslapyje. Norėdami matyti kategorijų akcijas įkelkite prekes <span class="navipath_or_inputname"> Inform. klientams -> Prekių grupės</span>',

'HELP_CATEGORY_MAIN_SKIPDISCOUNTS'            => '<li>Jei varnelė <var>Praleisti visas negaliojančias nuorodas</var> uždėta, nuolaidos nebus skaičiuojamos visoms prekėms kategorijoje.',



'HELP_CATEGORY_SEO_FIXED'                     => 'Parduotuvė automatiškai pergeneruoja SEO URL. Pavyzdžiui, kategorijos SEO URL bus pergeneruotas, jei kategorijos pavadinimas bus pakeistas. Jei uždėta varnelė<span class="navipath_or_inputname"> Fiksuotas URL</span>, senas SEO URL yra saugomas, naujai negeneruojamas.',

'HELP_CATEGORY_SEO_KEYWORDS'                  => 'Šie raktažodžiai yra integruoti į kategorijos HTML kodą (META raktažodžiai). Ši informacija naudojama paieškos sistemoms. Kategorijai tinkami raktažodžiai gali būti įrašomi čia. Jei paliksite tuščia, raktažodžiai bus sugeneruoti automatiškai.',

'HELP_CATEGORY_SEO_DESCRIPTION'               => 'Šis aprašymas yra integruotas į kategorijos HTML kodą (META aprašymas). Šis tekstas dažnai rodomas paieškos rezultatų puslapiuose. Tinkami aprašymai gali būti įrašomi čia. Jei paliksite tuščią, aprašymas bus sugeneruotas automatiškai.',

'HELP_CATEGORY_SEO_SHOWSUFFIX'                => 'Naudodami šį parametrą galite nurodyti, jei pavadinime priešdėlis rodomas naršyklės lango pavadinime, kai kategorijos puslapis atidarytas. Pavadinimo priesagą galima nustatyti <em>Pagr. informacija -> Pagr. nustatymai -> SEO -> priešdėlio pavadinimas</em>.',
'HELP_CONTENT_MAIN_SNIPPET'                   => 'Jei pasirinksite <span class="navipath_or_inputname">Iškarpa</span> jūs galite susieti šį TTS puslapį su kitais TTS pagal jų ID: <span class="userinput_or_code">[{ oxcontent ident=ident_of_the_cms_page }]</span>',

'HELP_CONTENT_MAIN_MAINMENU'                  => 'Jei pasirinksite <var>Pagr. meniu</var>, TTS puslapis bus matomas viršutiniame meniu (Taisyklės ir Apie mus).',

'HELP_CONTENT_MAIN_CATEGORY'                  => 'Jei pasirinksite <var>Kategorija</var>, TTS puslapis bus rodomas kategorijos navigacijoje prieš kitas kategorijas.',

'HELP_CONTENT_MAIN_MANUAL'                    => 'Jei pasirinksite <span class="navipath_or_inputname">Rankiniu būdu</span>, bus sukurta nuoroda, kurią galėsite panaudoti kituose TTS puslapiuose. Nuoroda matoma paspaudus mygtuką <span class="navipath_or_inputname">Išsaugoti</span>.',
'HELP_CONTENT_SEO_FIXED'                      => 'Jūs galite leisti parduotuvei perskaičiuoti SEO URL. TTS puslapiai duoda naują SEO URL jei pvz. TTS puslapio pavadinimas buvo pakeistas. Parametras <var>Fiksuotas URL</var> išvengti šios: Jei tai yra aktyvu, senas SEO URL yra saugomas ir nenaujas SEO URL yra perskaičiuojamas.',

'HELP_CONTENT_SEO_KEYWORDS'                   => 'Šie raktažodžiai yra integruoti į TTS puslapių HTML kodą (META raktažodžiai). Ši informacija yra naudojama paieškos sistemoms. Tinkami raktažodžiai TTS puslapiams gali būti įrašomi čia. Jei paliksite tuščią, the raktažodžiai bus sugeneruoti automatiškai.',

'HELP_CONTENT_SEO_DESCRIPTION'                => 'Šis aprašymas yra integruotas į TTS puslapių HTML kodą (META aprašymas). Šis tekstas dažnai rodomas paieškos rezultatuose. Tinkami aprašymai gali būti įrašomi čia. Jei paliksite tuščią, aprašymas bus sugeneruotas automatiškai.',



'HELP_DELIVERY_MAIN_COUNTRULES'               => '' .
                                                 '' .
                                                 '' .
                                                 '',

'HELP_DELIVERY_MAIN_CONDITION'                => '' .
                                                 '' .
                                                 '' .
                                                 '' .
                                                 '' .
                                                 '',

'HELP_DELIVERY_MAIN_PRICE'                    => '' .
                                                 '' .
                                                 '',

'HELP_DELIVERY_MAIN_ORDER'                    => 'Laukelyje <var>Eiliškumas</var> nurodykite kokia tvarka bus tikrinamos pristatymo kainų taisyklės. Pristatymo kainos su mažiausiu numeriu yra rodomos viršuje. Užsakymas yra svarbus jei naudojamas nustatymas <var>Stabdyti kitų taisyklių tikrinimą, jei tenkina ši taisyklė. </var>',

'HELP_DELIVERY_MAIN_FINALIZE'                 => 'Laukelis <var>Stabdyti kitų taisyklių tikrinimą, jei tenkina ši taisyklė</var> nurodo, kad jokios papildomos taisyklės nebūtų skaiičiuojamos, jei galioja pristatymo kainų skaičiavimo taisyklės. Nustatymas yra svarbus, visiems užsakymams, kuriems vykdomos šios skaičiavimo taisyklės. Tai yra nurodyta laukelyje <var>Eiliškumas</var>.',



'HELP_DELIVERYSET_MAIN_POS'                   => 'Laukelis <var>Rikiavimas</var> nurodo užsakymą, kuriame pristatymo kainos yra rodomos vartotojams: Pristatymo būdas su mažiausiu numeriu yra rodomas viršuje.',



'HELP_DISCOUNT_MAIN_SORT'                     => '',

'HELP_DISCOUNT_MAIN_PRICE'                    => 'Laukelyje <var>Pirkimo kaina</var> nurodykite, kad nuolaida galioja tik tam tikroms pirkimo kainoms. Jei nuolaida galioja visoms pirkimo kainoms, įveskite <kbd>0</kbd>  <var>Nuo</var> ir <kbd>0</kbd>  <var>Iki</var>.',

'HELP_DISCOUNT_MAIN_AMOUNT'                   => 'Laukelyje <var>Kiekis</var> nurodykite ar nuolaida galioja tam tikriems pirkimo kiekiams. Jei norite, kad  nuolaida galiotų tam tikriems pirkinių kiekiams, įveskite <kbd>0</kbd> <var>Nuo</var> ir <kbd>0</kbd> <var>Iki</var>.',

'HELP_DISCOUNT_MAIN_REBATE'                   => '' .
                                                 '' .
                                                 '' .
                                                 '' .
                                                 ''.
                                                 '',



'HELP_GENERAL_SEO_ACTCAT'                     => 'Prekei galite nustatyti keletą SEO URL: tai tikriems gamintojų ir kategorijų puslapiams. Laukelyje <var>Aktyvi kategorija/gamintojas</var> galite pasirinkti SEO URL, kurį norite koreguoti.',

'HELP_GENERAL_SEO_FIXED'                      => 'Parduotuvė automatiškai pergeneruoja SEO URL. Pavyzdžiui, prekės SEO URL bus pergeneruotas, jei prekės pavadinimas bus pakeistas. Jei uždėta varnelė<span class="navipath_or_inputname"> Fiksuotas URL</span>, senas SEO URL yra saugomas, naujai negeneruojamas.',

'HELP_GENERAL_SEO_SHOWSUFFIX'                 => 'Jei parametras aktyvus, pavadinimo priesaga yra rodoma kai atidaromas naršyklės langas. Pavadinimo priesaga gali būti redaguojama <span class="navipath_or_inputname">Pard. nustatymai -> Pagr. nustatymai -> SEO -> Pavadinimo priesaga</span>.',

'HELP_GENERAL_SEO_OXKEYWORDS'                 => 'Šie raktažodžiai yra integruoti į HTML kodą (META raktažodžiai). Ši informacija yra naudojama paieškos sistemoms. Prekei tinkami raktažodžiai gali būti įrašomi čia. Jei forma yra tuščia, raktažodžiai generuojami automatiškai.',

'HELP_GENERAL_SEO_OXDESCRIPTION'              => 'Šis aprašymas yra integruotas į HTML kodą (META aprašymas). Šis tekstas yra dažnai rodomas paieškos sistemos rezultatų puslapiuose. Tinkamas aprašymas gali būti įrašomas čia. Jei forma tuščia, aprašymas generuojamas automatiškai.',



'HELP_GENIMPORT_FIRSTCOLHEADER'               => 'Aktyvus parametras nurodo, kad pirmoje CSV failo eilutėje yra laukų pavadinimai, o kitose eilutėse matosi jų reikšmės. Reikšmės yra automatiškai sukeliamos į duomenų bazę.',

'HELP_GENIMPORT_REPEATIMPORT'                 => 'Jei šis parametras yra aktyvus, pirmas žingsnis yra rodomas po sėkmingo importo, taigi jūs galite pradėti kitą importą iš karto.',

'HELP_LANGUAGE_DEFAULT'                       => 'Jei parduotuvė neranda kitos kalbos yra naudojama pagrindinė kalba(DE): kalbos id nėra apibrėžtas URL, nesusieta su naršykle, neapibrėžta sesijos ar kt. Pagrindinė kalba gali būti deaktyvuota, ištrinti <u>negalima</u>.',

'HELP_LANGUAGE_ACTIVE'                        => "Jei varnelė uždėta - kalba bus aktyvuota svetainėje. Dirbant administravimo aplinkoje ši kalba visada bus aktyvi; nors svetainėje bus išjungta.",

'HELP_PAYMENT_MAIN_SORT'                      => 'Laukelyje <var>Rikiavimas,</var> galite nurodyti kokia tvarka bus rodomi mokėjimo būdai vartotojams: Mokėjimo būdai su mažesniu numeriu yra rodomi viršuje.',

'HELP_PAYMENT_MAIN_FROMBONI'                  => 'Jūs galite naudoti <var>Mokumo indeksą</var> nurodant mokėjimo būdų prieinamumą tik tiems vartotojams, kurie turi tam tikrą mokumo indeksą. Jūs galite įvesti mokumo indeksą kiekvienam vartotojui <em>Vartotojų valdymas -> Vartotojai -> Papildomai</em>.',

'HELP_PAYMENT_MAIN_SELECTED'                  => 'Jūs galite naudoti lauką <var>Pasirinktas</var> siekiant nustatyti koks mokėjimo būdas pasirinktas, kaip standartinis trečiame krepšelio žingsnyje, tačiau vartotojui paliekama galimybė pasirinkti kitą mokėjimo būdą.',

'HELP_PAYMENT_MAIN_AMOUNT'                    => '' .
                                                 '',

'HELP_PAYMENT_MAIN_ADDPRICE'                  => '' .
                                                 '' .
                                                 '',

'HELP_PAYMENT_MAIN_ADDSUMRULES'               => 'Kai skaičiuojamas kainos antkainis ar sumažinimas, krepšelio kaina naudojama kaip bazinė. Kainos bus įtraukiamos kai skaičiuosime krepšelio sumą.',

'HELP_SELECTLIST_MAIN_TITLEIDENT'             => 'Laukelyje <var>Pavadinimo ID</var> galite įvesti papildomą pavadinimą, kuris nebus rodomas parduotuvės vartotojams. Jūs galite naudoti pavadinimo ID, kad atskirti panašius įrašus (pvz., Kelnių dydis ir marškinėlių dydis).',

'HELP_SELECTLIST_MAIN_FIELDS'                 => 'Visi galimi nustatymai yra matomi laukelyje <var>Laukai</var> sąrašu. Jūs galite naudoti įrašų laukus dešinėje sukuriant naują nustatymą.',

'HELP_USER_MAIN_HASPASSWORD'                  => '' .
                                                 '' .
                                                 '',

'HELP_USER_PAYMENT_METHODS'                   => ''.
                                                 ''.
                                                 '',

'HELP_USER_EXTEND_NEWSLETTER'                 => 'Šis parametras rodo, ar vartotojas užsiprenumeravęs naujienas.',

'HELP_USER_EXTEND_EMAILFAILED'                => 'Jei vartotojo suvestas el. pašto adresas neteisingas ir jums grąžinami el. laiškai, pažymėkite šį nustatymą. Jokios naujienos tokiam vartotojui nebus siunčiamos. Bus siunčiami tik kiti el. laiškai(užsakymo, slaptažodžio priminimo).',

'HELP_USER_EXTEND_BONI'                       => 'Čia galite įvesti mokumo reikšmę pasirinktam vartotojui. Su šiuo mokumo nustatymu jūs galėsite atskirti, kurį mokėjimo metodą naudoja pirkėjas.',



'HELP_MANUFACTURER_MAIN_ICON'                 => 'Laukelyje <var>Piktograma</var> ir  <var>Įkelti priktogramą</var> galite įkelti gamintojo paveikslėlį (pvz. logotipas). Laukelyje <var>Įkelti piktogramą</var> pasirinkite paveikslėlį, kurį norite įkelti. Tada paspauskite <var>Išsaugoti</var>, paveikslėlis yra įkeltas. Po įkėlimo, paveikslėlio pavadinimas bus rodomas <var>Piktograma</var>.',



'HELP_MANUFACTURER_SEO_FIXED'                 => 'Parduotuvė automatiškai pergeneruoja SEO URL. Pavyzdžiui, gamintojo SEO URL bus pergeneruotas, jei prekės pavadinimas bus pakeistas. Jei uždėta varnelė<span class="navipath_or_inputname"> Fiksuotas URL</span>, senas SEO URL yra saugomas, naujai negeneruojamas.',

'HELP_MANUFACTURER_SEO_KEYWORDS'              => 'Šie raktažodžiai yra integruoti į HTML kodą (META raktažodžiai). Ši informacija yra naudojama paieškos sistemoms. Gamintojui tinkami raktažodžiai gali būti įrašomi čia. Jei forma yra tuščia, raktažodžiai generuojami automatiškai.',

'HELP_MANUFACTURER_SEO_DESCRIPTION'           => 'Šis aprašymas yra integruotas į gamintojo HTML kodą (META aprašymas).Šis tekstas dažnai rodomas paieškos rezultatų puslapiuose. Tinkamas aprašymas gali būti įrašomas čia. Jei laukelis tuščias, aprašymas generuojamas automatiškai.',

'HELP_MANUFACTURER_SEO_SHOWSUFFIX'            => 'Šis nustatymas leidžia apibūdinti pavadinimo priesagą rodomą naršyklės lango viršuje (pavadinime), kai gamintojo puslapis yra atidaromas. Pavadinimo priesaga gali būti koreguojama <em>Pagr. informacija -> Pagr. nustatymai -> SEO -> Pavadinimo priesaga</em>.',

'HELP_VOUCHERSERIE_MAIN_DISCOUNT'             => '' .
                                                 '' .
                                                 '' .
                                                 '' .
                                                 '',



'HELP_VOUCHERSERIE_MAIN_ALLOWSAMESERIES'      => 'Čia galite pasirinkti kuriems vartotojams leisti naudoti keletą tos pačios serijos kuponų užsakyme.',

'HELP_VOUCHERSERIE_MAIN_ALLOWOTHERSERIES'     => 'Čia galite pasirinkti ar vartotojams leisti naudoti kuponus kartu su kitos serijos kuponais užsakyme.',

'HELP_VOUCHERSERIE_MAIN_SAMESEROTHERORDER'    => 'Čia galite pasirinkti ar vartotojai gali naudoti tos pačios serijos kuponus keliuose užsakymuose.',

'HELP_VOUCHERSERIE_MAIN_RANDOMNUM'            => 'Jei šis nustatymas aktyvus, tai atsitiktinis numeris generuojamas kiekvienam kuponui.',

'HELP_VOUCHERSERIE_MAIN_VOUCHERNUM'           => 'Čia galite įvesti kupono numerį. Šis numeris yra naudojamas, kai kuriamas naujas kuponas jei <var>Atsitiktinis numeris</var> yra nepasirinktas. Visi kuponai gauna tą pati numeriuką.',

'HELP_VOUCHERSERIE_MAIN_CALCULATEONCE'        => 'Jei kuponui priskirsite prekes ar kategorijas, dekatyvuokite šį nustatymą, norėdami taikyti šį kuponą kiekvienai prekei krepšelyje. Aktyvuokite, jei kuponas turi galioti tik kartą krepšeliui.',

'HELP_WRAPPING_MAIN_PICTURE'                  => 'Laukeliuose <var>Paveikslėlis</var> ir <var>Įkelti nuotrauką</var> galite įkelti nuotrauką atvirutei ar pakavimo popieriui. Laukelyje <var>Įkelti nuotrauką</var>, pasirinkite paveikslėlį, kurį norite įkelti. Tada paspauskite <var>Saugoti</var> nuotrauka bus įkelta. Po failo įkėlimo laukelyje <var>Paveikslėlis</var> bus rodomas nuotraukos pavadinimas.',

'HELP_PROMOTIONS_BANNER_PICTUREANDLINK'       => 'Įkelkite paveikslėlį ir įveskite nuorodą, kuri bus atidaroma kai paspausite ant banerio. Jei prekė yra priskirta baneriui ir URL nuoroda nėra įvesta, priskirtos prekės nuorodą bus atidaroma kai paspausite ant banerio.',
'HELP_SHOP_PERF_SEO_CACHE'                    => '',

'HELP_ALTERNATIVE_IMAGE_SERVER_NOTE'          => '',

'HELP_SHOP_RDFA_CONTENT_OFFERER'              => '',
'HELP_SHOP_RDFA_CONTENT_PAYMENT'              => '',
'HELP_SHOP_RDFA_CONTENT_DELIVERY'             => '',
'HELP_SHOP_RDFA_VAT'                          => '',
'HELP_SHOP_RDFA_DURATION_PRICES'              => '',
'HELP_SHOP_RDFA_LOGO_URL'                     => '',
'HELP_SHOP_RDFA_GEO_LONGITUDE'                => '',
'HELP_SHOP_RDFA_GEO_LATITUDE'                 => '',
'HELP_SHOP_RDFA_GLN'                          => '',
'HELP_SHOP_RDFA_NAICS'                        => '',
'HELP_SHOP_RDFA_ISIC'                         => '',
'HELP_SHOP_RDFA_DUNS'                         => '',
'HELP_SHOP_RDFA_SHOW_PRODUCTSTOCK'            => '',
'HELP_SHOP_RDFA_RATING_MIN'                   => '',
'HELP_SHOP_RDFA_RATING_MAX'                   => '',
'HELP_SHOP_RDFA_COND'                         => '',
'HELP_SHOP_RDFA_FNC'                          => '',
'HELP_SHOP_RDFA_COSTUMER'                     => '',
'HELP_SHOP_RDFA_DURATION_OFFERINGS'           => '',
'HELP_SHOP_PERF_SYSREQ_CHECK'                 => '',
'HELP_SHOP_CONFIG_ADDITIONAL_SERVICE_VAT_CALCULATION_BIGGEST_NET'  => '',
'HELP_SHOP_CONFIG_ADDITIONAL_SERVICE_VAT_CALCULATION_PROPORTIONAL' => '',
'HELP_SHOP_CONFIG_VIEWNETPRICE'               => '',
'HELP_SHOP_CONFIG_ENTERNETPRICE'              => '',

'HELP_REVERSE_PROXY_GET_FRONTEND'             => '',
'HELP_REVERSE_PROXY_GET_BACKEND'              => '',

'HELP_SHOP_CONFIG_DEBIT_OLD_BANK_INFORMATION_NOT_ALLOWED' => '',
'HELP_SHOP_CONFIG_ENABLE_INTANGIBLE_PRODUCTS_AGREEMENT'   => '',

'HELP_SHOP_CONFIG_FIELDS_CONTACTFORM'         => '',
];
