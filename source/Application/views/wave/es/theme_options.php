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

$sLangName  = 'English';

$aLang = array(
    'charset'                                       => '',

    'SHOP_THEME_GROUP_images'                       => 'Imagenes',
    'SHOP_THEME_GROUP_features'                     => 'Caracteristicas',
    'SHOP_THEME_GROUP_display'                      => 'Mostrar',
    'SHOP_THEME_GROUP_logo'                         => '',
    'SHOP_THEME_GROUP_favicons'                     => 'Favicons, (iconos de favoritos)',
    'SHOP_THEME_GROUP_footer'                       => 'Pie de página',
    'SHOP_THEME_GROUP_header'                       => 'Encabezamiento',
    'SHOP_THEME_GROUP_contact'                      => 'Contactar',
    'SHOP_THEME_GROUP_googleanalytics'              => '',
    'SHOP_THEME_GROUP_googlets'                     => 'Google Trusted Stores',
    'SHOP_THEME_GROUP_background'                   => '',
    'SHOP_THEME_GROUP_econda'                       => 'Control de tienda web econda',
    'SHOP_THEME_GROUP_emails'                       => 'E-mail',

    'SHOP_THEME_sIconsize'                          => '', //SHOP_CONFIG_ICONSIZE
    'HELP_SHOP_THEME_sIconsize'                     => '' .
                                                       '' .
                                                       '' .
                                                       '',

    'SHOP_THEME_sThumbnailsize'                     => '', //SHOP_CONFIG_THUMBNAILSIZE
    'HELP_SHOP_THEME_sThumbnailsize'                => '' .
                                                       '' .
                                                       '' .
                                                       '',

    'SHOP_THEME_sZoomImageSize'                     => '', //SHOP_CONFIG_ZOOMIMAGESIZE
    'SHOP_THEME_sCatThumbnailsize'                  => '', //SHOP_CONFIG_CATEGORYTHUMBNAILSIZE
    'HELP_SHOP_THEME_sCatThumbnailsize'             => 'En la vista de categoría, la imagen de la categoría seleccionada se muestra con el tamaño definido.', //SHOP_CONFIG_CATEGORYTHUMBNAILSIZE
    'SHOP_THEME_aDetailImageSizes'                  => 'Tamaño de la imagen del producto (ancho * alto)', //SHOP_CONFIG_DETAILIMAGESIZE

    'SHOP_THEME_sManufacturerIconsize'              => '', // Check if this is really manufacturer or if it is more like "brand"
    'HELP_SHOP_THEME_sManufacturerIconsize'         => 'El logotipo del fabricante / marca se muestra en la página de inicio en el control deslizante del fabricante.',

    'SHOP_THEME_sCatIconsize'                       => '',
    'HELP_SHOP_THEME_sCatIconsize'                  => 'En la vista de categoría, las imágenes de categoría que se muestran en las subcategorías, se muestran con el tamaño definido.',

    'SHOP_THEME_sCatPromotionsize'                  => 'Tamaño de la imagen en categoría para promoción, en la página de inicio (ancho*alto)',
    'HELP_SHOP_THEME_sCatPromotionsize'             => 'Las categorías que se anuncian en la página de inicio requieren un tamaño especial para las imágenes. Defina el tamaño de esas imágenes aquí.',

    'SHOP_THEME_blFooterShowHelp'                   => 'Use el enlace de ayuda',
    'SHOP_THEME_blFooterShowLinks'                  => 'Usar enlaces de conexión',
    'SHOP_THEME_blFooterShowNewsletter'             => 'Use el enlace del boletín',
    'SHOP_THEME_blFooterShowNewsletterForm'         => 'Use el formulario de boletín informativo',
    'SHOP_THEME_blFooterShowNews'                   => 'Usar enlace de noticias',
    'SHOP_THEME_bl_showGiftWrapping'                => 'Use envoltura de regalos', //SHOP_CONFIG_SHOWGIFTWRAPPING
    'SHOP_THEME_bl_showVouchers'                    => 'Usa comprobantes', //SHOP_CONFIG_SHOWVOUCHERS
    'SHOP_THEME_bl_showWishlist'                    => 'Usar registro de regalos', //SHOP_CONFIG_SHOWWISHLIST
    'SHOP_THEME_bl_showCompareList'                 => '', //SHOP_CONFIG_SHOWCOMPARELIST
    'SHOP_THEME_bl_showListmania'                   => 'Use listmania', //SHOP_CONFIG_SHOWLISTMANIA
    'SHOP_THEME_blShowBirthdayFields'               => '', //SHOP_CONFIG_SHOWBIRTHDAYFIELDS

    'SHOP_THEME_iTopNaviCatCount'                   => 'Cantidad de categorías que se muestra en la parte superior', //SHOP_CONFIG_TOPNAVICATCOUNT
    'SHOP_THEME_blShowFinalStep'                    => 'Mostrar la confirmación del pedido una vez finalizado el pedido (5º paso en el proceso de pago)', //SHOP_SYSTEM_SHOWFINALSTEP
    'SHOP_THEME_iNewBasketItemMessage'              => 'Selecciona una acción cuando el producto se añada al carro de compras', //SHOP_SYSTEM_SHOWNEWBASKETITEMMESSAGE
    'HELP_SHOP_THEME_iNewBasketItemMessage'         => '', //SHOP_SYSTEM_SHOWNEWBASKETITEMMESSAGE
    'SHOP_THEME_iNewBasketItemMessage_0'            => 'Ninguna',
    'SHOP_THEME_iNewBasketItemMessage_1'            => 'Mostrar mensaje',
    'SHOP_THEME_iNewBasketItemMessage_2'            => '',
    'SHOP_THEME_iNewBasketItemMessage_3'            => 'Cesta de compra abierta',

    'SHOP_THEME_blShowListDisplayType'              => 'Mostrar el selector de tipo de lista de productos',
    'HELP_SHOP_THEME_blShowListDisplayType'         => 'Decide si el visitante de su tienda puede seleccionar el tipo de la lista de productos que tú ofreces. Si esta opción no está activada, sus visitantes verán las listas mostradas como usted ajustó en el cuadro desplegable "Tipo de lista de productos predeterminado".',
    'SHOP_THEME_sDefaultListDisplayType'            => 'Tipo de lista de productos predeterminado',
    'SHOP_THEME_sDefaultListDisplayType_grid'       => 'Parrilla',
    'SHOP_THEME_sDefaultListDisplayType_line'       => '',
    'SHOP_THEME_sDefaultListDisplayType_infogrid'   => 'Doble grid',
    'SHOP_THEME_sStartPageListDisplayType'          => '',
    'SHOP_THEME_sStartPageListDisplayType_grid'     => 'Parrilla',
    'SHOP_THEME_sStartPageListDisplayType_line'     => '',
    'SHOP_THEME_sStartPageListDisplayType_infogrid' => 'Parrilla doble',

    'SHOP_THEME_aNrofCatArticlesInGrid'             => 'Para la galería: cantidad de productos que se pueden mostrar en las listas de producto (páginas de categoría, resultados de búsqueda) <br> <br> Atención: ¡Una gran cantidad de productos por página (más de 100) puede causar pérdida de rendimiento!',
    'SHOP_THEME_aNrofCatArticles'                   => '',

    'SHOP_THEME_sFacebookUrl'                       => '',
    'HELP_SHOP_THEME_sFacebookUrl'                  => 'P.ej.:  https://www.facebook.com/oxidesales',
    'SHOP_THEME_sTwitterUrl'                        => '',
    'HELP_SHOP_THEME_sTwitterUrl'                   => 'P.ej.:  https://twitter.com/OXID_eSales',
    'SHOP_THEME_sBlogUrl'                           => 'Blog URL',
    'HELP_SHOP_THEME_sBlogUrl'                      => 'P.ej.:  http://blog.oxid-esales.com',
    'SHOP_THEME_sYouTubeUrl'                        => '',
    'HELP_SHOP_THEME_sYouTubeUrl'                   => 'P.ej.: https://www.youtube.com/user/oxidesales',
    'SHOP_THEME_sGooglePlusUrl'                     => '',
    'HELP_SHOP_THEME_sGooglePlusUrl'                => 'P.ej.:  https://plus.google.com/114133952363540971062',

    'SHOP_THEME_sGoogleMapsAddr'                    => '',
    'HELP_SHOP_THEME_sGoogleMapsAddr'               => 'P.ej.: OXID eSales AG, Calle Bertold 48, 79098 Freiburg',

    'SHOP_THEME_bl_showManufacturerSlider'          => 'Mostrar el control deslizante del fabricante en la página de inicio',

    'SHOP_THEME_blUseGAPageTracker'                 => 'Utilice el rastreador de páginas de Google Analytics',
    'SHOP_THEME_blUseGAEcommerceTracking'           => 'Utilice el seguimiento de comercio electrónico de Google Analytics',
    'HELP_SHOP_THEME_blUseGAEcommerceTracking'      => 'Tenga en cuenta que esta opción también debe habilitarse en su cuenta de Google Analytics. Manual:
<a href="https://support.google.com/analytics/answer/1009612?hl=en&ref_topic=1037061" target="_blank">Link</a>',
    'SHOP_THEME_sGATrackingId'                      => '',
    'HELP_SHOP_THEME_sGATrackingId'                 => 'P.ej.:  UA-XXXXXXXX-1',
    'SHOP_THEME_blGAAnonymizeIPs'                   => 'Anonimizar direcciones IP',

    'SHOP_THEME_sLogoFile'                          => '',
    'HELP_SHOP_THEME_sLogoFile'                     => 'Esto esta relacionado con la dirección <code>/out/flow/img/</code>.',

    'SHOP_THEME_sLogoWidth'                         => '',
    'HELP_SHOP_THEME_sLogoWidth'                    => '',
    'SHOP_THEME_sLogoHeight'                        => '',
    'HELP_SHOP_THEME_sLogoHeight'                   => 'Especifique como un valor de píxel.',

    'SHOP_THEME_sEmailLogo'                         => 'El nombre del archivo del logotipo para el encabezado del correo electrónico',
    'HELP_SHOP_THEME_sEmailLogo'                    => 'Esto es relativo a la ruta <code>/out/flow/img/</code>.',

    'SHOP_THEME_sFaviconFile'                       => 'Nombre de archivo del icono de página',
    'HELP_SHOP_THEME_sFaviconFile'                  => 'Este favicon del inglés favorites icon (icono de favoritos), está destinado a mostrarse en la pestaña del navegador. <br>En general, este es un archivo ico.<br>Esto es relativo a la ruta <code>/out/flow/img/favicons/</code>.',
    'SHOP_THEME_sFavicon16File'                     => '',
    'SHOP_THEME_sFavicon32File'                     => 'Nombre de archivo del favicon(icono de página) con 32*32px',
    'SHOP_THEME_sFavicon48File'                     => '',
    'SHOP_THEME_sFavicon64File'                     => '',
    'SHOP_THEME_sFavicon128File'                    => 'Nombre de archivo del favicon(icono de página) con 128*128px.',
    'SHOP_THEME_sFavicon512File'                    => 'Nombre de archivo del favicon(icono de página) con 512*512px',
    'SHOP_THEME_sFaviconMSTileColor'                => '',
    'HELP_SHOP_THEME_sFaviconMSTileColor'           => 'Especificado como un valor hexadecimal.<br>E.g.: #D83434',

    'SHOP_THEME_blUseBackground'                    => 'Mostrar imagen de fondo',
    'SHOP_THEME_sBackgroundColor'                   => 'Color de fondo de la tienda',
    'HELP_SHOP_THEME_sBackgroundColor'              => 'Especificado como un valor hexadecimal.<br>Ej.: #D83434',
    'SHOP_THEME_sBackgroundPath'                    => '',
    'HELP_SHOP_THEME_sBackgroundPath'               => 'Es en relación con la trayectoria <code>/out/flow/img/backgrounds/</code>.',
    'SHOP_THEME_sBackgroundRepeat'                  => 'Repetir imagen de fondo?',
    'SHOP_THEME_sBackgroundRepeat_no-repeat'        => 'Nó',
    'SHOP_THEME_sBackgroundRepeat_repeat-x'         => 'Sí, horizontal',
    'SHOP_THEME_sBackgroundRepeat_repeat-y'         => '',
    'SHOP_THEME_sBackgroundRepeat_repeat'           => '',
    'SHOP_THEME_sBackgroundPosHorizontal'           => 'Posición horizontal de la imagen de fondo',
    'SHOP_THEME_sBackgroundPosHorizontal_left'      => 'Izquierda',
    'SHOP_THEME_sBackgroundPosHorizontal_right'     => '',
    'SHOP_THEME_sBackgroundPosHorizontal_center'    => 'centrada',
    'SHOP_THEME_sBackgroundPosVertical'             => 'Posición vertical de la imagen de fondo',
    'SHOP_THEME_sBackgroundPosVertical_top'         => '',
    'SHOP_THEME_sBackgroundPosVertical_bottom'      => 'fondo',
    'SHOP_THEME_sBackgroundPosVertical_center'      => 'centrado',
    'SHOP_THEME_sBackgroundSize'                    => 'Tamaño de imagen de fondo',
    'SHOP_THEME_sBackgroundSize_cover'              => 'cubrir (altura completa)',
    'SHOP_THEME_sBackgroundSize_contain'            => '',
    'SHOP_THEME_sBackgroundSize_normal'             => '',
    'SHOP_THEME_blBackgroundAttachment'             => '¿Debería permanecer la imagen de fondo al desplazarse?',
    'SHOP_THEME_blHomeLink'                         => '',
    'SHOP_THEME_bl_showPriceAlarm'                  => '',

    'SHOP_THEME_blUseGoogleTS'                      => 'Use Google Trusted Stores',
    'SHOP_THEME_sGoogleVendorId'                    => '',
    'HELP_SHOP_THEME_sGoogleVendorId'               => 'Puede encontrar esta ID en tú Tablero de comerciantes de Tiendas de confianza.',
    'SHOP_THEME_sGoogleShoppingAccountId'           => '',
    'HELP_SHOP_THEME_sGoogleShoppingAccountId'      => 'Proporcione este campo solo si envía feeds para Google Shopping. <br><br>En el ID de la cuenta de Google Merchant Center. Este valor debe coincidir con el ID de la cuenta que utiliza para enviar su <a href="https://support.google.com/merchants/answer/188494#US" target="_blank"> feed de datos del producto a Google Shopping </ a > a través del centro de comerciantes de Google. Si tiene una cuenta MCA, use la ID de subcuenta asociada con ese feed de productos.',
    'SHOP_THEME_sPageLanguage'                      => '',
    'HELP_SHOP_THEME_sPageLanguage'                 => 'La configuración regional debe estar en el formato de <language>_<country><br><br><Language> es un código de idioma de dos letras definido en ISO 639-1, y <country> es un código de país de dos letras definido en ISO 3166-1 alfa-2. Por lo general, <country> debe estar en mayúscula y <language> en minúscula. p.ej. en_US, en_GB, en_AU, fr_FR, de_DE o ja_JP.',
    'SHOP_THEME_sShoppingCountry'                   => '',
    'HELP_SHOP_THEME_sShoppingCountry'              => 'Proporcione este campo solo si envía datos a Google Shopping. <br><br>País de la cuenta de Google Shopping. Este valor debe coincidir con el país de la cuenta que utiliza para enviar su <a href="https://support.google.com/merchants/answer/188494#US" target="_blank"> información de los datos del producto a Google Shopping </a>. <br><br>El valor del parámetro del país debe ser un <a href="http://en.wikipedia.org/wiki/ISO_3166-1_alpha-2" target="_blank"> ISO de dos letras 3166 código de país </a>.<br> <br> Por ejemplo, los valores pueden ser US, GB, AU, FR, DE, JP.',
    'SHOP_THEME_sShoppingLanguage'                  => '',
    'HELP_SHOP_THEME_sShoppingLanguage'             => '',
    'SHOP_THEME_sShippingDaysOnStock'               => '',
    'HELP_SHOP_THEME_sShippingDaysOnStock'          => '',
    'SHOP_THEME_sShippingDaysNotOnStock'            => '',
    'HELP_SHOP_THEME_sShippingDaysNotOnStock'       => 'La fecha estimada en la que enviará el pedido; esto es diferente de la fecha estimada de entrega.<br><br> Si el pedido contiene varios artículos, seleccione la última fecha estimada de envío. <br><br>Si envía un mensaje a sus clientes un rango de días, incluya el último Fin de la gama. (p. ej., 7 días si su rango de envío es de 5 a 7 días).<br> <br> La fecha proporcionada aquí se le proporcionará al cliente por correo electrónico.<br><br> El cliente recibirá una encuesta posterior a la compra después de la fecha estimada de envío ha pasado.',
    'SHOP_THEME_sDeliveryDaysOnStock'               => '',
    'HELP_SHOP_THEME_sDeliveryDaysOnStock'          => 'La fecha estimada en la espera de la entrega del pedido al cliente. Si el pedido contiene varios artículos, seleccione la última fecha de entrega. Si envía un mensaje con un rango de días, incluya el final del rango posterior. (por ejemplo, 7 días si su rango es de 5-7 días).',
    'SHOP_THEME_sDeliveryDaysNotOnStock'            => 'Cantidad de días hasta la entrega de un pedido que <b>no</b> tienes todos los artículos en venta.',
    'HELP_SHOP_THEME_sDeliveryDaysNotOnStock'       => 'La fecha estimada en la que espera la entrega del pedido al cliente. Si el pedido contiene varios artículos, seleccione la última fecha de entrega. Si envía un mensaje con un rango de días, incluya el final del rango posterior. (por ejemplo, 7 días si su rango es de 5-7 días).',

    'SHOP_THEME_blSliderShowImageCaption'           => 'Activar subtítulos para el control deslizante en la página de inicio',
    'HELP_SHOP_THEME_blSliderShowImageCaption'      => 'Esto se muestra tan pronto como se asigna un producto a un portaobjetos.',

    'SHOP_THEME_blEcondaRecommendationsStart'       => 'Mostrar recomendaciones en la página de inicio',
    'SHOP_THEME_sEcondaWidgetIdStart'               => '',
    'SHOP_THEME_blEcondaRecommendationsList'        => 'Mostrar recomendaciones en listados',
    'SHOP_THEME_sEcondaWidgetIdList'                => 'Recomendación-Herramienta-ID para Vista de la lista',
    'SHOP_THEME_blEcondaRecommendationsDetails'     => 'Mostrar recomendaciones en la página de detalles',
    'SHOP_THEME_sEcondaWidgetIdDetails'             => '',
    'SHOP_THEME_blEcondaRecommendationsBasket'      => 'Mostrar recomendaciones en la cesta de compra',
    'SHOP_THEME_sEcondaWidgetIdBasket'              => 'Recomendación-Complemento-ID para la cesta de compra',

    'SHOP_THEME_blFullwidthLayout'                      => 'Activar completo con diseño',

    'SHOP_THEME_blEmailsShowProductPictures'        => 'Mostrar imágenes de productos en correos electrónicos',
);
