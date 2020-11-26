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

$sLangName  = 'Lietuvių';

$aLang = array(
    'charset'                                       => 'UTF-8',

    'SHOP_THEME_GROUP_images'                       => 'Vaizdai',
    'SHOP_THEME_GROUP_features'                     => 'Ypatybės',
    'SHOP_THEME_GROUP_display'                      => 'Rodymas',
    'SHOP_THEME_GROUP_logo'                         => 'Logotipas',
    'SHOP_THEME_GROUP_favicons'                     => 'Puslapio ikonėlės (Favicon)',
    'SHOP_THEME_GROUP_footer'                       => 'Poraštė',
    'SHOP_THEME_GROUP_header'                       => 'Antraštė',
    'SHOP_THEME_GROUP_contact'                      => 'Kontaktas',
    'SHOP_THEME_GROUP_googleanalytics'              => 'Google Analytics',
    'SHOP_THEME_GROUP_googlets'                     => '',
    'SHOP_THEME_GROUP_background'                   => 'Fono vaizdas',
    'SHOP_THEME_GROUP_econda'                       => '',
    'SHOP_THEME_GROUP_emails'                       => 'El. laiškai',

    'SHOP_THEME_sIconsize'                          => 'Ikonėlės dydis (plotis*aukštis)', //SHOP_CONFIG_ICONSIZE
    'HELP_SHOP_THEME_sIconsize'                     => 'Ikonėlės yra mažiausi produkto paveikslėliai. Jie yra naudojami: <br>' .
                                                       '<ul><li>krepšelyje</li>' .
                                                       '<li>Jei produktai rodomi dešiniajame meniu (pvz. <span class="filename_filepath_or_italic">Parduotuvės perkamiausi</span> ir <span class="filename_filepath_or_italic">Geri pasiūlymai</span>).</li></ul>' .
                                                       'Kad išvengtume dizaino problemų dėl per didelių ikonų, jų dydis ir pakeičiamas. Įveskite maksimalų ikonų dydį.',

    'SHOP_THEME_sThumbnailsize'                     => 'Mažo paveikslėlio dydis (plotis*aukštis)', //SHOP_CONFIG_THUMBNAILSIZE
    'HELP_SHOP_THEME_sThumbnailsize'                => 'Maži paveikslėliai yra naudojami:<br>' .
                                                       '<ul><li>produktų sąrašuose.</li>' .
                                                       '<li>Akcijose roddomose pagrindinio puslapio viduryje, pvz. <span class="filename_filepath_or_italic">Ką tik gavome</span>.</li></ul>' .
                                                       'Kad išvengtume dizaino problemų dėl per didelių "mažų paveikslėlių", jų dydis ir pakeičiamas. Įveskite maksimalų mažų paveikslėlių dydį.',

    'SHOP_THEME_sZoomImageSize'                     => 'Didelio paveikslėlio dydis (plotis*aukštis)', //SHOP_CONFIG_ZOOMIMAGESIZE
    'SHOP_THEME_sCatThumbnailsize'                  => 'Didelio paveikslėlio dydis (plotis*aukštis)', //SHOP_CONFIG_CATEGORYTHUMBNAILSIZE
    'HELP_SHOP_THEME_sCatThumbnailsize'             => 'Kategorijos peržiūroje yra rodomas nurodyto dydžio kategorijos paveikslėlis.', //SHOP_CONFIG_CATEGORYTHUMBNAILSIZE
    'SHOP_THEME_aDetailImageSizes'                  => 'Produkto paveikslėlio dydis (plotis*aukštis)', //SHOP_CONFIG_DETAILIMAGESIZE

    'SHOP_THEME_sManufacturerIconsize'              => 'Gamintojo/prekės ženklo logotipo dydis', // Check if this is really manufacturer or if it is more like "brand"
    'HELP_SHOP_THEME_sManufacturerIconsize'         => 'Gamintojo/prekės ženklo logotipas yra rodomas pagrindiniame puslapyje gamintojų slaideryje.',

    'SHOP_THEME_sCatIconsize'                       => 'Subkategorijos paveikslėlio dydis (plotis*aukštis)',
    'HELP_SHOP_THEME_sCatIconsize'                  => 'Subkategorijų paveikslėliai kategorijos peržiūroje yra rodomi nurodyto dydžio.',

    'SHOP_THEME_sCatPromotionsize'                  => 'Kategorijų paveikslėlių dydis pagrindinio puslapio akcijoms (plotis*aukštis)',
    'HELP_SHOP_THEME_sCatPromotionsize'             => 'Kategorijų akcijoms pagrindiniame puslapyje reikia tam tikro dydžio paveikslėlių. Nurodykite dydį čia.',

    'SHOP_THEME_blFooterShowHelp'                   => 'Rodyti pagalbos nuorodą poraštėje',
    'SHOP_THEME_blFooterShowLinks'                  => 'Rodyti "Nuorodos" nuorodą poraštėje',
    'SHOP_THEME_blFooterShowNewsletter'             => 'Rodyti naujienlaiškio registracijos nuorodą poraštėje',
    'SHOP_THEME_blFooterShowNewsletterForm'         => 'Rodyti naujienlaiškio formą poraštėje',
    'SHOP_THEME_blFooterShowNews'                   => 'Naudoti naujienų nuorodą',
    'SHOP_THEME_bl_showGiftWrapping'                => 'Siūlyti įpakuoti, kaip dovaną', //SHOP_CONFIG_SHOWGIFTWRAPPING
    'SHOP_THEME_bl_showVouchers'                    => 'Naudoti kuponus', //SHOP_CONFIG_SHOWVOUCHERS
    'SHOP_THEME_bl_showWishlist'                    => 'Naudoti pageidavimų sąrašo funkcionalumą', //SHOP_CONFIG_SHOWWISHLIST
    'SHOP_THEME_bl_showCompareList'                 => 'Naudoti palyginimus', //SHOP_CONFIG_SHOWCOMPARELIST
    'SHOP_THEME_bl_showListmania'                   => 'Naudoti listmania', //SHOP_CONFIG_SHOWLISTMANIA
    'SHOP_THEME_blShowBirthdayFields'               => 'Leisti vartotojams įvesti gimimo datą', //SHOP_CONFIG_SHOWBIRTHDAYFIELDS

    'SHOP_THEME_iTopNaviCatCount'                   => 'Viršuje rodomų kategorijų skaičius', //SHOP_CONFIG_TOPNAVICATCOUNT
    'SHOP_THEME_blShowFinalStep'                    => 'Rodyti užsakymo patvirtinimą, kai baigiamas užsakymas (penktas žingsnis pirkimo procese)', //SHOP_SYSTEM_SHOWFINALSTEP
    'SHOP_THEME_iNewBasketItemMessage'              => 'Pasirinkite, kas nutinka kai produktas įkeliamas į krepšelį', //SHOP_SYSTEM_SHOWNEWBASKETITEMMESSAGE
    'HELP_SHOP_THEME_iNewBasketItemMessage'         => 'Kai produktas įkeliamas į krepšelį, galimi keli scenarijai. Pasirinkite kaip OXID eShop turi tinkamai pateikti informaciją apie įkeltą prekę vartotojui.', //SHOP_SYSTEM_SHOWNEWBASKETITEMMESSAGE
    'SHOP_THEME_iNewBasketItemMessage_0'            => 'pastaba',
    'SHOP_THEME_iNewBasketItemMessage_1'            => 'Rodyti žinutę',
    'SHOP_THEME_iNewBasketItemMessage_2'            => 'Atidaryti iššokantį langą',
    'SHOP_THEME_iNewBasketItemMessage_3'            => 'Atidaryti krepšelį',

    'SHOP_THEME_blShowListDisplayType'              => 'Rodyti produktų sąrašo rodymo tipo pasirinkimą',
    'HELP_SHOP_THEME_blShowListDisplayType'         => 'Pasirinkite ar vartotojas gali pasirinkti kaip rodomas prekių sąrašas parduotuvėje. Jei šis punktas neaktyvuotas, jūsų vartotojam bus rodomas produktų sąrašas tokio tipo, kaip pasirinkote "Pagrindinis produktų rodymo tipas".',
    'SHOP_THEME_sDefaultListDisplayType'            => 'Numatytas prekių rodymo tipas',
    'SHOP_THEME_sDefaultListDisplayType_grid'       => 'Tinklelis',
    'SHOP_THEME_sDefaultListDisplayType_line'       => '',
    'SHOP_THEME_sDefaultListDisplayType_infogrid'   => 'Dvigubas tinklas',
    'SHOP_THEME_sStartPageListDisplayType'          => '',
    'SHOP_THEME_sStartPageListDisplayType_grid'     => 'Tinklelis',
    'SHOP_THEME_sStartPageListDisplayType_line'     => '',
    'SHOP_THEME_sStartPageListDisplayType_infogrid' => 'Dvigubas tinklas',

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
    'SHOP_THEME_sBackgroundRepeat_no-repeat'        => 'Nėra',
    'SHOP_THEME_sBackgroundRepeat_repeat-x'         => 'Taip, horizontaliai',
    'SHOP_THEME_sBackgroundRepeat_repeat-y'         => 'Taip, vertikaliai',
    'SHOP_THEME_sBackgroundRepeat_repeat'           => 'Taip, horizontaliai ir vertikaliai',
    'SHOP_THEME_sBackgroundPosHorizontal'           => 'Horizontali fono paveikslėlio pozicija',
    'SHOP_THEME_sBackgroundPosHorizontal_left'      => 'kairėje',
    'SHOP_THEME_sBackgroundPosHorizontal_right'     => 'dešinėje',
    'SHOP_THEME_sBackgroundPosHorizontal_center'    => 'centruotas',
    'SHOP_THEME_sBackgroundPosVertical'             => 'Vertikali foninio paveikslėlio pozicija',
    'SHOP_THEME_sBackgroundPosVertical_top'         => 'viršuje',
    'SHOP_THEME_sBackgroundPosVertical_bottom'      => 'apačia',
    'SHOP_THEME_sBackgroundPosVertical_center'      => 'centruotas',
    'SHOP_THEME_sBackgroundSize'                    => 'Foninio paveikslėlio dydis',
    'SHOP_THEME_sBackgroundSize_cover'              => 'uždengti (visas aukštis)',
    'SHOP_THEME_sBackgroundSize_contain'            => 'uždengti (visas plotis)',
    'SHOP_THEME_sBackgroundSize_normal'             => 'Išlaikyti originalų dydį',
    'SHOP_THEME_blBackgroundAttachment'             => 'Fiksuoti foną skrolinant?',
    'SHOP_THEME_blHomeLink'                         => 'Rodyti "Pradžia" pagrindiniame meniu?',
    'SHOP_THEME_bl_showPriceAlarm'                  => 'Rodyti "Siūlyk kainą"',

    'SHOP_THEME_blUseGoogleTS'                      => 'Naudoti "Google Trusted Stores"',
    'SHOP_THEME_sGoogleVendorId'                    => 'Google Store-ID',
    'HELP_SHOP_THEME_sGoogleVendorId'               => 'Galite rastį šį ID savo "Trusted Stores Merchant Dashboard".',
    'SHOP_THEME_sGoogleShoppingAccountId'           => 'Google Shopping Account-ID (neprivalomas)',
    'HELP_SHOP_THEME_sGoogleShoppingAccountId'      => 'Naudokite šį lauką tik jei siunčiate prekes į Google Shopping. <br><br>Account ID iš Google Merchant Center. Ši reikšmė turi būti tokia pat kaip account ID kurį naudojate <a href="https://support.google.com/merchants/answer/188494#US" target="_blank">Google Shopping 
 produktų sąraše siunčiamame per Google Merchant center.</a> Jei turite MCA paskyrą, naudokite subaccount ID susietą su tuo produktų sąrašu.',
    'SHOP_THEME_sPageLanguage'                      => 'Jūsų parduotuvės kalba ISO',
    'HELP_SHOP_THEME_sPageLanguage'                 => 'Lokalės formatas &lt;kalba&gt;_&lt;šalis&gt;<br><br>&lt;Kalba&gt; yra dviejų raidžių kodas apibrėžtas ISO 639-1 standdarte, o &lt;šalis&gt; yra dviejų raidžių šalies kodas apibrėžtas ISO 3166-1 alpha-2 standarte. Paprastai &lt;šalis&gt; rašoma didžiosiomis raidėmis, o &lt;kalba&gt; mažosiomis. Pvz. en_US, en_GB, en_AU, fr_FR, de_DE, or ja_JP.',
    'SHOP_THEME_sShoppingCountry'                   => 'Google Shopping-Feed šalis (neprivaloma)',
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
    'SHOP_THEME_blEcondaRecommendationsBasket'      => 'Rodyti rekomendacijas krepšelyje',
    'SHOP_THEME_sEcondaWidgetIdBasket'              => '',

    'SHOP_THEME_blFullwidthLayout'                      => '',

    'SHOP_THEME_blEmailsShowProductPictures'        => '',
);
