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

'HELP_SHOP_SYSTEM_DISABLENAVBARS'             => 'Pokiaľ je voľba zapnutá, počas záveru objednávky nie je zobrazená väčšina navigačných možností. Užívateľ vďaka tomu nie je zbytočne rozptylovaný.',

'HELP_SHOP_SYSTEM_DEFAULTIMAGEQUALITY'        => '' .
                                                 ''.
                                                 ''.
                                                 '',

'HELP_SHOP_SYSTEM_LDAP'                       => 'Prosím upravte súbor core/oxldap.php',

'HELP_SHOP_SYSTEM_SHOWVARIANTREVIEWS'         => 'Táto voľba má vplyv na to, ako sú spracúvané recenzie pre varianty - pokiaľ je voľba aktívna, poznámky variánt sú zobrazené aj u hlavného výrobku.',

'HELP_SHOP_SYSTEM_VARIANTSSELECTION'          => 'V eShope existuje množstvo zoznamov pre zaraďovanie výrobkov, napr. zaraďovanie zlacnených výrobkov. Pokiaľ je táto voľba aktívna, sú v týchto zoznamoch uvádzané aj varianty.',

'HELP_SHOP_SYSTEM_VARIANTPARENTBUYABLE'       => '' .
                                                 '' .
                                                 '',

'HELP_SHOP_SYSTEM_VARIANTINHERITAMOUNTPRICE'  => 'Tu môžete nastaviť, či majú byť ceny variánt rovnaké ako ceny hlavných výrobkov. Pokud je volba aktivní, cena hlavního výrobku jsou použita i pro varianty.',

'HELP_SHOP_SYSTEM_ISERVERTIMESHIFT'           => 'Server a eShop môžu byť v inom časovom pásme. Pomocou tohto nastavenia času je možné upraviť časový posun - zadajte počet hodín, ktoré majú byť pripočítané / odpočítané od času serveru, napr. <kdb>+2</kdb> alebo <kdb>-2</kdb>',

'HELP_SHOP_SYSTEM_INLINEIMGEMAIL'             => 'Pokiaľ je voľba aktívna, obrázky v emaile sa odosielajú zároveň s textom. Pokiaľ je voľba vypnutá, obrázky sa sťahujú až po otvorení emailu.',

'HELP_SHOP_SYSTEM_UTILMODULE'                 => 'Zadajte tu svoj vlastný súbor PHP, ktorý prepíše funkcie eShopu na začiatku predaja.',


'HELP_SHOP_CACHE_ENABLED'                     => 'Ak je aktivované ukladanie dynamického obsahu do vyrovnávacej pamäte (cache), pre zvýšenie výkonu je obsah je cachování. Deaktivujte toto nastavenie, ak upravujete eshop (píšete moduly, upravujete šablóny vzhľadu atd).',

'HELP_SHOP_CACHE_LIFETIME'                    => 'Tu nastavíte, ako dlho bude obsah vyrovnávacej pamäte (cache) uložený. Predvolená hodnota je 36000 sekúnd.',

'HELP_SHOP_CACHE_CLASSES'                     => 'Tu nastavíte, ktoré triedy adresára view sú cachování. <br /> Meňte toto nastavvení, ak ste oboznámení s mechanizmom cachovania a viete, čo robíte!',

'HELP_SHOP_CACHE_REVERSE_PROXY_ENABLED'       => 'Aktivuje ukladanie do medzipamäte HTTP reverznej proxy. Poznámka: Nepoužívajte s "dynamický obsah cache" v rovnakú dobu, inak by to mohlo spomaliť výkon.',

'HELP_SHOP_CACHE_LAYOUT_CACHE_AGE'            => 'Nastaví životnosť rozvrhnutia stránky v sekundách. Bude zasielaný ako hodnota headeru "Age" cez HTTP-header',

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

'HELP_SHOP_CONFIG_NEWARTBYINSERT'             => 'Na titulnej strane Vášho eShopu sa v kategórii <i>Nové v ponuke!</i> zobrazujú najnovjšie výrobky. Výrobky môžete radiť podľa dátumu pridania alebo dátumu poslednej zmeny.',

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

'HELP_SHOP_CONFIG_DELETERATINGLOGS'           => 'Užívateľ nemôže jeden výrobok hodnotiť viackrát. Tu môžete určiť, po akej dobe môže užívateľ výrobok znova ohodnotit. Pokiaľ nezadáte žiadnu hodnotu, výrobok môže byť hodnotený len jedenkrát.',

'HELP_SHOP_CONFIG_DISABLEONLINEVATIDCHECK'    => ''.
                                                 '',

'HELP_SHOP_CONFIG_ALTVATIDCHECKINTERFACEWSDL' => 'Tu môžete zadať alternatívnu URL adresu pre online kontrolu DPH ID.',

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

'HELP_SHOP_CONFIG_BASKETRESERVATIONTIMEOUT'   => 'Po vypršaní doby sa rezvervované produkty opäť uvoľnia na sklad a zákazníkovi sa košík vyprázdní.',

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

'HELP_SHOP_CONFIG_SHOWTSINTERNATIONALFEESMESSAGE' => 'V 4. kroku výstupného procesu je CMS stránka "oxtscodmessage" zobrazená dodatočne.',

'HELP_SHOP_CONFIG_SHOWTSCODMESSAGE'           => 'V 4. kroku výstupného procesu je CMS stránka "oxtscodmessage" zobrazená dodatočne.',

'HELP_SHOP_CONFIG_DOWNLOADS'                  => 'Obchod s produktami ku stiahnutiu. Tu aktivujete možnosť objednávať a sťahovať produkty.',

'HELP_SHOP_CONFIG_DOWNLOADS_PATH'             => 'Cesta k miestu pre uloženie sťahovateľných produktov.',

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

'HELP_SHOP_MALL_PRICEADDITION'                => 'Môžete zadať maržu pre všetky ceny produktov v eshopu: Zadajte maržu a zvlolte jestli je percentuálna (<span class="userinput_or_code">% </span>) alebo absolútna (<span class="userinput_or_code"> abs </span>).',



'HELP_SHOP_PERF_NEWESTARTICLES'               => '' .
                                                 '' .
                                                 '' .
                                                 '',

'HELP_SHOP_PERF_TOPSELLER'                    => '' .
                                                 '' .
                                                 '' .
                                                 '',

'HELP_SHOP_PERF_LOADFULLTREE'                 => 'Pokým je voľba aktívna, v navigácii sa zobrazuje úplný zoznam kategórií. Zobraziť úplný zoznam je možné len v navigačnej ponuke, ktorá nie je umiestnená hore.',

'HELP_SHOP_PERF_LOADACTION'                   => 'Pokým je táto voľba aktívna, zobrazujú sa akcie ako <i>Nové v ponuke!</i> a <i>Dlhodobo obľúbený tovar</i>.',

'HELP_SHOP_PERF_USESELECTLISTPRICE'           => 'Nastaviť môžete rôzne zľavy. Pokým je táto voľba aktívna, zľavy sa započítajú. Pokiaľ nie je, zľavy se nezapočítajú.',

'HELP_SHOP_PERF_DISBASKETSAVING'              => 'Košík registrovaných se ukladá. Ak znova navštívia eShop, košík sa im zobrazí. Keď aktivujete túto voľbu, obsah košíka se už nebude ukladať.',

'HELP_SHOP_PERF_LOADDELIVERY'                 => 'Pokiaľ táto voľba nie je aktívna, poštovné je automaticky nulové.',

'HELP_SHOP_PERF_LOADPRICE'                    => 'Pokiaľ táto volba nie je aktívna, nezobrazujú sa ceny výrobkov.',

'HELP_SHOP_PERF_PARSELONGDESCINSMARTY'        => 'Pokým je táto voľba aktívnaí, popisy kategórií a výrobku sú spracúvané pomocou Smarty - môžete používať Smarty tagy.<br />',

'HELP_SHOP_PERF_LOADSELECTLISTSINALIST'       => 'Výbery sa bežne zobrazujú len v podrobnom popise výrobku. Pokým je táto voľba aktívna, výbery sa zobrazujú vždy.',

'HELP_SHOP_PERF_CHECKIFTPLCOMPILE'            => 'Ak je táto voľba aktivovaná, eshop kontroluje, či boli zmenené šablóny. Ak áno, šablóna je znova zkopilována. Ak upravujete šablóny, aktivujte túto voľbu. Deaktivujte ju, ak je eshop v produkčnom režime aby ste zvýšili jeho výkon. <br />Bližšie informácie nájdete <a href="http://www.oxid-esales.com/en/resources/help-faq/eshop-manual/advices-adepting-templates" target="_blank" target="_blank"> v manuálu o cachovania </a>.',

'HELP_SHOP_PERF_CLEARCACHEONLOGOUT'           => 'Zvyčajne je kompletný chache vyprázdnená akonáhle dôjde k uloženiu zmeny v administrácii. To môže spôsobiť výkonnostné problémy. Ak je táto voľba aktívna, cache sa zmaže až po odhlásení z administrácie eshopu.',





'HELP_SHOP_SEO_TITLEPREFIX'                   => '' .
                                                 '',

'HELP_SHOP_SEO_TITLESUFFIX'                   => '' .
                                                 '',

'HELP_SHOP_SEO_IDSSEPARATOR'                  => '' .
                                                 '',

'HELP_SHOP_SEO_SAFESEOPREF'                   => 'Pokiaľ je v kategórii viac výrobkov s rovnakým názvom, majú rovnaké SEO URL. Preto majú aj SEO príponu. Pokým žiadnu príponu nedefinujete, bude použité slovo <i>oxid</i>.',

'HELP_SHOP_SEO_RESERVEDWORDS'                 => 'Niektoré URL sú potrebné na prevádzku eShopu, napr. www.youreshop.com/admin pre prístup do administrácie. Pokiaľ pomenujete kategóriu <i>admin</i>, SEO URL bude taktiež www.youreshop.com/admin, do kategórie se teda nebudete vedieť dostať. Preto bude použitá SEO URL prípona. Tu môžete nadefinovať, ku ktorým URL má byť prípona pridaná automaticky.',

'HELP_SHOP_SEO_SKIPTAGS'                      => 'Pokiaľ pre kategóriu nevytvoríte META tagy, budú vytvorené automaticky. Preto by mali byť vynechané niektoré, príliš často sa vyskytujúce slová. Slová v tomto zozname budú vynechané META tagmi.',
'HELP_SHOP_SEO_LOWERCASEURLS'                 => '',

'HELP_SHOP_SEO_STATICURLS'                    => 'Pre niektoré stránky (napr. Podmienky používania) môžete zadefinovať URL. Môžete tiež zadať URL pre každý jazyk zvlášť.',



'HELP_SHOP_MAIN_PRODUCTIVE'                   => '' .
                                                 '' .
                                                 '',

'HELP_SHOP_MAIN_ACTIVE'                       => '<var>Aktivovaním</var> môžete zapnúť / vypnúť celý eShop. Pokým je eShop vypnutý, užívateľom se zobrazuje správa o jeho dočasnej nedostupnosti.',

'HELP_SHOP_MAIN_INFOEMAIL'                    => 'Všetky emaily odoslané cez Kontaktujte nás! budú zaslané na túto adresu.',

'HELP_SHOP_MAIN_ORDEREMAIL'                   => 'Zákazníkovi bude poslaný email s informáciami o jeho objednávke. Odpovede na tieo emaily budú zaslané na <var>objednávkový email</var>.',

'HELP_SHOP_MAIN_OWNEREMAIL'                   => 'Pokiaľ si zákazník niečo objedná, bude Vám zaslaný email s informáciami o objednávke. Tento email bude zaslaný na <var>Vašu adresu</var>.',

'HELP_SHOP_MAIN_SMTPSERVER'                   => 'SMTP údaje potrebné pre posielanie e-mailov (napr. zasielanie zákazníkom potvrdenie objednávky e-mailom). Ďalšie informácie možno nájsť v <a href="http://www.oxid-esales.com/de/resources/help-faq/eshop-manual/entering-smtp-data" target="_blank"> príslušnej časti návodu </a>.',

'HELP_ARTICLE_MAIN_ALDPRICE'                  => 'Pomocou <var>Alternatívne ceny</var> môžete nastaviť špeciálne ceny pre niektorých užívateľov. Viac informácií nájdete v <a href="http://www.oxid-esales.com/de/resources/help-faq/eshop-manual/set-alternative-prices-special-users">nápovede</a> na webe OXID.',

'HELP_ARTICLE_MAIN_VAT'                       => 'Tu môžete zadať špeciálny DPH sadzbu pre výrobok. Táto DPH sadzba sa uplatňuje vo všetkých kalkuláciách (košík, objednávka, faktúra)',

'HELP_ARTICLE_EXTEND_UNITQUANTITY'            => '<var>Počet kusov</var> a <var>Balenie</var> Vám umožňuje zobraziť cenu za jednotku (napr. 20 Kč za liter). <var>Počet kusov</var> je množstvo výrobkov (napr. <kbd>5</kbd>), <var>Balenie</var> je množstvo (napr. <kbd>liter</kbd>). Cena za jednotku sa zobrazuje u výrobku',

'HELP_ARTICLE_EXTEND_EXTURL'                  => 'Do poľa <var>Externý odkaz</var> môžete zadať odkaz týkajúci sa výrobku (napr. web výrobcu). Do poľa <var>text externého odkazu</var> zadajte text, ktorý bude slúžiť ako popis odkazu, napr. <kbd>Viac informácií</kbd>.',

'HELP_ARTICLE_EXTEND_TPRICE'                  => 'Do poľa <var>Odporúčaná maloobchodná cena</var> zadajte odporúčanú maloobchodnú cenu. Bude zobrazená zákazníkom. Nad cenou výrobku sa zobrazí<i>Zlacnené z odporúčanej ceny</i>',

'HELP_ARTICLE_EXTEND_QUESTIONEMAIL'           => 'Do poľa <var>Alternatívny kontakt</var> zadajte Váš email. Pokiaľ bude mať zákazník otázku k výrobku, bude odoeslaná na tento email. Pokiaľd nezadáte žiadnu adresu, otázka bude zaslaná na Váš informačný email.',

'HELP_ARTICLE_EXTEND_NONMATERIAL'             => 'Nastavenie variant je zdedené z nadradeného produktu a vzťahuje sa na celý produkt.',

'HELP_ARTICLE_EXTEND_FREESHIPPING'            => 'Nastavenia sa dedia z materského produktu Varianty a vzťahuje sa na celý produkt.',

'HELP_ARTICLE_EXTEND_BLFIXEDPRICE'            => 'Cenový alarm je možné vypnúť pre tento produkt.',

'HELP_ARTICLE_EXTEND_SKIPDISCOUNTS'           => 'Pokiaľ je aktívna <var>Preskočiť všetky negatívne zľavy</var>, negatívne zľavy sa do ceny tovaru nezarátajú.',

'HELP_ARTICLE_EXTEND_TEMPLATE'                => 'Deatil produktu môže byť zobrazený inou šablónou. Názov súboru šablóny zadajte do tohto políčka. Ďalšie informácie sú k dispozícii v <a href="http://www.oxid-esales.com/de/resources/help-faq/eshop-manual/display-certain-products-or-categories-another-template" target="_blank"> príslušnej časti návodu </a>.',

'HELP_ARTICLE_EXTEND_ISCONFIGURABLE'          => ''.
                                                 '',

'HELP_ARTICLE_EXTEND_UPDATEPRICE'             => 'Ceny se môžu meniť v definovanom čase. Zadané ceny aktualizujú štandartné ceny. Ak má cena hodnotu "0", nebudú se ceny aktualizovať.',

'HELP_ARTICLE_EXTEND_SHOWCUSTOMAGREEMENT'     => 'Pokiaľ je táto voľba aktivovaná, užívatelia musia potvrdiť podmienky a požiadavky v štvrtom kroku výstupnej kontroly u tejto konkrétnej položky. Prosím, uistite sa, že hlavné nastavenie je rovnako aktívne a produkt je nehmotný, alebo k stiahnutiu.',

'HELP_ARTICLE_FILES_MAX_DOWNLOADS_COUNT'      => 'Tu môžete nastaviť, ako často si môže užívateľ sťahovať z rovnakého spojenia. V tomto súbore môžete prepísať východzie nastavenie, ktoré bolo definované v Hlavnom nastavení -> Nastavenie -> Nastavenie -> Súbory k stiahnutiu pro všetky produkty.',

'HELP_ARTICLE_FILES_LINK_EXPIRATION_TIME_UNREGISTERED' => 'Zadajte čas v hodinách, odkaz k stiahnutiu je platný až po prvom stiahnutí. V tomto súbore môžete prepísať východzie nastavenie, ktoré bolo definované v Hlavnom nastavení-> Nastavenie -> Nastavenie -> Súbory k stiahnutiu pre všetky produkty.',

'HELP_ARTICLE_FILES_LINK_EXPIRATION_TIME'     => 'Zadajte čas v hodinách, počas ktorého je platný odkaz ku stiahnutiu po objednaní. V tomto súbore môžete prepísať výchozie nastavenie, které bolo definované v Hlavnom nastavení -> Nastavenie -> Nastavenie -> Súbory ku stiahnutiu pre všetky produkty.',

'HELP_ARTICLE_FILES_NEW'                      => 'Zadajte názov prenášaného súboru cez FTP alebo nahrajte tu nový súbor. Veľké súbory by mali byť nahrané cez FTP. Omedzenie veľkosti súboru je platné iba vtedy, pokiaľ je súbor načítaný cez administrátorské rozhranie. Toto omedzenie závisí na nastavení PHP serveru a môžu byť iba tam upravené .',

'HELP_ARTICLE_FILES_DOWNLOAD_EXPIRATION_TIME' => 'Zadajte čas v hodinách, odkaz k stiahnutiu je platný až po prvom stiahnutiu. V tomto súbore môžete prepísať východzie nastavenie, ktoré bolo definované v Hlavnom nastavení-> Nastavenie -> Nastavenie -> Súbory k stiahnutiu pre všetky produkty.',

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

'HELP_ARTICLE_STOCK_REMINDACTIV'              => 'Pomocou <var>Odslať upozornenie pri dosiahnutí určitého stavu skladových zásob</var> môžete zadať stav zásob, pri ktorých má byť odoslané upozornenie. Aktivujte ponuku a zadajte stav, pokiaľ chcete byť upozornení.',

'HELP_ARTICLE_STOCK_STOCKFLAG'                => '' .
                                                 '' .
                                                 '' .
                                                 '' .
                                                 '',

'HELP_ARTICLE_IS_DOWNLOADABLE'                => 'Súbory tohoto produktu je možné stiahuť.',

'HELP_ARTICLE_STOCK_REMINDAMAOUNT'            => 'With <span class="navipath_or_inputname">Send e-mail if stock falls below value</span> you can specify that an e-mail will be sent as soon as the stock level falls below the value entered. Select the check box and then enter the level at which you want to be notified.',

'HELP_ARTICLE_STOCK_DELIVERY'                 => 'Tu môžete zadat dátum, od ktorého bude vypredaný výrobok znova dostupný. Dátum zadajte vo formáte rok-mesiac-deň, napr. 2009-02-16.',

'HELP_ARTICLE_SEO_FIXED'                      => 'sShop môžete nechať vygenerovať nové SEO URL. Stránky výrobku budú mať nové SEO URL, pokiaľ sa napríklad zmení titulok výrobku. Nastavenie <var>fixných URL</var> sa nezmení.',

'HELP_ARTICLE_SEO_KEYWORDS'                   => 'Tieto kľúčové slová budú priamo v zdrojovom HTML kóde stránky výrobku (META keywords). Kľúčové slová sú dôležité pre vyhľadávače. Tu môžete zadať kľúčové slová. Keď ich nezadáte, budú automaticky vygenerované.',

'HELP_ARTICLE_SEO_DESCRIPTION'                => 'Tento popis bude priamo v zdrojovém HTML kódé stránky výrobku (META description). Popis je dôležitý pre vyhľadávače. Popis môžete zadať tu. Pokiaľ ho nezadáte, bude automaticky vygenerovaný.',

'HELP_ARTICLE_SEO_ACTCAT'                     => 'Môžete zadat rôzne SEO URL pre jeden výrobok (napr. pre rôzne kategórie). Pomocou <var>aktivovať kategóriu/výrobcu</var> si vyberiete SEO URL, ktoré chcete zmeniť.',

'HELP_ARTICLE_STOCK_STOCKTEXT'                => 'Tu môžete napísať správu, ktorá je zobrazená v prípade, že výrobok je na sklade. Ďalšie informácie o skladových správach sú k dispozícii v <a href="http://www.oxid-esales.com/en/resources/help-faq/eshop-manual/setting-messages-stock-levels" target="_blank"> časti manuálu o skladových správach </a>.',

'HELP_ARTICLE_STOCK_NOSTOCKTEXT'              => 'Tu môžete napísať správu, ktorá je zobrazená v prípade, že výrobok nie je na sklade. Ďalšie informácie o skladových správach sú k dispozícii v <a href="http://www.oxid-esales.com/en/resources/help-faq/eshop-manual/setting-messages-stock-levels" target="_blank"> časti manuálu o skladových správach </a>.',

'HELP_ARTICLE_STOCK_AMOUNTPRICE_AMOUNTFROM'   => 'V <span class="navipath_or_inputname"> Množstvo od/do </span> nastavte pre aký rozsah je platná cena.<br />Ďalšie informácie o množstvových zľavách sú k dispozícii v <a href="http://www.oxid-esales.com/en/resources/help-faq/eshop-manual/setting-graduated-prices" target="_blank"> časti manuálu o množstvových zľavách </a>.',

'HELP_ARTICLE_STOCK_AMOUNTPRICE_PRICE'        => '' .
                                                 '',

'HELP_ARTICLE_VARIANT_VARNAME'                => '<span class="navipath_or_inputname"> Meno výberu </span> určuje, ako bude výber variantov pomenovaný, napríklad <span class="userinput_or_code"> Farba </span> alebo <span class="userinput_or_code"> Veľkosť </span>.<br /> Ďalšie informácie sú k dispozícii v <a href="http://www.oxid-esales.com/en/resources/help-faq/eshop-manual/setting-variants-a-product" target="_blank"> časti manuálu o variantoch výrobkov </a>.',

'HELP_ATTRIBUTE_MAIN_DISPLAYINBASKET'         => 'Ak je zaškrtnuté, bude hodnota tohoto atribútu zobrazená v košíku a prehľade objednávok pod názvom produktu.',

'HELP_CATEGORY_MAIN_HIDDEN'                   => 'Pomocou <var>Skryť</var> môžete pred užívateľmi skryť alebo im zobraziť kategórii. Užívateľom nebudú zobrazené skryté kategórie.',

'HELP_CATEGORY_MAIN_PARENTID'                 => '' .
                                                 '' .
                                                 '',

'HELP_CATEGORY_MAIN_EXTLINK'                  => '<var>Externý odkaz</var> sa užívateľovi otvorí po kliknutí na danú kategóriu. <strong>Túto funkciu používajte len pokiaľ chcete odkaz zobraziť v zozname kategórií!</strong>',

'HELP_CATEGORY_MAIN_PRICEFROMTILL'            => 'V poli<var>Cena od / do</var> môžete nastaviť zobrazenie <strong>všetkých</strong> výrobkov s cenou v zadanom intervale v jednej kategórii.',

'HELP_CATEGORY_MAIN_DEFSORT'                  => 'V poli <var>Rýchle triedenie</var> zadajte, podľa čoho majú byť triedené kategórie a výrobky. Viac v <a href="http://www.oxid-esales.com/en/resources/help-faq/eshop-manual/sorting-products">návodu</a> na webe OXID eSales.',

'HELP_CATEGORY_MAIN_SORT'                     => '<var>Triedenie</var>môžete použiť na zadefinovanie poradia, v ktorom budú zobrazené kategórie - kategória s najnižším číslom bude hore.',

'HELP_CATEGORY_MAIN_THUMB'                    => '<var>Obrázky</var> a <var>Nahrať obrázok</var> slúžia na nahranie obrázku kategórie. Obrázok se zobrazí hore v prehliadanej kategórii. Pomocou <var>Nahrať obrázok</var> vyberiete a kliknutím na <var>Uložiť</var> nahráte obrázok. Potom ho nájdete v záložke <var>Obrázky</var>.',

'HELP_CATEGORY_MAIN_PROMOTION_ICON'           => 'With <span class="navipath_or_inputname">promotion icon</span> and <span class="navipath_or_inputname">upload icon</span> you can upload a category picture for promotion on start page. For displaying category promotion see <span class="navipath_or_inputname">Master Settings -> Customer Info -> Top offer in categories</span>',

'HELP_CATEGORY_MAIN_SKIPDISCOUNTS'            => '<li>If <span class="navipath_or_inputname">Skip all negative discounts</span> is active, negative allowances will not be calculated for any products in this category.',



'HELP_CATEGORY_SEO_FIXED'                     => 'eShop môžete nechať vygenerovať nové SEO URL. Stránky výrobku budú mať nové SEO URL v prípade, že sa napríklad zmení titulok výrobku. Nastavenie <var>fixné URL</var> sa nezmení.',

'HELP_CATEGORY_SEO_KEYWORDS'                  => 'Tieto kľúčové slová budú priamo v zdrojovom HTML kóde stránky výrobku (META keywords). Kľúčové slová sú dôležité pre vyhľadávače. Kľúčové slová môžete zadat tu. Keď ich nezadáte, budú automaticky vygenerované.',

'HELP_CATEGORY_SEO_DESCRIPTION'               => 'Tento popis bude priamo v zdrojovom HTML kóde stránky výrobku (META description). Popis je dôležitý pre vyhľadávače. Popis môžete zadať tu. Keď ho nezadáte, bude automaticky vygenerovaný.',

'HELP_CATEGORY_SEO_SHOWSUFFIX'                => 'Pomocou tohto nastavenia môžete konkretizovať príponu titulku, ktorý sa zobrazí na lište prehliadača. Prípona môže byť nastavená v <em>Hlavné nastavenia -> Nastavenie -> SEO -> Prípona názvu obchodu</em>.',
'HELP_CONTENT_MAIN_SNIPPET'                   => 'Pomocou funkcie ident: [{ oxcontent ident="ident_of_the_cms_page" }] môete túto CMS stránku vložiť bez ďalších stránok',

'HELP_CONTENT_MAIN_MAINMENU'                  => 'Pokiaľ si vyberiete <var>Ponuka vyššie</var>, odkaz na túto CMS sa zobrazí v ponuke vyššie (v Podmienkachh použitia a O nás).',

'HELP_CONTENT_MAIN_CATEGORY'                  => 'Pokiaľ si vyberiete <var>Kategória</var>, odkaz na túto CMS stránku je zobrazený v navigácii nad kategóriami.',

'HELP_CONTENT_MAIN_MANUAL'                    => 'Pokiaľ si vyberiete <var>Manuálne</var>, vytvorí sa odkaz, čo sa zíde na pridanie jednej CMS stránky do ďalšej. Odkaz sa objaví po kliknutí na <var>Uložiť</var>',
'HELP_CONTENT_SEO_FIXED'                      => 'eShop môžete nechať vygenerovat nové SEO URL. Stránky výrobku budú mať nové SEO URL, pokiaľ sa napríklad zmení titulok výrobku. Nastavenie <var>fixnéch URL</var> se nezmení.',

'HELP_CONTENT_SEO_KEYWORDS'                   => 'Tieto kľúčové slová budú priamo v zdrojovom HTML kóde CMS stránky výrobku (META keywords). Kľúčové slová sú dôležité pre vyhľadávače. Kľúčové slová môžete zadať tu. Keď ich nezadáte, budú automaticky vygenerované.',

'HELP_CONTENT_SEO_DESCRIPTION'                => 'Tento popis bude priamo v HTML zdrojovom kóde CMS stránky výrobku (META description). Popis je dôležitý pre vyhľadávače. Popis môžete zadať priamo tu. Keď ho nezadáte, bude automaticky vygenerovaný.',



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

'HELP_DELIVERY_MAIN_ORDER'                    => 'Môžete použiť <var>Poradie výpočtov poštovného</var> na určenie poradia, v kterom budú použité metódy výpočtu poštovného. Metóda s najnižším číslom bude použitá ako prvá. Poradie je dôležité, pokiaľ je aktívna voľba <var>Nepočítať ďalej, pokiaľ metóda funguje</var>.',

'HELP_DELIVERY_MAIN_FINALIZE'                 => 'Pokým je aktívna voľba <var>Nepočítať ďalej, pokiaľ metóda funguje</var> na ukončenie výpočtov po prvnom úspešnom.',



'HELP_DELIVERYSET_MAIN_POS'                   => '<var>Triedenie</var> definuje poradie, v akom sú metódy výpočtu poštovného zobrazované užívateľovi. Metóda s najnižším číslom je hore.',



'HELP_DISCOUNT_MAIN_SORT'                     => '',

'HELP_DISCOUNT_MAIN_PRICE'                    => 'Môžete použiť <var>Nákupné ceny</var> na určenie, pre ktoré kúpne ceny platí zľava. Pokiaľ zľava platí pre všetky ceny, zadajte <kbd>0</kbd> do <var>Od</var> a <kbd>0</kbd> do <var>Do</var>.',

'HELP_DISCOUNT_MAIN_AMOUNT'                   => 'Môžete použiť <var>Množstvo</var> na určenie množstva, pre ktoré platí zľava. Pokiaľ zľava platí pre ľubovoľné množstvo, zadajte <kbd>0</kbd> do <var>Od</var> a <kbd>0</kbd> do <var>Do</var>.',

'HELP_DISCOUNT_MAIN_REBATE'                   => '' .
                                                 '' .
                                                 '' .
                                                 '' .
                                                 ''.
                                                 '',



'HELP_GENERAL_SEO_ACTCAT'                     => 'Môžete vytvoriť niekoľko SEO odkazov pre výrobky: Pre niektoré kategórie a stránky výrobcu. S <span class="navipath_or_inputname"> Aktivovať kategórii / výrobca </span> vyberiete SEO URL, ktorú chcete upraviť.',

'HELP_GENERAL_SEO_FIXED'                      => 'eShop automaticky generuje SEO URL. Napríklad, stránka produktu získa nový odkaz, ak sa zmení názov produktu. Voľba <span class="navipath_or_inputname"> Trvalý odkaz </span> zabráni znovusestavení: ak je aktívny, pôvodný SEO URL bude zachované a nebude generované nové.',

'HELP_GENERAL_SEO_SHOWSUFFIX'                 => 'Pomocou tejto voľby nastavíte, či sa prípona názvu bude zobrazovať v titulku okna prehliadača, keď je príslušná stránka vyvolá. Prípona titulku môže byť nastavená v <span class="navipath_or_inputname"> Hlavné nastavenia -> Nastavenia -> SEO -> Suffix názvu obchodu </span>.',

'HELP_GENERAL_SEO_OXKEYWORDS'                 => 'Tieto kľúčové slová sú integrované do HTML kódu stránky (META keywords). Sú používaná vyhľadávacími roboty. Sem zadajte vhodné kľúčové slová produktu. Ak je nevyplníte, bude vygenerovaná automaticky.',

'HELP_GENERAL_SEO_OXDESCRIPTION'              => 'EO opis je integrovaný do HTML kódu stránky (META description). Tento text je často zobrazovaný vo výsledkoch vyhľadávania. Sem zadajte vhodný opis produktu. Ak zostane prázdny, bude generovaný automaticky.',



'HELP_GENIMPORT_FIRSTCOLHEADER'               => 'Aktivujte tuto volbu, pokud první řádek CSV souboru obsahuje názvy sloupečků.',

'HELP_GENIMPORT_REPEATIMPORT'                 => 'Pokud je tato volba aktivní, zobrazí se první krok po úspěšném importu, takže můžete zahajit hned další import dat.',

'HELP_LANGUAGE_DEFAULT'                       => 'Default language is used when shop is unable to detect language in other ways: language id is not defined by URL, can\'t be detected by browser, is not defined in session etc. Default language can only be disabled, deleting it is <u>not possible</u>.',

'HELP_LANGUAGE_ACTIVE'                        => "This option defines language availability in eShop's frontend: if it is activated - language is available in frontend. For working in admin area this language is always available; even if it is disabled for frontend.",

'HELP_PAYMENT_MAIN_SORT'                      => 'V <var>Triedenie</var> si môžete zvoliť poradie platobných metód zobrazených užívateľmi; metóda s najnižším číslom je prvá.',

'HELP_PAYMENT_MAIN_FROMBONI'                  => 'Na sprístupnenie platobnej metódy len užívateľom s určitým kreditom môžete použiť voľbu <var>Minimálny kredit</var>. Minimálny kredit môžete zadať v sekcii <em>Administrácia užívateľov -> Užívatelia -> Rozšírenia</em>.',

'HELP_PAYMENT_MAIN_SELECTED'                  => 'Voľba <var>Vybraná</var> slúži na určenie základnej platobnej metódy, pokiaľ majú užívatelia na výber z vacerých metód.',

'HELP_PAYMENT_MAIN_AMOUNT'                    => '' .
                                                 '',

'HELP_PAYMENT_MAIN_ADDPRICE'                  => '' .
                                                 '' .
                                                 '',

'HELP_PAYMENT_MAIN_ADDSUMRULES'               => 'When calculating price surcharge or reduction, basket value is being used as base. Define what costs will be included when calculating basket value.',

'HELP_SELECTLIST_MAIN_TITLEIDENT'             => 'In <span class="navipath_or_inputname">Working Title</span>, you can enter an additional name that is not displayed to users of your eShop. You can use the working title to differentiate between similar selection lists (e.g., Sizes for trousers and Sizes for shirts).',

'HELP_SELECTLIST_MAIN_FIELDS'                 => 'Všetky dostupné možnosti sú zobrazené v zozname <var>Polí</var>. Môžete pridat nové pole, aby boli pridané nové možnosti. Více informací v <a href="http://www.oxid-esales.com/en/resources/help-faq/eshop-manual/implementing-simple-variants-selection-lists">návodu</a> na webu OXID eSales.',

'HELP_USER_MAIN_HASPASSWORD'                  => '' .
                                                 '' .
                                                 '',

'HELP_USER_PAYMENT_METHODS'                   => ''.
                                                 ''.
                                                 '',

'HELP_USER_EXTEND_NEWSLETTER'                 => 'Táto voľba zobrazí, či užívateľ odoberá Novinky.',

'HELP_USER_EXTEND_EMAILFAILED'                => 'Pokiaľ nemôžete odoslať email zákazníkovi, aktivujte túto voľbu. Zákazníkovi už nebudú odosielané ďalšie emaily',

'HELP_USER_EXTEND_BONI'                       => 'Tu môžete upraviť kredit zákazníka. Od výšky kreditu sa odvíjajú povolené platobné metódy.',



'HELP_MANUFACTURER_MAIN_ICON'                 => 'Pomocou <var>Ikona</var> a <var>Nahrať Ikonu</var> môžete nahrať ikonu výrobcu (napr. logo). V <var>Nahrať ikonu</var> vyberte ikonu, ktorú chcete nahrať. Nahráte ju kliknutím na <var>Uložiť</var>.',



'HELP_MANUFACTURER_SEO_FIXED'                 => 'eShop môžete nechať automaticky vygenerovať nové SEO URL. Stránky výrobcu budú mať nové SEO URL, pokiaľ sa napríklad zmení titulok výrobku. Nastavenie <var>fixních URL</var> sa nezmení.',

'HELP_MANUFACTURER_SEO_KEYWORDS'              => 'Tieto kľúčové slová budú priamo v zdrojovom HTML kóde stránky výrobcu (META keywords). Kľúčové slová sú dôležité pre vyhľadávače. Kľúčové sslové môžete zadať tu. Pokiaľ ich nezadáte, budú automaticky vygenerované.',

'HELP_MANUFACTURER_SEO_DESCRIPTION'           => 'Tento popis bude priao v zdrojovom HTML kóde stránky výrobcu (META description). Popis je dôležitý pre vyhľadávače. Popis môžete zadať tu. Pokiaľ ho nezadáte, bude automaticky vygenerovaný.',

'HELP_MANUFACTURER_SEO_SHOWSUFFIX'            => 'Pomocou tejto voľby môžete nastaviť zobrazenú príponu titulku stránky výrobcu v hornej lište prehliadača. Príponu môžete nastaviť v <em>Hlavné nastavenia -> Nastavení -> SEO -> Prípona názvu obchodu</em>.',

'HELP_VOUCHERSERIE_MAIN_DISCOUNT'             => '' .
                                                 '' .
                                                 '' .
                                                 '' .
                                                 '',



'HELP_VOUCHERSERIE_MAIN_ALLOWSAMESERIES'      => 'Tu môžete rozhodnút, či môžu užívatelia používať kupóny jednej série jednotlivo',

'HELP_VOUCHERSERIE_MAIN_ALLOWOTHERSERIES'     => 'Tu môžete rozhodnút, či môžu užívatelia používať kupóny rôznych sérií naraz.',

'HELP_VOUCHERSERIE_MAIN_SAMESEROTHERORDER'    => 'Tu môžete rozhodnút, či môžu užívatelia používať viacero kupónov naraz.',

'HELP_VOUCHERSERIE_MAIN_RANDOMNUM'            => 'Pokým je táto voľba aktívna, pre každý kupón bude generovaný jedinečný kód.',

'HELP_VOUCHERSERIE_MAIN_VOUCHERNUM'           => 'Tu môžete zadať číslo kupónu. Túto možnosť využijete pri tvorbe nových kupónov, pokiaľ je neaktívne <var>Generovanie čísel</var>. Všetky kupóny série budú mať rovnaké číslo.',

'HELP_VOUCHERSERIE_MAIN_CALCULATEONCE'        => 'If you assign products or categories to your coupon, deactivate this option to calculate this coupon to each product per cart position. Activate if the coupon shall be valid only once per cart position.',

'HELP_WRAPPING_MAIN_PICTURE'                  => 'Pomocou <var>Obrázok</var> a <var>Nahrať obrázok</var> môžete nahrať obrázok darčekového balenia. V <var>Nahrát obrázek</var> vyberte obrázek a kliknutím na <var>Uložit</var> ho nahrajte.',

'HELP_PROMOTIONS_BANNER_PICTUREANDLINK'       => 'Upload banner image and enter banner URL which will be used when clicking on banner. If article is assigned to banner and URL is not entered, link to assigned article will be used when clicking on banner.',
'HELP_SHOP_PERF_SEO_CACHE'                    => 'Povolené SEO medzipamäti zvyšuje výkon, ale vyžaduje veľa miesta na disku v adresári / tmp.',

'HELP_ALTERNATIVE_IMAGE_SERVER_NOTE'          => 'Alternatívna URL na vzdialený server s obrázkami sa dá nastaviť v konfiguračnom súbore config.inc.php nastavením <i> sAltImageUrl </ i> a <i> sSSLAltImageUrl </ i>. <br> Preto všetky fotografie produktov budú načítané z tejto alternatívy namiesto lokálneho. Nahrané súbory avšak budú uložené lokálne. V tomto prípade synchronizácia k externému serveru musí byť prevedená ručne alebo pomocou vlastných skriptov.',

'HELP_SHOP_RDFA_CONTENT_OFFERER'              => 'Vyberte tu Content-stránku, v ktorej sú zobrazené Hlavné informácie k eShopu, napr. "O nás".',
'HELP_SHOP_RDFA_CONTENT_PAYMENT'              => 'Vyberte tu Content-stránku (napr."Vop/AGB"), na ktorej majú byť zobazené platobné informácie nepriradené RDFa. Ak chcete priradiť platobné metódy k RDFa , prejdite na: Nastavenie obchodu -> Spôsob platby -> RDFa.',
'HELP_SHOP_RDFA_CONTENT_DELIVERY'             => 'Vyberte tu Contet-stránku (napr."Doprava a poplatky"), pre ktoré majú byť zobrazené prepravné informácie nepriradené k RDFa. Ak chcete priradiť spôsoby dopravy k RDFa metódam ,  prejdite na: Nastavenie obchodu -> Doprava -> RDFa.',
'HELP_SHOP_RDFA_VAT'                          => 'Tato voľba určuje, či má byť daň (DPH) zahrnutá v cene a platobných a dodacích poplatkoch alebo nie.',
'HELP_SHOP_RDFA_DURATION_PRICES'              => 'Tu uveďte dobu platnosti nákladov pre produkty, platby a prepravy (napr. 1 deň, 1 týždeň).',
'HELP_SHOP_RDFA_LOGO_URL'                     => 'Web adresa loga alebo obrázku',
'HELP_SHOP_RDFA_GEO_LONGITUDE'                => 'Zemepisná dĺžka predajne v rámci geo polohy. Prosím zadajte iba čísla.',
'HELP_SHOP_RDFA_GEO_LATITUDE'                 => 'Zemepisná šírka obchodu v rámci geo polohy. Prosím zadajte iba čísla.',
'HELP_SHOP_RDFA_GLN'                          => 'Global Location Number (GLN)  spoločnosti. Global Location Number je 13-miestne číslo používané k identifikácii firmy a jej sídla.',
'HELP_SHOP_RDFA_NAICS'                        => 'North American Industry Classification System (NAICS) kód pre Vašu firmu. Viď http://www.census.gov/eos/www/naics/.',
'HELP_SHOP_RDFA_ISIC'                         => 'Medzinárodná štandardná priemyslová klasifikácia všetkých ekonomických činností (ISIC) kód pre Vašu firmu. Viď http://unstats.un.org/unsd/cr/registry/isic-4.asp.',
'HELP_SHOP_RDFA_DUNS'                         => 'Dun & Bradstreet DUNS je deväťmiestne číslo k identifikácii právnickej osoby.',
'HELP_SHOP_RDFA_SHOW_PRODUCTSTOCK'            => 'Ak je táto možnosť aktívna, znamená to, že sa zobrazuje skutočný produkt.',
'HELP_SHOP_RDFA_RATING_MIN'                   => 'Možná minimálna hodnota sa vzťahuje na stupnicu používanú pri hodnotení v obchode. Táto hodnota nie je najnižšia aktuálna hodnota výrobku!',
'HELP_SHOP_RDFA_RATING_MAX'                   => 'Možná maximálna hodnota sa vzťahuje na stupnicu použitú pri hodnotení v obchode. Táto hodnota nie je najvyššou aktuálnou hodnotou produktu!',
'HELP_SHOP_RDFA_COND'                         => 'Vyberte, čo popisuje stav produktu (nový, použitý alebo renovovaný).',
'HELP_SHOP_RDFA_FNC'                          => 'Vyberte tu obchodné funkcie produktu. Napr., či sú ponúkané k predaju, k prenájmu alebo oprave?',
'HELP_SHOP_RDFA_COSTUMER'                     => 'Typy zákazníkov, pre ktoré sú produkty eShopu platné (pre koncového užívateľa, predajcu, obchodné a/alebo verejné).',
'HELP_SHOP_RDFA_DURATION_OFFERINGS'           => 'Táto vlastnosť určuje dobu platnosti produktu, napr. 1 deň, 1 týždeň alebo 1 mesiac.',
'HELP_SHOP_PERF_SYSREQ_CHECK'                 => '',
'HELP_SHOP_CONFIG_ADDITIONAL_SERVICE_VAT_CALCULATION_BIGGEST_NET'  => 'Pre výpočet bude použitá sazba DPH produktov, ktoré majú v nákupnom košíku nejväčšiu netto hodnotu.',
'HELP_SHOP_CONFIG_ADDITIONAL_SERVICE_VAT_CALCULATION_PROPORTIONAL' => 'Pre výpočet bude použitá percentuálna čásť produktov v nákupnom košíku s rovnakou sazbou DPH.',
'HELP_SHOP_CONFIG_VIEWNETPRICE'               => 'V obchode budú ceny produktu uvedené ako netto-ceny.',
'HELP_SHOP_CONFIG_ENTERNETPRICE'              => 'V administračnej oblasti musia býť ceny produktu zadané ako netto-ceny.',

'HELP_REVERSE_PROXY_GET_FRONTEND'             => 'Kontroluje, či je reverzná proxy k dispozícii pre frontend. <br />Test môže zlyhať, pokiaľ používate odlišné protokoly (http/https) pre administráciu a frontend.',
'HELP_REVERSE_PROXY_GET_BACKEND'              => 'Administratívna oblasť je zobrazená bez reverznej proxy. Varnish header nemôže byť prijatý.',

'HELP_SHOP_CONFIG_DEBIT_OLD_BANK_INFORMATION_NOT_ALLOWED' => 'Iba IBAN a BIC môžu byť prístupné behom výstupnej kontroly. Číslo bankovného účtu a kód banky sú prístupné iba pokiaľ nieje aktívne zaškrtávacie pole.',
'HELP_SHOP_CONFIG_ENABLE_INTANGIBLE_PRODUCTS_AGREEMENT'   => 'Ak je táto voľba aktívna, uživatelia musia potvrdiť podmienky pre nehmotný produkt a stiahnutie produktu vo štvrtom kroku výstupnej kontroly. Uistite sa, že je táto voľba povolená tiež pre konkrétnu položku!',

'HELP_SHOP_CONFIG_FIELDS_CONTACTFORM'         => '',
];
