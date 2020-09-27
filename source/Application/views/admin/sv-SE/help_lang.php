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

'HELP_SHOP_SYSTEM_OTHERCOUNTRYORDER'          => 'Här kan du ställa in om beställningar kan göras i länder för vilka inga fraktkostnader har angivits:<ul><li>Om inställningen är markerad, kan användare beställa. Användarna meddelas att de informeras om fraktkostnaderna manuellt.</li><li>Om inställningen är avmarkerad kan användare från länder där inga fraktkostnader är definierade inte beställa.</li></ul>',

'HELP_SHOP_SYSTEM_DISABLENAVBARS'             => 'Om den här inställningen är markerad visas de flesta navigationselement inte i kassan. På så sätt blir användarna inte distraherade i onödan i kassan.',

'HELP_SHOP_SYSTEM_DEFAULTIMAGEQUALITY'        => 'Rekommenderad inställning är mellan 40-80:<br><ul><li>Under 40 blir kompressionen tydligt synlig och bilderna blir suddiga.</li><li>Över 80 kan knappast någon kvalitetsförbättring upptäckas, men filstorleken ökar enormt.</li></ul><br>Standardvärdet är 75.',

'HELP_SHOP_SYSTEM_LDAP'                       => 'Redigera filen Core/oxldap.php.',

'HELP_SHOP_SYSTEM_SHOWVARIANTREVIEWS'         => 'Denna inställning påverkar hur recensioner av varianter hanteras: Om inställningen är markerad visas kommentarer från varianter också på den överordnade produkten.',

'HELP_SHOP_SYSTEM_VARIANTSSELECTION'          => 'I eShop finns det många listor som kan tillordnas produkter, t.ex. produkter till rabatter. Om den här inställningen markeras visas även varianter i dessa listor.',

'HELP_SHOP_SYSTEM_VARIANTPARENTBUYABLE'       => 'Denna inställning påverkar om överordnade produkter kan köpas:<ul><li>Om inställningen är markerad, kan överordnade produkter köpas.</li><li>Om inställningen är avmarkerad kan endast varianter av den överordnade produkten köpas.</li></ul>',

'HELP_SHOP_SYSTEM_VARIANTINHERITAMOUNTPRICE'  => '',

'HELP_SHOP_SYSTEM_ISERVERTIMESHIFT'           => '',

'HELP_SHOP_SYSTEM_INLINEIMGEMAIL'             => '',

'HELP_SHOP_SYSTEM_UTILMODULE'                 => '',

'HELP_SHOP_CACHE_ENABLED'                     => '',

'HELP_SHOP_CACHE_LIFETIME'                    => '',

'HELP_SHOP_CACHE_CLASSES'                     => '',

'HELP_SHOP_CACHE_REVERSE_PROXY_ENABLED'       => '',

'HELP_SHOP_CACHE_LAYOUT_CACHE_AGE'            => '',

'HELP_SHOP_CONFIG_ORDEROPTINEMAIL'            => '',

'HELP_SHOP_CONFIG_BIDIRECTCROSS'              => '',

'HELP_SHOP_CONFIG_STOCKONDEFAULTMESSAGE'      => '',

'HELP_SHOP_CONFIG_STOCKOFFDEFAULTMESSAGE'     => '',

'HELP_SHOP_CONFIG_OVERRIDEZEROABCPRICES'      => '',

'HELP_SHOP_CONFIG_SEARCHFIELDS'               => '',

'HELP_SHOP_CONFIG_SORTFIELDS'                 => '',

'HELP_SHOP_CONFIG_MUSTFILLFIELDS'             => '',

'HELP_SHOP_CONFIG_USENEGATIVESTOCK'           => '',

'HELP_SHOP_CONFIG_SETORDELETECURRENCY'        => '',

'HELP_SHOP_CONFIG_NEWARTBYINSERT'             => '',

/** @deprecated since v6.5.4 (2020-04-06); Suggest feature will be removed completely */
'HELP_SHOP_CONFIG_ALLOW_SUGGEST_ARTICLE'      => '',
/** end deprecated */

'HELP_SHOP_CONFIG_SEND_TECHNICAL_INFORMATION_TO_OXID' => '',

'HELP_SHOP_CONFIG_DELETERATINGLOGS'           => '',

'HELP_SHOP_CONFIG_DISABLEONLINEVATIDCHECK'    => '',

'HELP_SHOP_CONFIG_ALTVATIDCHECKINTERFACEWSDL' => '',

'HELP_SHOP_CONFIG_PSLOGIN'                    => '',

'HELP_SHOP_CONFIG_BASKETEXCLUDE'              => '',

'HELP_SHOP_CONFIG_BASKETRESERVATION'          => '',

'HELP_SHOP_CONFIG_BASKETRESERVATIONTIMEOUT'   => '',

'HELP_SHOP_CONFIG_INVITATION'                 => '',

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
