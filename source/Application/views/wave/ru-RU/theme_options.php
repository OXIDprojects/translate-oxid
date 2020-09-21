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

$sLangName  = 'Русский';

$aLang = array(
    'charset'                                       => 'UTF-8',

    'SHOP_THEME_GROUP_images'                       => 'Изображения',
    'SHOP_THEME_GROUP_features'                     => 'Функции',
    'SHOP_THEME_GROUP_display'                      => 'Дисплей',
    'SHOP_THEME_GROUP_logo'                         => 'Логотип',
    'SHOP_THEME_GROUP_favicons'                     => 'Favicons',
    'SHOP_THEME_GROUP_footer'                       => 'Подвал',
    'SHOP_THEME_GROUP_header'                       => 'Шапка',
    'SHOP_THEME_GROUP_contact'                      => 'Контакты',
    'SHOP_THEME_GROUP_googleanalytics'              => 'Google Analytics',
    'SHOP_THEME_GROUP_googlets'                     => 'Google Trusted Stores',
    'SHOP_THEME_GROUP_background'                   => 'Фоновое изображение',
    'SHOP_THEME_GROUP_econda'                       => 'econda Web Shop Controlling',
    'SHOP_THEME_GROUP_emails'                       => 'Е-mail адреса',

    'SHOP_THEME_sIconsize'                          => 'Размер иконок (ширина*высота)', //SHOP_CONFIG_ICONSIZE
    'HELP_SHOP_THEME_sIconsize'                     => 'Иконки - это самые маленькие картинки продукта. Используются: <br>' .
                                                       '<ul><li>в корзине.</li>' .
                                                       '<li>, если товары отображаются в правом меню (например, в <span class="filename_filepath_or_italic">ТОП магазина</span> и <span class="filename_filepath_or_italic">Торговля</span>).</li></ul>' .
                                                       'Для избежания проблем дизайна, вызванных слишком большими значками, размер значков изменяется. Введите максимальный размер значков здесь.',

    'SHOP_THEME_sThumbnailsize'                     => 'Размер иконок (ширина*высота)', //SHOP_CONFIG_THUMBNAILSIZE
    'HELP_SHOP_THEME_sThumbnailsize'                => 'Миниатюры - это маленькие изображения товара. Они используются:<br>' .
                                                       '<ul><li>в списках товаров.</li>' .
                                                       '<li>в рекламных акциях, отображаемых в середине главной страницы, например, <span class="filename_filepath_or_italic">только что прибыли!</span>.</li></ul>' .
                                                       'Для избежания проблем дизайна, вызванных слишком большими эскизами, миниатюры изменяются. Введите максимальный размер эскизов здесь.',

    'SHOP_THEME_sZoomImageSize'                     => 'Размер увеличенного изображения (ширина*высота)', //SHOP_CONFIG_ZOOMIMAGESIZE
    'SHOP_THEME_sCatThumbnailsize'                  => 'Размер картинки категории (ширина*высота)', //SHOP_CONFIG_CATEGORYTHUMBNAILSIZE
    'HELP_SHOP_THEME_sCatThumbnailsize'             => 'Укажите в этом поле размер изображения категории, открываемого на её странице.', //SHOP_CONFIG_CATEGORYTHUMBNAILSIZE
    'SHOP_THEME_aDetailImageSizes'                  => 'Размер картинки товара (ширина*высота)', //SHOP_CONFIG_DETAILIMAGESIZE

    'SHOP_THEME_sManufacturerIconsize'              => 'Размер логотипа производителя', // Check if this is really manufacturer or if it is more like "brand"
    'HELP_SHOP_THEME_sManufacturerIconsize'         => 'Изображение или логотип производителя, которое отображается в слайдере производителей на главной странице магазина.',

    'SHOP_THEME_sCatIconsize'                       => 'Размер картинки подкатегории (ширина*высота)',
    'HELP_SHOP_THEME_sCatIconsize'                  => 'На странице категории изображения подкатегорий будут выводиться в указанном в этом поле размере.',

    'SHOP_THEME_sCatPromotionsize'                  => 'Размер картинки категории для баннера на главной (ширина*высота)',
    'HELP_SHOP_THEME_sCatPromotionsize'             => 'Укажите в этом поле размер банеров категорий на главной странице магазина для соответствующих промоакций.',

    'SHOP_THEME_blFooterShowHelp'                   => 'Показывать ссылку на Помощь',
    'SHOP_THEME_blFooterShowLinks'                  => 'Показывать ссылку на Ссылки',
    'SHOP_THEME_blFooterShowNewsletter'             => 'Показывать ссылку подписки на новости',
    'SHOP_THEME_blFooterShowNewsletterForm'         => 'Показывать форму подписки на новости',
    'SHOP_THEME_blFooterShowNews'                   => 'Показывать ссылку на новости',
    'SHOP_THEME_bl_showGiftWrapping'                => 'Использовать подарочную упаковку', //SHOP_CONFIG_SHOWGIFTWRAPPING
    'SHOP_THEME_bl_showVouchers'                    => 'Использовать купоны', //SHOP_CONFIG_SHOWVOUCHERS
    'SHOP_THEME_bl_showWishlist'                    => 'Использовать списки желаний', //SHOP_CONFIG_SHOWWISHLIST
    'SHOP_THEME_bl_showCompareList'                 => 'Использовать сравнения', //SHOP_CONFIG_SHOWCOMPARELIST
    'SHOP_THEME_bl_showListmania'                   => 'Использовать публичные списки', //SHOP_CONFIG_SHOWLISTMANIA
    'SHOP_THEME_blShowBirthdayFields'               => 'Отображать поля ввода даты рождения пользователей при регистрации', //SHOP_CONFIG_SHOWBIRTHDAYFIELDS

    'SHOP_THEME_iTopNaviCatCount'                   => 'Количество категорий для меню в шапке', //SHOP_CONFIG_TOPNAVICATCOUNT
    'SHOP_THEME_blShowFinalStep'                    => 'Кнопка подтверждения заказа на последнем шаге его офрмления', //SHOP_SYSTEM_SHOWFINALSTEP
    'SHOP_THEME_iNewBasketItemMessage'              => 'Действие при добавлении товара в корзину', //SHOP_SYSTEM_SHOWNEWBASKETITEMMESSAGE
    'HELP_SHOP_THEME_iNewBasketItemMessage'         => 'При добавлении товара в корзину система магазина может уведомлять пользователей об этом различными способами. Выберите подходящий для вас вариант из списка.', //SHOP_SYSTEM_SHOWNEWBASKETITEMMESSAGE
    'SHOP_THEME_iNewBasketItemMessage_0'            => 'Нет',
    'SHOP_THEME_iNewBasketItemMessage_1'            => 'Показать сообщение',
    'SHOP_THEME_iNewBasketItemMessage_2'            => 'Открыть поп-ап',
    'SHOP_THEME_iNewBasketItemMessage_3'            => 'Открыть корзину',

    'SHOP_THEME_blShowListDisplayType'              => 'Показывать сортировку товаров',
    'HELP_SHOP_THEME_blShowListDisplayType'         => 'Эта опция позволяет определить смогут ли пользователи вашего магазина сортировать товары на его главной странице. Если опция не активна, товары будут отсортированы согласно настройкам "Сортировка товаров по умолчанию".',
    'SHOP_THEME_sDefaultListDisplayType'            => 'Типовой вид списков',
    'SHOP_THEME_sDefaultListDisplayType_grid'       => 'Решётка',
    'SHOP_THEME_sDefaultListDisplayType_line'       => 'Список',
    'SHOP_THEME_sDefaultListDisplayType_infogrid'   => 'Двойная решётка',
    'SHOP_THEME_sStartPageListDisplayType'          => 'Вид сортировки товаров на главной странице магазина',
    'SHOP_THEME_sStartPageListDisplayType_grid'     => 'Сетка',
    'SHOP_THEME_sStartPageListDisplayType_line'     => 'Список',
    'SHOP_THEME_sStartPageListDisplayType_infogrid' => 'Двойная сетка',

    'SHOP_THEME_aNrofCatArticlesInGrid'             => 'Решётка: количество товаров в списках (категории, поиск)<br><br>Внимание: большое количество товаров (выше 100) может повлиять на производительность!',
    'SHOP_THEME_aNrofCatArticles'                   => 'Количество товаров в списках (категории, поиск)<br><br>Внимание: большое количество товаров (выше 100) может повлиять на производительность!',

    'SHOP_THEME_sFacebookUrl'                       => 'Ссылка на страницу в Facebook',
    'HELP_SHOP_THEME_sFacebookUrl'                  => 'Например: https://www.facebook.com/oxidesales',
    'SHOP_THEME_sTwitterUrl'                        => 'Ссылка на профиль в Twitter',
    'HELP_SHOP_THEME_sTwitterUrl'                   => 'Например: https://twitter.com/OXIDforge',
    'SHOP_THEME_sBlogUrl'                           => 'URL блога',
    'HELP_SHOP_THEME_sBlogUrl'                      => 'Например: http://blog.oxid-esales.com',
    'SHOP_THEME_sYouTubeUrl'                        => 'Ссылка на YouTube-канал',
    'HELP_SHOP_THEME_sYouTubeUrl'                   => 'Например: https://www.youtube.com/user/oxidesales',
    'SHOP_THEME_sGooglePlusUrl'                     => 'Ссылка на профиль Google+',
    'HELP_SHOP_THEME_sGooglePlusUrl'                => 'Например: E.g.: https://plus.google.com/communities/105836295757364457233',

    'SHOP_THEME_sGoogleMapsAddr'                    => 'Ваш почтовый адрес',
    'HELP_SHOP_THEME_sGoogleMapsAddr'               => 'Например: OXID eSales AG, Bertoldstraße 48, DE-79098 Freiburg, Германия',

    'SHOP_THEME_bl_showManufacturerSlider'          => 'Показывать слайдер иконок производителей на главной',

    'SHOP_THEME_blUseGAPageTracker'                 => 'Использовать Google Analytics PageTracker',
    'SHOP_THEME_blUseGAEcommerceTracking'           => 'Использовать Google Analytics Ecommerce Tracking',
    'HELP_SHOP_THEME_blUseGAEcommerceTracking'      => 'Пожалуйста, имейте в виду, что эту опцию нужно также активировать в вашем аккаунте Google Analytics. Руководство доступно по этой <a href="https://support.google.com/analytics/answer/1009612?hl=en&ref_topic=1037061" target="_blank">Ссылке</a>.',
    'SHOP_THEME_sGATrackingId'                      => 'Tracking ID системы Google Analytics',
    'HELP_SHOP_THEME_sGATrackingId'                 => 'Например: UA-XXXXXXXX-1',
    'SHOP_THEME_blGAAnonymizeIPs'                   => 'Анонимные IP-адреса',

    'SHOP_THEME_sLogoFile'                          => 'Файл логотипа',
    'HELP_SHOP_THEME_sLogoFile'                     => 'Зависит от пути к папке <code>/out/flow/img/</code>',

    'SHOP_THEME_sLogoWidth'                         => 'Ширина логотипа в шапке',
    'HELP_SHOP_THEME_sLogoWidth'                    => 'Укажите размер в пикселях.',
    'SHOP_THEME_sLogoHeight'                        => 'Высота логотипа в шапке',
    'HELP_SHOP_THEME_sLogoHeight'                   => 'Укажите размер в пикселях.',

    'SHOP_THEME_sEmailLogo'                         => 'Файл лого для шапки писем',
    'HELP_SHOP_THEME_sEmailLogo'                    => 'Относительно к пути <code>/out/flow/img/</code>.',

    'SHOP_THEME_sFaviconFile'                       => 'Файл Favicon',
    'HELP_SHOP_THEME_sFaviconFile'                  => 'Эта иконка отображается во вкладке браузера при открытии вашего магазина.<br>Как правило, это файл формата .ico.<br>Путь к файлу: <code>/out/flow/img/favicons/</code>.',
    'SHOP_THEME_sFavicon16File'                     => 'Файл favicon 16*16px',
    'SHOP_THEME_sFavicon32File'                     => 'Файл favicon 32*32px',
    'SHOP_THEME_sFavicon48File'                     => 'Файл favicon 48*48px',
    'SHOP_THEME_sFavicon64File'                     => 'Файл favicon 64*64px',
    'SHOP_THEME_sFavicon128File'                    => 'Файл favicon 128*128px',
    'SHOP_THEME_sFavicon512File'                    => 'Файл favicon 512*512px',
    'SHOP_THEME_sFaviconMSTileColor'                => 'Цвет плитки для Windows 8/Mobile закладок',
    'HELP_SHOP_THEME_sFaviconMSTileColor'           => 'Например: #D83434',

    'SHOP_THEME_blUseBackground'                    => 'Показать картинку фона',
    'SHOP_THEME_sBackgroundColor'                   => 'Фоновый цвет страниц магазина',
    'HELP_SHOP_THEME_sBackgroundColor'              => 'В формате: #D83434',
    'SHOP_THEME_sBackgroundPath'                    => 'Файл фонового изображения',
    'HELP_SHOP_THEME_sBackgroundPath'               => 'Относительно к пути <code>/out/flow/img/backgrounds/</code>.',
    'SHOP_THEME_sBackgroundRepeat'                  => 'Повторить фон?',
    'SHOP_THEME_sBackgroundRepeat_no-repeat'        => 'Нет',
    'SHOP_THEME_sBackgroundRepeat_repeat-x'         => 'Да, горизонтально',
    'SHOP_THEME_sBackgroundRepeat_repeat-y'         => 'Да, вертикально',
    'SHOP_THEME_sBackgroundRepeat_repeat'           => 'Да, горизонтально и вертикально',
    'SHOP_THEME_sBackgroundPosHorizontal'           => 'Горизонтальное положение',
    'SHOP_THEME_sBackgroundPosHorizontal_left'      => 'слева',
    'SHOP_THEME_sBackgroundPosHorizontal_right'     => 'справа',
    'SHOP_THEME_sBackgroundPosHorizontal_center'    => 'по центру',
    'SHOP_THEME_sBackgroundPosVertical'             => 'Вертикальное положение',
    'SHOP_THEME_sBackgroundPosVertical_top'         => 'верх',
    'SHOP_THEME_sBackgroundPosVertical_bottom'      => 'низ',
    'SHOP_THEME_sBackgroundPosVertical_center'      => 'центр',
    'SHOP_THEME_sBackgroundSize'                    => 'Размер фонового изображения',
    'SHOP_THEME_sBackgroundSize_cover'              => 'обложка (высота)',
    'SHOP_THEME_sBackgroundSize_contain'            => 'обложка (ширина)',
    'SHOP_THEME_sBackgroundSize_normal'             => 'Сохранить исходный размер',
    'SHOP_THEME_blBackgroundAttachment'             => 'Зафиксировать фон при скороле?',
    'SHOP_THEME_blHomeLink'                         => 'Показывать ссылку "Домой" в основной навигации?',
    'SHOP_THEME_bl_showPriceAlarm'                  => 'Использовать нужную цену',

    'SHOP_THEME_blUseGoogleTS'                      => 'Использовать Google Trusted Stores',
    'SHOP_THEME_sGoogleVendorId'                    => 'ID магазина в Google Store',
    'HELP_SHOP_THEME_sGoogleVendorId'               => 'Вы можете найти этот ID в вашем аккаунте Trusted Stores Merchant Dashboard.',
    'SHOP_THEME_sGoogleShoppingAccountId'           => 'ID аккаунта Google Shopping (опционально)',
    'HELP_SHOP_THEME_sGoogleShoppingAccountId'      => 'Заполняйте это поле только если хотите передать данные в систему Google Shopping.<br><br>Account ID от Google Merchant Center. Это значение должно совпадать с ID аккаунта, который вы <a href="https://support.google.com/merchants/answer/188494#US" target="_blank">оформили в Google Shopping</a> через Google Merchant центр. Если у вас MCA аккаунт, используйте ID субаккаунта связанного с товарными данными.',
    'SHOP_THEME_sPageLanguage'                      => 'Язык вашего магазина по системе ISO',
    'HELP_SHOP_THEME_sPageLanguage'                 => 'Код языка должен быть в формате <язык>_<страна><br><br><Язык> это двузначный код в формате ISO 639-1, а <страна> это двузначный код в формате ISO 3166-1 alpha-2. Обычно <страна> указывается заглавными буквами, а <язык> прописными. Например: ru_RU, en_US, en_GB, fr_FR, de_DE, или ja_JP.',
    'SHOP_THEME_sShoppingCountry'                   => 'Google Shopping-Feed страна (опционально)',
    'HELP_SHOP_THEME_sShoppingCountry'              => 'Заполняйте это поле только если вы используете Google Shopping.<br><br>Страна вашего аккаунта должна соответствовать стране, которую вы указали в <a href="https://support.google.com/merchants/answer/188494#US" target="_blank">Google Shopping</a>.<br><br>Значение страны должно быть <a href="http://en.wikipedia.org/wiki/ISO_3166-1_alpha-2" target="_blank">в формате кода ISO 3166</a>.<br><br>Например: RU, GB, AU, FR, DE, JP.',
    'SHOP_THEME_sShoppingLanguage'                  => 'Google Shopping-Feed язык (опционально)',
    'HELP_SHOP_THEME_sShoppingLanguage'             => 'Заполняйте это поле только если вы используете Google Shopping.<br><br>Язык вашего аккаунта должен соответствовать языку, который вы указали в <a href="https://support.google.com/merchants/answer/188494#US" target="_blank">Google Shopping</a>.<br><br>Значение языка должно быть <a href="http://en.wikipedia.org/wiki/ISO_639-1" target="_blank">в формате кода ISO 639-1</a>.<br><br>Например: ru, en, fr, de, ja.',
    'SHOP_THEME_sShippingDaysOnStock'               => 'Количество дней до отправки товара, который <b>в наличии</b> на складе.',
    'HELP_SHOP_THEME_sShippingDaysOnStock'          => 'Среднее время доставки заказов вашим покупателям. Этот параметр отличается от ориентировочного времени доставки.<br><br>Если заказ содержит несколько товаров (в наличии и не в наличии), указывайте наибольшее значение срока.<br><br>Сообщения вашим пользователям должны содержать максимальное значение среднего срока доставки, например, 7 дней, если ваше среднее время доставки 5-7 дней).<br><br>Срок указанный в этом поле будет сообщён покупателям по e-mail.<br><br>После истечения указанного срока пользователям будет отправлено сообщение с предложением оценить покупку в вашем магазине.',
    'SHOP_THEME_sShippingDaysNotOnStock'            => 'Количество дней до отправки товара, которого <b>нет</b> на складе.',
    'HELP_SHOP_THEME_sShippingDaysNotOnStock'       => 'Среднее время доставки заказов вашим покупателям. Этот параметр отличается от ориентировочного времени доставки.<br><br>Если заказ содержит несколько товаров (в наличии и не в наличии), указывайте наибольшее значение срока.<br><br>Сообщения вашим пользователям должны содержать максимальное значение среднего срока доставки, например, 7 дней, если ваше среднее время доставки 5-7 дней).<br><br>Срок указанный в этом поле будет сообщён покупателям по e-mail.<br><br>После истечения указанного срока пользователям будет отправлено сообщение с предложением оценить покупку в вашем магазине.',
    'SHOP_THEME_sDeliveryDaysOnStock'               => 'Количество дней доставки товара, который <b>в наличии</b> на складе.',
    'HELP_SHOP_THEME_sDeliveryDaysOnStock'          => 'Ориентировочная дата доставки заказа. Если заказ содержит различные товары (в наличии и не в наличии), то укажите наибольшее значение. Например, укажите 7 дней при доставке 5-7 дней.',
    'SHOP_THEME_sDeliveryDaysNotOnStock'            => 'Количество дней доставки товара, которого <b>нет</b> на складе.',
    'HELP_SHOP_THEME_sDeliveryDaysNotOnStock'       => 'Ориентировочный срок доставки заказа покупателям. Если заказ содержит товары в наличии и не в наличии, то будет отображаться наибольший срок. Если ваши занчения выражены в днях, указывайте наибольшее из них. Например, 7 дней при сроках доставки 5-7 дней.',

    'SHOP_THEME_blSliderShowImageCaption'           => 'Активировать титры для слайдера на главной странице',
    'HELP_SHOP_THEME_blSliderShowImageCaption'      => 'Будет отображаться название товара, когда он привязан к активному слайду.',

    'SHOP_THEME_blEcondaRecommendationsStart'       => 'Показывать рекомендации econda на главной',
    'SHOP_THEME_sEcondaWidgetIdStart'               => 'ID виджета рекомендаций econda для главной страницы',
    'SHOP_THEME_blEcondaRecommendationsList'        => 'Показывать рекомендации econda в списках',
    'SHOP_THEME_sEcondaWidgetIdList'                => 'ID виджета рекомендаций econda для страницы поиска',
    'SHOP_THEME_blEcondaRecommendationsDetails'     => 'Показывать рекомендации econda на странице товаров',
    'SHOP_THEME_sEcondaWidgetIdDetails'             => 'ID виджета рекомендаций econda для страницы товара',
    'SHOP_THEME_blEcondaRecommendationsBasket'      => 'Показывать рекомендации econda в корзине',
    'SHOP_THEME_sEcondaWidgetIdBasket'              => 'ID виджета рекомендаций econda для корзины',

    'SHOP_THEME_blFullwidthLayout'                      => 'Включить полноэкранный шаблон',

    'SHOP_THEME_blEmailsShowProductPictures'        => 'Отправлять изображения товаров в письмах',
);
