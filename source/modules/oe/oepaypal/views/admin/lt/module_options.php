<?php
/**
 * This file is part of OXID eSales PayPal module.
 *
 * OXID eSales PayPal module is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * OXID eSales PayPal module is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with OXID eSales PayPal module.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @link      http://www.oxid-esales.com
 * @copyright (C) OXID eSales AG 2003-2018
 */

// -------------------------------
// RESOURCE IDENTIFIER = STRING
// -------------------------------
$aLang = array(
    'charset'                                                => '',
    'SHOP_MODULE_GROUP_oepaypal_display'                     => '',
    'SHOP_MODULE_GROUP_oepaypal_checkout'                    => '',
    'SHOP_MODULE_GROUP_oepaypal_payment'                     => '',
    'SHOP_MODULE_GROUP_oepaypal_transaction'                 => '',
    'SHOP_MODULE_GROUP_oepaypal_api'                         => '',
    'SHOP_MODULE_GROUP_oepaypal_development'                 => '',

    'SHOP_MODULE_sOEPayPalBrandName'                         => '',
    'HELP_SHOP_MODULE_sOEPayPalBrandName'                    => '',
    'SHOP_MODULE_sOEPayPalBorderColor'                       => '',
    'HELP_SHOP_MODULE_sOEPayPalBorderColor'                  => '',

    'SHOP_MODULE_blOEPayPalStandardCheckout'                 => '',
    'HELP_SHOP_MODULE_blOEPayPalStandardCheckout'            => '',
    'SHOP_MODULE_blOEPayPalExpressCheckout'                  => '',
    'HELP_SHOP_MODULE_blOEPayPalExpressCheckout'             => '',
    'SHOP_MODULE_blOEPayPalGuestBuyRole'                     => '',
    'HELP_SHOP_MODULE_blOEPayPalGuestBuyRole'                => '',

    'SHOP_MODULE_blOEPayPalSendToPayPal'                     => '',
    'HELP_SHOP_MODULE_blOEPayPalSendToPayPal'                => '',
    'SHOP_MODULE_blOEPayPalDefaultUserChoice'                => '',
    'HELP_SHOP_MODULE_blOEPayPalDefaultUserChoice'           => '',

    'SHOP_MODULE_sOEPayPalLogoImageOption'                   => '',
    'HELP_SHOP_MODULE_sOEPayPalLogoImageOption'              => '',

    'SHOP_MODULE_sOEPayPalCustomShopLogoImage'               => '',
    'HELP_SHOP_MODULE_sOEPayPalCustomShopLogoImage'          => '',

    'SHOP_MODULE_sOEPayPalLogoImageOption_noLogo'            => '',
    'SHOP_MODULE_sOEPayPalLogoImageOption_shopLogo'          => '',
    'SHOP_MODULE_sOEPayPalLogoImageOption_customLogo'        => '',

    'SHOP_MODULE_sOEPayPalTransactionMode'                   => '',
    'HELP_SHOP_MODULE_sOEPayPalTransactionMode'              => '',

    'SHOP_MODULE_sOEPayPalTransactionMode_Automatic'         => '',
    'SHOP_MODULE_sOEPayPalTransactionMode_Sale'              => '',
    'SHOP_MODULE_sOEPayPalTransactionMode_Authorization'     => '',
    'SHOP_MODULE_sOEPayPalEmptyStockLevel'                   => '',
    'HELP_SHOP_MODULE_sOEPayPalEmptyStockLevel'              => '',

    'SHOP_MODULE_sOEPayPalUserEmail'                         => '',
    'SHOP_MODULE_sOEPayPalUsername'                          => '',
    'HELP_SHOP_MODULE_sOEPayPalUsername'                     => '',
    'SHOP_MODULE_sOEPayPalPassword'                          => '',
    'SHOP_MODULE_sOEPayPalSignature'                         => '',

    'SHOP_MODULE_blOEPayPalSandboxMode'                      => '',
    'SHOP_MODULE_sOEPayPalSandboxUserEmail'                  => '',
    'SHOP_MODULE_sOEPayPalSandboxUsername'                   => '',
    'HELP_SHOP_MODULE_sOEPayPalSandboxUsername'              => '',
    'SHOP_MODULE_sOEPayPalSandboxPassword'                   => '',
    'SHOP_MODULE_sOEPayPalSandboxSignature'                  => '',

    'SHOP_MODULE_blPayPalLoggerEnabled'                      => '',

    'SHOP_MODULE_blOEPayPalECheckoutInMiniBasket'            => '',
    'HELP_SHOP_MODULE_blOEPayPalECheckoutInMiniBasket'       => '',

    'SHOP_MODULE_blOEPayPalFinalizeOrderOnPayPal'            => '',

    'SHOP_MODULE_blOEPayPalECheckoutInDetails'               => '',
    'HELP_SHOP_MODULE_blOEPayPalECheckoutInDetails'          => '',

    'SHOP_MODULE_GROUP_oepaypal_banners'                     => '',
    'SHOP_MODULE_oePayPalClientId'                           => '',
    'SHOP_MODULE_oePayPalBannersHideAll'                     => '',
    'SHOP_MODULE_oePayPalBannersStartPage'                   => '',
    'SHOP_MODULE_oePayPalBannersStartPageSelector'           => '',
    'HELP_SHOP_MODULE_oePayPalBannersStartPageSelector'      => '',
    'SHOP_MODULE_oePayPalBannersCategoryPage'                => '',
    'SHOP_MODULE_oePayPalBannersCategoryPageSelector'        => '',
    'HELP_SHOP_MODULE_oePayPalBannersCategoryPageSelector'   => '',
    'SHOP_MODULE_oePayPalBannersSearchResultsPage'           => '',
    'SHOP_MODULE_oePayPalBannersSearchResultsPageSelector'   => '',
    'HELP_SHOP_MODULE_oePayPalBannersSearchResultsPageSelector' => '',
    'SHOP_MODULE_oePayPalBannersProductDetailsPage'          => '',
    'SHOP_MODULE_oePayPalBannersProductDetailsPageSelector'  => '',
    'HELP_SHOP_MODULE_oePayPalBannersProductDetailsPageSelector' => '',
    'SHOP_MODULE_oePayPalBannersCheckoutPage'                => '',
    'SHOP_MODULE_oePayPalBannersCartPageSelector'            => '',
    'HELP_SHOP_MODULE_oePayPalBannersCartPageSelector'       => '',
    'SHOP_MODULE_oePayPalBannersPaymentPageSelector'         => '',
    'HELP_SHOP_MODULE_oePayPalBannersPaymentPageSelector'    => '',
    'SHOP_MODULE_oePayPalBannersColorScheme'                 => '',
    'SHOP_MODULE_oePayPalBannersColorScheme_blue'            => '',
    'SHOP_MODULE_oePayPalBannersColorScheme_black'           => '',
    'SHOP_MODULE_oePayPalBannersColorScheme_white'           => '',
    'SHOP_MODULE_oePayPalBannersColorScheme_white-no-border' => '',
);
