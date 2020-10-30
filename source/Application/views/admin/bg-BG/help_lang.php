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
'charset'                                     => 'UTF-8',

'HELP_SHOP_SYSTEM_OTHERCOUNTRYORDER'          => 'Полето може да бъде настроено за поръчки от страни, за които не е посочена цена на доставка: <ul><li> Ако полето е отметнато, потребителите могат да поръчват: Потребителите биват уведомени относно цената на доставката с ръчно отмятане.</li><li>Ако полето не е отметнато, потребители от страни, за които не е посочена цена на доставка, не могат да поръчват.</li></ul>',

'HELP_SHOP_SYSTEM_DISABLENAVBARS'             => 'Ако полето е отметнато, повечето навигационни елементи не се показват в чекаута. По този начин потребителите не биват излишно разсейвани по време на чекаута.',

'HELP_SHOP_SYSTEM_DEFAULTIMAGEQUALITY'        => 'Препоръчителните настройки са между 40-8-:<br><ul><li>Под 40 компресията започва да се вижда и снимките стават неясни. </li><li>Над 80 почти не се вижда подобрение на качеството, но големината на файловете много нараства.</li></ul><br>Дефолтната стойност е 75.',

'HELP_SHOP_SYSTEM_LDAP'                       => 'Моля, редактирайте Core файл/oxldap.php.',

'HELP_SHOP_SYSTEM_SHOWVARIANTREVIEWS'         => 'Дали да се показват мнения за вариантите на продукта: Ако полето е отметнато, мнения за вариантите ще се виждат заедно с мненията за главния продукт.',

'HELP_SHOP_SYSTEM_VARIANTSSELECTION'          => 'В електронния магазин има множество списъци, към които може да се включи даден продукт, напр. включване в списък с намалени продукти. Ако полето е отметнато, вариантите на главния продукт ще са включени също в списъка.',

'HELP_SHOP_SYSTEM_VARIANTPARENTBUYABLE'       => 'Настройката се отнася за закупуването на главен продукт:<ul><li>Ако полето е отметнато, главният продукт може да бъде купен също.</li><li>Ако полето не е отметнато, само вариантите на главния продукт могат да бъдат купени.</li></ul>',

'HELP_SHOP_SYSTEM_VARIANTINHERITAMOUNTPRICE'  => 'Настройка дали цените на главния продукт да се унаследят от неговите варианти: Ако полето е отметнато, цените зададени за главния продукт се унаследяват от неговите варианти.',

'HELP_SHOP_SYSTEM_ISERVERTIMESHIFT'           => 'Сървърът, на който се намира магазина, може да бъде в различна часова зона. Тази настройка позволява сверяване на часовото време: Въведете броя часове, които трябва да бъдат прибавени/ извадени от часовото време на сървъра, напр. <kdb>+2</kdb> or <kdb>-2</kdb>',

'HELP_SHOP_SYSTEM_INLINEIMGEMAIL'             => 'Ако полето е отметнато, снимките в имейла се изпращат заедно със самия имейл. Ако полето не е отметнато, снимките се свалят от имейл програма, когато имейлът бива отворен.',

'HELP_SHOP_SYSTEM_UTILMODULE'                 => 'Моля, въведете вашия PHP файл тук, който ще презапише функциите на електронния магазин при стартирането му.',

'HELP_SHOP_CACHE_ENABLED'                     => 'Ако кеша за Динамичното съдържание е активен, заедно с него се кешира и останалото съдържание за по-добро представяне. Деактивирайте тази опция, докато адаптирате магазина си (пишете модули, адаптирате темплейти и т. н.).',

'HELP_SHOP_CACHE_LIFETIME'                    => 'Тук може да настроите в секунди колко дълго да се съхранява кешираното съдържание преди опресняване. Стойността по подразбиране е 36000 секунди.',

'HELP_SHOP_CACHE_CLASSES'                     => 'Тук може да зададете кои класове изгледи да се кешират <br> Променяйте тази настройка само ако сте запознати с механизмите на кеширане!',

'HELP_SHOP_CACHE_REVERSE_PROXY_ENABLED'       => 'Активира кеширащо HTTP обратно прокси. Забележка: Не използвайте "Динамично Кеширане на Съдържанието" заедно с тази опция, защото може да намали производителността.',

'HELP_SHOP_CACHE_LAYOUT_CACHE_AGE'            => 'Задава трайност на оформлението на страниците в секунди. Тази стойност ще бъде изпратена чрез HTTP хедъра "Age".',

'HELP_SHOP_CONFIG_ORDEROPTINEMAIL'            => 'Ако double-opt-in е активно, потребителите получават имейл с линк за потвърждение, когато се регистрират за получаване не нюзлетър. Потребителят бива регистриран за нюзлетър, само ако е последван линка за потвърждение.<br>Double-opt-in предпазва потребителите от случайно регистриране. Без Double-opt-in всеки имейл може да се регистрира за получаване на нюзлетър. Посредством Double-opt-in притежателят на имейл адреса трябва да потвърди регистрацията.',

'HELP_SHOP_CONFIG_BIDIRECTCROSS'              => 'Посредством crossselling могат да се предлагат продукти, които са съвместими с друг продукт. Например, ако гуми за автомобил са маркирани като crossselling продукт, то заедно с гумите ще се вижда и автомобилът. Ако е активирано <br>If bidirectional crossselling, принципът на предлагане важи и в двете посоки: заедно с автомобила, ще се виждат и гумите.',

'HELP_SHOP_CONFIG_STOCKONDEFAULTMESSAGE'      => 'За всеки наличен продукт, може да се визуализира съобщение. <br>Ако настройката е активирана, ще се визуализира съобщение, в случай че не е въведено друго специфично за този продукт съобщение. Дефолтното съобщение е <span class="filename_filepath_or_italic">Ready for shipping</span>.',

'HELP_SHOP_CONFIG_STOCKOFFDEFAULTMESSAGE'     => 'За всеки продукт, който не е наличен, може да се визуализира съобщение. <br>Ако настройката е активирана, ще се визуализира съобщение, в случай че не е въведено друго специфично за този продукт съобщение. Дефолтното съобщение е <span class="filename_filepath_or_italic">This item is not in stock and must be back-ordered</span>.',

'HELP_SHOP_CONFIG_OVERRIDEZEROABCPRICES'      => 'Може да зададете специални цени за различните си клиенти: За всеки продукт може да въведете А, B и C цени. Ако потребителите са в група <span class="filename_filepath_or_italic">Price A</span>, те ще виждат само цена А, вместо нормалната цена.<br>В случай че, тази настройка е отметната, ще се вижда нормалната цена на продукта, ако няма зададени A, B или C цени.<br>Тази настройка трябва да бъде отметната, ако използвате цени A, B или C: В противен случай потребителите ще виждат 0,00.',

'HELP_SHOP_CONFIG_SEARCHFIELDS'               => 'Тук може да дефинирате полетата с данни, измежду които проверява търсачката на продукта. Въведете едно поле за ред.<br>Най- често въвеждани са:<ul><li>oxtitle = Наименование</li><li>oxshortdesc = Кратко описание</li><li>oxsearchkeys = Критерии за търсене на всеки продукт</li><li>oxartnum = Номер на продукт</li></ul>',

'HELP_SHOP_CONFIG_SORTFIELDS'                 => 'Тук може да дефинирате полетата с данни, които се използват за сортиране на списъците с продукти. Въведете едно поле за ред.<br>Най- често въвеждани са:<ul><li>oxtitle = Наименование</li><li>oxprice = Цена</li><li>oxvarminprice = Най- ниската цена, ако са използвани варианти с различна цена</li><li>oxartnum = Номер на продукт</li><li>oxrating = Рейтинг на продуктите</li><li>oxstock = Наличност</li></ul>',

'HELP_SHOP_CONFIG_MUSTFILLFIELDS'             => 'Тук може да въведете задължителните полета при регистрация на потребител. Въведете едно поле за ред.<br>Най- често въвеждани са:<ul><li>oxuser__oxfname = Име</li><li>oxuser__oxlname = Фамилия</li><li>oxuser__oxstreet = Улица</li><li>oxuser__oxstreetnr = Номер</li><li>oxuser__oxzip = Пощенски код</li><li>oxuser__oxcity = Град</li><li>oxuser__oxcountryid = Страна</li><li>oxuser__oxfon = Телефонен номер</li></ul><br>Можете също да дефинирате задължителните полета, ако потребителя въвежда различен адрес за доставка. Най- често въвеждани са:<ul><li>oxaddress__oxfname = Име</li><li>oxaddress__oxlname = Фамилия</li><li>oxaddress__oxstreet = Улица</li><li>oxaddress__oxstreetnr = Номер</li><li>oxaddress__oxzip = Пощенски код</li><li>oxaddress__oxcity = Град</li><li>oxaddress__oxcountryid = Страна</li><li>oxaddress__oxfon = Телефонен номер</li></ul>',

'HELP_SHOP_CONFIG_USENEGATIVESTOCK'           => 'Посредством <span class="navipath_or_inputname">Allow negative Stock Values</span> може да дефинирате как да се калкулира наличността на продуктите, ако има продукти с нулева наличност:<br><ul><li>Ако настройката е отметната, отрицателните наличности се калкулират, ако са закупени бройки надхвърлящи наличността.</li><li>Ако настройката не е отметната, наличността не пада под 0, дори да са закупени бройки надхвърлящи наличността.</li></ul>',

'HELP_SHOP_CONFIG_SETORDELETECURRENCY'        => 'Добавете или премахнете валути. Всеки ред съдържа валутни параметри, разделени от символа @.<br /><br /><ul><li>Влутен код според ISO 4217 (e.g. EUR)</li><li>валутен курс към базова валута със стойност 1.00</li><li>десетичен разделител</li><li>хиляден разделител</li><li>валутен знак</li><li>място на десетичната запетая</li><li>допълнителен параметър"Front". Ако е въведен, валутният знак се показва пред цената</li></ul>',

'HELP_SHOP_CONFIG_NEWARTBYINSERT'             => 'На главната страница на вашия електронен магазин се показват най- новите продукти<span class="filename_filepath_or_italic">Just arrived!</span>. Тази настройка определя как да се калкулират най- новите продукти: по дата на създаване или по дата на последно направена промяна от администратор.',

/** @deprecated since v6.5.4 (2020-04-06); Suggest feature will be removed completely */
'HELP_SHOP_CONFIG_ALLOW_SUGGEST_ARTICLE'      => 'Активиране на препоръки за продукт на продуктовата страница.',
/** end deprecated */

'HELP_SHOP_CONFIG_SEND_TECHNICAL_INFORMATION_TO_OXID' => 'Бизнес данни или информация за клентите няма да бъде разпространявана. Събраните данни се използват единствено за технологични цели. Подобна информация ще бъде събирана, за да се подобри качеството на нашите продукти:<ul>  <li>броя инсталирани OXID eShop Community Edition</li>  <li>приблизителен брой на инсталирани разширения в един електронен магазин на OXID</li>  <li>най- популярните разширения за един електронен магазин на OXID</li></ul>',

'HELP_SHOP_CONFIG_DELETERATINGLOGS'           => 'Ако потребителите оценят даден продукт веднъж, не могат да дадат повторна оценка за същия продукт. Тук може да кажете след колко дни потребител може да даде повторна оценка за даден продукт. Ако полето не е отметнато - продуктите могат да бъдат оценявани еднократно.',

'HELP_SHOP_CONFIG_DISABLEONLINEVATIDCHECK'    => 'Онлайн проверката на идентификационен номер по ДДС стартира, ако потребител от друга държава, членка на ЕС въведе идентификационен номер при поръчка. Ако номерът е валиден, на направената поръчка не се добавя ДДС.<br>Ако опцията не е отметната, се начислява ДДС, валидно за съответната държава.',

'HELP_SHOP_CONFIG_ALTVATIDCHECKINTERFACEWSDL' => 'Въвеждане на алтернативен урл за онлайн проверка на идентификационен номер по ДДС.',

'HELP_SHOP_CONFIG_PSLOGIN'                    => 'Private Sales Login трансформира стандартния магазин в магазин само за специални членове. Така се сформират потребителски групи с подобни интереси. Тази настройка не позволява достъп до всички страници в магазина.',

'HELP_SHOP_CONFIG_BASKETEXCLUDE'              => 'Позволява включване на продукти само от една (главна) категория. При промяна на категорията, потребителят ще бъде помолен да финализира поръчката (да премине към чекаут) или да продължи с пазаруването (при което кошницата ще бъде изчистена). Използването на тази функция в съчетание с подходящо организирана структура на категориите позволява отделни кошници за отделните доставчици.',

'HELP_SHOP_CONFIG_BASKETRESERVATION'          => 'Когато тази опция не е активна, наличността на даден продукт намалява при потвърждаване на поръчката от потребителя и финализиран чекаут.<br><br> Когато опцията е активна, функционалността се променя: наличността намалява и продуктът е <b>резервиран<b> когато е поставен в кошницата. Резервацията се отменя, когато продуктите в кошницата са купени или кошницата е вече невалидна.',

'HELP_SHOP_CONFIG_BASKETRESERVATIONTIMEOUT'   => 'След изтичане на валидността на кошницата, резервираните продукти се връщат в магазина, а кошницата се изпразва.',

'HELP_SHOP_CONFIG_INVITATION'                 => 'С поканата можете да приканите приятели да посетят магазина и да получат кредит под форма на точки за всяка покана, която те изпратят.',

'HELP_SHOP_CONFIG_POINTSFORINVITATION'        => '',

'HELP_SHOP_CONFIG_POINTSFORREGISTRATION'      => '',

// @deprecated since v6.5.1 (2019-02-07); credit card payment method will be no longer supported
'HELP_SHOP_CONFIG_ATTENTION'                  => '',
// END deprecated

'HELP_SHOP_CONFIG_SHOWTSINTERNATIONALFEESMESSAGE' => '',

'HELP_SHOP_CONFIG_SHOWTSCODMESSAGE'           => '',

'HELP_SHOP_CONFIG_DOWNLOADS'                  => '',

'HELP_SHOP_CONFIG_DOWNLOADS_PATH'             => '',

'HELP_SHOP_CONFIG_MAX_DOWNLOADS_COUNT'        => '',

'HELP_SHOP_CONFIG_LINK_EXPIRATION_TIME_UNREGISTERED' => '',

'HELP_SHOP_CONFIG_LINK_EXPIRATION_TIME'       => '',

'HELP_SHOP_CONFIG_PARCELSERVICE'              => '',

'HELP_SHOP_CONFIG_DOWNLOAD_EXPIRATION_TIME'   => '',

'HELP_SHOP_CONFIG_LOADREVIEWS'                  => '',

'HELP_SHOP_CONFIG_INCLUDE_PRODUCT_REVIEW_LINKS_IN_ORDER_EMAIL' => '',

'HELP_SHOP_MALL_MALLMODE'                     => '',

'HELP_SHOP_MALL_PRICEADDITION'                => '',

'HELP_SHOP_PERF_NEWESTARTICLES'               => '',

'HELP_SHOP_PERF_TOPSELLER'                    => '',

'HELP_SHOP_PERF_LOADFULLTREE'                 => '',

'HELP_SHOP_PERF_LOADACTION'                   => '',

'HELP_SHOP_PERF_USESELECTLISTPRICE'           => '',

'HELP_SHOP_PERF_DISBASKETSAVING'              => '',

'HELP_SHOP_PERF_LOADDELIVERY'                 => '',

'HELP_SHOP_PERF_LOADPRICE'                    => '',

'HELP_SHOP_PERF_PARSELONGDESCINSMARTY'        => '',

'HELP_SHOP_PERF_LOADSELECTLISTSINALIST'       => '',

'HELP_SHOP_PERF_CHECKIFTPLCOMPILE'            => '',

'HELP_SHOP_PERF_CLEARCACHEONLOGOUT'           => '',

'HELP_SHOP_SEO_TITLEPREFIX'                   => '',

'HELP_SHOP_SEO_TITLESUFFIX'                   => '',

'HELP_SHOP_SEO_IDSSEPARATOR'                  => '',

'HELP_SHOP_SEO_SAFESEOPREF'                   => '',

'HELP_SHOP_SEO_RESERVEDWORDS'                 => '',

'HELP_SHOP_SEO_SKIPTAGS'                      => '',

'HELP_SHOP_SEO_LOWERCASEURLS'                 => '',

'HELP_SHOP_SEO_STATICURLS'                    => '',

'HELP_SHOP_MAIN_PRODUCTIVE'                   => '',

'HELP_SHOP_MAIN_ACTIVE'                       => '',

'HELP_SHOP_MAIN_INFOEMAIL'                    => '',

'HELP_SHOP_MAIN_ORDEREMAIL'                   => '',

'HELP_SHOP_MAIN_OWNEREMAIL'                   => '',

'HELP_SHOP_MAIN_SMTPSERVER'                   => '',

'HELP_ARTICLE_MAIN_ALDPRICE'                  => '',

'HELP_ARTICLE_MAIN_VAT'                       => '',

'HELP_ARTICLE_EXTEND_UNITQUANTITY'            => '',

'HELP_ARTICLE_EXTEND_EXTURL'                  => '',

'HELP_ARTICLE_EXTEND_TPRICE'                  => '',

'HELP_ARTICLE_EXTEND_QUESTIONEMAIL'           => '',

'HELP_ARTICLE_EXTEND_NONMATERIAL'             => '',

'HELP_ARTICLE_EXTEND_FREESHIPPING'            => '',

'HELP_ARTICLE_EXTEND_BLFIXEDPRICE'            => '',

'HELP_ARTICLE_EXTEND_SKIPDISCOUNTS'           => '',

'HELP_ARTICLE_EXTEND_TEMPLATE'                => '',

'HELP_ARTICLE_EXTEND_ISCONFIGURABLE'          => '',

'HELP_ARTICLE_EXTEND_UPDATEPRICE'             => '',

'HELP_ARTICLE_EXTEND_SHOWCUSTOMAGREEMENT'     => '',

'HELP_ARTICLE_FILES_MAX_DOWNLOADS_COUNT'      => '',

'HELP_ARTICLE_FILES_LINK_EXPIRATION_TIME_UNREGISTERED' => '',

'HELP_ARTICLE_FILES_LINK_EXPIRATION_TIME'     => '',

'HELP_ARTICLE_FILES_NEW'                      => '',

'HELP_ARTICLE_FILES_DOWNLOAD_EXPIRATION_TIME' => '',

'HELP_ARTICLE_PICTURES_ICON'                  => '',

'HELP_ARTICLE_PICTURES_THUMB'                 => '',

'HELP_ARTICLE_PICTURES_PIC1'                  => '',

'HELP_ARTICLE_PICTURES_ZOOM1'                 => '',

'HELP_ARTICLE_STOCK_REMINDACTIV'              => '',

'HELP_ARTICLE_STOCK_STOCKFLAG'                => '',

'HELP_ARTICLE_IS_DOWNLOADABLE'                => '',

'HELP_ARTICLE_STOCK_REMINDAMAOUNT'            => '',

'HELP_ARTICLE_STOCK_DELIVERY'                 => '',

'HELP_ARTICLE_SEO_FIXED'                      => '',

'HELP_ARTICLE_SEO_KEYWORDS'                   => '',

'HELP_ARTICLE_SEO_DESCRIPTION'                => '',

'HELP_ARTICLE_SEO_ACTCAT'                     => '',

'HELP_ARTICLE_STOCK_STOCKTEXT'                => '',

'HELP_ARTICLE_STOCK_NOSTOCKTEXT'              => '',

'HELP_ARTICLE_STOCK_AMOUNTPRICE_AMOUNTFROM'   => '',

'HELP_ARTICLE_STOCK_AMOUNTPRICE_PRICE'        => '',

'HELP_ARTICLE_VARIANT_VARNAME'                => '',

'HELP_ATTRIBUTE_MAIN_DISPLAYINBASKET'         => '',

'HELP_CATEGORY_MAIN_HIDDEN'                   => '',

'HELP_CATEGORY_MAIN_PARENTID'                 => '',

'HELP_CATEGORY_MAIN_EXTLINK'                  => '',

'HELP_CATEGORY_MAIN_PRICEFROMTILL'            => '',

'HELP_CATEGORY_MAIN_DEFSORT'                  => '',

'HELP_CATEGORY_MAIN_SORT'                     => '',

'HELP_CATEGORY_MAIN_THUMB'                    => '',

'HELP_CATEGORY_MAIN_PROMOTION_ICON'           => '',

'HELP_CATEGORY_MAIN_SKIPDISCOUNTS'            => '',

'HELP_CATEGORY_SEO_FIXED'                     => '',

'HELP_CATEGORY_SEO_KEYWORDS'                  => '',

'HELP_CATEGORY_SEO_DESCRIPTION'               => '',

'HELP_CATEGORY_SEO_SHOWSUFFIX'                => '',

'HELP_CONTENT_MAIN_SNIPPET'                   => '',

'HELP_CONTENT_MAIN_MAINMENU'                  => '',

'HELP_CONTENT_MAIN_CATEGORY'                  => '',

'HELP_CONTENT_MAIN_MANUAL'                    => '',

'HELP_CONTENT_SEO_FIXED'                      => '',

'HELP_CONTENT_SEO_KEYWORDS'                   => '',

'HELP_CONTENT_SEO_DESCRIPTION'                => '',

'HELP_DELIVERY_MAIN_COUNTRULES'               => '',

'HELP_DELIVERY_MAIN_CONDITION'                => '',

'HELP_DELIVERY_MAIN_PRICE'                    => '',

'HELP_DELIVERY_MAIN_ORDER'                    => '',

'HELP_DELIVERY_MAIN_FINALIZE'                 => '',

'HELP_DELIVERYSET_MAIN_POS'                   => '',

'HELP_DISCOUNT_MAIN_SORT'                     => '',

'HELP_DISCOUNT_MAIN_PRICE'                    => '',

'HELP_DISCOUNT_MAIN_AMOUNT'                   => '',

'HELP_DISCOUNT_MAIN_REBATE'                   => '',

'HELP_GENERAL_SEO_ACTCAT'                     => '',

'HELP_GENERAL_SEO_FIXED'                      => '',

'HELP_GENERAL_SEO_SHOWSUFFIX'                 => '',

'HELP_GENERAL_SEO_OXKEYWORDS'                 => '',

'HELP_GENERAL_SEO_OXDESCRIPTION'              => '',

'HELP_GENIMPORT_FIRSTCOLHEADER'               => '',

'HELP_GENIMPORT_REPEATIMPORT'                 => '',

'HELP_LANGUAGE_DEFAULT'                       => '',

'HELP_LANGUAGE_ACTIVE'                        => '',

'HELP_PAYMENT_MAIN_SORT'                      => '',

'HELP_PAYMENT_MAIN_FROMBONI'                  => '',

'HELP_PAYMENT_MAIN_SELECTED'                  => '',

'HELP_PAYMENT_MAIN_AMOUNT'                    => '',

'HELP_PAYMENT_MAIN_ADDPRICE'                  => '',

'HELP_PAYMENT_MAIN_ADDSUMRULES'               => '',

'HELP_SELECTLIST_MAIN_TITLEIDENT'             => '',

'HELP_SELECTLIST_MAIN_FIELDS'                 => '',

'HELP_USER_MAIN_HASPASSWORD'                  => '',

'HELP_USER_PAYMENT_METHODS'                   => '',

'HELP_USER_EXTEND_NEWSLETTER'                 => '',

'HELP_USER_EXTEND_EMAILFAILED'                => '',

'HELP_USER_EXTEND_BONI'                       => '',

'HELP_MANUFACTURER_MAIN_ICON'                 => '',

'HELP_MANUFACTURER_SEO_FIXED'                 => '',

'HELP_MANUFACTURER_SEO_KEYWORDS'              => '',

'HELP_MANUFACTURER_SEO_DESCRIPTION'           => '',

'HELP_MANUFACTURER_SEO_SHOWSUFFIX'            => '',

'HELP_VOUCHERSERIE_MAIN_DISCOUNT'             => '',

'HELP_VOUCHERSERIE_MAIN_ALLOWSAMESERIES'      => '',

'HELP_VOUCHERSERIE_MAIN_ALLOWOTHERSERIES'     => '',

'HELP_VOUCHERSERIE_MAIN_SAMESEROTHERORDER'    => '',

'HELP_VOUCHERSERIE_MAIN_RANDOMNUM'            => '',

'HELP_VOUCHERSERIE_MAIN_VOUCHERNUM'           => '',

'HELP_VOUCHERSERIE_MAIN_CALCULATEONCE'        => '',

'HELP_WRAPPING_MAIN_PICTURE'                  => '',

'HELP_PROMOTIONS_BANNER_PICTUREANDLINK'       => '',

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
