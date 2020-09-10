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

    'SHOP_THEME_GROUP_images'                       => 'Obrázky',
    'SHOP_THEME_GROUP_features'                     => 'Vlastnosti',
    'SHOP_THEME_GROUP_display'                      => 'Zobrazit',
    'SHOP_THEME_GROUP_logo'                         => 'Logo',
    'SHOP_THEME_GROUP_favicons'                     => 'Favicons',
    'SHOP_THEME_GROUP_footer'                       => 'Patička',
    'SHOP_THEME_GROUP_header'                       => 'Hlavička',
    'SHOP_THEME_GROUP_contact'                      => 'Kontakt',
    'SHOP_THEME_GROUP_googleanalytics'              => 'Google Analytics',
    'SHOP_THEME_GROUP_googlets'                     => 'Google Trusted Stores',
    'SHOP_THEME_GROUP_background'                   => 'Obrázek pozadí',
    'SHOP_THEME_GROUP_econda'                       => 'econda Web Shop Controlling',
    'SHOP_THEME_GROUP_emails'                       => 'E-maily',

    'SHOP_THEME_sIconsize'                          => 'Velikost ikony v pixelech(šířka*výška)', //SHOP_CONFIG_ICONSIZE
    'HELP_SHOP_THEME_sIconsize'                     => '' .
                                                       '' .
                                                       '' .
                                                       '',

    'SHOP_THEME_sThumbnailsize'                     => 'Velikost náhledů v pixelech (šířka*výška)', //SHOP_CONFIG_THUMBNAILSIZE
    'HELP_SHOP_THEME_sThumbnailsize'                => '' .
                                                       '' .
                                                       '' .
                                                       '',

    'SHOP_THEME_sZoomImageSize'                     => 'Velikost zoomu obrázku (zoom 1-4) v pixelech (šířka*výška)', //SHOP_CONFIG_ZOOMIMAGESIZE
    'SHOP_THEME_sCatThumbnailsize'                  => 'Velikost obrázku kategorie v pixelech (šířka*výška)', //SHOP_CONFIG_CATEGORYTHUMBNAILSIZE
    'HELP_SHOP_THEME_sCatThumbnailsize'             => 'V přehledu kategorií bude obraz vybrané kategorie znázorněn v zde definované velikosti.', //SHOP_CONFIG_CATEGORYTHUMBNAILSIZE
    'SHOP_THEME_aDetailImageSizes'                  => 'Velikost obrázku produktu (obrázek 1-12) v pixelech (šířka*výška)', //SHOP_CONFIG_DETAILIMAGESIZE

    'SHOP_THEME_sManufacturerIconsize'              => 'Velikost loga výrobce/značky v pixelech (šířka*výška)', // Check if this is really manufacturer or if it is more like "brand"
    'HELP_SHOP_THEME_sManufacturerIconsize'         => 'Toto logo bude umístěno na úvodní stránce v přehledu značkových log.',

    'SHOP_THEME_sCatIconsize'                       => 'Velikost obrázku podkategorie v pixelech(šířka*výška)',
    'HELP_SHOP_THEME_sCatIconsize'                  => 'V přehledu kategorií budou obrázky kategorií pro podkategorie znázorněny v zde definované velikosti.',

    'SHOP_THEME_sCatPromotionsize'                  => 'Velikost obrázku kategorie pro úvodní stránku v pixelech (šířka*výška)',
    'HELP_SHOP_THEME_sCatPromotionsize'             => 'Popis kategorií na úvodní stránce potřebuje specifickou velikost pro kategorii obrázků. Definujte velikost těchto obrazů zde.',

    'SHOP_THEME_blFooterShowHelp'                   => 'Aktivovat pomocný link',
    'SHOP_THEME_blFooterShowLinks'                  => 'Aktivovat odkazy vlevo',
    'SHOP_THEME_blFooterShowNewsletter'             => 'Aktivovat link novinek',
    'SHOP_THEME_blFooterShowNewsletterForm'         => 'Aktivovat formulář novinek',
    'SHOP_THEME_blFooterShowNews'                   => 'Aktivovat link novinek',
    'SHOP_THEME_bl_showGiftWrapping'                => 'Aktivovat dárková balení', //SHOP_CONFIG_SHOWGIFTWRAPPING
    'SHOP_THEME_bl_showVouchers'                    => 'Aktivovat poukázky', //SHOP_CONFIG_SHOWVOUCHERS
    'SHOP_THEME_bl_showWishlist'                    => 'Aktivovat seznam přání', //SHOP_CONFIG_SHOWWISHLIST
    'SHOP_THEME_bl_showCompareList'                 => 'Aktivovat srovnání produktů', //SHOP_CONFIG_SHOWCOMPARELIST
    'SHOP_THEME_bl_showListmania'                   => 'Zobrazit seznam oblíbených', //SHOP_CONFIG_SHOWLISTMANIA
    'SHOP_THEME_blShowBirthdayFields'               => 'Zobrazit pole pro zadání data narození v případě zadávání dat uživatele', //SHOP_CONFIG_SHOWBIRTHDAYFIELDS

    'SHOP_THEME_iTopNaviCatCount'                   => 'Počet kategorií, které budou zobrazeny nahoře (další kategorie budou zahrnuty pod "více")', //SHOP_CONFIG_TOPNAVICATCOUNT
    'SHOP_THEME_blShowFinalStep'                    => 'Zobrazit potvrzení objednávky po uzavření objednávky (5.krok objednávky)', //SHOP_SYSTEM_SHOWFINALSTEP
    'SHOP_THEME_iNewBasketItemMessage'              => 'Po vložení produktu do zbožního koše provést následující akce', //SHOP_SYSTEM_SHOWNEWBASKETITEMMESSAGE
    'HELP_SHOP_THEME_iNewBasketItemMessage'         => 'Pokud spotřebitelé vloží produkt do nákupního koše, může OXID eShop provést různé akce odezvy.', //SHOP_SYSTEM_SHOWNEWBASKETITEMMESSAGE
    'SHOP_THEME_iNewBasketItemMessage_0'            => 'Žádné',
    'SHOP_THEME_iNewBasketItemMessage_1'            => 'Zobrazit zprávu',
    'SHOP_THEME_iNewBasketItemMessage_2'            => 'Otevřít popup',
    'SHOP_THEME_iNewBasketItemMessage_3'            => 'Otevřít zbožní koš',

    'SHOP_THEME_blShowListDisplayType'              => 'Typ karty produktu zobrazit v seznamu produktu',
    'HELP_SHOP_THEME_blShowListDisplayType'         => 'Rozhodnout, zda návštěvník vašeho obchodu může zvolit typ seznamu produktů v obchodu . Není-li tato volba aktivována, budou vaši návštěvníci vidět seznamy zobrazené jako byste upravil v zaškrtávacím poli "typ seznamu výchozí produkt".',
    'SHOP_THEME_sDefaultListDisplayType'            => 'Standard pro typ seznamu produktů',
    'SHOP_THEME_sDefaultListDisplayType_grid'       => 'Galerie',
    'SHOP_THEME_sDefaultListDisplayType_line'       => 'Seznam',
    'SHOP_THEME_sDefaultListDisplayType_infogrid'   => 'Galerie - 2 sloupce',
    'SHOP_THEME_sStartPageListDisplayType'          => 'Typ seznamu produktů na úvodní stránce',
    'SHOP_THEME_sStartPageListDisplayType_grid'     => 'Galerie',
    'SHOP_THEME_sStartPageListDisplayType_line'     => 'Seznam',
    'SHOP_THEME_sStartPageListDisplayType_infogrid' => 'Galerie - 2 sloupce',

    'SHOP_THEME_aNrofCatArticlesInGrid'             => 'Pro galerii: Počet produktů, které mohou být znázorněny v seznamu produktů na jedné straně<br><br>Upozornění: Velký počet produktů na jedné straně (přes 100) může značně ovlivnit rychlost obchodu!',
    'SHOP_THEME_aNrofCatArticles'                   => 'Počet produktů, které mohou být zobrazeny v seznamu produktů na jedné straně<br><br>Upozornění: Velký počet produktů na straně (přes 100) může značně ovlivnit rychlost obchodu!',

    'SHOP_THEME_sFacebookUrl'                       => 'URL Facebook',
    'HELP_SHOP_THEME_sFacebookUrl'                  => 'Např.: https://www.facebook.com/oxidesales',
    'SHOP_THEME_sTwitterUrl'                        => 'URL profilu Twitter',
    'HELP_SHOP_THEME_sTwitterUrl'                   => 'Např.: https://twitter.com/OXID_eSales',
    'SHOP_THEME_sBlogUrl'                           => 'Blog URL',
    'HELP_SHOP_THEME_sBlogUrl'                      => 'Např.: http://blog.oxid-esales.com',
    'SHOP_THEME_sYouTubeUrl'                        => 'YouTube Kanal-URL',
    'HELP_SHOP_THEME_sYouTubeUrl'                   => 'Např.: https://www.youtube.com/user/oxidesales‎',
    'SHOP_THEME_sGooglePlusUrl'                     => 'URL stránky Google+',
    'HELP_SHOP_THEME_sGooglePlusUrl'                => 'Např.: https://plus.google.com/114133952363540971062',

    'SHOP_THEME_sGoogleMapsAddr'                    => 'Vaše adresa',
    'HELP_SHOP_THEME_sGoogleMapsAddr'               => 'Např.: OXID eSales AG, Bertoldstraße 48, 79098 Freiburg‎',

    'SHOP_THEME_bl_showManufacturerSlider'          => 'Zobrazit na úvodní stránce slider výrobce',

    'SHOP_THEME_blUseGAPageTracker'                 => 'Použít Google Analytics PageTracker',
    'SHOP_THEME_blUseGAEcommerceTracking'           => 'Použít Google Analytics Ecommerce Tracking',
    'HELP_SHOP_THEME_blUseGAEcommerceTracking'      => 'Prosím, mějte na paměti, že tuto volbu je třeba mít také povolenou v účtu Google Analytics. Návod: <a href="https://support.google.com/analytics/answer/1009612?hl=en&ref_topic=1037061" target="_blank">Odkaz</a>',
    'SHOP_THEME_sGATrackingId'                      => 'Google Analytics Tracking-ID',
    'HELP_SHOP_THEME_sGATrackingId'                 => 'Např.: UA-XXXXXXXX-1',
    'SHOP_THEME_blGAAnonymizeIPs'                   => 'Anonymizovat IP-adresu',

    'SHOP_THEME_sLogoFile'                          => 'Název souboru loga v hlavičce',
    'HELP_SHOP_THEME_sLogoFile'                     => 'Relativně k cestě <code>/out/flow/img/</code>.',

    'SHOP_THEME_sLogoWidth'                         => 'Šířka loga v hlavičce',
    'HELP_SHOP_THEME_sLogoWidth'                    => 'Údaje v pixelech.',
    'SHOP_THEME_sLogoHeight'                        => 'Výška header-loga',
    'HELP_SHOP_THEME_sLogoHeight'                   => 'Údaje v pixelech',

    'SHOP_THEME_sEmailLogo'                         => 'Název souboru loga v hlavičce e-mailu',
    'HELP_SHOP_THEME_sEmailLogo'                    => 'Relativně k cestě <code>/out/flow/img/</code>.',

    'SHOP_THEME_sFaviconFile'                       => 'Název souboru faviconu.',
    'HELP_SHOP_THEME_sFaviconFile'                  => 'Tento ikonka oblíbený je určena k zobrazení v záložce prohlížeče. <br> Obecně platí, že se jedná o [.ico] soubor. <br> To je relativní k cestě <code>/out/flow/img/favicons/</code>.',
    'SHOP_THEME_sFavicon16File'                     => 'Název souboru favicon rozměrů 16*16px.',
    'SHOP_THEME_sFavicon32File'                     => 'Název souboru faviconu rozměrů 32*32px.',
    'SHOP_THEME_sFavicon48File'                     => 'Název souboru faviconu rozměrů 48*48px.',
    'SHOP_THEME_sFavicon64File'                     => 'Název souboru faviconu rozněrů 64*64px.',
    'SHOP_THEME_sFavicon128File'                    => 'Název souboru faviconu rozměrů 182*128px.',
    'SHOP_THEME_sFavicon512File'                    => 'Název souboru faviconu rozměrů 512*512px.',
    'SHOP_THEME_sFaviconMSTileColor'                => 'Barva dlaždic pro Windows 8/Windows mobile mezer.',
    'HELP_SHOP_THEME_sFaviconMSTileColor'           => 'Zadání v HEX-hodnotě.<br>Např.: #D83434',

    'SHOP_THEME_blUseBackground'                    => 'Zobrazit obrázek pozadí',
    'SHOP_THEME_sBackgroundColor'                   => 'Barva pozadí obchodu',
    'HELP_SHOP_THEME_sBackgroundColor'              => 'Zadání jako HEX-hodnota.<br>Např.: #D83434',
    'SHOP_THEME_sBackgroundPath'                    => 'Název souboru pro obrázek pozadí',
    'HELP_SHOP_THEME_sBackgroundPath'               => 'Relativně k cestě <code>/out/flow/img/backgrounds/</code>.',
    'SHOP_THEME_sBackgroundRepeat'                  => 'Má se obrázek pozadí opakovat?',
    'SHOP_THEME_sBackgroundRepeat_no-repeat'        => 'Ne',
    'SHOP_THEME_sBackgroundRepeat_repeat-x'         => 'Ano, horizontálně',
    'SHOP_THEME_sBackgroundRepeat_repeat-y'         => 'Ano, vertikálně',
    'SHOP_THEME_sBackgroundRepeat_repeat'           => 'Ano, horizontálně i vertikálně',
    'SHOP_THEME_sBackgroundPosHorizontal'           => 'Horizontální pozice obrázku pozadí',
    'SHOP_THEME_sBackgroundPosHorizontal_left'      => 'vlevo',
    'SHOP_THEME_sBackgroundPosHorizontal_right'     => 'vpravo',
    'SHOP_THEME_sBackgroundPosHorizontal_center'    => 'uprostřed',
    'SHOP_THEME_sBackgroundPosVertical'             => 'Vertikální pozice obrázku pozadí',
    'SHOP_THEME_sBackgroundPosVertical_top'         => 'nahoře',
    'SHOP_THEME_sBackgroundPosVertical_bottom'      => 'dole',
    'SHOP_THEME_sBackgroundPosVertical_center'      => 'centrovaně',
    'SHOP_THEME_sBackgroundSize'                    => 'Velikost obrázku pozadí',
    'SHOP_THEME_sBackgroundSize_cover'              => 'pokrývající (plná výška)',
    'SHOP_THEME_sBackgroundSize_contain'            => 'pokrytí (plná šířka)',
    'SHOP_THEME_sBackgroundSize_normal'             => 'Zachovat původní velikost',
    'SHOP_THEME_blBackgroundAttachment'             => 'Má obrázek v pozadí při scrolování zůstat stát?',
    'SHOP_THEME_blHomeLink'                         => '',
    'SHOP_THEME_bl_showPriceAlarm'                  => '',

    'SHOP_THEME_blUseGoogleTS'                      => 'Použít Google Trusted Stores',
    'SHOP_THEME_sGoogleVendorId'                    => 'Google Store-ID (povinné)',
    'HELP_SHOP_THEME_sGoogleVendorId'               => 'Toto ID naleznete ve Vašem Trusted Stores Merchant Dashboard.',
    'SHOP_THEME_sGoogleShoppingAccountId'           => 'Google Shopping Account-ID (volitelné)',
    'HELP_SHOP_THEME_sGoogleShoppingAccountId'      => 'Poskytnout toto pole pouze tehdy, pokud předloží feed pro Nákupy Google. <br> <br> ID účtu ze služby Google Merchant Center. Tato hodnota by měla odpovídat ID účtu, který používáte, aby jste předložily své <a href="https://support.google.com/merchants/answer/188494#US" target="_blank">feed produktů na Nákupy Google</a> prostřednictvím služby Google Merchant Center. Pokud máte účet MCA, použijte ID podúčtu spojeného s tímto feeem produktů.',
    'SHOP_THEME_sPageLanguage'                      => 'Jazyk Vašeho obchodu v ISO (povinné)',
    'HELP_SHOP_THEME_sPageLanguage'                 => 'Národní prostředí by mělo být ve formátu <language> _ <country> <br> <Language> je dvoupísmenný kód jazyka podle ISO 639-1 a <country> je definován kód země dvoupísmenný ISO 3166-1 alpha-2. Obvykle <country> by mělo být vše velkými písmeny. a <language> by měla být malými písmeny. např. cs_CZ, en_US, en_GB, en_AU, fr_FR, de_DE nebo ja_JP.',
    'SHOP_THEME_sShoppingCountry'                   => 'Google Shopping-Feed stát (volitelné)',
    'HELP_SHOP_THEME_sShoppingCountry'              => 'Zadejte teno údaj v případě zasílání feedu na Google.<br><br>Slouží k zadání státu, kterému je přiřazeno konto v Google Shopping. Tato hodnota by měla odpovídat státu tohoto konta, které používáte pro zaslání href="https://support.google.com/merchants/answer/188494#US" target="_blank"> produktového feedu na Google Shopping</a>.<br><br>Hodnota tohoto parametru státu musí odpovídat <a href="http://de.wikipedia.org/wiki/ISO_3166-1_alpha-2" target="_blank">z dvou písmen složeného ISO 3166-kódu státu</a>.<br><br>Příklady: US, GB, AU, FR, DE, JP.',
    'SHOP_THEME_sShoppingLanguage'                  => 'Google Shopping-Feed jazyk (volitelné)',
    'HELP_SHOP_THEME_sShoppingLanguage'             => 'Zadejte tento údaj jen když zasíláte feed na Google Shopping.<br><br>Toto je jazyk konta v Google Shopping. Tato hodnota by se měla shodovat s jazykem konta, který používátepro zasílání <a href="https://support.google.com/merchants/answer/188494#US" target="_blank">datového feedu produktu na Google Shopping</a>.<br><br>Hodnota tohoto parametru jazyka musí sestávat z <a href="http://de.wikipedia.org/wiki/ISO_639#ISO_639-1" target="_blank">dvou písmen ISO 639-1-kódu jazyka</a>.<br><br>Příklady: en, fr, de, ja.',
    'SHOP_THEME_sShippingDaysOnStock'               => 'Počet dní do odeslání objednávky s produkty, které jsou všechny skladem. (povinné)',
    'HELP_SHOP_THEME_sShippingDaysOnStock'          => 'Zde se jedná o přibližné datum odeslání objednávky; nejedná se o předpokládané datum dodání.<br><br>Pokud objednávka obsahuje více produktů, zvolte to nejzazší předpokládané datum odeslání.<br><br>Pokud udáváte zákazníkovi časový interval, zadejte poslední den tohoto úseku.Pokud např. zasíláte v rozmezí od 5 do 7 dnů, zadejte 7 dnů.<br><br>Tento zde zadaný termín bude zákazníkovi oznámen e-mailem.<br><br>Po předpokládaném datu odeslání bude zákazníkovi odeslán dotazník ohledně nákupu.',
    'SHOP_THEME_sShippingDaysNotOnStock'            => 'Počet dní do odeslání objednávky, v případě že aspoň 1 produkt není skladem.(povinné)',
    'HELP_SHOP_THEME_sShippingDaysNotOnStock'       => 'Předpokládaný termín, na kterém bude odeslána objednávka; To se liší od předpokládané datum dodání. <br> V případě, že objednávka bude obsahovat více položek. vyberte poslední přibližné datum odeslání. <br> Pokud je hlášení svým zákazníkům v rozsahu dní. uveďte konec rozsahu. (Například 7 dní, pokud váš rozsah pro přepravu je 5-7 dny). <br> Datum Zde uvedené budou poskytovány zákazníkovi prostřednictvím e-mailu. <br> Zákazník dostane přehled potvrzení, že lhůta koupě po přibližné datum odeslání vypršela.',
    'SHOP_THEME_sDeliveryDaysOnStock'               => 'Počet dní do odeslání objednávky produktů, které jsou všechny skladem (nutné)',
    'HELP_SHOP_THEME_sDeliveryDaysOnStock'          => 'Odhadované datum, kdy můžete očekávat doručení objednávky k zákazníkovi. V případě, že objednávka bude obsahovat více položek. vyberte poslední termín dodání. Máte-li hlášení rozsahu dní, uveďte pozdější konec rozsahu. (Například 7 dní, pokud váš rozsah je 5-7 dnů).',
    'SHOP_THEME_sDeliveryDaysNotOnStock'            => 'Počet dní do odeslání objednávky, u které alespoň 1 produkt není skladem. (povinné)',
    'HELP_SHOP_THEME_sDeliveryDaysNotOnStock'       => 'Odhadované datum, kdy můžete očekávat doručení objednávky k zákazníkovi. V případě, že objednávka bude obsahovat více položek. vyberte poslední termín dodání. Máte-li hlášení rozsahu dní, uveďte pozdější konec rozsahu. (Například 7 dní, pokud váš rozsah je 5-7 dnů).',

    'SHOP_THEME_blSliderShowImageCaption'           => 'Aktivovat podpisové obrazy ve slideru na úvodní stránce.',
    'HELP_SHOP_THEME_blSliderShowImageCaption'      => 'Je viditelné v případě přiřazení produktu aktivnímu slidu.',

    'SHOP_THEME_blEcondaRecommendationsStart'       => 'Zobrazit doporučení na úvodní stránce',
    'SHOP_THEME_sEcondaWidgetIdStart'               => 'ID widgetu s doporučeními pro úvodní stránku',
    'SHOP_THEME_blEcondaRecommendationsList'        => 'Zobrazit doporučení ve tvaru seznamu',
    'SHOP_THEME_sEcondaWidgetIdList'                => 'ID widgetu s doporučeními pro zobrazení seznamu',
    'SHOP_THEME_blEcondaRecommendationsDetails'     => 'Zobrazit doporučení na detailní stránce',
    'SHOP_THEME_sEcondaWidgetIdDetails'             => 'ID widgetu s doporučeními pro stránku s detaily',
    'SHOP_THEME_blEcondaRecommendationsBasket'      => 'Zobrazit doporučení v nákupním koši',
    'SHOP_THEME_sEcondaWidgetIdBasket'              => 'ID widget s doporučeními pro nákupní koš',

    'SHOP_THEME_blFullwidthLayout'                      => 'Aktivovat full-width layout',

    'SHOP_THEME_blEmailsShowProductPictures'        => 'Zobrazit obrázky produktu v e-mailech',
);
