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

$sLangName  = 'Français';

$aLang = array(
    'charset'                                       => 'UTF-8',

    'SHOP_THEME_GROUP_images'                       => 'Images',
    'SHOP_THEME_GROUP_features'                     => 'Caractéristiques',
    'SHOP_THEME_GROUP_display'                      => 'Afficher',
    'SHOP_THEME_GROUP_logo'                         => 'Logo',
    'SHOP_THEME_GROUP_favicons'                     => 'Favicons',
    'SHOP_THEME_GROUP_footer'                       => 'Bas de page',
    'SHOP_THEME_GROUP_header'                       => 'Entête',
    'SHOP_THEME_GROUP_contact'                      => 'Contact',
    'SHOP_THEME_GROUP_googleanalytics'              => 'Google Analytics',
    'SHOP_THEME_GROUP_googlets'                     => 'Google Marchands de confiance',
    'SHOP_THEME_GROUP_background'                   => 'Image de fond',
    'SHOP_THEME_GROUP_econda'                       => 'Econda Web Shop Contrôler',
    'SHOP_THEME_GROUP_emails'                       => 'E-Mails',

    'SHOP_THEME_sIconsize'                          => 'Taille de l\'icône (largeur*hauteur)', //SHOP_CONFIG_ICONSIZE
    'HELP_SHOP_THEME_sIconsize'                     => 'Les icônes sont les plus petites images d\'un produit. Elles sont utilisées : <br>' .
                                                       '<ul><li>dans le panier d\'achat.</li>' .
                                                       '<li>si les produits sont affichés dans le bon menu (par exemple dans <span class="filename_filepath_or_italic">HAUT de la boutique</span> et <span class="filename_filepath_or_italic">Affaire</span>).</li></ul>' .
                                                       'Pour éviter les problèmes de conception causés par des icônes trop grandes, les icônes sont redimensionnées. Saisissez ici la taille maximale des icônes.',

    'SHOP_THEME_sThumbnailsize'                     => 'Taille de la vignette (largeur*hauteur)', //SHOP_CONFIG_THUMBNAILSIZE
    'HELP_SHOP_THEME_sThumbnailsize'                => 'Les vignettes sont de images du produit en taille réduite. Elles sont utilisées :<br>' .
                                                       '<ul><li>dans les listes de produits.</li>' .
                                                       '<li>dans les promotions affichées au milieu de la première page, par exemple <span class="filename_filepath_or_italic">Vient d\'arriver!</span>.</li></ul>' .
                                                       'Pour éviter les problèmes de conception causés par des vignettes trop grandes, les vignettes sont redimensionnées. Entrez ici la taille maximale des vignettes.',

    'SHOP_THEME_sZoomImageSize'                     => 'Zoomer la taille de l\'image (largeur * hauteur)', //SHOP_CONFIG_ZOOMIMAGESIZE
    'SHOP_THEME_sCatThumbnailsize'                  => 'Taille de l\'image de la catégorie pour la promotion sur la page d\'accueil', //SHOP_CONFIG_CATEGORYTHUMBNAILSIZE
    'HELP_SHOP_THEME_sCatThumbnailsize'             => 'En mode catégorie, l\'image de la catégorie sélectionnée est affichée dans la taille définie.', //SHOP_CONFIG_CATEGORYTHUMBNAILSIZE
    'SHOP_THEME_aDetailImageSizes'                  => 'Taille de l\'image du produit (largeur*hauteur)', //SHOP_CONFIG_DETAILIMAGESIZE

    'SHOP_THEME_sManufacturerIconsize'              => 'Taille du logo du fabricant / de la marque', // Check if this is really manufacturer or if it is more like "brand"
    'HELP_SHOP_THEME_sManufacturerIconsize'         => 'Le logo du fabricant / de la marque est affiché sur la page de démarrage dans le curseur du fabricant.',

    'SHOP_THEME_sCatIconsize'                       => 'Taille de l\'image d\'une sous-catégorie (largeur*hauteur)',
    'HELP_SHOP_THEME_sCatIconsize'                  => 'En mode catégorie, les images de catégorie des sous-catégories sont affichées dans la taille définie.',

    'SHOP_THEME_sCatPromotionsize'                  => 'Taille de l\'image de la catégorie pour la promotion sur la page d\'accueil (largeur*hauteur)',
    'HELP_SHOP_THEME_sCatPromotionsize'             => 'La promotion de catégorie sur la page de démarrage nécessite une taille spéciale pour les images de catégorie. Définissez la taille de ces images ici.',

    'SHOP_THEME_blFooterShowHelp'                   => 'Utiliser le lien d\'aide',
    'SHOP_THEME_blFooterShowLinks'                  => 'Use Links link',
    'SHOP_THEME_blFooterShowNewsletter'             => 'Utiliser le lien de la newsletter',
    'SHOP_THEME_blFooterShowNewsletterForm'         => 'Utiliser le formulaire de newsletter',
    'SHOP_THEME_blFooterShowNews'                   => 'Utiliser le lien des nouvelles',
    'SHOP_THEME_bl_showGiftWrapping'                => 'Utilisez un emballage cadeau', //SHOP_CONFIG_SHOWGIFTWRAPPING
    'SHOP_THEME_bl_showVouchers'                    => 'Utiliser des bons', //SHOP_CONFIG_SHOWVOUCHERS
    'SHOP_THEME_bl_showWishlist'                    => 'Utiliser le registre des cadeaux', //SHOP_CONFIG_SHOWWISHLIST
    'SHOP_THEME_bl_showCompareList'                 => 'Utiliser la liste de comparaison', //SHOP_CONFIG_SHOWCOMPARELIST
    'SHOP_THEME_bl_showListmania'                   => 'Utilisez Listmania', //SHOP_CONFIG_SHOWLISTMANIA
    'SHOP_THEME_blShowBirthdayFields'               => 'Afficher les champs de saisie pour la date de naissance lorsque les utilisateurs entrent leurs données personnelles', //SHOP_CONFIG_SHOWBIRTHDAYFIELDS

    'SHOP_THEME_iTopNaviCatCount'                   => 'Nombre de catégories affichées en haut', //SHOP_CONFIG_TOPNAVICATCOUNT
    'SHOP_THEME_blShowFinalStep'                    => 'Afficher la confirmation de commande après la commande est terminée (5ème étape dans la caisse)', //SHOP_SYSTEM_SHOWFINALSTEP
    'SHOP_THEME_iNewBasketItemMessage'              => 'Sélectionnez une action lorsque le produit est ajouté au panier', //SHOP_SYSTEM_SHOWNEWBASKETITEMMESSAGE
    'HELP_SHOP_THEME_iNewBasketItemMessage'         => 'Lorsque le client ajoute des produits au panier, OXID eShop peut se comporter différemment. Mettre en place ce qui doit arriver à donner une rétroaction appropriée au client.', //SHOP_SYSTEM_SHOWNEWBASKETITEMMESSAGE
    'SHOP_THEME_iNewBasketItemMessage_0'            => 'Aucun',
    'SHOP_THEME_iNewBasketItemMessage_1'            => 'Afficher le message',
    'SHOP_THEME_iNewBasketItemMessage_2'            => 'Ouvrir une fenêtre',
    'SHOP_THEME_iNewBasketItemMessage_3'            => 'Panier ouvert',

    'SHOP_THEME_blShowListDisplayType'              => 'Afficher le sélecteur de type de liste de produits',
    'HELP_SHOP_THEME_blShowListDisplayType'         => 'Décidez si le visiteur de votre magasin peut sélectionner le type de la liste de produits en magasin avant. Si cette option n\'est pas activée, vos visiteurs verront les listes affichées comme vous les avez ajustées dans la liste déroulante "Type de liste de produits par défaut".',
    'SHOP_THEME_sDefaultListDisplayType'            => 'Type de liste de produits par défaut',
    'SHOP_THEME_sDefaultListDisplayType_grid'       => 'la grille',
    'SHOP_THEME_sDefaultListDisplayType_line'       => 'Liste',
    'SHOP_THEME_sDefaultListDisplayType_infogrid'   => 'Double grille',
    'SHOP_THEME_sStartPageListDisplayType'          => 'Type de liste de produits sur la page de démarrage',
    'SHOP_THEME_sStartPageListDisplayType_grid'     => 'la grille',
    'SHOP_THEME_sStartPageListDisplayType_line'     => 'Liste',
    'SHOP_THEME_sStartPageListDisplayType_infogrid' => 'Double grille',

    'SHOP_THEME_aNrofCatArticlesInGrid'             => 'Affichage de la grille: Nombre de produits pouvant être affichés dans une liste de produits (pages de catégories, résultats de recherche)<br><br> Attention: Un grand nombre de produits par page (plus de 100) peut entraîner une perte de performance!',
    'SHOP_THEME_aNrofCatArticles'                   => 'Nombre de produits pouvant être affichés dans une liste de produits (pages de catégorie, résultats de recherche)<br><br> Attention: Un grand nombre de produits par page (plus de 100) peut entraîner une perte de performance!',

    'SHOP_THEME_sFacebookUrl'                       => 'Facebook Page-URL',
    'HELP_SHOP_THEME_sFacebookUrl'                  => 'E.X.: https://www.facebook.com/oxidesales',
    'SHOP_THEME_sTwitterUrl'                        => 'Twitter Profil-URL',
    'HELP_SHOP_THEME_sTwitterUrl'                   => 'E.x.: https://twitter.com/OXID_eSales',
    'SHOP_THEME_sBlogUrl'                           => 'Blog-URL',
    'HELP_SHOP_THEME_sBlogUrl'                      => 'E.g.: http://blog.oxid-esales.com',
    'SHOP_THEME_sYouTubeUrl'                        => 'URL de la chaîne YouTube',
    'HELP_SHOP_THEME_sYouTubeUrl'                   => 'E.x.: https://www.youtube.com/user/oxidesales',
    'SHOP_THEME_sGooglePlusUrl'                     => 'Google+ Page-URL',
    'HELP_SHOP_THEME_sGooglePlusUrl'                => 'E.X.: https://plus.google.com/114133952363540971062',

    'SHOP_THEME_sGoogleMapsAddr'                    => 'Votre adresse postale',
    'HELP_SHOP_THEME_sGoogleMapsAddr'               => 'E.X.: OXID eSales AG, Bertoldstraße 48, 79098 Freiburg',

    'SHOP_THEME_bl_showManufacturerSlider'          => 'Afficher le curseur du fabricant sur la page de démarrage',

    'SHOP_THEME_blUseGAPageTracker'                 => 'Utiliser la page Google Analyticités Traqueur',
    'SHOP_THEME_blUseGAEcommerceTracking'           => 'Utiliser le suivi du commerce électronique Google Analytics',
    'HELP_SHOP_THEME_blUseGAEcommerceTracking'      => 'Gardez à l\'esprit que cette option doit également être activée dans votre compte Google Analytics. Manuel: <a href="https://support.google.com/analytics/answer/1009612?hl=fr&ref_topic=1037061" target="_blank"> Lien </a>',
    'SHOP_THEME_sGATrackingId'                      => 'Google Analytics Tracking-ID',
    'HELP_SHOP_THEME_sGATrackingId'                 => 'E.X.: UA-XXXXXXXX-1',
    'SHOP_THEME_blGAAnonymizeIPs'                   => 'Anonymiser IP-Adresses',

    'SHOP_THEME_sLogoFile'                          => 'Nom de fichier du logo',
    'HELP_SHOP_THEME_sLogoFile'                     => 'Ceci est relatif au chemin
<code>/out/flow/img/</code>.',

    'SHOP_THEME_sLogoWidth'                         => 'Largeur du logo de l\'en-tête',
    'HELP_SHOP_THEME_sLogoWidth'                    => 'Spécifiez en tant que valeur de pixel.',
    'SHOP_THEME_sLogoHeight'                        => 'Hauteur du logo de l\'en-tête',
    'HELP_SHOP_THEME_sLogoHeight'                   => 'Spécifiez en tant que valeur de pixel.',

    'SHOP_THEME_sEmailLogo'                         => 'Nom du fichier du logo pour l\'en-tête de l\'email',
    'HELP_SHOP_THEME_sEmailLogo'                    => 'Ceci est relatif au chemin <code>/out/flow/img/</code>.',

    'SHOP_THEME_sFaviconFile'                       => 'Nom de fichier de la favicon',
    'HELP_SHOP_THEME_sFaviconFile'                  => 'Ce favicon est destiné à être affiché dans l\'onglet du navigateur. <br> En général, il s\'agit d\'un fichier ico.<br>Ceci est relatif au chemin <code>/out/flow/img/favicons/</code>.',
    'SHOP_THEME_sFavicon16File'                     => 'Nom de fichier du favicon avec 16*16px.',
    'SHOP_THEME_sFavicon32File'                     => 'Nom de fichier de la favicon avec 32*32px',
    'SHOP_THEME_sFavicon48File'                     => 'Nom de fichier de la favicon avec 48*48px',
    'SHOP_THEME_sFavicon64File'                     => 'Nom de fichier de la favicon avec 64*64px',
    'SHOP_THEME_sFavicon128File'                    => 'Nom de fichier du favicon avec 128*128px.',
    'SHOP_THEME_sFavicon512File'                    => 'Nom de fichier de la favicon avec 512*512px',
    'SHOP_THEME_sFaviconMSTileColor'                => 'Couleur des carreaux pour les signets Windows 8/ Windows Mobile.',
    'HELP_SHOP_THEME_sFaviconMSTileColor'           => 'Spécifié en tant que valeur hexadécimale.<br>E.X.: #D83434',

    'SHOP_THEME_blUseBackground'                    => 'Afficher l\'image de fond',
    'SHOP_THEME_sBackgroundColor'                   => 'Couleur de fond de la boutique',
    'HELP_SHOP_THEME_sBackgroundColor'              => 'Spécifié en tant que valeur hexadécimale. E.G .: # D83434',
    'SHOP_THEME_sBackgroundPath'                    => 'Nom de fichier de l\'arrière-plan-image',
    'HELP_SHOP_THEME_sBackgroundPath'               => 'C\'est relatif au chemin <code>/out/flow/img/backgrounds/</code>.',
    'SHOP_THEME_sBackgroundRepeat'                  => 'Répétez l\'image de fond?',
    'SHOP_THEME_sBackgroundRepeat_no-repeat'        => 'Non',
    'SHOP_THEME_sBackgroundRepeat_repeat-x'         => 'Oui, horizontal',
    'SHOP_THEME_sBackgroundRepeat_repeat-y'         => 'Oui, vertical',
    'SHOP_THEME_sBackgroundRepeat_repeat'           => 'Oui, horizontal et vertical',
    'SHOP_THEME_sBackgroundPosHorizontal'           => 'Position horizontale du fond-image',
    'SHOP_THEME_sBackgroundPosHorizontal_left'      => 'la gauche',
    'SHOP_THEME_sBackgroundPosHorizontal_right'     => 'la droite',
    'SHOP_THEME_sBackgroundPosHorizontal_center'    => 'centré',
    'SHOP_THEME_sBackgroundPosVertical'             => 'Position verticale de l\'image de fond',
    'SHOP_THEME_sBackgroundPosVertical_top'         => 'Haut',
    'SHOP_THEME_sBackgroundPosVertical_bottom'      => 'bas',
    'SHOP_THEME_sBackgroundPosVertical_center'      => 'centré',
    'SHOP_THEME_sBackgroundSize'                    => 'Taille de l\'image d\'arrière-plan',
    'SHOP_THEME_sBackgroundSize_cover'              => 'couverture (pleine hauteur)',
    'SHOP_THEME_sBackgroundSize_contain'            => 'couverture (pleine largeur)',
    'SHOP_THEME_sBackgroundSize_normal'             => 'Garder la taille d\'origine',
    'SHOP_THEME_blBackgroundAttachment'             => 'Corrige l\'arrière-plan pendant le défilement?',
    'SHOP_THEME_blHomeLink'                         => 'Afficher le lien "Accueil" dans a navigation principale?',
    'SHOP_THEME_bl_showPriceAlarm'                  => 'Utiliser le prix souhaité',

    'SHOP_THEME_blUseGoogleTS'                      => 'Utiliser les magasins de confiance Google',
    'SHOP_THEME_sGoogleVendorId'                    => 'Google Store-ID',
    'HELP_SHOP_THEME_sGoogleVendorId'               => 'Vous pouvez trouver cet ID dans votre tableau de bord Marchands de confiance.',
    'SHOP_THEME_sGoogleShoppingAccountId'           => 'Identifiant de compte Google Shopping (facultatif)',
    'HELP_SHOP_THEME_sGoogleShoppingAccountId'      => 'Fournissez ce champ uniquement si vous envoyez des flux pour Google Shopping. <br> <br> ID de compte Google Marchent Center. Cette valeur doit correspondre à l\'ID de compte que vous utilisez pour envoyer votre <a
href="https://support.google.com/merchants/answer/7052112?visit_id=1-636511883356082-2479292730&rd=1#US" target = "_ blank"> flux de données produit sur Google Shopping </a> via Google Merchant centre. Si vous avez un compte MCA, utilisez l\'ID de sous-compte associé à ce flux de produits.',
    'SHOP_THEME_sPageLanguage'                      => 'Langue de votre boutique en ISO',
    'HELP_SHOP_THEME_sPageLanguage'                 => 'Les paramètres régionaux doivent être au format <langue> _ <pays> <br> <langue> est un code de langue à deux lettres défini dans l\'ISO 639-1, et <pays> est un code de pays à deux lettres défini dans l\'ISO 3166-1 alpha-2. Généralement, <country> doit être en majuscules et <language> doit être en minuscules. E.X. en_US, en_GB, en_AU, fr_FR, de_DE ou ja_JP.',
    'SHOP_THEME_sShoppingCountry'                   => 'Pays Google Shopping-Feed (facultatif)',
    'HELP_SHOP_THEME_sShoppingCountry'              => 'Indiquez ce champ uniquement si vous envoyez des flux pour Google Shopping.<br><br>Pays du compte Google Shopping. Cette valeur doit correspondre au pays du compte que vous utilisez pour envoyer votre <a href="https://support.google.com/merchants/answer/188494#US" target="_blank">flux de données produit à Google Shopping</a >.<br><br>La valeur du paramètre country doit être <a href="http://en.wikipedia.org/wiki/ISO_3166-1_alpha-2" target="_blank"> ISO à deux lettres 3166 code de pays </a>.<br><br>Par exemple, les valeurs peuvent être US, GB, AU, FR, DE, JP.',
    'SHOP_THEME_sShoppingLanguage'                  => 'Google Shopping-Feed Sprache (facultatif)',
    'HELP_SHOP_THEME_sShoppingLanguage'             => 'Indiquez ce champ uniquement si vous envoyez des flux pour Google Shopping.<br><br>Langue du compte Google Shopping. Cette valeur doit correspondre à la langue du compte que vous utilisez pour envoyer votre <a href="https://support.google.com/merchants/answer/188494#US" target="_blank">flux de données produit à Google Shopping</a>.<br><br>La valeur du paramètre language devrait être <a href="http://en.wikipedia.org/wiki/ISO_639-1" target="_blank"> deux lettres ISO 639-1 code de langue</a>.<br><br>Par exemple, les valeurs peuvent être en, fr, de, ja.',
    'SHOP_THEME_sShippingDaysOnStock'               => 'Montant des jours jusqu\'à l\'expédition d\'une commande qui a tous les articles en stock.',
    'HELP_SHOP_THEME_sShippingDaysOnStock'          => 'La date estimée d\'expédition de la commande Ceci est différent de la date de livraison estimée.<br><br>Si la commande contient plusieurs articles, sélectionnez la dernière date d\'expédition estimée.<br><br>Si vous envoyez à vos clients une série de jours, veuillez inclure le plus tard. fin de la gamme. (E.X., 7 jours si votre plage d\'expédition est comprise entre 5 et 7 jours).<br><br>La date fournie ici sera fournie au client par courrier électronique.<br><br>Le client recevra une enquête après achat après la date d\'expédition estimée est passée.',
    'SHOP_THEME_sShippingDaysNotOnStock'            => 'Nombre de jours avant l\'expédition d\'une commande qui n\'a <b>pas</b> tous les articles en stock.',
    'HELP_SHOP_THEME_sShippingDaysNotOnStock'       => 'La date estimée d\'expédition de la commande Ceci est différent de la date de livraison estimée. <br><br>Si la commande contient plusieurs articles, sélectionnez la dernière date d\'expédition estimée. <br><br>Si vous envoyez à vos clients une série de jours, veuillez inclure le plus tard. fin de la gamme. (E.X., 7 jours si votre plage d\'expédition est comprise entre 5 et 7 jours).<br><br>La date fournie ici sera fournie au client par courrier électronique.<br><br>Le client recevra une enquête après achat après la date d\'expédition estimée est passée.',
    'SHOP_THEME_sDeliveryDaysOnStock'               => 'Montant des jours jusqu\'à la livraison d\'une commande qui a tous les articles en stock.',
    'HELP_SHOP_THEME_sDeliveryDaysOnStock'          => 'La date estimée à laquelle vous attendez la livraison de la commande au client. Si la commande contient plusieurs articles, sélectionnez la dernière date de livraison. Si vous signalez une plage de jours, veuillez inclure la fin de la plage. (E.X., 7 jours si votre plage est comprise entre 5 et 7 jours).',
    'SHOP_THEME_sDeliveryDaysNotOnStock'            => 'Nombre de jours jusqu\'à la livraison d\'une commande qui n\'a <b>pas</b> tous les articles en stock.',
    'HELP_SHOP_THEME_sDeliveryDaysNotOnStock'       => 'La date estimée à laquelle vous attendez la livraison de la commande au client. Si la commande contient plusieurs articles, sélectionnez la dernière date de livraison. Si vous signalez une plage de jours, veuillez inclure la fin de la plage. (E.X., 7 jours si votre plage est comprise entre 5 et 7 jours).',

    'SHOP_THEME_blSliderShowImageCaption'           => 'Activer les légendes pour le curseur sur la page d\'accueil',
    'HELP_SHOP_THEME_blSliderShowImageCaption'      => 'Une légende est visible lorsque la diapositive active est associée à un produit.',

    'SHOP_THEME_blEcondaRecommendationsStart'       => 'Afficher les recommandations sur la page d\'accueil',
    'SHOP_THEME_sEcondaWidgetIdStart'               => 'ID de widget de recommandation pour la page d\'accueil',
    'SHOP_THEME_blEcondaRecommendationsList'        => 'Afficher les recommandations dans les listes',
    'SHOP_THEME_sEcondaWidgetIdList'                => 'Recommandation-Widget-ID für Listenansicht',
    'SHOP_THEME_blEcondaRecommendationsDetails'     => 'Afficher les recommandations sur la page de détails',
    'SHOP_THEME_sEcondaWidgetIdDetails'             => 'Recommandation-Widget-ID pour Detailseite',
    'SHOP_THEME_blEcondaRecommendationsBasket'      => 'Afficher les recommandations dans le panier',
    'SHOP_THEME_sEcondaWidgetIdBasket'              => 'Recommandation-Widget-ID pour Warenkorb',

    'SHOP_THEME_blFullwidthLayout'                      => 'Activer complet avec la mise en page',

    'SHOP_THEME_blEmailsShowProductPictures'        => 'Afficher les photos des produits dans les e-mails',
);
