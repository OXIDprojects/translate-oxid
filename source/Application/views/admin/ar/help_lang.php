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

'HELP_SHOP_SYSTEM_DISABLENAVBARS'             => '',

'HELP_SHOP_SYSTEM_DEFAULTIMAGEQUALITY'        => '',

'HELP_SHOP_SYSTEM_LDAP'                       => '',

'HELP_SHOP_SYSTEM_SHOWVARIANTREVIEWS'         => '',

'HELP_SHOP_SYSTEM_VARIANTSSELECTION'          => '',

'HELP_SHOP_SYSTEM_VARIANTPARENTBUYABLE'       => '',

'HELP_SHOP_SYSTEM_VARIANTINHERITAMOUNTPRICE'  => '',

'HELP_SHOP_SYSTEM_ISERVERTIMESHIFT'           => '',

'HELP_SHOP_SYSTEM_INLINEIMGEMAIL'             => '',

'HELP_SHOP_SYSTEM_UTILMODULE'                 => '',

'HELP_SHOP_CACHE_ENABLED'                     => 'إذا كان التخزين المؤقت المحتوى الديناميكي النشط، يتم التخزين المؤقت محتويات إضافية لزيادة الأداء. إلغاء تنشيط هذا الإعداد طالما أنك تكيف المحل (كتابة وحدات، تكييف قوالب وهلم جرا).',

'HELP_SHOP_CACHE_LIFETIME'                    => 'هنا يمكنك تعيين عدد الثواني التي يتم حفظ محتويات ذاكرة التخزين المؤقت على الأكثر قبل فيتم إعادة إنشائها. الإعداد الافتراضي 36000 ثانية.',

'HELP_SHOP_CACHE_CLASSES'                     => 'هنا يمكنك تعيين طريقة العرض التي يتم تخزينها مؤقتاً الصفوف. < Br > فقط تغيير هذا الإعداد إذا كنت معتاداً آليات التخزين المؤقت.',

'HELP_SHOP_CACHE_REVERSE_PROXY_ENABLED'       => 'ينشط وكيل HTTP عكس التخزين المؤقت. ملاحظة: لا تستخدم "دينامية محتوى التخزين المؤقت" في نفس الوقت، كما أنها يمكن أن تبطئ الأداء.',

'HELP_SHOP_CACHE_LAYOUT_CACHE_AGE'            => 'تعيين عمر تخطيط الصفحة في ثانية. وسيكون هذا الإرسال عن طريق رؤوس HTTP، تحدد قيمة رأس "العمر".',

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

'HELP_SHOP_CONFIG_NEWARTBYINSERT'             => '',

/** @deprecated since v6.5.4 (2020-04-06); Suggest feature will be removed completely */
'HELP_SHOP_CONFIG_ALLOW_SUGGEST_ARTICLE'      => '',
/** end deprecated */

'HELP_SHOP_CONFIG_SEND_TECHNICAL_INFORMATION_TO_OXID' => '',

'HELP_SHOP_CONFIG_DELETERATINGLOGS'           => 'إذا كان معدل مستخدمي منتج، وأشاروا إلى معدل المنتج مرة أخرى. هنا يمكنك تعيين بعد كم من الأيام المستخدمين المسموح لهم بمعدل منتج مرة أخرى. اتركه فارغاً لتعطيل--يمكن تصنيف المنتجات مرة واحدة فقط لكل مستخدم.',

'HELP_SHOP_CONFIG_DISABLEONLINEVATIDCHECK'    => '',

'HELP_SHOP_CONFIG_ALTVATIDCHECKINTERFACEWSDL' => 'هنا يمكنك إدخال URL بديل للتحقق من معرف ضريبة القيمة المضافة على الإنترنت.',

'HELP_SHOP_CONFIG_PSLOGIN'                    => '',

'HELP_SHOP_CONFIG_BASKETEXCLUDE'              => '',

'HELP_SHOP_CONFIG_BASKETRESERVATION'          => '',

'HELP_SHOP_CONFIG_BASKETRESERVATIONTIMEOUT'   => 'بعد هذه المهلة يتم إرجاع المنتجات المحجوزة للأوراق المالية، ويتم مسح سلة العميل.',

'HELP_SHOP_CONFIG_INVITATION'                 => '',

'HELP_SHOP_CONFIG_POINTSFORINVITATION'        => '',

'HELP_SHOP_CONFIG_POINTSFORREGISTRATION'      => '',

// @deprecated since v6.5.1 (2019-02-07); credit card payment method will be no longer supported
'HELP_SHOP_CONFIG_ATTENTION'                  => '',
// END deprecated

'HELP_SHOP_CONFIG_SHOWTSINTERNATIONALFEESMESSAGE' => '',

'HELP_SHOP_CONFIG_SHOWTSCODMESSAGE'           => '',

'HELP_SHOP_CONFIG_DOWNLOADS'                  => 'تسوق بالمنتجات القابلة للتحميل. تنشيط هنا، أن يمكن أمرت المنتجات وتحميلها.',

'HELP_SHOP_CONFIG_DOWNLOADS_PATH'             => 'المسار حيث يتم تخزين ملفات للمنتجات القابلة للتحميل.',

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

'HELP_ARTICLE_MAIN_ALDPRICE'                  => 'مع أسعار البديل يمكنك إعداد أسعار خاصة لبعض المستخدمين (المستخدم المجموعات "بالسعر"، "السعر ب" و "ج السعر").',

'HELP_ARTICLE_MAIN_VAT'                       => 'هنا يمكنك إدخال ضريبة القيمة المضافة خاصة لهذا المنتج. يتم استخدام هذه الضريبة على القيمة المضافة لهذا المنتج في جميع الحسابات لاحقاً (عربة، ترتيب، والفاتورة)',

'HELP_ARTICLE_EXTEND_UNITQUANTITY'            => '',

'HELP_ARTICLE_EXTEND_EXTURL'                  => 'في عنوان URL خارجي يمكنك أن يتوفر ارتباط حيث كذلك إدخال معلومات حول المنتج (g. هاء في موقع الشركة المصنعة على ويب). في نص لعنوان URL خارجي يمكنك إدخال النص الذي يرتبط، هاء-غ. مزيد من المعلومات على موقع الويب الخاص بالشركة المصنعة.',

'HELP_ARTICLE_EXTEND_TPRICE'                  => 'شرطة الرد السريع يمكنك إدخال سعر التجزئة الموصى به من الشركة المصنعة. إذا قمت بإدخال شرطة الرد السريع أنها يظهر للمستخدمين: خفض من شرطة الرد السريع الآن فقط يتم عرض أعلى من سعر المنتج.',

'HELP_ARTICLE_EXTEND_QUESTIONEMAIL'           => 'يمكنك إدخال عنوان بريد إلكتروني في الاتصال البديل. إذا كان المستخدمون من إرسال الأسئلة في هذا المنتج، سيتم إرسال إلى عنوان البريد الإلكتروني هذا. إذا تم إدخال أي عنوان بريد إلكتروني، سوف يكون الاستعلام الإرسال إلى عنوان البريد الإلكتروني معلومات عادية.',

'HELP_ARTICLE_EXTEND_NONMATERIAL'             => 'إعداد موروثة من الأصل المنتج للمتغيرات وينطبق على المنتج الكامل.',

'HELP_ARTICLE_EXTEND_FREESHIPPING'            => 'إعداد موروثة من الأصل المنتج للمتغيرات وينطبق على المنتج الكامل.',

'HELP_ARTICLE_EXTEND_BLFIXEDPRICE'            => 'تنبيه الأسعار يمكن إيقاف تشغيل لهذا المنتج.',

'HELP_ARTICLE_EXTEND_SKIPDISCOUNTS'           => 'إذا تخطي جميع التخفيضات السلبية نشطاً، لن يتم حساب البدلات السلبية لهذا المنتج. وهذه تشمل خصومات وقسائم.',

'HELP_ARTICLE_EXTEND_TEMPLATE'                => 'يمكن عرض عرض تفاصيل المنتج مع قالب مختلف. للقيام بذلك، قم بإدخال المسار واسم القالب الذي تريد استخدامه.',

'HELP_ARTICLE_EXTEND_ISCONFIGURABLE'          => '',

'HELP_ARTICLE_EXTEND_UPDATEPRICE'             => 'يمكن أن تتغير الأسعار في وقت محدد. ونظرا للمجالات تحديث الأسعار القياسية. إذا قمت بترك الأسعار القيم "0"، لن يتم تحديث الأسعار',

'HELP_ARTICLE_EXTEND_SHOWCUSTOMAGREEMENT'     => 'إذا تم تنشيط هذا الخيار، يكون لدى المستخدمين للتأكد من الشروط والأحكام في الخطوة الرابعة من عملية سحب لهذا العنصر معينة. الرجاء التأكد من تنشيط الخيار العام، وكذلك وعنصر المنتج غير المادي أو للتحميل.',

'HELP_ARTICLE_FILES_MAX_DOWNLOADS_COUNT'      => 'هنا يمكنك تحديد عدد المرات التي يمكن للمستخدم تحميل من نفس الارتباط بعد أمر. لهذا الملف يمكنك الكتابة فوق الإعداد الافتراضي، الذي تم تعريفه في "الإعدادات الرئيسية"-> "الإعداد الأساسية"-> إعدادات-> الأسبوعية لجميع المنتجات.',

'HELP_ARTICLE_FILES_LINK_EXPIRATION_TIME_UNREGISTERED' => 'هنا يمكنك تحديد عدد المرات التي يمكن للمستخدم تحميل من نفس الارتباط، إذا أمرت المستخدم دون تسجيل. لهذا الملف يمكنك الكتابة فوق الإعداد الافتراضي، الذي تم تعريفه في "الإعدادات الرئيسية"-> "الإعداد الأساسية"-> إعدادات-> الأسبوعية لجميع المنتجات.',

'HELP_ARTICLE_FILES_LINK_EXPIRATION_TIME'     => 'تحديد الوقت بالساعات، ووصلة التحميل صالحة بعد أمر. لهذا الملف يمكنك الكتابة فوق الإعداد الافتراضي، الذي تم تعريفه في "الإعدادات الرئيسية"-> "الإعداد الأساسية"-> إعدادات-> الأسبوعية لجميع المنتجات.',

'HELP_ARTICLE_FILES_NEW'                      => 'قم بإدخال الاسم عن طريق FTP نقل الملف أو قم بتحميل ملف جديد هنا. لاحظ أن ملفات كبيرة ينبغي تحميلها عبر بروتوكول نقل الملفات. الحد من حجم الملف صالحاً فقط عندما يتم تحميل الملف عن طريق الإدارة. هذا التقييد يعتمد على إعدادات الخادم PHP ويمكن تحريرها فقط هناك.',

'HELP_ARTICLE_FILES_DOWNLOAD_EXPIRATION_TIME' => 'حدد الوقت بالساعات، ووصلة التحميل صالحة بعد التحميل الأولى. لهذا الملف يمكنك الكتابة فوق الإعداد الافتراضي، الذي تم تعريفه في "الإعدادات الرئيسية"-> "الإعداد الأساسية"-> إعدادات-> الأسبوعية لجميع المنتجات.',

'HELP_ARTICLE_PICTURES_ICON'                  => '',

'HELP_ARTICLE_PICTURES_THUMB'                 => '',

'HELP_ARTICLE_PICTURES_PIC1'                  => '',

'HELP_ARTICLE_PICTURES_ZOOM1'                 => '',

'HELP_ARTICLE_STOCK_REMINDACTIV'              => 'إعداد موروثة من الأصل المنتج للمتغيرات وينطبق على المنتج الكامل.',

'HELP_ARTICLE_STOCK_STOCKFLAG'                => '',

'HELP_ARTICLE_IS_DOWNLOADABLE'                => 'يمكن تحميل الملفات من هذا المنتج.',

'HELP_ARTICLE_STOCK_REMINDAMAOUNT'            => 'إرسال رسالة بريد إلكتروني إذا كان المخزون أقل من قيمة يمكنك تحديد أنه سيتم إرسال بريد إلكتروني بمجرد أن مستوى المخزون أقل من القيمة التي تم إدخالها. حدد خانة الاختيار، ثم أدخل المستوى الذي تريد أن يتم إعلامك.',

'HELP_ARTICLE_STOCK_DELIVERY'                 => 'هنا يمكنك إدخال التاريخ عند المنتج سوف تكون متاحة مرة أخرى إذا كان يباع. التنسيق هو السنة-الشهر-اليوم، هاء زاي 2009-02-16.',

'HELP_ARTICLE_SEO_FIXED'                      => 'يمكنك أن تدع eShop حساب "عناوين كبار المسئولين الاقتصاديين". صفحة منتج يحصل كبار المسئولين الاقتصاديين عنوان URL الجديد إذا تم تغيير عنوان المنتج زاي هاء. تحديد عنوان URL محدد يمنع هذا: إذا كان نشطاً والقديم هو إبقاء "كبار المسئولين الاقتصاديين عنوان" ويحسب لا URL جديد في جنوب شرقي أوروبا.',

'HELP_ARTICLE_SEO_KEYWORDS'                   => 'تتكامل هذه الكلمات الأساسية في sourcecode HTML لصفحة المنتج (ميتا الكلمات الرئيسية). يتم استخدام هذه المعلومات عن طريق محركات البحث. يمكن إدخال الكلمات الرئيسية المناسبة للمنتج هنا. إذا كان فارغاً، يتم إنشاء الكلمات الأساسية تلقائياً.',

'HELP_ARTICLE_SEO_DESCRIPTION'                => 'تم دمج هذا الوصف في sourcecode HTML لصفحة المنتج (وصف ميتا). غالباً ما يتم عرض هذا النص في صفحات نتائج محركات البحث. يمكن إدخال وصف مناسب هنا. إذا كان فارغاً، يتم إنشاء الوصف تلقائياً.',

'HELP_ARTICLE_SEO_ACTCAT'                     => 'يمكنك تحديد عدة "عناوين كبار المسئولين الاقتصاديين" للمنتجات: لبعض الفئات وصفحات الشركة المصنعة. مع الفئة النشطة/المورد يمكنك تحديد عنوان URL الذي تريد تحريره كبار المسئولين الاقتصاديين.',

'HELP_ARTICLE_STOCK_STOCKTEXT'                => 'هنا يمكنك إدخال رسالة التي تظهر إذا كان المنتج في المخزون.',

'HELP_ARTICLE_STOCK_NOSTOCKTEXT'              => 'هنا يمكنك إدخال رسالة التي تظهر إذا كان المنتج من المخزون.',

'HELP_ARTICLE_STOCK_AMOUNTPRICE_AMOUNTFROM'   => 'في كمية من/إلى/مكررا يمكنك تعيين الكمية التي يتراوح الحجم الأسعار صالحة ل.',

'HELP_ARTICLE_STOCK_AMOUNTPRICE_PRICE'        => '',

'HELP_ARTICLE_VARIANT_VARNAME'                => 'ويعرف اسم التحديد كيف يسمى اختيار القياسية، مثل اللون أو الحجم.',

'HELP_ATTRIBUTE_MAIN_DISPLAYINBASKET'         => 'في حالة تحديد قيمة هذه السمة سيظهر في نظرة عامة على عربة والنظام تحت عنوان المنتج',

'HELP_CATEGORY_MAIN_HIDDEN'                   => 'مع مخفي < ou يمكن تحديد إذا كان يتم إظهار هذه الفئة للمستخدمين. إذا كان مخفياً فئة فإنه لا يظهر للمستخدمين، حتى لو كان نشطة.',

'HELP_CATEGORY_MAIN_PARENTID'                 => '',

'HELP_CATEGORY_MAIN_EXTLINK'                  => 'مع ارتباط خارجي، يمكنك إدخال ارتباط يفتح عندما ينقر المستخدمون على الفئة. استخدام هذه الدالة فقط إذا كنت تريد لعرض ارتباط في فئة الملاحة. فإنه يتسبب بهذه الفئة أن تفقد وظيفتها العادية!',

'HELP_CATEGORY_MAIN_PRICEFROMTILL'            => '',

'HELP_CATEGORY_MAIN_DEFSORT'                  => 'مع سرعة الفرز يمكنك تحديد الطريقة التي سيتم فرز المنتجات في الفئة.',

'HELP_CATEGORY_MAIN_SORT'                     => 'يمكنك استخدام الفرز لتحديد الترتيب الذي يتم عرض الفئات: يتم عرض الفئة مع أقل عدد في الجزء العلوي، والفئة مع أعلى عدد في الجزء السفلي.',

'HELP_CATEGORY_MAIN_THUMB'                    => '',

'HELP_CATEGORY_MAIN_PROMOTION_ICON'           => 'مع رمز الترويج و تحميل رمز يمكنك تحميل صورة فئة للترقية على الصفحة الرئيسية. لعرض الفئة تعزيز بحيرة إعدادات الرئيسية-> معلومات العملاء-> أعلى تقدم في فئات',

'HELP_CATEGORY_MAIN_SKIPDISCOUNTS'            => 'لن يتم حساب
إذا تخطي جميع التخفيضات السلبية هو البدلات السلبية والنشطة لأي من المنتجات في هذه الفئة.',

'HELP_CATEGORY_SEO_FIXED'                     => 'يمكنك أن تدع eShop حساب "عناوين كبار المسئولين الاقتصاديين". صفحة فئة يحصل كبار المسئولين الاقتصاديين عنوان URL الجديد إذا تم تغيير عنوان الفئة هاء زاي. تحديد عنوان URL محدد يمنع هذا: إذا كان نشطاً والقديم هو إبقاء "كبار المسئولين الاقتصاديين عنوان" ويحسب لا URL جديد في جنوب شرقي أوروبا',

'HELP_CATEGORY_SEO_KEYWORDS'                  => 'تتكامل هذه الكلمات الأساسية في sourcecode HTML لصفحة الفئة (ميتا الكلمات الرئيسية). يتم استخدام هذه المعلومات عن طريق محركات البحث. الكلمات الرئيسية المناسبة للفئة التي يمكن إدخالها هنا. إذا كان فارغاً، يتم إنشاء الكلمات الأساسية تلقائياً.',

'HELP_CATEGORY_SEO_DESCRIPTION'               => 'تم دمج هذا الوصف في sourcecode HTML لصفحة الفئة (وصف ميتا). غالباً ما يتم عرض هذا النص في صفحات نتائج محركات البحث. يمكن إدخال وصف مناسب هنا. إذا كان فارغاً، يتم إنشاء الوصف تلقائياً.',

'HELP_CATEGORY_SEO_SHOWSUFFIX'                => 'باستخدام هذا الإعداد يمكنك تحديد إذا كانت لاحقة العنوان يرد في عنوان نافذة المتصفح عند فتح صفحة الفئة. يمكن تعيين لاحقة العنوان في "إعدادات الرئيسية"-> "الإعدادات الأساسية"-> كبار المسئولين الاقتصاديين-> "لاحقة العنوان".',

'HELP_CONTENT_MAIN_SNIPPET'                   => 'إذا قمت بتحديد أجزاء التعليمات البرمجية المتكررة يمكنك تضمين هذه الصفحة اتفاقية الأنواع المهاجرة داخل الصفحات الأخرى اتفاقية الأنواع المهاجرة بالتعريف به: [{التعريف أوكسكونتينت = ident_of_the_cms_page}]',

'HELP_CONTENT_MAIN_MAINMENU'                  => 'إذا قمت بتحديد القائمة العلوية، يظهر ارتباط إلى هذه الصفحة اتفاقية الأنواع المهاجرة في القائمة العليا (في المصطلحات وبنا).',

'HELP_CONTENT_MAIN_CATEGORY'                  => 'إذا قمت بتحديد الفئة، يظهر ارتباط إلى هذه الصفحة اتفاقية الأنواع المهاجرة في الملاحة فئة دون الفئات الأخرى.',

'HELP_CONTENT_MAIN_MANUAL'                    => 'إذا قمت بتحديد يدوياً، يتم إنشاء ارتباط الذي يمكنك استخدامه لتضمين هذه الصفحة اتفاقية الأنواع المهاجرة في صفحات اتفاقية الأنواع المهاجرة الأخرى. يظهر الارتباط أدناه عند النقر فوق حفظ',

'HELP_CONTENT_SEO_FIXED'                      => 'يمكنك أن تدع eShop حساب "عناوين كبار المسئولين الاقتصاديين". صفحة اتفاقية الأنواع المهاجرة يحصل كبار المسئولين الاقتصاديين عنوان URL الجديد إذا تم تغيير عنوان الصفحة CMS زاي هاء. تحديد عنوان URL محدد يمنع هذا: إذا كان نشطاً والقديم هو إبقاء "كبار المسئولين الاقتصاديين عنوان" ويحسب لا URL جديد في جنوب شرقي أوروبا.',

'HELP_CONTENT_SEO_KEYWORDS'                   => 'تتكامل هذه الكلمات الأساسية في sourcecode HTML لصفحة اتفاقية الأنواع المهاجرة (ميتا الكلمات الرئيسية). يتم استخدام هذه المعلومات عن طريق محركات البحث. الكلمات الرئيسية المناسبة لصفحة اتفاقية الأنواع المهاجرة التي يمكن إدخالها هنا. إذا كان فارغاً، يتم إنشاء الكلمات الأساسية تلقائياً.',

'HELP_CONTENT_SEO_DESCRIPTION'                => 'تم دمج هذا الوصف في sourcecode HTML لصفحة اتفاقية الأنواع المهاجرة (وصف ميتا). غالباً ما يتم عرض هذا النص في صفحات نتائج محركات البحث. يمكن إدخال وصف مناسب هنا. إذا كان فارغاً، يتم إنشاء الوصف تلقائياً.',

'HELP_DELIVERY_MAIN_COUNTRULES'               => '',

'HELP_DELIVERY_MAIN_CONDITION'                => '',

'HELP_DELIVERY_MAIN_PRICE'                    => '',

'HELP_DELIVERY_MAIN_ORDER'                    => 'يمكنك استخدام معالجة أمر القاعدة لتحديد الترتيب الذي سيتم تشغيل النقل البحري تكلفة النظام. يتم تشغيل القاعدة تكلفة الشحن مع عدد أدنى الأولى. الأمر مهم إذا كان يتم استخدام الإعداد لا يحسب كذلك القواعد إذا تطابق هذه القاعدة.',

'HELP_DELIVERY_MAIN_FINALIZE'                 => 'يمكنك استخدام لا يحسب كذلك القواعد إذا تطابق هذه القاعدة لتحديد أن يتم تشغيلها إذا كانت هذه القاعدة تكلفة الشحن صالحاً، ويتم تشغيل أية قواعد أخرى. لاستخدام هذا الخيار، المهم بالترتيب الذي يتم تشغيل القواعد تكلفة الشحن. يتم تحديده من خلال معالجة "أمر القاعدة".',

'HELP_DELIVERYSET_MAIN_POS'                   => 'فرز يحدد الترتيب الذي يتم عرض طرق الشحن للمستخدمين: أسلوب الشحن مع عدد أدنى يتم عرضها في الجزء العلوي.',

'HELP_DISCOUNT_MAIN_SORT'                     => '',

'HELP_DISCOUNT_MAIN_PRICE'                    => 'يمكنك استخدام سعر الشراء لتحديد أن الخصم صالحة فقط لبعض أسعار الشراء. إذا كان الخصم أن تكون صالحة لجميع أسعار الشراء، 0 من و 0 الدخول.',

'HELP_DISCOUNT_MAIN_AMOUNT'                   => 'يمكنك استخدام الكمية لتحديد أن الخصم صالحة فقط لشراء كميات معينة. إذا كنت تريد للخصم لتكون صالحة لكل شراء كميات، أدخل 0 في من و إلى 0.',

'HELP_DISCOUNT_MAIN_REBATE'                   => '',

'HELP_GENERAL_SEO_ACTCAT'                     => 'يمكنك تحديد عدة "عناوين كبار المسئولين الاقتصاديين" للمنتجات: لبعض الفئات وصفحات الشركة المصنعة. مع الفئة النشطة/المورد يمكنك تحديد عنوان URL الذي تريد تحريره كبار المسئولين الاقتصاديين.',

'HELP_GENERAL_SEO_FIXED'                      => 'EShop حسابها تلقائياً "عناوين كبار المسئولين الاقتصاديين". على سبيل المثال، تحصل صفحة منتج URL كبار المسئولين الاقتصاديين الجديد إذا تم تغيير عنوان المنتج. وضع ثابت محدد موقع المعلومات يمنع إعادة الحساب: إذا نشطة والقديم إبقاء "كبار المسئولين الاقتصاديين عنوان" ويتم إنشاء لا URL جديد في جنوب شرقي أوروبا.',

'HELP_GENERAL_SEO_SHOWSUFFIX'                 => 'باستخدام هذا الإعداد، يمكنك تحديد إذا كان العنوان لاحقة يتم عرض في المستعرض نافذة عنوان الصفحة وفقا عند فتحها. يمكن تعيين لاحقة العنوان في الإعدادات الرئيسية-> الإعدادات الأساسية-> كبار المسئولين الاقتصاديين-> العنوان لاحقة.',

'HELP_GENERAL_SEO_OXKEYWORDS'                 => 'هذه الكلمات هي sourcecode (ميتا الكلمات الرئيسية) المتكاملة في HTML. يتم استخدام هذه المعلومات عن طريق محركات البحث. يمكن إدخال الكلمات الرئيسية المناسبة للمنتج هنا. إذا كان فارغاً، يتم إنشاء الكلمات الأساسية تلقائياً.',

'HELP_GENERAL_SEO_OXDESCRIPTION'              => 'هذا الوصف هو sourcecode (وصف ميتا) المتكاملة في HTML. غالباً ما يتم عرض هذا النص في صفحات نتائج محركات البحث. يمكن إدخال وصف مناسب هنا. إذا كان فارغاً، يتم إنشاء الوصف تلقائياً.',

'HELP_GENIMPORT_FIRSTCOLHEADER'               => 'تنشيط هذا الإعداد إذا كان السطر الأول من ملف CSV يحتوي على أسماء أعمدة قاعدة البيانات قيم CSV يجب تعيينه إلى. يتم تعيين القيم تلقائياً إلى أعمدة قاعدة البيانات.',

'HELP_GENIMPORT_REPEATIMPORT'                 => 'إذا كان هذا الإعداد النشط، ويرد خطوة واحدة بعد نجاح عملية الاستيراد حتى تتمكن من بدء الاستيراد التالي فورا.',

'HELP_LANGUAGE_DEFAULT'                       => 'يتم استخدام اللغة الافتراضية عند المحل غير قادر على الكشف عن اللغة بطرق أخرى: لم يتم تعريف محدد موقع معلومات url معرف اللغة، ولا يمكن الكشف عنها بواسطة المستعرض، لم يتم تعريفه في الدورة إلخ. يمكن فقط تعطيل اللغة الافتراضية، وحذف غير ممكن.',

'HELP_LANGUAGE_ACTIVE'                        => 'يعرف هذا الخيار توافر اللغة في الواجهة ل eShop: إذا تنشيطه-اللغة يتوفر في الواجهة. للعمل في مجال الإدارة هذه اللغة دائماً متاحة؛ هو إذا حتى تعطيله للواجهة.',

'HELP_PAYMENT_MAIN_SORT'                      => 'في الفرز يمكنك تحديد الترتيب الذي يتم طرق الدفع ليتم عرضها للمستخدمين: يتم عرض طريقة الدفع مع أقل عدد الفرز في الأعلى.',

'HELP_PAYMENT_MAIN_FROMBONI'                  => 'يمكنك استخدام الحد الأدنى من التصنيف الائتماني لتحديد أن طرق الدفع فقط المتاحة للمستخدمين الذين لديهم مؤشر ائتمان معينة أو أعلى. يمكنك إدخال المستخدم إلى إدارة المستخدمين-> المستخدمين-> الموسعة الائتماني لكل منهما.',

'HELP_PAYMENT_MAIN_SELECTED'                  => 'يمكنك استخدام المحدد لتحديد طريقة الدفع التي يتم تحديدها كالأسلوب الافتراضي إذا كان يمكن للمستخدم الاختيار بين عدة طرق الدفع.',

'HELP_PAYMENT_MAIN_AMOUNT'                    => '',

'HELP_PAYMENT_MAIN_ADDPRICE'                  => '',

'HELP_PAYMENT_MAIN_ADDSUMRULES'               => 'عند حساب السعر لقاء تكلفة إضافية أو تخفيض، يستخدم قيمة السلة كقاعدة. تحديد ما سوف تكون التكاليف المدرجة عند حساب قيمة السلة.',

'HELP_SELECTLIST_MAIN_TITLEIDENT'             => 'في العمل العنوان، يمكنك أن يتم إدخال اسم إضافية لم يتم عرضها للمستخدمين لجهاز eShop. يمكنك استخدام عنوان العمل للتفريق بين قوائم الاختيار مماثلة (مثل الأحجام عن سراويل) وأحجام للقمصان.',

'HELP_SELECTLIST_MAIN_FIELDS'                 => 'يتم عرض كافة الخيارات المتاحة القائمة في الحقول. يمكنك استخدام حقول الإدخال إلى اليمين لإعداد خيارات جديدة.',

'HELP_USER_MAIN_HASPASSWORD'                  => '',

'HELP_USER_PAYMENT_METHODS'                   => '',

'HELP_USER_EXTEND_NEWSLETTER'                 => '',

'HELP_USER_EXTEND_EMAILFAILED'                => '',

'HELP_USER_EXTEND_BONI'                       => '',

'HELP_MANUFACTURER_MAIN_ICON'                 => 'مع الرمز و تحميل رمز يمكنك تحميل صورة لهذه الشركة المصنعة (مثل الشعار). في تحميل الرمز، حدد الصورة التي تريد تحميلها. عند النقر فوق حفظ يتم تحميل الصورة. بعد تحميل، يظهر اسم الملف في الرمز.',

'HELP_MANUFACTURER_SEO_FIXED'                 => 'يمكنك أن تدع eShop حساب "عناوين كبار المسئولين الاقتصاديين". الشركة المصنعة ليحصل على هذه صفحة URL كبار المسئولين الاقتصاديين الجديد إذا تم تغيير عنوان الشركة المصنعة زاي هاء. يمنع هذا الإعداد الثابتة URL: إذا كان نشطاً والقديم هو إبقاء "كبار المسئولين الاقتصاديين عنوان" ويحسب لا URL جديد في جنوب شرقي أوروبا.',

'HELP_MANUFACTURER_SEO_KEYWORDS'              => 'تتكامل هذه الكلمات في sourcecode HTML لصفحة الشركة المصنعة (ميتا الكلمات الرئيسية). يتم استخدام هذه المعلومات عن طريق محركات البحث. يمكن هنا إدخال الكلمات الرئيسية المناسبة للشركة المصنعة. إذا ترك فارغاً، يتم إنشاء الكلمات الأساسية تلقائياً.',

'HELP_MANUFACTURER_SEO_DESCRIPTION'           => 'تم دمج هذا الوصف في sourcecode HTML لصفحة الشركة المصنعة (وصف ميتا). غالباً ما يتم عرض هذا النص في صفحات نتائج محركات البحث. يمكن إدخال وصف مناسب هنا. إذا ترك فارغاً، يتم إنشاء الوصف تلقائياً.',

'HELP_MANUFACTURER_SEO_SHOWSUFFIX'            => 'باستخدام هذا الإعداد، يمكنك تحديد إذا كان العنوان لاحقة يظهر في نافذة المتصفح الشركة المصنعة عنوان الصفحة عند فتحها. يمكن تعيين لاحقة العنوان في الإعدادات الرئيسية-> الإعدادات الأساسية-> كبار المسئولين الاقتصاديين-> العنوان لاحقة.',

'HELP_VOUCHERSERIE_MAIN_DISCOUNT'             => '',

'HELP_VOUCHERSERIE_MAIN_ALLOWSAMESERIES'      => '',

'HELP_VOUCHERSERIE_MAIN_ALLOWOTHERSERIES'     => '',

'HELP_VOUCHERSERIE_MAIN_SAMESEROTHERORDER'    => '',

'HELP_VOUCHERSERIE_MAIN_RANDOMNUM'            => '',

'HELP_VOUCHERSERIE_MAIN_VOUCHERNUM'           => '',

'HELP_VOUCHERSERIE_MAIN_CALCULATEONCE'        => '',

'HELP_WRAPPING_MAIN_PICTURE'                  => '',

'HELP_PROMOTIONS_BANNER_PICTUREANDLINK'       => 'قم بتحميل صورة الشعار وأدخل عنوان URL للشعار والذي  سيتم استخدامه عند النقر على البانر. إذا تم تعيين المنتج على البانر ولم يتم إدخال عنوان URL ، فسيتم استخدام رابط المنتج المعين عند النقر على البانر.',

'HELP_SHOP_PERF_SEO_CACHE'                    => '',

'HELP_ALTERNATIVE_IMAGE_SERVER_NOTE'          => 'يمكن تحديد URL بديل إلى الملقم البعيد الصورة في تكوين ملف config.inc.php بإعداد سالتيماجيورل و سسلالتيماجيورل. سيتم تحميل الصور < Br > وهكذا جميع المنتجات من هذا الخادم البديل بدلاً من واحد محلي. ومع ذلك، يتم تخزين الملفات التي يتم تحميلها محلياً. وفي هذه الحالة قد مزامنة إلى ملقم خارجي القيام بذلك يدوياً أو مع البرامج النصية المخصصة.',

'HELP_SHOP_RDFA_CONTENT_OFFERER'              => '',

'HELP_SHOP_RDFA_CONTENT_PAYMENT'              => '',

'HELP_SHOP_RDFA_CONTENT_DELIVERY'             => '',

'HELP_SHOP_RDFA_VAT'                          => '',

'HELP_SHOP_RDFA_DURATION_PRICES'              => '',

'HELP_SHOP_RDFA_LOGO_URL'                     => '',

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

'HELP_SHOP_CONFIG_ADDITIONAL_SERVICE_VAT_CALCULATION_BIGGEST_NET'  => 'ويستخدم لحساب معدل ضريبة القيمة المضافة المنتجات التي يكون صافي القيمة الأكبر في سلة التسوق،.',

'HELP_SHOP_CONFIG_ADDITIONAL_SERVICE_VAT_CALCULATION_PROPORTIONAL' => 'يستخدم لحساب النسبة المئوية للمنتجات في سلة التسوق بنفس معدل ضريبة القيمة المضافة.',

'HELP_SHOP_CONFIG_VIEWNETPRICE'               => '',

'HELP_SHOP_CONFIG_ENTERNETPRICE'              => '',

'HELP_REVERSE_PROXY_GET_FRONTEND'             => 'يتحقق مما إذا كان الوكيل العكسي متوفرة للواجهة. يتم التحقق من رأس صفحة البدء للمحل. يمكن أن تفشل الاختبار < br > إذا استخدمت نطاقات مختلفة أو البروتوكولات (http/https) للوحة المشرف وواجهة المتجر.',

'HELP_REVERSE_PROXY_GET_BACKEND'              => 'يتم عرض المجال المشرف دون وكيل عكسي. عدم تلقي could\'t رأس الورنيش.',

'HELP_SHOP_CONFIG_DEBIT_OLD_BANK_INFORMATION_NOT_ALLOWED' => 'يمكن إدخال الايبان وبيك فقط أثناء السحب. يمكن فقط إدخال رقم الحساب البنكي وكود البنك إذا لم يتم تنشيط خانة الاختيار هذه.',

'HELP_SHOP_CONFIG_ENABLE_INTANGIBLE_PRODUCTS_AGREEMENT'   => 'إذا تم تنشيط هذا الخيار، يكون لدى المستخدمين للتأكد من أحكام وشروط للمنتجات غير الملموسة أو يمكن تحميلها في الخطوة الرابعة من عملية السحب. الرجاء التأكد من تمكين هذا الخيار لعنصر محدد كذلك!',

'HELP_SHOP_CONFIG_FIELDS_CONTACTFORM'         => '',
];
