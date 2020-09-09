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

'HELP_SHOP_SYSTEM_OTHERCOUNTRYORDER'          => '',

'HELP_SHOP_SYSTEM_DISABLENAVBARS'             => 'Wenn Du diese Einstellung aktivierst, werden die meisten Navigationselemente im Bestellprozess ausgeblendet. Dadurch werden die Benutzer beim Bestellen nicht unnötig abgelenkt.',

'HELP_SHOP_SYSTEM_DEFAULTIMAGEQUALITY'        => '',

'HELP_SHOP_SYSTEM_LDAP'                       => 'Bitte Datei core/oxldap.php anpassen.',

'HELP_SHOP_SYSTEM_SHOWVARIANTREVIEWS'         => 'Diese Einstellung beeinflusst das Verhalten, wenn Varianten bewertet werden: Wenn die Einstellung aktiv ist, dann werden die Bewertungen der Varianten auch beim Vater-Artikel angezeigt.',

'HELP_SHOP_SYSTEM_VARIANTSSELECTION'          => 'Im eShop gibt es oft Listen, in denen Du Artikel zuordnen kannst, z. B. wenn Du Artikel zu Rabatten zuordnest. Wenn die Einstellung aktiv ist, werden in diesen Listen auch  Varianten angezeigt.',

'HELP_SHOP_SYSTEM_VARIANTPARENTBUYABLE'       => '',

'HELP_SHOP_SYSTEM_VARIANTINHERITAMOUNTPRICE'  => 'Diese Einstellung beeinflusst das Verhalten des eShops, wenn beim Vater-Artikel Staffelpreise eingerichtet sind: Wenn die Einstellung aktiv ist, werden die Staffelpreise auch bei den Varianten verwendet.',

'HELP_SHOP_SYSTEM_ISERVERTIMESHIFT'           => 'Es kann sein, dass sich der Server in einer anderen Zeitzone befindet. Mit dieser Einstellung kannst Du die Zeitverschiebung korrigieren: Gib die Anzahl der Stunden, die zur Serverzeit addiert/abgezogen werden sollen ein, z. B. <kdb>+2</kdb> oder <kdb>-2</kdb>',

'HELP_SHOP_SYSTEM_INLINEIMGEMAIL'             => 'Wenn die Einstellung aktiv ist, werden die Bilder, die in E-Mails verwendet werden, zusammen mit der E-Mail versendet. Wenn die Einstellung nicht aktiv ist, lädt das E-Mail Programm die Bilder herunter, wenn Benutzer die E-Mail öffnen.',

'HELP_SHOP_SYSTEM_UTILMODULE'                 => 'Bitte trag Deine .php-Datei ein, mit der beim Shopstart eShop Funktionen überschrieben werden sollen.',

'HELP_SHOP_CACHE_ENABLED'                     => 'Wenn Dynamic content caching aktiv ist, werden zusätzliche Inhalte gecached und dadurch die Performance Deines eShops weiter gesteigert. Deaktiviere die Einstellung, solange Dein eShop noch nicht produktiv eingesetzt und angepasst wird.',

'HELP_SHOP_CACHE_LIFETIME'                    => 'Hier kannst Du einstellen, wie viele Sekunden die gecachten Inhalte maximal gespeichert werden, bevor sie erneut berechnet werden. Die Standardeinstellung sind 36000 Sekunden.',

'HELP_SHOP_CACHE_CLASSES'                     => 'Hier stellst Du ein, welche View-Klassen gecached werden.<br> Ändere diese Einstellung nur, wenn Du mit den Caching-Mechanismen gut vertraut bist!',

'HELP_SHOP_CACHE_REVERSE_PROXY_ENABLED'       => 'Aktiviert das Caching mit einem HTTP Reverse Proxy. Hinweis: Nicht zusammen mit "Dynamic Content Caching" verwenden, da das die Performance beeinträchtigen könnte.',

'HELP_SHOP_CACHE_LAYOUT_CACHE_AGE'            => 'Setzt die Lebenszeit des Seiten-Layouts in Sekunden. Wird als Header-Wert "Age" über den HTTP-Header gesendet.',

'HELP_SHOP_CONFIG_ORDEROPTINEMAIL'            => '',

'HELP_SHOP_CONFIG_BIDIRECTCROSS'              => '',

'HELP_SHOP_CONFIG_STOCKONDEFAULTMESSAGE'      => '',

'HELP_SHOP_CONFIG_STOCKOFFDEFAULTMESSAGE'     => '',

'HELP_SHOP_CONFIG_OVERRIDEZEROABCPRICES'      => '',

'HELP_SHOP_CONFIG_SEARCHFIELDS'               => '',

'HELP_SHOP_CONFIG_SORTFIELDS'                 => '',

'HELP_SHOP_CONFIG_MUSTFILLFIELDS'             => '',

'HELP_SHOP_CONFIG_USENEGATIVESTOCK'           => '',

'HELP_SHOP_CONFIG_SETORDELETECURRENCY'        => '',

'HELP_SHOP_CONFIG_NEWARTBYINSERT'             => 'Auf der Startseite Deines eShops werden die unter <span class="filename_filepath_or_italic">Frisch eingetroffen!</span> die neusten Artikel in Deinem eShop angezeigt. Du kannst die Artikel, die hier angezeigt werden, manuell einstellen oder automatisch berechnen lassen. Mit dieser Einstellung wählst Du, wie die neusten Artikel berechnet werden sollen: Nach dem Datum, an dem die Artikel erstellt wurden oder nach dem Datum der letzten Änderung im Administrationsbereich/der letzten Bestellung im Shop.',

/** @deprecated since v6.5.4 (2020-04-06); Suggest feature will be removed completely */
'HELP_SHOP_CONFIG_ALLOW_SUGGEST_ARTICLE'      => 'Auf der Detailseite von Artikeln wird das Empfehlen aktiviert.',
/** end deprecated */

'HELP_SHOP_CONFIG_SEND_TECHNICAL_INFORMATION_TO_OXID' => '',

'HELP_SHOP_CONFIG_DELETERATINGLOGS'           => 'Wenn Benutzer einen Artikel bewerten, kannst Du den Artikel nicht erneut bewerten. Hier kannst Du einstellen, dass die Benutzer nach einer bestimmten Anzahl von Tagen den Artikel erneut bewerten können.',

'HELP_SHOP_CONFIG_DISABLEONLINEVATIDCHECK'    => '',

'HELP_SHOP_CONFIG_ALTVATIDCHECKINTERFACEWSDL' => 'Hier kannst Du eine alternative URL für die Online UST-ID Prüfung eingeben.',

'HELP_SHOP_CONFIG_PSLOGIN'                    => '',

'HELP_SHOP_CONFIG_BASKETEXCLUDE'              => '',

'HELP_SHOP_CONFIG_BASKETRESERVATION'          => '',

'HELP_SHOP_CONFIG_BASKETRESERVATIONTIMEOUT'   => 'Nach der eingestellten Anzahl von Sekunden ohne Änderung am Warenkorb, wird der Warenkorb automatisch geleert und die darin enthaltenen Produkte dem Lagerbestand wieder zugeführt.',

'HELP_SHOP_CONFIG_INVITATION'                 => '',

'HELP_SHOP_CONFIG_POINTSFORINVITATION'        => '',

'HELP_SHOP_CONFIG_POINTSFORREGISTRATION'      => '',

// @deprecated since v6.5.1 (2019-02-07); credit card payment method will be no longer supported
'HELP_SHOP_CONFIG_ATTENTION'                  => 'ACHTUNG! Üblicherweise ist in den Verträgen mit MasterCard und VISA die Speicherung der Daten ausdrücklich verboten.',
// END deprecated

'HELP_SHOP_CONFIG_SHOWTSINTERNATIONALFEESMESSAGE' => 'Im 4. Schritt des Bestellprozesses wird die CMS-Seite "oxtsinternationalfees" ergänzend angezeigt.',

'HELP_SHOP_CONFIG_SHOWTSCODMESSAGE'           => 'Im 4. Schritt des Bestellprozesses wird die CMS-Seite "oxtscodmessage" ergänzend angezeigt.',

'HELP_SHOP_CONFIG_DOWNLOADS'                  => 'Shop mit Download-Artikeln. Aktiviere hier, dass Artikel bestellt und heruntergeladen werden können.',

'HELP_SHOP_CONFIG_DOWNLOADS_PATH'             => 'Pfad, in dem Dateien für Download-Artikel gespeichert werden.',

'HELP_SHOP_CONFIG_MAX_DOWNLOADS_COUNT'        => '',

'HELP_SHOP_CONFIG_LINK_EXPIRATION_TIME_UNREGISTERED' => '',

'HELP_SHOP_CONFIG_LINK_EXPIRATION_TIME'       => '',

'HELP_SHOP_CONFIG_PARCELSERVICE'              => 'Bitte tragen Sie die Tracking-URL Ihres Versanddienstleisters ein. <i>##ID##</i> ist ein Platzhalter, welcher durch die jeweilige Sendungsnummer ersetzt wird.',

'HELP_SHOP_CONFIG_DOWNLOAD_EXPIRATION_TIME'   => '',

'HELP_SHOP_CONFIG_LOADREVIEWS'                  => '',

'HELP_SHOP_CONFIG_INCLUDE_PRODUCT_REVIEW_LINKS_IN_ORDER_EMAIL' => 'Bitte prüfen Sie, ob dies nach dem jeweils anwendbaren Recht konform ist. Diese Einstellung wird nur angewendet, wenn "Bewertungen und Sterne-Ratings" aktiviert ist.',

'HELP_SHOP_MALL_MALLMODE'                     => '',

'HELP_SHOP_MALL_PRICEADDITION'                => 'Du hast die Möglichkeit, auf alle Artikelpreise einen Aufschlag zu berechnen: Gib den entsprechenden Aufschlag ein und wähle in der Auswahlliste aus, ob er prozentual (<span class="userinput_or_code">%</span>) oder absolut (<span class="userinput_or_code">abs</span>) berechnet werden soll.',

'HELP_SHOP_PERF_NEWESTARTICLES'               => '',

'HELP_SHOP_PERF_TOPSELLER'                    => '',

'HELP_SHOP_PERF_LOADFULLTREE'                 => 'Wenn die Einstellung aktiv ist, wird in der Kategoriennavigation der komplette Kategoriebaum angezeigt (Alle Kategorien sind \'ausgeklappt\'). Diese Einstellung funktioniert nur, wenn die Kategoriennavigation <span class="warning_or_important_hint">nicht</span> oben angezeigt wird.',

'HELP_SHOP_PERF_LOADACTION'                   => 'Wenn die Einstellung aktiv ist, werden Aktionen wie <span class="filename_filepath_or_italic">Die Dauerbrenner</span>, <span class="filename_filepath_or_italic">Top of the Shop</span>, <span class="filename_filepath_or_italic">Frisch eingetroffen!</span> geladen und angezeigt.',

'HELP_SHOP_PERF_USESELECTLISTPRICE'           => 'In Auswahllisten kannst Du Preis Auf/Abschläge einstellen. Wenn diese Einstellung aktiv ist, werden die Auf/Abschläge berechnet, ansonsten nicht.',

'HELP_SHOP_PERF_DISBASKETSAVING'              => 'Der Warenkorb von angemeldeten Benutzern wird gespeichert. Wenn sich die Benutzer bei einem weiteren Besuch in Deinem eShop anmelden, wird der gespeicherte Warenkorb automatisch wieder geladen. Wenn Du diese Einstellung aktivierst, werden die Warenkörbe nicht mehr gespeichert.',

'HELP_SHOP_PERF_LOADDELIVERY'                 => 'Wenn Du diese Einstellung ausschaltest, berechnet der eShop keine Versandkosten: es werden immer 0,00 EUR als Versandkosten angegeben.',

'HELP_SHOP_PERF_LOADPRICE'                    => 'Wenn Du diese Einstellung ausschaltest, werden die Artikelpreise nicht mehr berechnet und bei den Artikeln kein Preis mehr angezeigt.',

'HELP_SHOP_PERF_PARSELONGDESCINSMARTY'        => 'Wenn die Einstellung aktiv ist, werden die Beschreibungstexte von Artikeln und Kategorien mit Smarty ausgeführt: Dann kannst Du Smarty-Tags in die Beschreibungstexte einbinden (z. B. Variablen ausgeben). <br>Wenn die Einstellung nicht aktiv ist, werden die Beschreibungstexte so eingegeben, wie sie im Editor eingegeben werden.',

'HELP_SHOP_PERF_LOADSELECTLISTSINALIST'       => 'Normalerweise werden Auswahllisten nur in der Detailansicht eines Artikels angezeigt. Wenn Du die Einstellung aktivierst, werden die Auswahllisten auch in Artikellisten (z. B. Suchergebnisse, Kategorieansichten) angezeigt.',

'HELP_SHOP_PERF_CHECKIFTPLCOMPILE'            => 'Wenn diese Einstellung aktiv ist, überprüft der eShop bei jedem Aufruf, ob sich Templates geändert haben und berechnet die Ausgabe neu, falls Änderungen vorhanden sind. Aktiviere die Einstellung, wenn Du Templates anpasst und deaktiviere sie, wenn der eShop produktiv verwendet wird. <br>Weitere Informationen findest Du im <a href="http://www.oxid-esales.com/de/resources/help-faq/eshop-manual/hinweise-zum-templates-anpassen" target="_blank">Caching-Beitrag im Handbuch</a>.',

'HELP_SHOP_PERF_CLEARCACHEONLOGOUT'           => 'Normalerweise wird der komplette Cache geleert, sobald Änderungen im Administrationsbereich vorgenommen werden. Das kann zu eine verschlechterten Performance im Administrationsbereich führen. Wenn Du die Einstellung aktivieren, wird der Cache nur geleert, wenn Du Dich aus dem Administrationsbereich ausloggst.',

'HELP_SHOP_SEO_TITLEPREFIX'                   => '',

'HELP_SHOP_SEO_TITLESUFFIX'                   => '',

'HELP_SHOP_SEO_IDSSEPARATOR'                  => '',

'HELP_SHOP_SEO_SAFESEOPREF'                   => 'Wenn mehrere Artikel den gleichen Namen haben und in der gleichen Kategorie sind, würden sie die gleiche SEO URL erhalten. Damit das nicht passiert, wird das SEO Suffix angehängt. Dadurch werden gleiche SEO URLs vermieden. Wenn Du keinen SEO Suffix angibst, wird <span class="filename_filepath_or_italic">oxid</span> als Standard verwendet.',

'HELP_SHOP_SEO_RESERVEDWORDS'                 => 'Bestimmte URLs sind im eShop festgelegt, z.B. www.deinonlineshop.de/admin, um den Administrationsbereich zu öffnen. Wenn eine Kategorie <span class="filename_filepath_or_italic">admin</span> heißen würde, wäre die SEO URL zu dieser Kategorie ebenfalls www.deinonlineshop.de/admin - die Kategorie könnte nicht geöffnet werden. Deswegen wird an solche SEO URLs automatisch das SEO Suffix angehängt. Mit dem Eingabefeld kannst Du einstellen, an welche SEO URLs das SEO Suffix automatisch angehängt werden soll.',

'HELP_SHOP_SEO_SKIPTAGS'                      => 'Wenn bei Artikeln oder Kategorien keine SEO-Einstellungen für die META-Tags vorhanden sind, werden diese Informationen aus der Beschreibung generiert. Dabei können Wörter weggelassen werden, die besonders häufig vorkommen. Alle Wörter, die in diesem Eingabefeld stehen, werden bei der automatischen Generierung ignoriert.',

'HELP_SHOP_SEO_LOWERCASEURLS'                 => 'Wandelt Großbuchstaben bei der Generierung von SEO-URLs in Kleinbuchstaben um. Aus www.ihronlineshop.de/Kiteboarding/Kites/ wird www.ihronlineshop.de/kiteboarding/kites/.',

'HELP_SHOP_SEO_STATICURLS'                    => 'Für bestimmte Seiten (z. B. AGB\'s) im eShop kannst Du feste suchmaschinenfreundliche URLs festlegen. Wenn Du eine statische URL auswählst, wird in dem Feld <span class="navipath_or_inputname">Standard URL</span> die normale URL angezeigt. In den Eingabefeldern weiter unten kannst Du für jede Sprache suchmaschinenfreundliche URLs eingeben.',

'HELP_SHOP_MAIN_PRODUCTIVE'                   => '',

'HELP_SHOP_MAIN_ACTIVE'                       => 'Mit <span class="navipath_or_inputname">Aktiv</span> kannst Du Deinen kompletten eShop ein- und ausschalten. Wenn Dein eShop ausgeschaltet ist, wird Deinen Kunden eine Meldung angezeigt, dass der eShop vorübergehend offline ist. Das kann für Wartungsarbeiten am eShop nützlich sein.',

'HELP_SHOP_MAIN_INFOEMAIL'                    => 'An diese E-Mail-Adresse werden E-Mails gesendet, wenn Benutzer das Kontaktformular verwenden.',

'HELP_SHOP_MAIN_ORDEREMAIL'                   => 'Wenn Benutzer bestellen, erhalten diese eine Bestellbestätigung per E-Mail. Antwortet ein Benutzer auf diese E-Mail, wird die Antwort an die angegebene  Mailadresse gesendet.',

'HELP_SHOP_MAIN_OWNEREMAIL'                   => 'Wenn Benutzer bestellen, wird eine E-Mail an den eShop-Administrator gesendet. Die E-Mail über die eingegangene Bestellung geht an die angegebene Mailadresse.',

'HELP_SHOP_MAIN_SMTPSERVER'                   => 'Die SMTP-Daten müssen eingegeben werden, damit der eShop E-Mails versenden kann. Weitere Informationen zur Einrichtung findest Du im <a href="http://www.oxid-esales.com/de/resources/help-faq/eshop-manual/smtp-daten-eingeben" target="_blank">eShop Handbuch</a>.',

'HELP_ARTICLE_MAIN_ALDPRICE'                  => 'Mit <span class="navipath_or_inputname">Alt. Preise</span> kannst Du für bestimmte Benutzer spezielle Preise einrichten. Wie das funktioniert, erfährst Du im <a href="http://www.oxid-esales.com/de/resources/help-faq/eshop-manual/fuer-bestimmte-benutzer-besondere-preise-einrichten" target="_blank">eShop Handbuch</a> auf der OXID eSales Website.',

'HELP_ARTICLE_MAIN_VAT'                       => 'Hier kannst Du für diesen Artikel einen speziellen Mehrwertsteuersatz eingeben (z. B: 7% für Lebensmittel).',

'HELP_ARTICLE_EXTEND_UNITQUANTITY'            => 'Mit <span class="navipath_or_inputname">Menge</span> und <span class="navipath_or_inputname">Mengeneinheit</span> kannst Du den Grundpreis des Artikels (Preis pro Mengeneinheit) einstellen. Dieser wird berechnet und beim Artikel angezeigt (z.B. 1,43 EUR pro Liter). Gib bei <span class="navipath_or_inputname">Menge</span> die Menge des Artikels (z.B. 1,5) ein und lege bei <span class="navipath_or_inputname">Mengeneinheit</span> die entsprechende Mengeneinheit (z.B. Liter) fest. Du kannst eine Mengeneinheit aus der Liste auswählen oder eine Mengeneinheit eintragen, ohne eine Mengeneinheit auszuwählen ("-"). </br> Wie Du die Liste der Mengeneinheiten erweitern kannst, wird in diesem <a href="http://oxidforge.org/en/adding-new-unit-types.html" target="_blank">Tutorial</a> beschrieben.',

'HELP_ARTICLE_EXTEND_EXTURL'                  => 'Bei <span class="navipath_or_inputname">Externe URL</span> kannst Du einen Link eingeben, wo weitere Informationen zu dem Artikel erhältlich sind (z. B. auf der Hersteller-Website). Bei <span class="navipath_or_inputname">Text für ext. URL</span> kannst Du den Text eingeben, der verlinkt wird (z. B. <span class="userinput_or_code">weitere Informationen vom Hersteller</span>).',

'HELP_ARTICLE_EXTEND_TPRICE'                  => 'Bei <span class="navipath_or_inputname">UVP</span> kannst Du die Unverbindliche Preisempfehlung des Herstellers eingeben. Wenn Du die UVP eingibst, wird diese den Benutzern angezeigt: Beim Artikel wird über dem Preis <span class="filename_filepath_or_italic">statt UVP nur</span> angezeigt.',

'HELP_ARTICLE_EXTEND_QUESTIONEMAIL'           => 'Bei <span class="navipath_or_inputname">Alt. Anspr.partn.</span> kannst Du eine E-Mail Adresse eingeben. Wenn die Benutzer eine Frage zu diesem Artikel absenden, wird sie an diese E-Mail Adresse geschickt. Wenn keine E-Mail Adresse eingetragen ist, wird die Anfrage an die normale Info E-Mail Adresse geschickt.',

'HELP_ARTICLE_EXTEND_NONMATERIAL'             => 'Einstellung wird vom Vater-Artikel an die Varianten vererbt und gilt für den gesamten Artikel.',

'HELP_ARTICLE_EXTEND_FREESHIPPING'            => 'Einstellung wird vom Vater-Artikel an die Varianten vererbt und gilt für den gesamten Artikel.',

'HELP_ARTICLE_EXTEND_BLFIXEDPRICE'            => 'Der Preisalarm kann für diesen Artikel ausgeschaltet werden.',

'HELP_ARTICLE_EXTEND_SKIPDISCOUNTS'           => 'Wenn <span class="navipath_or_inputname">Alle neg. Nachlässe ignorieren</span> aktiviert ist, werden für diesen Artikel keine negativen Nachlässe berechnet. Das sind z. B. Rabatte und Gutscheine.',

'HELP_ARTICLE_EXTEND_TEMPLATE'                => 'Du kannst die Detailansicht des Artikels mit einem anderen Template anzeigen lassen. Trage dazu Pfad und Namen des Templates ein, das verwendet werden soll. Weitere Informationen findest Du im <a href="http://www.oxid-esales.com/de/resources/help-faq/eshop-manual/bestimmte-artikel-oder-kategorien-mit-anderen-templates-anzeigen" target="_blank">eShop Handbuch</a>.',

'HELP_ARTICLE_EXTEND_ISCONFIGURABLE'          => '',

'HELP_ARTICLE_EXTEND_UPDATEPRICE'             => 'Preise können zu einem festgelegten Zeitpunkt geändert werden. Die eingetragenen Preise aktualisieren die Standardpreise. Hat ein Preis den Wert "0", wird er nicht aktualisiert.',

'HELP_ARTICLE_EXTEND_SHOWCUSTOMAGREEMENT'     => 'Ist diese Option aktiviert, müssen Benutzer die AGB für diesen Artikel im vierten Bestellschritt bestätigen. Bitte stelle sicher, dass diese Option auch in den Grundeinstellungen aktiviert ist und dass es sich um einen immateriellen oder Downloadartikel handelt.',

'HELP_ARTICLE_FILES_MAX_DOWNLOADS_COUNT'      => 'Gib hier an, wie oft Benutzer nach einer Bestellung den Link zum Download verwenden können. Hier kannst Du für diese Datei die Standardeinstellung überschreiben, die in Stammdaten -> Grundeinstellung -> Einstell. -> Downloads für alle Artikel gesetzt wurde.',

'HELP_ARTICLE_FILES_LINK_EXPIRATION_TIME_UNREGISTERED' => 'Gib hier an, wie oft Benutzer, die ohne Registrierung bestellt haben, den Link zum Download verwenden können. Hier kannst Du für diese Datei die Standardeinstellung überschreiben, die in Stammdaten -> Grundeinstellung -> Einstell. -> Downloads für alle Artikel gesetzt wurde.',

'HELP_ARTICLE_FILES_LINK_EXPIRATION_TIME'     => 'Gib die Zeit in Stunden an, die der Downloadlink nach der Bestellung gültig ist. Hier kannst Du für diese Datei die Standardeinstellung überschreiben, die in Stammdaten -> Grundeinstellung -> Einstell. -> Downloads für alle Artikel gesetzt wurde.',

'HELP_ARTICLE_FILES_NEW'                      => 'Gib den Namen einer per FTP übertragenen Datei an oder lade hier eine neue Datei hoch. Große Dateien sollten immer per FTP übertragen werden. Die Beschränkung der Dateigröße gilt nur für das Hochladen im Administrationsbereich. Sie hängt von den PHP-Einstellungen des Servers ab, die nur dort geändert werden können.',

'HELP_ARTICLE_FILES_DOWNLOAD_EXPIRATION_TIME' => 'Gib die Zeit in Stunden an, die der Downloadlink nach dem ersten Download gültig ist. Hier kannst Du für diese Datei die Standardeinstellung überschreiben, die in Stammdaten -> Grundeinstellung -> Einstell. -> Downloads für alle Artikel gesetzt wurde.',

'HELP_ARTICLE_PICTURES_ICON'                  => '',

'HELP_ARTICLE_PICTURES_THUMB'                 => '',

'HELP_ARTICLE_PICTURES_PIC1'                  => '',

'HELP_ARTICLE_PICTURES_ZOOM1'                 => '',

'HELP_ARTICLE_STOCK_REMINDACTIV'              => 'Einstellung wird vom Vater-Artikel an die Varianten vererbt und gilt für den gesamten Artikel.',

'HELP_ARTICLE_STOCK_STOCKFLAG'                => '',

'HELP_ARTICLE_IS_DOWNLOADABLE'                => 'Dateien dieses Artikels können heruntergeladen werden.',

'HELP_ARTICLE_STOCK_REMINDAMAOUNT'            => 'Hier kannst Du einrichten, dass Dir eine E-Mail gesendet wird, sobald der der Lagerbestand unter den hier eingegebenen Wert sinkt. Dadurch wirst Du rechtzeitig informiert, wenn der Artikel fast ausverkauft ist. Setze hierzu das Häkchen und gib den Bestand ein, ab dem Du informiert werden willst.',

'HELP_ARTICLE_STOCK_DELIVERY'                 => 'Hier kannst Du eingeben, ab wann ein Artikel wieder lieferbar ist, wenn er ausverkauft ist. Das Format ist Jahr-Monat-Tag, z. B. 2012-10-21.',

'HELP_ARTICLE_SEO_FIXED'                      => 'Du kannst die SEO URLs vom eShop neu berechnen lassen. Eine Artikelseite bekommt z. B. eine neue SEO URL, wenn Du den Titel des Artikels änderst. Die Einstellung <span class="navipath_or_inputname">URL fixiert</span> unterbindet das: Wenn sie aktiv ist, wird die alte SEO URL beibehalten und keine neue SEO URL berechnet.',

'HELP_ARTICLE_SEO_KEYWORDS'                   => 'Diese Stichwörter werden in den HTML-Quelltext (Meta Keywords) eingebunden. Diese Information wird von Suchmaschinen ausgewertet. Hier kannst Du passende Stichwörter zu dem Artikel eingeben. Wenn Du nichts eingibst, werden die Stichwörter automatisch erzeugt.',

'HELP_ARTICLE_SEO_DESCRIPTION'                => 'Dieser Beschreibungstext wird in den HTML-Quelltext (Meta Description) eingebunden. Dieser Text wird von vielen Suchmaschinen bei den Suchergebnissen angezeigt. Hier kannst Du eine passende Beschreibung zu dem Artikel eingeben. Wenn Du nichts eingibst, wird die Beschreibung automatisch erzeugt.',

'HELP_ARTICLE_SEO_ACTCAT'                     => 'Du kannst für einen Artikel unterschiedliche SEO URLs festlegen: Für bestimmte Kategorien und für den Hersteller des Artikels. Mit <span class="navipath_or_inputname">Aktive Kategorie/Hersteller</span> kannst Du wählen, welche SEO URL Du anpassen möchtest.',

'HELP_ARTICLE_STOCK_STOCKTEXT'                => 'Hier kannst Du eine Meldung eingeben, die beim Artikel angezeigt wird, falls der Artikel auf Lager ist. Weitere Informationen zu Lagerbestandsmeldungen findest Du im <a href="http://www.oxid-esales.com/de/resources/help-faq/eshop-manual/meldungen-zu-den-lagerbestaenden-einrichten" target="_blank">eShop Handbuch</a>.',

'HELP_ARTICLE_STOCK_NOSTOCKTEXT'              => 'Hier kannst Du eine Meldung eingeben, die beim Artikel angezeigt wird, falls der Artikel ausverkauft ist. Weitere Informationen zu Lagerbestandsmeldungen findest Du im <a href="http://www.oxid-esales.com/de/resources/help-faq/eshop-manual/meldungen-zu-den-lagerbestaenden-einrichten" target="_blank">eShop Handbuch</a>.',

'HELP_ARTICLE_STOCK_AMOUNTPRICE_AMOUNTFROM'   => 'Mit <span class="navipath_or_inputname">Menge von/bis</span> stellst Du ein, für welchen Mengenbereich der Staffelpreis gültig ist.<br>Weitere Informationen zu Staffelpreisen findest Du im <a href="http://www.oxid-esales.com/de/resources/help-faq/eshop-manual/staffelpreise-einrichten" target="_blank">OXID eShop Handbuch</a>.',

'HELP_ARTICLE_STOCK_AMOUNTPRICE_PRICE'        => '',

'HELP_ARTICLE_VARIANT_VARNAME'                => 'Bei <span class="navipath_or_inputname">Name der Auswahl</span> kannst Du einstellen, wie die Auswahl zwischen den verschiedenen Varianten heißen soll, z. B. <span class="userinput_or_code">Farbe</span> oder <span class="userinput_or_code">Größe</span>.<br> Weitere Informationen zu Varianten findest Du im <a href="http://www.oxid-esales.com/de/resources/help-faq/eshop-manual/varianten-eines-artikels-anlegen" target="_blank">Varianten-Kapitel des Handbuchs</a>.',

'HELP_ATTRIBUTE_MAIN_DISPLAYINBASKET'         => 'Wenn ausgewählt, wird der Wert dieses Attributs im Warenkorb und in der Bestellübersicht unter dem Artikeltitel angezeigt.',

'HELP_CATEGORY_MAIN_HIDDEN'                   => 'Mit <span class="navipath_or_inputname">Versteckt</span> kannst Du einstellen, ob die Kategorie den Benutzern angezeigt werden soll. Wenn eine Kategorie versteckt ist, wird sie den Benutzern nicht angezeigt, auch wenn die Kategorie aktiv ist.',

'HELP_CATEGORY_MAIN_PARENTID'                 => '',

'HELP_CATEGORY_MAIN_EXTLINK'                  => 'Bei <span class="navipath_or_inputname">Externer Link</span> kannst Du einen Link eingeben, der geöffnet wird, wenn Benutzer auf die Kategorie klicken. <span class="warning_or_important_hint">Verwende diese Funktion nur, wenn Du einen Link in der Kategorien-Navigation anzeigen willst. Die Kategorie verliert dadurch ihre normale Funktion!</span>',

'HELP_CATEGORY_MAIN_PRICEFROMTILL'            => 'Mit <span class="navipath_or_inputname">Preis von/bis</span> kannst Du einstellen, dass in der Kategorie <span class="warning_or_important_hint">alle</span> Artikel angezeigt werden, die einen bestimmten Preis haben. Im ersten Eingabefeld wird die Untergrenze eingegeben, in das zweite Eingabefeld die Obergrenze. Dann werden in der Kategorie <span class="warning_or_important_hint">alle Artikel Deines eShops</span> angezeigt, die einen entsprechenden Preis haben.',

'HELP_CATEGORY_MAIN_DEFSORT'                  => 'Mit <span class="navipath_or_inputname">Schnellsortierung</span> stellst Du ein, wie die Artikel in der Kategorie sortiert werden. Mit <span class="navipath_or_inputname">asc</span> und <span class="navipath_or_inputname">desc</span> stellst Du ein, ob auf- oder absteigend sortiert wird. <br>Weitere Informationen findest Du im <a href="http://www.oxid-esales.com/de/resources/help-faq/eshop-manual/artikel-sortieren" target="_blank">Handbuch-Eintrag zum Sortieren von Artikeln</a>.',

'HELP_CATEGORY_MAIN_SORT'                     => 'Mit <span class="navipath_or_inputname">Sortierung</span> kannst Du festlegen, in welcher Reihenfolge die Kategorien angezeigt werden: Die Kategorie mit der kleinsten Zahl wird oben angezeigt, die Kategorie mit der größten Zahl unten.',

'HELP_CATEGORY_MAIN_THUMB'                    => 'Bei <span class="navipath_or_inputname">Bild</span> und <span class="navipath_or_inputname">Bild hochladen</span> kannst Du ein Bild für die Kategorie hochladen, dieses Bild wird dann in der Kategorienansicht oben angezeigt. <br>Wähle bei <span class="navipath_or_inputname">Bild hochladen</span> das entsprechende Bild aus. Wenn Du auf Speichern klicken, wird das Bild hochgeladen. Nachdem das Bild hochgeladen ist, wird der Dateiname des Bildes in <span class="navipath_or_inputname">Bild</span> angezeigt.',

'HELP_CATEGORY_MAIN_PROMOTION_ICON'           => 'Das Bild für die Startseite wird angezeigt, wenn diese Kategorie auf der Startseite beworben wird. Siehe auch <span class="navipath_or_inputname">Kundeninformationen -> Aktionen verwalten -> Kategorien-Topangebot</span>.',

'HELP_CATEGORY_MAIN_SKIPDISCOUNTS'            => 'Wenn <span class="navipath_or_inputname">Alle neg. Nachlässe ignorieren</span> aktiv ist, werden für alle Artikel in dieser Kategorie keine negativen Nachlässe berechnet.',

'HELP_CATEGORY_SEO_FIXED'                     => 'Du kannst die SEO URLs vom eShop neu berechnen lassen. Eine Kategorie bekommt z. B. eine neue SEO URL, wenn Du den Titel der Kategorie änderst. Die Einstellung <span class="navipath_or_inputname">URL fixiert</span> unterbindet das: Wenn sie aktiv ist, wird die alte SEO URL beibehalten und keine neue SEO URL berechnet.',

'HELP_CATEGORY_SEO_KEYWORDS'                  => 'Diese Stichwörter werden in den HTML-Quelltext (Meta Keywords) eingebunden. Diese Information wird von Suchmaschinen ausgewertet. Hier kannst Du passende Stichwörter zu der Kategorie eingeben. Wenn Du nichts eingibst, werden die Stichwörter automatisch erzeugt.',

'HELP_CATEGORY_SEO_DESCRIPTION'               => 'Dieser Beschreibungstext wird in den HTML-Quelltext (Meta Description) eingebunden. Dieser Text wird von vielen Suchmaschinen bei den Suchergebnissen angezeigt. Hier kannst Du eine passende Beschreibung für die Kategorie eingeben. Wenn Du nichts eingibst, wird die Beschreibung automatisch erzeugt.',

'HELP_CATEGORY_SEO_SHOWSUFFIX'                => 'Diese Einstellung bestimmt, ob das Suffix für den Fenstertitel angezeigt wird, wenn die Kategorieseite im eShop aufgerufen wird. Das Titel Suffix kannst Du unter <span class="navipath_or_inputname">Stammdaten -> Grundeinstellungen -> SEO -> Titel Suffix</span> einstellen.',

'HELP_CONTENT_MAIN_SNIPPET'                   => 'Wenn Du <span class="navipath_or_inputname">Snippet</span> auswählst, kannst Du die CMS-Seite in anderen Seiten mit Hilfe des Idents einbinden: <span class="userinput_or_code">[{ oxcontent ident=Ident_der_CMS_Seite }]</span>',

'HELP_CONTENT_MAIN_MAINMENU'                  => 'Wenn Du <span class="navipath_or_inputname">Hauptmenü</span> auswählst, wird in der oberen Menüleiste ein Link zu der CMS-Seite angezeigt (bei AGB und Impressum).',

'HELP_CONTENT_MAIN_CATEGORY'                  => 'Wenn Du <span class="navipath_or_inputname">Kategorie</span> auswählst, wird in der Kategoriennavigation unter den normalen Kategorien ein Link zu der CMS-Seite angezeigt.',

'HELP_CONTENT_MAIN_MANUAL'                    => 'Wenn Du <span class="navipath_or_inputname">Manuell</span> auswählst, wird ein Link erzeugt, mit dem Du die CMS-Seite in andere CMS-Seiten einbinden kannst. Der Link wird weiter unten angezeigt, wenn Du auf Speichern klicken.',

'HELP_CONTENT_SEO_FIXED'                      => 'Du kannst die SEO URLs vom eShop neu berechnen lassen. Eine CMS-Seite bekommt z. B. eine neue SEO URL, wenn Du den Titel der CMS-Seite änderst. Die Einstellung <span class="navipath_or_inputname">URL fixiert</span> unterbindet das: Wenn sie aktiv ist, wird die alte SEO URL beibehalten und keine neue SEO URL berechnet.',

'HELP_CONTENT_SEO_KEYWORDS'                   => 'Diese Stichwörter werden in den HTML-Quelltext (Meta Keywords) eingebunden. Diese Information wird von Suchmaschinen ausgewertet. Hier kannst Du passende Stichwörter zu der CMS-Seite eingeben. Wenn Du nichts eingibst, werden die Stichwörter automatisch erzeugt.',

'HELP_CONTENT_SEO_DESCRIPTION'                => 'Dieser Beschreibungstext wird in den HTML-Quelltext (Meta Description) eingebunden. Dieser Text wird von vielen Suchmaschinen bei den Suchergebnissen angezeigt. Hier kannst Du eine passende Beschreibung für die CMS-Seite eingeben. Wenn Du nichts eingibst, wird die Beschreibung automatisch erzeugt.',

'HELP_DELIVERY_MAIN_COUNTRULES'               => '',

'HELP_DELIVERY_MAIN_CONDITION'                => '',

'HELP_DELIVERY_MAIN_PRICE'                    => '',

'HELP_DELIVERY_MAIN_ORDER'                    => 'Mit <span class="navipath_or_inputname">Reihenfolge der Regelberechnung</span> kannst Du festlegen, in welcher Reihenfolge die Versandkostenregeln berechnet werden: Die Versandkostenregel mit der kleinsten Zahl wird als erstes berechnet. Die Reihenfolge ist wichtig, wenn die Einstellung <span class="navipath_or_inputname">Keine weiteren Regeln nach dieser berechnen</span> verwendet wird.',

'HELP_DELIVERY_MAIN_FINALIZE'                 => 'Mit <span class="navipath_or_inputname">Keine weiteren Regeln nach dieser berechnen</span> kannst Du einstellen, dass keine weitere Versandkostenregeln berechnet werden, falls diese Versandkostenregel gültig ist und berechnet wird. Für diese Einstellung ist die Reihenfolge wichtig, in der die Versandkostenregeln berechnet werden: Sie wird durch <span class="navipath_or_inputname">Reihenfolge der Regelberechnung</span> festgelegt.',

'HELP_DELIVERYSET_MAIN_POS'                   => 'Mit <span class="navipath_or_inputname">Sortierung</span> kannst Du einstellen, in welcher Reihenfolge die Versandarten den Benutzern angezeigt werden:<br><ul><li>Die Versandart mit der niedrigsten Zahl wird ganz oben angezeigt.</li><li>Die Versandart mit der höchsten Zahl wird ganz unten angezeigt.</li></ul>',

'HELP_DISCOUNT_MAIN_SORT'                     => 'Mit <span class="navipath_or_inputname">Sortierung</span> können Sie festlegen, in welcher Reihenfolge die Rabatte auf Artikel oder den Warenkorb angewendet werden. Der Rabatt mit der kleinsten Zahl wird zuerst angewendet, der mit der größten Zahl zuletzt.',

'HELP_DISCOUNT_MAIN_PRICE'                    => 'Mit <span class="navipath_or_inputname">Einkaufswert</span> kannst Du einstellen, dass der Rabatt nur für bestimmte Einkaufswerte gültig ist. Wenn der Rabatt für alle Einkaufswerte gültig sein soll, dann gib in <span class="navipath_or_inputname">von</span> und in <span class="navipath_or_inputname">bis</span> <span class="userinput_or_code">0</span> ein.',

'HELP_DISCOUNT_MAIN_AMOUNT'                   => 'Mit <span class="navipath_or_inputname">Einkaufsmenge</span> kannst Du einstellen, dass der Rabatt nur für bestimmte Einkaufsmengen gültig ist. Wenn Du möchtest, dass der Rabatt für alle Einkaufsmengen gültig ist, dann gib in <span class="navipath_or_inputname">von</span> und in <span class="navipath_or_inputname">bis</span> <span class="userinput_or_code">0</span> ein.',

'HELP_DISCOUNT_MAIN_REBATE'                   => '',

'HELP_GENERAL_SEO_ACTCAT'                     => 'Du kannst für einen Artikel unterschiedliche SEO URLs festlegen: Für bestimmte Kategorien und für den Hersteller des Artikels. Mit <span class="navipath_or_inputname">Aktive Kategorie/Hersteller</span> kannst Du wählen, welche SEO URL Du anpassen möchtest.',

'HELP_GENERAL_SEO_FIXED'                      => 'Wenn sich die Daten eines Artikels, Kategorie usw. ändern, wird auch die SEO URL neu berechnet. Eine Kategorie bekommt z. B. eine neue SEO URL, wenn Du den Titel der Kategorie änderst. Die Einstellung <span class="navipath_or_inputname">URL fixiert</span> unterbindet das: Wenn sie aktiv ist, wird die alte SEO URL beibehalten und keine neue SEO URL berechnet.',

'HELP_GENERAL_SEO_SHOWSUFFIX'                 => 'Diese Einstellung bestimmt, ob das Titel-Suffix im Seitentitel angezeigt wird, wenn die entsprechende Seite im eShop aufgerufen wird. Das Titel Suffix kannst Du unter <span class="navipath_or_inputname">Stammdaten -> Grundeinstellungen -> SEO -> Titel Suffix</span> einstellen.',

'HELP_GENERAL_SEO_OXKEYWORDS'                 => 'Diese Stichwörter werden in den HTML-Quelltext (Meta Keywords) eingebunden. Diese Stichwörter werden von Suchmaschinen ausgewertet. Wenn Du nichts eingibst, werden die Stichwörter automatisch erzeugt.',

'HELP_GENERAL_SEO_OXDESCRIPTION'              => 'Dieser Beschreibungstext wird in den HTML-Quelltext (Meta Description) eingebunden. Dieser Text wird von vielen Suchmaschinen bei den Suchergebnissen angezeigt. Wenn Du nichts eingibst, wird die Beschreibung automatisch erzeugt.',

'HELP_GENIMPORT_FIRSTCOLHEADER'               => 'Aktiviere diese Einstellung, falls in der ersten Zeile der CSV-Datei die Datenbank-Spalten stehen, zu denen die Daten zugeordnet werden sollen. Dann wird die Zuordnung der Daten zu den entsprechenden Datenbank-Spalten automatisch vorgenommen.',

'HELP_GENIMPORT_REPEATIMPORT'                 => 'Wenn Du diese Einstellung aktivierst, wird nach erfolgreichem Import automatisch wieder Schritt 1 angezeigt, damit Du den nächsten Import machen kannst.',

'HELP_LANGUAGE_DEFAULT'                       => 'Die Standardsprache wird verwendet, wenn OXID eShop die zu verwendete Sprache nicht anderweitig ermitteln kann: Die gewünschte Sprache ist nicht in der URL angegeben, kann nicht über den Browser ermittelt werden und ist nicht in der aktuellen Session gespeichert. Die Standardsprache kann deaktiviert, aber nicht gelöscht werden.',

'HELP_LANGUAGE_ACTIVE'                        => 'Aktiviere diese Einstellung, um die Sprache für das eShop Frontend zu aktivieren. Die Sprache ist stets im Admin verfügbar, selbst wenn sie für das Frontend inaktiv ist.',

'HELP_PAYMENT_MAIN_SORT'                      => 'Mit <span class="navipath_or_inputname">Sortierung</span> kannst Du einstellen, in welcher Reihenfolge die Zahlungsarten den Benutzern angezeigt werden:<br><ul><li>Die Zahlungsart mit der niedrigsten Zahl wird an erster Stelle angezeigt.</li><li>Die Zahlungsart mit der höchsten Zahl wird an letzter Stelle angezeigt.</li></ul>',

'HELP_PAYMENT_MAIN_FROMBONI'                  => 'Hier kannst Du einstellen, dass die Zahlungsarten nur Benutzern zur Verfügung stehen, die mindestens einen bestimmten Bonitätsindex haben. Den Bonitätsindex kannst Du für jeden Benutzer unter <span class="filename_filepath_or_italic">Benutzer verwalten -> Benutzer -> Erweitert</span> eingeben.',

'HELP_PAYMENT_MAIN_SELECTED'                  => 'Mit <span class="navipath_or_inputname">Ausgewählt</span> kannst Du bestimmen, welche Zahlungsart als Standard ausgewählt sein soll, wenn Benutzer im dritten Bestellschritt zwischen verschiedenen Zahlungsarten wählen können.',

'HELP_PAYMENT_MAIN_AMOUNT'                    => '',

'HELP_PAYMENT_MAIN_ADDPRICE'                  => '',

'HELP_PAYMENT_MAIN_ADDSUMRULES'               => 'Zur Berechnung von Preisauf- oder abschlägen wird der Warenkorbwert als Basissumme verwendet. Lege fest, welche Kosten in die Berechnung des Warenkorbwertes einbezogen werden.',

'HELP_SELECTLIST_MAIN_TITLEIDENT'             => 'Bei <span class="navipath_or_inputname">Arbeitstitel</span> kannst Du einen zusätzlichen Titel eingeben, der den Benutzern Deines eShops nicht angezeigt wird. Du kannst den Arbeitstitel dazu verwenden, um ähnliche Auswahllisten zu unterscheiden (z. B. <span class="filename_filepath_or_italic">Größe für Hosen</span> und <span class="filename_filepath_or_italic">Größe für Hemden</span>).',

'HELP_SELECTLIST_MAIN_FIELDS'                 => 'In der Liste <span class="navipath_or_inputname">Felder</span> werden alle vorhandenen Ausführungen der Auswahlliste angezeigt. Mit den Eingabefeldern rechts neben <span class="navipath_or_inputname">Felder</span> kannst Du neue Ausführungen anlegen.<br>Weitere Informationen findest Du im <a href="http://www.oxid-esales.com/de/resources/help-faq/eshop-manual/einfache-varianten-mit-auswahllisten-umsetzen" target="_blank">Auswahllisten-Kapitel im Handbuch</a>.',

'HELP_USER_MAIN_HASPASSWORD'                  => '',

'HELP_USER_PAYMENT_METHODS'                   => '',

'HELP_USER_EXTEND_NEWSLETTER'                 => 'Diese Einstellung zeigt an, ob der Benutzer den Newsletter abonniert hat oder nicht.',

'HELP_USER_EXTEND_EMAILFAILED'                => 'Wenn an die E-Mail Adresse des Benutzers keine E-Mails versendet werden können (z. B. weil die Adresse falsch eingetragen ist), dann setze hier das Häkchen. Dann werden dem Benutzer keine Newsletter mehr zugesendet. Andere E-Mails werden weiterhin versendet.',

'HELP_USER_EXTEND_BONI'                       => 'Hier kannst Du einen Zahlenwert für die Bonität des Benutzers eingeben. Mit der Bonität kannst Du beeinflussen, welche Zahlungsarten dem Benutzer zur Verfügung stehen.',

'HELP_MANUFACTURER_MAIN_ICON'                 => 'Bei <span class="navipath_or_inputname">Icon</span> und <span class="navipath_or_inputname">Hersteller-Icon hochladen</span> kannst Du ein Bild für den Hersteller hochladen (z. B. das Logo des Herstellers). Wähle bei <span class="navipath_or_inputname">Hersteller-Icon hochladen</span> das Bild aus, das Du hochladen möchtest. Wenn Du auf Speichern klickst, wird das Bild hochgeladen. Nachdem das Bild hochgeladen ist, wird der Dateiname des Bildes in <span class="navipath_or_inputname">Icon</span> angezeigt.',

'HELP_MANUFACTURER_SEO_FIXED'                 => 'Du kannst die SEO URLs vom eShop neu berechnen lassen. Eine Herstellerseite bekommt z. B. eine neue SEO URL, wenn Du den Titel des Herstellers änderst. Die Einstellung <span class="navipath_or_inputname">URL fixiert</span> unterbindet das: Wenn sie aktiv ist, wird die alte SEO URL beibehalten und keine neue SEO URL berechnet.',

'HELP_MANUFACTURER_SEO_KEYWORDS'              => 'Diese Stichwörter werden in den HTML-Quelltext (Meta Keywords) eingebunden. Diese Information wird von Suchmaschinen ausgewertet. Hier kannst Du passende Stichwörter zu dem Hersteller eingeben. Wenn Du nichts eingibst, werden die Stichwörter automatisch erzeugt.',

'HELP_MANUFACTURER_SEO_DESCRIPTION'           => 'Dieser Beschreibungstext wird in den HTML-Quelltext (Meta Description) eingebunden. Dieser Text wird von vielen Suchmaschinen bei den Suchergebnissen angezeigt. Hier kannst Du eine passende Beschreibung für den Hersteller eingeben. Wenn Du nichts eingibst, wird die Beschreibung automatisch erzeugt.',

'HELP_MANUFACTURER_SEO_SHOWSUFFIX'            => 'Diese Einstellung bestimmt, ob das Suffix für den Fenstertitel angezeigt wird, wenn die Herstellerseite im eShop aufgerufen wird. Das Titel Suffix kannst Du unter <span class="navipath_or_inputname">Stammdaten -> Grundeinstellungen -> SEO -> Titel Suffix</span> einstellen.',

'HELP_VOUCHERSERIE_MAIN_DISCOUNT'             => '',

'HELP_VOUCHERSERIE_MAIN_ALLOWSAMESERIES'      => 'Hier kannst Du einstellen, ob Benutzer mehrere Gutscheine dieser Gutscheinserie bei einer Bestellung einlösen dürfen.',

'HELP_VOUCHERSERIE_MAIN_ALLOWOTHERSERIES'     => 'Hier kannst Du einstellen, ob Benutzer Gutscheine verschiedener Gutscheinserien bei einer Bestellung einlösen dürfen.',

'HELP_VOUCHERSERIE_MAIN_SAMESEROTHERORDER'    => 'Hier kannst Du einstellen, ob Benutzer Gutscheine dieser Gutscheinserie bei mehreren Bestellungen einlösen dürfen.',

'HELP_VOUCHERSERIE_MAIN_RANDOMNUM'            => 'Wenn Du diese Einstellung aktivierst, wird für jeden Gutschein eine Zufallsnummer erzeugt.',

'HELP_VOUCHERSERIE_MAIN_VOUCHERNUM'           => 'Hier kannst Du eine Gutscheinnummer eingeben. Diese wird verwendet wenn Du neue Gutscheine anlegen. Wenn Du mehrere Gutscheine anlegst, erhalten alle Gutscheine die gleiche Nummer.',

'HELP_VOUCHERSERIE_MAIN_CALCULATEONCE'        => 'Wenn Du produkt- oder kategoriebezogene Gutscheine benutzt, deaktiviere diese Option, damit der Gutschein für jedes Produkt einer Warenkorbposition berechnet wird. Aktiviere diese Option, wenn der Gutschein auf die gesamte Warenkorbposition angewendet werden soll.',

'HELP_WRAPPING_MAIN_PICTURE'                  => 'Bei <span class="navipath_or_inputname">Bild</span> und <span class="navipath_or_inputname">Bild hochladen</span> kannst Du ein Bild für die Geschenkverpackung hochladen. Wähle bei <span class="navipath_or_inputname">Bild hochladen</span> das Bild aus, das Du hochladen möchtest. Wenn Du auf Speichern klickst, wird das Bild hochgeladen. Nachdem das Bild hochgeladen ist, wird der Dateiname des Bildes in <span class="navipath_or_inputname">Bild</span> angezeigt.',

'HELP_PROMOTIONS_BANNER_PICTUREANDLINK'       => 'Lade ein Bild für den großen Startseitenbanner hoch und geben die URL für den Klick auf den Banner an. Falls ein Artikel zugeordnet wird, wird dessen URL automatisch als Banner-URL verwendet.',

'HELP_SHOP_PERF_SEO_CACHE'                    => 'Aktivierter SEO Cache verbessert die Performance, benötigt aber sehr viel Speicherplatz im /tmp-Verzeichnis.',

'HELP_ALTERNATIVE_IMAGE_SERVER_NOTE'          => 'In der Konfigurationsdatei config.inc.php kann mit den Parametern <i>sAltImageUrl</i> und <i>sSSLAltImageUrl</i> eine URL zu einem externen Bilder-Server gesetzt werden. Dadurch werden alle Artikelbilder von diesem alternativen Server geladen. Alle hochgeladenen Dateien werden jedoch lokal gespeichert, so dass sie manuell oder per Script mit dem externen Server synchronisiert werden müssen.',

'HELP_SHOP_RDFA_CONTENT_OFFERER'              => 'Wähle hier aus, welche Content-Seite die Hauptinformationen zum eShop anzeigt, beispielsweise "Impressum".',

'HELP_SHOP_RDFA_CONTENT_PAYMENT'              => 'Wähle hier aus, welche Content-Seite (beispielsweise "AGB") Zahlungsinformationen anzeigt, die RDFa nicht zugewiesen wurden. Um Deine Zahlungsarten den RDFa-Zahlungsarten generell zuzuordnen, geh zu Shopeinstellungen -> Zahlungsarten -> RDFa.',

'HELP_SHOP_RDFA_CONTENT_DELIVERY'             => 'Wähle hier aus, welche Content-Seite (beispielsweise "Versand und Kosten") Versandinformationen anzeigt, die RDFa nicht zugewiesen wurden. Um Deine Versandarten den RDFa-Versandarten generell zuzuordnen, geh zu Shopeinstellungen -> Versandarten -> RDFa.',

'HELP_SHOP_RDFA_VAT'                          => 'Diese Option gibt an, ob die MwSt. im Preis und in den Zahlungs- und Lieferkosten enthalten ist oder nicht.',

'HELP_SHOP_RDFA_DURATION_PRICES'              => 'Gib hier den Gültigkeitszeitraum für die Kosten von Artikeln, Zahlungs- und Versandarten an (z.B.: 1 Tag, 1 Woche).',

'HELP_SHOP_RDFA_LOGO_URL'                     => 'Die Webadresse (URL) eines Logos oder Bildes.',

'HELP_SHOP_RDFA_GEO_LONGITUDE'                => 'Die geografische Länge (Longitude) des Ladengeschäftes als Bestandteil der Geoposition. Bitte nur Zahlen eingeben.',

'HELP_SHOP_RDFA_GEO_LATITUDE'                 => 'Die geografische Breite (Latitude) des Ladengeschäftes als Bestandteil der Geoposition. Bitte nur Zahlen eingeben.',

'HELP_SHOP_RDFA_GLN'                          => 'Global Location Number (GLN) der Firma. Die Global Location Number ist eine 13-stellige Zahl, mit der Firmen und Firmensitz identifiziert werden.',

'HELP_SHOP_RDFA_NAICS'                        => 'Schlüssel Deiner Firma im North American Industry Classification System (NAICS). Siehe http://www.census.gov/eos/www/naics/.',

'HELP_SHOP_RDFA_ISIC'                         => 'Schlüssel Deiner Firma im International Standard of Industrial Classification of All Economic Activities (ISIC). Siehe http://unstats.un.org/unsd/cr/registry/isic-4.asp.',

'HELP_SHOP_RDFA_DUNS'                         => 'Die Dun & Bradstreet D-U-N-S ist ein neunstelliger Zahlenschlüssel zur Identifizierung von Unternehmen.',

'HELP_SHOP_RDFA_SHOW_PRODUCTSTOCK'            => 'Ist diese Option aktiviert, bedeutet das, dass der tatsächliche Lagerbestand angezeigt wird.',

'HELP_SHOP_RDFA_RATING_MIN'                   => 'Möglicher Minimalwert für die Bewertung im Shop. Dieser Wert ist nicht die aktuell niedrigste Bewertung eines Artikels!',

'HELP_SHOP_RDFA_RATING_MAX'                   => 'Möglicher Maximalwert für die Bewertung im Shop. Dieser Wert ist nicht die aktuell höchste Bewertung eines Artikels!',

'HELP_SHOP_RDFA_COND'                         => 'Wähle aus, was den Zustand der Artikel beschreibt (neu, gebraucht oder aufgearbeitet).',

'HELP_SHOP_RDFA_FNC'                          => 'Wähle hier die geschäftliche Funktion der Artikel. Werden diese beispielsweise verkauft, vermietet oder repariert?',

'HELP_SHOP_RDFA_COSTUMER'                     => 'Gibt den Kundentypen an, dem die Artikel des Shops gelten (Endverbraucher, Wiederverkäufer, Unternehmen/Gewerbe und/oder Öffentliche Einrichtungen).',

'HELP_SHOP_RDFA_DURATION_OFFERINGS'           => 'Diese Eigenschaft kennzeichnet den Gültigkeitszeitraum von Artikeln, beispielsweise 1 Tag, 1 Woche oder 1 Monat.',

'HELP_SHOP_PERF_SYSREQ_CHECK'                 => 'Führt die Systemgesundheitsprüfung beim Aufruf des Administrationsbereichs aus und zeigt ggf. Meldungen an. In bestimmten Konstellationen kann sich das negativ auf die Performance des Administrationsbereichs auswirken.',

'HELP_SHOP_CONFIG_ADDITIONAL_SERVICE_VAT_CALCULATION_BIGGEST_NET'  => 'Für die Berechnung wird der MwSt.-Satz derjenigen Artikel verwendet, welche den größten Nettowert im Warenkorb ausmachen.',

'HELP_SHOP_CONFIG_ADDITIONAL_SERVICE_VAT_CALCULATION_PROPORTIONAL' => 'Für die Berechnung wird der prozentuale Anteil der Artikel im Warenkorb mit gleichem MwSt.-Satz berücksichtigt.',

'HELP_SHOP_CONFIG_VIEWNETPRICE'               => 'Im Shop werden Artikelpreise als Nettopreise angezeigt.',

'HELP_SHOP_CONFIG_ENTERNETPRICE'              => 'Im Administrationsbereich müssen Artikelpreise als Nettopreise eingegeben werden.',

'HELP_REVERSE_PROXY_GET_FRONTEND'             => 'Überprüft, ob der Reverse Proxy für das Frontend verfügbar ist. Geprüft wird der Header der Startseite des Shops.<br>Der Test kann fehlschlagen, wenn verschiedene Domänen oder Protokolle (http/https) für den Administrationsbereich und den eigentlichen Shop verwendet werden.',

'HELP_REVERSE_PROXY_GET_BACKEND'              => 'Der Administrationsbereich wird ohne Reverse Proxy angezeigt. Varnish Header konnte nicht empfangen werden.',

'HELP_SHOP_CONFIG_DEBIT_OLD_BANK_INFORMATION_NOT_ALLOWED' => 'Im Bestellprozess können nur IBAN und BIC angegeben werden. Die Eingabe von Kontonummer und BLZ ist nur möglich, wenn das Kontrollkästchen nicht aktiviert ist.',

'HELP_SHOP_CONFIG_ENABLE_INTANGIBLE_PRODUCTS_AGREEMENT'   => 'Ist diese Option aktiviert, müssen Benutzer die AGB für immaterielle oder Downloadartikel im vierten Bestellschritt bestätigen. Bitte aktiviere diese Option auch für die spezifischen Produkte!',

'HELP_SHOP_CONFIG_FIELDS_CONTACTFORM'         => 'Hier können Sie die Felder des Kontaktformulars festlegen, welche vom Benutzer unbedingt auszufüllen sind.',
];
