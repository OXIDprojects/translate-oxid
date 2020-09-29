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

$sLangName  = 'Italiano';

$aLang = array(
    'charset'                                       => 'UTF-8',

    'SHOP_THEME_GROUP_images'                       => 'Immagini',
    'SHOP_THEME_GROUP_features'                     => 'Funzionalità',
    'SHOP_THEME_GROUP_display'                      => 'Schermo',
    'SHOP_THEME_GROUP_logo'                         => 'Logo',
    'SHOP_THEME_GROUP_favicons'                     => 'Favicon',
    'SHOP_THEME_GROUP_footer'                       => 'Piè di Pagina',
    'SHOP_THEME_GROUP_header'                       => 'Intestazione',
    'SHOP_THEME_GROUP_contact'                      => 'Contatti',
    'SHOP_THEME_GROUP_googleanalytics'              => 'Google Analytics',
    'SHOP_THEME_GROUP_googlets'                     => 'Negozi Fidati di Google',
    'SHOP_THEME_GROUP_background'                   => 'Immagine-sfondo',
    'SHOP_THEME_GROUP_econda'                       => 'Controllo Negozio Web di econda',
    'SHOP_THEME_GROUP_emails'                       => 'E-mail',

    'SHOP_THEME_sIconsize'                          => 'Dimensione icona (ampiezza*altezza)', //SHOP_CONFIG_ICONSIZE
    'HELP_SHOP_THEME_sIconsize'                     => 'Le icone sono le immagini più piccole di un prodotto. Sono usate: <br>' .
                                                       '<ul><li>nel carrello.</li>' .
                                                       '<li>se i prodotti sono mostrati nel menu a destra (es. in <span class="filename_filepath_or_italic">ALTO al Negozio</span> e <span class="filename_filepath_or_italic">Occasioni</span>).</li></ul>' .
                                                       'Per evitare problemi di progettazione causati da icone troppo grandi, le icone sono ridimensionate. Inserisci la dimensione massima per le icone qui.',

    'SHOP_THEME_sThumbnailsize'                     => 'Dimensione miniatura (ampiezza*altezza)', //SHOP_CONFIG_THUMBNAILSIZE
    'HELP_SHOP_THEME_sThumbnailsize'                => 'Le miniature sono piccole immagini del prodotto. Sono usate:<br>' .
                                                       '<ul><li>negli elenchi di prodotti.</li>' .
                                                       '<li>nelle promozioni mostrate al centro della pagina iniziale, es. <span class="filename_filepath_or_italic">Appena arrivate!</span>.</li></ul>-' .
                                                       'Per evitare problemi di progettazione causati da miniature troppo grandi, le miniature sono ridimensionate. Inserisci la dimensione massima per le miniature qui.',

    'SHOP_THEME_sZoomImageSize'                     => 'Dimensione immagine ingrandita (ampiezza*altezza)', //SHOP_CONFIG_ZOOMIMAGESIZE
    'SHOP_THEME_sCatThumbnailsize'                  => 'Dimensione immagine di categoria (ampiezza*altezza)', //SHOP_CONFIG_CATEGORYTHUMBNAILSIZE
    'HELP_SHOP_THEME_sCatThumbnailsize'             => 'Nella vista della categoria, l\'immagine della categoria selezionata è mostrata nella dimensione definita.', //SHOP_CONFIG_CATEGORYTHUMBNAILSIZE
    'SHOP_THEME_aDetailImageSizes'                  => 'Dimensione dell\'immagine del prodotto (ampiezza*altezza)', //SHOP_CONFIG_DETAILIMAGESIZE

    'SHOP_THEME_sManufacturerIconsize'              => 'Dimensione del logo del marchio/del produttore', // Check if this is really manufacturer or if it is more like "brand"
    'HELP_SHOP_THEME_sManufacturerIconsize'         => 'Il logo del marchio/produttore è mostrato sulla pagina iniziale del cursore del produttore.',

    'SHOP_THEME_sCatIconsize'                       => 'La dimensione di un\'immagine di una sottocategoria (ampiezza*altezza)',
    'HELP_SHOP_THEME_sCatIconsize'                  => 'Nella vista della categoria, le immagini di categoria delle sottocategorie sono mostrate nella dimensione definita.',

    'SHOP_THEME_sCatPromotionsize'                  => 'La dimensione dell\'immagine di categoria per la promozione sulla pagina iniziale (ampiezza*altezza)',
    'HELP_SHOP_THEME_sCatPromotionsize'             => 'La promozione della categoria sulla pagina iniziale necessita di una dimensione speciale per le immagini di categoria. Definisci la dimensione di queste immagini qui.',

    'SHOP_THEME_blFooterShowHelp'                   => 'Usa collegamento d\'aiuto',
    'SHOP_THEME_blFooterShowLinks'                  => 'Usa collegamento dei Collegamenti',
    'SHOP_THEME_blFooterShowNewsletter'             => 'Usa collegamento della newsletter',
    'SHOP_THEME_blFooterShowNewsletterForm'         => 'Usa modulo della newsletter',
    'SHOP_THEME_blFooterShowNews'                   => 'Usa collegamento delle notizie',
    'SHOP_THEME_bl_showGiftWrapping'                => 'Usa confezione regalo', //SHOP_CONFIG_SHOWGIFTWRAPPING
    'SHOP_THEME_bl_showVouchers'                    => 'Usa buoni sconto', //SHOP_CONFIG_SHOWVOUCHERS
    'SHOP_THEME_bl_showWishlist'                    => 'Usa registro dei regali', //SHOP_CONFIG_SHOWWISHLIST
    'SHOP_THEME_bl_showCompareList'                 => 'Usa elenco di confronto', //SHOP_CONFIG_SHOWCOMPARELIST
    'SHOP_THEME_bl_showListmania'                   => 'Usa listmania', //SHOP_CONFIG_SHOWLISTMANIA
    'SHOP_THEME_blShowBirthdayFields'               => 'Mostra i campi di inserimento per la data di nascita quando i clienti inseriscono i propri dati personali', //SHOP_CONFIG_SHOWBIRTHDAYFIELDS

    'SHOP_THEME_iTopNaviCatCount'                   => 'Quantità di categorie che viene mostrata in alto', //SHOP_CONFIG_TOPNAVICATCOUNT
    'SHOP_THEME_blShowFinalStep'                    => 'Mostra la conferma dell\'ordine dopo il termine dell\'ordine (Quinto Passaggio nel Pagamento)', //SHOP_SYSTEM_SHOWFINALSTEP
    'SHOP_THEME_iNewBasketItemMessage'              => 'Seleziona azione quando il prodotto viene aggiunto al carrello', //SHOP_SYSTEM_SHOWNEWBASKETITEMMESSAGE
    'HELP_SHOP_THEME_iNewBasketItemMessage'         => 'Quando il cliente aggiunge i prodotti al carrello, l\'eShop di OXID può comportarsi differentemente. Configura cosa dovrebbe succedere per dare il feedback adeguato al cliente.', //SHOP_SYSTEM_SHOWNEWBASKETITEMMESSAGE
    'SHOP_THEME_iNewBasketItemMessage_0'            => 'nessuno',
    'SHOP_THEME_iNewBasketItemMessage_1'            => 'Mostra messaggio',
    'SHOP_THEME_iNewBasketItemMessage_2'            => 'Apri popup',
    'SHOP_THEME_iNewBasketItemMessage_3'            => 'Apri cestino',

    'SHOP_THEME_blShowListDisplayType'              => 'Mostra il selettore del tipo di elenco dei prodotti',
    'HELP_SHOP_THEME_blShowListDisplayType'         => 'Decidi se il visitatore del tuo negozio può selezionare il tipo dell\'elenco di prodotti nel negozio. Se queste opzioni non sono attivate, i tuoi visitatori vedranno gli elenchi mostrato come se tu li avessi regolati nella casella di derivazione "Tipo di elenco di prodotti predefinito".',
    'SHOP_THEME_sDefaultListDisplayType'            => 'Tipo di elenco di prodotti predefinito',
    'SHOP_THEME_sDefaultListDisplayType_grid'       => 'Griglia',
    'SHOP_THEME_sDefaultListDisplayType_line'       => 'Elenco',
    'SHOP_THEME_sDefaultListDisplayType_infogrid'   => 'Griglia doppia',
    'SHOP_THEME_sStartPageListDisplayType'          => 'Tipo di elenco dei prodotti sulla Pagina Iniziale',
    'SHOP_THEME_sStartPageListDisplayType_grid'     => 'Griglia',
    'SHOP_THEME_sStartPageListDisplayType_line'     => 'Elenco',
    'SHOP_THEME_sStartPageListDisplayType_infogrid' => 'Griglia doppia',

    'SHOP_THEME_aNrofCatArticlesInGrid'             => 'Vista Griglia: Numero di prodotti che possono essere mostrati in un elenco di prodotti (pagine di categoria, risultati di ricerca)<br><br>Attenzione: Un grande numero di prodotti per pagina (oltre i 100) può causare perdite di prestazioni!',
    'SHOP_THEME_aNrofCatArticles'                   => 'Numero di prodotti che possono essere mostrati in un elenco di prodotti (pagine di categoria, risultati di ricerca)<br><br>Attenzione: Un grande numero di prodotti per pagina (oltre i 100) può causare perdite di prestazioni!',

    'SHOP_THEME_sFacebookUrl'                       => 'Pagina di Facebook-URL',
    'HELP_SHOP_THEME_sFacebookUrl'                  => 'Es.: https://www.facebook.com/oxidesales',
    'SHOP_THEME_sTwitterUrl'                        => 'Profilo-URL Twitter',
    'HELP_SHOP_THEME_sTwitterUrl'                   => 'Es.: https://twitter.com/OXID_eSales',
    'SHOP_THEME_sBlogUrl'                           => 'URL del blog',
    'HELP_SHOP_THEME_sBlogUrl'                      => 'Es.: http://blog.oxid-esales.com',
    'SHOP_THEME_sYouTubeUrl'                        => 'URL-Canale di YouTube',
    'HELP_SHOP_THEME_sYouTubeUrl'                   => 'Es.: https://www.youtube.com/user/oxidesales',
    'SHOP_THEME_sGooglePlusUrl'                     => 'URL-Pagina Google+',
    'HELP_SHOP_THEME_sGooglePlusUrl'                => 'Es.: https://plus.google.com/114133952363540971062',

    'SHOP_THEME_sGoogleMapsAddr'                    => 'Il tuo indirizzo postale',
    'HELP_SHOP_THEME_sGoogleMapsAddr'               => 'Es.: OXID eSales AG, Bertoldstraße 48, 79098 Freiburg',

    'SHOP_THEME_bl_showManufacturerSlider'          => 'Mostra cursore del produttore alla Pagina Iniziale',

    'SHOP_THEME_blUseGAPageTracker'                 => 'Usa Google Analytics PageTracker',
    'SHOP_THEME_blUseGAEcommerceTracking'           => 'Usa Google Analytics Ecommerce Tracking',
    'HELP_SHOP_THEME_blUseGAEcommerceTracking'      => 'Sei pregato di tenere a mente che quest\'opzione necessita di essere abilitata anche nel tuo profilo di Google Analytics. Manuale: <a href="https://support.google.com/analytics/answer/1009612?hl=en&ref_topic=1037061" target="_blank">Collegamento</a>',
    'SHOP_THEME_sGATrackingId'                      => 'Google Analytics Tracking-ID',
    'HELP_SHOP_THEME_sGATrackingId'                 => 'Es.: UA-XXXXXXXX-1 <br><br>Il proprietario del negozio è responsabile per l\'uso legale di questa funzione. Un adattamento della politica della privacy è obbligatorio.',
    'SHOP_THEME_blGAAnonymizeIPs'                   => 'Anonimizza Indirizzi IP',

    'SHOP_THEME_sLogoFile'                          => 'Nome del file del logo',
    'HELP_SHOP_THEME_sLogoFile'                     => 'Questo è relativo al percorso <code>/out/wave/img/</code>.',

    'SHOP_THEME_sLogoWidth'                         => 'Ampiezza della testata del logo',
    'HELP_SHOP_THEME_sLogoWidth'                    => 'Specifica come valore di un pixel.',
    'SHOP_THEME_sLogoHeight'                        => 'Altezza della testata del logo',
    'HELP_SHOP_THEME_sLogoHeight'                   => 'Specifica come valore di un pixel.',

    'SHOP_THEME_sEmailLogo'                         => 'Nome del file del logo per l\'intestazione dell\'email',
    'HELP_SHOP_THEME_sEmailLogo'                    => 'Questo è relativo al percorso <code>/out/wave/img/</code>.',

    'SHOP_THEME_sFaviconFile'                       => 'Nome del file del favicon',
    'HELP_SHOP_THEME_sFaviconFile'                  => 'Questo favicon è destinato ad essere mostrato nella scheda del browser.<br>In generale, questo è un file ico.<br>Questo è relativo al percorso <code>/out/wave/img/favicons/</code>.',
    'SHOP_THEME_sFavicon16File'                     => 'Nome del file del favicon con 16*16px.',
    'SHOP_THEME_sFavicon32File'                     => 'Nome del file del favicon con 32*32px.',
    'SHOP_THEME_sFavicon48File'                     => 'Nome del file del favicon con 48*48px.',
    'SHOP_THEME_sFavicon64File'                     => 'Nome del file del favicon con 64*64px.',
    'SHOP_THEME_sFavicon128File'                    => 'Nome del file del favicon con 128*128px.',
    'SHOP_THEME_sFavicon512File'                    => 'Nome del file del favicon con 512*512px.',
    'SHOP_THEME_sFaviconMSTileColor'                => 'Colore della casella per segnalibri di Windows 8/Windows Mobile.',
    'HELP_SHOP_THEME_sFaviconMSTileColor'           => 'Specificato come un valore esadecimale.<br>Es.: #D83434',

    'SHOP_THEME_blUseBackground'                    => 'Mostra immagine di sfondo',
    'SHOP_THEME_sBackgroundColor'                   => 'Colore di sfondo del negozio',
    'HELP_SHOP_THEME_sBackgroundColor'              => 'Specificato come un valore esadecimale.<br>Es.: #D83434',
    'SHOP_THEME_sBackgroundPath'                    => 'Nome del file dell\'immagine di sfondo',
    'HELP_SHOP_THEME_sBackgroundPath'               => 'Questo è relativo al percorso <code>/out/wave/img/backgrounds/</code>.',
    'SHOP_THEME_sBackgroundRepeat'                  => 'Ripetere immagine di sfondo?',
    'SHOP_THEME_sBackgroundRepeat_no-repeat'        => 'No',
    'SHOP_THEME_sBackgroundRepeat_repeat-x'         => 'Sì, orizzontale',
    'SHOP_THEME_sBackgroundRepeat_repeat-y'         => 'Sì, verticale',
    'SHOP_THEME_sBackgroundRepeat_repeat'           => 'Sì, orizzontale e verticale',
    'SHOP_THEME_sBackgroundPosHorizontal'           => 'Posizione orizzontale dell\'immagine di sfondo',
    'SHOP_THEME_sBackgroundPosHorizontal_left'      => 'sinistra',
    'SHOP_THEME_sBackgroundPosHorizontal_right'     => 'destra',
    'SHOP_THEME_sBackgroundPosHorizontal_center'    => 'centrato',
    'SHOP_THEME_sBackgroundPosVertical'             => 'Posizione verticale dell\'immagine di sfondo',
    'SHOP_THEME_sBackgroundPosVertical_top'         => 'alto',
    'SHOP_THEME_sBackgroundPosVertical_bottom'      => 'basso',
    'SHOP_THEME_sBackgroundPosVertical_center'      => 'centrato',
    'SHOP_THEME_sBackgroundSize'                    => 'Dimensione dell\'immagine di sfondo',
    'SHOP_THEME_sBackgroundSize_cover'              => 'copertura (altezza piena)',
    'SHOP_THEME_sBackgroundSize_contain'            => 'copertura (ampiezza piena)',
    'SHOP_THEME_sBackgroundSize_normal'             => 'Mantieni dimensione originale',
    'SHOP_THEME_blBackgroundAttachment'             => 'Correggere lo sfondo durante lo scorrimento?',
    'SHOP_THEME_blHomeLink'                         => 'Mostrare il collegamento "Home" nella navigazione principale?',
    'SHOP_THEME_bl_showPriceAlarm'                  => 'Usa prezzo desiderato',

    'SHOP_THEME_blUseGoogleTS'                      => 'Usa Negozi Fidati di Google',
    'SHOP_THEME_sGoogleVendorId'                    => 'ID Negozio di Google',
    'HELP_SHOP_THEME_sGoogleVendorId'               => 'Puoi trovare questo ID nel tuo Cruscotto del Commerciante dei Negozi Fidati.',
    'SHOP_THEME_sGoogleShoppingAccountId'           => 'ID-Conto Google Shopping (opzionale)',
    'HELP_SHOP_THEME_sGoogleShoppingAccountId'      => 'Fornisci questo campo solo se invii dei feed per Google Shopping.<br><br>ID Conto dal Google Merchant Center. Questo valore dovrebbe corrispondere all\'ID del profilo che usi per inviare i tuoi <a href="https://support.google.com/merchants/answer/188494#US" target="_blank">feed dei dati del prodotto a Google Shopping</a> tramite il Google Merchant Center. Se hai un profilo MCS, usa il tuo ID del subprofilo associato con quel feed del prodotto.',
    'SHOP_THEME_sPageLanguage'                      => 'Lingua del tuo negozio in ISO',
    'HELP_SHOP_THEME_sPageLanguage'                 => 'Il locale dovrebbe essere nel formato di &lt;language&gt;_&lt;country&gt;<br><br>&lt;Language&gt; è un codice linguistico di due lettere definito nell\'ISO- e &lt;country&gt; è un codice nazionale di due lettere definito nell\'ISO 3466-1 alpha-2. Di solito &lt;country&gt;dovrebbe essere tutto maiuscolo e &lt;language&gt; dovrebbe essere minuscolo. es. en_US, en_GB, en_AU, fr_FR, de_DE, o ja_JP.',
    'SHOP_THEME_sShoppingCountry'                   => 'Nazione di Google Shopping-Feed (opzionale)',
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
    'SHOP_THEME_blEcondaRecommendationsBasket'      => '',
    'SHOP_THEME_sEcondaWidgetIdBasket'              => '',

    'SHOP_THEME_blFullwidthLayout'                      => '',

    'SHOP_THEME_blEmailsShowProductPictures'        => '',
);
