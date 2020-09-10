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

$sLangName  = 'English';

$aLang = array(
    'charset'                                       => '',

    'SHOP_THEME_GROUP_images'                       => 'Képek',
    'SHOP_THEME_GROUP_features'                     => 'Funkciók',
    'SHOP_THEME_GROUP_display'                      => 'Megjelenés',
    'SHOP_THEME_GROUP_logo'                         => 'Logo',
    'SHOP_THEME_GROUP_favicons'                     => 'Favicons',
    'SHOP_THEME_GROUP_footer'                       => 'Lábléc',
    'SHOP_THEME_GROUP_header'                       => 'Fejléc',
    'SHOP_THEME_GROUP_contact'                      => 'Kapcsolat',
    'SHOP_THEME_GROUP_googleanalytics'              => 'Google Analytics',
    'SHOP_THEME_GROUP_googlets'                     => 'Google certifikált Kereskedő',
    'SHOP_THEME_GROUP_background'                   => 'Háttér',
    'SHOP_THEME_GROUP_econda'                       => 'econda Web Shop Controlling',
    'SHOP_THEME_GROUP_emails'                       => 'E-Mail-ek',

    'SHOP_THEME_sIconsize'                          => 'Az ikonok mérete Pixelben (szélesség*magasság)', //SHOP_CONFIG_ICONSIZE
    'HELP_SHOP_THEME_sIconsize'                     => '' .
                                                       '' .
                                                       '' .
                                                       '',

    'SHOP_THEME_sThumbnailsize'                     => 'A Bélyegképek mérete. (szélesség*magasság)', //SHOP_CONFIG_THUMBNAILSIZE
    'HELP_SHOP_THEME_sThumbnailsize'                => '' .
                                                       '' .
                                                       '' .
                                                       '',

    'SHOP_THEME_sZoomImageSize'                     => 'A nagyított képek mérete (Nagyítás 1-4) pixelben (szélesség*magasság)', //SHOP_CONFIG_ZOOMIMAGESIZE
    'SHOP_THEME_sCatThumbnailsize'                  => 'A kategória képek mérete pixelben (szélesség*magasság)', //SHOP_CONFIG_CATEGORYTHUMBNAILSIZE
    'HELP_SHOP_THEME_sCatThumbnailsize'             => 'Határozza meg a kategória képek méretét pixelben (szélesség*magasság)', //SHOP_CONFIG_CATEGORYTHUMBNAILSIZE
    'SHOP_THEME_aDetailImageSizes'                  => 'Termékképek mérete pixelben  (Kép 1-12) (szélesség*magasság)', //SHOP_CONFIG_DETAILIMAGESIZE

    'SHOP_THEME_sManufacturerIconsize'              => 'A gyártók képeinek mérete Pixelben (szélesség*magasság)', // Check if this is really manufacturer or if it is more like "brand"
    'HELP_SHOP_THEME_sManufacturerIconsize'         => 'Ez a márkajelzés jelenik meg a kezdőlapon "forgalmazott márkáink" alatt.',

    'SHOP_THEME_sCatIconsize'                       => 'Egy alkategória kategóriaképének a mérete pixelben (szélesség*magasság)',
    'HELP_SHOP_THEME_sCatIconsize'                  => 'Ezek kategóriaképek jelennek meg a kategória nézetben a fenti méret meghatározásoknek megfelelően..',

    'SHOP_THEME_sCatPromotionsize'                  => 'A kezdőlapon megjelenő kategóriaképek mérete pixelben (szélesség*magasság)',
    'HELP_SHOP_THEME_sCatPromotionsize'             => 'Azok a kategóriák, amelyek a kezdőoldalon jelennek meg, szándék szerint más méretet igényelnek. Ezt állíthatja be itt.',

    'SHOP_THEME_blFooterShowHelp'                   => 'Súgó-Link aktiválása',
    'SHOP_THEME_blFooterShowLinks'                  => 'Linkek-Link aktiválása',
    'SHOP_THEME_blFooterShowNewsletter'             => 'Hírlevél-Link aktiválása',
    'SHOP_THEME_blFooterShowNewsletterForm'         => 'Hírlevél-Űrlap aktiválása',
    'SHOP_THEME_blFooterShowNews'                   => 'Újdonságok-Link aktiválása (im OXID eShop admin "Nachrichten" genannt)',
    'SHOP_THEME_bl_showGiftWrapping'                => 'Díszcsomagolás aktiválása', //SHOP_CONFIG_SHOWGIFTWRAPPING
    'SHOP_THEME_bl_showVouchers'                    => 'Ajándékutalványok aktiválása', //SHOP_CONFIG_SHOWVOUCHERS
    'SHOP_THEME_bl_showWishlist'                    => 'Kívánságlista aktiválása', //SHOP_CONFIG_SHOWWISHLIST
    'SHOP_THEME_bl_showCompareList'                 => 'Termékösszehasonlítás aktiválása', //SHOP_CONFIG_SHOWCOMPARELIST
    'SHOP_THEME_bl_showListmania'                   => 'Kedvencek aktiválása', //SHOP_CONFIG_SHOWLISTMANIA
    'SHOP_THEME_blShowBirthdayFields'               => 'Beviteli mező megjelenítése a születési dátumhoz, a fiók adatainak kitöltésekor', //SHOP_CONFIG_SHOWBIRTHDAYFIELDS

    'SHOP_THEME_iTopNaviCatCount'                   => 'A fent megjelenítendő kategóriák száma(a további kategóriák a "Több" gombra kattintva érhetők el)', //SHOP_CONFIG_TOPNAVICATCOUNT
    'SHOP_THEME_blShowFinalStep'                    => 'A megrendelés megerősítés megjelenítése megrendelés lezárásakor (ötödik lépés a megrendelés folyamatában)', //SHOP_SYSTEM_SHOWFINALSTEP
    'SHOP_THEME_iNewBasketItemMessage'              => 'Ha egy termék a kosárba kerül, a következő művelet futtatása', //SHOP_SYSTEM_SHOWNEWBASKETITEMMESSAGE
    'HELP_SHOP_THEME_iNewBasketItemMessage'         => 'Ha a vásárlók egy terméket a kosárba helyeznek az oxid különböző visszajelzési műveleteket végezhet el.', //SHOP_SYSTEM_SHOWNEWBASKETITEMMESSAGE
    'SHOP_THEME_iNewBasketItemMessage_0'            => 'Ne tegyen semmit',
    'SHOP_THEME_iNewBasketItemMessage_1'            => 'Jelzés megjelenítése',
    'SHOP_THEME_iNewBasketItemMessage_2'            => 'Felpattanó ablak megjelenítése',
    'SHOP_THEME_iNewBasketItemMessage_3'            => 'Kosár megnyitása',

    'SHOP_THEME_blShowListDisplayType'              => 'Terméklista típusok megjelenítése a terméklistákban',
    'HELP_SHOP_THEME_blShowListDisplayType'         => 'Meghatározhatja a látogató a terméklistatípusok módját? Amennyiben ez az opció nincs aktiválva, akkor az alapértelmezett terméklistanézet jelenik meg.',
    'SHOP_THEME_sDefaultListDisplayType'            => 'Alapértelmezett terméklista nézet',
    'SHOP_THEME_sDefaultListDisplayType_grid'       => 'Galéria nézet',
    'SHOP_THEME_sDefaultListDisplayType_line'       => 'Lista nézet',
    'SHOP_THEME_sDefaultListDisplayType_infogrid'   => 'Galéria nézet kétoszlopos',
    'SHOP_THEME_sStartPageListDisplayType'          => 'Terméklistanézet a kezdőlapon',
    'SHOP_THEME_sStartPageListDisplayType_grid'     => 'Galéria nézet',
    'SHOP_THEME_sStartPageListDisplayType_line'     => 'Lista nézet',
    'SHOP_THEME_sStartPageListDisplayType_infogrid' => 'Galéria nézet kétoszlopos',

    'SHOP_THEME_aNrofCatArticlesInGrid'             => 'A galéria nézethez: A termékek száma, amely a terméklistáknál oldalanként megjelenik.<br><br>Figyelem: 100 fölötti termék megjelenítése egy oldalon, jelentősen lecsökkentheti a program működési sebességét!',
    'SHOP_THEME_aNrofCatArticles'                   => 'A termékek száma, amely a terméklistáknál oldalanként megjelenhetnek<br><br>Figyelem: 100 fölötti termék megjelenítése egy oldalon, jelentősen lecsökkentheti a program működési sebességét!',

    'SHOP_THEME_sFacebookUrl'                       => 'Facebook Oldal-URL',
    'HELP_SHOP_THEME_sFacebookUrl'                  => 'Pl.: https://www.facebook.com/oxidesales',
    'SHOP_THEME_sTwitterUrl'                        => 'Twitter Profil-URL',
    'HELP_SHOP_THEME_sTwitterUrl'                   => 'Pl.: https://twitter.com/OXID_eSales',
    'SHOP_THEME_sBlogUrl'                           => 'Blog-URL',
    'HELP_SHOP_THEME_sBlogUrl'                      => 'Pl.: http://blog.oxid-esales.com',
    'SHOP_THEME_sYouTubeUrl'                        => 'YouTube Csatorna-URL',
    'HELP_SHOP_THEME_sYouTubeUrl'                   => 'Pl.: https://www.youtube.com/user/oxidesales‎',
    'SHOP_THEME_sGooglePlusUrl'                     => 'Google+ Oldal-URL',
    'HELP_SHOP_THEME_sGooglePlusUrl'                => 'Pl.: https://plus.google.com/114133952363540971062',

    'SHOP_THEME_sGoogleMapsAddr'                    => 'Az ön címe',
    'HELP_SHOP_THEME_sGoogleMapsAddr'               => 'Pl.: OXID eSales AG, Bertoldstraße 48, 79098 Freiburg‎',

    'SHOP_THEME_bl_showManufacturerSlider'          => 'Gyártók-Slider megjelenítése a kezdőoldalon',

    'SHOP_THEME_blUseGAPageTracker'                 => 'Google Analytics PageTracker használata',
    'SHOP_THEME_blUseGAEcommerceTracking'           => 'Google Analytics Ecommerce Tracking használata',
    'HELP_SHOP_THEME_blUseGAEcommerceTracking'      => 'Kérem, vegye figyelembe, hogy ezt az opciót a Google Analytics fiókjában is aktiválnia kell. Bővebben: <a href="https://support.google.com/analytics/answer/1009612?hl=de&ref_topic=1037061" target="_blank">Link</a>',
    'SHOP_THEME_sGATrackingId'                      => 'Google Analytics Tracking-ID',
    'HELP_SHOP_THEME_sGATrackingId'                 => 'Pl.: UA-XXXXXXXX-1',
    'SHOP_THEME_blGAAnonymizeIPs'                   => 'IP-cím anonimizálása (Németországban kötelező!)',

    'SHOP_THEME_sLogoFile'                          => 'A fejléc logo fájl neve',
    'HELP_SHOP_THEME_sLogoFile'                     => 'Relativ elérési út <code>/out/flow/img/</code>.',

    'SHOP_THEME_sLogoWidth'                         => 'A fejléc logó szélessége',
    'HELP_SHOP_THEME_sLogoWidth'                    => 'Méretek pixelben.',
    'SHOP_THEME_sLogoHeight'                        => 'A fejléc logó magassága',
    'HELP_SHOP_THEME_sLogoHeight'                   => 'Méretek pixelben.',

    'SHOP_THEME_sEmailLogo'                         => 'Az e-mail fejléc logo fájl neve',
    'HELP_SHOP_THEME_sEmailLogo'                    => 'Relativ elérési út <code>/out/flow/img/</code>.',

    'SHOP_THEME_sFaviconFile'                       => 'A Favicon fájl neve',
    'HELP_SHOP_THEME_sFaviconFile'                  => 'A Favicon alatt az az ikon értendő, amely az ön weboldalán a böngésző fülén megjelenik.<br>Általában egy .ico kiterjesztésű fájl.<br>Relativ elérési útvonal <code>/out/flow/img/favicons/</code>.',
    'SHOP_THEME_sFavicon16File'                     => 'A Favicon fájl neve 16*16px méretben.',
    'SHOP_THEME_sFavicon32File'                     => 'A Favicon fájl neve 32*32px méretben.',
    'SHOP_THEME_sFavicon48File'                     => 'A Favicon fájl neve 48*48px méretben.',
    'SHOP_THEME_sFavicon64File'                     => 'A Favicon fájl neve 64*64px méretben.',
    'SHOP_THEME_sFavicon128File'                    => 'A Favicon fájl neve 128*128px méretben.',
    'SHOP_THEME_sFavicon512File'                    => 'A Favicon fájl neve 512*512px méretben.',
    'SHOP_THEME_sFaviconMSTileColor'                => 'Windows 8/Windows Mobile könyvjelző Tapéta-színe.',
    'HELP_SHOP_THEME_sFaviconMSTileColor'           => 'Hexadecimal értékben.<br>Pl.: #D83434',

    'SHOP_THEME_blUseBackground'                    => 'Háttérkép megjelenítése',
    'SHOP_THEME_sBackgroundColor'                   => 'Az áruház háttérszíne',
    'HELP_SHOP_THEME_sBackgroundColor'              => 'Hexadecimal értékben.<br>Pl.: #D83434',
    'SHOP_THEME_sBackgroundPath'                    => 'A háttérkép fájl neve',
    'HELP_SHOP_THEME_sBackgroundPath'               => 'Relativ elérési út <code>/out/flow/img/backgrounds/</code>.',
    'SHOP_THEME_sBackgroundRepeat'                  => 'Ismétlődjön a háttér kép?',
    'SHOP_THEME_sBackgroundRepeat_no-repeat'        => 'Nem',
    'SHOP_THEME_sBackgroundRepeat_repeat-x'         => 'Igen, horizontálisan',
    'SHOP_THEME_sBackgroundRepeat_repeat-y'         => 'Igen, vertikálisan',
    'SHOP_THEME_sBackgroundRepeat_repeat'           => 'Igen, horizontálisan és vertikálisan',
    'SHOP_THEME_sBackgroundPosHorizontal'           => 'A háttérkép horizontális elhelyezkedése',
    'SHOP_THEME_sBackgroundPosHorizontal_left'      => 'balra',
    'SHOP_THEME_sBackgroundPosHorizontal_right'     => 'jobbra',
    'SHOP_THEME_sBackgroundPosHorizontal_center'    => 'középen',
    'SHOP_THEME_sBackgroundPosVertical'             => 'A háttérkép vertikális elhelyezkedése',
    'SHOP_THEME_sBackgroundPosVertical_top'         => 'fent',
    'SHOP_THEME_sBackgroundPosVertical_bottom'      => 'lent',
    'SHOP_THEME_sBackgroundPosVertical_center'      => 'Középen',
    'SHOP_THEME_sBackgroundSize'                    => 'A háttérkép mérete',
    'SHOP_THEME_sBackgroundSize_cover'              => 'lefedett (teljes magasság)',
    'SHOP_THEME_sBackgroundSize_contain'            => 'lefedett (teljes szélesség)',
    'SHOP_THEME_sBackgroundSize_normal'             => 'Eredeti méret megtartása',
    'SHOP_THEME_blBackgroundAttachment'             => 'Maradjon a háttérkép a képernyő gördítése esetén egy helyben?',
    'SHOP_THEME_blHomeLink'                         => '',
    'SHOP_THEME_bl_showPriceAlarm'                  => '',

    'SHOP_THEME_blUseGoogleTS'                      => 'Google certifikált kereskedő használata',
    'SHOP_THEME_sGoogleVendorId'                    => 'Google Store-ID (kötelező)',
    'HELP_SHOP_THEME_sGoogleVendorId'               => 'Ez az ID a kereskedői-beállításoknál a Google certifikációval rendelkező kereskedők számára.',
    'SHOP_THEME_sGoogleShoppingAccountId'           => 'Google Shopping Account-ID (választható)',
    'HELP_SHOP_THEME_sGoogleShoppingAccountId'      => 'Csak akkor adja meg, ha a Google Shopping-nak termékinformációkat továbbít.<br><br>Ügyfélszáma a Google Merchant Center-ben. Ennek az értéknek egyeznie kell azzal ügyfélszámmal, amelyet <a href="https://support.google.com/merchants/answer/188494#US" target="_blank">termékinformációk a Google Shopping-nak</a> a Google Merchant Center-en keresztül használ. Ha ön egy MCA-fiókkal rendelkezik, akkor ez az alfiók ügyfélszáma, amely a termékinformációkkal van összekötve.',
    'SHOP_THEME_sPageLanguage'                      => 'Az áruház nyelve ISO-ban (kötelező)',
    'HELP_SHOP_THEME_sPageLanguage'                 => 'A nyelv ISO-értéke egy két betűből álló kód<a href="https://hu.wikipedia.org/wiki/ISO_639" target="_blank">ISO 639-1-Nyelvi ISO-kódok</a> és az ország ISO-kódja szintén két betűből álló érték<a href="https://hu.wikipedia.org/wiki/ISO_3166-1" target="_blank">ISO 3166-1 ALPHA-2-Országok ISO kódjai</a>. Rendszerint az <ország> nagybetűkből és a <nyelv> kisbetükből áll.<br><br>Példák: de_DE, en_GB, fr_FR, en_AU, en_US vagy hu_HU.',
    'SHOP_THEME_sShoppingCountry'                   => 'Google Shopping-Feed Ország (választható)',
    'HELP_SHOP_THEME_sShoppingCountry'              => 'Csak akkor töltse ki, a információkat küld a Google Shopping-számára.<br><br>Az ország megjelölésére szolgál, amelyhez a Google Shopping fiókja hozzá van rendelve. Ennek az értéknek egyeznie kell a az ügyfélfiókjában megadottakkal. <a href="https://support.google.com/merchants/answer/188494#US" target="_blank">Termékinformációk küldése a Google Shopping-nak</a>.<br><br>Az ország-paraméterének <a href="http://de.wikipedia.org/wiki/ISO_3166-1_alpha-2" target="_blank">két betűből kell állnia ISO 3166-országkód</a>.<br><br>PL.: US, GB, AU, FR, DE, HU.',
    'SHOP_THEME_sShoppingLanguage'                  => 'Google Shopping-Feed nyelv (választható)',
    'HELP_SHOP_THEME_sShoppingLanguage'             => 'Csak akkor töltse ki, a információkat küld a Google Shopping-számára.<br><br>Ez a Google Shopping fiókjának a nyelve. Ennek az értéknek egyeznie kell a Google Shopping-ban megadottal. <a href="https://support.google.com/merchants/answer/188494#US" target="_blank">termékinformációk a Google Shopping-nak</a>.<br><br>A nyelvi kód két kisbetűből áll <a href="https://hu.wikipedia.org/wiki/ISO_3166-1" target="_blank">két kisbetűből álló nyelvi kód ISO 639-1-nyelvi kód</a> sein.<br><br>Példák: en, fr, de, hu.',
    'SHOP_THEME_sShippingDaysOnStock'               => 'Napok száma a megrendelés napjától számítva a megrendelés elküldéséig abban az esetben, ha az összes megrendelt termék a raktáron van. (kötelező)',
    'HELP_SHOP_THEME_sShippingDaysOnStock'          => 'Ez alatt az megrendelés elküldésének előre kiszámítható dátumát értjük, ami nem egyezik a szállítás előre látható dátumával.<br><br>Amennyiben a megrendelés több terméket tartalmaz, válassza ki a legkésőbbi küldési időpontot.<br><br>Ha az ügyfeleinek egy időtartamot jelöl meg, akkor adja meg az időtartam utolsó napját. Ha például 5-7 napon belül küldi el a megrendelést, akkor adjon meg a 7 napot.<br><br>Az itt megadott időpontról értesül az ügyfél e-mailben.<br><br>A megrendelés elküldése után kap a vásárló egy kérdőívet e-mailben, amelyben a lezárt vásárlást értékelheti.',
    'SHOP_THEME_sShippingDaysNotOnStock'            => 'Napok száma a megrendelés napjától számítva a megrendelés elküldéséig abban az esetben, ha a megrendelt termékek közül legalább egy nincs raktáron. (kötelező)',
    'HELP_SHOP_THEME_sShippingDaysNotOnStock'       => 'Ez alatt az megrendelés elküldésének előre kiszámítható dátumát értjük, ami nem egyezik a szállítás előre látható dátumával.<br><br>Amennyiben a megrendelés több terméket tartalmaz, válassza ki a legkésőbbi küldési időpotot.<br><br>Ha az ügyfeleinek egy időtartamot jelöl meg, akkor adja meg az időtartam utolsó napját. Ha például 5-7 napon belül küldi el a megrendelést, akkor adjon meg 7 napot.<br><br>Az itt megadott időpontról értesül az ügyfél e-mailben.<br><br>A megrendelés elküldése után kap a vásárló egy kérdőívet e-mailben, amelyben a lezárt vásárlást értékelheti.',
    'SHOP_THEME_sDeliveryDaysOnStock'               => 'Ez alatt az megrendelés szállításának előre kiszámítható dátumát értjük. (kötelező)<br><br>Amennyiben a megrendelés több terméket tartalmaz, válassza ki a legkésőbbi szállítási időpontot.<br><br>Ha az ügyfeleinek egy időtartamot jelöl meg, akkor adja meg az időtartam utolsó napját. Ha például 5-7 napon belül történik megrendelés szállítása, akkor adjon meg 7 napot.',
    'HELP_SHOP_THEME_sDeliveryDaysOnStock'          => 'Ez az előre látható szállítás dátuma, amelyet a vásárlónak megnevez. Amennyiben a megrendelés több terméket tartalmaz, akkor adja meg a szállítás legkésőbbi dátumát. Ha ön a szállítás időtartamát tekinti, pl. 5-7 nap, akkor adja meg az időtartam legkésőbbi napját, azaz 7 napot.',
    'SHOP_THEME_sDeliveryDaysNotOnStock'            => 'Napok száma a megrendelés napjától számítva a megrendelés elküldéséig abban az esetben, ha a megrendelt termékek közül legalább egy nincs raktáron. (kötelező)',
    'HELP_SHOP_THEME_sDeliveryDaysNotOnStock'       => 'Ez alatt az megrendelés szállításának előre kiszámítható dátumát értjük. Amennyiben a megrendelés több terméket tartalmaz, válassza ki a legkésőbbi szállítási időpontot.<br><br>Ha az ügyfeleinek egy időtartamot jelöl meg, akkor adja meg az időtartam utolsó napját. Ha például 5-7 napon belül történik megrendelés szállítása, akkor adjon meg 7 napot.',

    'SHOP_THEME_blSliderShowImageCaption'           => 'Képaláírások megjelenítése a kezdőoldal szalagképein (slider)',
    'HELP_SHOP_THEME_blSliderShowImageCaption'      => 'Ez akkor jelenik meg, ha  egy szalagképhez hozzárendelünk egy terméket.',

    'SHOP_THEME_blEcondaRecommendationsStart'       => 'Ajánlások megjelenítése a kezdőoldalon',
    'SHOP_THEME_sEcondaWidgetIdStart'               => 'Ajánlás-Widget-ID a kezdőoldalon',
    'SHOP_THEME_blEcondaRecommendationsList'        => 'Ajánlások megjelenítése a listanézetben',
    'SHOP_THEME_sEcondaWidgetIdList'                => 'Ajánlás-Widget-ID a listanézetben',
    'SHOP_THEME_blEcondaRecommendationsDetails'     => 'Ajánlások megjelenítése a termék részleteknél',
    'SHOP_THEME_sEcondaWidgetIdDetails'             => 'Ajánlás-Widget-ID für termék részleteknél',
    'SHOP_THEME_blEcondaRecommendationsBasket'      => 'Ajánlások megjelenítése a kosárban',
    'SHOP_THEME_sEcondaWidgetIdBasket'              => 'Ajánlás-Widget-ID a kosárban',

    'SHOP_THEME_blFullwidthLayout'                      => 'Full-Width Layout aktiválása',

    'SHOP_THEME_blEmailsShowProductPictures'        => 'Termékképek megjelenítése az e-mailekben.',
);
