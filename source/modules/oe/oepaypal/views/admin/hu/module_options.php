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
    'charset'                                                => 'ISO-8859-2',
    'SHOP_MODULE_GROUP_oepaypal_display'                     => '\'Megjelen',
    'SHOP_MODULE_GROUP_oepaypal_checkout'                    => '\'PayPal-integr',
    'SHOP_MODULE_GROUP_oepaypal_payment'                     => '\'Kos',
    'SHOP_MODULE_GROUP_oepaypal_transaction'                 => 'P',
    'SHOP_MODULE_GROUP_oepaypal_api'                         => 'API-Szignat',
    'SHOP_MODULE_GROUP_oepaypal_development'                 => 'A folyamat be',

    'SHOP_MODULE_sOEPayPalBrandName'                         => 'A shop neve',
    'HELP_SHOP_MODULE_sOEPayPalBrandName'                    => '',
    'SHOP_MODULE_sOEPayPalBorderColor'                       => '\'A kos',
    'HELP_SHOP_MODULE_sOEPayPalBorderColor'                  => '',

    'SHOP_MODULE_blOEPayPalStandardCheckout'                 => 'PayPal B',
    'HELP_SHOP_MODULE_blOEPayPalStandardCheckout'            => 'A PayPal megjelenik mint fizet',
    'SHOP_MODULE_blOEPayPalExpressCheckout'                  => 'PayPal Express',
    'HELP_SHOP_MODULE_blOEPayPalExpressCheckout'             => 'A PayPal-Express-Gombra kattintva eljut az ',
    'SHOP_MODULE_blOEPayPalGuestBuyRole'                     => 'Vend',
    'HELP_SHOP_MODULE_blOEPayPalGuestBuyRole'                => 'Az ',

    'SHOP_MODULE_blOEPayPalSendToPayPal'                     => 'Kos',
    'HELP_SHOP_MODULE_blOEPayPalSendToPayPal'                => 'A kos',
    'SHOP_MODULE_blOEPayPalDefaultUserChoice'                => '\'Be',
    'HELP_SHOP_MODULE_blOEPayPalDefaultUserChoice'           => 'Az ',

    'SHOP_MODULE_sOEPayPalLogoImageOption'                   => '\'Shop-Logo megjelen',
    'HELP_SHOP_MODULE_sOEPayPalLogoImageOption'              => 'PayPal-fizet',

    'SHOP_MODULE_sOEPayPalCustomShopLogoImage'               => '\'Speci',
    'HELP_SHOP_MODULE_sOEPayPalCustomShopLogoImage'          => 'A PayPal-fizet',

    'SHOP_MODULE_sOEPayPalLogoImageOption_noLogo'            => '\'Nem k',
    'SHOP_MODULE_sOEPayPalLogoImageOption_shopLogo'          => 'Alap',
    'SHOP_MODULE_sOEPayPalLogoImageOption_customLogo'        => 'Speci',

    'SHOP_MODULE_sOEPayPalTransactionMode'                   => 'A p',
    'HELP_SHOP_MODULE_sOEPayPalTransactionMode'              => 'V',

    'SHOP_MODULE_sOEPayPalTransactionMode_Automatic'         => 'AUTOMATIC - a megrendelt ',
    'SHOP_MODULE_sOEPayPalTransactionMode_Sale'              => '\'SALE - azonnali v',
    'SHOP_MODULE_sOEPayPalTransactionMode_Authorization'     => '\'AUTH - az ',
    'SHOP_MODULE_sOEPayPalEmptyStockLevel'                   => 'Fennmarad',
    'HELP_SHOP_MODULE_sOEPayPalEmptyStockLevel'              => 'Ez az ',

    'SHOP_MODULE_sOEPayPalUserEmail'                         => 'A PayPal felhaszn',
    'SHOP_MODULE_sOEPayPalUsername'                          => 'API-felhaszn',
    'HELP_SHOP_MODULE_sOEPayPalUsername'                     => 'Jelentkezzen be <a target="_blank" href="https://www.paypal.com/de/cgi-bin/webscr?cmd=_get-api-signature&generic-flow=true">PayPal-fi',
    'SHOP_MODULE_sOEPayPalPassword'                          => '\'API-jelsz',
    'SHOP_MODULE_sOEPayPalSignature'                         => '\'Al',

    'SHOP_MODULE_blOEPayPalSandboxMode'                      => 'Sandbox akt',
    'SHOP_MODULE_sOEPayPalSandboxUserEmail'                  => 'Sandbox: PayPal-felhaszn',
    'SHOP_MODULE_sOEPayPalSandboxUsername'                   => '\'Sandbox: API-felhaszn',
    'HELP_SHOP_MODULE_sOEPayPalSandboxUsername'              => 'Jelentkezzen be <a target="_blank" href="https://www.sandbox.paypal.com/de/cgi-bin/webscr?cmd=_get-api-signature&generic-flow=true">PayPal-fi',
    'SHOP_MODULE_sOEPayPalSandboxPassword'                   => '\'Sandbox: API-Jelsz',
    'SHOP_MODULE_sOEPayPalSandboxSignature'                  => '\'Sandbox: Al',

    'SHOP_MODULE_blPayPalLoggerEnabled'                      => 'PayPal bwl',

    'SHOP_MODULE_blOEPayPalECheckoutInMiniBasket'            => 'Express fizet',
    'HELP_SHOP_MODULE_blOEPayPalECheckoutInMiniBasket'       => 'Amennyiben a PayPal Express akt',

    'SHOP_MODULE_blOEPayPalFinalizeOrderOnPayPal'            => '',

    'SHOP_MODULE_blOEPayPalECheckoutInDetails'               => 'Express fizet',
    'HELP_SHOP_MODULE_blOEPayPalECheckoutInDetails'          => 'Amennyiben a PayPal Express akt',

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
