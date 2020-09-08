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

'HELP_SHOP_SYSTEM_DISABLENAVBARS'             => 'Ha ezt a beállítást aktíválja, a navigációs elemek nagy része nem lesz látható a megrendelés folyamata során. Ezáltal a felhasználók figyelme nem lesz szükségtelenül elterelve.',

'HELP_SHOP_SYSTEM_DEFAULTIMAGEQUALITY'        => '' .
                                                 ''.
                                                 ''.
                                                 '',

'HELP_SHOP_SYSTEM_LDAP'                       => 'Kérem, állítsa be a core/oxldap.php fájlt megfelelően..',

'HELP_SHOP_SYSTEM_SHOWVARIANTREVIEWS'         => 'Ez a beállítás meghatározza a program működését, ha a variánsok is értékelhetők: Ha ez a beállítás aktív, akkor a variánsok értékelése is látható a főtermék mellett.',

'HELP_SHOP_SYSTEM_VARIANTSSELECTION'          => 'A programban vannak olyan listák, amelyekhez terméket lehet rendelni, pl.: a terméket a leértekelendő árukhoz rendeljük. Ha ez a beállítás aktív, akkor ezek a listák a variánsoknál is megjelennek.',

'HELP_SHOP_SYSTEM_VARIANTPARENTBUYABLE'       => '' .
                                                 '' .
                                                 '',

'HELP_SHOP_SYSTEM_VARIANTINHERITAMOUNTPRICE'  => 'Ez a beállítás meghatározza a program működését, ha a törzstermékeknél aktíváltuk a lépcsős árakat: Ha ez a beállítás aktív, akkor a lépcsős árak érvényesek a variánsokra is.',

'HELP_SHOP_SYSTEM_ISERVERTIMESHIFT'           => 'Előfrdulhat, hogy az Ön szervere egy másik időzónában található. Ezzel a beállítással korrgálhatjuk az időeltolódást: Adja meg az órák számát, amelyet az Ön szerver idejéhez hozzáadni, vagy levonni kell. Pl.: <kdb>+2</kdb> vagy <kdb>-2</kdb>',

'HELP_SHOP_SYSTEM_INLINEIMGEMAIL'             => 'Ha ez a beállítás aktív, akkor a képek, amelyeket az e-mail-ben használunk, az e-mail-lel együtt lesznek elküldve. Ha ez a beállítás nem aktív, akkor a képek akkor kerülnek letöltésre, a felhasználó az e-mail-jét kinyitja.',

'HELP_SHOP_SYSTEM_UTILMODULE'                 => 'Kérem, adja meg a php-fájl nevét, amely az eshop funkcióit a következő startnál felülírja.',


'HELP_SHOP_CACHE_ENABLED'                     => 'Ha a Dynamic content puffer aktív, akkor a további tartalmak is a pufferolva lesznek, amely a shop működését meggyorsítja. Deaktiválja ezt a beállítást, addig amíg az áruház a beállítások fázisában található.',

'HELP_SHOP_CACHE_LIFETIME'                    => 'Itt állíthatja be, hogy a tartalmak hány másodpercig tartózkodjanak a pufferben. Az alapértelmezett érték: 36000 mp.',

'HELP_SHOP_CACHE_CLASSES'                     => 'Itt állíthatja be, melyik View-Osztályok legyenek pufferolva.<br /> Csak akkor változtasson az értéken, ha a puffer mechanizmusával tisztában van!',

'HELP_SHOP_CACHE_REVERSE_PROXY_ENABLED'       => 'Aktiválja a HTTP Reverse Proxy pufferolását. Információ: Ne használja a "Dynamic Content Caching"-gel együtt, mert az csökkentené a shop sebességét.',

'HELP_SHOP_CACHE_LAYOUT_CACHE_AGE'            => 'Az oldalszerkezet a pufferben történő megtartásának az időtartama másodpercben. Ez "Age" Header-értékként jelenik meg a HTTP-Header-ben.',

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

'HELP_SHOP_CONFIG_NEWARTBYINSERT'             => 'A Shop kezdőlapján a<span class="filename_filepath_or_italic"> Most érkezett!</span> alatt jelennek meg a legújabb termékek. Itt állíthatja be, hogy ezek a termékek automatikusan, vagy kézi beállítással generálódjanak. Itt állíthatja be továbbá, hogy a termék felvétele szerinti dátum, vagy pedig az utolsó változtatás dátuma az adminisztrációs felületen lesz a mérvadó.',

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

'HELP_SHOP_CONFIG_DELETERATINGLOGS'           => 'Itt határozhatja meg, hogy egy termékre leadott értékelés hány napig lesz a shopban látható.',

'HELP_SHOP_CONFIG_DISABLEONLINEVATIDCHECK'    => ''.
                                                 '',

'HELP_SHOP_CONFIG_ALTVATIDCHECKINTERFACEWSDL' => 'Itt állíthat be az adószámellenőrzéshez egy alternatiív URL-t, ha az ellenőrzés nem működik a rendes URL-en, a program megkísérli az ellenőrzést az alternatív URL-en keresztül lebonyolítani.',

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

'HELP_SHOP_CONFIG_BASKETRESERVATIONTIMEOUT'   => 'Ha a beállított másodpercek eltelte után a kosár tartalma nem változik, akkor a a kosár tartalma automatikusan kiürül,és az abban lévő termékek visszaíródnak a raktárkészlethez.',

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

'HELP_SHOP_CONFIG_SHOWTSINTERNATIONALFEESMESSAGE' => 'A megrendelés folyamatának 4. lépésénél kiegészítőleg megjelenik a CMS-oldal "oxtsinternationalfees".',

'HELP_SHOP_CONFIG_SHOWTSCODMESSAGE'           => 'A megrendelés folyamatának 4. lépésénél kiegészítőleg megjelenik a CMS-oldal "oxtscodmessage".',

'HELP_SHOP_CONFIG_DOWNLOADS'                  => 'Ha ön letölthető termékeket is értékesít, aktíválja ezt az beállítást.',

'HELP_SHOP_CONFIG_DOWNLOADS_PATH'             => 'A letölthető termékek fáljainak az elérési útja.',

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

'HELP_SHOP_MALL_PRICEADDITION'                => 'Önnek lehetősége van arra, hogy az összes termékhez felárat határozzon meg: Adja meg a megfelelő felárat és adja meg a választási listát ahhoz, hogy %-os vagy abszolút (<span class="userinput_or_code">%</span>)(<span class="userinput_or_code">abs</span>) érték legyen kiszámítva.',



'HELP_SHOP_PERF_NEWESTARTICLES'               => '' .
                                                 '' .
                                                 '' .
                                                 '',

'HELP_SHOP_PERF_TOPSELLER'                    => '' .
                                                 '' .
                                                 '' .
                                                 '',

'HELP_SHOP_PERF_LOADFULLTREE'                 => 'Ha ez a beállítás aktív, akkor a kategória navigációnál a teljes kategóriafa jelenik meg (Mineden kategória és alkategória kibontva \'látható\'). Ez a beállítás csak akkor működik, ha kategórianavigáció<span class="warning_or_important_hint">nem</span> fent jelenik meg.',

'HELP_SHOP_PERF_LOADACTION'                   => 'Ha ez a beállítás aktív, akkor az összes akció, mint <span class="filename_filepath_or_italic">A legnépszerűbb termékek</span>, <span class="filename_filepath_or_italic">Top of the Shop</span>, <span class="filename_filepath_or_italic">Most érkezett!</span> megjelennek.',

'HELP_SHOP_PERF_USESELECTLISTPRICE'           => 'A Termékek kezelése/Variánsok-nál állíthatja be a termékekre vonatkozó felár/ármésékléseket. Ha ez a beállítás aktív, akkor a felár/árengedmények ki lesznek számítva, különben nem.',

'HELP_SHOP_PERF_DISBASKETSAVING'              => 'A bejelentkezett ügyfelek kosarának tartalma mentésre kerül. Ha a már regisztrált vásárló újra bejelentkezik az áruházba, akkor a mentett kosár tartalma automatikusan láthatóvá lesz számára. Ha ez a beállítás nincs aktíválva, akkor a kosártartalom nem kerül mentésre.',

'HELP_SHOP_PERF_LOADDELIVERY'                 => 'Ha ezt a beállítást kikapcsolja, akkor a program nem számít fel szállítási költségeket: s eszerint 0,00 Ft jelenik meg szállítási költségként.',

'HELP_SHOP_PERF_LOADPRICE'                    => 'Ha ezt a beállítást kikapcsolja, akkor a program nem számítja ki a termékek árait, és az árak nem lesznek a vásárlói oldalon feltüntetve.',

'HELP_SHOP_PERF_PARSELONGDESCINSMARTY'        => 'Ha ez a beállítás aktív, akkor a termékleírások és a kategóriák a Smarty-támogatással jelennek meg: így beágyazhatja a Smarty-Tag-eket a leírásokban(pl.: változók megjelenítése). <br />Ha ez a beállítás nem aktív, akkor a termékleírások szövege úgy jelennek meg, ahogy Ön a leírásokat a szövegszerkesztőben  leírta.',

'HELP_SHOP_PERF_LOADSELECTLISTSINALIST'       => 'Normális esetben a kiválasztási listák csak a termékek részleteinél jelennek meg. Ha ez a beállítás aktív, akkor az attribútumok minden esetben megjelennek a termékeknél(pl.: a keresési eredményeknél, vagy a termékek listájánál).',

'HELP_SHOP_PERF_CHECKIFTPLCOMPILE'            => 'Ha ezt a beállítás aktív, akkor a program minden esetben ellenőrzi, hogy a megjelenítendő sablon megváltozott-e, és a megjelenítési opciókat újra és újra kiszámolja, ha az eredeti sablon változtatáson esett át. Ha Ön a sablont testre kívánja szabni, aktíválja ezt a beállítást. Ha azonban az áruház már produktív módban fut, célszerű ezt a beállítást kikapcsolni. <br />További információkat a következő oldalon talál: <a href="http://www.oxid-esales.com/de/resources/help-faq/eshop-manual/hinweise-zum-templates-anpassen" target="_blank">Caching-Beitrag im Handbuch</a>.',

'HELP_SHOP_PERF_CLEARCACHEONLOGOUT'           => 'Rendes esetben a puffertároló időről-időre ürítésre kerül, amíg ön a shop adminisztrációban változásokat eszközöl. Ez lelassíthatja a rendszer működését az áruház adminisztrációs felületén. Ha azonban ezt a beállítás aktív, akkor a puffertároló tartalma csak akkor törlődik, ha ön az adminisztrációból kijelentkezik.',





'HELP_SHOP_SEO_TITLEPREFIX'                   => '' .
                                                 '',

'HELP_SHOP_SEO_TITLESUFFIX'                   => '' .
                                                 '',

'HELP_SHOP_SEO_IDSSEPARATOR'                  => '' .
                                                 '',

'HELP_SHOP_SEO_SAFESEOPREF'                   => 'Ha több teméknek azonos neve van egy kategóriában, akkor ezek a termékek azonos SEO URL-alatt lennének elérhetők. Ezt elkerülendő, egy ún. SEO utótagot határozhatunk meg, amely a termék neve mögött szerepel. Így elkerülhetjük az azonos SEO URL-ket. Ha nem ad meg SEO utótagot, akkor <span class="filename_filepath_or_italic">oxid</span> szó jelenik meg alapértelmezett SEO utótagként.',

'HELP_SHOP_SEO_RESERVEDWORDS'                 => 'Bizonyos URL-ek már meg vannak határozva az áruházban, pl.: www.onlineshop.com/admin, az adminisztrátor felület megynyitásához. Ha egy kategória megnevezése <span class="filename_filepath_or_italic">admin</span> lenne, akkor a SEO URL ehhez a kategóriához szintén www.onlineshop.com/admin lenne, és nem lehetne megnyitni. Emiatt kell ezekhez a SEO URL-ekhez automatikusan SEO utótagot hozzáfűzni. Az itt látható mezőben állítható be, hogy melyik SEO URL-hez legyen a SEO utótag automatikusan hozzáfűzve.',

'HELP_SHOP_SEO_SKIPTAGS'                      => 'Ha a termékeknél és kategóriáknál nem írunk be META-kulcsszavakat, akkor ezek az információk a leírásokból generálódnak automatikusan. Bizonyos (gyakran előforduló) szavakat kihagyhatunk ezekből. Azok a kifejezések, amelyeket ebbe a beviteli mezőbe beírunk, az automatikus META-generálás számára figyelmen kívül maradnak.',
'HELP_SHOP_SEO_LOWERCASEURLS'                 => '',

'HELP_SHOP_SEO_STATICURLS'                    => 'Bizonyos oldalak számára (pl.: ÁSZF) állandó keresőbarát URL-t határozhatunk meg. Ha Ön kiválaszt egy statikus URL-t akkor a mezőben a <span class="navipath_or_inputname">Standard URL</span> az alapértelmezett URL jelenik meg. Az alábbi beviteli mezőkben minden használatban lévő nyelvre vonatkozóan meghatározhat egy keresőbarát URL-t.',



'HELP_SHOP_MAIN_PRODUCTIVE'                   => '' .
                                                 '' .
                                                 '',

'HELP_SHOP_MAIN_ACTIVE'                       => 'Ezzel a beállítással: <span class="navipath_or_inputname">Aktiv</span> lehetséges az áruház ki- és bekapcsolása. Ha az áruház offline van, az ügyfelei jelzést kapnak arról, hogy az online áruház ideiglenesen nem elérhető. Ez hasznos lehet a program karbantartása esetén.',

'HELP_SHOP_MAIN_INFOEMAIL'                    => 'Erre a címre mennek azok az E-Mail-ek, amelyek a Kapcsolat űrlapon keresztül érkeznek a felhasználóktól.',

'HELP_SHOP_MAIN_ORDEREMAIL'                   => 'Ha egy ügyfél megrendel valamit, kap egy E-Mail-t, amely a megrendelés részleteit tartalmazza. Az ügyfél esetleges válasza erre az e-mail címre érkezik.<span class="navipath_or_inputname">Megrendelés E-Mail válasz</span>.',

'HELP_SHOP_MAIN_OWNEREMAIL'                   => 'Ha egy ügyfél megrendel valamit, a shop adminisztrátora kap egy e-mailt, hogy a Shopba megrendelés érkezett. Ezek az értesítők erre a címre érkeznek.<span class="navipath_or_inputname">Megrendelés admin cím</span>.',

'HELP_SHOP_MAIN_SMTPSERVER'                   => 'Az SMTP-beállítást kell beírni ahhoz, hogy a webshopból E-Mail-t lehessen küldeni. További információkat a következő oldalon találhat <a href="http://www.oxid-esales.com/de/resources/help-faq/eshop-manual/smtp-daten-eingeben" target="_blank">eShop Handbuch</a>.',

'HELP_ARTICLE_MAIN_ALDPRICE'                  => '<span class="navipath_or_inputname">Alternatív árak</span> Itt adhatja meg az adott termékre vonatkozó speciális árakat, amelyek meghatározott felhasználó csoportokra vonatkoznak. További információkat az alábbi oldalon találhat <a href="http://www.oxid-esales.com/de/resources/help-faq/eshop-manual/fuer-bestimmte-benutzer-besondere-preise-einrichten" target="_blank">eShop Handbuch</a>.',

'HELP_ARTICLE_MAIN_VAT'                       => 'Itt adhatja meg az adott termékre vonatkozó speciális ÁFÁ-t.(pl.: 10% élelmiszer).',

'HELP_ARTICLE_EXTEND_UNITQUANTITY'            => '<span class="navipath_or_inputname">Mennyiség</span> és <span class="navipath_or_inputname">mennyiségi egység</span> a mennyiségi egységre vonatkozó alapár meghatározása. (Pl.: 100 Ft 1 liter): Adja meg <span class="navipath_or_inputname">Mennyiség</span> a termék mennyisége (pl.: 2) és <span class="navipath_or_inputname">Mennyiségi egység</span> a megfelelő mennyiségi egységet(Pl.: Liter, vagy tucat stb.) Akkor a mennyiségre vonatkozó alapár jelenik meg az adott termék mellett.',

'HELP_ARTICLE_EXTEND_EXTURL'                  => 'A <span class="navipath_or_inputname">Külső URL</span>-nél megadhat egy Linket, ahol a termékhez kapcsolódó információk találhatók (pl.: a gyártó weboldala). A <span class="navipath_or_inputname"> név a külső URL-hez</span>-nél adhatja meg a link megnevezését (Pl: <span class="userinput_or_code">további információk a gyártótól:</span>).',

'HELP_ARTICLE_EXTEND_TPRICE'                  => 'A <span class="navipath_or_inputname">UVP</span>-nél megadhatja a gyártó kötelezettség nélküli árajánlatát. Ha ön az UVP-t (kötelezettség nélküli ár) megadja,  akkor ez az ár áthúzva jelenik meg a vásárlói oldalon.',

'HELP_ARTICLE_EXTEND_QUESTIONEMAIL'           => '<span class="navipath_or_inputname">Tárgyalópartner</span> Itt adhatja meg a tárgyalópartner E-Mail címét. Ha a felhasználónak kérdése lenne a terméket illetően, a kérdés az itt megadott e-mail címre érkezik. Ha nincs megadva e-mail cím, akkor ezek a kérdések a shop alapértelmezett info E-Mail címére érkeznek.',

'HELP_ARTICLE_EXTEND_NONMATERIAL'             => 'Szellemi, letölthető termék, szállítási költségmentes.',

'HELP_ARTICLE_EXTEND_FREESHIPPING'            => 'A beállítás öröklődik az alaptermékről a variánsokra, és a teljes termékre vonatkozik.',

'HELP_ARTICLE_EXTEND_BLFIXEDPRICE'            => 'Az árriasztás kikapcsolható erre a termékre.',

'HELP_ARTICLE_EXTEND_SKIPDISCOUNTS'           => 'Ha <span class="navipath_or_inputname">Összes neg. kedvezmény ignorálása</span> aktív, akkor a negatív kedvezmények nem lesznek beszámítva. Ilyenek pl.: rabatt, ajándékutalványok stb.',

'HELP_ARTICLE_EXTEND_TEMPLATE'                => 'Az adott termék részleteinek megjelenítéséhez megadhat egy másik sablont. Ehhez írja be a megjelenítendő sablon nevét, és annak elérési útját.',

'HELP_ARTICLE_EXTEND_ISCONFIGURABLE'          => ''.
                                                 '',

'HELP_ARTICLE_EXTEND_UPDATEPRICE'             => 'Az árak megváltoztathatók egy meghatározott időpontban. Az itt megadott árak aktualizálják az alapértelmezett árat. Ha az érték "0", akkor az alapár nem változik.',

'HELP_ARTICLE_EXTEND_SHOWCUSTOMAGREEMENT'     => 'Amennyiben ez a beállítás aktív, akkor a felhasználónak el kell fogadnia az ÁSZF-t a megrendelés folyamatának 4. lépésében. Kérem, győződjön meg arrol, hogy az alapbeállításoknál is aktív, figyelembe véve a szellemi, valamint letölthető termékeket.',

'HELP_ARTICLE_FILES_MAX_DOWNLOADS_COUNT'      => 'Itt adhatja meg azt, hogy egy vásárló hányszor használhatja fel a letöltési linket a megrendelése után. Ezzel felülírhatja az alapértemezett beállítást: Törzsadatok  -> Alapbeállítások -> Beállítások. -> A letöltések maximális száma',

'HELP_ARTICLE_FILES_LINK_EXPIRATION_TIME_UNREGISTERED' => 'Itt adhatja meg azt, hogy egy nem regisztrált vásárló  hányszor használhatja fel a letöltési linket a megrendelése után. Ezzel felülírhatja az alapértelmezett beállítást: Törzsadatok  -> Alapbeállítások -> Beállítások. -> A letöltések maximális száma a nem regisztrált felhasználóknak.',

'HELP_ARTICLE_FILES_LINK_EXPIRATION_TIME'     => 'Adja meg a letöltési link érvényességi idejét órákban, amely a megrendelés után érvényes. Ezzel felülírhatja az alapértemezett beállítást: Törzsadatok  -> Alapbeállítások -> Beállítások. -> A letöltési link érvényességi ideje.',

'HELP_ARTICLE_FILES_NEW'                      => 'Adja meg az FTP-vel feltöltendő fájl nevét, vagy töltsön fel egy új fájlt. A nagyméretű fájlokat mindig célszerű FTP-kacsolattal feltölteni. A fájl maximális mérete csak a shop adminisztrációs felületére vonatkozik, amely érték a szerver PHP-beállításától függ. Ez csak a shop szerverén állítható be.',

'HELP_ARTICLE_FILES_DOWNLOAD_EXPIRATION_TIME' => 'Adja meg a letöltési link érvényességi idejét órákban, amely az első letöltés után érvényes. Ezzel felülírhatja az alapértemezett beállítást, amelyet a Törzsadatok  -> Alapbeállítások -> Beállítások. -> A letöltési link érvényességi ideje az első letöltés után - határozott meg.',

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

'HELP_ARTICLE_STOCK_REMINDACTIV'              => 'A beállítás öröklődik az alapterméktől, és a teljes termékre érvényes.',

'HELP_ARTICLE_STOCK_STOCKFLAG'                => '' .
                                                 '' .
                                                 '' .
                                                 '' .
                                                 '',

'HELP_ARTICLE_IS_DOWNLOADABLE'                => 'A termék fájljai letölthetők.',

'HELP_ARTICLE_STOCK_REMINDAMAOUNT'            => 'Itt állíthatja be azt, hogy a rendszer e-mailt küldjön Önnek, amennyiben a termék mennyisége egy bizonyos szám alá csökken. Aktíválja a mezőt, és adja meg azt a mennyiséget amennyitől az e-mail elküldésre kerül.',

'HELP_ARTICLE_STOCK_DELIVERY'                 => 'Itt adhatja meg, hogy mekkora mennyiségtől szállítható a termék, amennyiben már ki lett árusítva. A dátum formája ÉÉÉÉ-hh-nn, pl.: 2008-10-21.',

'HELP_ARTICLE_SEO_FIXED'                      => 'Kívánságra a program kiszámítja a SEO URL-t. Egy termék mindig új SEO URL-t kap, ha a termék megnevezése megváltozik.A beállítás <span class="navipath_or_inputname">URL állandó</span> megakadályozza ezt. Ha a beállítás aktív, akkor megmarad a régi SEO URL és nem lesz az új meghatározás szerint kiszámítva.',

'HELP_ARTICLE_SEO_KEYWORDS'                   => 'Ezek a kulcsszavak lesznek a HTML-forráskódjába (Meta Keywords) beágyazva. Ezeket az információkat értékelik ki a keresőmotorok. Itt adhatja meg az adott termékhez a megfelelő kulcsszavakat. Amennyiben semmit nem ad meg, a rendszer automatikusan generálja ezeket a termék megnevezéséből.',

'HELP_ARTICLE_SEO_DESCRIPTION'                => 'Ez a szöveg lesz a HTML-forráskódba beágyazva (Meta Description), és a keresőmotorok ezt jelenítik meg a termék leírásaként. Itt adhat meg egy rövid leírást az adott termékről. Amennyiben semmit nem ad meg, akkor a rendszer automatikusan generál egy leírást a termékleírásból. (A termékleírás első néhány szava lesz figyelembevéve)',

'HELP_ARTICLE_SEO_ACTCAT'                     => 'Egy termékhez különböző SEO URL-ek határozhatók meg: egyet a megfelelő kategóriához, és egyet a termék gyártójához.  Az <span class="navipath_or_inputname">Aktív kategória/Gyártó</span> menüpontnál választhatja ki, hogy melyik SEO URL-t szeretné beállítani.',

'HELP_ARTICLE_STOCK_STOCKTEXT'                => 'Itt adhatja meg a jelzés szövegét, amely az adott terméknél megjelenik, amennyiben a termék még raktáron van. További információkat a <a href="http://www.oxid-esales.com/de/resources/help-faq/eshop-manual/meldungen-zu-den-lagerbestaenden-einrichten" target="_blank">eShop Handbuch</a>.',

'HELP_ARTICLE_STOCK_NOSTOCKTEXT'              => 'Itt adhatja meg a jelzés szövegét, amely az adott terméknél megjelenik, amennyiben a termék már nem szerepel a készleten. További információkat a <a href="http://www.oxid-esales.com/de/resources/help-faq/eshop-manual/meldungen-zu-den-lagerbestaenden-einrichten" target="_blank">eShop Handbuch</a>.',

'HELP_ARTICLE_STOCK_AMOUNTPRICE_AMOUNTFROM'   => 'A <span class="navipath_or_inputname">Mennyiségtől/-ig</span> állíthatja be, hogy a lépcsős árak milyen mennyiségi tartományra érvényesek.',

'HELP_ARTICLE_STOCK_AMOUNTPRICE_PRICE'        => '' .
                                                 '',

'HELP_ARTICLE_VARIANT_VARNAME'                => 'A <span class="navipath_or_inputname">variáns neve</span>-nél beállíthatja, hogy mi legyen a kiválasztott variáns neve. Pl.: <span class="userinput_or_code">Szín</span>, vagy <span class="userinput_or_code">Méret</span>.',

'HELP_ATTRIBUTE_MAIN_DISPLAYINBASKET'         => 'Amennyiben kiválasztja, akkor az attribút értéke megjelenik a kosárban és a megrendelések áttekintése nézetben a terméknév alatt.',

'HELP_CATEGORY_MAIN_HIDDEN'                   => 'A <span class="navipath_or_inputname">rejtett</span> négyzet bekattintásával a felhasználók számára rejtve marad az adott kategória akkor is, ha a kategória aktív.',

'HELP_CATEGORY_MAIN_PARENTID'                 => '' .
                                                 '' .
                                                 '',

'HELP_CATEGORY_MAIN_EXTLINK'                  => 'A <span class="navipath_or_inputname">Külső Link</span> mezőben megadhat egy linket, amely az adott kategóriára kattintva megnyílik. <span class="warning_or_important_hint">Figyelem! A kategória elveszti ezáltal a normális fukcióját!</span>',

'HELP_CATEGORY_MAIN_PRICEFROMTILL'            => 'Az <span class="navipath_or_inputname">Ár -tól/-ig</span> állíthaja be azt, hogy <span class="warning_or_important_hint">csak azok a termékek</span> jelennek meg a kategóriában, melynek árai az itt megadott határértékeknek megfelelnek.',

'HELP_CATEGORY_MAIN_DEFSORT'                  => 'A <span class="navipath_or_inputname">Gyorsrendezés</span>-sel állíthatja be az adott kategóriában lévő termékek sorrendjét. Az <span class="navipath_or_inputname">asc</span> és <span class="navipath_or_inputname">desc</span> állítja be a növekvő és csökkenő sorrendet.',

'HELP_CATEGORY_MAIN_SORT'                     => 'A <span class="navipath_or_inputname">Rendezés</span>-sel állíthatja be a kategóriák sorrendjét. Az alacsonyabb számot hordó kategóriák fent, míg a nagyobb számmal rendelkező kategóriák lent jelennek meg.',

'HELP_CATEGORY_MAIN_THUMB'                    => 'A <span class="navipath_or_inputname">Kép</span>-nél és a <span class="navipath_or_inputname">Kép feltöltése</span> feltöltheti az adott kategória képet, amely a kategórianézetben látható.<br />Válassza ki a <span class="navipath_or_inputname">Kép feltöltése</span> gombra kattintva a megfelelő képet. A megnyitás-ra kattintással, és ezzel a kép feltöltése után az üres mezőben a feltöltött kép neve jelenik meg.',

'HELP_CATEGORY_MAIN_PROMOTION_ICON'           => 'Ez a kép jelenik meg a kezdőoldalon, ha az adott kategória a kezdőoldalként jelenik meg. Lásd még  <span class="navipath_or_inputname">Ügyféinformációk -> Akciók kezelése -> Kategória-Akció</span>.',

'HELP_CATEGORY_MAIN_SKIPDISCOUNTS'            => 'Ha az<span class="navipath_or_inputname"> Összes negatív kedvezmény ignorálása</span> aktív, akkor a negatív kedvezmények nem lesznek beszámítva. Ilyenek pl.: rabatt, ajándékutalványok stb.',



'HELP_CATEGORY_SEO_FIXED'                     => 'Itt utasíthatja a rendszert a SEO URL-ek új kiszámítására. Egy kategória pl. egy új SEO URL-t kap, amennyiben a kategórinév megváltozik. Az <span class="navipath_or_inputname">URL állandó</span> 
beállítás hatályon kívül helyezi ezt, így a régi SEO URL megmarad és nem lesz új kiszámítva.',

'HELP_CATEGORY_SEO_KEYWORDS'                  => 'Ezek a kulcsszavak a HTML-forráskódba (Meta Keywords) lesznek beágyazva. Ezeket az információkat olvassák ki a keresrobotok. Itt adhatja meg a  kategóriáknak megfelelő kulcsszavait. Ha nem ad meg semmit, a keresőszavak automatikusan lesznek generálva.',

'HELP_CATEGORY_SEO_DESCRIPTION'               => 'Ez a leírás jelenik meg a HTML-forráskódban (Meta Description). Ez a szöveg jelenik meg a keresőrobotok keresési eredményeiben. Itt adhatja meg a kategóriának megfelelő leírást. Amennyiben nem ad meg semmit, a leírás automatikusan generálódik.',

'HELP_CATEGORY_SEO_SHOWSUFFIX'                => 'Ez a beállítás meghatározza, hogy megjelenjen-e az utótag az ablakcímben, a shop kategórianézeténél. Az oldalcím utótagját (Suffix) a <span class="navipath_or_inputname">Törzsadatok -> Alapbeállítások -> SEO -> Oldalcím utótag</span>-nál állíthatja be.',
'HELP_CONTENT_MAIN_SNIPPET'                   => 'Ha ön a <span class="navipath_or_inputname">Snippet</span>-et választja, akkor az adott CMS-tartalmat egy másik oldalon jeleníti meg az Ident segítségével: <span class="userinput_or_code">[{ oxcontent ident=Ident_der_CMS_Seite }]</span>',

'HELP_CONTENT_MAIN_MAINMENU'                  => 'Ha ön a <span class="navipath_or_inputname">Főmenü</span>-t  választja, akkor a felső, navigációs menüben egy, az adott CMS-tartalomra utaló link jelenik meg. (Az ÁSZF-nél és az Impresszumnál).',

'HELP_CONTENT_MAIN_CATEGORY'                  => 'Ha ön a <span class="navipath_or_inputname">Kategóriát</span> választja, akkor a rendes kategória alatt a kategória navigációnál egy link jelenik meg, amely amely a CMS-tartalomra mutat.',

'HELP_CONTENT_MAIN_MANUAL'                    => 'Ha ön a <span class="navipath_or_inputname">Kézi</span>-t választja, akkor egy link lesz létrehozva, amely az adott CMS-tartalmat egy másik CMS-tartalomba ágyazza. A link egészen lent jelenik meg, ha a mentésre kattint.',
'HELP_CONTENT_SEO_FIXED'                      => 'A shoprendszer utasítható a SEO URL-ek új kiszámítására. Egy CMS-tartalom pl. egy új SEO-URL-t kap, amennyiben ön megváltoztatja a CMS-tartalom nevét megváltoztatja. Ha ön az <span class="navipath_or_inputname">URL állandó</span> opciót aktiválja, akkor a CMS-tartalom nevének megváltoztatása ellenére is megmarad a régi SEO URL, és nem lesz új SEO URL kiszámítva.',

'HELP_CONTENT_SEO_KEYWORDS'                   => 'Ezek a kulcsszavak a HTML-forráskódba (Meta Keywords) lesznek beágyazva. Ezeket az információkat olvassák ki a keresrobotok. Itt adhatja meg a CMS-tartalomra vontakozó kulcsszavakat. Ha nem ad meg semmit, a kulcsszavak automatikusan lesznek generálva.',

'HELP_CONTENT_SEO_DESCRIPTION'                => 'Ez a leírás jelenik meg a HTML-forráskódban (Meta Description). Ez a szöveg jelenik meg a keresőrobotok keresési eredményeiben. Itt adhatja meg a CMS-oldalnak megfelelő leírást. Amennyiben nem ad meg semmit, a leírás automatikusan generálódik.',



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

'HELP_DELIVERY_MAIN_ORDER'                    => 'A <span class="navipath_or_inputname">Kiszámítások sorrendje</span>-nél határozhatja meg, hogy milyen sorrendben legyen a szállítási szabályok kiszámolva: A szállítási szabályoknál a legkisebb érték lesz először kiszámolva. A sorrend fontos, különösen akkor, ha a beállításnál a  <span class="navipath_or_inputname">További kiszámítási szabályok mellőzése</span> van beállítva.',

'HELP_DELIVERY_MAIN_FINALIZE'                 => 'A <span class="navipath_or_inputname">További kiszámítási szabályok mellőzése</span> esetén állíthatja be, hogy további szállítási szabályok nem lesznek kiszámolva. Ehhez a beállításhoz fontos a sorrend helyes beállítása. Ez a fenti beállításnál határozható meg: a <span class="navipath_or_inputname">Kiszámítások sorrendje</span>.',



'HELP_DELIVERYSET_MAIN_POS'                   => 'A <span class="navipath_or_inputname">Rendezés</span>-nél állíthatja be, hogy a szállítási módok, milyen sorrendben, jelennek meg a vásárló számára:<br /><ul><li>A szállítási módnál a legkisebb szám jelenik meg legfelül.</li><li>A szállítási módnál a nagyobb szám jelenik meg legalul.</li></ul>',



'HELP_DISCOUNT_MAIN_SORT'                     => '',

'HELP_DISCOUNT_MAIN_PRICE'                    => 'A <span class="navipath_or_inputname">Vásárlási érték</span>-nél állíthatja be, hogy az árcsökkentés csak meghatározott értéktől vonatkozóan érvényes. Ha az árcsökkentés minden vásárlásra lenne érvényes, akkor adja meg a <span class="navipath_or_inputname">tól</span> és <span class="navipath_or_inputname">ig</span> <span class="userinput_or_code">mezőkbe a 0 értéket</span>.',

'HELP_DISCOUNT_MAIN_AMOUNT'                   => 'A <span class="navipath_or_inputname">Vásárolt mennyiség</span>-nél állíthatja be, hogy az árcsökkentés a vásárolt mennyiségre vonatkozóan érvényes. Ha azonban az engedmény minden vásárlási mennyiségre érvényes, akkor adja meg <span class="navipath_or_inputname">tól</span> és <span class="navipath_or_inputname">ig</span> a <span class="userinput_or_code">0</span> értéket.',

'HELP_DISCOUNT_MAIN_REBATE'                   => '' .
                                                 '' .
                                                 '' .
                                                 '' .
                                                 ''.
                                                 '',



'HELP_GENERAL_SEO_ACTCAT'                     => 'Egy termék számára különböző SEO URL-t határozhatunk meg: Egyet a meghatározott kategóriához, valamint egy a termék gyártójához. <span class="navipath_or_inputname">Aktív kategória/Gyártó</span> meg tudja határozni, hogy melyik SEO-URL-t szeretné testreszabni.',

'HELP_GENERAL_SEO_FIXED'                      => 'Ha egy termék, vagy kategória stb. adatai megváltoznak, akkor a megfelelő SEO URL-ek is újra lesznek kiszámítva. Egy kategória pl. akkor kap egy új SEO URL-t, ha a kategória elnevezése megváltozik. Az <span class="navipath_or_inputname">URL állandó</span> beállítással megszüntetjük a SEO URL újbóli kiszámítását a megnevezés megváltozása esetén.',

'HELP_GENERAL_SEO_SHOWSUFFIX'                 => 'Ez a beállítás meghatározza, hogy a megnevezés utótagként megjelenjen-e az oldalcímben. A megnevezés utótagot a <span class="navipath_or_inputname">Törzsadatok -> Alapbeállítások -> SEO -> Oldalcím utótag</span>-nál tudja beállítani.',

'HELP_GENERAL_SEO_OXKEYWORDS'                 => 'Ezek a kulcsszavak a HTML-forráskódjában jelennek meg (Meta Keywords). Ezeket értékelik ki a keresőrobotok. Ha ön nem ad meg semmit, akkor a kulcsszavak automatikusan generálódnak.',

'HELP_GENERAL_SEO_OXDESCRIPTION'              => 'Ez a leírás jelenik meg az oldal HTML-forráskódjában (Meta Description). Ez a szöveg jelenik meg a keresési találatok megjelenítésénél. Ha ön nem ad meg semmit, akkor a szöveg automatikusan generálódik',



'HELP_GENIMPORT_FIRSTCOLHEADER'               => 'Aktiválja ezt a beállítást, ha a CSV-fájl első sora a az adatbázis oszlop megnevezéseinek feleljen meg.',

'HELP_GENIMPORT_REPEATIMPORT'                 => 'Ha ezt a beállítást aktiválja, akkor a sikeres importálás után újra az első Lépés jelenik meg, amivel a következő importálást elvégezheti.',

'HELP_LANGUAGE_DEFAULT'                       => 'Az alapértelmezett nyelv lesz felhasználva, ha az OXID eShop a felhasznált nyelvet nem tudja meghatározni: pl. ha a kívánt nyelv URL-je nincs megadva, és nem határozható meg a böngésző segítségével sem, valamint nincs az aktuális folyamatban (session) mentve. Az alapértelmezett nyelv deaktiválható, de nem törölhető..',

'HELP_LANGUAGE_ACTIVE'                        => "Aktiválja ezt a beállítást, a nyelv a shop vásárlói oldalán történő megjelenítéséhez. A nyelv továbbra is rendelkezésre áll az adminban, akkor is, ha a vásárlói oldalon nem jelenik meg.",

'HELP_PAYMENT_MAIN_SORT'                      => 'A <span class="navipath_or_inputname">Rendezés</span>-nél állíthatja be, hogy a fizetési módok milyen sorrendben jelenjenek meg a vásárló számára:<br /><ul><li>A legalacsonyabb számmal rendelkező fizetési mód jelenik meg az első helyen.</li><li>A legmagasabb számmal rendelkező fizetési mód jelenik meg az utolsó helyen.</li></ul>',

'HELP_PAYMENT_MAIN_FROMBONI'                  => 'Itt állíthatja be, hogy a fizetési módok csak olyan felhasználók számára elérhetők, akik bizonyos fokú hitelképességgel rendelkeznek. A hitelképességi indexet a <span class="filename_filepath_or_italic">Felhasználók kezelése -> Felhasználók -> Részletek</span>-nél lehet megadni.',

'HELP_PAYMENT_MAIN_SELECTED'                  => 'Az <span class="navipath_or_inputname">Alapértelmezett</span> aktiválásával tudja meghatározni az alapértelmezett fizetési módot, ha a vásárló a megrendelés 3. lépésében különböző fizetési mód között választhat.',

'HELP_PAYMENT_MAIN_AMOUNT'                    => '' .
                                                 '',

'HELP_PAYMENT_MAIN_ADDPRICE'                  => '' .
                                                 '' .
                                                 '',

'HELP_PAYMENT_MAIN_ADDSUMRULES'               => 'A felár/engedmény kiszámításához mindig a kosárérték szolgál alapösszegként. Határozza meg, hogy milyen költségek járulnak a Vásárlókosár értékéhez.',

'HELP_SELECTLIST_MAIN_TITLEIDENT'             => 'A <span class="navipath_or_inputname">Belső elnevezés</span>-nél adhat meg további elnevezést, amely a vásárlói oldalon nem jelenik meg. Ez azt a célt szolgálja, hogy ön a hasonló variánsokat meg tudja különböztetni egymástól.(pl.: <span class="filename_filepath_or_italic">Méret-nadrág</span> és <span class="filename_filepath_or_italic">Méret-ing</span>).',

'HELP_SELECTLIST_MAIN_FIELDS'                 => 'A <span class="navipath_or_inputname">Mezők</span>-nél az összes meghatározott kiszerelés jelenik meg a kiválasztási listában. A <span class="navipath_or_inputname">Mezők</span> mellett jobbra hozhatja létre az új variánsokat.',

'HELP_USER_MAIN_HASPASSWORD'                  => '' .
                                                 '' .
                                                 '',

'HELP_USER_PAYMENT_METHODS'                   => ''.
                                                 ''.
                                                 '',

'HELP_USER_EXTEND_NEWSLETTER'                 => 'Itt jelenik meg az, hogy a felhasználó megrendelte-e a hírlevél szolgáltatást, vagy sem.',

'HELP_USER_EXTEND_EMAILFAILED'                => 'Ha a felhasználónak nem sikerült e-mailt küldeni (Pl. az e-mail cím hibásan lett megadva, akkor aktiválja a mezőt. Ezután nem lesz a hírlevél elküldve erre a címre. A további e-mailek továbbra is továbbítva lesznek.',

'HELP_USER_EXTEND_BONI'                       => 'Itt adhatja meg a felhasználó hitelképességi indexét. A hitelképességgel tudja befolyásolni azt, hogy a felhasználó számára milyen fizetési módok állnak a rendelkezésre.',



'HELP_MANUFACTURER_MAIN_ICON'                 => 'Az <span class="navipath_or_inputname">Ikon</span>-nál és a <span class="navipath_or_inputname">Gyártó ikon feltöltése</span>-nél tölthet fel egy képet a gyártóhoz.(Pl. a gyártó logóját). Válassza ki a <span class="navipath_or_inputname">Gyártó ikon feltöltése</span> a képet, amelyet fel szeretne tölteni. Ha a mentésre kattint, a kép fel lesz töltve, majd megjelenik a feltöltött kép neve az<span class="navipath_or_inputname">Ikon</span> mezőben.',



'HELP_MANUFACTURER_SEO_FIXED'                 => 'Kívánságra a program kiszámítja a SEO URL-t. Egy gyártó oldal mindig új SEO URL-t kap, ha a gyártó megnevezése megváltozik. A beállítás <span class="navipath_or_inputname">URL állandó</span> megakadályozza ezt. Ha a beállítás aktív, akkor megmarad a régi SEO URL, és nem lesz az új meghatározás szerint kiszámítva.',

'HELP_MANUFACTURER_SEO_KEYWORDS'              => 'Ezek a kulcsszavak lesznek a HTML-forráskódjába (Meta Keywords) beágyazva. Ezeket az információkat értékelik ki a keresőmotorok. Itt adhatja meg az adott gyártóhoz a megfelelő kulcsszavakat. Amennyiben semmit nem ad meg, a rendszer automatikusan generálja ezeket a gyártó megnevezéséből.',

'HELP_MANUFACTURER_SEO_DESCRIPTION'           => 'Ez a szöveg lesz a HTML-forráskódba beágyazva (Meta Description), és a keresőmotorok ezt jelenítik meg a termék leírásaként. Itt adhat meg egy rövid leírást az adott gyártóról. Amennyiben semmit nem ad meg, akkor a rendszer automatikusan generál egy leírást a termékleírásból. (A gyártó leírásának első néhány szava lesz figyelembevéve).',

'HELP_MANUFACTURER_SEO_SHOWSUFFIX'            => 'Ez a beállítás meghatározza, hogy megjelenjen-e az utótag az ablakcímben, ha a gyártó oldalt nézi a felhasználó. Az oldalcím utótagját (Suffix) a <span class="navipath_or_inputname">Törzsadatok -> Alapbeállítások -> SEO -> Oldalcím utótag</span>-nál állíthatja be.',

'HELP_VOUCHERSERIE_MAIN_DISCOUNT'             => '' .
                                                 '' .
                                                 '' .
                                                 '' .
                                                 '',



'HELP_VOUCHERSERIE_MAIN_ALLOWSAMESERIES'      => 'Itt állíthatja be azt, hogy a felhasználó több utalványt használhat fel egy sorozatból, vagy sem.',

'HELP_VOUCHERSERIE_MAIN_ALLOWOTHERSERIES'     => 'Itt állíthatja be azt, hogy a felhasználó különböző sorozatú használhat fel egy megrendelésnél.',

'HELP_VOUCHERSERIE_MAIN_SAMESEROTHERORDER'    => 'Itt állíthatja be azt, hogy a felhasználó ebből az utalványsorozatból több vásárlást bonyolíthat-e le.',

'HELP_VOUCHERSERIE_MAIN_RANDOMNUM'            => 'Ha ezt az opciót aktiválja, akkor a program minden utalványra egy véletlenszerű számot generál.',

'HELP_VOUCHERSERIE_MAIN_VOUCHERNUM'           => 'Itt adhatja meg az utalvány számát. Ez akkor adható meg, ha ön egy új utalványt hoz létre. Ha ön több utalványt hoz létre, akkor mindegyiknek ugyanaz a száma.',

'HELP_VOUCHERSERIE_MAIN_CALCULATEONCE'        => 'Amennyiben ön termékre, vagy kategóriára vonatkozóan használja fel az utalványt, akkor nem kell aktiválnia ezt az opciót. Ekkor a program az utalványhoz minden terméknél egy kosárpoziciót számol. Az opció aktiválása esetén az utalvány a kosár teljes tartalmára vonatkozik.',

'HELP_WRAPPING_MAIN_PICTURE'                  => 'A <span class="navipath_or_inputname">Kép</span> és a <span class="navipath_or_inputname">Kép feltöltése</span>-nél feltölthet egy képet a díszcsomagoláshoz. Válassza ki a <span class="navipath_or_inputname">Kép feltöltése</span> segítségével a megfelelő képet. Ha a mentésre gombra kattint, a kép fel lesz töltve, majd a feltöltött fájl neve megjelenik a <span class="navipath_or_inputname">Kép</span> melletti mezőben.',

'HELP_PROMOTIONS_BANNER_PICTUREANDLINK'       => 'Töltsön fel egy képet a <span class="navipath_or_inputname">Fájl kiválasztása</span> segítségével a kezdőoldal bannerjéhez. Adja meg azt az URL-t, aminek a bannerra történő kattintás esetén meg kell jelennie. Ha egy terméket szeretne a bannerhez hozzárendelni, akkor az<span class="navipath_or_inputname">Árucikk hozzárendelése</span>-re kattintva válassza ki a megfelelő terméket, és akkor ennek az URL-je jelenik meg a <span class="navipath_or_inputname">Banner mögötti link</span>-nél.',
'HELP_SHOP_PERF_SEO_CACHE'                    => 'Az aktívált SEO Cache megnöveli az áruház működésének a sebességét, ugyanakkor nagy helyet igényel a /tmp-könyvtárban.',

'HELP_ALTERNATIVE_IMAGE_SERVER_NOTE'          => 'A config.inc.php konfigurációs fájlban a következő paraméterekkel <i>sAltImageUrl</i> és <i>sSSLAltImageUrl</i> egy külső képtároló szerverre mutató linket lehet beállítani. Erről az alternatív szerverről töltődne az összes termékkép. Ugyanakkor a feltöltött képek a shop helyi szerverén tárolódik. Így kézzel, vagy egy skript segítségével lehetségessé válik a szinkronizáció.',

'HELP_SHOP_RDFA_CONTENT_OFFERER'              => 'Válassza ki, hogy melyik CMS-oldal tartalmazza a webáruházának főbb információit. Pl. "Impresszum".',
'HELP_SHOP_RDFA_CONTENT_PAYMENT'              => 'Válassza ki, hogy melyik CMS-oldal (pl. "ÁSZF") tartalmazza a fizetési információkat, amelyek nem lettek az RDFa-nak hozzárendelve. A fizetési módok hozzárendelése az RDFa-hoz a  Shopbeállítások -> Fizetési módok -> RDFa-nál történik.',
'HELP_SHOP_RDFA_CONTENT_DELIVERY'             => 'Válassza ki, hogy melyik CMS-oldal tartalmazza a szállítási információkat (pl. Szállítási és fizetési információk), amelyek nem lettek az RDFa-hoz hozzárendelve. A szállítási módok hozzárendelése az RDFa-hoz a Shopbeállítások -> Szállítási módok -> RDFa-nál történik.',
'HELP_SHOP_RDFA_VAT'                          => 'Ez az opció adja meg, hogy a shop árai, valamint szállítási- és fizetési mód költségei tartalmazzák-e az ÁFA-t, vagy sem.',
'HELP_SHOP_RDFA_DURATION_PRICES'              => 'Adja meg a termékek árai, fizetési- és szállítási költségek érvényességi idejét. (pl. 1 nap, 2 hét...).',
'HELP_SHOP_RDFA_LOGO_URL'                     => 'A shop logójának vagy képének az URL-jét kell megadni.',
'HELP_SHOP_RDFA_GEO_LONGITUDE'                => 'A shop földrajzi hosszúsága (Longitude) Csak számot adjon meg.',
'HELP_SHOP_RDFA_GEO_LATITUDE'                 => 'A shop földrajzi szélessége (Latitude).',
'HELP_SHOP_RDFA_GLN'                          => 'A cég Globális lokációs száma (GLN). Ez egy 13 jegyű szám, amely az ön cége, valamint annak székhelyének azonosítására szolgál.',
'HELP_SHOP_RDFA_NAICS'                        => 'Az ön vállalkozásának az azonosító kulcsa a North American Industry Classification System-nél (NAICS). http://www.census.gov/eos/www/naics/.',
'HELP_SHOP_RDFA_ISIC'                         => 'Az ön vállalkozásának az azonosító kulcsa a International Standard of Industrial Classification of All Economic Activities-nél (ISIC). http://unstats.un.org/unsd/cr/registry/isic-4.asp.',
'HELP_SHOP_RDFA_DUNS'                         => 'A Dun & Bradstreet D-U-N-S egy kilencjegyű számkód egy vállalkozás azonosításához.',
'HELP_SHOP_RDFA_SHOW_PRODUCTSTOCK'            => 'Ha ez az opció aktív, akkor megjelenik a valós raktárkészlet.',
'HELP_SHOP_RDFA_RATING_MIN'                   => 'Az értékelés lehetséges minimális értéke a shopban. Figyelem, ez nem azonos a termékértékelés legkisebb értékével!',
'HELP_SHOP_RDFA_RATING_MAX'                   => 'Az értékelés lehetséges maximális értéke a shopban. Figyelem, ez nem azonos a termékértékelés legmagasabb értékével!',
'HELP_SHOP_RDFA_COND'                         => 'Válassza ki a termékek állapotát. (új, használt vagy felújított ).',
'HELP_SHOP_RDFA_FNC'                          => 'Válassza ki a termék üzleti funkcióját. Pl. eladva, bérbeadva, vagy javítva?',
'HELP_SHOP_RDFA_COSTUMER'                     => 'Milyen ügyfélcsoportnak értékesíti a termékeit? (végfelhasználó, viszonteladó, vállalkozások, közszolgálati intézmények).',
'HELP_SHOP_RDFA_DURATION_OFFERINGS'           => 'Ez a tulajdonság jelzi a termékei érvényességének időtartamát, pl. 1 nap, 1 hét vagy 1 hónap.',
'HELP_SHOP_PERF_SYSREQ_CHECK'                 => '',
'HELP_SHOP_CONFIG_ADDITIONAL_SERVICE_VAT_CALCULATION_BIGGEST_NET'  => 'A kiszámításhoz az az ÁFA-érték lesz felhasználva, amelyik a legnagyobb nettó értékkel rendelkezik a kosárban.',
'HELP_SHOP_CONFIG_ADDITIONAL_SERVICE_VAT_CALCULATION_PROPORTIONAL' => 'Azoknak termékek százalékos értéke, amelyek azonos ÁFA értékkel rendelkeznek a kosárban.',
'HELP_SHOP_CONFIG_VIEWNETPRICE'               => 'Az áruházban a termékek nettóára jelenik meg.',
'HELP_SHOP_CONFIG_ENTERNETPRICE'              => 'Az adminban a termékek nettó értékét kell megadnia.',

'HELP_REVERSE_PROXY_GET_FRONTEND'             => 'Ellenőrzi, hogy a Reverse Proxy a vásárlói oldalon rendelkezésre áll-e. A shop kezdőoldalának Header-része kerül ellenőrzésre.',
'HELP_REVERSE_PROXY_GET_BACKEND'              => 'Az adminisztrációs oldal Reverse Proxy nélkül jelenik meg. A Varnish Header fogadása nem lehetséges.',

'HELP_SHOP_CONFIG_DEBIT_OLD_BANK_INFORMATION_NOT_ALLOWED' => 'A megrendelésnél csak IBAN és BIC adható meg. A számlaszám és a bank kódja csak akkor adható meg, ha ez az opció nem aktív.',
'HELP_SHOP_CONFIG_ENABLE_INTANGIBLE_PRODUCTS_AGREEMENT'   => 'Amennyiben ez az opció aktív, akkor a megrendelés negyedik lépésénél el kell fogadnia az ÁSZF-t az ügyfélnek akkor is, ha szellemi és letölthető termékről van szó! Aktiválja az opciót, ha különleges termékeket értékesít.',

'HELP_SHOP_CONFIG_FIELDS_CONTACTFORM'         => '',
];
