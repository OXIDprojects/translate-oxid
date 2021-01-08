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

$sLangName  = 'Български';

$aLang = array(
    'charset'                                       => 'UTF-8',

    'SHOP_THEME_GROUP_images'                       => 'Изображения',
    'SHOP_THEME_GROUP_features'                     => 'Характеристики',
    'SHOP_THEME_GROUP_display'                      => 'Изглед',
    'SHOP_THEME_GROUP_logo'                         => 'Лого',
    'SHOP_THEME_GROUP_favicons'                     => 'Икони на сайта',
    'SHOP_THEME_GROUP_footer'                       => 'Футър',
    'SHOP_THEME_GROUP_header'                       => 'Хедър',
    'SHOP_THEME_GROUP_contact'                      => 'Контакти',
    'SHOP_THEME_GROUP_googleanalytics'              => 'Google анализ',
    'SHOP_THEME_GROUP_googlets'                     => 'Google Trusted Stores',
    'SHOP_THEME_GROUP_background'                   => 'Фоново изображение',
    'SHOP_THEME_GROUP_econda'                       => 'econda Web Shop Controlling',
    'SHOP_THEME_GROUP_emails'                       => 'имейли',

    'SHOP_THEME_sIconsize'                          => 'Размер на иконите (ширина*височина)', //SHOP_CONFIG_ICONSIZE
    'HELP_SHOP_THEME_sIconsize'                     => 'Иконите са най- малките снимки на продукта. Използват се: <br>' .
                                                       '<ul><li>в кошницата.</li>' .
                                                       '<li>ако продуктите са показани на менюто в дясно (напр. в <span class="filename_filepath_or_italic">Най- продавани</span>и<span class="filename_filepath_or_italic">Оферта</span>).</li></ul>' .
                                                       'За да се избегнат проблеми с дизайна, когато иконите са твърде големи, те ще бъдат автоматично оразмерявани. Въведете допустим максимален размер на иконите тук.',

    'SHOP_THEME_sThumbnailsize'                     => 'Размер на миниатюри (ширина*височина)', //SHOP_CONFIG_THUMBNAILSIZE
    'HELP_SHOP_THEME_sThumbnailsize'                => 'Миниатюрите са малки снимки на продукта. Използват се: <br>' .
                                                       '<ul><li>в списъците с продукти</li>' .
                                                       '<li>когато има промоции, в средата на началната страница, напр. <span class="filename_filepath_or_italic"> Най- нови!</span>.</li></ul>' .
                                                       'За да се избегнат проблеми с дизайна, когато миниатюрите са твърде големи, те ще бъдат автоматично оразмерявани. Въведете допустим максимален размер на миниатюри тук.',

    'SHOP_THEME_sZoomImageSize'                     => 'Размер на снимка при зуум (ширина*височина)', //SHOP_CONFIG_ZOOMIMAGESIZE
    'SHOP_THEME_sCatThumbnailsize'                  => 'Размер на изображение в категория (ширина*височина)', //SHOP_CONFIG_CATEGORYTHUMBNAILSIZE
    'HELP_SHOP_THEME_sCatThumbnailsize'             => 'В изглед Категория, изображението за избраната категория се вижда в определения размер.', //SHOP_CONFIG_CATEGORYTHUMBNAILSIZE
    'SHOP_THEME_aDetailImageSizes'                  => 'Размер на изображение на продукт (ширина*височина)', //SHOP_CONFIG_DETAILIMAGESIZE

    'SHOP_THEME_sManufacturerIconsize'              => 'Размер на лого на Производител/Марка', // Check if this is really manufacturer or if it is more like "brand"
    'HELP_SHOP_THEME_sManufacturerIconsize'         => 'Лого на Производител/Марка се вижда на началната страница в слайдъра на производител.',

    'SHOP_THEME_sCatIconsize'                       => 'Размер на изображение за подкатегория (ширина*височина)',
    'HELP_SHOP_THEME_sCatIconsize'                  => 'В изглед Категория, изображенията за подкатегории се виждат в определения размер.',

    'SHOP_THEME_sCatPromotionsize'                  => 'Размер на снимка на категория за промоция на начална страница (ширина*височина)',
    'HELP_SHOP_THEME_sCatPromotionsize'             => '',

    'SHOP_THEME_blFooterShowHelp'                   => '',
    'SHOP_THEME_blFooterShowLinks'                  => '',
    'SHOP_THEME_blFooterShowNewsletter'             => '',
    'SHOP_THEME_blFooterShowNewsletterForm'         => '',
    'SHOP_THEME_blFooterShowNews'                   => '',
    'SHOP_THEME_bl_showGiftWrapping'                => '', //SHOP_CONFIG_SHOWGIFTWRAPPING
    'SHOP_THEME_bl_showVouchers'                    => '', //SHOP_CONFIG_SHOWVOUCHERS
    'SHOP_THEME_bl_showWishlist'                    => '', //SHOP_CONFIG_SHOWWISHLIST
    'SHOP_THEME_bl_showCompareList'                 => '', //SHOP_CONFIG_SHOWCOMPARELIST
    'SHOP_THEME_bl_showListmania'                   => '', //SHOP_CONFIG_SHOWLISTMANIA
    'SHOP_THEME_blShowBirthdayFields'               => '', //SHOP_CONFIG_SHOWBIRTHDAYFIELDS

    'SHOP_THEME_iTopNaviCatCount'                   => '', //SHOP_CONFIG_TOPNAVICATCOUNT
    'SHOP_THEME_blShowFinalStep'                    => '', //SHOP_SYSTEM_SHOWFINALSTEP
    'SHOP_THEME_iNewBasketItemMessage'              => '', //SHOP_SYSTEM_SHOWNEWBASKETITEMMESSAGE
    'HELP_SHOP_THEME_iNewBasketItemMessage'         => '', //SHOP_SYSTEM_SHOWNEWBASKETITEMMESSAGE
    'SHOP_THEME_iNewBasketItemMessage_0'            => 'Няма',
    'SHOP_THEME_iNewBasketItemMessage_1'            => '',
    'SHOP_THEME_iNewBasketItemMessage_2'            => '',
    'SHOP_THEME_iNewBasketItemMessage_3'            => '',

    'SHOP_THEME_blShowListDisplayType'              => '',
    'HELP_SHOP_THEME_blShowListDisplayType'         => '',
    'SHOP_THEME_sDefaultListDisplayType'            => '',
    'SHOP_THEME_sDefaultListDisplayType_grid'       => 'Решетка',
    'SHOP_THEME_sDefaultListDisplayType_line'       => '',
    'SHOP_THEME_sDefaultListDisplayType_infogrid'   => 'Двойна решетка',
    'SHOP_THEME_sStartPageListDisplayType'          => '',
    'SHOP_THEME_sStartPageListDisplayType_grid'     => 'Решетка',
    'SHOP_THEME_sStartPageListDisplayType_line'     => '',
    'SHOP_THEME_sStartPageListDisplayType_infogrid' => 'Двойна решетка',

    'SHOP_THEME_aNrofCatArticlesInGrid'             => '',
    'SHOP_THEME_aNrofCatArticles'                   => '',

    'SHOP_THEME_sFacebookUrl'                       => '',
    'HELP_SHOP_THEME_sFacebookUrl'                  => '',
    'SHOP_THEME_sTwitterUrl'                        => '',
    'HELP_SHOP_THEME_sTwitterUrl'                   => '',
    'SHOP_THEME_sBlogUrl'                           => '',
    'HELP_SHOP_THEME_sBlogUrl'                      => '',
    'SHOP_THEME_sYouTubeUrl'                        => '',
    'HELP_SHOP_THEME_sYouTubeUrl'                   => '',
    'SHOP_THEME_sGooglePlusUrl'                     => '',
    'HELP_SHOP_THEME_sGooglePlusUrl'                => '',

    'SHOP_THEME_sGoogleMapsAddr'                    => '',
    'HELP_SHOP_THEME_sGoogleMapsAddr'               => '',

    'SHOP_THEME_bl_showManufacturerSlider'          => '',

    'SHOP_THEME_blUseGAPageTracker'                 => '',
    'SHOP_THEME_blUseGAEcommerceTracking'           => '',
    'HELP_SHOP_THEME_blUseGAEcommerceTracking'      => '',
    'SHOP_THEME_sGATrackingId'                      => '',
    'HELP_SHOP_THEME_sGATrackingId'                 => '',
    'SHOP_THEME_blGAAnonymizeIPs'                   => '',

    'SHOP_THEME_sLogoFile'                          => '',
    'HELP_SHOP_THEME_sLogoFile'                     => '',

    'SHOP_THEME_sLogoWidth'                         => '',
    'HELP_SHOP_THEME_sLogoWidth'                    => '',
    'SHOP_THEME_sLogoHeight'                        => '',
    'HELP_SHOP_THEME_sLogoHeight'                   => '',

    'SHOP_THEME_sEmailLogo'                         => '',
    'HELP_SHOP_THEME_sEmailLogo'                    => '',

    'SHOP_THEME_sFaviconFile'                       => '',
    'HELP_SHOP_THEME_sFaviconFile'                  => '',
    'SHOP_THEME_sFavicon16File'                     => '',
    'SHOP_THEME_sFavicon32File'                     => '',
    'SHOP_THEME_sFavicon48File'                     => '',
    'SHOP_THEME_sFavicon64File'                     => '',
    'SHOP_THEME_sFavicon128File'                    => '',
    'SHOP_THEME_sFavicon512File'                    => '',
    'SHOP_THEME_sFaviconMSTileColor'                => '',
    'HELP_SHOP_THEME_sFaviconMSTileColor'           => '',

    'SHOP_THEME_blUseBackground'                    => '',
    'SHOP_THEME_sBackgroundColor'                   => '',
    'HELP_SHOP_THEME_sBackgroundColor'              => '',
    'SHOP_THEME_sBackgroundPath'                    => '',
    'HELP_SHOP_THEME_sBackgroundPath'               => '',
    'SHOP_THEME_sBackgroundRepeat'                  => '',
    'SHOP_THEME_sBackgroundRepeat_no-repeat'        => 'Не',
    'SHOP_THEME_sBackgroundRepeat_repeat-x'         => '',
    'SHOP_THEME_sBackgroundRepeat_repeat-y'         => '',
    'SHOP_THEME_sBackgroundRepeat_repeat'           => '',
    'SHOP_THEME_sBackgroundPosHorizontal'           => '',
    'SHOP_THEME_sBackgroundPosHorizontal_left'      => '',
    'SHOP_THEME_sBackgroundPosHorizontal_right'     => '',
    'SHOP_THEME_sBackgroundPosHorizontal_center'    => '',
    'SHOP_THEME_sBackgroundPosVertical'             => '',
    'SHOP_THEME_sBackgroundPosVertical_top'         => '',
    'SHOP_THEME_sBackgroundPosVertical_bottom'      => '',
    'SHOP_THEME_sBackgroundPosVertical_center'      => '',
    'SHOP_THEME_sBackgroundSize'                    => '',
    'SHOP_THEME_sBackgroundSize_cover'              => '',
    'SHOP_THEME_sBackgroundSize_contain'            => '',
    'SHOP_THEME_sBackgroundSize_normal'             => '',
    'SHOP_THEME_blBackgroundAttachment'             => '',
    'SHOP_THEME_blHomeLink'                         => '',
    'SHOP_THEME_bl_showPriceAlarm'                  => '',

    'SHOP_THEME_blUseGoogleTS'                      => '',
    'SHOP_THEME_sGoogleVendorId'                    => '',
    'HELP_SHOP_THEME_sGoogleVendorId'               => '',
    'SHOP_THEME_sGoogleShoppingAccountId'           => '',
    'HELP_SHOP_THEME_sGoogleShoppingAccountId'      => '',
    'SHOP_THEME_sPageLanguage'                      => '',
    'HELP_SHOP_THEME_sPageLanguage'                 => '',
    'SHOP_THEME_sShoppingCountry'                   => '',
    'HELP_SHOP_THEME_sShoppingCountry'              => '',
    'SHOP_THEME_sShoppingLanguage'                  => '',
    'HELP_SHOP_THEME_sShoppingLanguage'             => '',
    'SHOP_THEME_sShippingDaysOnStock'               => '',
    'HELP_SHOP_THEME_sShippingDaysOnStock'          => '',
    'SHOP_THEME_sShippingDaysNotOnStock'            => '',
    'HELP_SHOP_THEME_sShippingDaysNotOnStock'       => '',
    'SHOP_THEME_sDeliveryDaysOnStock'               => '',
    'HELP_SHOP_THEME_sDeliveryDaysOnStock'          => '',
    'SHOP_THEME_sDeliveryDaysNotOnStock'            => '',
    'HELP_SHOP_THEME_sDeliveryDaysNotOnStock'       => '',

    'SHOP_THEME_blSliderShowImageCaption'           => '',
    'HELP_SHOP_THEME_blSliderShowImageCaption'      => '',

    'SHOP_THEME_blEcondaRecommendationsStart'       => '',
    'SHOP_THEME_sEcondaWidgetIdStart'               => '',
    'SHOP_THEME_blEcondaRecommendationsList'        => '',
    'SHOP_THEME_sEcondaWidgetIdList'                => '',
    'SHOP_THEME_blEcondaRecommendationsDetails'     => '',
    'SHOP_THEME_sEcondaWidgetIdDetails'             => '',
    'SHOP_THEME_blEcondaRecommendationsBasket'      => '',
    'SHOP_THEME_sEcondaWidgetIdBasket'              => '',

    'SHOP_THEME_blFullwidthLayout'                      => '',

    'SHOP_THEME_blEmailsShowProductPictures'        => '',
);
