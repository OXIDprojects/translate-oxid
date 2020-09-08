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

'HELP_SHOP_SYSTEM_DISABLENAVBARS'             => 'Si cette fonction est activée, la plupart des éléments de navigation ne seront pas affichés pendant le passage de commande. Le but est ici de ne pas distraire inutilement l\'utilisateur.',

'HELP_SHOP_SYSTEM_DEFAULTIMAGEQUALITY'        => '' .
                                                 ''.
                                                 ''.
                                                 '',

'HELP_SHOP_SYSTEM_LDAP'                       => 'S.V.P. éditer le fichier core/oxldap.php.',

'HELP_SHOP_SYSTEM_SHOWVARIANTREVIEWS'         => 'Ce paramètre défini le mode de gestion des commentaires client avec les variantes produit: Si activé, les commentaires des variantes sont affichées également sur le produit principal.',

'HELP_SHOP_SYSTEM_VARIANTSSELECTION'          => 'Dans OXID eShop vous pouvez assigner des produits à de nombreuses listes, ex: promotions. Lorsque ce paramètre est activé, les variantes sont affichées dans ces listes également.',

'HELP_SHOP_SYSTEM_VARIANTPARENTBUYABLE'       => '' .
                                                 '' .
                                                 '',

'HELP_SHOP_SYSTEM_VARIANTINHERITAMOUNTPRICE'  => 'Ici, vous pouvez définir si les échelles de prix sont héritées du produit parent: Si activé, les échelles de prix sont disponibles pour les variantes du produit.',

'HELP_SHOP_SYSTEM_ISERVERTIMESHIFT'           => 'Le serveur hébergeant la solution peut utiliser un fuseau horaire différent. Ce paramètre vous permet de définir un décalage horaire: Saisissez le nombre d\'heures à ajouter/retrancher de l\'heure du serveur. ex: <kdb>+2</kdb> ou <kdb>-2</kdb>',

'HELP_SHOP_SYSTEM_INLINEIMGEMAIL'             => 'Lorsque ce paramètre est activé, les images sont envoyées dans l\'email. Lorsque désactivé, les images sont téléchargées par le client de messagerie à l\'ouverture du message.',

'HELP_SHOP_SYSTEM_UTILMODULE'                 => 'Veuillez renseigner votre fichier PHP ici. Il remplacera les fonctions eShop lancées au démarrage.',


'HELP_SHOP_CACHE_ENABLED'                     => 'Lorsque la gestion de cache dynamique est activée, des contenus additionnels sont mis en cache pour augmenter les performances. Désactivez ce paramètre pendant le paramétrage de la solution (Création de modules/ templates...).',

'HELP_SHOP_CACHE_LIFETIME'                    => 'Saisissez ici le temps de mise en cache (en secondes) des contenus avant leur mise à jour. La valeur par défaut est 36000 secondes.',

'HELP_SHOP_CACHE_CLASSES'                     => 'Vous pouvez définir ici quelles classes de vues sont mises en cache.<br> Ne changez ces paramètres que si vous êtes familier avec les mecanismes de mise en cache!',

'HELP_SHOP_CACHE_REVERSE_PROXY_ENABLED'       => 'Active la mise en cache http d\'un Proxy inversé. Noter: qu\'il ne faut pas utiliser de mise en cache du contenu dynamique en même temps, car elle pourrait dégrader les performances.',

'HELP_SHOP_CACHE_LAYOUT_CACHE_AGE'            => 'Fixe la durée de vie de la page en secondes. Cette valeur sera transmise dans les entêtes http qui spécifieront la valeur "Age".',

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

'HELP_SHOP_CONFIG_NEWARTBYINSERT'             => 'Sur la page d\'accueil de la boutique, les derniers produits proposés à la vente sont affichés dans <span class="filename_filepath_or_italic">Derniers arrivages</span>.  Ce paramètre permet de choisir comment les nouveaux produits sont définis : par date de rcéation our par date de dernière modification.',

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

'HELP_SHOP_CONFIG_DELETERATINGLOGS'           => 'Si un utilisateur note un  produit, il ne peut plus le noter une seconde fois. Vous pouvez définir ici un délai entre deux notations produit pour un utilisateur. Laisser vide pour désactiver - Une seule notation produit par utilisateur sera alors possible.',

'HELP_SHOP_CONFIG_DISABLEONLINEVATIDCHECK'    => ''.
                                                 '',

'HELP_SHOP_CONFIG_ALTVATIDCHECKINTERFACEWSDL' => 'Vous pouvez renseigner ici une URL alternative pour la validation des numéros de TVA.',

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

'HELP_SHOP_CONFIG_BASKETRESERVATIONTIMEOUT'   => 'Après ce délai, les produits réservés retournent dans le stock et le panier du client est vidé.',

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

'HELP_SHOP_CONFIG_SHOWTSINTERNATIONALFEESMESSAGE' => 'Au cours de la 4ème étape du processus de validation la page "oxtsinternationalfees" est en outre affichée.',

'HELP_SHOP_CONFIG_SHOWTSCODMESSAGE'           => 'Dans la 4ème étape du processus de vérification la page "oxtscodmessage" est en outre affichée.',

'HELP_SHOP_CONFIG_DOWNLOADS'                  => 'Boutique avec produits téléchargeables. Activez ici le fait que les produits peuvent être commandés et téléchargés.',

'HELP_SHOP_CONFIG_DOWNLOADS_PATH'             => 'Chemin vers le répertoire de stockage des fichiers des produits téléchargeables',

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

'HELP_SHOP_MALL_PRICEADDITION'                => 'Vous pouvez définir une surcharge des prix sur l\'ensemble des produits de cette boutique: Saisissez la valeur de cette surcharge et sélectionnez son type (<span class="userinput_or_code">%</span>) ou bien (<span class="userinput_or_code">abs</span>).',



'HELP_SHOP_PERF_NEWESTARTICLES'               => '' .
                                                 '' .
                                                 '' .
                                                 '',

'HELP_SHOP_PERF_TOPSELLER'                    => '' .
                                                 '' .
                                                 '' .
                                                 '',

'HELP_SHOP_PERF_LOADFULLTREE'                 => 'Lorsque ce paramètre est coché, l\'arbre complet des catégories est affiché dans la navigation par catégorie (Toutes les catégories sont déployées). Cela ne fonctionne que si la navigation par catégories n\'est pas affichée en haut.',

'HELP_SHOP_PERF_LOADACTION'                   => 'Lorsque ce paramètre est coché, les promotions comme <span class="filename_filepath_or_italic">Derniers arrivages!</span> et/ou <span class="filename_filepath_or_italic">Best sellers</span> sont chargées et affichées.',

'HELP_SHOP_PERF_USESELECTLISTPRICE'           => 'Les surcharges/remises peuvent être activés. Si ce paramètre est activé, les surcharges/ remises sont chargées et activées. Sinon, elles ne le seront pas.',

'HELP_SHOP_PERF_DISBASKETSAVING'              => 'Le panier des utilisateurs est sauvegardé. Lorsqu\'ils reviennent sur la boutique, le contenu de leur panier est chargé. Si vous activé ce paramètre, les paniers ne seront plus enregistrés.',

'HELP_SHOP_PERF_LOADDELIVERY'                 => 'Si vous désactivez ce paramètre, aucun frais de port ne sera calculé: Les frais de port seront tous fixés à 0.00 €.',

'HELP_SHOP_PERF_LOADPRICE'                    => 'Si vous désactivez ce paramètre, aucun prix de produit ne sera calculé: Aucun prix ne sera alors affiché.',

'HELP_SHOP_PERF_PARSELONGDESCINSMARTY'        => 'Si ce paramètre est activé, les descriptions des produits et les catégories seront parsées via Smarty: Vous pourrez utiliser les tags Smarty (ex: pour utiliser des variables) <br>',

'HELP_SHOP_PERF_LOADSELECTLISTSINALIST'       => 'Normalement, les listes de séléctions ne sont achargés que dans la fiche produit. Si ce paramètre est activé, les listes de séléctions seront également affichées dans les listes produits (Ex: Résultats de recherche, catégories).',

'HELP_SHOP_PERF_CHECKIFTPLCOMPILE'            => 'Si ce paramètre est activé, Votre boutique eShop vérifiera à chaque appel si un temaplate a été modifié. Si tel est le cas, le rendu est recalculé. Pour des raisons de performance, n\'activez ce paramètre uniquement lorsque vous effectuez des modifiactions sur les templates.',

'HELP_SHOP_PERF_CLEARCACHEONLOGOUT'           => 'En temps normal, le cache est vidé à chaque sauvegarde de modifications dans le back-office. Ceci peut générer des problèmes de performance dans le back-office. Si ce paramètre est activé, le cache ne sera vidé que lorsque vous vous déconnecterez du back-office.',





'HELP_SHOP_SEO_TITLEPREFIX'                   => '' .
                                                 '',

'HELP_SHOP_SEO_TITLESUFFIX'                   => '' .
                                                 '',

'HELP_SHOP_SEO_IDSSEPARATOR'                  => '' .
                                                 '',

'HELP_SHOP_SEO_SAFESEOPREF'                   => 'Si plusieurs produits ont le même nom et se trouvent dans une même catégorie, ils devraient avoir la même URL SEO. Afin d\'éviter cela, le Suffixe SEO est rajouté. Si aucun suffixe SEO n\'est défini, <span class="filename_filepath_or_italic">oxid</span> sera utilisé.',

'HELP_SHOP_SEO_RESERVEDWORDS'                 => 'Quelques URLs sont réservées dans OXID eShop, comme www.youreshop.com/admin pour accéder au back-office. Si une catégorie est nommée <span class="filename_filepath_or_italic">admin</span> son URL SEO devrait logiquement être www.youreshop.com/admin également - dans ce cas, la catégorie ne pourraît être accessible. Voici donc la raison d\'être du suffixe SEO, qui est rajouté à ces URLs. Vous pouvez définir ici quelles URLs seront automatiquement suffixées.',

'HELP_SHOP_SEO_SKIPTAGS'                      => 'Si aucun META tags n\'est défini pour un produit ou une catégorie, les META tags sont créés automatiquement. De cette façon, certains termes non souhaités pourraient être définis. Tous les mots saisi ici  seront automatiquement exclus de la génération des META Tags.',
'HELP_SHOP_SEO_LOWERCASEURLS'                 => '',

'HELP_SHOP_SEO_STATICURLS'                    => 'Pour les pages spéciales (ex: conditions générales) vous pouvez définir des URLs SEO fixes. Lorsque vous séléctionnez une URL statique, son URL normale est affichée dans <span class="navipath_or_inputname">URL Standard</span>. Dans le champ de saisie situé en dessous, vous pouvez défiir une URL SEO pour chaque langue.',



'HELP_SHOP_MAIN_PRODUCTIVE'                   => '' .
                                                 '' .
                                                 '',

'HELP_SHOP_MAIN_ACTIVE'                       => 'Avec <span class="navipath_or_inputname">Actif</span> vous pouvez activer/désactiver complètement la boutique. Si la boutique est désactivée, un message informant que la boutique est en maintenance est affiché à vos visiteurs.',

'HELP_SHOP_MAIN_INFOEMAIL'                    => 'Tous les e-mails envoyés par le biais du formulaire de contact sont envoyés à cette adresse e-mail.',

'HELP_SHOP_MAIN_ORDEREMAIL'                   => 'Lorsque les utilisateurs reçoivent un e-mail avec un résumé de leur commande, les réponses à cet e-mail sont envoyés à <span class="navipath_or_inputname">Réponse mail de commande</span>.',

'HELP_SHOP_MAIN_OWNEREMAIL'                   => 'Lorsque les utilisateurs reçoivent un e-mail avec un résumé de leur commande. Ces e-mails sont envoyés par <span class="navipath_or_inputname">Expéditeur mail commande</span>.',

'HELP_SHOP_MAIN_SMTPSERVER'                   => 'Les paramètres SMTP sont nécessaires à l\'envoi des e-mails (ex: envoi d\'un e-mail de confirmation de commande).',

'HELP_ARTICLE_MAIN_ALDPRICE'                  => 'Grâce à <span class="navipath_or_inputname">Prix Alt.</span> vous pouvez définir des prix spéciaux enfonction de groupes d\'utilisateurs.',

'HELP_ARTICLE_MAIN_VAT'                       => 'Vous pouvez définir ici un taux de TVA spécifique pour ce produit. Ce taux de TVA sera prix en compte dans tous les calculs relatifs à ce produit (panier, commande, facture)',

'HELP_ARTICLE_EXTEND_UNITQUANTITY'            => 'Grâce à <span class="navipath_or_inputname">Quantité</span> et <span class="navipath_or_inputname">Unité</span> vous pouvez afficher le prix par unité de mesure (ex: 1,43€/ Litre). Dans <span class="navipath_or_inputname">Quantité</span>, sélectionné la quantité de produit (ex: <span class="userinput_or_code">1,5</span>), dans <span class="navipath_or_inputname">Unité</span> l\'unité de mesure correspondante. (ex: <span class="userinput_or_code">litre</span>). Le prix par unité sera alors calculé et affiché sur la fiche produit.',

'HELP_ARTICLE_EXTEND_EXTURL'                  => 'Dans <span class="navipath_or_inputname">URL Externe</span> vous pouvez renseigner un lien vers des informations complémentaires (ex: Vers le site de la marque). Dans <span class="navipath_or_inputname">Texte de l\'URL externe</span> saisissez le texte qui sera affiché pour le lien (ex: <span class="userinput_or_code">Plus d\'information sur le site de la marque</span>.',

'HELP_ARTICLE_EXTEND_TPRICE'                  => 'Dans <span class="navipath_or_inputname">PPR</span> saisissez le Prix Public Recommandé par le fabricant. Si cette donnée est renseignée, elle sera affichée (prix barré) à vos utilisateurs, au-dessus du prix de vente.',

'HELP_ARTICLE_EXTEND_QUESTIONEMAIL'           => 'Dans <span class="navipath_or_inputname">Alt. Contact</span> vous saisirez une adresse e-mail. Lorsque des utilisateurs demanderons des renseignements sur ce produit, ces demandes seront envoyées à cette adresse. Si aucun e-mail n\'est renseigné, la demande sera routée à l\'adresse e-mail de contact par défaut.',

'HELP_ARTICLE_EXTEND_NONMATERIAL'             => 'Le paramètre est hérité du produit parent aux variantes et s\'applique sur l\'ensemble du produit.',

'HELP_ARTICLE_EXTEND_FREESHIPPING'            => 'Le paramètre est hérité du produit parent aux variantes et s\'applique sur l\'ensemble du produit.',

'HELP_ARTICLE_EXTEND_BLFIXEDPRICE'            => 'L\'alerte de prix peut être désactivé sur ce produit.',

'HELP_ARTICLE_EXTEND_SKIPDISCOUNTS'           => 'Si <span class="navipath_or_inputname">Ne pas appliquer de rabais</span> est actif, aucun rabais ne sera calculé pour ce produit. Ceci inclus les promotions et les bons de réduction.',

'HELP_ARTICLE_EXTEND_TEMPLATE'                => 'La fiche produit peut être affichée avec différents templates. Pour se faire, saisissez le nom du template à utiliser.',

'HELP_ARTICLE_EXTEND_ISCONFIGURABLE'          => ''.
                                                 '',

'HELP_ARTICLE_EXTEND_UPDATEPRICE'             => 'Les prix peuvent être modifiés sur une période définie. ces prix modifiés se substitueront aux prix standard. Si vous laissez les valeurs à "0", les prix ne seront pas modifiés.',

'HELP_ARTICLE_EXTEND_SHOWCUSTOMAGREEMENT'     => 'Si cette option est activé, les usagers doivent confirmer qu\'ils acceptent les termes et conditions dans la quatrieme étape du processus d\'achat pour cette article spécialement. Veuillz vous assurer s\'il vous plait que votre produit est intangible ou/a defaut téléchargeable ainsi que l\'option général est activé.',

'HELP_ARTICLE_FILES_MAX_DOWNLOADS_COUNT'      => 'Vous pouvez définir ici combien de fois un client peut télécharger un fichier après sa commande. Des paramètres spécifique à un produit particulier peuvent être définis et se substitueront à la configuration par défaut : Configuration générale -> Paramètres système -> Paramètres -> Téléchargement des produits.',

'HELP_ARTICLE_FILES_LINK_EXPIRATION_TIME_UNREGISTERED' => 'Vous pouvez définir ici combien de fois un client peut utiliser un lien de téléchargement, lors d\'une commande dans compte client. Des paramètres spécifique à un produit particulier peuvent être définis et se substitueront à la configuration par défaut : Configuration générale -> Paramètres système -> Paramètres -> Téléchargement des produits.',

'HELP_ARTICLE_FILES_LINK_EXPIRATION_TIME'     => 'Spécifiez la durée en heures, pendant laquelle le lien de téléchargement sera valide après le premier téléchargement. Les paramètres par défaut (Configuration générale -> Paramètres système -> Paramètres -> Téléchargement pour tous les produits) peuvent être modifiés pour un fichier particulier.',

'HELP_ARTICLE_FILES_NEW'                      => 'Saisissez un nom de fichier transféré par FTP ou envoyez un nouveau fichier ici. Notez que les fichiers lourds doivent être envoyés par FTP. La limite de taille de fichier n\'est appliquée que lors d\'un envoi via l\'admin. Cette limitation dépend des paramètres PHP du serveur et ne peut être modifiée que à cet endroit.',

'HELP_ARTICLE_FILES_DOWNLOAD_EXPIRATION_TIME' => 'Spécifiez la durée en heures, pendant laquelle le lien de téléchargement sera valide après le premier téléchargement. Les paramètres par défaut (Configuration générale -> Paramètres système -> Paramètres -> Téléchargement pour tous les produits) peuvent être modifiés pour un fichier particulier.',

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

'HELP_ARTICLE_STOCK_REMINDACTIV'              => 'Avec <span class="navipath_or_inputname">Envoyer un E-mail si le stock tombe sous un seuil de</span> vous pouvez demander qu\'un e-mail soit envoyé lorsque le stock atteint un seuil fixé. Pour activer cette fonction, cochez la case et définissez le niveau d\'alerte.',

'HELP_ARTICLE_STOCK_STOCKFLAG'                => '' .
                                                 '' .
                                                 '' .
                                                 '' .
                                                 '',

'HELP_ARTICLE_IS_DOWNLOADABLE'                => 'Les fichiers de ce produit peuvent être téléchargés',

'HELP_ARTICLE_STOCK_REMINDAMAOUNT'            => 'Avec <span class="navipath_or_inputname">Envoyer un e-mail si le niveau de stock est inférieur à la valeur</span> vous pouvez définir qu\'un e-mail sera envoyer lorsque le stock atteindra le seuil fixé. Activez ce paramètre puis renseignez le seuil de stock pour la notification.',

'HELP_ARTICLE_STOCK_DELIVERY'                 => 'Vous pouvez définir ici la date à partir de laquelle le produit sera à nouveau disponible (date de réapprovisonnement). Le format est jour-mois-année, ex: 12-02-2010.',

'HELP_ARTICLE_SEO_FIXED'                      => 'Vous pouvez laissez OXID eShop recalculer les URLs SEO. Une page produit recevra une nouvelle URL SEO si par exemple le titre du produit à changé. Le paramètre <span class="navipath_or_inputname">URL Fixe</span> vous permet d\'éviter ce cas de figure : Si activé, l\'ancienne URL SEO est conservée et aucune nouvelle URL n\'est calculée.',

'HELP_ARTICLE_SEO_KEYWORDS'                   => 'Ces mots clé sont intégrés dans le code source HTML des pages produit (META keywords). Ces informations sont utilisées par les moteurs de recherche. Des mots clés adaptés pour le produit peuvent être saisis ici. Si aucun mot clé n\'est renseigné, les mots clé seront automatiquement générés.',

'HELP_ARTICLE_SEO_DESCRIPTION'                => 'Cette description est intégrée dans le code source HTML des pages produit (META description). Ce texte est souvent affiché dans les pages de résultats des moteurs de recherche. Une description adaptée pour le produit peut être saisie ici. Si aucun texte n\'est renseigné, une description sera automatiquement générée.',

'HELP_ARTICLE_SEO_ACTCAT'                     => 'Vous pouvez définir plusieurs URLs SEO pour les produits: Pour certaines pages catégories et marque. Avec <span class="navipath_or_inputname">Catégorie/ Vendeur active</span> vous pouvez sélectionner l\'URL SEO que vous souhaitez modifier.',

'HELP_ARTICLE_STOCK_STOCKTEXT'                => 'Saisissez ici un message qui sera affiché si le produit est "En stock".',

'HELP_ARTICLE_STOCK_NOSTOCKTEXT'              => 'Saisissez ici un message qui sera affiché si le produit est "En rupture de stock".',

'HELP_ARTICLE_STOCK_AMOUNTPRICE_AMOUNTFROM'   => 'Dans <span class="navipath_or_inputname">Quantité de/ à</span> vous pourrez définir pour quelles quantités le prix gradué est valide.<br>',

'HELP_ARTICLE_STOCK_AMOUNTPRICE_PRICE'        => '' .
                                                 '',

'HELP_ARTICLE_VARIANT_VARNAME'                => '<span class="navipath_or_inputname">Nom de la sélection</span> permet de nommer une sélection de variantes. Ex: <span class="userinput_or_code">Couleur</span> ou <span class="userinput_or_code">Taille</span>.<br>',

'HELP_ATTRIBUTE_MAIN_DISPLAYINBASKET'         => 'Si coché, cette caractéristique sera affichée dans le panier et dans l\'aperçu de la commande au dessous du libellé du produit.',

'HELP_CATEGORY_MAIN_HIDDEN'                   => 'Avec <span class="navipath_or_inputname">Masquée</span> Définissez si cette catégorie est affichée ou non aux utilisateurs de la boutique.',

'HELP_CATEGORY_MAIN_PARENTID'                 => '' .
                                                 '' .
                                                 '',

'HELP_CATEGORY_MAIN_EXTLINK'                  => 'Avec <span class="navipath_or_inputname">Lien externe</span>, vous pouvez renseigner un lien qui s\'ouvrira lorsque l\'utilisateur cliquera sur la catégorie. <span class="warning_or_important_hint">Utilisez cette fonction seulement si vous souhaitez afficher un lien dans le menu catégories!</span>',

'HELP_CATEGORY_MAIN_PRICEFROMTILL'            => 'Avec <span class="navipath_or_inputname">Prix à partir de/ à</span> vous pouvez définir que <span class="warning_or_important_hint">tous</span> les produits compris dans cette fourchette de prix seront affichés dans cette catégorie.',

'HELP_CATEGORY_MAIN_DEFSORT'                  => 'Avec <span class="navipath_or_inputname">Tri rapide</span> vous permet de définir l\'ordre d\'affichage des produits dans la catégorie.',

'HELP_CATEGORY_MAIN_SORT'                     => 'Vous pouvez utiliser <span class="navipath_or_inputname">Tri</span> to define the order dans which categories are displayed: The category with the lowest number is displayed at the top, and the category with the highest number at the bottom.',

'HELP_CATEGORY_MAIN_THUMB'                    => 'Avec <span class="navipath_or_inputname">Image</span> et <span class="navipath_or_inputname">Envoyer image</span> vous pourrez transférer un visuel pour cette catégorie. Le visuel sera affiché en haut de page lorsque la catégorie sera consultée. Après la sauvegarde, via le bouton <span class="navipath_or_inputname">Enregistrer</span>, l\'image est générée et son nom s\'affiche dans <span class="navipath_or_inputname">Image</span>.',

'HELP_CATEGORY_MAIN_PROMOTION_ICON'           => 'Avec <span class="navipath_or_inputname">Icône pour les promotions</span> et <span class="navipath_or_inputname">Envoyer icône</span> vous pourrez transférer un visuel de catégorie promotionnel (mise en avant) pour la page d\'accueil. Pour mettre en avant une catégorie, rendez-vous dans <span class="navipath_or_inputname">Information client -> Meilleures offres de la catégorie/span>',

'HELP_CATEGORY_MAIN_SKIPDISCOUNTS'            => '<li>Si <span class="navipath_or_inputname">Ne pas appliquer les remises</span> est actif, aucune remise/ promotion ne sera calculée/appliquée sur les produits de la catégorie.',



'HELP_CATEGORY_SEO_FIXED'                     => 'Vous pouvez laissez OXID eShop recalculer les URLs SEO. Une page catégorie recevra une nouvelle URL SEO si par exemple le titre de la catégorie à changé. Le paramètre <span class="navipath_or_inputname">URL Fixe</span> vous permet d\'éviter ce cas de figure : Si activé, l\'ancienne URL SEO est conservée et aucune nouvelle URL n\'est calculée.',

'HELP_CATEGORY_SEO_KEYWORDS'                  => 'Ces mots clé sont intégrés dans le code source HTML des pages catégorie (META keywords). Si aucun mot clé n\'est renseigné, ils seront automatiquement générés.',

'HELP_CATEGORY_SEO_DESCRIPTION'               => 'Cette description est intégrée dans le code source HTML des pages catégorie (META description). Ce texte est souvent affiché dans les pages de résultats des moteurs de recherche. Une description adaptée pour la catégorie peut être saisi ici. Si aucun texte n\'est renseigné, une description sera automatiquement générée.',

'HELP_CATEGORY_SEO_SHOWSUFFIX'                => 'Ce paramètre vous permet de définir si le suffixe du titre est affiché dans le titre de la fenêtre quand la page catégorie est affichée. Le suffixe Titre est défini dans <span class="navipath_or_inputname">Configuration générale -> Système -> SEO -> Suffixe titre</span>.',
'HELP_CONTENT_MAIN_SNIPPET'                   => 'Si vous sélectionnez <span class="navipath_or_inputname">Snippet</span> Vous pouvez inclure cette page CMS dans une autre page CMS ou un template en utilisant don identifiant : <span class="userinput_or_code">[{ oxcontent ident=id_de_la_page_CMS }]</span>',

'HELP_CONTENT_MAIN_MAINMENU'                  => 'Si vous sélectionnez <span class="navipath_or_inputname">Menu</span>, un lien vers cette page CMS apparaîtra dans le menu Information (Conditions générales, Qui sommes-nous...).',

'HELP_CONTENT_MAIN_CATEGORY'                  => 'Si vous sélectionnez <span class="navipath_or_inputname">Categorie</span>, un lien vers cette page CMS est afficher dans la navigation par catégories, après "autres catégories".',

'HELP_CONTENT_MAIN_MANUAL'                    => 'Si vous sélectionnez <span class="navipath_or_inputname">Manuellement</span>, un lien est généré qui vous pourrez utiliser dans d\'autres pages CMS. Le lien s\'affichera après avoir cliqué sur <span class="navipath_or_inputname">Enregistrer</span>',
'HELP_CONTENT_SEO_FIXED'                      => 'Vous pouvez laissez OXID eShop recalculer les URLs SEO. Une page CMS recevra une nouvelle URL SEO si par exemple le titre de la page à changé. Le paramètre <span class="navipath_or_inputname">URL Fixe</span> vous permet d\'éviter ce cas de figure : Si activé, l\'ancienne URL SEO est conservée et aucune nouvelle URL n\'est calculée.',

'HELP_CONTENT_SEO_KEYWORDS'                   => 'Ces mots clé sont intégrés dans le code source HTML des pages CMS (META keywords). Si aucun mot clé n\'est renseigné, ils seront automatiquement générés.',

'HELP_CONTENT_SEO_DESCRIPTION'                => 'Cette description est intégrée dans le code source HTML des pages CMS (META description). Ce texte est souvent affiché dans les pages de résultats des moteurs de recherche. Une description adaptée pour le contenu de la page peut être saisi ici. Si aucun texte n\'est renseigné, une description sera automatiquement générée.',



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

'HELP_DELIVERY_MAIN_ORDER'                    => 'Vous pouvez utiliser <span class="navipath_or_inputname">Ordre de traitement des règles</span> pour spécifer l\'ordre dans lequel les règle de coûts de transport seront traitées. La règle avec le plus petit nombre sera traitée en premier.',

'HELP_DELIVERY_MAIN_FINALIZE'                 => 'Vous pouvez utiliser <span class="navipath_or_inputname">Ne pas chercher d\'autres règles si celle-ci est applicable</span>. Si vous utilisez cette option, attention de bien définir l\'ordre de traitement des règles de coûts de transport. L\'ordre de traitement des règles se définit dans <span class="navipath_or_inputname">Ordre de traitement des règles</span>.',



'HELP_DELIVERYSET_MAIN_POS'                   => '<span class="navipath_or_inputname">Ordre</span> défini l\'ordre dans lequel les moyens de livraison sont affichés à l\'utilisateur: Affichage par ordre croissant.',



'HELP_DISCOUNT_MAIN_SORT'                     => '',

'HELP_DISCOUNT_MAIN_PRICE'                    => 'Le paramètre <span class="navipath_or_inputname">Prix</span> vous permet de définir des promotion en fonction du prix des produits. Si la promotion doit s\'appliquer sans contrainte de prix de vente de produits, saisissez la valeur <span class="userinput_or_code">0</span> dans <span class="navipath_or_inputname">De</span> et <span class="userinput_or_code">0</span> dans <span class="navipath_or_inputname">à</span>.',

'HELP_DISCOUNT_MAIN_AMOUNT'                   => 'Le paramètre <span class="navipath_or_inputname">Quantité</span>  vous permet de définir la quantité de produits minimale pour que la réduction s\'applique. Si vous ne souhaitez pas fixer de quantité minimale, saisissez la valeur <span class="userinput_or_code">0</span> dans <span class="navipath_or_inputname">De</span> et <span class="userinput_or_code">0</span> dans <span class="navipath_or_inputname">à</span>.',

'HELP_DISCOUNT_MAIN_REBATE'                   => '' .
                                                 '' .
                                                 '' .
                                                 '' .
                                                 ''.
                                                 '',



'HELP_GENERAL_SEO_ACTCAT'                     => 'Vous pouvez définir plusieurs URL SEO pour vos produits: Pour certaines pages catégories ou marques/fabricants. Avec <span class="navipath_or_inputname">Categorie/Distributeur Active</span> vous pouvez sélectionner l\'URL SEO que vous souhaitez modifier.',

'HELP_GENERAL_SEO_FIXED'                      => 'OXID eShop calcule automatiquement les URL SEO. Par exemple, si un produit change de titre, une nouvelle URL SEO est calculée. Une valeur saisie dans <span class="navipath_or_inputname">URL Fixe</span> empêche le recalcul des URL.',

'HELP_GENERAL_SEO_SHOWSUFFIX'                 => 'Ce paramètre vous permet de spécifier sir le suffixe Titre est affiché dans le titre de la fenêtre à l\'ouverture de la page. Le suffixe Titre peut être défini dans <span class="navipath_or_inputname">Configuration générale -> Système -> SEO -> Suffixe Titre</span>.',

'HELP_GENERAL_SEO_OXKEYWORDS'                 => 'Les mots clés sont intégrés dans le code source de la page (META keywords). Ces données sont utilisées par les moteurs de recherche. Des mots clé adaptés peuvent être saisis ici. Si ce paramètre n\'est pas renseigné, des mots clés seront générés automatiquement.',

'HELP_GENERAL_SEO_OXDESCRIPTION'              => 'La description est intégrée dans le code source de la page (META description). Ce texte est souvent affiché dans les pages de résultats des moteurs de recherche. Une description adaptée peut être saisie ici. Si ce paramètre n\'est pas renseigné, une description sera générée automatiquement.',



'HELP_GENIMPORT_FIRSTCOLHEADER'               => 'Activez ce paramètre si la première ligne de votre fichier CSV contient les noms des champs de BDD dans lesquels les valeurs de la colonne doivent être enregistrés.',

'HELP_GENIMPORT_REPEATIMPORT'                 => 'Lorsque ce paramètre eest activé, l\'étape 1 est affiché lorsque l\'import a été réalisé avec succès. Ainsi, vous pouvez lancer un nouvel import immédiatement.',

'HELP_LANGUAGE_DEFAULT'                       => 'La langue par défaut est utilisée lorsque le système n\'est pas capable de détecter la langue d\'un utilisateur: ID de langue non présent dans l\'URL, Langue non présente dans le navigateur, non définie dans la session etc. La langue par défaut ne peut être que désativée, aucunement supprimée.',

'HELP_LANGUAGE_ACTIVE'                        => "Cette option permet de définir les langues accessibles à vos utilisateurs sur la boutique: si activé - la langue est affichée sur la boutique.",

'HELP_PAYMENT_MAIN_SORT'                      => 'Le paramètre <span class="navipath_or_inputname">Position</span> vous permet de spécifier l\'ordre d\'affichage des moyens de paiement à vos utilisateurs.',

'HELP_PAYMENT_MAIN_FROMBONI'                  => 'Utilisez le paramètre <span class="navipath_or_inputname">Niveau de confiance min.</span> pour restreindre l\'accès à vos moyens de paiement aux clients de confiance. Un niveau de confiance peut être défini pour chaque client dans <span class="navipath_or_inputname">Gesttion des clients -> Clients -> Etendu</span>.',

'HELP_PAYMENT_MAIN_SELECTED'                  => 'Utilisez le paramètre <span class="navipath_or_inputname">Selectionné</span> pour définir un moyen de paiement par défaut.',

'HELP_PAYMENT_MAIN_AMOUNT'                    => '' .
                                                 '',

'HELP_PAYMENT_MAIN_ADDPRICE'                  => '' .
                                                 '' .
                                                 '',

'HELP_PAYMENT_MAIN_ADDSUMRULES'               => 'Lors du calcul de frais ou remises, la valeur du panier est utilisée comme base. Définissez quels coûts  doivent être inclus dans le calcul de la valeur du panier.',

'HELP_SELECTLIST_MAIN_TITLEIDENT'             => 'Dans <span class="navipath_or_inputname">Titre interne</span>, vous pouvez définir un autre nom qui ne sera pas affiché à vos clients sur la boutique. Les titres personnalisés sont utilisés pour différencier des listes de sélection similaires (ex: Taille pour pantalons, taille pour Tee Shirts).',

'HELP_SELECTLIST_MAIN_FIELDS'                 => 'Toutes les options/variantes disponibles sont affichées dans la liste des <span class="navipath_or_inputname">Champs</span>. Vous pouvez définir de nouvelles options dans la partie droite. Pour plus d\' informations :<a href="http://www.oxid-esales.com/en/resources/help-faq/eshop-manual/implementing-simple-variants-selection-lists" target="_blank">Manuel OXID eShop</a>.',

'HELP_USER_MAIN_HASPASSWORD'                  => '' .
                                                 '' .
                                                 '',

'HELP_USER_PAYMENT_METHODS'                   => ''.
                                                 ''.
                                                 '',

'HELP_USER_EXTEND_NEWSLETTER'                 => 'Ce paramètre indique si l\'utilisateur est abonné à la newsletter.',

'HELP_USER_EXTEND_EMAILFAILED'                => 'Si vous ne parvenez pas à envoyer des eMails à cet utilisateur, activez ce paramètre. Aisin, les newsletters ne seront plus envoyées à cet utilisateurs. Cepandant, tous les autres eMails seront toujours envoyés.',

'HELP_USER_EXTEND_BONI'                       => 'Definissez ici un niveau de confiance à votre client. Le niveau de confiance est utilisé pour les moyens de paiements autorisés pour les clients.',



'HELP_MANUFACTURER_MAIN_ICON'                 => 'Avec <span class="navipath_or_inputname">Icône</span> et <span class="navipath_or_inputname">Envi Icône</span> vous pouvez définir une image pour ce fabricant/ cette marque(ex: Son logo). Cliquez sur <span class="navipath_or_inputname">Envoi Icône</span>, selectionnez l\'image que vous souhaitez envoyer. En cliquant sur <span class="navipath_or_inputname">Enregister</span> L\'image est envoyée sur le serveur. Après l\'envoi, le nom du fichier est affiché dans <span class="navipath_or_inputname">Icône</span>..',



'HELP_MANUFACTURER_SEO_FIXED'                 => 'Vous pouvez laisser le système recalculer les URL SEO. Un fabricant / une marque reçoit une nouvelle URL par exemple dans le cas d\'un changement de nom. Le paramètre <span class="navipath_or_inputname">URL Fixe</span> permet d\'empêcher cela: Si ce paramêtre est activé, les URL ne seront pas recalculées.',

'HELP_MANUFACTURER_SEO_KEYWORDS'              => 'Les mots clés sont intégrés dans le code source de la page Marques/ Fabricants (META keywords). Ces données sont utilisées par les moteurs de recherche. Des mots clé adaptés peuvent être saisis ici. Si ce paramètre n\'est pas renseigné, des mots clés seront générés automatiquement.',

'HELP_MANUFACTURER_SEO_DESCRIPTION'           => 'La description est intégrée dans le code source de la page Marques/ Fabricants (META description). Ce texte est souvent affiché dans les pages de résultats des moteurs de recherche. Une description adaptée peut être saisie ici. Si ce paramètre n\'est pas renseigné, une description sera générée automatiquement.',

'HELP_MANUFACTURER_SEO_SHOWSUFFIX'            => 'Ici, vous pouvez spécifier le suffixe du titre qui sera afficher dans le titre de votre navigateur lorsque la page Marques/fabricants est ouverte. Ce suffixe de titre peut être défini dans <span class="navipath_or_inputname">Configuration générale -> Paramètres système -> SEO -> Title Suffix</span>.',

'HELP_VOUCHERSERIE_MAIN_DISCOUNT'             => '' .
                                                 '' .
                                                 '' .
                                                 '' .
                                                 '',



'HELP_VOUCHERSERIE_MAIN_ALLOWSAMESERIES'      => 'Vous pouvez définir ici si les clients peuvent utiliser plusieurs bons de réduction d\'une même série dans une même commande.',

'HELP_VOUCHERSERIE_MAIN_ALLOWOTHERSERIES'     => 'Vous pouvez définir ici si les clients peuvent utiliser des bons de réduction des séries différentes dans une même commande.',

'HELP_VOUCHERSERIE_MAIN_SAMESEROTHERORDER'    => 'Vous pouvez définir ici si les clients peuvent utiliser des bons de réduction d\'une même série dans différentes commandes.',

'HELP_VOUCHERSERIE_MAIN_RANDOMNUM'            => 'Lorsque ce paramètre est activé, un numéro aléatoire est attribué à chaque bon de réduction.',

'HELP_VOUCHERSERIE_MAIN_VOUCHERNUM'           => 'Ici vous pouvez saisir un numéro pour les codes de réduction. Ce noméro est utilisé lors de la génération de nouveaux codes de réduction si <span class="navipath_or_inputname">Numéros aléatoires</span> est désactivé. Tous les coupons porterons le même numéro.',

'HELP_VOUCHERSERIE_MAIN_CALCULATEONCE'        => 'Si vous affectez des produits ou des catégories à un coupon, désactivez cette option pour calculer le coupon pour chaque produit dans le panier. Activez cette option si votre coupon ne doit être valable qu\'une seule fois par commande.',

'HELP_WRAPPING_MAIN_PICTURE'                  => 'Avec <span class="navipath_or_inputname">Image</span> et <span class="navipath_or_inputname">Envoyer image</span> Vous pouvez envoyer une image pour les emaballages cadeau. Dans <span class="navipath_or_inputname">Envoyer image</span>, Choisissez l\'image à envoyer. En cliquent sur <span class="navipath_or_inputname">Enregistrer</span>, L\'image est envoyée sur le serveur. Après l\'envoi, le nom du fichier est affiché dans <span class="navipath_or_inputname">Image</span>.',

'HELP_PROMOTIONS_BANNER_PICTUREANDLINK'       => 'Envoyer une image bannière et saisissez une adresse URL qui sera affecté à l\'image lors d\'un clic. Si la bannière est associée à un article et qu\'aucune URL n\'est définie, l\'adresse de l\'article sera utilisée.',
'HELP_SHOP_PERF_SEO_CACHE'                    => 'Activer le cache SEO augmente les performances, mais nécessite beaucoup d\'espace disque dans le répertoire /tmp.',

'HELP_ALTERNATIVE_IMAGE_SERVER_NOTE'          => 'Il est possible de spécifier une url alternative d\'un serveur d\'images distant dans le fichier de configuration config.inc.php avec les paramètres <i>sAltImageUrl</i> et <i>sSSLAltImageUrl</i>.<br>Ainsi, toutes les photos de produits seront chargés depuis ce serveur alternatif plutôt que depuis le serveur local. Cependant, les fichiers uploadés sont stockés en local. Dans ce cas, une synchronisation avec le serveur externe doit être mis en place manuellement ou avec un script personnalisé.',

'HELP_SHOP_RDFA_CONTENT_OFFERER'              => 'Sélectionnez ici, dans quelle page de contenu est affichée l\'information principale de l\'eShop, par exemple "A propos de nous".',
'HELP_SHOP_RDFA_CONTENT_PAYMENT'              => 'Sélectionnez ici, dans quelle page de contenu les informations de livraison non assignées au RDFa sont affichées, par exemple "Coûts de livraison". Pour assigner les méthodes de livraison aux méthodes de paiement RDFa en général, rendez-vous sur la page : Paramètres de la boutique -> Méthodes de livraison -> RDFa',
'HELP_SHOP_RDFA_CONTENT_DELIVERY'             => 'Sélectionnez ici, dans quelle page de contenu les informations de livraison non assignées au RDFa sont affichées, par exemple "Coûts de livraison". Pour assigner les méthodes de livraison aux méthodes de paiement RDFa en général, rendez-vous sur la page : Paramètres de la boutique -> Méthodes de livraison -> RDFa',
'HELP_SHOP_RDFA_VAT'                          => 'Cette option spécifie si la taxe (TVA) est incluse dans le prix et les coûts de paiement/livraison ou non.',
'HELP_SHOP_RDFA_DURATION_PRICES'              => 'Renseignez ici la durée de validité des coûts des produits, paiements et livraison (par exemple 1 jour, 1 semaine).',
'HELP_SHOP_RDFA_LOGO_URL'                     => 'L\'adresse web (url) d\'un logo ou une image.',
'HELP_SHOP_RDFA_GEO_LONGITUDE'                => 'La longitude du magasin pour la position géographique. Merci de ne saisir que des nombres.',
'HELP_SHOP_RDFA_GEO_LATITUDE'                 => 'La latitude du magasin pour la position géographique. Merci de ne saisir que des nombres.',
'HELP_SHOP_RDFA_GLN'                          => 'Le code lieu-fonction (ou GLN) de l\'entreprise. Le code lieu-fonction est un nombre à 13 chiffres utilisé pour identifier des emplacements physiques.',
'HELP_SHOP_RDFA_NAICS'                        => 'Le système de classification des industries d\'Amérique du nord (NAICS) attribue un code à votre société. Voir: http://www.census.gov/eos/www/naics/.',
'HELP_SHOP_RDFA_ISIC'                         => 'La standard international de classification des industries de toutes les branches d\'activités économiques (ISIC) attribut un code à votre entreprise. Voir http://unstats.un.org/unsd/cr/registry/isic-4.asp.',
'HELP_SHOP_RDFA_DUNS'                         => 'Le D-U-N-S de Dun & Bradstreet est un nombre de neuf chiffres utilisé pour identifier des entités légales.',
'HELP_SHOP_RDFA_SHOW_PRODUCTSTOCK'            => 'Si cette option est activée cela signifie que le stock réel du produit est affiché.',
'HELP_SHOP_RDFA_RATING_MIN'                   => 'Valeur minimum possible par rapport à l\'échelle utilisée pour les notations dans votre boutique. Cette valeur n\'est pas la plus haute note actuelle d\'un produit.',
'HELP_SHOP_RDFA_RATING_MAX'                   => 'Valeur maximum possible par rapport à l\'échelle utilisée pour les notations dans votre boutique. Cette valeur n\'est pas la plus haute note actuelle d\'un produit.',
'HELP_SHOP_RDFA_COND'                         => 'Sélectionnez ici, quel terme décrit l\'état du produit (neuf, usagé ou reconditionné).',
'HELP_SHOP_RDFA_FNC'                          => 'Sélectionnez ici la nature commerciale des produits. Par exemple, sont-ils proposés à la vente, à la location ou à la réparation?',
'HELP_SHOP_RDFA_COSTUMER'                     => 'Les types de client pour lesquels les produits de la boutique sont valides (utilisateur final, revendeur, professionnel et/ou public)',
'HELP_SHOP_RDFA_DURATION_OFFERINGS'           => 'Cette propriété spécifie la durée de validité des produits, par exemple 1 jour, 1 semaine ou 1 mois.',
'HELP_SHOP_PERF_SYSREQ_CHECK'                 => '',
'HELP_SHOP_CONFIG_ADDITIONAL_SERVICE_VAT_CALCULATION_BIGGEST_NET'  => 'Le taux de TVA des produits représentant le montant le plus élevé du panier, est utilisé pour le calcul.',
'HELP_SHOP_CONFIG_ADDITIONAL_SERVICE_VAT_CALCULATION_PROPORTIONAL' => 'Le pourcentage de produits du panier avec le même taux de TVA est utilisé pour le calcul.',
'HELP_SHOP_CONFIG_VIEWNETPRICE'               => 'Dans le frontend le prix des produits est affiché en prix nets.',
'HELP_SHOP_CONFIG_ENTERNETPRICE'              => 'Dans la partie administrative, les prix des produits doivent être saisis en prix nets.',

'HELP_REVERSE_PROXY_GET_FRONTEND'             => 'Vérifie la disponibilité du Proxy inversé pour le frontend. L\'entête de la page de démarrage de la boutique est vérifiée.',
'HELP_REVERSE_PROXY_GET_BACKEND'              => 'La zone d\'administration s\'affiche sans Proxy inversé. Les entêtes de fichiers ne pourraient être reçu.',

'HELP_SHOP_CONFIG_DEBIT_OLD_BANK_INFORMATION_NOT_ALLOWED' => 'Seuls IBAN et BIC peuvent être entrés pendant la vérification. Le numéro de compte bancaire et le code banque ne peuvent être saisis si cette case à cocher n\'est pas activée.',
'HELP_SHOP_CONFIG_ENABLE_INTANGIBLE_PRODUCTS_AGREEMENT'   => 'Si cette option est activé, les usagers doivent confirmer qu\'ils acceptent les termes et conditions pour tous les produits intangibles et/ou téléchargeables dans la quatrieme étape du processus d\'achat. Veuillez vous assurer s\'il vous plait que l\'option est bien coché pour cette article spécifique.',

'HELP_SHOP_CONFIG_FIELDS_CONTACTFORM'         => '',
];
