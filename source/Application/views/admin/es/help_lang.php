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

'HELP_SHOP_SYSTEM_DISABLENAVBARS'             => 'Si la opción está marcada, la mayoría de los elementos de navegación no se mostrarán durante el proceso de pago. De esta forma el usuario no se distraerá innecesariamente.',

'HELP_SHOP_SYSTEM_DEFAULTIMAGEQUALITY'        => '' .
                                                 ''.
                                                 ''.
                                                 '',

'HELP_SHOP_SYSTEM_LDAP'                       => 'Por favor, edite el archivo core/oxldap.php.',

'HELP_SHOP_SYSTEM_SHOWVARIANTREVIEWS'         => 'Esta opción se refieren al comportamiento de los comentarios: Si la opción está marcada, las observaciones son mostradas también el el elemento padre.',

'HELP_SHOP_SYSTEM_VARIANTSSELECTION'          => 'En eShop hay muchas listas para la asignación de productos, ej. asignación de productos a los descuentos. Si la opción está marcada, las observaciones también se muestran en estas listas.',

'HELP_SHOP_SYSTEM_VARIANTPARENTBUYABLE'       => '' .
                                                 '' .
                                                 '',

'HELP_SHOP_SYSTEM_VARIANTINHERITAMOUNTPRICE'  => 'Aquí se puede establecer si los precios de las escalas se heredan de los padres del producto: Si la configuración está activada, la escala de precios del producto primario se utilizan también para sus variantes.',

'HELP_SHOP_SYSTEM_ISERVERTIMESHIFT'           => 'El servidor de la tienda electrónica puede estar en una zona horaria diferente. Con este ajuste, el cambio de hora se puede ajustar: Anota la cantidad de horas que se van a sumar o restar a partir de la hora del servidor, ejemplo: <kdb>+2</kdb> o <kdb>-2</kdb>',

'HELP_SHOP_SYSTEM_INLINEIMGEMAIL'             => 'Si la configuración está activada, las imágenes en los correos electrónicos se envían junto con el correo electrónico. Si el ajuste no está seleccionada, las imágenes se descargan por el programa de email cuando el correo electrónico se abre',

'HELP_SHOP_SYSTEM_UTILMODULE'                 => 'Por favor, introduzca su archivo PHP personalizado aquí, que sobrescribirá las funciones eShop al inicio de la tienda.',


'HELP_SHOP_CACHE_ENABLED'                     => 'Si el almacenamiento en caché de contenido dinámico está activo, los contenidos adicionales se almacenan en caché para aumentar el rendimiento. Desactive esta opción siempre que modifique la tienda (añadiendo/modificando módulos, adaptando plantillas y otros casos similares)',

'HELP_SHOP_CACHE_LIFETIME'                    => 'Aquí puede ajustar los segundos que se guarda el contenido almacenado en caché. El valor predeterminado es 36.000 segundos.',

'HELP_SHOP_CACHE_CLASSES'                     => 'Aquí se ajusta la vista de las clases que se almacenan en caché. <br> Sólo cambia esta opción si estás familiarizado con los mecanismos de almacenamiento en caché!',

'HELP_SHOP_CACHE_REVERSE_PROXY_ENABLED'       => 'Activa un cacheo HTTP con proxy inverso. Nota: No use "Cacheo de Contenido Dinámico" al mismo tiempo, podría reducir el rendimiento.',

'HELP_SHOP_CACHE_LAYOUT_CACHE_AGE'            => 'Defina tiempo de vida de la disposición de la página en segundos. Esto será enviado en las cabeceras HTTP, especificando el valor de cabecera "Age".',

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

'HELP_SHOP_CONFIG_NEWARTBYINSERT'             => 'En la primera página de su tienda electrónica los productos más recientes se muestran en la <span class=filename_filepath_or_italic> llegado! </ Span>. Este ajuste determina cómo se calculan los productos más nuevos: por fecha de creación o por fecha del último cambio en el admin / última orden.',

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

'HELP_SHOP_CONFIG_DELETERATINGLOGS'           => 'Si la tasa de usuarios de un producto que no se puede calificar el producto de nuevo. Aquí se puede establecer el número de usuarios después de muchos días se les permitirá calificar un producto nuevo. Dejar en blanco para desactivar - los productos pueden ser valorados una sola vez por usuario.',

'HELP_SHOP_CONFIG_DISABLEONLINEVATIDCHECK'    => ''.
                                                 '',

'HELP_SHOP_CONFIG_ALTVATIDCHECKINTERFACEWSDL' => 'Aquí puede introducir una dirección URL alternativa para la comprobación de identificación en línea IVA.',

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

'HELP_SHOP_CONFIG_BASKETRESERVATIONTIMEOUT'   => 'Después de este tiempo de espera de los productos reservados se devuelven al stock y se borra del carro del cliente.',

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

'HELP_SHOP_CONFIG_SHOWTSINTERNATIONALFEESMESSAGE' => 'En el 4º paso del proceso de realización del pedido, la página "oxtsinternationalfees" se mostrará adicionalmente.',

'HELP_SHOP_CONFIG_SHOWTSCODMESSAGE'           => 'En el 4º paso del proceso de realización del pedido, la página "oxtscodmessage" se mostrará adicionalmente.',

'HELP_SHOP_CONFIG_DOWNLOADS'                  => 'Tienda con productos descargables. Activa aquí, los productos pueden ser pedidos y descargados.',

'HELP_SHOP_CONFIG_DOWNLOADS_PATH'             => 'Ruta donde los archivos descargables están guardados.',

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

'HELP_SHOP_MALL_PRICEADDITION'                => 'Puede definir un recargo en todos los precios de los productos en esta tienda: Escriba el recargo y seleccionar si es un porcentualmente (<span class=userinput_or_code>% </ span>) o absoluta (<span class=userinput_or_code> abs </ span>) .',



'HELP_SHOP_PERF_NEWESTARTICLES'               => '' .
                                                 '' .
                                                 '' .
                                                 '',

'HELP_SHOP_PERF_TOPSELLER'                    => '' .
                                                 '' .
                                                 '' .
                                                 '',

'HELP_SHOP_PERF_LOADFULLTREE'                 => 'Si esta opción está activada el árbol de categorías completo se muestra en la navegación por categorías (todas las categorías se expanden). Esto sólo funciona si la navegación por categorías no se muestra en la parte superior.',

'HELP_SHOP_PERF_LOADACTION'                   => 'Si esta opción está activada promociones como <span class=filename_filepath_or_italic>  Novedades </ Span> y <span class=filename_filepath_or_italic> Principio de la tienda </ span> se cargan y se muestran.',

'HELP_SHOP_PERF_USESELECTLISTPRICE'           => 'En las listas de selección recargos o descuentos se pueden configurar. Si esta opción está activada los recargos o descuentos se cargan y aplican. Si no se controla los recargos / descuentos aren  t aplicada.',

'HELP_SHOP_PERF_DISBASKETSAVING'              => 'La cesta de la compra de los usuarios registrados se guardan. Cuando visite su tienda electrónica de nuevo el contenido del carrito de compras se cargan. Si se activa esta opción los carritos de la compra aren  t guardado ninguna más.',

'HELP_SHOP_PERF_LOADDELIVERY'                 => 'Si desactiva este ajuste sin costos de envío se calculan: Los gastos de envío siempre son 0,00 euros.',

'HELP_SHOP_PERF_LOADPRICE'                    => 'Si desactiva este ajuste no se calculan los precios de los productos: No se muestran los precios.',

'HELP_SHOP_PERF_PARSELONGDESCINSMARTY'        => 'Si este valor está activo las descripciones de los productos y las categorías se analizan a través de Smarty: Puede utilizar las etiquetas Smarty (por ejemplo, para el uso de variables) <br>',

'HELP_SHOP_PERF_LOADSELECTLISTSINALIST'       => 'Normalmente las listas de selección sólo se muestran en la vista detallada de un producto. Si se activa esta opción las listas de selección también se muestran en las listas de productos (por ejemplo, resultados de búsqueda de las categorías).',

'HELP_SHOP_PERF_CHECKIFTPLCOMPILE'            => 'Si esta opción se activa los controles eShop en cada llamada, si las plantillas se han cambiado. Si lo que la salida se vuelve a calcular. Active esta función para la adaptación de las plantillas de desactivarlo si el eShop es vivir para un mejor rendimiento. <br>.Para más información se puede encontrar en el <a href=http://www.oxid-esales.com/en/resources/help-faq/eshop-manual/advices-adepting-templates artículo target=_blank almacenamiento en caché en target=_blank> el manual </ a>.',

'HELP_SHOP_PERF_CLEARCACHEONLOGOUT'           => 'Por lo general, el caché se vacía completa tan pronto como guardar los cambios en la eShop de administración. Esto puede conducir a problemas de rendimiento en el admin. Si esta opción está activada la caché sólo se vacía al terminar la sesión de eShop admin.',





'HELP_SHOP_SEO_TITLEPREFIX'                   => '' .
                                                 '',

'HELP_SHOP_SEO_TITLESUFFIX'                   => '' .
                                                 '',

'HELP_SHOP_SEO_IDSSEPARATOR'                  => '' .
                                                 '',

'HELP_SHOP_SEO_SAFESEOPREF'                   => 'Si varios productos tienen el mismo nombre y se encuentran en la misma categoría que tendría la misma dirección de SEO. Para evitar este sufijo el SEO se adjunta. Si no hay definido ningún sufijo SEO, se utiliza <span class=filename_filepath_or_italic> oxid </ span> se utiliza.',

'HELP_SHOP_SEO_RESERVEDWORDS'                 => 'Algunas direcciones URL se definen en eShop OXID como www.youreshop.com / administrador para acceder a eShop admin. Si una categoría fue nombrado class=filename_filepath_or_italic> <span admin </ span> la dirección de SEO se www.youreshop.com / admin también - el no podía categoría  t acceder. Por lo tanto el sufijo SEO se adjunta a estas direcciones URL. Se pueden definir aquí las URL que se sufijo automáticamente.',

'HELP_SHOP_SEO_SKIPTAGS'                      => 'Si no hay etiquetas META se definen los productos y categorías de las etiquetas META se crean automáticamente. por lo tanto las palabras muy comunes puede ser omitido. Todas las palabras introducidas aquí se omiten cuando se crean las etiquetas META.',
'HELP_SHOP_SEO_LOWERCASEURLS'                 => '',

'HELP_SHOP_SEO_STATICURLS'                    => 'Para las páginas especiales (por ejemplo, términos y condiciones generales) puede introducir direcciones URL fija SEO. Al seleccionar una dirección URL estática la dirección normal se muestra en la <span URL class=navipath_or_inputname> estándar </ span>. En los campos de entrada a continuación puede definir una dirección URL de SEO para cada idioma.',



'HELP_SHOP_MAIN_PRODUCTIVE'                   => '' .
                                                 '' .
                                                 '',

'HELP_SHOP_MAIN_ACTIVE'                       => '<span Class=navipath_or_inputname> Activo </ span> se puede activar / desactivar la tienda electrónica completa. Si el eShop se desactiva un mensaje diciendo que la tienda electrónica está en línea temporal se muestra a los usuarios. Esto puede ser útil para el mantenimiento.',

'HELP_SHOP_MAIN_INFOEMAIL'                    => 'Todos los correos electrónicos enviados a través de la página de contacto se envían a esta dirección de correo electrónico.',

'HELP_SHOP_MAIN_ORDEREMAIL'                   => 'Cuando los usuarios para que reciban un correo electrónico con un resumen de la orden. Las respuestas a este correo electrónico se envían a <span class=navipath_or_inputname> Orden respuesta de correo electrónico </ span>.',

'HELP_SHOP_MAIN_OWNEREMAIL'                   => 'Cuando los usuarios para que reciba un correo electrónico con un resumen de la orden. Estos correos electrónicos se envían a <span class=navipath_or_inputname> Orden E-mail a </ span>.',

'HELP_SHOP_MAIN_SMTPSERVER'                   => 'los datos de SMTP se necesita para enviar mensajes de correo electrónico (por ejemplo, enviar a los clientes una confirmación del pedido por email) se puede encontrar más información en la <a href = http://www.oxid-esales.com/de/resources/help-faq / target = _blank eshop-manual/entering-smtp-data> comforme <entrada manual / a>.',

'HELP_ARTICLE_MAIN_ALDPRICE'                  => '<span class=navipath_or_inputname> Alt. Precios </ span> puede configurar precios especiales para determinados usuarios. Más información está disponible en la href=http://www.oxid-esales.com/de/resources/help-faq/eshop-manual/set-alternative-prices-special-users <a target=_blank> eShop Manual < / a> en la página web OXID eSales.',

'HELP_ARTICLE_MAIN_VAT'                       => 'Aquí puede entrar en un especial del IVA para este producto. Este tipo impositivo se utilizó para este producto en todos los cálculos posteriores (factura de la cesta de la orden)',

'HELP_ARTICLE_EXTEND_UNITQUANTITY'            => '<span class=navipath_or_inputname> Cantidad </ span> <span class=navipath_or_inputname> Unidad </ span> puede mostrar el precio por unidad de cantidad (por ejemplo, 1,43 euros por litro). En <span class=navipath_or_inputname> Cantidad </ span> ingresar la cantidad del producto (por ejemplo, <span class=userinput_or_code> 1.5 </ span>) en <span class=navipath_or_inputname> Unidad </ span> de la unidad de medida de acuerdo (por ejemplo, <span class=userinput_or_code> litros </ span>). El precio por unidad de cantidad es calculada y se muestra con el producto.',

'HELP_ARTICLE_EXTEND_EXTURL'                  => 'En <span class="navipath_or_inputname"> URL externa </span> puede introducir un link donde obtener más información sobre el producto está disponible (por ejemplo, en la página web del fabricante). En el texto <span class="navipath_or_inputname"> de URL externa </span> puede introducir el texto que se vincula por ej. <span class="userinput_or_code"> más información en el sitio web del fabricante</span>.',

'HELP_ARTICLE_EXTEND_TPRICE'                  => 'En <span class=navipath_or_inputname> PVP </ span> puede introducir el precio de venta al público recomendado por el fabricante. Si ingresa el PVP se muestra a los usuarios: Por encima del precio del producto <span class=filename_filepath_or_italic> Reducción de PVP ahora sólo </ span> se muestra.',

'HELP_ARTICLE_EXTEND_QUESTIONEMAIL'           => 'En <span class=navipath_or_inputname> Alt. Contactar </ span> puede introducir una dirección de correo electrónico. Si los usuarios enviar sus preguntas sobre este producto que será enviado a esta dirección de correo electrónico. Si no hay dirección de correo electrónico se introduce la consulta será enviada a la información normal de la dirección de correo electrónico.',

'HELP_ARTICLE_EXTEND_NONMATERIAL'             => 'Configuración es heredada desde el producto padre a variantes y aplica al producto entero.',

'HELP_ARTICLE_EXTEND_FREESHIPPING'            => 'La configuración es heredada del producto padre a variantes y aplica a todo el producto.',

'HELP_ARTICLE_EXTEND_BLFIXEDPRICE'            => 'Alerta de precio puede deshabilitarse para este producto.',

'HELP_ARTICLE_EXTEND_SKIPDISCOUNTS'           => 'Si <span class=navipath_or_inputname> Salte todos los descuentos negativo </ span> está activo subsidios negativos no se calculan para este producto. Estos incluyen descuentos y cupones.',

'HELP_ARTICLE_EXTEND_TEMPLATE'                => 'La vista de detalle de un producto se puede visualizar con una plantilla diferente. Para ello introduzca el nombre del archivo de la plantilla que se utilizará. Más información está disponible en la <a href = objetivo = _blank http://www.oxid-esales.com/de/resources/help-faq/eshop-manual/display-certain-products-or-categories-another-template > manual comforme <entrada / a>.',

'HELP_ARTICLE_EXTEND_ISCONFIGURABLE'          => ''.
                                                 '',

'HELP_ARTICLE_EXTEND_UPDATEPRICE'             => 'Precios pueden cambiar en un tiempo definido. Campos proporcionados actualizan precios standard. Si dejas el precio con valor "0", precios no se actualizarán.',

'HELP_ARTICLE_EXTEND_SHOWCUSTOMAGREEMENT'     => 'If this option is activated, users have to confirm terms and conditions in the fourth step of the check-out process for this specific item. Please make sure the general option is activated as well and the product item is intangible or downloadable.',

'HELP_ARTICLE_FILES_MAX_DOWNLOADS_COUNT'      => 'Aquí puede definir cuántas veces el usuario puede descargar desde el mismo enlace, si el usuario pide sin registro. Por este archivo puede sobrescribir la configuración predeterminada, que se definió en la configuración Maestro -> Core Configuración -> Configuración -> Descargas de todos los productos.',

'HELP_ARTICLE_FILES_LINK_EXPIRATION_TIME_UNREGISTERED' => 'Aquí puede definir cuántas veces el usuario puede descargar desde el mismo enlace, si el usuario pide sin registro. Por este archivo puede sobrescribir la configuración predeterminada, que se definió en la configuración Maestro -> Core Configuración -> Configuración -> Descargas de todos los productos.',

'HELP_ARTICLE_FILES_LINK_EXPIRATION_TIME'     => 'Especifica el tiempo en horas, el enlace de descarga es válido después de la primera descarga. Para este archivo puedes sobreescribir la configuración por defecto, que se encuentra definida en Configuración Maestra -> Configuración del núcleo -> Configuración -> Descargas para todos los productos.',

'HELP_ARTICLE_FILES_NEW'                      => 'Escriba el nombre de un archivo transferido vía FTP o cargar un nuevo archivo aquí. Tenga en cuenta que los archivos grandes deben ser cargados a través de FTP. Limitación de tamaño de archivo es válida sólo cuando el archivo se carga a través del administrador. Esta limitación depende de la configuración de PHP del servidor y puede ser editado sólo allí.',

'HELP_ARTICLE_FILES_DOWNLOAD_EXPIRATION_TIME' => 'Especifica el tiempo en horas, el enlace de descarga es válido después de la primera descarga. Para este archivo puedes sobreescribir la configuración por defecto, que se encuentra definida en Configuración Maestra -> Configuración del núcleo -> Configuración -> Descargas para todos los productos.',

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

'HELP_ARTICLE_STOCK_REMINDACTIV'              => 'El ajuste se hereda de los padres para variantes de producto y se aplica a todo el producto.',

'HELP_ARTICLE_STOCK_STOCKFLAG'                => '' .
                                                 '' .
                                                 '' .
                                                 '' .
                                                 '',

'HELP_ARTICLE_IS_DOWNLOADABLE'                => 'Los archivos de este producto se pueden descargar.',

'HELP_ARTICLE_STOCK_REMINDAMAOUNT'            => 'Con <span class="navipath_or_inputname"> Enviar email si el stock cae por debajo del valor de </span> puede especificar que un email será enviado tan pronto como el nivel de stock cae por debajo del valor introducido. Seleccione la casilla de verificación e introduzca el nivel en el que desea que se le notifique.',

'HELP_ARTICLE_STOCK_DELIVERY'                 => 'Aquí puede introducir la fecha en que el producto estará disponible de nuevo, si se vende a cabo. El formato es año-mes-día e. g. 16.02.2009.',

'HELP_ARTICLE_SEO_FIXED'                      => 'Usted puede dejar que el volver a calcular eShop las direcciones URL de SEO. Una página del producto recibe una nueva dirección de SEO, si e. g. el título del producto ha cambiado. El ajuste de <span class=navipath_or_inputname> fijo URL </ span> lo impide: si está activo la dirección de SEO de edad se mantiene y no hay URL SEO nueva se calcula.',

'HELP_ARTICLE_SEO_KEYWORDS'                   => 'Estas palabras clave se integran en el código fuente HTML de la página del producto (palabras clave META). Esta información es utilizada por los motores de búsqueda. palabras clave adecuadas para el producto puede entrar aquí. Si  s se deja en blanco las palabras claves se generan de forma automática.',

'HELP_ARTICLE_SEO_DESCRIPTION'                => 'Esta descripción se integra en el código fuente HTML de la página del producto (descripción META). Este texto es a menudo aparecen en las páginas de resultados de motores de búsqueda. Una descripción adecuada se puede introducir aquí. Si  s se deja en blanco la descripción es generada automáticamente.',

'HELP_ARTICLE_SEO_ACTCAT'                     => 'Puede definir varias direcciones URL de SEO para los productos: para determinadas categorías y las páginas del fabricante. <span class=navipath_or_inputname> Active Categoría / vendedor </ span> se puede seleccionar la dirección de SEO que desea editar.',

'HELP_ARTICLE_STOCK_STOCKTEXT'                => 'Aquí puede introducir un mensaje que se muestra si el producto está en stock.',

'HELP_ARTICLE_STOCK_NOSTOCKTEXT'              => 'Aquí puede introducir un mensaje que se muestra si el producto está fuera de stock.',

'HELP_ARTICLE_STOCK_AMOUNTPRICE_AMOUNTFROM'   => 'En <span Cantidad class=navipath_or_inputname> From / To / bis </ span> que establezca para la cual la cantidad amplia de la escala de precios es válida. <br>.Para más información sobre precios de la escala se puede encontrar en el <a href=http://www.oxid-esales.com/en/resources/help-faq/eshop-manual/setting-graduated-prices artículo target=_blank> escala de precios en el manual. </ a>.',

'HELP_ARTICLE_STOCK_AMOUNTPRICE_PRICE'        => '' .
                                                 '',

'HELP_ARTICLE_VARIANT_VARNAME'                => '<span class=navipath_or_inputname>Nombre de selección </ span> define cómo la selección de las variantes se etiqueta por ejemplo, <span class=userinput_or_code> color </ span> o <span class=userinput_or_code>Tamaño</ span>. <br>.',

'HELP_ATTRIBUTE_MAIN_DISPLAYINBASKET'         => 'Si se marca, el valor de este atributo se mostrará en el carrito y el orden resumen debajo del título del producto.',

'HELP_CATEGORY_MAIN_HIDDEN'                   => 'Con <span Class=navipath_or_inputname> ocultar </ ​​span> Puede definir si esta categoría se muestra a los usuarios. Si una categoría está oculto que no se muestra a los usuarios, incluso si está activo.',

'HELP_CATEGORY_MAIN_PARENTID'                 => '' .
                                                 '' .
                                                 '',

'HELP_CATEGORY_MAIN_EXTLINK'                  => '<span Class=navipath_or_inputname> Enlace externo </ span> se puede entrar en un vínculo que se abre cuando el usuario haga clic en la categoría. <span class=warning_or_important_hint>  Utilice esta función si desea mostrar un enlace en la barra de navegación categoría. Esto hace que la categoría a perder su función normal </ span>',

'HELP_CATEGORY_MAIN_PRICEFROMTILL'            => '<span Class=navipath_or_inputname> Precio desde / a </ span> se puede especificar que <span class=warning_or_important_hint> todo </ span> productos en una gama de precios de determinados se muestran en esta categoría. Introduzca el límite inferior en el primer campo de entrada y el límite superior en el segundo campo de entrada. Luego <span class=warning_or_important_hint> todos los productos de la tienda electrónica </ span> dentro de este rango de precios se muestran en esta categoría.',

'HELP_CATEGORY_MAIN_DEFSORT'                  => 'Con Rápida <span class=navipath_or_inputname> clasificación </span> se especifica la forma en que los productos de la categoría, serán ordenados.',

'HELP_CATEGORY_MAIN_SORT'                     => 'Usted puede utilizar <span class=navipath_or_inputname>  clasificación </ span> para definir el orden en que se muestran las categorías: La categoría con el menor número se muestra en la parte superior y la categoría con mayor número en la parte inferior.',

'HELP_CATEGORY_MAIN_THUMB'                    => '<span Class=navipath_or_inputname> Imagen </ span> <span class=navipath_or_inputname> Subir Imagen </ span> puede subir una imagen para esta categoría. La imagen se muestra en la parte superior de la categoría se ve. Seleccione la imagen en <span class=navipath_or_inputname> Subir Imagen </ span>. Al hacer clic en <span class=navipath_or_inputname> Guardar </ span> Foto º se carga. Después de cargar el nombre de archivo de la imagen se muestra en la <span class=navipath_or_inputname> Imagen </ span>.',

'HELP_CATEGORY_MAIN_PROMOTION_ICON'           => 'Con <span class="navipath_or_inputname">icono de promoción</span> y <span class="navipath_or_inputname">icono de subida</span> puedes subir una imagen de categoría para promoción en la página de inicio. Para mostrar la categoría en promoción mira <span class="navipath_or_inputname">Configuración Maestra -> Info de cliente -> Oferta superior en categoría</span>',

'HELP_CATEGORY_MAIN_SKIPDISCOUNTS'            => '<li> Si <span class=navipath_or_inputname> Salte todos los descuentos negativo </ span> está activo subsidios negativos no se calculan para todos los productos de esta categoría.',



'HELP_CATEGORY_SEO_FIXED'                     => 'Usted puede dejar que el volver a calcular eShop las direcciones URL de SEO. Una página de la categoría recibe una URL de SEO nuevo si e. g. el título de la categoría ha cambiado. El ajuste de <span class=navipath_or_inputname> fijo URL </ span> lo impide: si está activo la dirección de SEO de edad se mantiene y no hay URL SEO nueva se calcula.',

'HELP_CATEGORY_SEO_KEYWORDS'                  => 'Estas palabras clave se integran en el código fuente HTML de la página de la categoría (palabras clave META). Esta información es utilizada por los motores de búsqueda. palabras clave adecuadas para la categoría se puede introducir aquí. Si  s se deja en blanco las palabras claves se generan de forma automática.',

'HELP_CATEGORY_SEO_DESCRIPTION'               => 'Esta descripción se integra en el código fuente HTML de la página de la categoría (descripción META). Este texto es a menudo aparecen en las páginas de resultados de motores de búsqueda. Una descripción adecuada se puede introducir aquí. Si  s se deja en blanco la descripción es generada automáticamente.',

'HELP_CATEGORY_SEO_SHOWSUFFIX'                => 'Con esta opción se puede especificar si el sufijo título se muestra en el título de la ventana del navegador cuando la página de la categoría se abre. El sufijo título se puede establecer en <span class=navipath_or_inputname> Maestro Configuración -> Configuración de la base -> SEO -> Título del sufijo </ span>.',
'HELP_CONTENT_MAIN_SNIPPET'                   => 'Si selecciona <span class=navipath_or_inputname> fragmentos de </ span> se puede incluir esta página en otras páginas CMS CMS por su ident: <span class=userinput_or_code> [{ident oxcontent = ident_of_the_cms_page}] </ span>',

'HELP_CONTENT_MAIN_MAINMENU'                  => 'Si selecciona <span class=navipath_or_inputname> superior del menú </ span> un enlace a esta página de la CMS se muestra en el menú superior (A y Condiciones Acerca de Nosotros).',

'HELP_CONTENT_MAIN_CATEGORY'                  => 'Si selecciona <span class=navipath_or_inputname> Categoría </ span> un enlace a esta página de la CMS se muestra en la barra de navegación de las siguientes categorías de las demás categorías.',

'HELP_CONTENT_MAIN_MANUAL'                    => 'Si selecciona class=navipath_or_inputname> <span manualmente </ span> se crea un vínculo que puede utilizar para incluir esta página en otras páginas CMS CMS. El enlace se muestra a continuación al hacer clic en <span class=navipath_or_inputname> Guardar </ span>',
'HELP_CONTENT_SEO_FIXED'                      => 'Usted puede dejar que el volver a calcular eShop las direcciones URL de SEO. Una página de la CMS recibe una URL de SEO nuevo si e. g. el título de la página de la CMS ha cambiado. El ajuste de <span class=navipath_or_inputname> fijo URL </ span> lo impide: si está activo la dirección de SEO de edad se mantiene y no hay URL SEO nueva se calcula.',

'HELP_CONTENT_SEO_KEYWORDS'                   => 'Estas palabras clave se integran en el código fuente HTML de la página de la CMS (palabras clave META). Esta información es utilizada por los motores de búsqueda. palabras clave adecuadas para la página de los CMS pueden ser introducido aquí. Si  s se deja en blanco las palabras claves se generan de forma automática.',

'HELP_CONTENT_SEO_DESCRIPTION'                => 'Esta descripción se integra en el código fuente HTML de la página de la CMS (descripción META). Este texto es a menudo aparecen en las páginas de resultados de motores de búsqueda. Una descripción adecuada se puede introducir aquí. Si  s se deja en blanco la descripción es generada automáticamente.',



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

'HELP_DELIVERY_MAIN_ORDER'                    => 'Usted puede utilizar <span  class=navipath_or_inputname> Orden de regla de procesamiento </ span> para especificar el orden en que las normas de costos de envío se llevará a cabo. La regla de costo de envío con el número más bajo es la primera ejecución. El orden es importante si el ajuste <span class=navipath_or_inputname> Don  t calcular otras normas si esta regla coincide con </ span> se utiliza.',

'HELP_DELIVERY_MAIN_FINALIZE'                 => 'Usted puede utilizar <span class=navipath_or_inputname> Don  t calcular otras normas si esta regla coincide con </ span> para especificar que no hay otras normas se ejecutará si esta norma el costo de envío es válida y que se ejecuta. Para esta opción, el orden en que las reglas de costo de envío se ejecutan es importante. Se especifica a través de la Orden <span class=navipath_or_inputname> de procesamiento de la regla </ span>.',



'HELP_DELIVERYSET_MAIN_POS'                   => 'class = navipath_or_inputname > <span clasificación </ span> especifica el orden en que los métodos de envio se muestranlos usuarios : El Método de envio con el menor número se muestra en la parte superior .',



'HELP_DISCOUNT_MAIN_SORT'                     => '',

'HELP_DISCOUNT_MAIN_PRICE'                    => 'Usted puede utilizar <span class=navipath_or_inputname> precio de compra </ span> para especificar que el descuento sólo es válido para los precios de compra determinados. Si la oferta es válida para todos los precios de compra entre <span class=userinput_or_code> 0 </ span> <span class=navipath_or_inputname> Desde </ span> <span class=userinput_or_code> 0 </ span> <span class = navipath_or_inputname> A> </ span.',

'HELP_DISCOUNT_MAIN_AMOUNT'                   => 'Usted puede utilizar <span class=navipath_or_inputname> Cantidad </ span> para especificar que el descuento sólo es válido para determinadas cantidades de compra. Si desea que el descuento sea válido para todas las cantidades de compra entrar <span class=userinput_or_code> 0 </ span> <span class=navipath_or_inputname> Desde </ span> <span y class=userinput_or_code> 0 </ span> < span class => navipath_or_inputname a> </ span.',

'HELP_DISCOUNT_MAIN_REBATE'                   => '' .
                                                 '' .
                                                 '' .
                                                 '' .
                                                 ''.
                                                 '',



'HELP_GENERAL_SEO_ACTCAT'                     => 'Puede definir varias direcciones URL de SEO para los productos: para determinadas categorías y las páginas del fabricante. <span Class=navipath_or_inputname> Active Categoría / vendedor </ span> se puede seleccionar la dirección de SEO que desea editar.',

'HELP_GENERAL_SEO_FIXED'                      => 'El eShop calculará automáticamente las direcciones URL de SEO. Por ejemplo una página de producto obtiene una dirección URL de SEO nuevo si el título del producto ha cambiado. El <span class=navipath_or_inputname> ajuste fijo URL </ span> evita que el nuevo cálculo: Si se activa la dirección de SEO de edad se mantiene y no hay URL SEO nuevo se genera.',

'HELP_GENERAL_SEO_SHOWSUFFIX'                 => 'Con esta opción se puede especificar si el sufijo título se muestra en el título de la ventana del navegador cuando la página se abre de acuerdo. El sufijo título se puede establecer en <span class=navipath_or_inputname> Maestro Configuración -> Configuración de la base -> SEO -> Título del sufijo </ span>.',

'HELP_GENERAL_SEO_OXKEYWORDS'                 => 'Estas palabras clave se integran en el código fuente HTML (palabras clave META). Esta información es utilizada por los motores de búsqueda. palabras clave adecuadas para el producto puede entrar aquí. Si  s se deja en blanco las palabras claves se generan de forma automática.',

'HELP_GENERAL_SEO_OXDESCRIPTION'              => 'Esta descripción se integra en el código fuente HTML (descripción META). Este texto es a menudo aparecen en las páginas de resultados de motores de búsqueda. Una descripción adecuada se puede introducir aquí. Si  s se deja en blanco la descripción es generada automáticamente.',



'HELP_GENIMPORT_FIRSTCOLHEADER'               => 'Activa esta opción si la primera línea del archivo CSV contiene los nombres de las columnas de base de datos de los valores CSV deben ser asignados. Los valores se asignan automáticamente a las columnas de base de datos.',

'HELP_GENIMPORT_REPEATIMPORT'                 => 'Si este valor está activo el paso uno se muestra después de la importación con éxito para que pueda comenzar la siguiente importación de inmediato.',

'HELP_LANGUAGE_DEFAULT'                       => 'Lenguaje por defecto se utiliza cuando la tienda no es capaz de detectar el idioma de otra manera: Identificación del lenguaje no se define por la dirección URL puede  t ser detectado por el navegador no está definido en la sesión etc Lenguaje por defecto sólo se puede eliminar con discapacidad no es posible <u> </ u>.',

'HELP_LANGUAGE_ACTIVE'                        => "Esta opción define la disponibilidad de idioma en el frontend de la eShop: Si está activada - el idioma está disponible en frontend. Para trabajar en el área administradora con este idioma está siempre disponible; Excepto si está deshabilitado en el frontend.",

'HELP_PAYMENT_MAIN_SORT'                      => 'En <span class=navipath_or_inputname>  clasificación </ span> se puede especificar el orden en que los métodos de pago se van a mostrar a los usuarios: La forma de pago con el menor número de clase se muestra en la parte superior.',

'HELP_PAYMENT_MAIN_FROMBONI'                  => 'Usted puede utilizar <span class=navipath_or_inputname> Min. Calificación Crediticia </ span> para especificar que las formas de pago están disponibles únicamente para usuarios que tienen un índice de crédito ciertos o superior. Usted puede entrar en la calificación crediticia para cada usuario en <span class=navipath_or_inputname> usuario Administrar -> Usuarios -> extendido </ span>.',

'HELP_PAYMENT_MAIN_SELECTED'                  => 'Usted puede utilizar <span class=navipath_or_inputname> <span Seleccionado </ span> para definir la forma de pago es ser seleccionado como el método por defecto si el usuario puede elegir entre varias formas de pago.',

'HELP_PAYMENT_MAIN_AMOUNT'                    => '' .
                                                 '',

'HELP_PAYMENT_MAIN_ADDPRICE'                  => '' .
                                                 '' .
                                                 '',

'HELP_PAYMENT_MAIN_ADDSUMRULES'               => 'Cuando se calcula el suplemento o reducción, el valor del carrito se usa como base. Define cuales costos serán incluidos cuando se calcula el valor del carrito.',

'HELP_SELECTLIST_MAIN_TITLEIDENT'             => 'En <span class=navipath_or_inputname> Working Title </ span> puede introducir un nombre adicional que no se muestra a los usuarios de su tienda electrónica. Usted puede utilizar el título de trabajo para diferenciar entre las listas de selección similares (por ejemplo, los tamaños de los pantalones y los tamaños de camisetas).',

'HELP_SELECTLIST_MAIN_FIELDS'                 => 'Todas las opciones disponibles se muestran en la <span class=navipath_or_inputname> Campos </ span> lista. Puede utilizar los campos de entrada a la facultad de crear nuevas opciones. Más información está disponible en el href=http://www.oxid-esales.com/en/resources/help-faq/eshop-manual/implementing-simple-variants-selection-lists <a <target=_blank> manual eShop / a> en la página web OXID eSales.',

'HELP_USER_MAIN_HASPASSWORD'                  => '' .
                                                 '' .
                                                 '',

'HELP_USER_PAYMENT_METHODS'                   => ''.
                                                 ''.
                                                 '',

'HELP_USER_EXTEND_NEWSLETTER'                 => 'Esta configuración se muestra si el usuario suscrito a la newsletter.',

'HELP_USER_EXTEND_EMAILFAILED'                => 'Si no emails pueden ser enviados a la dirección de correo electrónico de este usuario comprobar esta configuración. Entonces no hay boletines son enviados a este usuario más. Otros mensajes de correo electrónico está siendo enviado.',

'HELP_USER_EXTEND_BONI'                       => 'Aquí puede introducir un valor numérico para la calificación de crédito del usuario. Con la calificación de crédito que pueden influir en que las formas de pago están disponibles para este usuario.',



'HELP_MANUFACTURER_MAIN_ICON'                 => '<span Class=navipath_or_inputname> Icono </ span> <span class=navipath_or_inputname> Subir Icono </ span> puede subir una foto de este fabricante (por ejemplo, el logotipo). En <span class=navipath_or_inputname> Subir Icono </ span> Seleccione la imagen que quieres subir. Al hacer clic en <span class=navipath_or_inputname> Guardar </ span> la imagen se carga. Después de cargar el nombre de archivo se muestra en la <span class=navipath_or_inputname> Icono </ span>.',



'HELP_MANUFACTURER_SEO_FIXED'                 => 'Usted puede dejar que el volver a calcular eShop las direcciones URL de SEO. Una página del fabricante recibe una nueva dirección de SEO, si e. g. el título de el fabricante ha cambiado. El ajuste de <span class=navipath_or_inputname> fijo URL </ span> lo impide: si está activo la dirección de SEO de edad se mantiene y no hay URL SEO nueva se calcula.',

'HELP_MANUFACTURER_SEO_KEYWORDS'              => 'Estas palabras clave se integran en el código fuente HTML de la página del fabricante (palabras clave META). Esta información es utilizada por los motores de búsqueda. palabras clave adecuadas para el fabricante puede introducir aquí. Si deja en blanco las palabras claves se generan de forma automática.',

'HELP_MANUFACTURER_SEO_DESCRIPTION'           => 'Esta descripción se integra en el código fuente HTML de la página del fabricante (descripción META). Este texto es a menudo aparecen en las páginas de resultados de motores de búsqueda. Una descripción adecuada se puede introducir aquí. Si deja en blanco la descripción es generada automáticamente.',

'HELP_MANUFACTURER_SEO_SHOWSUFFIX'            => 'Con esta opción se puede especificar si el sufijo título se muestra en el título de la ventana del navegador cuando la página del fabricante se abre. El sufijo título se puede establecer en <span class=navipath_or_inputname> Maestro Configuración -> Configuración de la base -> SEO -> Título del sufijo </ span>.',

'HELP_VOUCHERSERIE_MAIN_DISCOUNT'             => '' .
                                                 '' .
                                                 '' .
                                                 '' .
                                                 '',



'HELP_VOUCHERSERIE_MAIN_ALLOWSAMESERIES'      => 'Aquí se puede establecer si a los usuarios se les permite usar varios cupones de esta serie de cupones en sólo pedido.',

'HELP_VOUCHERSERIE_MAIN_ALLOWOTHERSERIES'     => 'Aquí se puede establecer si a los usuarios se les permite usar los cupones junto con cupones de otras series de cupones en un mismo pedido.',

'HELP_VOUCHERSERIE_MAIN_SAMESEROTHERORDER'    => 'Aquí se puede establecer si los usuarios pueden usar los cupones de esta serie de cupones en los pedidos múltiples.',

'HELP_VOUCHERSERIE_MAIN_RANDOMNUM'            => 'Si este valor está activo un número al azar se calcula para cada cupón.',

'HELP_VOUCHERSERIE_MAIN_VOUCHERNUM'           => 'Aquí puede introducir un número de cupón. Este número se utiliza cuando se crean nuevos cupones si <span class=navipath_or_inputname> números aleatorios </ span> se desactiva. Todos los cupones obtener el número de cupón misma.',

'HELP_VOUCHERSERIE_MAIN_CALCULATEONCE'        => 'Si asignas productos o categorías a tu cupón, desactiva esta opción para calcular este cupón a cada producto por posición de carrito. Activa si el cupón puede ser válido una vez por carrito.',

'HELP_WRAPPING_MAIN_PICTURE'                  => '<span Class=navipath_or_inputname> Imagen </ span> <span class=navipath_or_inputname> Subir Imagen </ span> puede subir una foto para la envoltura de regalos. En <span class=navipath_or_inputname> Subir Imagen </ span> seleccionar la imagen que desea cargar. Al hacer clic en <span class=navipath_or_inputname> Guardar </ span> la imagen se carga. Después de cargar el nombre de archivo se muestra en la <span class=navipath_or_inputname> Imagen </ span>.',

'HELP_PROMOTIONS_BANNER_PICTUREANDLINK'       => 'Sube la imagen del banner e introduce la URL que usará cuando se haga click en él. Si el producto está asignado al banner y la URL no es introducida, el link al producto asignado se usará cuando se haga click en el banner.',
'HELP_SHOP_PERF_SEO_CACHE'                    => 'Activado SEO cache incrementa el rendimiento, pero requiere mucho espacio en disco en el directorio /tmp.',

'HELP_ALTERNATIVE_IMAGE_SERVER_NOTE'          => 'URL alternativa a imagen remota en el servidor puede especificarse en el archivo de configuración config.inc.php definiendo <i>sAltImageUrl</i> and <i>sSSLAltImageUrl</i>.<br> Así todos los productos se cargarán desde este servidor alternativo en vez del local. Aunque, los archivos subidos se guardarán localmente. En este caso la sincronización con el servidor externo puede hacerse a mano o con scripts personalizados.',

'HELP_SHOP_RDFA_CONTENT_OFFERER'              => 'Seleccionar aquí, que página de contenido de información principal es mostrada, por ejemplo, "Sobre Nosotros"',
'HELP_SHOP_RDFA_CONTENT_PAYMENT'              => 'Seleccionar aquí, en que página de contenido se ha asignado información de pago a RDFa mostrada, por ejemplo, "Términos y condiciones". Para asignar tus métodos de pago RDFa en general ve a: Configuración de Tienda -> Métodos de pago -> RDFa.',
'HELP_SHOP_RDFA_CONTENT_DELIVERY'             => 'Seleccionar aquí, en que página de contenido se ha asignado información de envío a RDFa mostrada, por ejemplo, "Envío y cargos". Para asignar tus métodos de envío a métodos de pago RDFa en general ve a: Configuración de Tienda -> Métodos de envío -> RDFa.',
'HELP_SHOP_RDFA_VAT'                          => 'Esta opción indica cuando el impuesto (IVA) es incluido en el precio y en los costos de entrega/pago o no.',
'HELP_SHOP_RDFA_DURATION_PRICES'              => 'Especifica aquí el tiempo de validez de los costos de los productos, pago y envío (por ejemplo, 1 día, 1 semana).',
'HELP_SHOP_RDFA_LOGO_URL'                     => 'La dirección Web (URL) de un logotipo o imagen.',
'HELP_SHOP_RDFA_GEO_LONGITUDE'                => 'La longitud de la tienda como parte de geoposición. Por favor, introduzca números solo.',
'HELP_SHOP_RDFA_GEO_LATITUDE'                 => 'La latitud de la tienda como parte de geoposición. Por favor, introduzca números solo.',
'HELP_SHOP_RDFA_GLN'                          => 'Número Global de Localización (GLN) para la compañia. El Número Global de Localizació es un número de trece dígitos usado para verificar destacamentos y localizaciones físicas.',
'HELP_SHOP_RDFA_NAICS'                        => 'El código North American Industry Classification System (NAICS) para tu compañia. Ver http://www.census.gov/eos/www/naics/.',
'HELP_SHOP_RDFA_ISIC'                         => 'El código de International Standard of Industrial Classification of All Economic Activities (ISIC) para tu compañia. Ver http://unstats.un.org/unsd/cr/registry/isic-4.asp.',
'HELP_SHOP_RDFA_DUNS'                         => 'El Dun & Bradstreet D-U-N-S es un número de nueve dígitos usado para identificar entidades legales.',
'HELP_SHOP_RDFA_SHOW_PRODUCTSTOCK'            => 'Si está opción está activada significa que el stock real del producto es mostrado.',
'HELP_SHOP_RDFA_RATING_MIN'                   => 'Posible valor mínimo referido a la escala usada para porcentajes en tu tienda. Este valor no es el porcentaje más bajo actual de un producto!',
'HELP_SHOP_RDFA_RATING_MAX'                   => 'Posible valor máximo referido a la escala usada para porcentajes en tu tienda. Este valor no es el porcentaje más alto actual de un producto!',
'HELP_SHOP_RDFA_COND'                         => 'Seleccionar aquí, que termino describe la condición de los productos (nuevo, usado o reacondicionado).',
'HELP_SHOP_RDFA_FNC'                          => 'Selecciona el tipo de función de los productos. Por ejemplo, son ofrecidos para vender, alquilar o reparar?',
'HELP_SHOP_RDFA_COSTUMER'                     => 'Los tipos de clientes para que productos de la tienda que son válidos. (Usuario final, revendedor, negocios y/o público)',
'HELP_SHOP_RDFA_DURATION_OFFERINGS'           => 'Esta propiedad especifica el tiempo de validez de los productos, por ejemplo, 1 día,1 semana o un mes.',
'HELP_SHOP_PERF_SYSREQ_CHECK'                 => '',
'HELP_SHOP_CONFIG_ADDITIONAL_SERVICE_VAT_CALCULATION_BIGGEST_NET'  => 'El porcentaje de IVA de los productos, que tiene un valor neto en el carrito, es usado para el cálculo.',
'HELP_SHOP_CONFIG_ADDITIONAL_SERVICE_VAT_CALCULATION_PROPORTIONAL' => 'El proncentaje de productos en el carrito con el mismo porcentaje de IVA es usado para el cálculo.',
'HELP_SHOP_CONFIG_VIEWNETPRICE'               => 'En frontend, los precios de los productos son mostrados como valores netos.',
'HELP_SHOP_CONFIG_ENTERNETPRICE'              => 'En el área administradora los precios de los productos deben introducirse como valor neto.',

'HELP_REVERSE_PROXY_GET_FRONTEND'             => 'Compruebe si un proxy inverso está disponible para el frontend. Cabecera de la página de inicio de la tienda es verificado.',
'HELP_REVERSE_PROXY_GET_BACKEND'              => 'Área administrados es mostrada sin Proxy inverso. Cabecera no puede ser recibida.',

'HELP_SHOP_CONFIG_DEBIT_OLD_BANK_INFORMATION_NOT_ALLOWED' => 'Sólo IBAN y BIC puede ser introducido durante la realización del pedido. El número de cuenta y el código de banco solo puede ser introducido si esta casilla no está marcada.',
'HELP_SHOP_CONFIG_ENABLE_INTANGIBLE_PRODUCTS_AGREEMENT'   => 'If this option is activated, users have to confirm terms and conditions for intangible or downloadable products in the fourth step of the check-out process. Please make sure this option is enabled for the specific item as well!',

'HELP_SHOP_CONFIG_FIELDS_CONTACTFORM'         => '',
];
