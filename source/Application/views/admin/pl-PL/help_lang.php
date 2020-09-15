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

'HELP_SHOP_SYSTEM_OTHERCOUNTRYORDER'          => 'Możesz tutaj ustawić czy zamówienia mogą być składane z państw które nie posiadają zdefiniowanych kosztów dostawy:<ul><li>Jeśli jest to zaznaczone, użytkownicy mogą zamawiać i są informowani o indywidualnie wyliczanych kosztach dostawy.</li><li>Jeśli odnaczone, użytkownicy z krajów dla których koszty te nie są ustalone, nie mogą składać zamówień.</li></ul>',

'HELP_SHOP_SYSTEM_DISABLENAVBARS'             => 'Jeśłi zaznaczone, większość elementów nawigacyjnych zostaje ukryta podczas procesu składania zamówienia.',

'HELP_SHOP_SYSTEM_DEFAULTIMAGEQUALITY'        => 'Rekomendowane ustawienia 40-80:<br><ul><li>Poniżej 40, kompresja zaczyna byćzauważalna i zdjęcia są zamazane.</li><li>Powyżej 80, wzrost jakości niezauważalny, a rozmiar pliku wzrasta znacząco.</li></ul><br>Standardowa wartość to 75.',

'HELP_SHOP_SYSTEM_LDAP'                       => 'Proszę edytować plik core/oxldap.php.',

'HELP_SHOP_SYSTEM_SHOWVARIANTREVIEWS'         => 'Jeśli zaznaczone, recenzje produktów wariantowych widoczne będą również w produktach nadrzędnych.',

'HELP_SHOP_SYSTEM_VARIANTSSELECTION'          => 'W panelu administracyjnym dużo jest wyświtlanych list w których można przypisywać produkty. Jeśli ta opcja będzie zaznaczona, warianty również będą tam widoczne.',

'HELP_SHOP_SYSTEM_VARIANTPARENTBUYABLE'       => 'Czy produkt nadrzędny może być kupowany?<ul><li>jeśli zaznaczone, produkt nadrzędny może zostać zakupiony.</li><li>Jeśli nie zaznaczone, tylko wybrany wariant może zostać zakupiony.</li></ul>',

'HELP_SHOP_SYSTEM_VARIANTINHERITAMOUNTPRICE'  => 'Jeśli zazanaczone, skalowanie ceny rownież używane przy wariantach produktu.',

'HELP_SHOP_SYSTEM_ISERVERTIMESHIFT'           => 'Serwer na którym zainstalowana jest platforma OXID może znajdować się w innej strefie czasowej. Dzięki podanej wartości, wyświetlaną godzinę można odpowiednio dostosować, np. <kdb>+2</kdb> or <kdb>-2</kdb>',

'HELP_SHOP_SYSTEM_INLINEIMGEMAIL'             => 'Jeśli zaznaczone, zdjęcia wysyłane w mailach wysyłane są wraz z treścią wiadomości. Jeśli niezaznaczone, zdjęcia pobierane są z serwera w momencie otwierania wiadomości.',

'HELP_SHOP_SYSTEM_UTILMODULE'                 => 'Proszę wprowadzić swój plik PHP, który przeciąży funkcje Sklepu podczas uruchamiania.',

'HELP_SHOP_CACHE_ENABLED'                     => 'Jeśli Dynamic content caching (Dynamiczna pamięć podręczna) jest aktywne , dodatkowe treści są cacheowane w celu zwiększenia wydajności. Zalecane jest wyłączenie w stanie "deweleperskim"',

'HELP_SHOP_CACHE_LIFETIME'                    => 'Ile sekund treść ma być przechowywana w pamięci podręcznej (cache). Standardowa wartość to 36000 sekund.',

'HELP_SHOP_CACHE_CLASSES'                     => 'Tutaj podajemy które klasy mają być cachowane.<br> Wymagana jest zaawansowana znajomość systemu OXID!',

'HELP_SHOP_CACHE_REVERSE_PROXY_ENABLED'       => 'Aktywuje cachowanie HTTP Reverse Proxy. Uwaga: Nie należy używać jednocześnie z włączonym "Dynamic Content Caching", może to spowolinić działania systemu.',

'HELP_SHOP_CACHE_LAYOUT_CACHE_AGE'            => 'Ustawia czas życia layoutu strony w sekundach. Zostanie to zamieszczone w nagłówkach HTTP, w znaczniku "Age".',

'HELP_SHOP_CONFIG_ORDEROPTINEMAIL'            => 'Jeśil aktywowane, użytkownik dostaje e-mail z linkiem potwierdzającym podczas rejestracji na newsletter. Dopiero po kliknięciu w link z tej wiadomości użytkownik jest rejestrowany w bazie newslettera.<br>Zabezpiecza to przed niechcianymi rejestracjami na newsletter oraz fałszywymi adresami email.',

'HELP_SHOP_CONFIG_BIDIRECTCROSS'              => 'Dzięki produktom powiązanym, można prezentować produkty o podobnej tematyce do danego produktu którymi użytkownik również może być zainteresowany. Np. dla samochodu produktem powiązanym mogą być opony.<br>Jeśli włączone są dwukierunkowe produkty powiązane, również na stronie opon samochód zostanie zaprezentowany.',

'HELP_SHOP_CONFIG_STOCKONDEFAULTMESSAGE'      => 'Dla każdego produktu może zostać zdefiniowany komunikat jeśli produkt dostępny jest na magazynie.',

'HELP_SHOP_CONFIG_STOCKOFFDEFAULTMESSAGE'     => 'Dla każdego produktu może zostać zdefiniowany komunikat jeśli produkt nie jest dostępny na magazynie.',

'HELP_SHOP_CONFIG_OVERRIDEZEROABCPRICES'      => 'Można skonfigurować ceny dla konkretnyh użytkowników. Jeśli uzupełnione zostaną pola Cena A, Cena B bądź Cena C - użytkownicy należący do danej grupy użytkowników (Grupa A, Grupa B. Grupa C) zobaczy na stronie odpowiednią cenę.<br>Jeśli zaznaczone, standardowa cena zostanie wyświetlona jeśli nie jest skonfigurowana Cena A, B lub C.<br>',

'HELP_SHOP_CONFIG_SEARCHFIELDS'               => 'Tutaj wybierane są pola tabeli w bazie danych, które są uwzględniane podczas wyszukiwania produktów.Najpopularniejsze:<ul><li>oxtitle = Tytuł</li><li>oxshortdesc = Krótki opis</li><li>oxsearchkeys = słowa kluczowe przypisane do produktu</li><li>oxartnum = numer produktu</li><li>oxtags    = tagi</li></ul>',

'HELP_SHOP_CONFIG_SORTFIELDS'                 => 'Pola po których można sortować produkty w panelu administracyjnym.<br>Najpopularniejsze:<ul><li>oxtitle = Tytuł</li><li>oxprice = Cena</li><li>oxvarminprice = Najniższa cena jeśli są warianty z różnymi cenami.</li><li>oxartnum = Numer produktu</li><li>oxrating = Oceny produktu</li><li>oxstock = Stan magazynowy</li></ul>',

'HELP_SHOP_CONFIG_MUSTFILLFIELDS'             => 'Pola obowiązkowe podczas rejestracji użytkownika.<br>Najpopularniejsze:<ul><li>oxuser__oxfname = imię</li><li>oxuser__oxlname = nazwisko</li><li>oxuser__oxstreet = ulica</li><li>oxuser__oxstreetnr = numer domu</li><li>oxuser__oxzip = kod pocztowy</li><li>oxuser__oxcity = miasto</li><li>oxuser__oxcountryid = kraj</li><li>oxuser__oxfon = telefon</li></ul><br>Można zdefiniować również pola obowiązkowe jeśli inny adres dostawy jest ustawiony, np:<ul><li>oxaddress__oxfname = imię</li><li>oxaddress__oxlname = nazwisko</li><li>oxaddress__oxstreet = ulica</li><li>oxaddress__oxstreetnr = numer domu</li><li>oxaddress__oxzip = kod pocztowy</li><li>oxaddress__oxcity = miasto</li><li>oxaddress__oxcountryid = kraj</li><li>oxaddress__oxfon = telefon</li></ul>',

'HELP_SHOP_CONFIG_USENEGATIVESTOCK'           => 'Z opcją <span class="navipath_or_inputname">Ujemne stany magazynowe</span> możesz zdefiniować jak mają być liczone stany magazynowe produktów które są niedostępne w magazynie:<br><ul><li>Jeśli zaznaczone, ujemne wartości są przyjmowane jeśli produkt zostaje kupiony.</li><li>Jeśli odznaczone, snat magazynowy produktu nigdy nie spadnie poniżej zera.</li></ul>',

'HELP_SHOP_CONFIG_SETORDELETECURRENCY'        => '',

'HELP_SHOP_CONFIG_NEWARTBYINSERT'             => 'Na stronie publicznej, najnowsze produkty widoczne będą w sekcji <span class="filename_filepath_or_italic">Nowości!</span>.  Tutaj konfigurujesz jak najnowszy ma być traktowany: czy po dacie utworzenia czy po dacie modyfikacji/zamówienia.',

/** @deprecated since v6.5.4 (2020-04-06); Suggest feature will be removed completely */
'HELP_SHOP_CONFIG_ALLOW_SUGGEST_ARTICLE'      => '',
/** end deprecated */

'HELP_SHOP_CONFIG_SEND_TECHNICAL_INFORMATION_TO_OXID' => '',

'HELP_SHOP_CONFIG_DELETERATINGLOGS'           => 'Jeśli użytwnik raz oceni produkt, nie będzie mógł ocenić go ponownie. Tutaj możesz zdefiniować po ilu dniach możliwe będzie wystawienie kolejnej oceny. Jeśli puste - użytkownik będzie mógł ocenić tylko raz.',

'HELP_SHOP_CONFIG_DISABLEONLINEVATIDCHECK'    => 'Używane do walidacji poprawności numeru NIP',

'HELP_SHOP_CONFIG_ALTVATIDCHECKINTERFACEWSDL' => 'Podajemy alternatywny adres skryptu badającego poprawność numeru NIP.',

'HELP_SHOP_CONFIG_PSLOGIN'                    => 'Dzięki tej opcji, dostęp do stron systemu będą mieli tylko zalogowaniu użytkownicy.',

'HELP_SHOP_CONFIG_BASKETEXCLUDE'              => 'Opcja ta, powoduje że użytkownik może zamieścić w koszyku produkty z tylko jednej kategorii. Jeśli wykryta zostanie zmiana kategorii, użytkownik zostanie zapytany, czy chce dokończyć proces kupowania tych produktów czy kontynuować zakupy (wtedy zawartość koszyka jest usuwana).',

'HELP_SHOP_CONFIG_BASKETRESERVATION'          => 'Stan magazynowy produktu zmniejszany jest w momencie kiedy zamówienie potwierzdone jest przez użytkownikai proces składania zamówienia jest zakończony.<br><br> Jeśli włączone, stan magazynowy zmniejszany jest już w momencie zamieszczenia go w koszyku, co pozwala na zrobienie <b>rezerwacji</b>',

'HELP_SHOP_CONFIG_BASKETRESERVATIONTIMEOUT'   => 'Czas po jakim rezerwacje są anulowane, czyli koszyk klienta jest czyszczony i przywracany stan magazynowy.',

'HELP_SHOP_CONFIG_INVITATION'                 => 'Zaproszenia używane do zaprszania znajomych i zbierania punktów za zaproszenia.',

'HELP_SHOP_CONFIG_POINTSFORINVITATION'        => 'Punkty przyznawane są po zarejestrowaniu się zaproszonego użytkownika.',

'HELP_SHOP_CONFIG_POINTSFORREGISTRATION'      => 'Punkty przyznawane są po zarejestrowaniu się zaproszonego użytkownika.',

// @deprecated since v6.5.1 (2019-02-07); credit card payment method will be no longer supported
'HELP_SHOP_CONFIG_ATTENTION'                  => 'Uwaga: Nawet jeśli szyfrowanie jest włączone, karty kredytowe zabraniają tego!',
// END deprecated

'HELP_SHOP_CONFIG_SHOWTSINTERNATIONALFEESMESSAGE' => 'W czwartym kroku procesu zakupowego strona CMS "oxtsinternationalfees" zostanie dodatkowo wyświetlony.',

'HELP_SHOP_CONFIG_SHOWTSCODMESSAGE'           => 'W 4 kroku procesu zamawiania jest dodatkowo wyświetlana strona "oxtscodmessage".',

'HELP_SHOP_CONFIG_DOWNLOADS'                  => 'Sklep z produktami do pobrania ze strony.',

'HELP_SHOP_CONFIG_DOWNLOADS_PATH'             => 'Ścieżka gdzie przechowywane będą pliki do pobrania.',

'HELP_SHOP_CONFIG_MAX_DOWNLOADS_COUNT'        => 'Tutaj definiujemy ile razy jeden użytkownik może pobrać dany produkt po zakupie.Standardowa wartość ustawiana w  Zarządzaj produktami -> Produkty -> Pobrania.',

'HELP_SHOP_CONFIG_LINK_EXPIRATION_TIME_UNREGISTERED' => 'Tutaj definujemy ile razy plik może być pobrany z tego samego linku po zakupie przez użytkownika niezarejestrowanego',

'HELP_SHOP_CONFIG_LINK_EXPIRATION_TIME'       => 'Czas aktywności linku pliku do pobrania.',

'HELP_SHOP_CONFIG_PARCELSERVICE'              => '',

'HELP_SHOP_CONFIG_DOWNLOAD_EXPIRATION_TIME'   => 'Czas aktywności linku pliku do pobrania.',

'HELP_SHOP_CONFIG_LOADREVIEWS'                  => '',

'HELP_SHOP_CONFIG_INCLUDE_PRODUCT_REVIEW_LINKS_IN_ORDER_EMAIL' => '',

'HELP_SHOP_MALL_MALLMODE'                     => 'Wybierz co ma być widoczne na stronie startowej sklepu:<ul><li><span class="navipath_or_inputname">Wybór sklepu</span>: Strona na której użytkownik wybiera do którego sklepu chce wejść.</li><li><span class="navipath_or_inputname">Strona główna głównego sklepu</span></li></ul>',

'HELP_SHOP_MALL_PRICEADDITION'                => 'Możesz zdefiniować dopłatę do wszystkich produktów: procentową (<span class="userinput_or_code">%</span>) bądź (<span class="userinput_or_code">kwotową</span>).',

'HELP_SHOP_PERF_NEWESTARTICLES'               => 'Lista najnowszych produktów widoczna jako <span class="filename_filepath_or_italic">Nowości!</span>. Tutaj ustawiasz jak tworzona jest ta lista:<ul><li><span class="userinput_or_code">wyłączone</span>: brak listy.</li><li><span class="userinput_or_code">ręcznie</span>: wskazujesz w <span class="navipath_or_inputname">Informacje klienta -> Promocje -></span> które produkty mają się tam znaleźć.</li><li><span class="userinput_or_code">automat</span>: produkty dodawane są tam automatycznie.</li></ul>',

'HELP_SHOP_PERF_TOPSELLER'                    => 'Lista  <span class="filename_filepath_or_italic">Najczęsciej sprzedawanych</span>. Tutaj ustawiasz jak tworzona jest ta lista:<ul><li><span class="userinput_or_code">wyłączone</span>: brak listy.</li><li><span class="userinput_or_code">ręcznie</span>: wskazujesz w <span class="navipath_or_inputname">Informacje klienta -> Promocje -></span> które produkty mają się tam znaleźć.</li><li><span class="userinput_or_code">automat</span>: produkty dodawane są tam automatycznie.</li></ul>',

'HELP_SHOP_PERF_LOADFULLTREE'                 => 'Jeśli zaznaczone, całe drzewo kategorii wyświetlane jest w menu na stronie publicznej(wszystkie kategorie są rozwinięte). Działa tylko wtedy jeśli kategorie nawigacyjne nie są zamieszczone na górze strony.',

'HELP_SHOP_PERF_LOADACTION'                   => 'Jeśli zanzaczone, promocje jak <span class="filename_filepath_or_italic">Nowości!</span> i <span class="filename_filepath_or_italic">Najczęściej sprzedawane</span> są załadowane i wyświetlone.',

'HELP_SHOP_PERF_USESELECTLISTPRICE'           => 'W listach wyboru dopłaty/rabaty mogą być zdefiniowane. Jeśli zaznaczone, dopłaty/rabaty są użyte.',

'HELP_SHOP_PERF_DISBASKETSAVING'              => 'Koszyki zarejstrowanych użytkowników są przechowywane. Po powrocie do sklepu koszyk użytkownika zostanie przywrócony do stanu pozostawionego. Jeśli zaznaczone, zawartości koszyka nie będą zapamiętywane.',

'HELP_SHOP_PERF_LOADDELIVERY'                 => 'Jeśli odznaczone, nie będą przeliczane koszty dostawy. Zawsze będą miały wartość 0.00.',

'HELP_SHOP_PERF_LOADPRICE'                    => 'Jeśli odznaczone, produkty nie będą miały wyświetlanych cen.',

'HELP_SHOP_PERF_PARSELONGDESCINSMARTY'        => 'Jeśli aktywne, opisy produktów i kategorie są parsowane przez Smarty: można używać znaczników Smarty (zaawansowane)',

'HELP_SHOP_PERF_LOADSELECTLISTSINALIST'       => 'Normalnie listy wyboru są wyświetlane w widoku szczegółów produktu. Jeśli aktywowane, będą widoczne również na stronach z listą produktów (np, wyniki wyszukiwania, stronach kategorii).',

'HELP_SHOP_PERF_CHECKIFTPLCOMPILE'            => 'Jeśli aktywowane, system sam sprawdza czy szablony uległy modyfikacji przy każdym odwołaniu. Jeśli tak, zostają wygenerowane ponownie. Warto aktywować na etapie "deweloperskim". W trybie produkcyjnym warto odznaczyć. <br>Więcej na <a href="http://www.oxid-esales.com/en/resources/help-faq/eshop-manual/advices-adepting-templates" target="_blank">stronie</a>.',

'HELP_SHOP_PERF_CLEARCACHEONLOGOUT'           => 'Normalnie cache usuwany jest jak tylko wprowadzone są zmiany w panelu administracyjnym. To może powodować problem z wydajnością. Jeśli zaznaczone, cache jest usuwany tylko wtedy gdy wylogujesz się z panelu administracyjnego.',

'HELP_SHOP_SEO_TITLEPREFIX'                   => 'Każda strona ma swój tytuł, który wyświetlany jest górnym pasku Twojej przeglądarki. Z polami <span class="navipath_or_inputname">Tytuł Prefix</span> oraz <span class="navipath_or_inputname">Tytuł Suffix</span> możesz zamieścić tekst który wyświetli się przed i za tytułem strony:',

'HELP_SHOP_SEO_TITLESUFFIX'                   => 'Każda strona ma swój tytuł, który wyświetlany jest górnym pasku Twojej przeglądarki. Z polami <span class="navipath_or_inputname">Tytuł Prefix</span> oraz <span class="navipath_or_inputname">Tytuł Suffix</span> możesz zamieścić tekst który wyświetli się przed i za tytułem strony:',

'HELP_SHOP_SEO_IDSSEPARATOR'                  => 'Separator używany jest jeśli nazwy kategorii składają się z kilku słów. Separator używany wtedy jest zamiast spacji przy budowaniu adresu URL, np. www.youreshop.com/category-name-of-several-words<br>Jeśli nie nie zostanie podane, "-" będzie użyty.',

'HELP_SHOP_SEO_SAFESEOPREF'                   => 'Jeśli kilka produktów ma tą samą nazwę w tej samej kategorii, dostały by ten sam adres URL. Aby temu zapobiec SEO Suffix jest dodawany. Jeśli SEO Suffix nie jest zdefiniowany, <span class="filename_filepath_or_italic">oxid</span> jest używany.',

'HELP_SHOP_SEO_RESERVEDWORDS'                 => 'Niektóre URLe są zdefiniowane odgórnie, np. www.youreshop.com/admin dla panelu administracyjnego. Jeśli kategoria ma nazwę <span class="filename_filepath_or_italic">admin</span> to adres SEO URL byłby www.youreshop.com/admin, więc kategoria byłaby nieosiągalna z poziomu tego URL. W takich przypadkach SEO suffix jest dodawany do takich URL. Tutaj można wskazać któe URL będą zmodyfikowane w ten sposób automatycznie.',

'HELP_SHOP_SEO_SKIPTAGS'                      => 'Jeśli nie ma META tagów dla produktów i kategorii, zostaną utworzone automatycznie. W ten sposób bardzo często słowa mogą zostać pominięte. Wszystkie słowa wpisane tutaj zostaną pominięte podczas tworzenia META tagów.',

'HELP_SHOP_SEO_LOWERCASEURLS'                 => '',

'HELP_SHOP_SEO_STATICURLS'                    => 'Dla stron specjalnych, (np. regulamin) można wytworzyć specjalne adresy URL. Tworząc statyczny adres URL, standardowy URL pokazywany jest w <span class="navipath_or_inputname">Standard URL</span>. Poniżej można zdefiniować SEO URL dla każdego języka.',

'HELP_SHOP_MAIN_PRODUCTIVE'                   => 'Jeśli to ustawienie jest <span class="warning_or_important_hint">nie</span> aktywne, informacje dotyczące czasu wykonywania i debugowania będą wyświetlane na dole każdej strony. Przydatne w stanie "deweloperskim".<br><span class="warning_or_important_hint">Aktywuj kiedy sklep jest w fazie produkcyjnej.<br>Więcej na <a href="http://wiki.oxidforge.org/Tutorials/Check_before_going_live" target="_blank">OXIDforge</a>.',

'HELP_SHOP_MAIN_ACTIVE'                       => 'Z opcją <span class="navipath_or_inputname">Aktywny</span> możesz włączyć/wyłączyć cały sklep. Jeśli sklep jest wyłączony, wyświetlany będzie komunikat że sklep jest tymaczsowo niedostępny.',

'HELP_SHOP_MAIN_INFOEMAIL'                    => 'Wszystkie maile wysyłane z formularza kontaktowego wysyłane są na ten adres.',

'HELP_SHOP_MAIN_ORDEREMAIL'                   => 'Email na który wysyłąne są maile z zamówieniem jeśli zostanie ono złożone na stronie publicznej. Odpowiedzi na ten email kierowane są do adresu zawartego w  <span class="navipath_or_inputname">Odpowiedz na email z zamówieniem</span>.',

'HELP_SHOP_MAIN_OWNEREMAIL'                   => 'Email na który wysyłąne są maile z zamówieniem jeśli zostanie ono złożone na stronie publicznej.',

'HELP_SHOP_MAIN_SMTPSERVER'                   => 'Do wysyłki maili z systemu potrzebne są dane dostępowe do serwera SMTP. Więcej na <a href="http://www.oxid-esales.com/de/resources/help-faq/eshop-manual/entering-smtp-data" target="_blank">accordant manual entry</a>.',

'HELP_ARTICLE_MAIN_ALDPRICE'                  => 'Z tą opcją możesz ustawić specjalne ceny dla konkrentych użytkowników. Więcej info na <a href="http://www.oxid-esales.com/de/resources/help-faq/eshop-manual/set-alternative-prices-special-users" target="_blank">eShop Manual</a> na stronie OXID eSales.',

'HELP_ARTICLE_MAIN_VAT'                       => 'Tutaj możesz podać indywidualną wartość podatku VAT dla tego produktu. Wartości podatku dla tego produktu wszędzie będą wyliczane wg tej wartości (koszyk, zamówienie, faktura)',

'HELP_ARTICLE_EXTEND_UNITQUANTITY'            => 'Z opcjami <span class="navipath_or_inputname">Ilość</span> i <span class="navipath_or_inputname">Jednostka</span> możesz zdefiniować cenę za ilość jednostki. Cena ta będzie wyświetlana przy produkcie (np. 1.43 EUR za litr). W polu <span class="navipath_or_inputname">Ilość</span>, wpisujesz ilość  (e.g. <span class="userinput_or_code">1.5</span>), w <span class="navipath_or_inputname">Jednostka</span> jednostkę (np. <span class="userinput_or_code">litr</span>). Możesz wybrać jednostkę z listy zdefiniowanych lub wpisać własną wybierając "-", i wpisując jednostkę ręcznie. Jeśli chcesz do listy dodać własną jednostkę  <a href="http://wiki.oxidforge.org/Tutorials/Adding_new_unit_types" target="_blank">tutaj</a> znajdziesz instrukcję.',

'HELP_ARTICLE_EXTEND_EXTURL'                  => 'W tym polu wpisujemy adres URL pod którym będzie dostępne więcej informacji o produkcie (np. strona producenta). W polu <span class="navipath_or_inputname">Tekst linku zewnętrznego</span> podajesz słowo które zostaje podlinkowane, np. <span class="userinput_or_code">Sprawdź wolne terminy</span>, <span class="userinput_or_code">Więcej informacji</span>.',

'HELP_ARTICLE_EXTEND_TPRICE'                  => 'Tutaj podawana jest sugerowana cena detaliczna producenta. Jeśli zostanie zdefiniowana, będzie wyświetlana ponad ceną obowiązującą w sklepie.',

'HELP_ARTICLE_EXTEND_QUESTIONEMAIL'           => 'W tym polu podajesz adres alternatywny email na który wysyłane będą zapytania użytkowników o twn produkt.',

'HELP_ARTICLE_EXTEND_NONMATERIAL'             => 'Jest to produkt nadrzędny, dla wariantów. Parametry tego produktu dziedziczone są przez produkty będące wariantami tego produktu.',

'HELP_ARTICLE_EXTEND_FREESHIPPING'            => 'Ustawienie jest dziedziczone z produktu "macierzystego" do wariantów i dotyczy całego produktu.',

'HELP_ARTICLE_EXTEND_BLFIXEDPRICE'            => 'Alarm cenowy może zostać wyłączony dla tego produktu.',

'HELP_ARTICLE_EXTEND_SKIPDISCOUNTS'           => 'Jeśli aktywne, wszystkie zniżki generujące ceny ujemne produktów nie będą uwzględniane. Dotyczy rabatów i voucherów.',

'HELP_ARTICLE_EXTEND_TEMPLATE'                => 'Strona produktowa może być wyświetlana wg innego szablonu. Aby tak było, należy podać sćieżkę dostępu i nazwę szablonu który ma być użyty. Więcej info na <a href="http://www.oxid-esales.com/de/resources/help-faq/eshop-manual/display-certain-products-or-categories-another-template" target="_blank">stronie</a>.',

'HELP_ARTICLE_EXTEND_ISCONFIGURABLE'          => 'Jeśli produkt jest konfigurowalny, dodatkowe pole tekstowe zostanie wyświetlone na stronie produktu i w koszyku. Tutaj klient może doprecyzować zamawiany produkt.<br><br>Przykład: t-shirts z nadrukowanym tekstem. Wtedy klient może podać tekst który ma zostać wydrukowany.',

'HELP_ARTICLE_EXTEND_UPDATEPRICE'             => 'Ceny mogą być zmienione w zdefiniowanym czasie wg podanej tutaj wartości. Jeśli podane będzie "0", cena nie ulegnie zmianie.',

'HELP_ARTICLE_EXTEND_SHOWCUSTOMAGREEMENT'     => 'Jeśli ta opcja jest aktywna, Klient musi potwierdzić ogólne warunki sprzedaży (Regulamin sklepu) w czwartym kroku procesu zakupowego dla specyficznych produktów. Proszę upewnić się, że ta opcja jest aktywna przy zakupie treści cyfrowych niezapisanych na nośniku trwałym.',

'HELP_ARTICLE_FILES_MAX_DOWNLOADS_COUNT'      => 'Tutaj definiujemy ile razy użytkownik może pobrać plik z tego samego linku który otrzymał po zamówieniu. Ustawienie to nadpisuje ustawienia z zakładki. Ustawienia główne -> Ustawienia jądra -> Ustawienia -> Pobieranie .',

'HELP_ARTICLE_FILES_LINK_EXPIRATION_TIME_UNREGISTERED' => 'Tutaj definiujemy ile razy użytkownik może pobrać plik z tego samego linku który otrzymał po zamówieniu bez rejestracji w sklepie.  Ustawienia główne -> Ustawienia jądra -> Ustawienia -> Pobieranie .',

'HELP_ARTICLE_FILES_LINK_EXPIRATION_TIME'     => 'Czas w godzinach, aktywności linku po założeniu zamówienia.',

'HELP_ARTICLE_FILES_NEW'                      => 'Enter the name of a via FTP transferred file or upload a new file here. Note that large files should be uploaded via FTP. File size limitation is valid only when file is uploaded via admin. This limitation depends on the PHP settings of the server and might be edited only there.',

'HELP_ARTICLE_FILES_DOWNLOAD_EXPIRATION_TIME' => 'Czas w godzinach, aktywności linku po pierwszym pobraniu pliku.',

'HELP_ARTICLE_PICTURES_ICON'                  => 'Ikony są najmniejszymi zdjęciami produktu. Wyświetlane np w koszyku.<br>Załączenie ikony użytkownika nadpisze plik wygenerowany automatycznie przez system ze zdjęcia pierwszego.<br>Po wgraniu ikony, nazwa pliku będzie wyświetlana, jeśli nie było jeszcze zdjęcie załączane, wyświetlane będzie --- .<br>Więcej info na <a href="http://www.oxid-esales.com/en/resources/help-faq/eshop-manual/product-images-basics" target="_blank">stronie</a>.',

'HELP_ARTICLE_PICTURES_THUMB'                 => 'Miniatury małymi zdjęciami produktów. Wyświetlane np na stronie z listą produktów (kategoria, wyniki wyszukiwania).<br>Załączenie minaitury użytkownika nadpisze plik wygenerowany automatycznie przez system ze zdjęcia pierwszego.<br>Po wgraniu miniatury, nazwa pliku będzie wyświetlana, jeśli nie było jeszcze zdjęcie załączane, wyświetlane będzie --- .<br>Więcej info na <a href="http://www.oxid-esales.com/en/resources/help-faq/eshop-manual/product-images-basics" target="_blank">stronie</a>.',

'HELP_ARTICLE_PICTURES_PIC1'                  => 'Zdjęcia wyświetlane są na stronie ze szczegółami o produkcie. Można zamieścić do 7 zdjęć produktu. Po wgraniu zdjęcia, nazwa pliku będzie wyświetlana, jeśli nie było jeszcze zdjęcie załączane, wyświetlane będzie --- <br>Zdjęcia mogą mieć maksymalnie: 2 MB lub 1500 * 1500 px rozdzielczości. Ograniczenia te są po to aby uniknąć problemów technicznych z generowaniem obrazków. Po wgraniu zdjęcia, zdjęcie główne, przybliżone, ikona i miniaturka zostaną wygenerowane automatycznie.<br>Więcej info na <a href="http://www.oxid-esales.com/en/resources/help-faq/eshop-manual/product-images-basics" target="_blank">stronie</a>.',

'HELP_ARTICLE_PICTURES_ZOOM1'                 => 'Zdjęcia przybliżone (Zoom) są zdjęcia w dużej rozdzielczości, które mogą być otwierane na stronie ze szczegółami o produkcie. <br>Po wgraniu zdjęcia, nazwa pliku będzie wyświetlana, jeśli nie było jeszcze zdjęcie załączane, <span class="userinput_or_code">nopic.jpg</span> zostanie wyświetlone.<br>Więcej info na <a href="http://www.oxid-esales.com/en/resources/help-faq/eshop-manual/product-images-basics" target="_blank">stronie</a>.',

'HELP_ARTICLE_STOCK_REMINDACTIV'              => 'Ustawienie dziedziczone z produktu "macierzystego" do wariantów i stosowane do całego produktu.',

'HELP_ARTICLE_STOCK_STOCKFLAG'                => 'Można wybrać spośród 4 ustawień:<ul><li><span class="userinput_or_code">Standard</span>: Produkt może być zamawiany nawet jeśli jest wyprzedany.</li><li><span class="userinput_or_code">Zewnętrzny magazyn</span>: Produkt zawsze może być zamawiany, i zawsze wyświetlany jest jako dostępny (na magazynie).</li><li><span class="userinput_or_code">Jeśli wyprzedany, wyłaczony</span>: Produkt nie wyświetlany na stronie jeśli zostanie wyprzedany.</li><li><span class="userinput_or_code">Jeśli wyprzedany, nie zamawialny</span>: Produkt wyświetlany z informacją że nie jest możliwy do zamówienia.</li></ul>',

'HELP_ARTICLE_IS_DOWNLOADABLE'                => 'Pliki tego produktu mogą być pobierane.',

'HELP_ARTICLE_STOCK_REMINDAMAOUNT'            => 'Opcja ta powoduje wysłanie wiadomości email z informacją że stan magazynowy jest niebezpiecznie niski. Email wysyłany jest w momencie kiedy stan agazynowy spadnie poniżej zadeklarowanego tutaj poziomu',

'HELP_ARTICLE_STOCK_DELIVERY'                 => 'Tutaj podawana jest data kiedy produkt będzie znowu dostępny, jeśli został wyprzedany. Format rok-miesiąc-dzien, np. 2013-02-16.',

'HELP_ARTICLE_SEO_FIXED'                      => 'Można pozwolić systemowi na samoczynne przeliczanie SEO URL. Strona produktowa dostaje nowy SEO URL, w momencie kiedy np. zmieni się nazwa produktu. To ustawienie, blokuje te zmiany: jeśli aktywne, stary SEO URL zostaje zachowany i nowy SEO URL nie jest generowany.',

'HELP_ARTICLE_SEO_KEYWORDS'                   => 'Te słowa kluczowe są zintegrowane z kodem źródłowym produktu. Słowa zamieszczne w META tagach (keywords), które używane jest przez wyszukiwarki. Jeśli pusty, zostanie wygenerowany automatycznie',

'HELP_ARTICLE_SEO_DESCRIPTION'                => 'Ten opis jest zintegrowany z kodem źródłowym producenta. Słowa zamieszczne w META tagach (description), które używane jest przez wyszukiwarki. Jeśli pusty, zostanie wygenerowany automatycznie',

'HELP_ARTICLE_SEO_ACTCAT'                     => 'Możesz zdefiniować kilka SEO URLs dla produktu: np dla wybranych kategorii i producentów. Z opcją <span class="navipath_or_inputname">Aktywna kategoria/dostawca</span> możesz wybrać który SEO URL chcesz edytować.',

'HELP_ARTICLE_STOCK_STOCKTEXT'                => 'Proszę podać komunikat który będzie się wyświetlał jeśli produkt jest na magazynie. Więcej na <a href="http://www.oxid-esales.com/en/resources/help-faq/eshop-manual/setting-messages-stock-levels" target="_blank">stronie</a>.',

'HELP_ARTICLE_STOCK_NOSTOCKTEXT'              => 'Proszę podać komunikat który będzie się wyświetlał jeśli brak jest produktu na magazynie. Więcej na <a href="http://www.oxid-esales.com/en/resources/help-faq/eshop-manual/setting-messages-stock-levels" target="_blank">stronie</a>.',

'HELP_ARTICLE_STOCK_AMOUNTPRICE_AMOUNTFROM'   => 'Tutaj ustawiasz przedział ilościowy w którym obowiązuje dana cena.<br>więcej info na <a href="http://www.oxid-esales.com/en/resources/help-faq/eshop-manual/setting-graduated-prices" target="_blank">stronie, rozdział: scale price article in the manual.</a>.',

'HELP_ARTICLE_STOCK_AMOUNTPRICE_PRICE'        => 'Tutaj podajemy cenę dla ilości ustawionych powyżej. Wartości rabatu mogą być podane kwotowo lub procentowo.<br> Więcej info na <a href="http://www.oxid-esales.com/en/resources/help-faq/eshop-manual/setting-graduated-prices" target="_blank">stronie, rozdział: scale price article in the manual.</a>.',

'HELP_ARTICLE_VARIANT_VARNAME'                => 'Definiuje nazwę listy wyboru, np. <span class="userinput_or_code">Kolor</span> lub <span class="userinput_or_code">Rozmair</span>.<br> Wiecej na <a href="http://www.oxid-esales.com/en/resources/help-faq/eshop-manual/setting-variants-a-product" target="_blank">stronie, rozdział: variants article in the manual</a>.',

'HELP_ATTRIBUTE_MAIN_DISPLAYINBASKET'         => 'Jeśli zaznaczone, ten atrybut z ustawioną wartością będzie widoczny w koszyku i procesie skłądania zamówienia przy produkcie.',

'HELP_CATEGORY_MAIN_HIDDEN'                   => 'Jeśli jest ukryta kategoria choć aktywna nie bedzie wyświetlana na stronie głównej w nawigacji.',

'HELP_CATEGORY_MAIN_PARENTID'                 => 'Ustawienie kategorii nadrzędnej:<br><ul><li>Jeśli ma to być jedna z kategorii głównych, proszę wybrać <span class="userinput_or_code">--</span>.</li><li>Jeśli ma to być podkategoria, należy wybrać kategorię nadrzędną.</li></ul>',

'HELP_CATEGORY_MAIN_EXTLINK'                  => 'Jeśli po kliknięciu na nazwę kategorii użytkownik ma zostać przeniesiony na zewnętrzą stronę, tutaj podajemy adres URL. </span>',

'HELP_CATEGORY_MAIN_PRICEFROMTILL'            => 'Podajemy zakres ceny produktów należących do tej kategorii. Produkty z cenami poza zakresem, nie będą wyświetlane.',

'HELP_CATEGORY_MAIN_DEFSORT'                  => 'Wybierz atrybut po którym produkty mają być domyślnie sortowane. Więcej info na <a href="http://www.oxid-esales.com/en/resources/help-faq/eshop-manual/sorting-products" target="_blank">stronie</a>.',

'HELP_CATEGORY_MAIN_SORT'                     => 'Wybierz kierunek w którym produkty mają być sortowane',

'HELP_CATEGORY_MAIN_THUMB'                    => 'Przypisuje zdjęcie do kategorii. Zdjecie pokazywane jest na górze strony kategorii która jest wyświetlane.',

'HELP_CATEGORY_MAIN_PROMOTION_ICON'           => 'Możesz przypisać obrazek przypisany do kategorii która jest w promocji',

'HELP_CATEGORY_MAIN_SKIPDISCOUNTS'            => '<li>Opcja ta nie pozwoli na ujemne ceny w przypadku promocji i rabatów.',

'HELP_CATEGORY_SEO_FIXED'                     => 'Można pozwolić systemowi na samoczynne przeliczanie SEO URL. Strona produktowa dostaje nowy SEO URL, w momencie kiedy np. zmieni się nazwa produktu. To ustawienie, blokuje te zmiany: jeśli aktywne, stary SEO URL zostaje zachowany i nowy SEO URL nie jest generowany.',

'HELP_CATEGORY_SEO_KEYWORDS'                  => 'Te słowa kluczowe są zintegrowane z kodem źródłowym produktu. Słowa zamieszczne w META tagach (keywords), które używane jest przez wyszukiwarki. Jeśli pusty, zostanie wygenerowany automatycznie',

'HELP_CATEGORY_SEO_DESCRIPTION'               => 'Ten opis jest zintegrowany z kodem źródłowym produktu. Słowa zamieszczne w META tagach (description), które używane jest przez wyszukiwarki. Jeśli pusty, zostanie wygenerowany automatycznie',

'HELP_CATEGORY_SEO_SHOWSUFFIX'                => 'Tutaj ustawiany jest suffix który jest pokazywany na pasku tytułowym przeglądarki kiedy okno wyświetlana jest strona kategorii. Sufix może zostać ustawiony w <span class="navipath_or_inputname">Ustawienia główne -> Ustawienia jądra -> SEO -> Tytuły Suffix</span>.',

'HELP_CONTENT_MAIN_SNIPPET'                   => 'Jeśli wybierzesz <span class="navipath_or_inputname">Snippet</span> możesz wyświetlić daną treść w ramach wskazanej strony poprzez podanie jej identyfikatora: <span class="userinput_or_code">[{ oxcontent ident=ident_of_the_cms_page }]</span>',

'HELP_CONTENT_MAIN_MAINMENU'                  => 'Jeśli wybierzesz <span class="navipath_or_inputname">Górne Menu</span>, link do tej strony zostanie wyświetlony w górnym menu.',

'HELP_CONTENT_MAIN_CATEGORY'                  => 'Jeśli wybierzesz <span class="navipath_or_inputname">Kategoria</span>, link do tej strony zostanie wyświetlony w drzewie kategorii, pod wszystkimi kategoriami.',

'HELP_CONTENT_MAIN_MANUAL'                    => 'Jeśli wybierzesz opcję <span class="navipath_or_inputname">Ręcznie</span>, link do tej strony zostanie wytworzony, który może zostać użyty wewnątrz każdej innej strony CMSowej. Link do tej strony zostanie wygenerowane pod treścią po wciśnięciu przicisku <span class="navipath_or_inputname">Zapisz</span>',

'HELP_CONTENT_SEO_FIXED'                      => 'Możesz pozwolić systemowi na automatyczne generowanie SEO URL. Strona CMSowa dostaje nowy SEO URL, kiedy np tytuł strony się zmienia. Ustawienie to wyłącza generowanie nowego adresu po takiej zmianie i strona jest dostępna cały czas pod tym samym adresem URL jeśli jest zaznaczona.',

'HELP_CONTENT_SEO_KEYWORDS'                   => 'Te słowa kluczowe są zintegrowane z kodem źródłowym produktu. Słowa zamieszczne w META tagach (keywords), które używane jest przez wyszukiwarki. Jeśli pusty, zostanie wygenerowany automatycznie',

'HELP_CONTENT_SEO_DESCRIPTION'                => 'Ten opis jest zintegrowany z kodem źródłowym strony. Słowa zamieszczne w META tagach (description), które używane jest przez wyszukiwarki. Jeśli pusty, zostanie wygenerowany automatycznie',

'HELP_DELIVERY_MAIN_COUNTRULES'               => 'Ustawienie to sugeruje jak często ceny mają być przeliczane:<ul><li><span class="userinput_or_code">Jednorazowo na koszyk</span>: Cena jest przeliczana raz na cały proces skłądania zamówienia.</li><li><span class="userinput_or_code">Raz dla każdego produktu z osobna</span>: Ceny przeliczane są dla każdego produktu z koszyka z osobna. Nie ma to znaczenia jaka ilość jest zamawiana.</li><li><span class="userinput_or_code">Dla każdego produktut</span>: ceny są przeliczane dla każdego produktu z koszyka.</li></ul>',

'HELP_DELIVERY_MAIN_CONDITION'                => 'Można ustawić aby reguły wyliczania kosztów dostawy były stosowane do konkretnych warunków           you can specify that the shipping cost rule applies only to a certain condition. You can choose from among 4 conditions:<ul><li><span class="userinput_or_code">Amount</span>: liczby produktów w koszyku.</li><li><span class="userinput_or_code">Rozmiar</span>: Rozmiaru produktów. Wymaga to ustawienia rozmiarów produktów.</li><li><span class="userinput_or_code">Waga</span>: Waga wszystkich produktów. Wymaga to posiadania przypisanych wag do produktów.</li><li><span class="userinput_or_code">Cena</span>: Cena zamówienia.</li></ul>Można używać znaków <span class="navipath_or_inputname">>=</span> (większości) i <span class="navipath_or_inputname"><=</span> (mniejszości) do sprecyzowania zakresów.',

'HELP_DELIVERY_MAIN_PRICE'                    => 'Używane do określenia wielkości kosztów wysyłki. Cena może być wyliczana na dwa sposoby:<ul><li>kwotowo <span class="userinput_or_code">kwota</span>, kwota wyliczona bezwględnie (np.: with <span class="userinput_or_code">6.90</span>, cena EUR 6.90 zostanie przeliczona).</li><li>procentowo <span class="userinput_or_code">%</span>, cena jest wyliczana relatywnie do ceny początkowej(np.: <span class="userinput_or_code">10</span>, da 10% wartości zamówienia).</li></ul>',

'HELP_DELIVERY_MAIN_ORDER'                    => 'Kolejność stosowania reguł wyliczania kosztów dostawy. Reguła z najniższą wartością sprawdzana jest pierwsza. Ma to znaczenie dla ustawienia. Kolejnośc ma znaczenie jeśli używasz opcji <span class="navipath_or_inputname">Nie sprawdzaj kolejnych reguł jeśli ta pasuje</span>.',

'HELP_DELIVERY_MAIN_FINALIZE'                 => 'Ustawienie <span class="navipath_or_inputname">Nie sprawdzaj kolejnych reguł jeśli ta pasujeDon\'t calculate further rules if this rule matches</span> to specify that no further rules are to be run if this shipping cost rule is valid and is being run. For this option, the order in which the shipping cost rules are run is important. It is specified through the <span class="navipath_or_inputname">Order of Rule processing</span>.',

'HELP_DELIVERYSET_MAIN_POS'                   => '<span class="navipath_or_inputname">Sortowanie</span> ustawia kolejność prezentacji listy sposobów dostawy: Najniższa wartość powoduje wyświetlenie na górze listy.',

'HELP_DISCOUNT_MAIN_SORT'                     => '',

'HELP_DISCOUNT_MAIN_PRICE'                    => 'Można określić że rabaty obowiązują tylko dla wybranych cen zamówienia. Jeśli rabat ma obowiązywać dla wszystkich cen, wpisz <span class="userinput_or_code">0</span> w <span class="navipath_or_inputname">Od</span> i <span class="userinput_or_code">0</span> w <span class="navipath_or_inputname">Do</span>.',

'HELP_DISCOUNT_MAIN_AMOUNT'                   => 'Rabat może obowiązywać dla wybranego przedziału ilości zamawianych produktów. Jeśli ma obowiązywać dla wszystkich ilości, wpisz <span class="userinput_or_code">0</span> w <span class="navipath_or_inputname">Od</span> i <span class="userinput_or_code">0</span> w <span class="navipath_or_inputname">Do</span>.',

'HELP_DISCOUNT_MAIN_REBATE'                   => 'Tutaj możesz określić wysokość rabatu. Sposób naliczania rabatu:<ul><li><span class="userinput_or_code">kwota</span>: rabat naliczany kwotowo, np. 5 zł.</li><li><span class="userinput_or_code">%</span>: procentowo, np. 10% wartości zamówienia.</li><li><span class="userinput_or_code">itm</span>: Rabat w postaci darmowego produktu. Ustaw ilość tego produktu. Wybierz "Pomnóż" jeśli ten produkt ma być darmowy niezależnie od wybranej ilości w koszyku.</li></ul>',

'HELP_GENERAL_SEO_ACTCAT'                     => 'Można zdefiniować kilka SEO URL dla produktów, np dla wybranych kategorii i producentów. Dzięki <span class="navipath_or_inputname">Aktywna kategoria/dostawca</span> możesz wybrać adres który chcesz edytować.',

'HELP_GENERAL_SEO_FIXED'                      => 'System sam automatycznie regeneruje SEU URL. Np. produkt dostaje nowy SEO URL jeśli np zmianie uległa nazwa produktu. Ustawienie to zapobiega tej zmianie. Jeśli aktywne SEO URL nie będzie generowany po zmianie np nazwy i produkt będzie dostępny pod dotychczasowym adresem URL.',

'HELP_GENERAL_SEO_SHOWSUFFIX'                 => 'Tutaj podawany jest fraza która będzie doklejana do tytuły strony pokazywanego w oknie przeglądarki.',

'HELP_GENERAL_SEO_OXKEYWORDS'                 => 'Te słowa kluczowe są zintegrowane z kodem źródłowym produktu. Słowa zamieszczne w META tagach (keywords), które używane jest przez wyszukiwarki. Jeśli pusty, zostanie wygenerowany automatycznie',

'HELP_GENERAL_SEO_OXDESCRIPTION'              => 'Opis ten jest zintegrowany w kodzie źródłowym HTML (opis META). Ten tekst jest często wyświetlona w stronach wyników wyszukiwarek. Odpowiedni opis można wprowadzić tutaj. Jeśli jest puste, opis jest generowany automatycznie.',

'HELP_GENIMPORT_FIRSTCOLHEADER'               => 'Aktywuj to ustawienie jeśli pierwsza linia pliku CSV zawiera nazwy kolumn w bazie danych do których mają zostać wstawione te wartości.',

'HELP_GENIMPORT_REPEATIMPORT'                 => 'Jeśli aktywne, zaraz po zakończeniu importu, ukaże się ponownie formularz do rozpoczęcia kolejnego importu.',

'HELP_LANGUAGE_DEFAULT'                       => 'Język domyślny jest używany jeśli sysstem nie może wykryć języka aktywnego.',

'HELP_LANGUAGE_ACTIVE'                        => 'Opcja ta definiuje możliwość aktywowania danego języka na stronie publicznej.',

'HELP_PAYMENT_MAIN_SORT'                      => 'Tutaj definiowana jest kolejność w jakiej mają być wyświetlane metody płątności użytkownikom na stronie publicznej. Najniższa liczba powoduje wyświetlenie pozycji jako pierwszej.',

'HELP_PAYMENT_MAIN_FROMBONI'                  => 'Można wskazać Min. Ocenę Kredytową jaką użytkownik musi posiadać aby móc użyć wybranej metody płatności. Każdemu użytkownikowi można przypisać ocenę kredytową w <span class="navipath_or_inputname">Zarządzanie użytkownikami -> Użytkownicy -> Rozszerzone</span>.',

'HELP_PAYMENT_MAIN_SELECTED'                  => 'Należy wskazać domyślną metodę płatności.',

'HELP_PAYMENT_MAIN_AMOUNT'                    => 'Można zdefiniować zakres cenowy w jakim możliwe będzie użycie danej metody płatności.<br>Jeśli metoda płatności ma być dostępna zawsze, należy wskazać zakres cen pasujący do wszystkich zamówień, np: od 0 do 999999999999.',

'HELP_PAYMENT_MAIN_ADDPRICE'                  => 'Wartość opłaty/zniżki definiujemy w dwa możliwe sposoby:<ul><li><span class="userinput_or_code">kwota</span> podana kwota zostanie doliczona/odliczona do ceny zamówienia</li><li><span class="userinput_or_code">%</span>, cena będzie wyliczona relatywnie od ceny zamówienia, np 10% wartości zamówienia</li></ul>',

'HELP_PAYMENT_MAIN_ADDSUMRULES'               => 'Obliczając cenę zniżek/dopłat brana jest pod uwagę aktualna wartość w koszyku. Zdefinuj jakie koszty będą brane pod uwagę przy wyliczaniu wartości koszyka.',

'HELP_SELECTLIST_MAIN_TITLEIDENT'             => 'Proszę podać "tytuł roboczy", który będzie używany tylko w panelu administracyjnym, nie wyświetlany po stronie publicznej.',

'HELP_SELECTLIST_MAIN_FIELDS'                 => 'Wszystkie dostępne opcje wyświetlane są na liście pól. Więcej info na <a href="http://www.oxid-esales.com/en/resources/help-faq/eshop-manual/implementing-simple-variants-selection-lists" target="_blank">stronie</a>.',

'HELP_USER_MAIN_HASPASSWORD'                  => 'Tutaj można wskazać czy użytkownik był zarejestrowany podczas składania zamówienia:<ul><li>Jeśli hasło jest ustawione, użytkownik jest zarejestrowany.</li><li>Jeśli brak jest hasła. użytkownik zamówił jako niezarejestrowany</li></ul>',

'HELP_USER_PAYMENT_METHODS'                   => 'W tej zakładce możnaOn this tab you can:<ul><li>przeglądać i zarządzać istniejącymi metodami płatności.<li>tworzyć nowe metody płatności i ustawiać jej wartości</li></ul>',

'HELP_USER_EXTEND_NEWSLETTER'                 => 'Pokazuje czy dany użytkownik jest zapisany na newsletter czy nie.',

'HELP_USER_EXTEND_EMAILFAILED'                => 'Jeśli nie można wysłać wiadomości email na ten adres sprawdź to ustawienie. Wtedy newsletter nie będzie wysyłany do tego użytkownika. Pozostałe emaile będą nadal wysyłane.',

'HELP_USER_EXTEND_BONI'                       => 'Proszę podać numeryczną wartość Oceny kredytowej użytkownika. Dzięki tej wartości, użytkownik będzie miał dostępne odpowiednie metody płatności.',

'HELP_MANUFACTURER_MAIN_ICON'                 => 'Z polami <span class="navipath_or_inputname">Ikona</span> i <span class="navipath_or_inputname">Wgraj ikonę</span> można przypisać zdjęcie do producenta (np: logo). Jeśli jakieś zdjęcie jest już przypisane pojawi się nazwa pliku.',

'HELP_MANUFACTURER_SEO_FIXED'                 => 'System sam automatycznie regeneruje SEU URL. Np. produkt dostaje nowy SEO URL jeśli np zmianie uległa nazwa producenta. Ustawienie to zapobiega tej zmianie. Jeśli aktywne SEO URL nie będzie generowany po zmianie np nazwy i producent będzie dostępny pod dotychczasowym adresem URL.',

'HELP_MANUFACTURER_SEO_KEYWORDS'              => 'Te słowa kluczowe są zintegrowane z kodem źródłowym producenta. Słowa zamieszczne w META tagach (keywords), które używane jest przez wyszukiwarki. Jeśli pusty, zostanie wygenerowany automatycznie',

'HELP_MANUFACTURER_SEO_DESCRIPTION'           => 'Opis ten jest wbudowany w kodu źródłowego HTML strony producenta (opis META ). Ten tekst jest często wyświetlona w stronach wyników wyszukiwarek. Odpowiedni opis można wprowadzić tutaj. Jeśli jest puste, opis jest generowany automatycznie.',

'HELP_MANUFACTURER_SEO_SHOWSUFFIX'            => 'Proszę podać suffix który dodawany będzie w tytule strony, wyświetlanej w pasku tytułowym okna przeglądarki na stronie producenta.',

'HELP_VOUCHERSERIE_MAIN_DISCOUNT'             => 'Proszę wybrać jak ma być wyliczany rabat:<ul><li><span class="userinput_or_code">kwota</span>: wartość rabatu kwotowa, np w wysokości: 5 zł.</li><li><span class="userinput_or_code">%</span>: procentowo, np. 10% wartości zamówienia.</li></ul>',

'HELP_VOUCHERSERIE_MAIN_ALLOWSAMESERIES'      => 'Czy można użyć kilka kuponów jednocześnie pochodzących z jednej serii podczas jednego zamówienia.',

'HELP_VOUCHERSERIE_MAIN_ALLOWOTHERSERIES'     => 'Czy można użyć kilka kuponów jednocześnie pochodzących z wielu serii podczas jednego zamówienia.',

'HELP_VOUCHERSERIE_MAIN_SAMESEROTHERORDER'    => 'Czy można użyć kilka kuponów z tej samej serii podczas wielu zamówień.',

'HELP_VOUCHERSERIE_MAIN_RANDOMNUM'            => 'Jeśli zaznaczone, losowa liczba zostanie wygenerowana dla każdego kuponu.',

'HELP_VOUCHERSERIE_MAIN_VOUCHERNUM'           => 'Proszę podać numer kuponu. Numer ten jest używany przy jego tworzeniu kiedy opcja Automatycznego losowego generowania numerów jest wyłączona. Wszystkie kupony dostają ten sam numer.',

'HELP_VOUCHERSERIE_MAIN_CALCULATEONCE'        => 'Jeśli zostaną przypisane produkty lub kategorie do kuponu, odznacz tą opcję jeśli wartośc kuponu ma być zastosowana do każdej pozycji w koszyku. Zaznacz jeśli kupon powinien być zastosowany tylko do jednego produktu w koszyku.',

'HELP_WRAPPING_MAIN_PICTURE'                  => 'Tutaj należy przypisać zdjęcie do opcji "Zapakuj jako prezent".',

'HELP_PROMOTIONS_BANNER_PICTUREANDLINK'       => 'Wgraj zdjęcie bannera i podaj adres URL na który użytkownik ma zostać przekierowany po jego kliknięciu. Można również np przypisać banner bezpośrednio do produktu.',

'HELP_SHOP_PERF_SEO_CACHE'                    => 'Włączenie SEO cache podnosi wydajność, ale wymaga również sporej przestrzeni dyskowej dla katalogu /tmp.',

'HELP_ALTERNATIVE_IMAGE_SERVER_NOTE'          => 'Alternatywny adres URL do serwera multimediów może być wskazany w pliku konfiguracyjnym config.inc.php przez ustawienie <i>sAltImageUrl</i> and <i>sSSLAltImageUrl</i>.<br> Przez to wszystkie zdjęcia produktów będą łądowane z tego alternatywnego serwera zamiast lokalnego. Jednakże wszystkie pliki uploadowane, będą przechowywane lokalnie. Tak więc synchronizacja pomiędzy tymi serwerami musi odbywać się ręcznie lub za pomocą zewnętrzych skryptów.',

'HELP_SHOP_RDFA_CONTENT_OFFERER'              => 'Wybierz na której stronie będą dostępne informacje o Twoim sklepie np. "O Nas".',

'HELP_SHOP_RDFA_CONTENT_PAYMENT'              => 'Wybierz na której stronie wyświetlać nie przypisane do RDFa informacje o sposobach płatności np: Regulamin. Aby przypisać dostępne metody płatności udaj się do: ustawienia sklepu -> Metody płatności -> RDFa.',

'HELP_SHOP_RDFA_CONTENT_DELIVERY'             => 'Wybierz na której stronie wyświetlać nie przypisane do RDFa informacje o sposobach dostawy np: Koszty dostawy. Aby przypisać dostępne sposoby dostawy udaj się do: ustawienia sklepu -> Sposoby dostawy -> RDFa.',

'HELP_SHOP_RDFA_VAT'                          => 'Wybierz czy podatek VAT jest już wliczony w koszty dostaw, płatności.',

'HELP_SHOP_RDFA_DURATION_PRICES'              => 'Wybierz czy istnieje jakiś czas ważności produktów, kosztów dostaw (np. 1 dzień, 1 tydzień).',

'HELP_SHOP_RDFA_LOGO_URL'                     => 'Adres (URL) logo lub zdjęcia.',

'HELP_SHOP_RDFA_GEO_LONGITUDE'                => 'Długość geograficzna położenia Twojego fizycznego sklepu. Proszę podać tylko liczby.',

'HELP_SHOP_RDFA_GEO_LATITUDE'                 => 'Szerokość geograficzna położenia Twojego fizycznego sklepu. Proszę podać tylko liczby.',

'HELP_SHOP_RDFA_GLN'                          => 'Globalny Numer lokalizacji (GLN) dla firmy .Globalny Numer Lokalizacji to jest trzynasto-cyfrowy numer używany do identyfikacji i fizycznych lokalizacji.',

'HELP_SHOP_RDFA_NAICS'                        => 'North American Industry Classification System (NAICS) code for your company. See http://www.census.gov/eos/www/naics/.',

'HELP_SHOP_RDFA_ISIC'                         => 'The International Standard of Industrial Classification of All Economic Activities (ISIC) kod Twojej firmy. Więcej na http://unstats.un.org/unsd/cr/registry/isic-4.asp.',

'HELP_SHOP_RDFA_DUNS'                         => 'Dun & Bradstreet D-U-N-S to jest 9 cyfrowy numer identyfikujący przedsiębiorce.',

'HELP_SHOP_RDFA_SHOW_PRODUCTSTOCK'            => 'Jeśli zaznaczone, oznacza to że na stronie publicznej prezentowane są realne stay magazynowe.',

'HELP_SHOP_RDFA_RATING_MIN'                   => 'Najniższa możliwa wartość odnosząca się do skali stosowanej dla oceny produktu w sklepie.',

'HELP_SHOP_RDFA_RATING_MAX'                   => 'Najwyższa możliwa wartość odnosząca się do skali stosowanej dla oceny produktu w sklepie.',

'HELP_SHOP_RDFA_COND'                         => 'Wybierz proszę stan opisujący produkty w Twoim sklepie: (nowe, używane lub odnowione).',

'HELP_SHOP_RDFA_FNC'                          => 'Wybierz formę w jakiej są udostępniane pdoukty na stronie. Czy jest to sprzedaż, wypożyczenie, naprawa?',

'HELP_SHOP_RDFA_COSTUMER'                     => 'Ty klientów dla których dostępne są Twoje produkty (klient końcowy, sprzedawca, Biznes, Publiczny).',

'HELP_SHOP_RDFA_DURATION_OFFERINGS'           => 'Ta wartość opisuje czas ważności priduktów np:  1 dzień, 1 tydzień czy 1 miesiąc.',

'HELP_SHOP_PERF_SYSREQ_CHECK'                 => '',

'HELP_SHOP_CONFIG_ADDITIONAL_SERVICE_VAT_CALCULATION_BIGGEST_NET'  => 'Stawka VAT od produktów, które mają największą wartość netto w koszyku, jest wykorzystywana do obliczania.',

'HELP_SHOP_CONFIG_ADDITIONAL_SERVICE_VAT_CALCULATION_PROPORTIONAL' => 'The percentage of products in cart with the same VAT rate is used for calculating.',

'HELP_SHOP_CONFIG_VIEWNETPRICE'               => 'Czy na stronie publicznej ceny mają być prezentowane jako ceny netto.',

'HELP_SHOP_CONFIG_ENTERNETPRICE'              => 'W panelu administracyjnym ceny produktów muszą być wprowadzane jako ceny netto.',

'HELP_REVERSE_PROXY_GET_FRONTEND'             => 'Sprawdź czy Reverse Proxy jest dostępne na stronie publicznej. Nagłówek strony głównej jest sprawdzany.<br>Ten tekst może sygnalizuje niepowodzenie jeśli inna domena lub protokół (http/https) są używane w panelu administracyjnym a inne na stronie głównej sklepu.',

'HELP_REVERSE_PROXY_GET_BACKEND'              => 'Panel administracyjny kesy wyświetlany bez użycia Reverse Proxy. Nagłówek Varnisha nie może zostać pobrany.',

'HELP_SHOP_CONFIG_DEBIT_OLD_BANK_INFORMATION_NOT_ALLOWED' => 'Tylko IBAN i BIC może być podany podczas składania zamówienia. Numer rachunku bankowego i kod banku można wprowadzić tylko wtedy, gdy to pole nie jest aktywne.',

'HELP_SHOP_CONFIG_ENABLE_INTANGIBLE_PRODUCTS_AGREEMENT'   => 'Jeśli ta opcja jest aktywna, Klient musi potwierdzić ogólne warunki sprzedaży (Regulamin sklepu) w czwartym kroku procesu zakupowego dla specyficznych produktów. Proszę upewnić się, że ta opcja jest aktywna przy zakupie treści cyfrowych niezapisanych na nośniku trwałym.',

'HELP_SHOP_CONFIG_FIELDS_CONTACTFORM'         => '',
];