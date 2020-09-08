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

'HELP_SHOP_SYSTEM_DISABLENAVBARS'             => 'If this setting is checked, most navigation elements aren\'t shown during checkout. Thereby users aren\'t distracted unnecessarily during checkout.',

'HELP_SHOP_SYSTEM_DEFAULTIMAGEQUALITY'        => '' .
                                                 ''.
                                                 ''.
                                                 '',

'HELP_SHOP_SYSTEM_LDAP'                       => 'Please edit file core/oxldap.php.',

'HELP_SHOP_SYSTEM_SHOWVARIANTREVIEWS'         => 'This setting affects how reviews for variants are handled: If the setting is checked, remarks from variants are also shown at the parent product.',

'HELP_SHOP_SYSTEM_VARIANTSSELECTION'          => 'In eShop there are many lists for assigning products, e.g. assigning products to discounts. If this setting is checked, variants are shown in these lists, too.',

'HELP_SHOP_SYSTEM_VARIANTPARENTBUYABLE'       => '' .
                                                 '' .
                                                 '',

'HELP_SHOP_SYSTEM_VARIANTINHERITAMOUNTPRICE'  => 'Here you can set whether scales prices are inherited from the parent product: If the setting is checked, the scale prices of the parent product are also used for its variants.',

'HELP_SHOP_SYSTEM_ISERVERTIMESHIFT'           => 'The server the eShop is running on can be in a different time zone. With this setting the time shift can be adjusted: Enter the amount of hours that are to be added/subtracted from the server time, e. g. <kdb>+2</kdb> or <kdb>-2</kdb>',

'HELP_SHOP_SYSTEM_INLINEIMGEMAIL'             => 'If the setting is checked, the pictures in e-mails are sent together with the e-mail. If the setting is unchecked, the pictures are downloaded by the e-mail program when the e-mail is opened.',

'HELP_SHOP_SYSTEM_UTILMODULE'                 => 'Please enter your custom PHP file here, which will overwrite eShop functions at shop start.',


'HELP_SHOP_CACHE_ENABLED'                     => 'If Dynamic content caching is active, additional contents are cached for increasing performance. Deactivate this setting as long as you adapt the Shop (writing modules, adapting templates and so on).',

'HELP_SHOP_CACHE_LIFETIME'                    => 'Here you set how many seconds cached contents are saved at most before they are recreated. The default setting is 36000 seconds.',

'HELP_SHOP_CACHE_CLASSES'                     => 'Here you set which view classes are cached.<br> Only change this setting if you are familiar with the caching mechanisms!',

'HELP_SHOP_CACHE_REVERSE_PROXY_ENABLED'       => 'Activates a caching HTTP Reverse Proxy. Note: Do not use "Dynamic Content Caching" at the same time, as it could slow down the performance.',

'HELP_SHOP_CACHE_LAYOUT_CACHE_AGE'            => 'Sets lifetime of page layout in seconds. This will be send via HTTP headers, specifying header value "Age".',

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

'HELP_SHOP_CONFIG_NEWARTBYINSERT'             => 'On the front page of your eShop the newest products are shown in <span class="filename_filepath_or_italic">Just arrived!</span>.  This setting determines how the newest products are calculated: by date of creation or by date of last change in admin/last order.',

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

'HELP_SHOP_CONFIG_DELETERATINGLOGS'           => 'If users rate a product, they cannot rate the product again. Here you can set after how many days users are allowed to rate a product again. Leave empty to disable - products can be rated only once per user.',

'HELP_SHOP_CONFIG_DISABLEONLINEVATIDCHECK'    => ''.
                                                 '',

'HELP_SHOP_CONFIG_ALTVATIDCHECKINTERFACEWSDL' => 'Here you can enter an alternative URL for the online GST ID check.',

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

'HELP_SHOP_CONFIG_BASKETRESERVATIONTIMEOUT'   => 'After this timeout the reserved products are returned to stock and customer\'s basket is cleared.',

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

'HELP_SHOP_CONFIG_SHOWTSINTERNATIONALFEESMESSAGE' => 'In the 4th step of the checkout process the CMS page "oxtsinternationalfees" is additionally displayed.',

'HELP_SHOP_CONFIG_SHOWTSCODMESSAGE'           => 'In the 4th step of the checkout process the CMS page "oxtscodmessage" is additionally displayed.',

'HELP_SHOP_CONFIG_DOWNLOADS'                  => 'Shop with downloadable products. Activate here, that products can be ordered and downloaded.',

'HELP_SHOP_CONFIG_DOWNLOADS_PATH'             => 'Path where files of downloadable products are stored.',

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

'HELP_SHOP_MALL_PRICEADDITION'                => 'You can define a surcharge on all product prices in this shop: Enter the surcharge and select if its a percental (<span class="userinput_or_code">%</span>) or absolute (<span class="userinput_or_code">abs</span>).',



'HELP_SHOP_PERF_NEWESTARTICLES'               => '' .
                                                 '' .
                                                 '' .
                                                 '',

'HELP_SHOP_PERF_TOPSELLER'                    => '' .
                                                 '' .
                                                 '' .
                                                 '',

'HELP_SHOP_PERF_LOADFULLTREE'                 => 'If this setting is checked, the complete category tree is shown in the category navigation (all categories are expanded). This only works if the category navigation is not shown at top.',

'HELP_SHOP_PERF_LOADACTION'                   => 'If this setting is checked, promotions like <span class="filename_filepath_or_italic">Just arrived!</span> and <span class="filename_filepath_or_italic">Top of the Shop</span> are loaded and shown.',

'HELP_SHOP_PERF_USESELECTLISTPRICE'           => 'In selection lists surcharges/discounts can be set up. If this setting is checked, the surcharges/discounts are loaded and applied. If unchecked, the surcharges/discounts aren\'t applied.',

'HELP_SHOP_PERF_DISBASKETSAVING'              => 'The basket of registered users is saved. When they visit your eShop again, the basket contents are loaded. If you activate this setting, the baskets aren\'t saved any more.',

'HELP_SHOP_PERF_LOADDELIVERY'                 => 'If you deactivate this setting, no delivery costs are calculated: The delivery costs are always at $0.00',

'HELP_SHOP_PERF_LOADPRICE'                    => 'If you deactivate this setting, no product prices are calculated: No prices are shown.',

'HELP_SHOP_PERF_PARSELONGDESCINSMARTY'        => 'If this setting is active, the descriptions of products and categories are parsed trough Smarty: You can use Smarty tags (e. g. for using variables) <br>',

'HELP_SHOP_PERF_LOADSELECTLISTSINALIST'       => 'Normally selection lists are only shown in the detail view of a product. If you activate this setting, the selection lists are also shown in product lists (e. g. search results, categories).',

'HELP_SHOP_PERF_CHECKIFTPLCOMPILE'            => 'If this setting is activated the eShop checks on each call if any templates were changed. If so, the output is  recalculated. Activate this setting when adapting templates, deactivate it if the eShop is live for better performance. <br>Further information can be found in the <a href="http://www.oxid-esales.com/en/resources/help-faq/eshop-manual/advices-adepting-templates" target="_blank">caching article in the manual</a>.',

'HELP_SHOP_PERF_CLEARCACHEONLOGOUT'           => 'Usually the complete cache is emptied as soon as you save any changes in the eShop admin. This can lead to performance problems in admin. If this setting is activated, the cache is only emptied when you log out from eShop admin.',





'HELP_SHOP_SEO_TITLEPREFIX'                   => '' .
                                                 '',

'HELP_SHOP_SEO_TITLESUFFIX'                   => '' .
                                                 '',

'HELP_SHOP_SEO_IDSSEPARATOR'                  => '' .
                                                 '',

'HELP_SHOP_SEO_SAFESEOPREF'                   => 'If several products have the same name and are in the same category, they would get the same SEO URL. For avoiding this, the SEO Suffix is attached. If no SEO Suffix is defined, <span class="filename_filepath_or_italic">oxid</span> is used.',

'HELP_SHOP_SEO_RESERVEDWORDS'                 => 'Some URLs are defined in OXID eShop, like www.youreshop.com/admin for accessing eShop admin. If a category was named <span class="filename_filepath_or_italic">admin</span> the SEO URL would be www.youreshop.com/admin too - the category couldn\'t be accessed. Therefore the SEO suffix is attached to these URLs. You can define here which URLs are suffixed automatically.',

'HELP_SHOP_SEO_SKIPTAGS'                      => 'If no META tags are defined for products and categories, the META tags are created automatically. thereby very common words can be omitted. All words entered here are omitted when creating the META tags.',
'HELP_SHOP_SEO_LOWERCASEURLS'                 => '',

'HELP_SHOP_SEO_STATICURLS'                    => 'For special pages (e. g. general terms and conditions) you can enter fixed SEO URLs. When selecting a static URL, the normal URL is shown in <span class="navipath_or_inputname">Standard URL</span>. In the input fields below you can define a SEO URL for each language.',



'HELP_SHOP_MAIN_PRODUCTIVE'                   => '' .
                                                 '' .
                                                 '',

'HELP_SHOP_MAIN_ACTIVE'                       => 'With <span class="navipath_or_inputname">Active</span> you can enable/disable the complete eShop. If the eShop is disabled, a message saying the eShop is temporary offline is displayed to the users. This can be useful for maintenance.',

'HELP_SHOP_MAIN_INFOEMAIL'                    => 'All e-mails sent via the contact page are sent to this e-mail address.',

'HELP_SHOP_MAIN_ORDEREMAIL'                   => 'When users order they receive an e-mail with a summary of the order. Answers to this e-mail are sent to <span class="navipath_or_inputname">Order e-mail reply</span>.',

'HELP_SHOP_MAIN_OWNEREMAIL'                   => 'When users order, you receive an e-mail with a summary of the order. These e-mails are sent to <span class="navipath_or_inputname">Order e-mails to</span>.',

'HELP_SHOP_MAIN_SMTPSERVER'                   => 'SMTP data is needed for sending e-mails (e.g. sending customers an order confirmation e-mail) Further information can be found in the <a href="http://www.oxid-esales.com/de/resources/help-faq/eshop-manual/entering-smtp-data" target="_blank">accordant manual entry</a>.',

'HELP_ARTICLE_MAIN_ALDPRICE'                  => 'With <span class="navipath_or_inputname">Alt. Prices</span> you can set up special prices for certain users. More information is available in the <a href="http://www.oxid-esales.com/de/resources/help-faq/eshop-manual/set-alternative-prices-special-users" target="_blank">eShop Manual</a> on the OXID eSales website.',

'HELP_ARTICLE_MAIN_VAT'                       => 'Here you can enter a special GST for this product. This GST is used for this product in all later calculations (basket, order, invoice)',

'HELP_ARTICLE_EXTEND_UNITQUANTITY'            => 'With <span class="navipath_or_inputname">Quantity</span> and <span class="navipath_or_inputname">Unit</span> you can set the price per quantity unit. The price per quantity unit is calculated and displayed with the product (e.g. 1.43 EUR per liter). In <span class="navipath_or_inputname">Quantity</span>, enter the amount of the product (e.g. <span class="userinput_or_code">1.5</span>), in <span class="navipath_or_inputname">Unit</span> define the according quantity unit (e.g. <span class="userinput_or_code">liter</span>). You can choose unit type from given values or, by selecting blank unit type "-", enter unit type manually. If you wish to append existing type list, please follow this <a href="http://oxidforge.org/en/adding-new-unit-types.html" target="_blank">link</a> for instructions.',

'HELP_ARTICLE_EXTEND_EXTURL'                  => 'In <span class="navipath_or_inputname">External URL</span> you can enter a link where further information about the product is available (e. g. on the manufacturer\'s website). In <span class="navipath_or_inputname">Text for external URL</span> you can enter the text which is linked, e .g. <span class="userinput_or_code">Further information on the manufacturer\'s website</span>.',

'HELP_ARTICLE_EXTEND_TPRICE'                  => 'In <span class="navipath_or_inputname">RRP</span> you can enter the recommended retail price of the manufacturer. If you enter the RRP it is shown to the users: Above the product price <span class="filename_filepath_or_italic">Reduced from RRP now only</span> is displayed.',

'HELP_ARTICLE_EXTEND_QUESTIONEMAIL'           => 'At <span class="navipath_or_inputname">Alt. Contact</span> you can enter an e-mail address. If users submit questions on this product, they will be sent to this e-mail address. If no e-mail address is entered, the query will be send to the normal info e-mail address.',

'HELP_ARTICLE_EXTEND_NONMATERIAL'             => 'Setting is inherited from Parent product to Variants and applies to the entire product.',

'HELP_ARTICLE_EXTEND_FREESHIPPING'            => 'Setting is inherited from Parent product to Variants and applies to the entire product.',

'HELP_ARTICLE_EXTEND_BLFIXEDPRICE'            => 'Price alert can be turned off for this product.',

'HELP_ARTICLE_EXTEND_SKIPDISCOUNTS'           => 'If <span class="navipath_or_inputname">Skip all negative discounts</span> is active, negative allowances will not be calculated for this product. These include discounts and vouchers.',

'HELP_ARTICLE_EXTEND_TEMPLATE'                => 'The detail view of a product can be displayed with a different template. For doing so, enter path and name of the template to be used. Further information is available in the <a href="http://www.oxid-esales.com/de/resources/help-faq/eshop-manual/display-certain-products-or-categories-another-template" target="_blank">accordant manual entry</a>.',

'HELP_ARTICLE_EXTEND_ISCONFIGURABLE'          => ''.
                                                 '',

'HELP_ARTICLE_EXTEND_UPDATEPRICE'             => 'Prices can be changed on a defined time. Given fields update standard prices. If you leave price values "0", prices will not be updated.',

'HELP_ARTICLE_EXTEND_SHOWCUSTOMAGREEMENT'     => 'If this option is activated, users have to confirm terms and conditions in the fourth step of the check-out process for this specific item. Please make sure the general option is activated as well and the product item is intangible or downloadable.',

'HELP_ARTICLE_FILES_MAX_DOWNLOADS_COUNT'      => 'Here you can define how many times user can download from the same link after order. For this file you can overwrite the default setting, which was defined in Master Settings -> Core Setting -> Settings -> Downloads for all products.',

'HELP_ARTICLE_FILES_LINK_EXPIRATION_TIME_UNREGISTERED' => 'Here you can define how many times user can download from the same link, if user ordered without registration. For this file you can overwrite the default setting, which was defined in Master Settings -> Core Setting -> Settings -> Downloads for all products.',

'HELP_ARTICLE_FILES_LINK_EXPIRATION_TIME'     => 'Specify the time in hours, the download link is valid after order. For this file you can overwrite the default setting, which was defined in Master Settings -> Core Setting -> Settings -> Downloads for all products.',

'HELP_ARTICLE_FILES_NEW'                      => 'Enter the name of a via FTP transferred file or upload a new file here. Note that large files should be uploaded via FTP. File size limitation is valid only when file is uploaded via admin. This limitation depends on the PHP settings of the server and might be edited only there.',

'HELP_ARTICLE_FILES_DOWNLOAD_EXPIRATION_TIME' => 'Specify the time in hours, the download link is valid after the first download. For this file you can overwrite the default setting, which was defined in Master Settings -> Core Setting -> Settings -> Downloads for all products.',

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

'HELP_ARTICLE_STOCK_REMINDACTIV'              => 'Setting is inherited from Parent product to Variants and applies to the entire product.',

'HELP_ARTICLE_STOCK_STOCKFLAG'                => '' .
                                                 '' .
                                                 '' .
                                                 '' .
                                                 '',

'HELP_ARTICLE_IS_DOWNLOADABLE'                => 'Files of this product can be downloaded.',

'HELP_ARTICLE_STOCK_REMINDAMAOUNT'            => 'With <span class="navipath_or_inputname">Send e-mail if stock falls below value</span> you can specify that an e-mail will be sent as soon as the stock level falls below the value entered. Select the check box and then enter the level at which you want to be notified.',

'HELP_ARTICLE_STOCK_DELIVERY'                 => 'Here you can enter the date when the product will be available again if it is sold out. The format is year-month-day, e. g. 2009-02-16.',

'HELP_ARTICLE_SEO_FIXED'                      => 'You can let the eShop recalculate the SEO URLs. A product page gets a new SEO URL if e. g. the title of the product has changed. The setting <span class="navipath_or_inputname">Fixed URL</span> prevents this: If it is active, the old SEO URL is kept and no new SEO URL is calculated.',

'HELP_ARTICLE_SEO_KEYWORDS'                   => 'These keywords are integrated in the HTML sourcecode of the product page (META keywords). This information is used by search engines. Suitable keywords for the product can be entered here. If it\'s left blank, the keywords are generated automatically.',

'HELP_ARTICLE_SEO_DESCRIPTION'                => 'This description is integrated in the HTML sourcecode of the product page (META description). This text is often displayed in result pages of search engines. A suitable description can be entered here. If it\'s left blank, the description is generated automatically.',

'HELP_ARTICLE_SEO_ACTCAT'                     => 'You can define several SEO URLs for products: For certain categories and manufacturer pages. With <span class="navipath_or_inputname">Active Category/Vendor</span> you can select the SEO URL you want to edit.',

'HELP_ARTICLE_STOCK_STOCKTEXT'                => 'Here you can enter a message which is shown if the product is in stock. Further information about stock messages can be found in the <a href="http://www.oxid-esales.com/en/resources/help-faq/eshop-manual/setting-messages-stock-levels" target="_blank">article about stock messages in the manual</a>.',

'HELP_ARTICLE_STOCK_NOSTOCKTEXT'              => 'Here you can enter a message which is shown if the product is off stock. Further information about stock messages can be found in the <a href="http://www.oxid-esales.com/en/resources/help-faq/eshop-manual/setting-messages-stock-levels" target="_blank">article about stock messages in the manual</a>.',

'HELP_ARTICLE_STOCK_AMOUNTPRICE_AMOUNTFROM'   => 'In <span class="navipath_or_inputname">Quantity From/To/bis</span> you set for which quantity range the scale price is valid.<br>Further information about scale prices can be found in the <a href="http://www.oxid-esales.com/en/resources/help-faq/eshop-manual/setting-graduated-prices" target="_blank">scale price article in the manual.</a>.',

'HELP_ARTICLE_STOCK_AMOUNTPRICE_PRICE'        => '' .
                                                 '',

'HELP_ARTICLE_VARIANT_VARNAME'                => '<span class="navipath_or_inputname">Name of Selection</span> defines how the selection of the variants is labeled , e.g. <span class="userinput_or_code">Colour</span> or <span class="userinput_or_code">Size</span>.<br> Further Information can be found in the <a href="http://www.oxid-esales.com/en/resources/help-faq/eshop-manual/setting-variants-a-product" target="_blank">variants article in the manual</a>.',

'HELP_ATTRIBUTE_MAIN_DISPLAYINBASKET'         => 'If checked, this attribute\'s value will be shown in cart and order overview below the product title.',

'HELP_CATEGORY_MAIN_HIDDEN'                   => 'With <span class="navipath_or_inputname">Hidden</span> <ou can define if this category is shown to users. If a category is hidden it is not shown to the users, even if it is active.',

'HELP_CATEGORY_MAIN_PARENTID'                 => '' .
                                                 '' .
                                                 '',

'HELP_CATEGORY_MAIN_EXTLINK'                  => 'With <span class="navipath_or_inputname">External Link</span>, you can enter a link that opens when users click on the category. <span class="warning_or_important_hint">Use this function only if you want to display a link in the category navigation. It causes the category to lose its normal function!</span>',

'HELP_CATEGORY_MAIN_PRICEFROMTILL'            => 'With <span class="navipath_or_inputname">Price From/To</span> you can specify that <span class="warning_or_important_hint">all</span> products in a certain price range are shown in this category. Enter the lower limit in the first entry field and the upper limit in the second entry field. Then <span class="warning_or_important_hint">all products of the eShop</span> within this price range are shown in this category.',

'HELP_CATEGORY_MAIN_DEFSORT'                  => 'With <span class="navipath_or_inputname">Fast Sorting</span> you specify the manner in which the products in the category will be sorted. To learn about the available options, refer to <a href="http://www.oxid-esales.com/en/resources/help-faq/eshop-manual/sorting-products" target="_blank">the eShop manual</a> an the OXID eSales website.',

'HELP_CATEGORY_MAIN_SORT'                     => 'You can use <span class="navipath_or_inputname">Sorting</span> to define the order in which categories are displayed: The category with the lowest number is displayed at the top, and the category with the highest number at the bottom.',

'HELP_CATEGORY_MAIN_THUMB'                    => 'With <span class="navipath_or_inputname">Picture</span> and <span class="navipath_or_inputname">Upload Picture</span> you can upload a picture for this category. The picture is shown at top of the category is viewed. Select the picture in <span class="navipath_or_inputname">Upload Picture</span>. When clicking on <span class="navipath_or_inputname">Save</span>, the picture is uploaded. After uploading, the filename of the picture is shown in <span class="navipath_or_inputname">Picture</span>.',

'HELP_CATEGORY_MAIN_PROMOTION_ICON'           => 'With <span class="navipath_or_inputname">promotion icon</span> and <span class="navipath_or_inputname">upload icon</span> you can upload a category picture for promotion on start page. For displaying category promotion see <span class="navipath_or_inputname">Master Settings -> Customer Info -> Top offer in categories</span>',

'HELP_CATEGORY_MAIN_SKIPDISCOUNTS'            => '<li>If <span class="navipath_or_inputname">Skip all negative discounts</span> is active, negative allowances will not be calculated for any products in this category.',



'HELP_CATEGORY_SEO_FIXED'                     => 'You can let the eShop recalculate the SEO URLs. A category page gets a new SEO URL if e. g. the title of the category has changed. The setting <span class="navipath_or_inputname">Fixed URL</span> prevents this: If it is active, the old SEO URL is kept and no new SEO URL is calculated.',

'HELP_CATEGORY_SEO_KEYWORDS'                  => 'These keywords are integrated in the HTML sourcecode of the category page (META keywords). This information is used by search engines. Suitable keywords for the category can be entered here. If it\'s left blank, the keywords are generated automatically.',

'HELP_CATEGORY_SEO_DESCRIPTION'               => 'This description is integrated in the HTML sourcecode of the category page (META description). This text is often displayed in result pages of search engines. A suitable description can be entered here. If it\'s left blank, the description is generated automatically.',

'HELP_CATEGORY_SEO_SHOWSUFFIX'                => 'With this setting you can specify if the title suffix is shown in the browser window title when the category page is opened. The title suffix can be set in <span class="navipath_or_inputname">Master Settings -> Core Settings -> SEO -> Title Suffix</span>.',
'HELP_CONTENT_MAIN_SNIPPET'                   => 'If you select <span class="navipath_or_inputname">Snippet</span> you can include this CMS page within other CMS pages by its ident: <span class="userinput_or_code">[{ oxcontent ident=ident_of_the_cms_page }]</span>',

'HELP_CONTENT_MAIN_MAINMENU'                  => 'If you select <span class="navipath_or_inputname">Upper Menu</span>, a link to this CMS page is shown in the upper menu (At Terms and About Us).',

'HELP_CONTENT_MAIN_CATEGORY'                  => 'If you select <span class="navipath_or_inputname">Category</span>, a link to this CMS page is shown in the category navigation below the other categories.',

'HELP_CONTENT_MAIN_MANUAL'                    => 'If you select <span class="navipath_or_inputname">Manually</span>, a link is created which you can use to include this CMS page in other CMS pages. The link is shown below when you click on <span class="navipath_or_inputname">Save</span>',
'HELP_CONTENT_SEO_FIXED'                      => 'You can let the eShop recalculate the SEO URLs. A CMS page gets a new SEO URL if e. g. the title of the CMS page has changed. The setting <span class="navipath_or_inputname">Fixed URL</span> prevents this: If it is active, the old SEO URL is kept and no new SEO URL is calculated.',

'HELP_CONTENT_SEO_KEYWORDS'                   => 'These keywords are integrated in the HTML sourcecode of the CMS page (META keywords). This information is used by search engines. Suitable keywords for the CMS page can be entered here. If it\'s left blank, the keywords are generated automatically.',

'HELP_CONTENT_SEO_DESCRIPTION'                => 'This description is integrated in the HTML sourcecode of the CMS page (META description). This text is often displayed in result pages of search engines. A suitable description can be entered here. If it\'s left blank, the description is generated automatically.',



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

'HELP_DELIVERY_MAIN_ORDER'                    => 'You can use <span class="navipath_or_inputname">Order of rule processing</span> to specify the order in which the delivery cost rules will be run. The delivery cost rule with the lowest number is run first. The order is important if the setting <span class="navipath_or_inputname">Don\'t calculate further rules if this rule matches</span> is used.',

'HELP_DELIVERY_MAIN_FINALIZE'                 => 'You can use <span class="navipath_or_inputname">Don\'t calculate further rules if this rule matches</span> to specify that no further rules are to be run if this delivery cost rule is valid and is being run. For this option, the order in which the delivery cost rules are run is important. It is specified through the <span class="navipath_or_inputname">Order of Rule processing</span>.',



'HELP_DELIVERYSET_MAIN_POS'                   => '<span class="navipath_or_inputname">Sorting</span> specifies the order in which the delivery methods are displayed to users: The delivery method with the lowest number is displayed at the top.',



'HELP_DISCOUNT_MAIN_SORT'                     => '',

'HELP_DISCOUNT_MAIN_PRICE'                    => 'You can use <span class="navipath_or_inputname">Purchase Price</span> to specify that the discount is only valid for certain purchase prices. If the discount is to be valid for all purchase prices, enter <span class="userinput_or_code">0</span> in <span class="navipath_or_inputname">From</span> and <span class="userinput_or_code">0</span> in <span class="navipath_or_inputname">To</span>.',

'HELP_DISCOUNT_MAIN_AMOUNT'                   => 'You can use <span class="navipath_or_inputname">Quantity</span> to specify that the discount is only valid for certain purchase quantities. If you want the discount to be valid for all purchase quantities, enter <span class="userinput_or_code">0</span> in <span class="navipath_or_inputname">From</span> and <span class="userinput_or_code">0</span> in <span class="navipath_or_inputname">To</span>.',

'HELP_DISCOUNT_MAIN_REBATE'                   => '' .
                                                 '' .
                                                 '' .
                                                 '' .
                                                 ''.
                                                 '',



'HELP_GENERAL_SEO_ACTCAT'                     => 'You can define several SEO URLs for products: For certain categories and manufacturer pages. With <span class="navipath_or_inputname">Active Category/Vendor</span> you can select the SEO URL you want to edit.',

'HELP_GENERAL_SEO_FIXED'                      => 'The eShop automatically recalculate the SEO URLs. For example, a product page gets a new SEO URL if the title of the product has changed. The setting <span class="navipath_or_inputname">Fixed URL</span> prevents the recalculation: If it is active, the old SEO URL is kept and no new SEO URL is generated.',

'HELP_GENERAL_SEO_SHOWSUFFIX'                 => 'With this setting you can specify if the title suffix is shown in the browser window title when the according page is opened. The title suffix can be set in <span class="navipath_or_inputname">Master Settings -> Core Settings -> SEO -> Title Suffix</span>.',

'HELP_GENERAL_SEO_OXKEYWORDS'                 => 'These keywords are integrated in the HTML sourcecode (META keywords). This information is used by search engines. Suitable keywords for the product can be entered here. If it\'s left blank, the keywords are generated automatically.',

'HELP_GENERAL_SEO_OXDESCRIPTION'              => 'This description is integrated in the HTML sourcecode (META description). This text is often displayed in result pages of search engines. A suitable description can be entered here. If it\'s left blank, the description is generated automatically.',



'HELP_GENIMPORT_FIRSTCOLHEADER'               => 'Activate this setting if the first line of the CSV file contains the names of the database columns the CSV values are to be assigned to. The values are automatically assigned to the database columns.',

'HELP_GENIMPORT_REPEATIMPORT'                 => 'If this setting is active, step one is shown after successful import so you can start the next import immediately.',

'HELP_LANGUAGE_DEFAULT'                       => 'Default language is used when shop is unable to detect language in other ways: language id is not defined by URL, can\'t be detected by browser, is not defined in session etc. Default language can only be disabled, deleting it is <u>not possible</u>.',

'HELP_LANGUAGE_ACTIVE'                        => "This option defines language availability in eShop's frontend: if it is activated - language is available in frontend. For working in admin area this language is always available; even if it is disabled for frontend.",

'HELP_PAYMENT_MAIN_SORT'                      => 'In <span class="navipath_or_inputname">Sorting</span> you can specify the order in which the payment methods are to be displayed to users: The payment method with the lowest sort number is displayed on top.',

'HELP_PAYMENT_MAIN_FROMBONI'                  => 'You can use <span class="navipath_or_inputname">Min. Credit Rating</span> to specify that payment methods are only available to users who have a certain credit index or higher. You can enter the credit rating for each user in <span class="navipath_or_inputname">Administer Users -> Users -> Extended</span>.',

'HELP_PAYMENT_MAIN_SELECTED'                  => 'You can use <span class="navipath_or_inputname">Selected</span> to define which payment method is be selected as the default method if the user can choose between several payment methods.',

'HELP_PAYMENT_MAIN_AMOUNT'                    => '' .
                                                 '',

'HELP_PAYMENT_MAIN_ADDPRICE'                  => '' .
                                                 '' .
                                                 '',

'HELP_PAYMENT_MAIN_ADDSUMRULES'               => 'When calculating price surcharge or reduction, basket value is being used as base. Define what costs will be included when calculating basket value.',

'HELP_SELECTLIST_MAIN_TITLEIDENT'             => 'In <span class="navipath_or_inputname">Working Title</span>, you can enter an additional name that is not displayed to users of your eShop. You can use the working title to differentiate between similar selection lists (e.g., Sizes for trousers and Sizes for shirts).',

'HELP_SELECTLIST_MAIN_FIELDS'                 => 'All available options are displayed in the <span class="navipath_or_inputname">Fields</span> list. You can use the entry fields to the right to set up new options. Further information is available in the <a href="http://www.oxid-esales.com/en/resources/help-faq/eshop-manual/implementing-simple-variants-selection-lists" target="_blank">eShop manual</a> on the OXID eSales website.',

'HELP_USER_MAIN_HASPASSWORD'                  => '' .
                                                 '' .
                                                 '',

'HELP_USER_PAYMENT_METHODS'                   => ''.
                                                 ''.
                                                 '',

'HELP_USER_EXTEND_NEWSLETTER'                 => 'This setting shows if the user subscribed to the newsletter.',

'HELP_USER_EXTEND_EMAILFAILED'                => 'If no e-mails can be sent to the e-mail address of this user, check this setting. Then no newsletters are sent to this user any more. Other e-mails are still sent.',

'HELP_USER_EXTEND_BONI'                       => 'Here you can enter a numerical value for the credit rating of the user. With the credit rating you can influence which payment methods are available to this user.',



'HELP_MANUFACTURER_MAIN_ICON'                 => 'With <span class="navipath_or_inputname">Icon</span> and <span class="navipath_or_inputname">Upload Icon</span> you can upload a picture for this manufacturer (e. g. the logo).In <span class="navipath_or_inputname">Upload Icon</span>, select the Picture you want to upload. When clicking on <span class="navipath_or_inputname">Save</span> the picture is uploaded. After uploading, the filename is shown in <span class="navipath_or_inputname">Icon</span>.',



'HELP_MANUFACTURER_SEO_FIXED'                 => 'You can let the eShop recalculate the SEO URLs. A manufacturer page gets a new SEO URL if e. g. the title of the manufacturer has changed. The setting <span class="navipath_or_inputname">Fixed URL</span> prevents this: If it is active, the old SEO URL is kept and no new SEO URL is calculated.',

'HELP_MANUFACTURER_SEO_KEYWORDS'              => 'These keywords are integrated in the HTML sourcecode of the manufacturer page (META keywords). This information is used by search engines. Suitable keywords for the manufacturer can be entered here. If left blank, the keywords are generated automatically.',

'HELP_MANUFACTURER_SEO_DESCRIPTION'           => 'This description is integrated in the HTML sourcecode of the manufacturer page (META description). This text is often displayed in result pages of search engines. A suitable description can be entered here. If left blank, the description is generated automatically.',

'HELP_MANUFACTURER_SEO_SHOWSUFFIX'            => 'With this setting you can specify if the title suffix is shown in the browser window title when the manufacturer page is opened. The title suffix can be set in <span class="navipath_or_inputname">Master Settings -> Core Settings -> SEO -> Title Suffix</span>.',

'HELP_VOUCHERSERIE_MAIN_DISCOUNT'             => '' .
                                                 '' .
                                                 '' .
                                                 '' .
                                                 '',



'HELP_VOUCHERSERIE_MAIN_ALLOWSAMESERIES'      => 'Here you can set whether users are allowed to use several coupons of this coupon series in a single order.',

'HELP_VOUCHERSERIE_MAIN_ALLOWOTHERSERIES'     => 'Here you can set if users are allowed to use coupons together with coupons of other coupon series in a single order.',

'HELP_VOUCHERSERIE_MAIN_SAMESEROTHERORDER'    => 'Here you can set if users can use coupons of this coupon series in multiple orders.',

'HELP_VOUCHERSERIE_MAIN_RANDOMNUM'            => 'If this setting is active a random number is calculated for each coupon.',

'HELP_VOUCHERSERIE_MAIN_VOUCHERNUM'           => 'Here you can enter a coupon number. This number is used when creating new coupons if <span class="navipath_or_inputname">Random Numbers</span> is deactivated. All Coupons get the same coupon numberon.',

'HELP_VOUCHERSERIE_MAIN_CALCULATEONCE'        => 'If you assign products or categories to your coupon, deactivate this option to calculate this coupon to each product per basket position. Activate if the coupon shall be valid only once per basket position.',

'HELP_WRAPPING_MAIN_PICTURE'                  => 'With <span class="navipath_or_inputname">Picture</span> and <span class="navipath_or_inputname">Upload Picture</span> you can upload a picture for the gift wrapping. In <span class="navipath_or_inputname">Upload Picture</span>, select the picture to upload. When clicking on <span class="navipath_or_inputname">Save</span>, the picture is uploaded. After uploading, the filename is shown in <span class="navipath_or_inputname">Picture</span>.',

'HELP_PROMOTIONS_BANNER_PICTUREANDLINK'       => 'Upload banner image and enter banner URL which will be used when clicking on banner. If product is assigned to banner and URL is not entered, link to assigned product will be used when clicking on banner.',
'HELP_SHOP_PERF_SEO_CACHE'                    => 'Enabled SEO cache increases performance, but requires a lot of disk space in /tmp directory.',

'HELP_ALTERNATIVE_IMAGE_SERVER_NOTE'          => 'Alternative URL to remote image server can be specified in configuration file config.inc.php by setting <i>sAltImageUrl</i> and <i>sSSLAltImageUrl</i>.<br> Thus all product pictures will be loaded from this alternative server instead of the local one. However, uploaded files will be stored locally. In this case synchronization to external server has to be done manually or with custom scripts.',

'HELP_SHOP_RDFA_CONTENT_OFFERER'              => 'Select here, in which content page eShop main information is displayed, e.g. "About Us".',
'HELP_SHOP_RDFA_CONTENT_PAYMENT'              => 'Select here, in which content page not to RDFa assigned payment information is displayed, e.g. "Terms and Conditions". To assign your payment methods to RDFa payment methods in general go to: Shop Settings -> Payment Methods -> RDFa.',
'HELP_SHOP_RDFA_CONTENT_DELIVERY'             => 'Select here, in which content page not to RDFa assigned delivery information is displayed, e.g. "Delivery and charges". To assign your delivery methods to RDFa payment methods in general go to: Shop Settings -> Delivery Methods -> RDFa.',
'HELP_SHOP_RDFA_VAT'                          => 'This option specifies whether the VAT is included in the price and delivery/payment costs or not.',
'HELP_SHOP_RDFA_DURATION_PRICES'              => 'Specify here the time of the validity of the costs of products, payment and delivery (e.g. 1 day, 1 week).',
'HELP_SHOP_RDFA_LOGO_URL'                     => 'The Web address (URL) of a logo or image.',
'HELP_SHOP_RDFA_GEO_LONGITUDE'                => 'The longitude of the store as part of geo position. Please enter numbers only.',
'HELP_SHOP_RDFA_GEO_LATITUDE'                 => 'The latitude of the store as part of geo position. Please enter numbers only.',
'HELP_SHOP_RDFA_GLN'                          => 'Global Location Number (GLN) for the company. The Global Location Number is a thirteen-digit number used to identify parties and physical locations.',
'HELP_SHOP_RDFA_NAICS'                        => 'North American Industry Classification System (NAICS) code for your company. See http://www.census.gov/eos/www/naics/.',
'HELP_SHOP_RDFA_ISIC'                         => 'The International Standard of Industrial Classification of All Economic Activities (ISIC) code for your company. See http://unstats.un.org/unsd/cr/registry/isic-4.asp.',
'HELP_SHOP_RDFA_DUNS'                         => 'The Dun & Bradstreet D-U-N-S is a nine-digit number used to identify legal entities.',
'HELP_SHOP_RDFA_SHOW_PRODUCTSTOCK'            => 'If this option is on means, that the real product stock is shown.',
'HELP_SHOP_RDFA_RATING_MIN'                   => 'Possible minimum value refer to the scale used for ratings in your shop. This value is not the lowest current rating of a product!',
'HELP_SHOP_RDFA_RATING_MAX'                   => 'Possible maximum value refer to the scale used for ratings in your shop. This value is not the highest current rating of a product!',
'HELP_SHOP_RDFA_COND'                         => 'Select here, what term describes the condition of the products (new, used or refurbished).',
'HELP_SHOP_RDFA_FNC'                          => 'Select the business function of the products here. For example, are they offered to sell, to lease or to repair?',
'HELP_SHOP_RDFA_COSTUMER'                     => 'The types of customers for which shop products are valid (End user, Reseller, Business and/or Public).',
'HELP_SHOP_RDFA_DURATION_OFFERINGS'           => 'This property specifies the time of the validity of the products, e.g. 1 day, 1 week or 1 month.',
'HELP_SHOP_PERF_SYSREQ_CHECK'                 => '',
'HELP_SHOP_CONFIG_ADDITIONAL_SERVICE_VAT_CALCULATION_BIGGEST_NET'  => 'The GST rate of the products with the biggest net value in shopping basket. Used for calculating.',
'HELP_SHOP_CONFIG_ADDITIONAL_SERVICE_VAT_CALCULATION_PROPORTIONAL' => 'The percentage of products in the basket with the same GST rate will be used for calculations.',
'HELP_SHOP_CONFIG_VIEWNETPRICE'               => 'In the store front, product prices will be shown as prices w/o GST.',
'HELP_SHOP_CONFIG_ENTERNETPRICE'              => 'In the admin panel, product prices must be entered as prices w/o GST.',

'HELP_REVERSE_PROXY_GET_FRONTEND'             => 'Checks if Reverse Proxy is available for the frontend. Header of the shop\'s start page is verified.<br>The test could fail if different domains or protocols (http/https) are used for the admin panel and the store front.',
'HELP_REVERSE_PROXY_GET_BACKEND'              => 'The admin panel will be displayed without using reverse proxy caching. The varnish header could not be received.',

'HELP_SHOP_CONFIG_DEBIT_OLD_BANK_INFORMATION_NOT_ALLOWED' => 'Only IBAN and BIC can be entered during the checkout. Bank account number and the bank code can only be entered if this check box is not activated.',
'HELP_SHOP_CONFIG_ENABLE_INTANGIBLE_PRODUCTS_AGREEMENT'   => 'If this option is activated, users have to confirm terms and conditions for intangible or downloadable products in the fourth step of the check-out process. Please make sure this option is enabled for the specific item as well!',

'HELP_SHOP_CONFIG_FIELDS_CONTACTFORM'         => '',
];
