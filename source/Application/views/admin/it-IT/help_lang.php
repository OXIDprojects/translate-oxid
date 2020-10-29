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

'HELP_SHOP_SYSTEM_OTHERCOUNTRYORDER'          => 'Qui puoi impostare se gli ordini possono esser effettuati in paesi per cui non sono definiti i costi di spedizione:<ul><li>Se l\'impostazione è selezionata, gli utenti possono ordinare: Gli utenti sono notificati che sono informati sui costi di spedizione manualmente.</li><li>Se l\'impostazione non è selezionata, gli utenti dai paesi per cui non sono definiti costi di spedizione non possono ordinare.</li></ul>',

'HELP_SHOP_SYSTEM_DISABLENAVBARS'             => 'Se l\'impostazione è selezionata, gran parte degli elementi di navigazione non sono mostrati durante il pagamento. In seguito, gli utenti non sono inutilmente distratti durante il pagamento.',

'HELP_SHOP_SYSTEM_DEFAULTIMAGEQUALITY'        => 'Le impostazioni consigliate sono 40-80:<br><ul><li>Sotto i 40, la compressione diviene chiaramente visibile e le immagini sono sfocate.</li><li>Sopra gli 80 difficilmente si può rilevare qualsiasi miglioramento di qualità, ma la dimensione del file aumenta enormemente.</li></ul><br>Il valore predefinito è 75.',

'HELP_SHOP_SYSTEM_LDAP'                       => 'Modificare il file core/oxldap.php.',

'HELP_SHOP_SYSTEM_SHOWVARIANTREVIEWS'         => 'Quest\'impostazione influisce su come sono gestite le revisioni per le varianti: Se l\'impostazione è selezionata, anche le osservazioni dalle varianti sono mostrate al prodotto genitore.',

'HELP_SHOP_SYSTEM_VARIANTSSELECTION'          => 'In eShop ci sono molti elenchi per assegnare i prodotti, es. assegnare i prodotti agli sconti. Se l\'impostazione è selezionata, le varianti sono mostrate anche in questi elenchi.',

'HELP_SHOP_SYSTEM_VARIANTPARENTBUYABLE'       => 'Quest\'impostazione influisce sul fatto che i prodotti genitore possano essere comprati:<ul><li>Se l\'impostazione è selezionata, anche i prodotti genitore possono essere comprati.</li><li>Se l\'impostazione non è selezionata, solo le varianti dei prodotti genitore possono essere comprate.</li></ul>',

'HELP_SHOP_SYSTEM_VARIANTINHERITAMOUNTPRICE'  => 'Qui puoi impostare se le scale di prezzi sono ereditate dal prodotto genitore: Se l\'impostazione è selezionata, la scala dei prezzi del prodotto genitore è usata anche per le sue varianti.',

'HELP_SHOP_SYSTEM_ISERVERTIMESHIFT'           => 'Il server in cui è eseguito eShop può essere in un fuso orario differente. Con quest\'impostazione il fuso orario è regolabile: Inserisci la quantità di ore che devono essere aggiunte/sottratte dall\'ora del server, es. <kdb>+2</kdb> o <kdb>-2</kdb>',

'HELP_SHOP_SYSTEM_INLINEIMGEMAIL'             => 'Se l\'impostazione è selezionata, le immagini nelle email sono inviate con l\'email. Se l\'impostazione non è selezionata, le immagini sono scaricate dal programma dell\'email quando l\'email viene aperta.',

'HELP_SHOP_SYSTEM_UTILMODULE'                 => 'Sei pregato di inserire qui il file PHP personalizzato, che sovrascriverà le funzioni di eShop all\'avvio del negozio.',

'HELP_SHOP_CACHE_ENABLED'                     => 'Se la cache del contenuto Dinamico è attiva, i contenuti aggiuntivi cono memorizzati per aumentare le prestazioni. Disattiva quest\'impostazione finché si adatta al Negozio (scrivere moduli, adattare modelli e così via).',

'HELP_SHOP_CACHE_LIFETIME'                    => 'Qui puoi impostare quanti secondi di contenuti memorizzati nella cache sono salvati prima che siano ricreati. L\'impostazione predefinita è 36000 secondi.',

'HELP_SHOP_CACHE_CLASSES'                     => 'Qui puoi impostare quali classi di visualizzazione sono memorizzate nella cache.<br> Modifica quest\'impostazione solo se sei familiare con i meccanismi della cache!',

'HELP_SHOP_CACHE_REVERSE_PROXY_ENABLED'       => 'Attiva un Proxy Inverso di HTTP della cache. Nota;: Non usare la "Cache del Contenuto Dinamico" allo stesso tempo, poiché potrebbe rallentare le prestazioni.',

'HELP_SHOP_CACHE_LAYOUT_CACHE_AGE'            => 'Imposta la durata del layout della pagina in secondi. Questo sarà inviato tramite le intestazioni di HTTP, specificandone il valore "Età".',

'HELP_SHOP_CONFIG_ORDEROPTINEMAIL'            => 'Se il doppio opt-in è attivo, gli utenti ricevono un\'email con un collegamento di conferma quando si registrano per la newsletter. Solo se il collegamento di conferma viene usato l\'utente viene registrato per la newsletter.<br>Il doppio opt-in protegge gli utenti da registrazioni indesiderate. Senza il doppio opt-in, ogni indirizzo e-mail è registrabile alle newsletter. Con il doppio opt-in, il proprietario dell\'indirizzo email deve confermare la registrazione.',

'HELP_SHOP_CONFIG_BIDIRECTCROSS'              => 'Con la vendita incrociata puoi offrire prodotti adatti ad un prodotto: Se per es. agli pneumatici di un auto è assegnata la vendita incrociata, gli pneumatici sono mostrati con l\'auto.<br>Se la vendita incrociata bidirezionale è attivata, funziona in entrambe le direzioni: Anche l\'auto viene mostrata con gli pneumatici.',

'HELP_SHOP_CONFIG_STOCKONDEFAULTMESSAGE'      => 'Per ogni prodotto puoi configurare un messaggio se il prodotto è in magazzino.<br>Se l\'impostazione è attiva, un messaggio viene mostrato se nessun messaggio specifico per un prodotto viene inserito. Il messaggio predefinito <span class="filename_filepath_or_italic">Pronto per la spedizione</span> viene mostrato.',

'HELP_SHOP_CONFIG_STOCKOFFDEFAULTMESSAGE'     => 'Per ogni prodotto puoi configurare un messaggio se il prodotto non è in magazzino.<br>Se l\'impostazione è attiva, un messaggio viene mostrato se nessun messaggio specifico per un prodotto viene inserito. Il messaggio predefinito <span class="filename_filepath_or_italic">Questo elemento non è in magazzinpo e deve essere arretrato</span> viene mostrato.',

'HELP_SHOP_CONFIG_OVERRIDEZEROABCPRICES'      => 'Puoi configurare dei prezzi speciali per utenti specifici: Per ogni prodotto puoi inserire prezzi A, B e C. Se gli utenti sono nel gruppo utente <span class="filename_filepath_or_italic">Prezzo A</span>, viene mostrato loro il prezzo A invece di quello normale.<br>Se l\'impostazione è selezionata, il prezzo del prodotto normale viene usato se non è disponibile alcun prezzo A, B o C.<br>Dovresti attivare quest\'impostazione se stai usando i prezzi A, B e C: Altrimenti 0,00 viene mostrato agli utenti se non è impostato alcun prezzo A, B o C.',

'HELP_SHOP_CONFIG_SEARCHFIELDS'               => 'Qui puoi definire i campi del database in cui la ricerca dei prodotti cerca. Inserisci un campo per riga.<br>Le voci più comuni sono:<ul><li>oxtitle = Titolo</li><li>oxshortdesc = Descrizione breve</li><li>oxsearchkeys = Termini di ricerca inseriti per ogni prodotto</li><li>oxartnum = Numero del prodotto</li></ul>',

'HELP_SHOP_CONFIG_SORTFIELDS'                 => 'Qui puoi definire i campi del database che possono essere usati per ordinare gli elenchi di prodotti.. Inserisci un campo per riga.<br>Le voci più comuni sono:<ul><li>oxtitle = Titolo</li><li>oxprice = Prezzo</li><li>oxvarminprice = Il prezzo minimo se le varianti con prezzi differenti sono usate.</li><li>oxartnum = Numeri del prodotto</li><li>oxrating = Valutazione dei prodotti</li><li>oxstock = Scorte</li></ul>',

'HELP_SHOP_CONFIG_MUSTFILLFIELDS'             => 'Qui puoi configurare i campi obbligatori per la registrazione dell\'utente. Inserisci un campo per riga.<br>Le voci più comuni sono:<ul><li>oxuser__oxfname = Nome</li><li>oxuser__oxlname = Cognome</li><li>oxuser__oxstreet = Strada</li><li>oxuser__oxstreetnr = Numero civico</li><li>oxuser__oxzip = CAP</li><li>oxuser__oxcity = Città</li><li>oxuser__oxcountryid = Paese</li><li>oxuser__oxfon = Numero telefonico</li></ul><br>Puoi anche definire i campi obbligatori se gli utenti inseriscono un indirizzo di spedizione differente. Le voci più comuni sono:<ul><li>oxaddress__oxfname = Nome</li><li>oxaddress__oxlname = Cognome</li><li>oxaddress__oxstreet = Strada</li><li>oxaddress__oxstreetnr = Numero civico</li><li>oxaddress__oxzip = CAP</li><li>oxaddress__oxcity = Città</li><li>oxaddress__oxcountryid = Paese</li><li>oxaddress__oxfon = Numero telefonico</li></ul>',

'HELP_SHOP_CONFIG_USENEGATIVESTOCK'           => 'Con <span class="navipath_or_inputname">Consenti Valori di Scorta negativi</span> puoi definire come vengono calcolati i livelli delle scorte di prodotti esauriti:<br><ul><li>Se l\'impostazione è selezionata, i valori delle scorte negativi sono calcolati se sono acquistate ulteriori unità.</li><li>Se l\'impostazione non è selezionata, il valore delle scorte non cade mai sotto 0, anche se ulteriori unità sono acquistate.</li></ul>',

'HELP_SHOP_CONFIG_SETORDELETECURRENCY'        => 'Aggiungi o rimuovi valute. Ogni riga contiene i parametri di valuta separati dal simbolo @.<br /><br /><ul><li>codice valuta in base a ISO 4217 (es. EUR)</li><li>tasso di cambio della valuta alla valuta base con il valore 1.00</li><li>separatore decimale</li><li>separatore delle migliaia</li><li>segno di valuta</li><li>numero di posti decimali</li><li>parametro "Fronte" opzionale. Se inserito, il segno della valuta viene mostrato davanti al prezzo.</li></ul>',

'HELP_SHOP_CONFIG_NEWARTBYINSERT'             => 'Sulla pagina iniziale del tuo eShop i prodotti più nuovi sono mostrati in <span class="filename_filepath_or_italic">Appena arrivati!</span>. Quest\'impostazione determina come sono calcolati i prodotti più nuovi: per data di creazione o per data dell\'ultima modifica nell\'ordine admin/ultima.',

/** @deprecated since v6.5.4 (2020-04-06); Suggest feature will be removed completely */
'HELP_SHOP_CONFIG_ALLOW_SUGGEST_ARTICLE'      => 'Attiva la raccomandazione dei prodotti sulle pagine di dettaglio del prodotto.',
/** end deprecated */

'HELP_SHOP_CONFIG_SEND_TECHNICAL_INFORMATION_TO_OXID' => 'Nessuna data aziendale o informazione del cliente rilevante sarà trasmessa. I dati raccolti si applicano esclusivamente all\'informatica. Per migliorare la qualità dei nostri prodotti, informazioni come questa saranno raccolte:<ul>  <li>numero delle installazioni globali di OXID eShop Community Edition</li>  <li>numero medio di estensioni installate per OXID eShop</li>  <li>estensioni più diffuse per OXID eShop</li></ul>',

'HELP_SHOP_CONFIG_DELETERATINGLOGS'           => 'Se gli utenti valutano un prodotto, non possono valutarlo di nuovo. Qui puoi impostare per quanti giorni gli utenti sono autorizzati a votare di nuovo un prodotto. Lascia vuoto per disabilitare - i prodotti possono essere valutati solo una volta per utente.',

'HELP_SHOP_CONFIG_DISABLEONLINEVATIDCHECK'    => 'Il controllo online della partita IVA viene eseguito se un cliente da un paese estero nell\'UE inserisce una partita IVA quando ordina. Se la partita IVA è valida, non viene calcolata nessuna IVA per quest\'ordine.<br>Se il controllo è disabilitato, viene calcolata l\'IVA normale per il dato paese.',

'HELP_SHOP_CONFIG_ALTVATIDCHECKINTERFACEWSDL' => 'Qui puoi inserire un URL alternativo per il controllo online della partita IVA.',

'HELP_SHOP_CONFIG_PSLOGIN'                    => 'L\'Accesso alle Vendite Private trasforma il negozio regolare in un negozio per soli membri. Questo aiuta a sviluppare comunità dei clienti con interessi simili. Quest\'impostazione limita l\'accesso a tutte le pagine dell\'eShop.',

'HELP_SHOP_CONFIG_BASKETEXCLUDE'              => 'Consente di inserire prodotti solo da una categoria (root), se la categoria cambia, viene chiesto al suo utente rilevato di finalizzare l\'ordine (vai al pagamento) o continuare a fare shopping (il cartello viene pulito in questo caso). Usando questa funzionalità in congiunzione con una struttura di categorie propriamente organizzata, puoi implementare i carrelli divisi per fornitori differenti.',

'HELP_SHOP_CONFIG_BASKETRESERVATION'          => 'Quando disabiliti quest\'opzione, eShop riduce le scorte del prodotto esattamente nel momento in cui l\'ordine è confermato dal cliente e il pagamento è concluso.<br><br> Con quest\'opzione disabilitata, questa funzionalità cambia: Le scorte del prodotto si riducono e sono <b>riservate</b> quando il prodotto viene messo nel carrello. La prenotazione viene annullata quando il contenuto del carrello è acquistato o il carrello scade.',

'HELP_SHOP_CONFIG_BASKETRESERVATIONTIMEOUT'   => 'Dopo questo timeout, i prodotti prenotati sono restituiti al magazzino ed il carrello del cliente viene eliminato.',

'HELP_SHOP_CONFIG_INVITATION'                 => 'L\'invito è usato per invitare i tuoi amici al sito web ed ottenere punti di credito per l\'invito.',

'HELP_SHOP_CONFIG_POINTSFORINVITATION'        => 'L\'importo di punti di credito che l\'utente invitato da un utente già registrato ottiene. L\'utente invitato deve registrarsi per ottenere questi punti. I punti di credito acquisiti sono memorizzati nel registro dell\'utente e possono essere usati dal proprietario del negozio per qualsiasi scopo.',

'HELP_SHOP_CONFIG_POINTSFORREGISTRATION'      => 'La quantità di punti di credito che l\'utente che hai invitato qualcuno al negozio ottiene. L\'utente ottiene punti di credito solo se l\'utente invitato si registra al negozio. I punti di credito acquisiti sono memorizzati nel registro dell\'utente e possono essere utilizzati dal proprietario del negozio per qualsiasi scopo.',

// @deprecated since v6.5.1 (2019-02-07); credit card payment method will be no longer supported
'HELP_SHOP_CONFIG_ATTENTION'                  => 'Attenzione: Anche se la crittografia viene usata, i contratti con Carta di Credito lo proibiscono spesso rigorosamente!',
// END deprecated

'HELP_SHOP_CONFIG_SHOWTSINTERNATIONALFEESMESSAGE' => 'Nel quarto passo del processo di pagamento viene inoltre mostrata la pagina CMS "oxtsinternationalfees".',

'HELP_SHOP_CONFIG_SHOWTSCODMESSAGE'           => 'Nel quarto passo del processo di pagamento, viene inoltre mostrata la pagina CMS "oxtscodmessage".',

'HELP_SHOP_CONFIG_DOWNLOADS'                  => 'Negozio con prodotti scaricabili. Attiva qui, così che i prodotti possano essere ordinati e scaricati.',

'HELP_SHOP_CONFIG_DOWNLOADS_PATH'             => 'Il percorso dove sono memorizzati i file dei prodotti scaricabili.',

'HELP_SHOP_CONFIG_MAX_DOWNLOADS_COUNT'        => 'Qui puoi definire quante volte l\'utente può scaricare dallo stesso collegamento dopo l\'ordine. Questa è l\'impostazione predefinita per tutti i prodotti. Puoi modificare questo valore per ogni file del prodotto in Amministrazione Prodotti -> Prodotti -> Download.',

'HELP_SHOP_CONFIG_LINK_EXPIRATION_TIME_UNREGISTERED' => 'Qui puoi definire quante volte l\'utente può scaricare dallo stesso collegamento, se l\'utente ha ordinato senza registrazione. Questa è l\'impostazione predefinita per tutti i prodotti. Puoi modificare questo valore per ogni file del prodotto in Amministrazione Prodotti -> Prodotti -> Download.',

'HELP_SHOP_CONFIG_LINK_EXPIRATION_TIME'       => 'Specifica l\'orario in ore per cui il collegamento di download è valido dopo l\'ordine. Questa è l\'impostazione predefinita per tutti i prodotti. Puoi modificare questo valore per ogni file del prodotto in Amministrazione Prodotti -> Prodotti -> Download.',

'HELP_SHOP_CONFIG_PARCELSERVICE'              => 'Sei pregato di compilare l\'URL di monitoraggio del tuo fornitore della spedizione. <i>##ID##</i> è un segnaposto e sarà sostituito con il numero di tracciamento corrispondente.',

'HELP_SHOP_CONFIG_DOWNLOAD_EXPIRATION_TIME'   => 'Specifica l\'orario in ore per cui il collegamento di download è valido dopo il primo download. Questa è l\'impostazione predefinita per tutti i prodotti. Puoi modificare questo valore per ogni file del prodotto in Amministrazione Prodotti -> Prodotti -> Download.',

'HELP_SHOP_CONFIG_LOADREVIEWS'                  => 'Gli utenti possono recensire e valutare i tuoi prodotti con le stelle. Se quest\'impostazione è selezionata, le valutazioni delle stelle/recensioni esistenti sono caricate e mostrate con il prodotto. Quest\'impostazione potrebbe degradare le prestazioni del negozio.',

'HELP_SHOP_CONFIG_INCLUDE_PRODUCT_REVIEW_LINKS_IN_ORDER_EMAIL' => 'Sei pregato di ricontrollare se questo è legalmente conforme alle leggi applicabili. Questa impostazione sarà applicata solo se "recensioni utente e valutazioni a stelle" è attivata.',

'HELP_SHOP_MALL_MALLMODE'                     => 'Qui puoi impostare cosa viene mostrato come pagina iniziale di questo eShop:<ul><li><span class="navipath_or_inputname">Mostra selettore negozio</span>: Una pagina dove i differenti eShop possono essere selezionati viene mostrata.</li><li><span class="navipath_or_inputname">Mostra pagina iniziale del negozio principale</span>La pagina iniziale normale di questo Negozio viene mostrata.</li></ul>',

'HELP_SHOP_MALL_PRICEADDITION'                => 'Puoi definire un sovrapprezzo su tutti i prezzi dei prodotti in questo negozio: Inserisci il sovrapprezzo e seleziona se è una percentuale (<span class="userinput_or_code">%</span>) o è assoluto (<span class="userinput_or_code">abs</span>).',

'HELP_SHOP_PERF_NEWESTARTICLES'               => 'Un elenco dei prodotti più nuovi è mostrato in <span class="filename_filepath_or_italic">Appena arrivati!</span>. Qui puoi impostare come viene generato questo elenco:<ul><li><span class="userinput_or_code">inattivo</span>: L\'elenco non viene mostrato.</li><li><span class="userinput_or_code">manuale</span>; Puoi definire i prodotti in <span class="navipath_or_inputname">Info Cliente -> Promozioni -></span> nella promozione <span class="filename_filepath_or_italic">Appena arrivati!</span>.</li><li><span class="userinput_or_code">automatico</span>: I prodotti sono automaticamente calcolati.</li></ul>',

'HELP_SHOP_PERF_TOPSELLER'                    => 'Un elenco dei prodotti venduti più spesso è mostrato in <span class="filename_filepath_or_italic">Migliori del Negozio</span>. Qui puoi impostare come viene generato l\'elenco:<ul><li><span class="userinput_or_code">inattivo</span>: L\'elenco non viene mostrato.</li><li><span class="userinput_or_code">manuale</span>: Puoi definire i prodotti in <span class="navipath_or_inputname">Info Cliente -> Promozioni -></span> nella promozione <span class="filename_filepath_or_italic">Migliori del Negozio</span>.</li><li><span class="userinput_or_code">automatico</span>: I prodotti sono automaticamente calcolati.</li></ul>',

'HELP_SHOP_PERF_LOADFULLTREE'                 => 'Se l\'impostazione è selezionata, l\'albero completo delle categorie è mostrato nella navigazione delle categorie (tutte le categorie sono espanse). Questo funziona solo se la navigazione delle categorie non è mostrata in alto.',

'HELP_SHOP_PERF_LOADACTION'                   => 'Se l\'impostazione è selezionata, le promozioni come <span class="filename_filepath_or_italic">Appena arrivati</span> e <span class="filename_filepath_or_italic">Migliori del Negozio</span> sono caricate e mostrate.',

'HELP_SHOP_PERF_USESELECTLISTPRICE'           => 'Nell\'elenco di selezione, possono essere impostati i sovrapprezzi/sconti. Se quest\'impostazione è selezionata, i sovrapprezzi/sconti sono caricati e applicati. Se non selezionata, i sovrapprezzi/sconti non sono applicati.',

'HELP_SHOP_PERF_DISBASKETSAVING'              => 'Il carrello degli utenti registrati viene salvato. Quando visitano di nuovo il tuo eShop, i contenuti del carrello sono caricati. Se attivi quest\'impostazione, i carrelli non sono più salvati.',

'HELP_SHOP_PERF_LOADDELIVERY'                 => 'Se disattivi quest\'impostazione, nessun costo di spedizione è calcolato: I costi di spedizione sono sempre 0.00 EUR.',

'HELP_SHOP_PERF_LOADPRICE'                    => 'Se disattivi quest\'impostazione, i prezzi dei prodotti non sono calcolati: Nessun prezzo viene mostrato.',

'HELP_SHOP_PERF_PARSELONGDESCINSMARTY'        => 'Se quest\'impostazione è attiva, le descrizioni dei prodotti e le categorie sono analizzate tramite Smarty: Puoi usare i tag Smarty (es. per usare le variabili) <br>',

'HELP_SHOP_PERF_LOADSELECTLISTSINALIST'       => 'Normalmente gli elenchi di selezione sono mostrati solo nella visualizzazione dettagliata di un prodotto. Se attivi quest\'impostazione, sono mostrati anche gli elenchi di selezione negli elenchi del prodotto (es. risultati della ricerca, categorie).',

'HELP_SHOP_PERF_CHECKIFTPLCOMPILE'            => 'Se quest\'impostazione è attivata, l\'eShop controlla su ogni chiamata se ogni modello è stato modificato. Se è così, l\'output viene ricalcolato. Attiva quest\'impostazione quando adatti i modelli, disattivala se l\'eShop è live per prestazioni migliori.',

'HELP_SHOP_PERF_CLEARCACHEONLOGOUT'           => 'Di solito, la cache completa è svuotata appena salvi qualsiasi modifica nell\'amministrazione dell\'eShop. Questo può portare a problemi di prestazioni all\'amministratore. Se quest\'impostazione è attivata, la cache viene svuotata solo se ti disconnetti dall\'amministrazione dell\'eShop.',

'HELP_SHOP_SEO_TITLEPREFIX'                   => 'Ogni pagina ha un titolo. questo titolo viene mostrato nella barra superiore della finestra del browser. Con <span class="navipath_or_inputname">Prefisso Titolo</span> e <span class="navipath_or_inputname">Suffisso Titolo</span> puoi compilare il testo prima e dopo i titoli della pagina:<br><ul><li>In <span class="navipath_or_inputname">Prefisso Titolo</span>, inserisci il testo da mostrare davanti al titolo.</li></ul>',

'HELP_SHOP_SEO_TITLESUFFIX'                   => 'Ogni pagina ha un titolo. questo titolo viene mostrato nella barra superiore della finestra del browser. Con <span class="navipath_or_inputname">Prefisso Titolo</span> e <span class="navipath_or_inputname">Suffisso Titolo</span> puoi compilare il testo prima e dopo i titoli della pagina:<br><ul><li>In <span class="navipath_or_inputname">Suffisso Titolo</span> inserisci il testo da mostrare dietro al titolo.</li></ul>',

'HELP_SHOP_SEO_IDSSEPARATOR'                  => 'Il separatore è usato se i nomi della categoria e i nomi del prodotto consistono di diverse parole. Il separatore viene usato al posto degli spazi, es. www.youreshop.com/category-name-of-several-words<br>Se non viene inserito alcun separatore, viene usato -.',

'HELP_SHOP_SEO_SAFESEOPREF'                   => 'Se diversi prodotti hanno lo stesso nome e sono nella stessa categoria, otterrebbero lo stesso URL SEO. Per evitare ciò, il Suffisso SEO viene allegato. Se non è definito alcun Suffisso SEO, viene usato <span class="filename_filepath_or_italic">oxid</span>.',

'HELP_SHOP_SEO_RESERVEDWORDS'                 => 'Alcuni URL sono definiti nell\'OXID eShop, come www.youreshop.com/admin per accedere all\'amministrazione dell\'eShop. Se una categoria è stata denominata <span class="filename_filepath_or_italic">admin</span>, anche l\'URL SEO sarebbe www.youreshop.com/admin - la categoria non sarebbe accessibile. Dunque, il suffisso SEO è allegato a questi URL. Puoi definire qui quali URL sono automaticamente suffissati.',

'HELP_SHOP_SEO_SKIPTAGS'                      => 'Se non sono definiti alcuni tag META per prodotti e categorie, i tag META sono creati in automatico. quindi le parole molto comuni possono essere omesse. Tutte le parole qui inserite sono omesse quando si creano i tag META.',

'HELP_SHOP_SEO_LOWERCASEURLS'                 => 'Rende minuscoli tutti i caratteri maiuscoli negli url SEO. Es. www/youreshop.com/Kiteboarding/Kites/ si trasforma in www.youreshop.com/kiteboarding/kites/.',

'HELP_SHOP_SEO_STATICURLS'                    => 'Per le pagine speciali (es. termini e condizioni generali) puoi inserire URL SEO fissi. Quando selezioni un URL statico, l\'URL normale è mostrato in <span class="navipath_or_inputname">URL Standard</span>. Nei campi di inserimento sotto puoi definire un URL SEO per ogni lingua.',

'HELP_SHOP_MAIN_PRODUCTIVE'                   => 'La modalità eShop non produttiva è intesa per l\'installazione, configurazione, personalizzazione dei modelli e fase di debug dei moduli dell\'eShop. Non appena la modalità produttiva è <span class="warning_or_important_hint">ON</span>, la gestione della cache e il comportamento di segnalazione di errori è ottimizzata per il negozio live.<br><span class="warning_or_important_hint">Attiva quest\'impostazione quando l\'eShop viene lanciato.</span><br>Trova altre informazioni importanti per andare live con OXID eShop nella nostra <a href="https://oxidforge.org/en/check-before-going-live.html" target="_blank">OXIDforge</a>.',

'HELP_SHOP_MAIN_ACTIVE'                       => 'Con <span class="navipath_or_inputname">Attiva</span> puoi abilitare/disabilitare l\'eShop completo. Se l\'eShop è disabilitato, un messaggio che dice che l\'eShop è temporaneamente offline viene mostrato agli utenti. Questo può essere utile per la manutenzione.',

'HELP_SHOP_MAIN_INFOEMAIL'                    => 'Tutte l\'email inviate tramite la pagina di contatto sono inviate a questo indirizzo e-mail.',

'HELP_SHOP_MAIN_ORDEREMAIL'                   => 'Quando gli utenti ordinano ricevono un\'email con un sommario dell\'ordine. Le risposte a quest\'email sono inviate a <span class="navipath_or_inputname">Risposta all\'email dell\'ordine</span>.',

'HELP_SHOP_MAIN_OWNEREMAIL'                   => 'Quando gli utenti ordinano, ricevi un\'email con un sommario dell\'ordine. Queste email sono inviate e <span class="navipath_or_inputname">Email dell\'ordine a</span>.',

'HELP_SHOP_MAIN_SMTPSERVER'                   => 'I dati SMTP sono necessari per inviare email (es. inviare un\'email di conferma dell\'ordine ai clienti).',

'HELP_ARTICLE_MAIN_ALDPRICE'                  => 'Con <span class="navipath_or_inputname">Alt. Prezzi</span> è possibile impostare prezzi speciali per determinati utenti (gruppi di utenti "Prezzo A", "Prezzo B" e "Prezzo C").',

'HELP_ARTICLE_MAIN_VAT'                       => 'Qui è possibile immettere un\'IVA speciale per questo prodotto. Questa IVA viene utilizzata per questo prodotto in tutti i calcoli successivi (carrello, ordine, fatture)',

'HELP_ARTICLE_EXTEND_UNITQUANTITY'            => 'Con <span class="navipath_or_inputname">Quantità</span> e <span class="navipath_or_inputname">Unità</span> è possibile impostare il prezzo per unità di quantità. Il prezzo per unità di quantità viene calcolato e visualizzato con il prodotto (es. 1,43 EUR al litro). In <span class="navipath_or_inputname">Quantità</span> inserire la quantità del prodotto (es. <span class="userinput_or_code">1,5</span> ), in <span class="navipath_or_inputname">Unità</span> definire l&#39;unità di quantità corrispondente (es. <span class="userinput_or_code">Litro</span> ). È possibile scegliere il tipo di unità dai valori dati oppure, selezionando il tipo di unità vuota "-", immettere manualmente il tipo di unità. Se desideri aggiungere un elenco di tipi esistente, segui questo <a href="http://oxidforge.org/en/adding-new-unit-types.html" target="_blank">collegamento</a> per le istruzioni.',

'HELP_ARTICLE_EXTEND_EXTURL'                  => 'In <span class="navipath_or_inputname">URL esterno</span> è possibile inserire un collegamento in cui sono disponibili ulteriori informazioni sul prodotto (ad es. sul sito Web del produttore). In <span class="navipath_or_inputname">Testo per URL esterno</span> è possibile inserire il testo a cui è collegato, ad es. <span class="userinput_or_code">Ulteriori informazioni sul sito web del produttore</span> .',

'HELP_ARTICLE_EXTEND_TPRICE'                  => 'In <span class="navipath_or_inputname">RRP</span> è possibile inserire il prezzo di vendita consigliato del produttore. Se si immette il prezzo di vendita consigliato, viene mostrato agli utenti: Sopra il prezzo del prodotto <span class="filename_filepath_or_italic">Ridotto dal</span> prezzo <span class="filename_filepath_or_italic">di vendita consigliato ora</span> viene visualizzato <span class="filename_filepath_or_italic">solo</span> .',

'HELP_ARTICLE_EXTEND_QUESTIONEMAIL'           => 'Ad <span class="navipath_or_inputname">Alt. Contatto</span> puoi inserire un indirizzo e-mail. Se gli utenti inviano domande su questo prodotto, verranno inviate a questo indirizzo e-mail. Se non viene inserito alcun indirizzo e-mail, la richiesta verrà inviata al normale indirizzo e-mail informativo.',

'HELP_ARTICLE_EXTEND_NONMATERIAL'             => 'L\'impostazione viene ereditata dal prodotto principale a Varianti e si applica all intero prodotto.',

'HELP_ARTICLE_EXTEND_FREESHIPPING'            => 'L\'impostazione viene ereditata dal prodotto principale a Varianti e si applica all\'intero prodotto.',

'HELP_ARTICLE_EXTEND_BLFIXEDPRICE'            => 'Avviso prezzo può essere disattivato per questo prodotto.',

'HELP_ARTICLE_EXTEND_SKIPDISCOUNTS'           => 'Se <span class="navipath_or_inputname">Salta tutti gli sconti negativi</span> è attivo, le quote negative non verranno calcolate per questo prodotto. Sono per esempio sconti e buoni.',

'HELP_ARTICLE_EXTEND_TEMPLATE'                => 'La visualizzazione dei dettagli di un prodotto può essere visualizzata con un template diverso. A tal fine, immettere il percorso e il nome del template da utilizzare.',

'HELP_ARTICLE_EXTEND_ISCONFIGURABLE'          => 'Se il prodotto è personalizzabile, viene visualizzato un campo di input aggiuntivo nella pagina dei dettagli dei prodotti e nel carrello. Qui i clienti possono inserire un testo per personalizzare il prodotto. 

Un tipico esempio sono le t-shirt che possono essere stampate con testo personalizzato. Nel campo di input i clienti possono inserire il testo da stampare sulla t-shirt.',

'HELP_ARTICLE_EXTEND_UPDATEPRICE'             => 'I prezzi possono essere modificati in un tempo definito. I campi forniti aggiornano i prezzi standard. Se lasci i valori di prezzo "0", i prezzi non verranno aggiornati.',

'HELP_ARTICLE_EXTEND_SHOWCUSTOMAGREEMENT'     => 'Se questa opzione è attivata, gli utenti devono confermare i termini e le condizioni nella quarta fase del processo di check-out per questo articolo specifico. Assicurati che sia attivata anche l\'opzione generale e che l\'articolo del prodotto sia intangibile o scaricabile.',

'HELP_ARTICLE_FILES_MAX_DOWNLOADS_COUNT'      => 'Qui è possibile definire quante volte l\'utente può scaricare dallo stesso link dopo l\'ordine. Per questo file è possibile sovrascrivere l\'impostazione predefinita, definita in Impostazioni principali -> Impostazioni di base -> Impostazioni -> Download per tutti i prodotti.',

'HELP_ARTICLE_FILES_LINK_EXPIRATION_TIME_UNREGISTERED' => 'Qui puoi definire quante volte un utente non registrato può usare il link per scaricare i dati. In questo file è possibile sovrascrivere l\'impostazione predefinita, definita in Impostazioni principali -> Impostazioni di base -> Impostazioni -> Download per tutti i prodotti.',

'HELP_ARTICLE_FILES_LINK_EXPIRATION_TIME'     => 'Specificare il tempo in ore per le quali il link per il download sarà valido dopo il primo ordine. In questo file è possibile sovrascrivere gli impostazioni generali predifiniti in Impostazioni principali -> Impostazioni di base -> Impostazioni -> Download per tutti i prodotti.',

'HELP_ARTICLE_FILES_NEW'                      => 'Immettere qui il nome di un file tramite FTP trasferito o caricare un nuovo file. Si noti che i file di grandi dimensioni devono essere caricati tramite FTP. La limitazione delle dimensioni dei file è valida solo quando il file viene caricato tramite l\'amministratore. Questa limitazione dipende dalle impostazioni PHP del server e potrebbe essere modificata solo lì.',

'HELP_ARTICLE_FILES_DOWNLOAD_EXPIRATION_TIME' => 'Specificare il tempo in ore, il collegamento per il download è valido dopo il primo download. Per questo file è possibile sovrascrivere l\'impostazione predefinita, definita in Impostazioni principali -> Impostazioni di base -> Impostazioni -> Download per tutti i prodotti.',

'HELP_ARTICLE_PICTURES_ICON'                  => 'Le icone sono le immagini più piccole di un prodotto. Ad esempio, vengono utilizzati nel carrello.<br>Il caricamento dell\'icona personalizzata sostituirà l\'icona, generata dalla prima immagine del prodotto.<br>Dopo il caricamento, il nome del file viene visualizzato in Icona. Se non viene ancora caricata alcuna icona, viene visualizzato ---',

'HELP_ARTICLE_PICTURES_THUMB'                 => 'Le miniature sono piccole immagini di prodotti. Ad esempio, vengono utilizzati negli elenchi di prodotti (categorie, risultati di ricerca). Il caricamento della miniatura personalizzata sovrascriverà la miniatura generata automaticamente. Dopo il caricamento, il nome del file viene mostrato in miniatura. Se non è stata ancora caricata alcuna miniatura, viene visualizzato ----.',

'HELP_ARTICLE_PICTURES_PIC1'                  => 'Le immagini vengono utilizzate nella veduta dettagliata di un prodotto. Puoi caricare fino a 7 immagini per prodotto. Dopo il caricamento, il nome del file viene visualizzato nel campo di immissione corrispondente. Se non è stata ancora caricata alcuna immagine, viene visualizzato ---. 
È possibile caricare immagini con una risoluzione massima di 2 MB o 1500 * 1500 pixel. Questa restrizione serve a evitare problemi con il limite di memoria PHP. Dopo aver caricato l\'immagine principale, lo zoom, la miniatura e l\'icona verranno generate automaticamente.',

'HELP_ARTICLE_PICTURES_ZOOM1'                 => 'Immagini Zoom sono immagini ingranditi che possono essere aperte nella veduta dettagliata di un prodotto. 
Puoi caricare immagini zoom <span class="navipath_or_inputname">zoom in caricamento Zoom X.</span> Dopo il caricamento, il nome del file viene mostrato in <span class="navipath_or_inputname">Zoom X.</span> Se non è stata ancora caricata alcuna immagine zoom, viene visualizzato <span class="userinput_or_code">nopic.jpg</span> .',

'HELP_ARTICLE_STOCK_REMINDACTIV'              => 'L\'impostazione viene ereditata dal prodotto principale a Varianti e si applica all intero prodotto.',

'HELP_ARTICLE_STOCK_STOCKFLAG'                => 'A <span class="navipath_or_inputname">Stato spedizione</span> puoi selezionare da 4 impostazioni:<ul><li><span class="userinput_or_code">Standard</span>: Il prodotto può essere ordinato anche se è esaurito.</li><li><span class="userinput_or_code">Magazzino esterno</span>: Il prodotto può sempre essere acquistato ed è sempre mostrato come <span class="filename_filepath_or_italic">in magazzino</span>. (Il livello delle scorte non può essere dato per il magazzino esterno. Dunque, il prodotto è sempre mostrato come <span class="filename_filepath_or_italic">in magazzino</span>).</li><li><span class="userinput_or_code">Se esaurito, offline</span>: Il prodotto non è mostrato se è esaurito.</li><li><span class="userinput_or_code">Se esaurito, non ordinabile</span>: Il prodotto viene mostrato se è esaurito, ma non può essere ordinato.</li></ul>',

'HELP_ARTICLE_IS_DOWNLOADABLE'                => 'I file di questo prodotto possono essere scaricati.',

'HELP_ARTICLE_STOCK_REMINDAMAOUNT'            => 'Con <span class="navipath_or_inputname">Invia email se le scorte cadono sotto il valore</span> puoi specificare che un\'email sarà inviata non appena il livello delle scorte cadrà sotto il valore inserito. Seleziona la casella di controllo e poi inserisci il livello a cui vuoi essere notificato.',

'HELP_ARTICLE_STOCK_DELIVERY'                 => 'Qui puoi inserire la data in cui il prodotto sarà nuovamente disponibile se esaurito. Il formato è anno-mese-giorno, es. 2009-02-16.',

'HELP_ARTICLE_SEO_FIXED'                      => 'Puoi far ricalcolare gli URL SEO all\'eShop. Una pagina del prodotto ottiene un nuovo URL SEO se per es. il titolo del prodotto viene modificato. L\'impostazione <span class="navipath_or_inputname">URL Fisso</span> lo previene: Se è attiva, il vecchio URL SEO è mantenuto e non viene calcolato alcun nuovo URL SEO.',

'HELP_ARTICLE_SEO_KEYWORDS'                   => 'Queste parole chiave sono integrate nel codice sorgente HTML della pagina del prodotto (parole chiave META). Quest\'informazione viene usata dai motori di ricerca. Le parole chiave adatte per il prodotto sono inseribili qui. Se lasciato vuoto, le parole chiave sono generate automaticamente.',

'HELP_ARTICLE_SEO_DESCRIPTION'                => 'Questa descrizione è integrata nel codice sorgente HTML della pagina del prodotto (descrizione META). Questo testo viene spesso visualizzato nelle pagine dei risultati dei motori di ricerca. Una descrizione adeguata può essere inserita qui. Se viene lasciato vuoto, la descrizione viene generata automaticamente.',

'HELP_ARTICLE_SEO_ACTCAT'                     => 'Puoi definire diversi URL SEO per i prodotti: per determinate categorie e pagine di produttori. Con <span class="navipath_or_inputname">Active Category / Vendor</span> puoi selezionare l\'URL SEO che desideri modificare.',

'HELP_ARTICLE_STOCK_STOCKTEXT'                => 'Qui puoi inserire un messaggio che viene mostrato se il prodotto è in magazzino.',

'HELP_ARTICLE_STOCK_NOSTOCKTEXT'              => 'Qui puoi inserire un messaggio che viene mostrato se il prodotto è esaurito.',

'HELP_ARTICLE_STOCK_AMOUNTPRICE_AMOUNTFROM'   => 'In <span class="navipath_or_inputname">Quantità Da/A/bis</span> puoi impostare per quale intervallo di quantità è valido il prezzo della scala.',

'HELP_ARTICLE_STOCK_AMOUNTPRICE_PRICE'        => 'Qui puoi impostare il prezzo per la quantità sopra inserita. Puoi inserire il prezzo assoluto o come sconto percentuale.<br>Ulteriori informazioni sui prezzi di scala si possono trovare nell\'<a href="http://www.oxid-esales.com/en/resources/help-faq/eshop-manual/setting-graduated-prices" target="_blank">articolo sui prezzi di scala nel manuale</a>.',

'HELP_ARTICLE_VARIANT_VARNAME'                => '<span class="navipath_or_inputname">Nome della Selezione</span> definisce come la selezione delle varianti è etichettata, es. <span class="userinput_or_code">Colore</span> o <span class="userinput_or_code">Dimensione</span>.',

'HELP_ATTRIBUTE_MAIN_DISPLAYINBASKET'         => 'Se selezionato, questo valore dell\'attributo sarà mostrato nel cartello e nella panoramica dell\'ordine sotto il titolo del prodotto.',

'HELP_CATEGORY_MAIN_HIDDEN'                   => 'Con <span class="navipath_or_inputname">Nascosto</span> puoi definire se questa categoria viene mostrata agli utenti. Se una categoria è nascosta, non viene mostrata agli utenti, anche se è attiva.',

'HELP_CATEGORY_MAIN_PARENTID'                 => 'In <span class="navipath_or_inputname">Sottocategoria Di</span> specifichi il punto in cui la categoria deve comparire:<br><ul><li>Se la categoria non deve essere una sottocategoria di ogni altra categoria, allora seleziona <span class="userinput_or_code">--</span> Off.</li><li>Se la categoria deve essere una sottocategoria di un\'altra categoria, allora seleziona la categoria appropriata.</li></ul>',

'HELP_CATEGORY_MAIN_EXTLINK'                  => 'Con <span class="navipath_or_inputname">Collegamento Esterno</span>, puoi inserire un collegamento che si apre quando gli utenti cliccano sulla categoria. <span class="warning_or_important_hint">Usa questa funzione solo se vuoi mostrare un collegamento nella navigazione della categoria. Causa alla categoria di perdere la sua funzione normale!</span>',

'HELP_CATEGORY_MAIN_PRICEFROMTILL'            => 'Con <span class="navipath_or_inputname">Prezzo Da/A</span> puoi specificare che <span class="warning_or_important_hint">tutti</span> i prodotti in un certo intervallo di prezzi sono mostrati in questa categoria. Inserisci il limite minimo nel primo campo della voce e nel limite seuperiore nel secondo campo della voce. Poi <span class="warning_or_important_hint">tutti i prodotti dell\'eShop</span> entro questo intervallo di prezzi sono mostrati in questa categoria.',

'HELP_CATEGORY_MAIN_DEFSORT'                  => 'Con <span class="navipath_or_inputname">Ordinamento Veloce</span> specifichi il modo in cui i prodotti nella categoria potranno essere ordinati.',

'HELP_CATEGORY_MAIN_SORT'                     => 'Puoi usare <span class="navipath_or_inputname">Ordinamento</span> per definire l\'ordine in cui sono mostrate le categorie: La categoria con il numero minimo è mostrata in alto e quella con il numero massimo in basso.',

'HELP_CATEGORY_MAIN_THUMB'                    => 'Con <span class="navipath_or_inputname">Immagine</span> e <span class="navipath_or_inputname">Carica Immagine</span> puoi caricare un\'immagine per questa categoria. L\'immagine è mostrata in alto alla categoria visualizzata. Seleziona l\'immagine in <span class="navipath_or_inputname">Carica Immagine</span> Quando clicchi su <span class="navipath_or_inputname">Salva</span>, l\'immagine viene caricata. Dopo il caricamento, il nome del file dell\'immagine viene mostrata nell\'<span class="navipath_or_inputname">Immagine</span>.',

'HELP_CATEGORY_MAIN_PROMOTION_ICON'           => 'Con l\'<span class="navipath_or_inputname">icona della promozione</span> e <span class="navipath_or_inputname">carica icona</span> puoi caricare un\'immagine della categoria per la promozione sulla pagina iniziale. Per mostrare la promozione della categoria vedi <span class="navipath_or_inputname">Impostazioni Principali -> Info Cliente -> Migliore offerta nelle categorie</span>',

'HELP_CATEGORY_MAIN_SKIPDISCOUNTS'            => '<li>Se <span class="navipath_or_inputname">Salta tutti gli sconti negativi</span> è attivo, le quote negative non saranno calcolate per ogni prodotto in questa categoria.',

'HELP_CATEGORY_SEO_FIXED'                     => 'Puoi far ricalcolare gli URL SEO dell\'eShop. Una pagina della categoria ottiene un nuovo URL SEO se per es. il titolo della categoria è cambiato. L\'impostazione <span class="navipath_or_inputname">URL Fisso</span> previene questo: Se è attiva, il vecchio URL SEO viene mantenuto e nessun URL SEO nuovo viene calcolato.',

'HELP_CATEGORY_SEO_KEYWORDS'                  => 'Queste parole chiave sono integrate nel codice sorgente HTML della pagina della categoria (parole chiave META). Quest\'informazione è usata dai motori di ricerca. Le parole chiave adatte per la categoria possono essere inserite qui. Se viene lasciato vuoto, le parole chiave sono automaticamente generate.',

'HELP_CATEGORY_SEO_DESCRIPTION'               => 'Questa descrizione è integrata nel codice sorgente HTML della pagina della categoria (descrizione META). Questo testo è spesso mostrato nelle pagine del risultato dei motori di ricerca. Una descrizione adatta può essere inserita qui. Se è lasciata vuota, la descrizione viene generata automaticamente.',

'HELP_CATEGORY_SEO_SHOWSUFFIX'                => 'Con quest\'impostazione puoi specificare se il suffisso del titolo viene mostrato nel titolo della finestra del browser quando la pagina della categoria viene aperta. Il suffisso del titolo può essere impostato in <span class="navipath_or_inputname">Impostazioni Principali -> Impostazioni Core -> SEO -> Suffisso Titolo</span>.',

'HELP_CONTENT_MAIN_SNIPPET'                   => 'Se selezioni <span class="navipath_or_inputname">Frammento</span> può includere questa pagina CMS in altre pagine CMS dal suo identificativo: <span class="userinput_or_code">[{ oxcontent ident=ident_of_the_cms_page }]</span>',

'HELP_CONTENT_MAIN_MAINMENU'                  => 'Se selezioni <span class="navipath_or_inputname">Menu Superiore</span>, un collegamento a questa pagina CMS viene mostrato nel menu superiore (A Termini e Su di Noi).',

'HELP_CONTENT_MAIN_CATEGORY'                  => 'Se selezioni <span class="navipath_or_inputname">Categoria</span>, un link a questa pagina CMS viene mostrato nella navigazione della categoria sotto le altre categorie.',

'HELP_CONTENT_MAIN_MANUAL'                    => 'Se selezioni <span class="navipath_or_inputname">Manualmente</span>, un collegamento viene creato che puoi usare per includere questa pagina CMS in altre pagine CMS. Il collegamento è mostrato sotto quando clicchi su <span class="navipath_or_inputname">Salva</span>',

'HELP_CONTENT_SEO_FIXED'                      => 'Puoi far ricalcolare gli URL SEO dell\'eShop. Una pagina CMS ottiene un nuovo URL SEO se es. il titolo della pagina CMS è cambiato. Le impostazioni dell\'<span class="navipath_or_inputname">URL Fisso</span> lo previene: Se è attivo, il vecchio URL SEO è mantenuto e nessun URL SEO nuovo viene calcolato.',

'HELP_CONTENT_SEO_KEYWORDS'                   => 'Queste parole chiave sono integrate nel codice sorgente HTML della pagina CMS (parole chiave META). Quest\'informazione è usata dai motori di ricerca. Le parole chiave adatte per la pagina CMS possono essere inserite qui. Se lasciato vuoto, le parole chiave sono automaticamente generate.',

'HELP_CONTENT_SEO_DESCRIPTION'                => 'La descrizione è integrata nel codice sorgente HTML della pagina CMS (descrizione META). Questo testo è spesso mostrato nelle pagine del risultato dei motori di ricerca. Una descrizione adatta può essere inserita qui. Se lasciato vuoto, la descrizione viene generata automaticamente.',

'HELP_DELIVERY_MAIN_COUNTRULES'               => 'Sotto <span class="navipath_or_inputname">Regole di Calcolo</span> puoi selezionare quanto spesso viene calcolato il prezzo:<ul><li><span class="userinput_or_code">Una volta per carrello</span>: Il prezzo viene calcolato una volta per l\'intero ordine.</li><li><span class="userinput_or_code">Una volta per ogni prodotto differente</span>: Il prezzo è calcolato una volta per ogni prodotto differente nel carrello. Non fa differenza quale quantità di un prodotto viene ordinata.</li><li><span class="userinput_or_code">Per ogni prodotto</span>: il prezzo viene calcolato per ogni prodotto nel carrello.</li></ul>',

'HELP_DELIVERY_MAIN_CONDITION'                => 'In <span class="navipath_or_inputname">Condizione</span> puoi specificare che la regola del costo di spedizione si applica solo ad una certa condizione. Puoi scegliere tra 4 condizioni:<ul><li><span class="userinput_or_code">Quantità</span>: Numero di prodotti nel carrello.</li><li><span class="userinput_or_code">Dimensione</span>: Dimensione totale di tutti i prodotti. Per usare propriamente quest\'impostazione, la dimensione per i prodotti deve essere inserita.</li><li><span class="userinput_or_code">Peso</span>: Il peso totale dell\'ordine in chilogrammi. Per usare propriamente quest\'impostazione, il peso per i prodotti deve essere inserito.</li><li><span class="userinput_or_code">Prezzo</span>: Prezzo d\'acquisto dell\'ordine.</li></ul>Puoi usare i campi delle voci <span class="navipath_or_inputname">>=</span> (maggiore di o uguale a) e <span class="navipath_or_inputname"><=</span> (minore di o uguale a) per specificare l\'intervallo a cui la condizione si deve applicare. Un numero maggiore deve essere inserito per <span class="navipath_or_inputname"><=</span> poi per <span class="navipath_or_inputname">-></span>.',

'HELP_DELIVERY_MAIN_PRICE'                    => 'Puoi usare <span class="navipath_or_inputname">Sovrapprezzo/Sconto</span> per specificare la magnitudine dei costi di spedizione. Il prezzo può essere calcolato in due modi differenti:<ul><li>Con <span class="userinput_or_code">abs</span>, il prezzo viene assolutamente specificato (es.: con <span class="userinput_or_code">6.90</span>, un prezzo di EUR 6.90 viene calcolato).</li><li>Con <span class="userinput_or_code">%</span>, il prezzo è specificato in relazione al prezzo d\'acquisto (es.: Con <span class="userinput_or_code">10</span>, un prezzo del 10% del prezzo d\'acquisto viene calcolato).</li></ul>',

'HELP_DELIVERY_MAIN_ORDER'                    => 'Puoi usare l\'<span class="navipath_or_inputname">Ordine di elaborazione della regola</span> per specificare l\'ordine in cui le regole del costo di spedizione sarà eseguito. La regola del costo di spedizione con il numero minore viene eseguita prima. L\'ordine è importante se l\'impostazione <span class="navipath_or_inputname">Non calcolare ulteriori regole se questa regola corrisponde</span> è usata.',

'HELP_DELIVERY_MAIN_FINALIZE'                 => 'Puoi usare <span class="navipath_or_inputname">Non calcolare ulteriori regole se questa regola corrisponde</span> per specificare che nessun altra regola debba essere eseguita se la regola del costo di spedizione è valida ed è in esecuzione. Per quest\'opzione, l\'ordine in cui le regole del costo di spedizione sono eseguite è importante. Viene specificato tramite l\'<span class="navipath_or_inputname">Ordine di elaborazione della Regola</span>.',

'HELP_DELIVERYSET_MAIN_POS'                   => 'L\'<span class="navipath_or_inputname">Ordine</span> specifica l\'ordine in cui i metodi di spedizione sono mostrati agli utenti: Il metodo di spedizione con il numero minore viene mostrato in alto.',

'HELP_DISCOUNT_MAIN_SORT'                     => 'Usa <span class="navipath_or_inputname">Ordine</span> per definire l\'ordine degli sconti applicati ai prodotti o al carrello. Lo sconto con il numero minore si applica per primo, quello con il numero maggiore per ultimo.',

'HELP_DISCOUNT_MAIN_PRICE'                    => 'Puoi usare il <span class="navipath_or_inputname">Prezzo di Acquisto</span> per specificare che lo sconto è valido solo per certi prezzi d\'acquisto. Se lo sconto deve essere valido per tutti i prezzi d\'acquisto, inserisci <span class="userinput_or_code">0</span> in <span class="navipath_or_inputname">Da</span> e <span class="userinput_or_code">0</span> in <span class="navipath_or_inputname">A</span>.',

'HELP_DISCOUNT_MAIN_AMOUNT'                   => 'Puoi usare <span class="navipath_or_inputname">Quantità</span> per specificare che lo sconto è valido solo per certe quantità d\'acquisto. Se vuoi che lo sconto sia valido per tutte le quantità d\'acquisto, inserisci <span class="userinput_or_code">0</span> in <span class="navipath_or_inputname">Da</span> e <span class="userinput_or_code">0</span> in <span class="navipath_or_inputname">A</span>.',

'HELP_DISCOUNT_MAIN_REBATE'                   => 'In <span class="navipath_or_inputname">Sconto</span>, specifichi la magnitudine dello sconto. Puoi usare l\'elenco di selezione dopo il campo di della voce per specificare se lo sconto si deve applicare come uno sconto assoluto o come uno sconto percentuale:<ul><li><span class="userinput_or_code">abs</span>: Lo sconto è uno sconto assoluto, es. EUR 5.</li><li><span class="userinput_or_code">%</span>: Lo sconto è uno sconto percentuale, es. 10 percento del prezzo d\'acquisto.</li><li><span class="userinput_or_code">itm</span>: Sconto nella forma di un prodotto gratuito. Imposta la quantità di questo prodotto. Scegli "Moltiplica" se la quantità del prodotto scontato nel carrello dovrebbe essere moltiplicata con la quantità del prodotto gratuito.</li></ul>',

'HELP_GENERAL_SEO_ACTCAT'                     => 'Puoi definire diversi URL SEO per i prodotti: per determinate categorie e pagine di produttori. Con <span class="navipath_or_inputname">Active Category / Vendor</span> puoi selezionare l\'URL SEO che desideri modificare.',

'HELP_GENERAL_SEO_FIXED'                      => 'L\'eShop ricalcola automaticamente gli URL SEO. Per esempio, una pagina del prodotto ottiene un nuovo URL SEO se il titolo del prodotto è cambiato. L\'impostazione <span class="navipath_or_inputname">URL Fisso</span> previene il ricalcolo: Se è attivo, il vecchio URL SEO viene mantenuto e nessun URL SEO nuovo viene generato.',

'HELP_GENERAL_SEO_SHOWSUFFIX'                 => 'Con quest\'impostazione puoi specificare se il suffisso del titolo viene mostrato nel titolo della finestra del browser quando la data pagina è aperta. Il suffisso del titolo può essere impostato in <span class="navipath_or_inputname">Impostazioni Principali -> Impostazioni Core -> SEO -> Suffisso Titolo</span>.',

'HELP_GENERAL_SEO_OXKEYWORDS'                 => 'Queste parole chiave sono integrate nel codice sorgente HTML (parole chiave META). Quest\'informazione viene usata dai motori di ricerca. Le parole chiave adatte per il prodotto possono inserite qui. Se viene lasciato vuoto, le parole chiave sono automaticamente generate.',

'HELP_GENERAL_SEO_OXDESCRIPTION'              => 'Questa descrizione è integrata nel codice sorgente HTML (descrizione META). Questo testo è spesso mostrato nelle pagine del risultato dei motori di ricerca. Una descrizione adatta può essere inserita qui. Se è lasciato vuoto, la descrizione è automaticamente generata.',

'HELP_GENIMPORT_FIRSTCOLHEADER'               => 'Attiva quest\'impostazione se la prima riga del file CSV contiene i nomi delle colonne del database a cui sono stati assegnati i valori del CSV. I valori sono assegnati automaticamente alle colonne del database.',

'HELP_GENIMPORT_REPEATIMPORT'                 => 'Se l\'impostazione è attiva, il passaggio uno viene mostrato dopo l\'importazione riuscita così che tu possa iniziare l\'importazione successiva immediatamente.',

'HELP_LANGUAGE_DEFAULT'                       => 'La lingua predefinita viene usata quando il negozio non può rilevare la lingua in altri modi: l\'id lingua non è definito dall\'URL, non è rilevabile dal browser, non è definito nella sessione etc. La lingua predefinita può solo essere disabilitata, eliminarla <u>non è possibile</u>.',

'HELP_LANGUAGE_ACTIVE'                        => 'Quest\'opzione definisce la disponibilità della lingua nel frontend dell\'eShop: se è attivata - la lingua è disponibile nel frontend. Per lavorare nell\'area d\'amministrazione, questa lingua è sempre disponibile; anche se è disabilitata dal frontend.',

'HELP_PAYMENT_MAIN_SORT'                      => 'In <span class="navipath_or_inputname">Ordine</span> puoi specificare l\'ordine in cui i metodi di pagamento devono essere mostrati agli utenti: Il metodo di pagamento con il numero d\'ordinamento minore è mostrato in alto.',

'HELP_PAYMENT_MAIN_FROMBONI'                  => 'Puoi usare <span class="navipath_or_inputname">Valutazione Minima del Credito</span> per specificare che i metodi di pagamento sono solo disponibili agli utenti aventi un certo indice di credito o superiore. Puoi inserire la valutazione di credito per ogni utente in <span class="navipath_or_inputname">Amministra Utenti -> Utenti -> Esteso</span>.',

'HELP_PAYMENT_MAIN_SELECTED'                  => 'Puoi usare <span class="navipath_or_inputname">Selezionato</span> per definire quale metodo di pagamento deve essere selezionato come il metodo predefinito se l\'utente può scegliere tra diversi metodi di pagamento.',

'HELP_PAYMENT_MAIN_AMOUNT'                    => 'Puoi usare <span class="navipath_or_inputname">Prezzo d\'Acquisto</span> per specificare che il metodo di pagamento è valido solo per certi prezzi di spedizione. I campi <span class="navipath_or_inputname">da</span> e <span class="navipath_or_inputname">a</span> ti consentono di impostare un intervallo.<br>Se il metodo di pagamento deve essere valido per ogni prezzo d\'acquisto, devi specificare una condizione che viene sempre incontrata: Inserisci <span class="userinput_or_code">0</span> nel campo <span class="navipath_or_inputname">da</span> e <span class="userinput_or_code">99999999</span> nel campo <span class="navipath_or_inputname">a</span>.',

'HELP_PAYMENT_MAIN_ADDPRICE'                  => 'In <span class="navipath_or_inputname">Sovrapprezzo/Riduzione</span>, il prezzo viene inserito per il metodo di pagamento. Il prezzo può essere specificato in due modi differenti:<ul><li>Con <span class="userinput_or_code">abs</span> il prezzo viene inserito per il metodo di pagamento (es.: se inserisci <span class="userinput_or_code">7.50</span> un prezzo di EUR 7.50 viene calcolato.)</li><li>Con <span class="userinput_or_code">%</span>, il prezzo è calcolato in base al prezzo d\'acquisto (es.: se inserisci <span class="userinput_or_code">2</span>, il prezzo è il 2 percento del prezzo d\'acquisto)</li></ul>',

'HELP_PAYMENT_MAIN_ADDSUMRULES'               => 'Quando calcoli il sovrapprezzo o la riduzione del prezzo, il valore del carrello viene usato come base. Definisce quali costi saranno inclusi quando si calcola il valore del carrello.',

'HELP_SELECTLIST_MAIN_TITLEIDENT'             => 'In <span class="navipath_or_inputname">Titolo di Lavoro</span>, puoi inserire un nome aggiuntivo che non viene mostrato agli utenti del tuo eShop. Puoi usare il titolo di lavoro per differenziare tra gli elenchi di selezione simili (es., Dimensioni per pantaloni e Dimensioni per camicie).',

'HELP_SELECTLIST_MAIN_FIELDS'                 => 'Tutte le opzioni disponibili sono mostrate nell\'elenco dei <span class="navipath_or_inputname">Campi</span>. Puoi usare i campi di inserimento alla destra per configurare nuove opzioni.',

'HELP_USER_MAIN_HASPASSWORD'                  => 'Qui puoi distinguere se gli utenti si sono registrati quando ordinano:<ul><li>Se una password viene impostata, l\'utente è registrato.</li><li>Se nessuna password viene impostata, l\'utente ha ordinato senza registrarsi.</li></ul>',

'HELP_USER_PAYMENT_METHODS'                   => 'Su questa scheda puoi:<ul><li>Naviga e gestisci i metodi di pagamento dell\'utente esistenti.<li>Crea nuovi metodi di pagamento e imposta i valori predefiniti, per esempio il debito diretto.</li></ul>',

'HELP_USER_EXTEND_NEWSLETTER'                 => 'Quest\'impostazione mostra se l\'utente si è iscritto alla newsletter.',

'HELP_USER_EXTEND_EMAILFAILED'                => 'Se nessun e-mail può essere inviata all\'indirizzo e-mail di questo utente, controlla quest\'impostazione. Allora nessuna newsletter è più inviata a quest\'utente. Altre email sono ancora inviate.',

'HELP_USER_EXTEND_BONI'                       => 'Qui puoi inserire un valore numerico per la valutazione di credito dell\'utente. Con la valutazione di credito puoi influenzare quali metodi di pagamento sono disponibili a quest\'utente.',

'HELP_MANUFACTURER_MAIN_ICON'                 => 'Con <span class="navipath_or_inputname">Icona</span> e <span class="navipath_or_inputname">Carica Icona</span> puoi caricare un\'immagine per questo produttore (es. il logo). In <span class="navipath_or_inputname">Carica Icona</span>, seleziona l\'Immagine che vuoi caricare. Quando clicchi su <span class="navipath_or_inputname">Salva</span> l\'immagine viene caricata. Dopo il caricamento, il nome del file viene mostrato in <span class="navipath_or_inputname">Icona</span>.',

'HELP_MANUFACTURER_SEO_FIXED'                 => 'Puoi far ricalcolare gli URL SEO all\'eShop. Una pagina del produttore ottiene un nuovo URL SEO se per es. il titolo del prodottutore viene modificato. L\'impostazione <span class="navipath_or_inputname">URL Fisso</span> lo previene: Se è attiva, il vecchio URL SEO è mantenuto e non viene calcolato alcun nuovo URL SEO.',

'HELP_MANUFACTURER_SEO_KEYWORDS'              => 'Queste parole chiave sono integrate nel codice sorgente HTML della pagina del produttore (parole chiave META). Quest\'informazione è usata dai motori di ricerca. Le parole chiave adatte per la categoria possono essere inserite qui. Se viene lasciato vuoto, le parole chiave sono automaticamente generate.',

'HELP_MANUFACTURER_SEO_DESCRIPTION'           => 'Questa descrizione è integrata nel codice sorgente HTML della pagina del produttore (descrizione META). Questo testo viene spesso visualizzato nelle pagine dei risultati dei motori di ricerca. Una descrizione adeguata può essere inserita qui. Se viene lasciato vuoto, la descrizione viene generata automaticamente.',

'HELP_MANUFACTURER_SEO_SHOWSUFFIX'            => 'Con quest\'impostazione puoi specificare se il suffisso del titolo viene mostrato nel titolo della finestra del browser quando la pagina del produttore viene aperta. Il suffisso del titolo può essere impostato in <span class="navipath_or_inputname">Impostazioni Principali -> Impostazioni Core -> SEO -> Suffisso Titolo</span>.',

'HELP_VOUCHERSERIE_MAIN_DISCOUNT'             => 'In <span class="navipath_or_inputname">Sconto</span>, specifichi la magnitudine dello sconto. Puoi usare l\'elenco di selezione dopo il campo di inserimento per specificare se lo sconto deve essere applicato come uno sconto assoluto o percentuale:<ul><li><span class="userinput_or_code">abs</span>: Lo sconto è assoluto, es. EUR 5.</li><li><span class="userinput_or_code">%</span>: Lo sconto è percentuale, es. 10 percento del prezzo di acquisto.</li></ul>',

'HELP_VOUCHERSERIE_MAIN_ALLOWSAMESERIES'      => 'Qui puoi impostare se gli utenti sono autorizzati ad usare diversi coupon di questa serie di coupon in un ordine singolo.',

'HELP_VOUCHERSERIE_MAIN_ALLOWOTHERSERIES'     => 'Qui puoi impostare se gli utenti possono usare i coupon con coupon di un\'altra serie in un ordine singolo.',

'HELP_VOUCHERSERIE_MAIN_SAMESEROTHERORDER'    => 'Qui puoi impostare se gli utenti possono usare i coupon di questa serie di coupon in ordini multipli.',

'HELP_VOUCHERSERIE_MAIN_RANDOMNUM'            => 'Se quest\'impostazione è attiva viene calcolato un numero casuale per ogni coupon.',

'HELP_VOUCHERSERIE_MAIN_VOUCHERNUM'           => 'Qui puoi inserire un numero di coupon. Questo numero è usato creando nuovi coupon se <span class="navipath_or_inputname">Numeri Casuali</span> è disattivato. Tutti i Coupon ottengono lo stesso numero del coupon.',

'HELP_VOUCHERSERIE_MAIN_CALCULATEONCE'        => 'Se assegni i prodotti o le categorie al tuo coupon, disattiva quest\'opzione per calcolare questo coupon ad ogni prodotto per la posizione del carrello. Attiva se il coupon dovrebbe essere valido solo una volta per posizione del carrello.',

'HELP_WRAPPING_MAIN_PICTURE'                  => 'Con <span class="navipath_or_inputname">Immagine</span> e <span class="navipath_or_inputname">Carica Immagine</span> puoi caricare un\'immagine per la confezione regalo. In <span class="navipath_or_inputname">Carica Immagine</span>, seleziona l\'immagine da caricare. Quando clicchi su <span class="navipath_or_inputname">Salva</span>, l\'immagine viene caricata. Dopo il caricamento, il nome del file viene mostrato in <span class="navipath_or_inputname">Immagine</span>.',

'HELP_PROMOTIONS_BANNER_PICTUREANDLINK'       => 'Carica l\'immagine del banner e inserisci l\'URL del banner che sarà usato quando clicchi sul banner. Se il prodotto viene assegnato al banner e l\'URL non è inserito, il collegamento al prodotto assegnato sarà usato quando si clicca sul banner.',

'HELP_SHOP_PERF_SEO_CACHE'                    => 'La cache SEO abilitata aumenta le prestazioni, ma richiede molto spazio su disco nella directory /tmp.',

'HELP_ALTERNATIVE_IMAGE_SERVER_NOTE'          => 'L\'URL alternativo al server di immagini remoto può essere specificato nel file di configurazione config.inc.php impostando <i>sAltImageUrl</i> e <i>sSSLAltImageUrl</i> . 
Quindi tutte le immagini del prodotto verranno caricate da questo server alternativo invece che da quello locale. Tuttavia, i file caricati verranno archiviati localmente. In questo caso la sincronizzazione con il server esterno deve essere eseguita manualmente o con script personalizzati.',

'HELP_SHOP_RDFA_CONTENT_OFFERER'              => 'Seleziona qui, in quale pagina di contenuto di eShop sono mostrate le informazioni principali, es. "Su di Noi".',

'HELP_SHOP_RDFA_CONTENT_PAYMENT'              => '',

'HELP_SHOP_RDFA_CONTENT_DELIVERY'             => '',

'HELP_SHOP_RDFA_VAT'                          => 'Quest\'opzione specifica se l\'imposta (VAT) è inclusa nel prezzo e i costi di spedizione/pagamento o no.',

'HELP_SHOP_RDFA_DURATION_PRICES'              => 'Specifica qui l\'orario di validità dei costi dei prodotti, pagamento e spedizione (es. 1 giorno, 1 settimana).',

'HELP_SHOP_RDFA_LOGO_URL'                     => 'L\'indirizzo Web (URL) di un logo o immagine.',

'HELP_SHOP_RDFA_GEO_LONGITUDE'                => 'La longitudine del negozio come parte della geolocalizzazione. Sei pregato di inserire solo i numeri.',

'HELP_SHOP_RDFA_GEO_LATITUDE'                 => 'La latitudine del negozio come parte della geolocalizzazione. Sei pregato di inserire solo i numeri.',

'HELP_SHOP_RDFA_GLN'                          => 'Global Location Number (GLN) per l\'azienda. Il Global Location Number è un numero di tredici cifre usato per identificare parti e posizioni fisiche.',

'HELP_SHOP_RDFA_NAICS'                        => 'Il Codice del Sistema di Classificazione Industriale Nord Americano (NAICS) per la tua azienda. Vedi http://www.census.gov/eos/www/naics/.',

'HELP_SHOP_RDFA_ISIC'                         => 'Il Codice dello Standard Internazionale di Classificazione Industriale di Tutte le Attività Economiche (ISIC) per la tua azienda. Vedi http://unstats.un.org/unsd/cr/registry/isic-4.asp.',

'HELP_SHOP_RDFA_DUNS'                         => 'Il Dun & Bradstreet D-U-N-S è un numero di nove cifre usato per identificare le entità legali.',

'HELP_SHOP_RDFA_SHOW_PRODUCTSTOCK'            => 'Se quest\'opzione è su mezzi, allora le scorte reali del prodotto sono mostrate.',

'HELP_SHOP_RDFA_RATING_MIN'                   => 'Il valore minimo possibile si riferisce alla scala usata per le valutazioni nel tuo negozio. Questo valore non è la valutazione corrente minima di un prodotto!',

'HELP_SHOP_RDFA_RATING_MAX'                   => 'Il valore massimo possibile si riferisce alla scala usata per le valutazioni nel tuo negozio. Questo valore non è la valutazione corrente massima di un prodotto!',

'HELP_SHOP_RDFA_COND'                         => 'Seleziona qui, quale termine descrive la condizione dei prodotti (nuovo, usato, o rinnovato).',

'HELP_SHOP_RDFA_FNC'                          => 'Seleziona la funzione aziendale dei prodotti qui. Per esempio, sono offerti per la vendita, il noleggio o la riparazione?',

'HELP_SHOP_RDFA_COSTUMER'                     => 'I tipi di clienti per cui i prodotti del negozio sono validi (Utente finale, Rivenditore, Azienda e/o Pubblico).',

'HELP_SHOP_RDFA_DURATION_OFFERINGS'           => 'Questa proprietà specifica l\'orario della validità dei prodotti, es. 1 giorno, 1 settimana o 1 mese.',

'HELP_SHOP_PERF_SYSREQ_CHECK'                 => 'Esegue il controllo di salute del sistema quando si accede alla pagina principale dell\'amministratore e mostra i messaggi se necessario. Nelle configurazioni speciali questo potrebbe influenzare la performance del pannello d\'amministrazione.',

'HELP_SHOP_CONFIG_ADDITIONAL_SERVICE_VAT_CALCULATION_BIGGEST_NET'  => 'Il tasso IVA dei prodotti, che hanno il valore netto maggiore nel carrello, è usato per il calcolo.',

'HELP_SHOP_CONFIG_ADDITIONAL_SERVICE_VAT_CALCULATION_PROPORTIONAL' => 'La percentuale dei prodotti nel carrello con lo stesso tasso IVA è usato per il calcolo.',

'HELP_SHOP_CONFIG_VIEWNETPRICE'               => 'Nei prezzi del prodotto del frontend sono mostrati come prezzi netti.',

'HELP_SHOP_CONFIG_ENTERNETPRICE'              => 'Nell\'area di amministrazione i prezzi del prodotto devono essere inseriti come prezzi netti.',

'HELP_REVERSE_PROXY_GET_FRONTEND'             => 'Controlla se il Proxy Inverso è disponibile per il frontend. L\'intestazione della pagina iniziale del negozio è verificata.<br>Il test potrebbe fallire se differenti domini o protocolli (http/https) sono usati per il pannello dell\'amministrazione e il front del negozio.',

'HELP_REVERSE_PROXY_GET_BACKEND'              => 'L\'area di amministrazione è mostrata senza Proxy Inverso. Impossibile ricevere l\'intestazione Varnish.',

'HELP_SHOP_CONFIG_DEBIT_OLD_BANK_INFORMATION_NOT_ALLOWED' => 'Solo IBAN e BIC possono essere inseriti durante il pagamento. Il numero di conto bancario e il codice bancario sono inseribili solo se questa casella di controllo non è attivata.',

'HELP_SHOP_CONFIG_ENABLE_INTANGIBLE_PRODUCTS_AGREEMENT'   => 'Se quest\'opzione è attivata, gli utenti devono confermare i termini e le condizioni per i prodotti immateriali o scaricabili nel quarto passaggio del processo di pagamento. Sei pregato di assicurarti che quest\'opzione sia abilitata anche per l\'elemento specifico!',

'HELP_SHOP_CONFIG_FIELDS_CONTACTFORM'         => 'Qui puoi definire i campi del modulo di contatto che un utente deve necessariamente compilare.',
];
