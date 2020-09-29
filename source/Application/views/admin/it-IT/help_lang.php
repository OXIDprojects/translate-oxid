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

'HELP_SHOP_CONFIG_BIDIRECTCROSS'              => '',

'HELP_SHOP_CONFIG_STOCKONDEFAULTMESSAGE'      => '',

'HELP_SHOP_CONFIG_STOCKOFFDEFAULTMESSAGE'     => '',

'HELP_SHOP_CONFIG_OVERRIDEZEROABCPRICES'      => '',

'HELP_SHOP_CONFIG_SEARCHFIELDS'               => '',

'HELP_SHOP_CONFIG_SORTFIELDS'                 => '',

'HELP_SHOP_CONFIG_MUSTFILLFIELDS'             => '',

'HELP_SHOP_CONFIG_USENEGATIVESTOCK'           => '',

'HELP_SHOP_CONFIG_SETORDELETECURRENCY'        => '',

'HELP_SHOP_CONFIG_NEWARTBYINSERT'             => '',

/** @deprecated since v6.5.4 (2020-04-06); Suggest feature will be removed completely */
'HELP_SHOP_CONFIG_ALLOW_SUGGEST_ARTICLE'      => '',
/** end deprecated */

'HELP_SHOP_CONFIG_SEND_TECHNICAL_INFORMATION_TO_OXID' => '',

'HELP_SHOP_CONFIG_DELETERATINGLOGS'           => '',

'HELP_SHOP_CONFIG_DISABLEONLINEVATIDCHECK'    => '',

'HELP_SHOP_CONFIG_ALTVATIDCHECKINTERFACEWSDL' => '',

'HELP_SHOP_CONFIG_PSLOGIN'                    => '',

'HELP_SHOP_CONFIG_BASKETEXCLUDE'              => '',

'HELP_SHOP_CONFIG_BASKETRESERVATION'          => '',

'HELP_SHOP_CONFIG_BASKETRESERVATIONTIMEOUT'   => '',

'HELP_SHOP_CONFIG_INVITATION'                 => '',

'HELP_SHOP_CONFIG_POINTSFORINVITATION'        => '',

'HELP_SHOP_CONFIG_POINTSFORREGISTRATION'      => '',

// @deprecated since v6.5.1 (2019-02-07); credit card payment method will be no longer supported
'HELP_SHOP_CONFIG_ATTENTION'                  => '',
// END deprecated

'HELP_SHOP_CONFIG_SHOWTSINTERNATIONALFEESMESSAGE' => '',

'HELP_SHOP_CONFIG_SHOWTSCODMESSAGE'           => '',

'HELP_SHOP_CONFIG_DOWNLOADS'                  => '',

'HELP_SHOP_CONFIG_DOWNLOADS_PATH'             => '',

'HELP_SHOP_CONFIG_MAX_DOWNLOADS_COUNT'        => '',

'HELP_SHOP_CONFIG_LINK_EXPIRATION_TIME_UNREGISTERED' => '',

'HELP_SHOP_CONFIG_LINK_EXPIRATION_TIME'       => '',

'HELP_SHOP_CONFIG_PARCELSERVICE'              => '',

'HELP_SHOP_CONFIG_DOWNLOAD_EXPIRATION_TIME'   => '',

'HELP_SHOP_CONFIG_LOADREVIEWS'                  => '',

'HELP_SHOP_CONFIG_INCLUDE_PRODUCT_REVIEW_LINKS_IN_ORDER_EMAIL' => '',

'HELP_SHOP_MALL_MALLMODE'                     => '',

'HELP_SHOP_MALL_PRICEADDITION'                => '',

'HELP_SHOP_PERF_NEWESTARTICLES'               => '',

'HELP_SHOP_PERF_TOPSELLER'                    => '',

'HELP_SHOP_PERF_LOADFULLTREE'                 => '',

'HELP_SHOP_PERF_LOADACTION'                   => '',

'HELP_SHOP_PERF_USESELECTLISTPRICE'           => '',

'HELP_SHOP_PERF_DISBASKETSAVING'              => '',

'HELP_SHOP_PERF_LOADDELIVERY'                 => '',

'HELP_SHOP_PERF_LOADPRICE'                    => '',

'HELP_SHOP_PERF_PARSELONGDESCINSMARTY'        => '',

'HELP_SHOP_PERF_LOADSELECTLISTSINALIST'       => '',

'HELP_SHOP_PERF_CHECKIFTPLCOMPILE'            => '',

'HELP_SHOP_PERF_CLEARCACHEONLOGOUT'           => '',

'HELP_SHOP_SEO_TITLEPREFIX'                   => '',

'HELP_SHOP_SEO_TITLESUFFIX'                   => '',

'HELP_SHOP_SEO_IDSSEPARATOR'                  => '',

'HELP_SHOP_SEO_SAFESEOPREF'                   => '',

'HELP_SHOP_SEO_RESERVEDWORDS'                 => '',

'HELP_SHOP_SEO_SKIPTAGS'                      => '',

'HELP_SHOP_SEO_LOWERCASEURLS'                 => '',

'HELP_SHOP_SEO_STATICURLS'                    => '',

'HELP_SHOP_MAIN_PRODUCTIVE'                   => '',

'HELP_SHOP_MAIN_ACTIVE'                       => '',

'HELP_SHOP_MAIN_INFOEMAIL'                    => '',

'HELP_SHOP_MAIN_ORDEREMAIL'                   => '',

'HELP_SHOP_MAIN_OWNEREMAIL'                   => '',

'HELP_SHOP_MAIN_SMTPSERVER'                   => '',

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

'HELP_ARTICLE_STOCK_STOCKFLAG'                => '',

'HELP_ARTICLE_IS_DOWNLOADABLE'                => 'I file di questo prodotto possono essere scaricati.',

'HELP_ARTICLE_STOCK_REMINDAMAOUNT'            => '',

'HELP_ARTICLE_STOCK_DELIVERY'                 => '',

'HELP_ARTICLE_SEO_FIXED'                      => '',

'HELP_ARTICLE_SEO_KEYWORDS'                   => '',

'HELP_ARTICLE_SEO_DESCRIPTION'                => 'Questa descrizione è integrata nel codice sorgente HTML della pagina del prodotto (descrizione META). Questo testo viene spesso visualizzato nelle pagine dei risultati dei motori di ricerca. Una descrizione adeguata può essere inserita qui. Se viene lasciato vuoto, la descrizione viene generata automaticamente.',

'HELP_ARTICLE_SEO_ACTCAT'                     => 'Puoi definire diversi URL SEO per i prodotti: per determinate categorie e pagine di produttori. Con <span class="navipath_or_inputname">Active Category / Vendor</span> puoi selezionare l\'URL SEO che desideri modificare.',

'HELP_ARTICLE_STOCK_STOCKTEXT'                => '',

'HELP_ARTICLE_STOCK_NOSTOCKTEXT'              => '',

'HELP_ARTICLE_STOCK_AMOUNTPRICE_AMOUNTFROM'   => '',

'HELP_ARTICLE_STOCK_AMOUNTPRICE_PRICE'        => '',

'HELP_ARTICLE_VARIANT_VARNAME'                => '',

'HELP_ATTRIBUTE_MAIN_DISPLAYINBASKET'         => '',

'HELP_CATEGORY_MAIN_HIDDEN'                   => '',

'HELP_CATEGORY_MAIN_PARENTID'                 => '',

'HELP_CATEGORY_MAIN_EXTLINK'                  => '',

'HELP_CATEGORY_MAIN_PRICEFROMTILL'            => '',

'HELP_CATEGORY_MAIN_DEFSORT'                  => '',

'HELP_CATEGORY_MAIN_SORT'                     => '',

'HELP_CATEGORY_MAIN_THUMB'                    => '',

'HELP_CATEGORY_MAIN_PROMOTION_ICON'           => '',

'HELP_CATEGORY_MAIN_SKIPDISCOUNTS'            => '',

'HELP_CATEGORY_SEO_FIXED'                     => '',

'HELP_CATEGORY_SEO_KEYWORDS'                  => '',

'HELP_CATEGORY_SEO_DESCRIPTION'               => '',

'HELP_CATEGORY_SEO_SHOWSUFFIX'                => '',

'HELP_CONTENT_MAIN_SNIPPET'                   => '',

'HELP_CONTENT_MAIN_MAINMENU'                  => '',

'HELP_CONTENT_MAIN_CATEGORY'                  => '',

'HELP_CONTENT_MAIN_MANUAL'                    => '',

'HELP_CONTENT_SEO_FIXED'                      => '',

'HELP_CONTENT_SEO_KEYWORDS'                   => '',

'HELP_CONTENT_SEO_DESCRIPTION'                => '',

'HELP_DELIVERY_MAIN_COUNTRULES'               => '',

'HELP_DELIVERY_MAIN_CONDITION'                => '',

'HELP_DELIVERY_MAIN_PRICE'                    => '',

'HELP_DELIVERY_MAIN_ORDER'                    => '',

'HELP_DELIVERY_MAIN_FINALIZE'                 => '',

'HELP_DELIVERYSET_MAIN_POS'                   => '',

'HELP_DISCOUNT_MAIN_SORT'                     => '',

'HELP_DISCOUNT_MAIN_PRICE'                    => '',

'HELP_DISCOUNT_MAIN_AMOUNT'                   => '',

'HELP_DISCOUNT_MAIN_REBATE'                   => '',

'HELP_GENERAL_SEO_ACTCAT'                     => 'Puoi definire diversi URL SEO per i prodotti: per determinate categorie e pagine di produttori. Con <span class="navipath_or_inputname">Active Category / Vendor</span> puoi selezionare l\'URL SEO che desideri modificare.',

'HELP_GENERAL_SEO_FIXED'                      => '',

'HELP_GENERAL_SEO_SHOWSUFFIX'                 => '',

'HELP_GENERAL_SEO_OXKEYWORDS'                 => '',

'HELP_GENERAL_SEO_OXDESCRIPTION'              => '',

'HELP_GENIMPORT_FIRSTCOLHEADER'               => '',

'HELP_GENIMPORT_REPEATIMPORT'                 => '',

'HELP_LANGUAGE_DEFAULT'                       => '',

'HELP_LANGUAGE_ACTIVE'                        => '',

'HELP_PAYMENT_MAIN_SORT'                      => '',

'HELP_PAYMENT_MAIN_FROMBONI'                  => '',

'HELP_PAYMENT_MAIN_SELECTED'                  => '',

'HELP_PAYMENT_MAIN_AMOUNT'                    => '',

'HELP_PAYMENT_MAIN_ADDPRICE'                  => '',

'HELP_PAYMENT_MAIN_ADDSUMRULES'               => '',

'HELP_SELECTLIST_MAIN_TITLEIDENT'             => '',

'HELP_SELECTLIST_MAIN_FIELDS'                 => '',

'HELP_USER_MAIN_HASPASSWORD'                  => '',

'HELP_USER_PAYMENT_METHODS'                   => '',

'HELP_USER_EXTEND_NEWSLETTER'                 => '',

'HELP_USER_EXTEND_EMAILFAILED'                => '',

'HELP_USER_EXTEND_BONI'                       => '',

'HELP_MANUFACTURER_MAIN_ICON'                 => '',

'HELP_MANUFACTURER_SEO_FIXED'                 => '',

'HELP_MANUFACTURER_SEO_KEYWORDS'              => '',

'HELP_MANUFACTURER_SEO_DESCRIPTION'           => '',

'HELP_MANUFACTURER_SEO_SHOWSUFFIX'            => '',

'HELP_VOUCHERSERIE_MAIN_DISCOUNT'             => '',

'HELP_VOUCHERSERIE_MAIN_ALLOWSAMESERIES'      => '',

'HELP_VOUCHERSERIE_MAIN_ALLOWOTHERSERIES'     => '',

'HELP_VOUCHERSERIE_MAIN_SAMESEROTHERORDER'    => '',

'HELP_VOUCHERSERIE_MAIN_RANDOMNUM'            => '',

'HELP_VOUCHERSERIE_MAIN_VOUCHERNUM'           => '',

'HELP_VOUCHERSERIE_MAIN_CALCULATEONCE'        => '',

'HELP_WRAPPING_MAIN_PICTURE'                  => '',

'HELP_PROMOTIONS_BANNER_PICTUREANDLINK'       => '',

'HELP_SHOP_PERF_SEO_CACHE'                    => '',

'HELP_ALTERNATIVE_IMAGE_SERVER_NOTE'          => 'L\'URL alternativo al server di immagini remoto può essere specificato nel file di configurazione config.inc.php impostando <i>sAltImageUrl</i> e <i>sSSLAltImageUrl</i> . 
Quindi tutte le immagini del prodotto verranno caricate da questo server alternativo invece che da quello locale. Tuttavia, i file caricati verranno archiviati localmente. In questo caso la sincronizzazione con il server esterno deve essere eseguita manualmente o con script personalizzati.',

'HELP_SHOP_RDFA_CONTENT_OFFERER'              => '',

'HELP_SHOP_RDFA_CONTENT_PAYMENT'              => '',

'HELP_SHOP_RDFA_CONTENT_DELIVERY'             => '',

'HELP_SHOP_RDFA_VAT'                          => '',

'HELP_SHOP_RDFA_DURATION_PRICES'              => '',

'HELP_SHOP_RDFA_LOGO_URL'                     => 'L\'indirizzo Web (URL) di un logo o immagine.',

'HELP_SHOP_RDFA_GEO_LONGITUDE'                => '',

'HELP_SHOP_RDFA_GEO_LATITUDE'                 => '',

'HELP_SHOP_RDFA_GLN'                          => '',

'HELP_SHOP_RDFA_NAICS'                        => '',

'HELP_SHOP_RDFA_ISIC'                         => '',

'HELP_SHOP_RDFA_DUNS'                         => '',

'HELP_SHOP_RDFA_SHOW_PRODUCTSTOCK'            => '',

'HELP_SHOP_RDFA_RATING_MIN'                   => '',

'HELP_SHOP_RDFA_RATING_MAX'                   => '',

'HELP_SHOP_RDFA_COND'                         => '',

'HELP_SHOP_RDFA_FNC'                          => '',

'HELP_SHOP_RDFA_COSTUMER'                     => '',

'HELP_SHOP_RDFA_DURATION_OFFERINGS'           => '',

'HELP_SHOP_PERF_SYSREQ_CHECK'                 => '',

'HELP_SHOP_CONFIG_ADDITIONAL_SERVICE_VAT_CALCULATION_BIGGEST_NET'  => '',

'HELP_SHOP_CONFIG_ADDITIONAL_SERVICE_VAT_CALCULATION_PROPORTIONAL' => '',

'HELP_SHOP_CONFIG_VIEWNETPRICE'               => '',

'HELP_SHOP_CONFIG_ENTERNETPRICE'              => '',

'HELP_REVERSE_PROXY_GET_FRONTEND'             => '',

'HELP_REVERSE_PROXY_GET_BACKEND'              => '',

'HELP_SHOP_CONFIG_DEBIT_OLD_BANK_INFORMATION_NOT_ALLOWED' => '',

'HELP_SHOP_CONFIG_ENABLE_INTANGIBLE_PRODUCTS_AGREEMENT'   => '',

'HELP_SHOP_CONFIG_FIELDS_CONTACTFORM'         => '',
];
