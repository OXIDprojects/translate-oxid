<?php
/**
 * This file is part of OXID eSales Wave theme.
 *
 * OXID eSales Wave theme is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * OXID eSales Wave theme is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with OXID eSales Wave theme.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @link      http://www.oxid-esales.com
 * @copyright (C) OXID eSales AG 2003-2016
 */

$sLangName  = 'English (United States)';

$aLang = array(
    'charset'                                       => 'UTF-8',

    'SHOP_THEME_GROUP_images'                       => 'Images',
    'SHOP_THEME_GROUP_features'                     => 'Features',
    'SHOP_THEME_GROUP_display'                      => 'Display',
    'SHOP_THEME_GROUP_logo'                         => 'Logo',
    'SHOP_THEME_GROUP_favicons'                     => 'Favicons',
    'SHOP_THEME_GROUP_footer'                       => 'Footer',
    'SHOP_THEME_GROUP_header'                       => 'Header',
    'SHOP_THEME_GROUP_contact'                      => 'Contact',
    'SHOP_THEME_GROUP_googleanalytics'              => 'Google Analytics',
    'SHOP_THEME_GROUP_googlets'                     => 'Google Trusted Stores',
    'SHOP_THEME_GROUP_background'                   => 'Background image',
    'SHOP_THEME_GROUP_econda'                       => 'econda Web Shop Controlling',
    'SHOP_THEME_GROUP_emails'                       => 'E-mails',

    'SHOP_THEME_sIconsize'                          => 'Icon size (width*height)', //SHOP_CONFIG_ICONSIZE
    'HELP_SHOP_THEME_sIconsize'                     => 'Icons are the smallest pictures of a product. They are used: <br>' .
                                                       '<ul><li>in the shopping cart.</li>' .
                                                       '<li>if products are shown in the right menu (e.g. in <span class="filename_filepath_or_italic">TOP of the Shop</span> and <span class="filename_filepath_or_italic">Bargain</span>).</li></ul>' .
                                                       'For avoiding design issues caused by too big icons the icons are resized. Enter the maximum size for icons here.',

    'SHOP_THEME_sThumbnailsize'                     => 'Thumbnail size (width*height)', //SHOP_CONFIG_THUMBNAILSIZE
    'HELP_SHOP_THEME_sThumbnailsize'                => 'Thumbnails are small product pictures. They are used:<br>' .
                                                       '<ul><li>in product lists.</li>' .
                                                       '<li>in promotions displayed in the middle of the front page, e. g. <span class="filename_filepath_or_italic">Just arrived!</span>.</li></ul>' .
                                                       'For avoiding design issues caused by too big thumbnails the thumbnails are resized. Enter the maximum size for thumbnails here.',

    'SHOP_THEME_sZoomImageSize'                     => 'Zoom picture size (width*height)', //SHOP_CONFIG_ZOOMIMAGESIZE
    'SHOP_THEME_sCatThumbnailsize'                  => 'Category picture size (width*height)', //SHOP_CONFIG_CATEGORYTHUMBNAILSIZE
    'HELP_SHOP_THEME_sCatThumbnailsize'             => 'In category view, the picture of the selected category is displayed in the defined size.', //SHOP_CONFIG_CATEGORYTHUMBNAILSIZE
    'SHOP_THEME_aDetailImageSizes'                  => 'Product picture size (width*height)', //SHOP_CONFIG_DETAILIMAGESIZE

    'SHOP_THEME_sManufacturerIconsize'              => 'Manufacturer\'s brand logo size', // Check if this is really manufacturer or if it is more like "brand"
    'HELP_SHOP_THEME_sManufacturerIconsize'         => 'Manufacturer\'s or brand logo to be shown on the home page in manufacturer\'s slider.',

    'SHOP_THEME_sCatIconsize'                       => 'Size of a subcategory\'s picture (width*height)',
    'HELP_SHOP_THEME_sCatIconsize'                  => 'In category view, the category pictures of subcategories are displayed in the defined size.',

    'SHOP_THEME_sCatPromotionsize'                  => 'Category picture size for promotion on home page (width*height)',
    'HELP_SHOP_THEME_sCatPromotionsize'             => 'Category promotion on the home page needs a special size for category pictures. Define the size of those pictures here.',

    'SHOP_THEME_blFooterShowHelp'                   => 'Use help link',
    'SHOP_THEME_blFooterShowLinks'                  => 'Use Links link',
    'SHOP_THEME_blFooterShowNewsletter'             => 'Use newsletter link',
    'SHOP_THEME_blFooterShowNewsletterForm'         => 'Use newsletter subscription form',
    'SHOP_THEME_blFooterShowNews'                   => 'Use news link',
    'SHOP_THEME_bl_showGiftWrapping'                => 'Use gift wrapping', //SHOP_CONFIG_SHOWGIFTWRAPPING
    'SHOP_THEME_bl_showVouchers'                    => 'Use vouchers', //SHOP_CONFIG_SHOWVOUCHERS
    'SHOP_THEME_bl_showWishlist'                    => 'Use gift registry', //SHOP_CONFIG_SHOWWISHLIST
    'SHOP_THEME_bl_showCompareList'                 => 'Use compare list', //SHOP_CONFIG_SHOWCOMPARELIST
    'SHOP_THEME_bl_showListmania'                   => 'Use listmania', //SHOP_CONFIG_SHOWLISTMANIA
    'SHOP_THEME_blShowBirthdayFields'               => 'Display input fields for date of birth when users enter their personal data', //SHOP_CONFIG_SHOWBIRTHDAYFIELDS

    'SHOP_THEME_iTopNaviCatCount'                   => 'Amount of categories to be displayed at the top navigation', //SHOP_CONFIG_TOPNAVICATCOUNT
    'SHOP_THEME_blShowFinalStep'                    => 'Show up fifth step in checkout (confirmation)', //SHOP_SYSTEM_SHOWFINALSTEP
    'SHOP_THEME_iNewBasketItemMessage'              => 'Select action when product is added to cart', //SHOP_SYSTEM_SHOWNEWBASKETITEMMESSAGE
    'HELP_SHOP_THEME_iNewBasketItemMessage'         => 'When customer adds products to cart, OXID eShop can behave differently. Set up what shall happen to give a proper feedback to customer.', //SHOP_SYSTEM_SHOWNEWBASKETITEMMESSAGE
    'SHOP_THEME_iNewBasketItemMessage_0'            => 'None',
    'SHOP_THEME_iNewBasketItemMessage_1'            => 'Display message',
    'SHOP_THEME_iNewBasketItemMessage_2'            => 'Open popup window',
    'SHOP_THEME_iNewBasketItemMessage_3'            => 'Open cart',

    'SHOP_THEME_blShowListDisplayType'              => 'Display product list type selector',
    'HELP_SHOP_THEME_blShowListDisplayType'         => 'Decide if the visitor of your store may select the type of the product list in storefront. If this options is not activated, your visitors will see the lists displayed like adjusted in the drop box "Default product list type".',
    'SHOP_THEME_sDefaultListDisplayType'            => 'Default product list type',
    'SHOP_THEME_sDefaultListDisplayType_grid'       => 'Grid',
    'SHOP_THEME_sDefaultListDisplayType_line'       => 'List',
    'SHOP_THEME_sDefaultListDisplayType_infogrid'   => 'Double grid',
    'SHOP_THEME_sStartPageListDisplayType'          => 'Product list type on home page',
    'SHOP_THEME_sStartPageListDisplayType_grid'     => 'Grid',
    'SHOP_THEME_sStartPageListDisplayType_line'     => 'List',
    'SHOP_THEME_sStartPageListDisplayType_infogrid' => 'Double grid',

    'SHOP_THEME_aNrofCatArticlesInGrid'             => 'Grid view: Number of products to be shown in a product list page (category pages, search results)<br><br>Attention: A large number of products per page (above 100) can cause performance losses!',
    'SHOP_THEME_aNrofCatArticles'                   => 'Number of products to be shown in a product list page (category pages, search results)<br><br>Attention: A large number of products per page (above 100) may cause performance losses!',

    'SHOP_THEME_sFacebookUrl'                       => 'Facebook page URL',
    'HELP_SHOP_THEME_sFacebookUrl'                  => 'E.g.: https://www.facebook.com/groups/oxid.ug/',
    'SHOP_THEME_sTwitterUrl'                        => 'Twitter profile URL',
    'HELP_SHOP_THEME_sTwitterUrl'                   => 'E.g.: https://twitter.com/OXIDforge',
    'SHOP_THEME_sBlogUrl'                           => 'Blog URL',
    'HELP_SHOP_THEME_sBlogUrl'                      => 'https://oxidforge.org/en/blog-en',
    'SHOP_THEME_sYouTubeUrl'                        => 'YouTube channel URL',
    'HELP_SHOP_THEME_sYouTubeUrl'                   => 'E.g.: https://www.youtube.com/user/oxidesales',
    'SHOP_THEME_sGooglePlusUrl'                     => 'Google+ page URL',
    'HELP_SHOP_THEME_sGooglePlusUrl'                => 'E.g.: https://plus.google.com/communities/105836295757364457233',

    'SHOP_THEME_sGoogleMapsAddr'                    => 'Your postal address',
    'HELP_SHOP_THEME_sGoogleMapsAddr'               => 'E.g.: OXID eSales AG, Bertoldstraße 48, DE-79098 Freiburg, Germany',

    'SHOP_THEME_bl_showManufacturerSlider'          => 'Show manufacturer slider on home page',

    'SHOP_THEME_blUseGAPageTracker'                 => 'Use Google Analytics PageTracker',
    'SHOP_THEME_blUseGAEcommerceTracking'           => 'Use Google Analytics Ecommerce Tracking',
    'HELP_SHOP_THEME_blUseGAEcommerceTracking'      => 'Please keep in mind that this option needs to be enabled in your Google Analytics account as well. Manual: <a href="https://support.google.com/analytics/answer/1009612?hl=en&ref_topic=1037061" target="_blank">Link</a>',
    'SHOP_THEME_sGATrackingId'                      => 'Google Analytics tracking ID',
    'HELP_SHOP_THEME_sGATrackingId'                 => 'E.g.: UA-XXXXXXXX-1',
    'SHOP_THEME_blGAAnonymizeIPs'                   => 'Anonymize IP addresses',

    'SHOP_THEME_sLogoFile'                          => 'Logo file name',
    'HELP_SHOP_THEME_sLogoFile'                     => 'This is relative to the path <code>/out/flow/img/</code>.',

    'SHOP_THEME_sLogoWidth'                         => 'Width of header logo',
    'HELP_SHOP_THEME_sLogoWidth'                    => 'Please use pixel values',
    'SHOP_THEME_sLogoHeight'                        => 'Height of header logo',
    'HELP_SHOP_THEME_sLogoHeight'                   => 'Please use pixel values',

    'SHOP_THEME_sEmailLogo'                         => 'Logo file name for the e-mail header',
    'HELP_SHOP_THEME_sEmailLogo'                    => 'This is relative to the path <code>/out/flow/img/</code>.',

    'SHOP_THEME_sFaviconFile'                       => 'Favicon file name',
    'HELP_SHOP_THEME_sFaviconFile'                  => 'The favicon displayed in the browser tab.<br>In general, this is an ico file.<br>This is relative to the path <code>/out/flow/img/favicons/</code>.',
    'SHOP_THEME_sFavicon16File'                     => 'File name of the favicon with 16*16px',
    'SHOP_THEME_sFavicon32File'                     => 'File name of the favicon with 32*32px',
    'SHOP_THEME_sFavicon48File'                     => 'File name of the favicon with 48*48px',
    'SHOP_THEME_sFavicon64File'                     => 'File name of the favicon with 64*64px',
    'SHOP_THEME_sFavicon128File'                    => 'File name of the favicon with 128*128px.',
    'SHOP_THEME_sFavicon512File'                    => 'File name of the favicon with 512*512px',
    'SHOP_THEME_sFaviconMSTileColor'                => 'Tile color for Windows 8/Windows Mobile bookmarks',
    'HELP_SHOP_THEME_sFaviconMSTileColor'           => 'Specified as a hexadecimal value.<br>E.g.: #D83434',

    'SHOP_THEME_blUseBackground'                    => 'Show background image',
    'SHOP_THEME_sBackgroundColor'                   => 'Background color of shop',
    'HELP_SHOP_THEME_sBackgroundColor'              => 'Specified as a hexadecimal value.<br>E.g.: #D83434',
    'SHOP_THEME_sBackgroundPath'                    => 'File name of the background image',
    'HELP_SHOP_THEME_sBackgroundPath'               => 'This is relative to the path <code>/out/flow/img/backgrounds/</code>.',
    'SHOP_THEME_sBackgroundRepeat'                  => 'Repeat background image?',
    'SHOP_THEME_sBackgroundRepeat_no-repeat'        => 'No',
    'SHOP_THEME_sBackgroundRepeat_repeat-x'         => 'Yes, horizontally',
    'SHOP_THEME_sBackgroundRepeat_repeat-y'         => 'Yes, vertically',
    'SHOP_THEME_sBackgroundRepeat_repeat'           => 'Yes, horizontally and vertically',
    'SHOP_THEME_sBackgroundPosHorizontal'           => 'Horizontal position of the background image',
    'SHOP_THEME_sBackgroundPosHorizontal_left'      => 'left',
    'SHOP_THEME_sBackgroundPosHorizontal_right'     => 'right',
    'SHOP_THEME_sBackgroundPosHorizontal_center'    => 'centered',
    'SHOP_THEME_sBackgroundPosVertical'             => 'Vertical position of the background image',
    'SHOP_THEME_sBackgroundPosVertical_top'         => 'top',
    'SHOP_THEME_sBackgroundPosVertical_bottom'      => 'bottom',
    'SHOP_THEME_sBackgroundPosVertical_center'      => 'centered',
    'SHOP_THEME_sBackgroundSize'                    => 'Size of the background image',
    'SHOP_THEME_sBackgroundSize_cover'              => 'cover (full height)',
    'SHOP_THEME_sBackgroundSize_contain'            => 'cover (full width)',
    'SHOP_THEME_sBackgroundSize_normal'             => 'Keep the original size',
    'SHOP_THEME_blBackgroundAttachment'             => 'Fix background while scrolling?',
    'SHOP_THEME_blHomeLink'                         => 'Show "Home" link in main navigation?',
    'SHOP_THEME_bl_showPriceAlarm'                  => 'Use wished price',

    'SHOP_THEME_blUseGoogleTS'                      => 'Use Google Trusted Stores',
    'SHOP_THEME_sGoogleVendorId'                    => 'Google store ID',
    'HELP_SHOP_THEME_sGoogleVendorId'               => 'Please find this ID in your "Trusted Stores Merchant" Dashboard.',
    'SHOP_THEME_sGoogleShoppingAccountId'           => 'Google shopping account ID (optionally)',
    'HELP_SHOP_THEME_sGoogleShoppingAccountId'      => 'Provide this field only if you submit feeds for Google Shopping.<br><br>Account ID from Google Merchant Center. This value should match the account ID you use to submit your <a href="https://support.google.com/merchants/answer/188494#US" target="_blank">product data feed to Google Shopping</a> via Google Merchant center. If you have an MCA account, please use the sub-account ID associated with that product feed.',
    'SHOP_THEME_sPageLanguage'                      => 'Language of your store according to ISO',
    'HELP_SHOP_THEME_sPageLanguage'                 => 'The locale should be in the format of <language>_<country><br><br><Language> is a two-letter language code defined in ISO 639-1, and <country> is a two-letter country code defined in ISO 3166-1 alpha-2. Usually <country> should be all capitalized, and <language> should be in lowercase. e.g. en_US, en_GB, en_AU, fr_FR, de_DE, or ja_JP.',
    'SHOP_THEME_sShoppingCountry'                   => 'Google Shopping feed country (optionally)',
    'HELP_SHOP_THEME_sShoppingCountry'              => 'Provide this field only if you submit feeds for Google Shopping.<br><br>Account country from Google Shopping. This value should match the account country you use to submit your <a href="https://support.google.com/merchants/answer/188494#US" target="_blank">product data feed to Google Shopping</a>.<br><br>The value of the country parameter should be a <a href="http://en.wikipedia.org/wiki/ISO_3166-1_alpha-2" target="_blank">two-letter ISO 3166 country code</a>.<br><br>For example, values could be US, GB, AU, FR, DE, JP.',
    'SHOP_THEME_sShoppingLanguage'                  => 'Google Shopping feed language (optionally)',
    'HELP_SHOP_THEME_sShoppingLanguage'             => 'Provide this field only if you submit feeds for Google Shopping.<br><br>Account language from Google Shopping. This value should match the account language you use to submit your <a href="https://support.google.com/merchants/answer/188494#US" target="_blank">product data feed to Google Shopping</a>.<br><br>The value of the language parameter should be a <a href="http://en.wikipedia.org/wiki/ISO_639-1" target="_blank">two-letter ISO 639-1 language code</a>.<br><br>For example, values could be en, fr, de, ja.',
    'SHOP_THEME_sShippingDaysOnStock'               => 'Amount of days till shipping of an order that has all products on stock.',
    'HELP_SHOP_THEME_sShippingDaysOnStock'          => 'ETA when you will ship the order; this is different to the estimated delivery date.<br><br>If the order contains multiple items, select the latest estimated shipping date.<br><br>If you offer a range of days, please communicate the latest (e.g., 7 days if your shipping range is 5-7 days).<br><br>The date provided here will be sent to the customer via email.<br><br>The customer will receive a survey after the estimated shipping date is over.',
    'SHOP_THEME_sShippingDaysNotOnStock'            => 'Amount of days till shipping of an order that has <b>not</b> all products on stock.',
    'HELP_SHOP_THEME_sShippingDaysNotOnStock'       => 'ETA when you will ship the order; this is different to the estimated delivery date.<br><br>If the order contains multiple items, select the latest estimated shipping date.<br><br>If you offer a range of days, please communicate the latest (e.g., 7 days if your shipping range is 5-7 days).<br><br>The date provided here will be sent to the customer via email.<br><br>The customer will receive a survey after the estimated shipping date is over.',
    'SHOP_THEME_sDeliveryDaysOnStock'               => 'Amount of days till delivery of an order that has all products on stock.',
    'HELP_SHOP_THEME_sDeliveryDaysOnStock'          => 'ETA of delivery to the customer. If the order contains multiple items, please select the latest delivery date. If you assign a range of days, please enter the last day of it. (e.g. 7 days if your range is 5-7 days).',
    'SHOP_THEME_sDeliveryDaysNotOnStock'            => 'Amount of days till delivery of an order that has <b>not</b> all products in stock.',
    'HELP_SHOP_THEME_sDeliveryDaysNotOnStock'       => 'ETA of delivery to the customer. If the order contains multiple items, please select the latest delivery date. If you assign a range of days, please enter the last day of it. (e.g. 7 days if your range is 5-7 days).',

    'SHOP_THEME_blSliderShowImageCaption'           => 'Activate captions for slider on home page',
    'HELP_SHOP_THEME_blSliderShowImageCaption'      => 'Caption is visible, when the active slide has a  product assigned.',

    'SHOP_THEME_blEcondaRecommendationsStart'       => 'Show recommendations on home page',
    'SHOP_THEME_sEcondaWidgetIdStart'               => 'Recommendation widget ID for home page',
    'SHOP_THEME_blEcondaRecommendationsList'        => 'Show recommendations in list pages',
    'SHOP_THEME_sEcondaWidgetIdList'                => 'Recommendation widget ID for list view',
    'SHOP_THEME_blEcondaRecommendationsDetails'     => 'Show recommendations on details page',
    'SHOP_THEME_sEcondaWidgetIdDetails'             => 'Recommendation widget ID for detail page',
    'SHOP_THEME_blEcondaRecommendationsBasket'      => 'Show recommendations in cart',
    'SHOP_THEME_sEcondaWidgetIdBasket'              => 'Recommendation widget ID for cart',

    'SHOP_THEME_blFullwidthLayout'                      => 'Activate full with layout',

    'SHOP_THEME_blEmailsShowProductPictures'        => 'Show product pictures in e-mails',
);
