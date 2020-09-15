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
'charset'                                     => 'UTF-8',

'HELP_SHOP_SYSTEM_OTHERCOUNTRYORDER'          => 'Zde můžete nastavit, zda lze provést objednávky ze zemí, pro které není stanoveno poštovné:<ul><li>Pokud je volba aktivována, uživatel si může objednat a v průběhu tohoto procesu mu bude zobrazena informace: Pokud souhlasíte, bude Vám poštovné stanoveno dodatečně. Pokračujte nyní v objednávce.</li><li>Pokud je volba vypnutá, uživatel si nemůže objednat žádné zboží.</li></ul>',

'HELP_SHOP_SYSTEM_DISABLENAVBARS'             => 'Pokud je volba zapnutá, během závěru objednávky není zobrazena většina navigačních možností. Uživatel díky tomu není zbytečně rozptylován.',

'HELP_SHOP_SYSTEM_DEFAULTIMAGEQUALITY'        => 'Doporučené hodnoty jsou 40-80:<br><ul><li>Pod 40 je komprese příliš velká a obrázky jsou rozostřené.</li><li>Nad 80 je komprese příliš malá a vznikají velké soubory.</li></ul><br>Základní hodnota je 75.',

'HELP_SHOP_SYSTEM_LDAP'                       => 'Prosím upravte soubor core/oxldap.php.',

'HELP_SHOP_SYSTEM_SHOWVARIANTREVIEWS'         => 'Tato volba ovlivňuje, jak jsou zpracovávány recenze pro varianty - pokud je volba aktivní, poznámky variant jsou zobrazeny i u hlavního produktu.',

'HELP_SHOP_SYSTEM_VARIANTSSELECTION'          => 'V eShopu existuje mnoho seznamů, ve kterých můžete přiřazovat produkty, např. přiřazování produktů ke slevám. Pokud je tato volba aktivní, pak jsou také uvedeny v těchto seznamech i varianty.',

'HELP_SHOP_SYSTEM_VARIANTPARENTBUYABLE'       => 'Zde můžete nastavit, zda mohou být zakoupeny i rodičovské produkty.<ul><li>Pokud ano, aktivujte tuto volbu.</li><li>Pokud mohou být objednány pouze varianty, volba musí být vypnutá.</li></ul>',

'HELP_SHOP_SYSTEM_VARIANTINHERITAMOUNTPRICE'  => 'Zde můžete nastavit chování obchodu v případě zadaných odstupňovaných cen u rodičovského produktu. Pokud je volba aktivní, budou ceny tohoto produktu použity i pro jeho varianty.',

'HELP_SHOP_SYSTEM_ISERVERTIMESHIFT'           => 'Server a eShop mohou být v jiném časovém pásmu. Pomocí tohoto nastavení času lze upravit časový posun - zadejte počet hodin, které mají být přičteny / odečteny od času serveru, např. <kdb>+2</kdb> nebo <kdb>-2</kdb>',

'HELP_SHOP_SYSTEM_INLINEIMGEMAIL'             => 'Pokud je volba aktivní, obrázky v emailu se odesílají zároveň s textem. Pokud je volba vypnutá, obrázky se stahují až po otevření emailu.',

'HELP_SHOP_SYSTEM_UTILMODULE'                 => 'Zadejte zde prosím Váš php-soubor, kterým budou při spuštění obchodu přepsány funkce eShopu.',

'HELP_SHOP_CACHE_ENABLED'                     => 'Pokud je aktivováno ukládání dynamického obsahu do mezipaměti (cache), pro zvýšení výkonu je obsah cachován. Deaktivujte toto nastavení, pokud eShop ještě není v produktivním provozu a upravujete eShop(píšete moduly, upravujete šablony vzhledu atd).',

'HELP_SHOP_CACHE_LIFETIME'                    => 'Zde nastavíte, jak dlouho bude obsah v mezipaměti (cache) uložen. Výchozí hodnota je 36000 sekund.',

'HELP_SHOP_CACHE_CLASSES'                     => 'Zde nastavíte, které view-třídy adresáře jsou cachovány.<br> Měňte toto nastavení, pokud jste obeznámeni s mechanismem cachování !',

'HELP_SHOP_CACHE_REVERSE_PROXY_ENABLED'       => 'Aktivuje ukládání do mezipaměti HTTP reverzní proxy. Poznámka: Nepoužívejte s "dynamický obsah cache" ve stejnou dobu, jinak by to mohlo zpomalit výkon.',

'HELP_SHOP_CACHE_LAYOUT_CACHE_AGE'            => 'Nastaví životnost rozvržení stránky v sekundách. Bude zasílán jako hodnota headeru "Age" přes HTTP-header',

'HELP_SHOP_CONFIG_ORDEROPTINEMAIL'            => 'Pokud je volba aktivní, uživatel který si zaregistruje Novinky dostanete email s ověřovacím odkazem. Pouze pokud uživatel na odkaz klikne stává se odběratelem Novinek',

'HELP_SHOP_CONFIG_BIDIRECTCROSS'              => 'Pomocí křížového prodeje můžete nabídnout doplňkové zboží k produktu (např. k autu jsou jako křížový prodej přiřazeny pneumatiky, pak se pneumatiky zobrazí při koupi auta). <br> Pokud je aktivován obousměrný křížový prodej, vůz se zobrazí s pneumatikami a opačně.',

'HELP_SHOP_CONFIG_STOCKONDEFAULTMESSAGE'      => 'Můžete nastavit upozornění pro každý produkt, který se objeví na skladě.<br>Pokud je tato volba aktivní, pro všechny produkty se zobrazí základní upozornění <i>Připraven k odeslání.</i> <br> Další informace najdete v <a href="http://www.oxid-esales.com/de/resources/help-faq/eshop-manual/meldungen-zu-den-lagerbestaenden-einrichten" target="_blank">Manuál-Příloha: Hlášení stavu skladu</a>.',

'HELP_SHOP_CONFIG_STOCKOFFDEFAULTMESSAGE'     => 'Můžete nastavit upozornění pro každý produkt, jehož skladové zásoby jsou vyprodány.<br>Pokud je tato volba aktivní, pro všechny produkty se zobrazí základní upozornění <i>Zásoby došly a zboží musí být doobjednáno</i>.',

'HELP_SHOP_CONFIG_OVERRIDEZEROABCPRICES'      => 'Pro různé uživatele můžete nastavit různé ceny: Pro každý produkt můžete zadat cenu A, B a C. Pokud je uživatel ve skupině <i>Cena A</i>, je mu místo normální ceny zobrazena cena A.<br>Pokud je tato volba aktivní, normální cena je použita v případě, že není definována cena A, B nebo C.<br>Tuto volbu můžete aktivovat když používáte A, B a C cenu. V případě, že cena pro skupinu není definována, uživateli se zobrazí cena 0,00.',

'HELP_SHOP_CONFIG_SEARCHFIELDS'               => 'Zde můžete zadat parametry, podle kterých bude možno vyhledávat. Do každého řádku zadejte pouze jeden parametr.<br>Nejčastější parametry:<ul><li>oxtitle = Název produktu</li><li>oxshortdesc = Krátký popis</li><li>oxsearchkeys = Klíčová slova</li><li>oxartnum = Číslo produktu</li><li>oxtags	= Značky</li></ul>',

'HELP_SHOP_CONFIG_SORTFIELDS'                 => 'Zde můžete zadat parametry, podle kterých budou produkty tříděny do seznamů. Do každého řádku zadejte pouze jeden parametr.<br>Nejčastější parametry:<ul><li>oxtitle = Název produktu</li><li>oxprice = Cena</li><li>oxvarminprice = Nejnižší cena, pokud jsou povoleny různé ceny.</li><li>oxartnum = Číslo produktu</li><li>oxrating = Hodnocení</li><li>oxstock = Skladové zásoby</li></ul>',

'HELP_SHOP_CONFIG_MUSTFILLFIELDS'             => 'Zde můžete zvolit povinné registrační údaje. Do každého řádku zadejte pouze jeden údaj.<br>Nejčastější údaje:<ul><li>oxuser__oxfname = Jméno</li><li>oxuser__oxlname = Příjmení</li><li>oxuser__oxstreet = Ulice</li><li>oxuser__oxstreetnr = Číslo popisné</li><li>oxuser__oxzip = PSČ</li><li>oxuser__oxcity = Město</li><li>oxuser__oxcountryid = Země</li><li>oxuser__oxfon = Telefon</li></ul><br>Můžete také zvolit povinné údaje při zadávání odlišné doručovací adresy. Nejčastější údaje:<ul><li>oxaddress__oxfname = Jméno</li><li>oxaddress__oxlname = Příjmení</li><li>oxaddress__oxstreet = Ulice</li><li>oxaddress__oxstreetnr = Číslo popisné</li><li>oxaddress__oxzip = PSČ</li><li>oxaddress__oxcity = Město</li><li>oxaddress__oxcountryid = Země</li><li>oxaddress__oxfon = Telefon</li></ul>',

'HELP_SHOP_CONFIG_USENEGATIVESTOCK'           => 'Pomocí <span class="navipath_or_inputname">Povolit zápornou hodnotu skladových zásob</span> můžete zvolit způsob počítáni záporných skladových hodnot:<br><ul><li>Je-li volba aktivní, zásoby se počítají do záporných hodnot, pokud si uživatel objedná zboží, které právě není na skladě.</li><li>Pokud je volba vypnutá, hodnota zásob nikdy neklesne pod 0, i když si uživatel zboží objedná.</li></ul>',

'HELP_SHOP_CONFIG_SETORDELETECURRENCY'        => '',

'HELP_SHOP_CONFIG_NEWARTBYINSERT'             => 'Na titulní straně Vašeho eShopu se v kategorii <i>Právě dorazilo!</i> zobrazují nejnovější produkty. Produkty můžete řadit podle data přidání nebo data poslední změny.',

/** @deprecated since v6.5.4 (2020-04-06); Suggest feature will be removed completely */
'HELP_SHOP_CONFIG_ALLOW_SUGGEST_ARTICLE'      => '',
/** end deprecated */

'HELP_SHOP_CONFIG_SEND_TECHNICAL_INFORMATION_TO_OXID' => '',

'HELP_SHOP_CONFIG_DELETERATINGLOGS'           => 'Uživatel nemůže jeden produkt hodnotit vícekrát. Zde můžete nastavit, po jak dlouhé době uživatel může produkt znovu hodnotit. Pokud nezadáte žádnou hodnotu, produkt může být hodnocen jen jednou.',

'HELP_SHOP_CONFIG_DISABLEONLINEVATIDCHECK'    => 'Pokud zadá při objednání zákazník z cizí země v EU DPH, je DPH započítáno k objednávce. Pokud není UstId validní, DPH sazba není k objednávce připočtena.<br>Pokud je volba zakázána, je vždy započítána obecná DPH sazba.',

'HELP_SHOP_CONFIG_ALTVATIDCHECKINTERFACEWSDL' => 'Zde můžete zadat alternativní URL adresu pro online kontrolu DIČ/UstId.',

'HELP_SHOP_CONFIG_PSLOGIN'                    => 'Přihlášení do privátního prodeje mění eShop na eShop pouze pro členy. Umožňuje to vytvářet komunity zákazníků s podobnými zájmy. Toto nastavení omezuje přístup ke všem stránkám eShopu.',

'HELP_SHOP_CONFIG_BASKETEXCLUDE'              => 'Umožňuje vkládat produkty pouze z jedné (hlavní) kategorie, pokud se kategorie změní,  zákazník je požádán o dokončení objednávky (jít k platbě) nebo pokračovat v nákupu  (v tomto případě je košík vyprázdněn). Pomocí této funkce ve spojení s vhodně uspořádanou strukturou kategorií je možné implementovat oddělené košíky pro různé dodavatele.',

'HELP_SHOP_CONFIG_BASKETRESERVATION'          => 'Pokud je tato volba neaktivní, eShop snižuje množství na skladě až v okamžiku, kdy je objednávka potvrzena zákazníkem a dokončena platba.<br><br> Po aktivaci volby se funkcionalita mění: Skladová dispozice produktu se snižuje a produkt je <b>rezervován</b> v okamžiku, kdy je vložen do košíku. Rezervace je zrušena v případě, kdy je obsah košíku objednán nebo platnost košíku vyprší.',

'HELP_SHOP_CONFIG_BASKETRESERVATIONTIMEOUT'   => 'Po vypršení lhůty jsou rezervované produkty uvolněny na skladě a zákazníkův košík je vyprázdněn.',

'HELP_SHOP_CONFIG_INVITATION'                 => 'Pozvánka je pro pozvání Vašich přátel do eShopu a získání kreditních bodů za pozvání.',

'HELP_SHOP_CONFIG_POINTSFORINVITATION'        => 'Množství kreditních bodů, které uživatel dostane pokud byl pozván již registrovaným uživatelem.Pozvaný uživatel se musí registrovat, aby tyto body získal. Získané body jsou uloženy v uživatelově záznamu a provozovatel eShopu je může využít k jakémukoliv účelu.',

'HELP_SHOP_CONFIG_POINTSFORREGISTRATION'      => 'Výše uživatelských kreditů, které získá pozvaný uživatel po své registraci.',

// @deprecated since v6.5.1 (2019-02-07); credit card payment method will be no longer supported
'HELP_SHOP_CONFIG_ATTENTION'                  => 'Pozor: I když je použito šifrování, smlouvy s platebními společnostmi ukládání dat zakazují!',
// END deprecated

'HELP_SHOP_CONFIG_SHOWTSINTERNATIONALFEESMESSAGE' => 'Ve 4. kroku výstupního procesu je CMS stránka "oxtscodmessage" zobrazena dodatečně.',

'HELP_SHOP_CONFIG_SHOWTSCODMESSAGE'           => 'Ve 4. kroku výstupního procesu je CMS stránka "oxtscodmessage" zobrazena dodatečně.',

'HELP_SHOP_CONFIG_DOWNLOADS'                  => 'Obchod s produkty ke stažení. Zde aktivujete možnost objednávat a stahovat produkty.',

'HELP_SHOP_CONFIG_DOWNLOADS_PATH'             => 'Cesta k místu pro uložení stahovatelných produktů.',

'HELP_SHOP_CONFIG_MAX_DOWNLOADS_COUNT'        => 'Zde můžete nastavit, kolikrát může uživatel stahovat ze stejného odkazu. Toto je výchozí nastavení pro všechny produkty.Tuto hodnotu můžete změnit pro každý soubor produktu v Administraci produktů -> Produkty -> Ke stažení.',

'HELP_SHOP_CONFIG_LINK_EXPIRATION_TIME_UNREGISTERED' => 'Zde můžete nastavit, kolikrát může uživatel stahovat ze stejného odkazu, pokud uživatel objednal bez registrace. Toto je výchozí nastavení pro všechny produkty. Tuto hodnotu můžete změnit pro každý soubor produktů v  Administrace produktů -> Produkty -> Ke stažení.',

'HELP_SHOP_CONFIG_LINK_EXPIRATION_TIME'       => 'Zadejte čas v hodinách, udávající po jakou dobu od objednání je odkaz platný. Toto je výchozí nastavení pro všechny produkty. Tuto hodnotu můžete změnit pro každý soubor produktů v Administrace produktů -> Produkty -> Ke stažení.',

'HELP_SHOP_CONFIG_PARCELSERVICE'              => '',

'HELP_SHOP_CONFIG_DOWNLOAD_EXPIRATION_TIME'   => 'Zadejte čas v hodinách, udávající po jakou dobu od prvního stažení je odkaz platný. Toto je výchozí nastavení pro všechny produkty. Tuto hodnotu můžete změnit pro každý soubor produktů v Administrace produktů -> Produkty -> Ke stažení.',

'HELP_SHOP_CONFIG_LOADREVIEWS'                  => '',

'HELP_SHOP_CONFIG_INCLUDE_PRODUCT_REVIEW_LINKS_IN_ORDER_EMAIL' => '',

'HELP_SHOP_MALL_MALLMODE'                     => 'Tady můžete nastavit co se zobrazí na přední stránce eShopu:<ul><li><span class="navipath_or_inputname">Show shop selector</span>: A page where the different eShops can be selected is shown.</li><li><span class="navipath_or_inputname">Show main shop front page</span>: The normal front page of this Shop is shown.</li></ul>',

'HELP_SHOP_MALL_PRICEADDITION'                => 'Můžete zadat příplatek pro všechny ceny produktů v eShopu: Zadejte příplatek a zvolte zda je procentní (<span class="userinput_or_code">%</span>) nebo absolutní (<span class="userinput_or_code">abs</span>).',

'HELP_SHOP_PERF_NEWESTARTICLES'               => 'Seznam nejnovějších produktů je zobrazen v <i>Právě dorazilo!</i>. Zde můžete vybrat způsob tvorby seznamu:<ul><li><span class="navipath_or_inputname">inactive</span>: Seznam se nezobrazuje.</li><li><span class="navipath_or_inputname">manual</span>: Můžete zvolit produkty v <em>Zákaznické informace -> Akce -></em> seznam <i>Právě dorazilo!</i>.</li><li><span class="navipath_or_inputname">automatic</span>: Seznam je generován automaticky.</li></ul>',

'HELP_SHOP_PERF_TOPSELLER'                    => 'Seznam dlouhodobě oblíbených produktů se zobrazuje v <i>Dlouhodobě oblíbené zboží</i>. Zde můžete nastavit, jak má být seznam generován:<ul><li><span class="navipath_or_inputname">inactive</span>: Seznam se nezobrazuje.</li><li><span class="navipath_or_inputname">manual</span>: Můžete zvolit produkty v <em>Zákaznické informace -> Akce -></em> seznam <i>Dlouhodobě oblíbené zboží</i>.</li><li><span class="navipath_or_inputname">automatic</span>: Seznam je generován automaticky.</li></ul>',

'HELP_SHOP_PERF_LOADFULLTREE'                 => 'Pokud je volba aktivní, v navigaci se zobrazuje kompletní seznam kategorií. Zobrazit kompletní seznam lze jen v navigačním menu, které není umístěno nahoře.',

'HELP_SHOP_PERF_LOADACTION'                   => 'Pokud je tato volba aktivní, akce jako <i>Nově v nabídce!</i> a <i>Dlouhodobě oblíbené zboží</i> se zobrazují.',

'HELP_SHOP_PERF_USESELECTLISTPRICE'           => 'Můžete nastavit různé slevy. Pokud je tato volba aktivní, slevy se započítají. Pokud není, slevy se nezapočítají.',

'HELP_SHOP_PERF_DISBASKETSAVING'              => 'Košík registrovaných uživatelů se ukládá. Pokud znovu navštíví eShop, košík se jim zobrazí. Pokud aktivujete tuto volbu, obsah košíku se již nebude ukládat.',

'HELP_SHOP_PERF_LOADDELIVERY'                 => 'Pokud tato volba není aktivní, poštovné je automaticky nulové.',

'HELP_SHOP_PERF_LOADPRICE'                    => 'Pokud tato volba není aktivní, nezobrazují se ceny produktů.',

'HELP_SHOP_PERF_PARSELONGDESCINSMARTY'        => 'Pokud je tato volba aktivní, popisy kategorií a produktu jsou zpracovávány pomocí Smarty - můžete používat Smarty tagy.<br>',

'HELP_SHOP_PERF_LOADSELECTLISTSINALIST'       => 'Běžně se výběry zobrazují jen v podrobném popisu produktu. Pokud je tato volba aktivní, výběry se zobrazují vždy.',

'HELP_SHOP_PERF_CHECKIFTPLCOMPILE'            => 'Pokud je tato volba aktivována, eShop kontroluje, jestli byly změněny šablony. Pokud ano, šablona je znovu zkompilována. Pokud upravujete šablony, aktivujte tuto volbu. Deaktivujte ji, pokud je eShop v produkčním režimu, abyste zvýšili jeho výkon. <br>Bližší informace naleznete <a href="http://www.oxid-esales.com/en/resources/help-faq/eshop-manual/advices-adepting-templates" target="_blank" target="_blank">v manuálu o cachování</a>.',

'HELP_SHOP_PERF_CLEARCACHEONLOGOUT'           => 'Obvykle je kompletní chache vyprázdněna jakmile dojde k uložení změny v administraci. To může způsobovat výkonnostní problémy. Pokud je tato volba aktivní, cache se vymaže až po odhlášení z administrace eShopu.',

'HELP_SHOP_SEO_TITLEPREFIX'                   => 'Každá stránka má titulek. Titulek se zobrazuje ve vrchní liště prohlížeče. Pomocí <span class="navipath_or_inputname">Title Prefix</span> a <span class="navipath_or_inputname">Title Sufix</span> můžete přidat text před a za titulek:<br><ul><li>Do <span class="navipath_or_inputname">Title Prefix</span> zadejte text, který má být před titulkem.</li></ul>',

'HELP_SHOP_SEO_TITLESUFFIX'                   => 'Každá stránka má titulek. Titulek se zobrazuje ve vrchní liště prohlížeče. Pomocí <span class="navipath_or_inputname">Title Prefix</span> a <span class="navipath_or_inputname">Title Sufix</span> můžete přidat text před a za titulek:<br><ul><li>Do <span class="navipath_or_inputname">Title Sufix</span> zadejte text, který má být za titulkem.</li></ul>',

'HELP_SHOP_SEO_IDSSEPARATOR'                  => 'Oddělovač se používá u víceslovných názvů místo mezer např. www.vasobchod.cz/kategorie-s-víceslovným-názvem<br>Pokud není zadán, je použit znak "-" (pomlčka) jako oddělovač.',

'HELP_SHOP_SEO_SAFESEOPREF'                   => 'Pokud je v kategorii více produktů se stejným jménem, mají stejné SEO URL. Z tohoto důvodu mají pro odlišení také SEO příponu. Pokud žádnou příponu nedefinujete, bude použito <span class="filename_filepath_or_italic">oxid</span> jako standard.',

'HELP_SHOP_SEO_RESERVEDWORDS'                 => 'Některá URL jsou potřebná pro provoz eShopu, např. www.vasobchod.cz/admin pro přístup do administrace. Pokud pojmenujete kategorii <i>admin</i> SEO URL bude také www.vasobchod.cz/admin, do kategorie se tedy nebudete schopni dostat. Proto bude použita SEO URL přípona. Zde můžete nadefinovat, ke kterým URL má být přípona přidána automaticky.',

'HELP_SHOP_SEO_SKIPTAGS'                      => 'Pokud pro kategorii nevytvoříte META tagy, budou vytvořeny automaticky z popisu produktu. Proto by některá, příliš často se vyskytující slova, měla být vynechána. Tyto slova pro vynechání je možno zapsat do tohoto seznamu.',

'HELP_SHOP_SEO_LOWERCASEURLS'                 => '',

'HELP_SHOP_SEO_STATICURLS'                    => 'Pro některé stránky v eShopu (např. Podmínky užití) můžete definovat pro vyhledávače "přívětivé" pevná URL. Pokud vyberete statickou URL, pak bude v poli <span class="navipath_or_inputname">Standard URL</span> zobrazena normální URL. Můžete také zadat URL pro každý jazyk zvlášť.',

'HELP_SHOP_MAIN_PRODUCTIVE'                   => 'Pokud tato volba <span class="warning_or_important_hint">není</span> aktivní, informace o délce zpracování a debugovací informace jsou zobrazeny na konci každé stránky. Tyto informace jsou užitečné při nastavování eShopu.<br><span class="warning_or_important_hint">Aktivujte tuto volbu v případě, že je eShop v ostrém provozu. Tímto se Vašim zákazníkům nebudou žádné dodatečné informace zobrazovat.</span><br>Další důležité informace naleznete <a href="http://wiki.oxidforge.org/Tutorials/Check_before_going_live" target="_blank">zde</a>',

'HELP_SHOP_MAIN_ACTIVE'                       => '<span class="navipath_or_inputname">Aktivní</span> můžete zapnout / vypnout celý eShop. Pokud je eShop vypnutý, uživatelům se zobrazí zpráva o jeho dočasné nedostupnosti.',

'HELP_SHOP_MAIN_INFOEMAIL'                    => 'Všechny emaily odeslané přes Kontaktujte nás! budou zaslány na tuto adresu.',

'HELP_SHOP_MAIN_ORDEREMAIL'                   => 'Zákazníkovi bude zaslán email s informacemi o jeho objednávce. Odpovědi na tyto emaily budou zaslány na <span class="navipath_or_inputname">objednávkový email</span>.',

'HELP_SHOP_MAIN_OWNEREMAIL'                   => 'Pokud si zákazník něco objedná, bude Vám zaslán email s informacemi o objednávce. Tento email bude zaslán na <span class="navipath_or_inputname">Email objednávek</span>.',

'HELP_SHOP_MAIN_SMTPSERVER'                   => 'SMTP údaje potřebné pro odesílání emailů (např. zasílání zákazníkům potvrzení objednávky emailem). Další informace lze nalézt v <a href="http://www.oxid-esales.com/de/resources/help-faq/eshop-manual/entering-smtp-data" target="_blank">Návod eShopu</a>.',

'HELP_ARTICLE_MAIN_ALDPRICE'                  => 'Pomocí <span class="navipath_or_inputname">Alternativních cen</span> můžete nastavit speciální ceny pro některé uživatele. Více informací najdete v <a href="http://www.oxid-esales.com/de/resources/help-faq/eshop-manual/set-alternative-prices-special-users">nápovědě</a> na webu OXID.',

'HELP_ARTICLE_MAIN_VAT'                       => 'Zde můžete zadat speciální DPH sazbu pro produkt. Tato DPH sazba se použije ve všech kalkulacích (košík, objednávka, faktura)',

'HELP_ARTICLE_EXTEND_UNITQUANTITY'            => '<span class="navipath_or_inputname">Počet kusů</span> a <span class="navipath_or_inputname">Balení</span> Vám umožňuje zobrazit cenu za jednotku (např. 20 Kč za litr). <span class="navipath_or_inputname">Počet kusů</span> je množství produktů (např. <span class="navipath_or_inputname">5</span>), <span class="navipath_or_inputname">Balení</span> je množství (např. <span class="navipath_or_inputname">litr</span>). Cena za jednotku se zobrazuje u produktu',

'HELP_ARTICLE_EXTEND_EXTURL'                  => 'Do pole <span class="navipath_or_inputname">Externí odkaz</span> můžete zadat odkaz týkající se produktu (např. web výrobce). Do pole <span class="navipath_or_inputname">text externího odkazu</span> zadejte text, který bude sloužit jako popis odkazu, např. <span class="navipath_or_inputname">Více informací od výrobce</span>.',

'HELP_ARTICLE_EXTEND_TPRICE'                  => 'Do pole <span class="navipath_or_inputname">Doporučená maloobchodní cena</span> zadejte doporučenou maloobchodní cenu. Bude zobrazena zákazníkům. Nad cenou produktu se zobrazí<i>Zlevněno z doporučené ceny</i>.',

'HELP_ARTICLE_EXTEND_QUESTIONEMAIL'           => 'Do pole <span class="navipath_or_inputname">Alternativní kontakt</span> zadejte Váš email. Pokud bude mít zákazník otázku k produktu, bude odeslána na tento email. Pokud nezadáte žádnou adresu, dotaz bude zaslán na Váš informační email.',

'HELP_ARTICLE_EXTEND_NONMATERIAL'             => 'Nastavení variant je zděděno z nadřazeného produktu a vztahuje se na celý produkt.',

'HELP_ARTICLE_EXTEND_FREESHIPPING'            => 'Nastavení variant je zděděno z nadřazeného produktu a vztahuje se na celý produkt.',

'HELP_ARTICLE_EXTEND_BLFIXEDPRICE'            => 'Cenový alarm lze pro tento produkt vypnout.',

'HELP_ARTICLE_EXTEND_SKIPDISCOUNTS'           => 'Pokud <span class="navipath_or_inputname">Přeskočit všechny negativní slevy</span> je aktivní, negativní slevy se do ceny zboží nezapočítají.',

'HELP_ARTICLE_EXTEND_TEMPLATE'                => 'Deatil produktu může být zobrazen jinou šablonou. Název cesty a souboru šablony zadejte do tohoto políčka. Další informace jsou k dispozici v <a href="http://www.oxid-esales.com/de/resources/help-faq/eshop-manual/display-certain-products-or-categories-another-template" target="_blank">příslušné části návodu</a>.',

'HELP_ARTICLE_EXTEND_ISCONFIGURABLE'          => 'Pokud je volba zaškrtnuta, zobrazuje se v detailu produktu a nákupním košíku pole s poznámkou. Tam mohou zákazníci zadat text s doplňující informací.<br>Typickým příkladem mohou být trička, na  které může být dotisknut vlastní text. Do pole zadá zákazník text, který bude vytištěn na tričku.',

'HELP_ARTICLE_EXTEND_UPDATEPRICE'             => 'Ceny se mohou měnit v definovaném čase. Zadané ceny aktualizují standardní ceny. Pokud má cena hodnotu "0", nebudou se ceny aktualizovat.',

'HELP_ARTICLE_EXTEND_SHOWCUSTOMAGREEMENT'     => 'Pokud je tato volba aktivována, uživatelé musí potvrdit podmínky a požadavky ve čtvrtém kroku výstupní kontroly u této konkrétní položky. Prosím, ujistěte se, že hlavní nastavení je rovněž aktivní a produkt je nehmotný, nebo ke stažení.',

'HELP_ARTICLE_FILES_MAX_DOWNLOADS_COUNT'      => 'Zde můžete nastavit, jak často si může uživatel stahovat ze stejného spojení. V tomto souboru můžete přepsat výchozí nastavení, které bylo definováno v Hlavní nastavení -> Nastavení -> Nastavení -> Soubory ke stažení pro všechny produkty.',

'HELP_ARTICLE_FILES_LINK_EXPIRATION_TIME_UNREGISTERED' => 'Zadejte čas v hodinách, odkaz ke stažení je platný až po prvním stažení. V tomto souboru můžete přepsat výchozí nastavení, které bylo definováno v Hlavní nastaveni-> Nastavení -> Nastavení -> Soubory ke stažení pro všechny produkty.',

'HELP_ARTICLE_FILES_LINK_EXPIRATION_TIME'     => 'Zadejte čas v hodinách, po který je odkaz ke stažení platný po objednání. V tomto souboru můžete přepsat výchozí nastavení, které bylo definováno v Hlavní nastavení -> Nastavení -> Nastavení -> Soubory ke stažení pro všechny produkty.',

'HELP_ARTICLE_FILES_NEW'                      => 'Zadejte název přenášeného souboru přes FTP nebo nahrejte zde nový soubor. Velké soubory by měly být nahrané přes FTP. Omezení velikosti souboru je platná pouze tehdy, pokud soubor je načten přes administrační rozhraní. Toto omezení závisí na nastavení PHP serveru a mohou být pouze tam upraveny .',

'HELP_ARTICLE_FILES_DOWNLOAD_EXPIRATION_TIME' => 'Zadejte čas v hodinách, odkaz ke stažení je platný až po prvním stažení. V tomto souboru můžete přepsat výchozí nastavení, které bylo definováno v Hlavní nastaveni-> Nastavení -> Nastavení -> Soubory ke stažení pro všechny produkty.',

'HELP_ARTICLE_PICTURES_ICON'                  => 'Ikony jsou nejmenší obrázky produktu. Například, jsou používány v nákupním košíku.<br>Nahrání vlastní ikony nahradí automaticky generovanou ikonu, která je vygenerována z prvního obrázku.<br>Název ikony je zobrazen v poli Ikona. Pokud nebyla ikona dosud nahrána, je zobrazeno ---.<br>Další informace jsou k dispozici v <a href="http://www.oxid-esales.com/en/resources/help-faq/eshop-manual/product-images-basics" target="_blank">části manuálu obrázky produktů</a>.',

'HELP_ARTICLE_PICTURES_THUMB'                 => 'Náhledy jsou malé obrázky produktu. Jsou použity například v přehledech produktů (kategorie, výsledky vyhledávání).<br>Náhled můžete nahrát pomocí<span class="navipath_or_inputname">Nahrání náhledu</span>. Po nahrání, název souboru náhledu se zobrazuje v <span class="navipath_or_inputname">Náhled</span>. Pokud nebyl ješte náhled nahrán, zobrazuje se <span class="userinput_or_code">nopic.jpg</span>.<br>Název náhledu je zobrazen v poli Náhled. Pokud nebyl náhledový obrázek dosud nahrán, je zobrazeno ---.<br>Další informace jsou k dispozici v <a href="http://www.oxid-esales.com/en/resources/help-faq/eshop-manual/product-images-basics" target="_blank">části manuálu obrázky produktů</a>.',

'HELP_ARTICLE_PICTURES_PIC1'                  => 'Obrázky jsou zobrazeny v detailním pohledu na produkt. Můžete nahrát až 7 obrázků pro jeden produkt. Po nahrání obrázku je jeho název zobrazen v příslušném poli. Pokud nebyl obrázek nahrán, je zobrazeno ---.</br>Můžete uploadovat obrázky v maximální velikosti 2MB a rozlišení 1500 * 1500 pixelů. Toto omezení nezpůsobuje problémy s limitem paměti v PHP. Po nahrání obrázku se hlavní obrázek, zoom obrázek, náhled a ikona vygnererují automaticky.<br>Další informace jsou k dispozici v <a href="http://www.oxid-esales.com/en/resources/help-faq/eshop-manual/product-images-basics" target="_blank">části manuálu obrázky produktů</a>.',

'HELP_ARTICLE_PICTURES_ZOOM1'                 => 'Zoom obrázky jsou obrázky ve velkém rozlišení, které se zobrazí po kliknutí na obrázek v detailním pohledu na produkt. </br>Zoom-obrázky můžete nahrát v <span class="navipath_or_inputname">Zoom X upload</span>. Po nahrání, je název souboru zobrazen v <span class="navipath_or_inputname">Zoom X</span>. Pokud dosud nebyl nahrán zoom-obrázek, je zobrazen <span class="userinput_or_code">nopic.jpg</span>.<br>Další informace jsou k dispozici v <a href="http://www.oxid-esales.com/en/resources/help-faq/eshop-manual/product-images-basics" target="_blank">části manuálu obrázky produktů</a>.',

'HELP_ARTICLE_STOCK_REMINDACTIV'              => 'Pomocí <span class="navipath_or_inputname">Odeslat upozornění při dosažení určitého stavu skladových zásob</span> můžete zadat stav zásob, při kterých má být odesláno upozornění. Aktivujte nabídku a zadejte stav, pokud chcete být upozorněni.',

'HELP_ARTICLE_STOCK_STOCKFLAG'                => 'Existují 4 <span class="navipath_or_inputname">způsoby zobrazení produktů</span> :<ul><li><span class="navipath_or_inputname">Standardní</span>: produkt může být objednán, i když je vyprodán.</li><li><span class="navipath_or_inputname">Externí sklad</span>: produkt je vždy zobrazen jako <i>na skladu</i>.</li><li><span class="navipath_or_inputname">Vyprodán</span>: produkt není vůbec zobrazen.</li><li><span class="navipath_or_inputname">Vyprodán, neobjednatelný</span>: produkt je zobrazen ale nelze ho objednat.</li></ul>',

'HELP_ARTICLE_IS_DOWNLOADABLE'                => 'Soubory tohoto produktu lze stáhnout.',

'HELP_ARTICLE_STOCK_REMINDAMAOUNT'            => 'S <span class="navipath_or_inputname">odeslat email, pokud skladové zásoby klesnou pod určitou hodnotu</span> můžete specifikovat, že bude zaslán email jakmile stav skladu klesne na zadanou hodnotu. Zaškrtněte volbu a zadejte úroveň záspob, na kterou chcete být upozorněni.',

'HELP_ARTICLE_STOCK_DELIVERY'                 => 'Zde můžete zadat datum, od kterého bude vyprodaný produkt znovu dostupný. Datum zadejte ve formátu rok-měsíc-den, např. 2014-02-16.',

'HELP_ARTICLE_SEO_FIXED'                      => 'Můžete nechat eShop vygenerovat nové SEO URL. Stránky produktu budou mít nové SEO URL pokud se například změní titulek produktu. Nastavení <span class="navipath_or_inputname">fixních URL</span> se nezmění.',

'HELP_ARTICLE_SEO_KEYWORDS'                   => 'Tyto klíčová slova budou přímo v HTML zdrojovém kódu stránky produktu (META keywords). Klíčová slova jsou důležitá pro vyhledávače. Zde můžete klíčová slova zadat. Pokud je nezadáte, budou automaticky vygenerována.',

'HELP_ARTICLE_SEO_DESCRIPTION'                => 'Tento popis bude přímo v  HTML zdrojovém kódu stránky produktu (META description). Popis je důležitý pro vyhledávače. Zde můžete popis zadat. Pokud jej nezadáte, budou automaticky vygenerována.',

'HELP_ARTICLE_SEO_ACTCAT'                     => 'Můžete zadat různá SEO URL pro jeden produkt (např. pro různé kategorie). Pomocí <span class="navipath_or_inputname">aktivovat kategorii/výrobce</span> vyberete SEO URL, které chcete změnit.',

'HELP_ARTICLE_STOCK_STOCKTEXT'                => 'Zde můžete napsat zprávu, která je zobrazena v případě, že produkt je na skladě. Další informace o skladových zprávách jsou k dispozici v <a href="http://www.oxid-esales.com/en/resources/help-faq/eshop-manual/setting-messages-stock-levels" target="_blank">části manuálu o skladových zprávách</a>.',

'HELP_ARTICLE_STOCK_NOSTOCKTEXT'              => 'Zde můžete napsat zprávu, která je zobrazena v případě, že produkt není na skladě. Další informace o skladových zprávách jsou k dispozici v <a href="http://www.oxid-esales.com/en/resources/help-faq/eshop-manual/setting-messages-stock-levels" target="_blank">části manuálu o skladových zprávách</a>.',

'HELP_ARTICLE_STOCK_AMOUNTPRICE_AMOUNTFROM'   => 'V <span class="navipath_or_inputname">Množství od/do</span> nastavte pro jaký rozsah je platná cena.<br>Další informace o množstevních slevách jsou k dispozici v <a href="http://www.oxid-esales.com/en/resources/help-faq/eshop-manual/setting-graduated-prices" target="_blank">části manuálu o množstevních slevách</a>.',

'HELP_ARTICLE_STOCK_AMOUNTPRICE_PRICE'        => 'Zde  <span class="navipath_or_inputname">Cena </span> můžete nastavit cenu pro množství zadaném výše. Cenu můžete zadat absolutně nebo jako procentuální slevu.<br> Další informace o množstevních slevách jsou k dispozici v <a href="http://www.oxid-esales.com/en/resources/help-faq/eshop-manual/setting-graduated-prices" target="_blank">části manuálu o množstevních slevách</a>.',

'HELP_ARTICLE_VARIANT_VARNAME'                => '<span class="navipath_or_inputname">Jméno výběru</span> určuje, jak bude výběr variant pojmenován, například<span class="userinput_or_code">Barva</span> nebo <span class="userinput_or_code">Velikost</span>.<br> Další informace jsou k dispozici v <a href="http://www.oxid-esales.com/en/resources/help-faq/eshop-manual/setting-variants-a-product" target="_blank">části manuálu o variantách produktů</a>.',

'HELP_ATTRIBUTE_MAIN_DISPLAYINBASKET'         => 'Je-li zaškrtnuto, bude hodnota tohoto atributu zobrazena v košíku a přehledu objednávek pod názvem produktu.',

'HELP_CATEGORY_MAIN_HIDDEN'                   => 'Pomocí <span class="navipath_or_inputname">Skrýt</span> můžete uživatelům skrýt ú zobrazit kategorii. Uživatelům nebudou zobrazeny skryté kategorie.',

'HELP_CATEGORY_MAIN_PARENTID'                 => 'V <span class="navipath_or_inputname">podkategorii</span> můžete nastavit kategorii, ke které podkategorie náleží:<br><ul><li>Pokud podkategorie nepatří do žádné kategorie, zadejte <span class="navipath_or_inputname">--</span> Off.</li><li>Pokud podkategorie do některé kategorie patří, vyberte ji.</li></ul>',

'HELP_CATEGORY_MAIN_EXTLINK'                  => '<span class="navipath_or_inputname">Externí odkaz</span> se uživateli otevře po kliknutí na danou kategorii. <strong>Tuto funkci používejte jen pokud chcete odkaz zobrazit v seznamu kategorií!</strong>',

'HELP_CATEGORY_MAIN_PRICEFROMTILL'            => 'V poli<span class="navipath_or_inputname">Cena od / do</span> můžete nastavit zobrazení <strong>všech</strong> produktů s cenou v zadaném intervalu v jedné kategorii.',

'HELP_CATEGORY_MAIN_DEFSORT'                  => 'V poli <span class="navipath_or_inputname">Rychlé třídění</span> zadejte, podle čeho mají být kategorie a produkty tříděny. Více v <a href="http://www.oxid-esales.com/en/resources/help-faq/eshop-manual/sorting-products">návodu</a> na webu OXID eSales.',

'HELP_CATEGORY_MAIN_SORT'                     => 'Můžete použít <span class="navipath_or_inputname">Třízení</span> pro definování pořadí, ve kterém budou zobrazeny kategorie - kategorie s nejnižším číslem bude nahoře.',

'HELP_CATEGORY_MAIN_THUMB'                    => '<span class="navipath_or_inputname">Obrázky</span> a <span class="navipath_or_inputname">Nahrát obrázek</span> slouží k nahrání obrázku kategorie. Obrázek se zobrazí nahoře v prohlížené kategorii. Pomocí <span class="navipath_or_inputname">Nahrát obrázek</span> vyberete a kliknutím na <span class="navipath_or_inputname">Uložit</span> nahrajete obrázek. Potom ho najdete v záložce <span class="navipath_or_inputname">Obrázky</span>.',

'HELP_CATEGORY_MAIN_PROMOTION_ICON'           => 'Pomocí <span class="navipath_or_inputname">ikony promoakcí</span> a <span class="navipath_or_inputname">ikony uploadu</span> můžete nahrát obrázek kategorie, který se použije pro promoakce na úvodní stránce. Zobrazovaní promoakcí kategorií naleznete v <span class="navipath_or_inputname">Hlavní nastavení -> Cusomer Info -> Top offer in categories</span>',

'HELP_CATEGORY_MAIN_SKIPDISCOUNTS'            => '<li>Pokud je <span class="navipath_or_inputname">přeskočit všechny negativní slevy</span> aktivní, negativní slevy nebudou započteny.',

'HELP_CATEGORY_SEO_FIXED'                     => 'Můžete nechat eShop vygenerovat nové SEO URL. Stránky produktu budou mít nové SEO URL pokud se například změní titulek produktu. Nastavení <span class="navipath_or_inputname">fixních URL</span> se nezmění.',

'HELP_CATEGORY_SEO_KEYWORDS'                  => 'Tyto klíčová slova budou přímo v HTML zdrojovém kódu stránky produktu (META keywords). Klíčová slova jsou důležitá pro vyhledávače. Zde můžete klíčová slova zadat. Pokud je nezadáte, budou automaticky vygenerována.',

'HELP_CATEGORY_SEO_DESCRIPTION'               => 'Tento popis bude přímo v  HTML zdrojovém kódu stránky produktu (META description). Popis je důležitý pro vyhledávače. Zde můžete popis zadat. Pokud jej nezadáte, budou automaticky vygenerována.',

'HELP_CATEGORY_SEO_SHOWSUFFIX'                => 'Pomocí tohoto nastavení můžete specifikovat příponu titulku, který se zobrazí v liště prohlížeče. Přípona může být nastavena v <em>Hlavní nastavení -> Nastavení -> SEO -> Sufix názvu obchodu</em>.',

'HELP_CONTENT_MAIN_SNIPPET'                   => 'Můžete vložit tuto CMS stránku bez dalších stránek pomocí funkce ident: [{ oxcontent ident="ident_of_the_cms_page" }]',

'HELP_CONTENT_MAIN_MAINMENU'                  => 'Pokud vyberete <span class="navipath_or_inputname">Menu výše</span>, odkaz na tuto CMS se zobrazí v menu výše (v Podmínkách užití a O nás).',

'HELP_CONTENT_MAIN_CATEGORY'                  => 'Pokud vyberete <var>Kategorie</var>, odkaz na tuto CMS stránku je zobrazen v navigaci nad kategoriemi.',

'HELP_CONTENT_MAIN_MANUAL'                    => 'Pokud vyberete <var>Manuální</var>, vytvoří se odkaz, což se hodí pro přidání jedné CMS stránky do další. Odkaz se objeví po kliknutí na <var>Uložit</var>',

'HELP_CONTENT_SEO_FIXED'                      => 'Můžete nechat eShop vygenerovat nové SEO URL. Stránky produktu budou mít nové SEO URL pokud se například změní titulek produktu. Nastavení <var>fixních URL</var> se nezmění.',

'HELP_CONTENT_SEO_KEYWORDS'                   => 'Tyto klíčová slova budou přímo v HTML zdrojovém kódu CMS stránky produktu (META keywords). Klíčová slova jsou důležitá pro vyhledávače. Zde můžete klíčová slova zadat. Pokud je nezadáte, budou automaticky vygenerována.',

'HELP_CONTENT_SEO_DESCRIPTION'                => 'Tento popis bude přímo v  HTML zdrojovém kódu CMS stránky produktu (META description). Popis je důležitý pro vyhledávače. Zde můžete popis zadat. Pokud jej nezadáte, budou automaticky vygenerována.',

'HELP_DELIVERY_MAIN_COUNTRULES'               => 'V <var>pravidlech výpočtů</var> lze nastavit, jak často má být vypočítávána cena:<ul><li><kbd>Jednou</kbd>: cena se vypočítá na konci objednávky.</li><li><kbd>Jednou pro každé zboží</kbd>: cena se počítá pro každé zboží v košíku nehledě na množství.</li><li><kbd>Pro každý produkt</kbd>: cena se počítá pro každý kus.</li></ul>',

'HELP_DELIVERY_MAIN_CONDITION'                => 'V <span class="navipath_or_inputname">Podmínky</span> můžete nastavit, jak bude účtováno poštovné. Můžete volit ze 4 podmínek:<ul><li><kbd>Počet</kbd>: podle počtu produktů v košíku.</li><li><kbd>Velikost</kbd>: podle velikosti všech produktů. V tomto případě musí být zadána velikost jednotlivých produktů.</li><li><kbd>Hmotnost</kbd>: podle váhy všech produktů. V tomto případě musí být zadána hmotnost jednotlivých produktů.</li><li><kbd>Cena</kbd>: podle ceny produktů.</li></ul>Můžete zadat symboly <var>>=</var> (větší nebo rovno) a <var><=</var> (menší nebo rovno) pro zadání limitů.',

'HELP_DELIVERY_MAIN_PRICE'                    => 'Můžete použít <var>Slevy / poplatky</var> pro volbu výpočtu poštovného. Existují dva způsoby:<ul><li>Pomocí <kbd>abs</kbd>, cena je pevně dána (např.: <kbd>6.50</kbd>, cena je 6,50 Kč).</li><li>Pomocí <kbd>%</kbd>, cena tvoří procento z ceny produktu (např.: <kbd>10</kbd>, poštovné stojí 10% ceny produktu).</li></ul>',

'HELP_DELIVERY_MAIN_ORDER'                    => 'Můžete použít <span class="navipath_or_inputname">Pořadí výpočtů pravidel</span> pro určení pořadí, ve kterém budou použity metody výpočtu poštovného. Metoda s nejnižším číslem bude použita první. Pořadí je důležité, pokud je aktivní volba <var>Nepočítat dále, po tomto pravidlu</var>.',

'HELP_DELIVERY_MAIN_FINALIZE'                 => 'Pomocí <span class="navipath_or_inputname">Nepoužít žádné další pravidlo po tomto</span> můžete nastavit, aby se nepoužilo žádné další pravidlo pro výpočet poštovného,i když je aktivní. Pro toto nastavení je důležité pořadí pravidel zasilatelských nákladů: je stanoveno pomocí <span class="navipath_or_inputname">Pořadí výpočtu pravidel</span>.',

'HELP_DELIVERYSET_MAIN_POS'                   => '<span class="navipath_or_inputname">Třídění</span> definuje pořadí, v jakém jsou metody způsobu dodání zobrazeny uživateli. Metoda s nejnižším číslem je nahoře.',

'HELP_DISCOUNT_MAIN_SORT'                     => '',

'HELP_DISCOUNT_MAIN_PRICE'                    => 'Můžete použít <var>Kupní ceny</var> pro specifikováni pro které kupní ceny platí sleva. Pokud sleva platí pro všechny ceny, zadejte <kbd>0</kbd> do <var>Od</var> a <kbd>0</kbd> do <var>Do</var>.',

'HELP_DISCOUNT_MAIN_AMOUNT'                   => 'Můžete použít <var>Množství</var> pro specifikování množství, pro které sleva platí. Pokud sleva platí pro libovolné množství, zadejte <kbd>0</kbd> do <var>Od</var> a <kbd>0</kbd> do <var>Do</var>.',

'HELP_DISCOUNT_MAIN_REBATE'                   => 'Záložka <var>Slevy</var> slouží k nastavení parametrů slev. Můžete volit mezi dvěma typy slev:<ul><li><kbd>abs</kbd>: uvedená částka je velikostí slevy, např. 50 Kč.</li><li><kbd>%</kbd>: sleva je rovna části ceny objednávky, např. sleva 10%.</li>',

'HELP_GENERAL_SEO_ACTCAT'                     => 'Můžete vytvořit několik SEO odkazů pro produkty: Pro některé kategorie a stránky výrobce. S <span class="navipath_or_inputname">Aktivovat kategorii / výrobce</span> vyberete SEO URL, kterou chcete upravit.',

'HELP_GENERAL_SEO_FIXED'                      => 'eShop automaticky generuje SEO URL. Například, stránka produktu získá nový odkaz, pokud se změní název produktu. Volba <span class="navipath_or_inputname">Trvalý odkaz</span> zabrání znovusestavení: pokud je aktivní, původní SEO URL bude zachováno a nebude generováno nové.',

'HELP_GENERAL_SEO_SHOWSUFFIX'                 => 'Pomocí této volby nastavíte, jestli se přípona názvu bude zobrazovat v titulku okna prohlížeče, když je příslušná stránka načtena. Přípona titulku může být nastavena v <span class="navipath_or_inputname">Hlavní nastavení -> Nastavení -> SEO -> Suffix názvu obchodu</span>.',

'HELP_GENERAL_SEO_OXKEYWORDS'                 => 'Tyto klíčová slova jsou integrována do HTML kódu stránky (META keywords). Jsou užívána vyhledávacími roboty. Sem zadejte vhodná klíčová slova produktu. Pokud je nevyplníte, budou vygenerována automaticky.',

'HELP_GENERAL_SEO_OXDESCRIPTION'              => 'SEO popis je integrován do HTML kódu stránky (META description). Tento text je čast zobrazován ve výsledcích vyhledávání. Sem zadejte vhodný popis produktu. Pokud zůstane prázdný, bude generován automaticky.',

'HELP_GENIMPORT_FIRSTCOLHEADER'               => 'Aktivujte tuto volbu, pokud první řádek CSV souboru obsahuje názvy sloupečků.',

'HELP_GENIMPORT_REPEATIMPORT'                 => 'Pokud je tato volba aktivní, zobrazí se opět první krok po úspěšném importu, takže můžete zahajit hned další import dat.',

'HELP_LANGUAGE_DEFAULT'                       => 'Výchozí jazyk, který je použit v případě, kdy eShop nemůže detekovat jayzkovou mutaci jiným způsobem: jazyk nebyl rozpoznán v URL, nemohl být detekován prohlížečem, není definován v relaci. Výchozí jazyk <u>nemůže být smazán</u>, může být pouze deaktivován.',

'HELP_LANGUAGE_ACTIVE'                        => 'Toto nastavení povoluje jazykové mutace, které budou dostupné ve frontendu eShopu. V administraci eShopu je jazyk vždy k dispozici, i když byl pro frontend eShopu deaktivován.',

'HELP_PAYMENT_MAIN_SORT'                      => 'V <span class="navipath_or_inputname">Třízení</span> můžete zvolit pořadí platebních metod zobrazených uživateli; metoda s nejnižším číslem je první.',

'HELP_PAYMENT_MAIN_FROMBONI'                  => 'Můžete použít volbu <span class="navipath_or_inputname">Minimální kredit</span> pro zpřístupnění platební metody jen uživatelům s určitým kreditem. Minimální kredit můžete zadat v sekci <em>Administrace uživatelů -> Uživatelé -> Rozšíření</em>.',

'HELP_PAYMENT_MAIN_SELECTED'                  => 'Volba <span class="navipath_or_inputname">Vybraná</span> slouží k určení základní platební metody pokud mají uživatelé na výběr z více metod.',

'HELP_PAYMENT_MAIN_AMOUNT'                    => 'Můžete použít volbu <span class="navipath_or_inputname">Cena koupě</span> pro zpřístupněné platební metody pouze od určité ceny objednávky. Pole <span class="navipath_or_inputname">Od</span> a <span class="navipath_or_inputname">Do</span> slouží k nastavení rozsahu.<br>Pokud je platební metoda volně dostupná, musíte zadat tyto údaje: <span class="navipath_or_inputname">0</span> do pole <span class="navipath_or_inputname">Od</span>  a <span class="navipath_or_inputname">99999999</span> do pole <span class="navipath_or_inputname">Do</span>.',

'HELP_PAYMENT_MAIN_ADDPRICE'                  => 'V <span class="navipath_or_inputname">Slevy / poplatky</span>, je dána cena pro platební metodu . Cena může být zadána dvěma způsoby:<ul><li>Pomocí <span class="navipath_or_inputname">abs</span>, cena je dána pro konkrétní metodu (např.: <span class="navipath_or_inputname">750</span>, cena je 750 Kč).</li><li>Pomocí <span class="navipath_or_inputname">%</span>, cena se odvíjí od výše objednávky (např.: <span class="navipath_or_inputname">2</span>, cena tvoří 2% objednávky).</li></ul>',

'HELP_PAYMENT_MAIN_ADDSUMRULES'               => 'V okamžiku výpočtu ceny příplatku nebo slevy, je hodnota košíku brána jako základ. Zvolte, jaké náklady budou do ceny košíku zahrnuty.',

'HELP_SELECTLIST_MAIN_TITLEIDENT'             => 'V <span class="navipath_or_inputname">Pracovní název</span> můžete zadat dodatečný název, který ale nebude uživatelům Vašeho eShopu zobrazen. Tento pracovní název můžete např. použít pro rozlišení podobných výběrových seznamů (např. <span class="filename_filepath_or_italic">Velikost pro kalhoty</span> a <span class="filename_filepath_or_italic">Velikost pro košile</span>).',

'HELP_SELECTLIST_MAIN_FIELDS'                 => 'Všechny dostupné možnosti jsou zobrazeny v seznamu <span class="navipath_or_inputname">Polí</span>. Můžete přidat nové pole pro přidání nových možností. Více informací v <a href="http://www.oxid-esales.com/en/resources/help-faq/eshop-manual/implementing-simple-variants-selection-lists">návodu</a> na webu OXID eSales.',

'HELP_USER_MAIN_HASPASSWORD'                  => 'Zde můžete rozeznat, jestli je uživatel, který si objednává zboží, registrován:<ul><li>Pokud je zvoleno heslo, uživatel je registrován.</li><li>Pokud není zvolené heslo, uživatel registrován není.</li></ul>',

'HELP_USER_PAYMENT_METHODS'                   => 'Na této záložce můžete:
<ul>
   <li>Prohlížet a nastavovat existující platební metody uživatelů.</li>
   <li>Vytvářet nové platební metody a nastavovat defaultní hodnoty, např. inkaso.</li>
</ul>',

'HELP_USER_EXTEND_NEWSLETTER'                 => 'Tato volba zobrazí, jestli uživatel odebírá Novinky.',

'HELP_USER_EXTEND_EMAILFAILED'                => 'Pokud nemůžete odeslat email zákazníkovi, např. z důvodu neplatné emailové adresy, aktivujte tuto volbu. Zákazníkovi již nebudou odesílány další emaily.',

'HELP_USER_EXTEND_BONI'                       => 'Zde můžete upravit kredit zákazníka. Od výše kreditu se odvíjejí povolené platební metody.',

'HELP_MANUFACTURER_MAIN_ICON'                 => 'Pomocí <span class="navipath_or_inputname">Ikona</span> a <span class="navipath_or_inputname">Nahrát Ikonu</span> můžete nahrát ikonu výrobce (např. logo). V <span class="navipath_or_inputname">Nahrát ikonu</span> vyberte ikonu, kterou chcete nahrát. Kliknutím na <span class="navipath_or_inputname">Uložit</span> ji nahrajete.',

'HELP_MANUFACTURER_SEO_FIXED'                 => 'Můžete nechat eShop vygenerovat nové SEO URL. Stránky výrobce budou mít nové SEO URL pokud se například změní titulek produktu. Nastavení <span class="navipath_or_inputname">fixních URL</span> se nezmění.',

'HELP_MANUFACTURER_SEO_KEYWORDS'              => 'Tyto klíčová slova budou přímo v HTML zdrojovém kódu stránky výrobce (META keywords). Klíčová slova jsou důležitá pro vyhledávače. Zde můžete klíčová slova zadat. Pokud je nezadáte, budou automaticky vygenerována.',

'HELP_MANUFACTURER_SEO_DESCRIPTION'           => 'Tento popis bude přímo v  HTML zdrojovém kódu stránky výrobce (META description). Popis je důležitý pro vyhledávače. Zde můžete popis zadat. Pokud jej nezadáte, bude automaticky vygenerován.',

'HELP_MANUFACTURER_SEO_SHOWSUFFIX'            => 'Pomocí této volby můžete nastavit zobrazenou příponu titulku stránky výrobce v horní liště prohlížeče. Příponu můžete nastavit v  <em>Hlavní nastavení -> Nastavení -> SEO -> Sufix názvu obchodu</em>.',

'HELP_VOUCHERSERIE_MAIN_DISCOUNT'             => 'V záložce <span class="navipath_or_inputname">Slevy</span> můžete nastavit velikost slev. Můžete rozhodnout, zda sleva bude procentuální nebo ve formě konkrétní částky:<ul><li><span class="userinput_or_code">abs</span>, např. sleva v hodnotě 50 Kč.</li><li><span class="userinput_or_code">%</span>, např. sleva ve výši 10% z ceny objednávky.</li></ul>',

'HELP_VOUCHERSERIE_MAIN_ALLOWSAMESERIES'      => 'Zde můžete nastavit, zda uživatel může uplatnit více kupónů této série v jedné objednávce.',

'HELP_VOUCHERSERIE_MAIN_ALLOWOTHERSERIES'     => 'Zde můžete nastavit, zda uživatel může uplatnit více kupónů z různých sérií v jedné objednávce.',

'HELP_VOUCHERSERIE_MAIN_SAMESEROTHERORDER'    => 'Zde můžete nastavit, zda uživatel může uplatnit kupóny této série v různých objednávkách.',

'HELP_VOUCHERSERIE_MAIN_RANDOMNUM'            => 'Pokud je tato volba aktivní, pro každý kupón bude generován jedinečný kód.',

'HELP_VOUCHERSERIE_MAIN_VOUCHERNUM'           => 'Zde můžete zadat číslo poukázky. Toto bude použito při generování nové poukázky <span class="navipath_or_inputname">Generování čísel</span>. Pokud vytvoříte více poukázek, všechny budou mít stejné číslo.',

'HELP_VOUCHERSERIE_MAIN_CALCULATEONCE'        => 'Pokud ke slevovému kupónu přiřadíte zboží nebo kategorie, deaktivujte tuto volbu, aby se kupón přičetl ke každému zboží v košíku. Pokud je volba aktivní, kupón je platný v nákupním košíku pouze jednou.',

'HELP_WRAPPING_MAIN_PICTURE'                  => 'Pomocí <span class="navipath_or_inputname">Obrázek</span> a <span class="navipath_or_inputname">Nahrát obrázek</span> můžete nahrát obrázek dárkového balení. V <span class="navipath_or_inputname">Nahrát obrázek</span> vyberte obrázek a kliknutím na <span class="navipath_or_inputname">Uložit</span> ho nahrajte.',

'HELP_PROMOTIONS_BANNER_PICTUREANDLINK'       => 'Nahrejte obrázek banneru a zadejte jeho URL, na které povede po kliknutí na banner. Pokud je k banneru přiřazen produkt a URL není zadáno, po kliknutí na banner se zobrazí detail produktu.',

'HELP_SHOP_PERF_SEO_CACHE'                    => 'Povoleno SEO mezipaměti zvyšuje výkon, ale vyžaduje hodně místa na disku v adresáři / tmp.',

'HELP_ALTERNATIVE_IMAGE_SERVER_NOTE'          => 'Alternativní URL na vzdálený server s obrázky lze nastavit v konfiguračním souboru config.inc.php nastavením <i> sAltImageUrl </ i> a <i> sSSLAltImageUrl </ i>. <br> Proto všechny fotografie produktů budou načteny z této alternativy namísto lokálního. Nicméně, nahrané soubory budou uloženy lokálně. V tomto případě synchronizace k externímu serveru musí být provedena ručně nebo pomocí vlastních skriptů.',

'HELP_SHOP_RDFA_CONTENT_OFFERER'              => 'Vyberte tu Content-stránku, ve které jsou zobrazeny Hlavní informace k eShopu, např. "O nás".',

'HELP_SHOP_RDFA_CONTENT_PAYMENT'              => 'Vyberte tu Content-stránku (např."Vop/AGB"), na které mají být zobazeny platební informace nepřiřazené RDFa. Chcete-li přiřadit platební metody k RDFa obecně, přejděte na: Nastavení obchodu -> Způsoby platby -> RDFa.',

'HELP_SHOP_RDFA_CONTENT_DELIVERY'             => 'Vyberte zde tu Contet-stránku (např."Doprava a poplatky"), na které mají být zobrazeny přepravní informace nepřiřazené k RDFa. Chcete-li přiřadit způsoby dopravy k RDFa metodám obecně,  přejděte na: Nastavení obchodu -> Doprava -> RDFa.',

'HELP_SHOP_RDFA_VAT'                          => 'Tato volba určuje, zda má být daň (DPH) zahrnuta v ceně a platebních a dodacích poplatcích nebo ne.',

'HELP_SHOP_RDFA_DURATION_PRICES'              => 'Zde uveďte dobu platnosti nákladů pro produkty, platby a přepravy (např. 1 den, 1 týden).',

'HELP_SHOP_RDFA_LOGO_URL'                     => 'Webová adresa (URL) loga nebo obrázku.',

'HELP_SHOP_RDFA_GEO_LONGITUDE'                => 'Zeměpisná délka prodejny v rámci geo polohy. Prosím zadejte pouze čísla.',

'HELP_SHOP_RDFA_GEO_LATITUDE'                 => 'Zeměpisná šířka obchodu v rámci geo polohy. Prosím zadejte pouze čísla.',

'HELP_SHOP_RDFA_GLN'                          => 'Global Location Number (GLN)  společnosti. Global Location Number je 13-místné číslo používané k identifikaci firmy a jejího sídla.',

'HELP_SHOP_RDFA_NAICS'                        => 'North American Industry Classification System (NAICS) kód pro Vaši firmu. Viz http://www.census.gov/eos/www/naics/.',

'HELP_SHOP_RDFA_ISIC'                         => 'Mezinárodní standardní průmyslové klasifikace všech ekonomických činností (ISIC) kód pro Vaši firmu. Viz http://unstats.un.org/unsd/cr/registry/isic-4.asp.',

'HELP_SHOP_RDFA_DUNS'                         => 'Dun & Bradstreet DUNS je devítimístné číslo slouží k identifikaci právnické osoby.',

'HELP_SHOP_RDFA_SHOW_PRODUCTSTOCK'            => 'Pokud je tato volba zapnuta, pak je zobrazován aktuální stav skladu.',

'HELP_SHOP_RDFA_RATING_MIN'                   => 'Možná minimální hodnota viz stupnice používané pro hodnocení ve Vašem obchodě. Tato hodnota není nejnižší aktuální hodnocení produktu!',

'HELP_SHOP_RDFA_RATING_MAX'                   => 'Možná maximální hodnota ohodnocení ve Vašem obchodě. Tato hodnota není nejvyšší aktuální hodnocení produktu!',

'HELP_SHOP_RDFA_COND'                         => 'Vyberte, co popisuje stav produktu (nový, použitý nebo renovovaný).',

'HELP_SHOP_RDFA_FNC'                          => 'Vyberte zde obchodní funkce produktů. Např., zda jsou nabízeny k prodeji, k pronájmu nebo opravit?',

'HELP_SHOP_RDFA_COSTUMER'                     => 'Typy zákazníků, pro které jsou produkty eShopu platné (pro koncového uživatele, prodejce, obchodní a/nebo veřejné).',

'HELP_SHOP_RDFA_DURATION_OFFERINGS'           => 'Tato vlastnost určuje dobu platnosti produktů, např. 1 den, 1 týden nebo 1 měsíc.',

'HELP_SHOP_PERF_SYSREQ_CHECK'                 => '',

'HELP_SHOP_CONFIG_ADDITIONAL_SERVICE_VAT_CALCULATION_BIGGEST_NET'  => 'Pro výpočet bude použita sazba DPH produktů, které mají v nákupním košíku největší netto hodnotu.',

'HELP_SHOP_CONFIG_ADDITIONAL_SERVICE_VAT_CALCULATION_PROPORTIONAL' => 'Pro výpočet bude použita procentuální část produktů v nákupním košíku se stejnou sazbou DPH.',

'HELP_SHOP_CONFIG_VIEWNETPRICE'               => 'V obchodě budou ceny produktu uvedeny jako netto-ceny.',

'HELP_SHOP_CONFIG_ENTERNETPRICE'              => 'V administrační oblasti musí být ceny produktu zadány jako netto-ceny.',

'HELP_REVERSE_PROXY_GET_FRONTEND'             => 'Zkontroluje, zda Reverse Proxy je k dispozici pro frontend. Hlavička úvodní stránky obchodu je ověřena. <br> Test by mohl selhat, pokud (HTTP / HTTPS) používáte pro různé domény nebo protokoly pro admin panel a přední stranu obchodu.',

'HELP_REVERSE_PROXY_GET_BACKEND'              => 'Administrativní oblast je zobrazena bez reverzní proxy. Varnish header nemůže být přijat.',

'HELP_SHOP_CONFIG_DEBIT_OLD_BANK_INFORMATION_NOT_ALLOWED' => 'Jen IBAN a BIC mohou být přístupné během výstupní kontroly. Číslo bankovního účtu a kód banky jsou zpřístupněny pouze pokud není aktivní zaškrtávací pole.',

'HELP_SHOP_CONFIG_ENABLE_INTANGIBLE_PRODUCTS_AGREEMENT'   => 'Pokud je tato volba aktivní, uživatelé musí potvrdit podmínky pro nehmotný produkt a stažení produktu ve čtvrtém kroku výstupní kontroly. Ujistěte se, že je tato volba povolena také pro konkrétní položku!',

'HELP_SHOP_CONFIG_FIELDS_CONTACTFORM'         => '',
];