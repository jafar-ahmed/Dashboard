<?php

return [
    'The logo field is required' => 'بغبعبلع',
    'accepted' => 'يجب قبول  :attribute.',
    'active_url' => 'هذا  :attribute  ليس رابط صالحا.',
    'after' => 'يجب أن يكون :attribute تاريخا بعد :date.',
    'after_or_equal' => 'يجب أن يكون :attribute تاريخا بعد أو يساوي :date.',
    'alpha' => 'قد يحتوي :attribute على أحرف فقط.',
    'alpha_dash' => 'قد تحتوي ال :attribute  على أحرف وأرقام وشرطات فقط.',
    'alpha_num' => 'قد تحتوي ال :attribute  على أحرف وأرقام  فقط.',
    'latin' => 'The :attribute may only contain ISO basic Latin alphabet letters.',
    'array' => ':attribute  يجب ان تكون مصفوفة',
    'before' => 'يجب أن يكون :attribute تاريخا قبل :date.',
    'before_or_equal' => 'يجب أن يكون :attribute تاريخا قبل أو يساوي :date.',
    'between' => [
        'numeric' => 'يجب أن يكون :attribute بين  :min و  :max  .',
        'file' => 'يجب أن يكون :attribute بين  :min و  :max  كيلو بايت.',
        'string' => 'يجب أن يكون :attribute بين  :min و  :max  حرف.',
        'array' => 'يجب أن يكون :attribute بين  :min و  :max  نوع.',
    ],
    'boolean' => 'يجب أن يكون :attribute صح او خطأ',
    'confirmed' => 'تأكيد :attribute لا يطابق.',
    'date' => ':attribute  ليست تاريخا صالحا.',
    'date_format' => ':attribute لايتطابق مع الصيغة :format.',
    'different' => 'يجب أن يختلف  :attribute عن :other.',
    'digits' => 'هذا :attribute يجب ان يكون :digits ارقام.',
    'digits_between' => 'هذايجب ان يكون بين :min و :max ارقام.',
    'dimensions' => 'هذه :attribute ذات ابعاد خاطئة.',
    'distinct' => 'هذا :attribute الحقل موجود مسبقا',
    'email' => 'هذا :attribute يجب ان يكون بريد الكتروني صالح',
    'exists' => 'الحقل المختار :attribute غير صالح',
    'file' => 'هذا :attribute يجب ان يكون ملف',
    'filled' => 'هذا :attribute الحقل مطلوب.',
    'gt' => [
        'numeric' => 'يجب أن يكون :attribute أكبر من :value  .',
        'file' => 'يجب أن يكون :attribute أكبر من :value كيلوبايت.',
        'string' => 'يجب أن يكون',
        'array' => 'يجب أن يحتوي :attribute على أكثر من: value عناصر .',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file' => 'The :attribute must be greater than or equal :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal :value characters.',
        'array' => 'The :attribute must have :value items or more.',
    ],
    'image' => 'ال :attribute يجب ان تكون صورة',
    'in' => 'قيمة  :attribute المختارة غير صالحة.',
    'in_array' => 'حقل :attribute غير موجود فى :other.',
    'integer' => 'حقل :attribute يجب ان يكون رقم.',
    'ip' => ':attribute يجب ان يكون عنوان IP صالح.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => ':attribute  يجب ان يكون في صيغة  JSON.',

    'lt' => [
        'numeric' => 'The :attribute must be less than :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'The :attribute must be less than :value characters.',
        'array' => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        'string' => 'The :attribute must be less than or equal :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file' => 'The :attribute may not be greater than :max kilobytes.',
        'string' => 'The :attribute may not be greater than :max characters.',
        'array' => 'The :attribute may not have more than :max items.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'The :attribute must be at least :min.',
        'file' => 'The :attribute must be at least :min kilobytes.',
        'string' => 'The :attribute must be at least :min characters.',
        'array' => 'The :attribute must have at least :min items.',
    ],
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => 'The :attribute must be a number.',
    'present' => 'The :attribute field must be present.',
    'regex' => 'The :attribute format is invalid.',
    'required' => 'The :attribute field is required.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values is present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'numeric' => 'The :attribute must be :size.',
        'file' => 'The :attribute must be :size kilobytes.',
        'string' => 'The :attribute must be :size characters.',
        'array' => 'The :attribute must contain :size items.',
    ],
    'string' => ':attribute يجب ان يكون احرف',
    'timezone' => 'The :attribute must be a valid zone.',
    'unique' => ':attribute مأخوذ من قبل',
    'uploaded' => 'فشلت عملية تحميل :attribute .',
    'url' => ':attribute نوعة غير صحيح',
    'reserved_word' => 'The :attribute contains reserved word',
    'dont_allow_first_letter_number' => 'The \":input\" field can\'t have first letter as a number',
    'exceeds_maximum_number' => 'The :attribute exceeds maximum model length',
    'attributes' => [
        'link' => 'رابط المتجر',
        'model_id' => 'النوع',
        'uses_times' => 'عدد مرات الاستخدام الكلي',
        'uses_times_for_user' => 'عدد مرات الاستخدام للعميل الواحد',
    ],
    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
        'link' => [
            'unique' => 'رابط المتجر غير متوفر',
            'required' => 'رابط المتجر باللغة الإنجليزية مطلوب',
            'alpha_dash' => ' خطأ في صيغة رابط المتجر باللغة الإنجليزية، مسموح فقط أحرف إنجليزية و(.) و (_)',
            'regex' => 'خطأ في صيغة رابط المتجر باللغة الإنجليزية، مسموح فقط أحرف إنجليزية و(.) و (_)',
            'min' => 'رابط المتجر باللغة الإنجليزية، على الأقل 3 حروف.',
            'max' => 'رابط المتجر باللغة الإنجليزية، تجاوز الحد المسموح به.',
        ],
        'amount' => [
            'numeric' => 'قيمة الخصم يجب أن تكون رقم',
            'max' => "يجب الا تزيد قيمة الخصم عن :max ",
            'min' => "يجب الا تقل قيمة الخصم عن :min ",

        ],
        'title_ar' => [
            'required' => 'العنوان مطلوب',
            'max' => 'بحد أقصى للعنوان 60 حرف',
        ],
        'title' => [
            'required' => 'العنوان مطلوب',
            'max' => 'بحد أقصى للعنوان 60 حرف',
        ],
        'details' => [
            'required' => 'التفاصيل مطلوبة',
            'max' => 'بحد أقصى للتفاصيل 60 حرف',
        ],
        'street' => [
            'required' => 'الشارع مطلوب',
            'max' => 'بحد أقصى للشارع 60 حرف',
        ],
        'content_ar' => [
            'required' => 'التفاصيل مطلوبة',
            'max' => 'بحد أقصى للتفاصيل 60 حرف',
        ],
        'phone' => [
            'required' => 'رقم الجوال مطلوب',
            'unique' => 'رقم الجوال مسجل مسبقاً',
            'regex' => " خلل في رقم الجوال ، الرجاء إدخال رقم جوال صحيح",
            'numeric' => " صيغة رقم الجوال غير صالحة",
            'max' => " رقم الجوال طويل للغاية، الرجاء كتابة رقم جوال بشكل صحيح",
        ],
        'mobile' => [
            'required' => 'رقم الجوال مطلوب',
            'digits' => 'عدد الخانات الخاصة برقم الجوال 10 خانات',
            'unique' => 'رقم الجوال مسجل مسبقاً',
            'regex' => " خلل في رقم الجوال ، الرجاء إدخال رقم جوال صحيح",
            'numeric' => " صيغة رقم الجوال غير صالحة",
            'max' => " رقم الجوال طويل للغاية، الرجاء كتابة رقم جوال بشكل صحيح",
        ],
        'email' => [
            'required' => 'البريد الإلكتروني مطلوب',
            'unique' => 'البريد الإلكتروني مسجل مسبقاً',
            'email' => " خلل في كتابة البريد الإلكتروني ، الرجاء إدخال بريد إلكتروني صحيح",
            'string' => " صيغة البريد الإلكتروني غير صالحة",
            'max' => " البريد الإلكتروني طويل للغاية، الرجاء كتابة بريد إلكتروني بشكل صحيح",
        ],
        'name' => [
            'required' => 'الإسم مطلوب',
            'string' => "صيغة الإسم غير صالحة، أدخل نص",
            'max' => "يجب كتابة اسم أقل من 199 خانة",
            'min' => "يجب كتابة 3 حروف على الأقل",
            'unique' => "الإسم المدخل موجود مسبقاً",
            'regex' => "صيغة الإسم غير صالحة، أدخل نص",
        ],
        'first_name' => [
            'required' => 'الإسم الأول مطلوب',
            'string' => "صيغة الإسم الأول غير صالحة، أدخل نص",
            'max' => "يجب كتابة الإسم الأول أقل من 199 خانة",
            'min' => "يجب كتابة 3 حروف على الأقل",
            'unique' => "الإسم الأول المدخل موجود مسبقاً",
            'regex' => "صيغة الإسم الأول غير صالحة، أدخل نص",
        ],
        'role' => [
            'required' => 'نوع الحساب مطلوب',
            'string' => "صيغة نوع الحساب غير صالحة، أدخل نص",
            'in' => "أنواع الحساب: خبير أو باحث أو متعلم",
        ],
        'cv' => [
            'required' => 'ملف السيرةالذاتية مطلوب',
            'file' => 'يجب أن يكون :attribute أكبر من :value كيلوبايت.',
            'mimes' => ' :attribute يجب أن يكون الملف من نوع :values.',

        ],
        'linkedin' => [
            'required' => 'رابط لينكد ان مطلوب',
        ],
        'content' => [
            'required' => 'نص الرسالة مطلوب',
        ],
        'description' => [
            'required' => 'وصف الخبرة مطلوب',
            'string' => "صيغة الوصف غير صالحة، أدخل نص",

        ],
        'desc' => [
            'required' => 'وصف الخبرة مطلوب',
            'string' => "صيغة الوصف غير صالحة، أدخل نص",

        ],
        'last_name' => [
            'required' => 'الإسم الأخير مطلوب',
            'string' => "صيغة الإسم الأخير غير صالحة، أدخل نص",
            'max' => "يجب كتابة الإسم الأخير أقل من 199 خانة",
            'min' => "يجب كتابة 3 حروف على الأقل",
            'unique' => "الإسم الأخير المدخل موجود مسبقاً",
            'regex' => "صيغة الإسم الأخير غير صالحة، أدخل نص",
        ],
        'password' => [
            'required' => "كلمة المرور مطلوبة",
            'min' => "يجب كتابة كلمة مرور 6 خانات على الأقل",
            'string' => "صيغة كلمة المرور غير صالحة، أدخل نص",
            'max' => "يجب كتابة كلمة مرور أقل من 199 خانة",
            'confirmed' => "كلمة المرور وتأكيد كلمة المرور غير متطابقتين",
        ],
        'fcm_token' => [
            'string' => "يجب أن يكون fcm token على شكل نص",
        ],
        'device_type' => [
            'in' => "أنواع الأجهزة: android أو ios",
            'required' => "نوع الجهاز مطلوب",
        ],
        'code' => [
            'required' => "رمز تعيين كلمة المرور مطلوب",
        ],
        'image' => [
            'max' => 'عذراً: لقد تجاوزت الحد المسموح في حجم الصورة: 10ميجابايت'
        ],
        'cover_image' => [
            'max' => 'عذراً: لقد تجاوزت الحد المسموح في حجم الصورة: 10ميجابايت'
        ],

        'name_ar' => [
            'required' => 'اسم المدينة  بالعربي مطلوبة',
            'string' => 'صيغة اسم المدينة  بالعربي خاطئة، يجب أن تكون نصاً',
        ],

        'name_en' => [
            'required' => 'اسم المدينة بالإنجليزية مطلوب',
            'regex' => 'صيغة اسم المدينة بالإنجليزية خاطئة، يجب أن تكون نصاً باللغة الإنجليزية',
            'string' => 'صيغة اسم المدينة بالإنجليزية خاطئة، يجب أن تكون نصاً',
        ],
        'cities' => [
            'required' => 'تحديد المدن مطلوب، مدينة واحدة على الأقل'
        ],
        'categories' => [
            'required' => 'الرجاء اضافة التصنيفات المطلوبة',
        ],
        'categories.*.name' => [
            'required' => 'الرجاء ادخال جميع الحقول المطلوبة',
        ],
        'model_id' => [
            'required' => 'هذا الحقل مطلوب',
        ],
        'external_link' => [
            'required' => 'هذا الحقل مطلوب',
        ],
        'username' => [
            'required' => 'البريد الالكتروني/ رقم الموبايل مطلوب',
        ],
        'feature_title' => 'تأكد من قيم العناوين',
        'feature_title.*' => 'تأكد من قيم العناوين',
        'feature_description' => 'تأكد من قيم الوصف',
        'feature_icon_id_1' => 'تأكد من قيم الأيقونات',
        'feature_icon_id_2' => 'تأكد من قيم الأيقونات',
        'feature_icon_id_3' => 'تأكد من قيم الأيقونات',
    ],

    'password_policy' => 'الرجاء ادخال كمة مرور مكونة من 6 خانات على الاقل',
    'valid_mobile' => 'من فضلك ادخل رقم جوال صحيح مكون من 9 خانات تبدأ ب 5',
    'saudi_valid_mobile' => 'من فضلك ادخل رقم جوال صحيح مكون من 9 خانات تبدأ بـ 5',
    'valid_string' => 'من فضلك ادخل حروف انجليزية فقط',
    'valid_string_arabic' => 'من فضلك ادخل حروف عربية فقط',
    'valid_url' => 'من فضلك ادخل رابط صحيح',
    'valid_google_play' => ' من فضلك ادخل رابط صحيح على متجر قوقل',
    'valid_app_store' => ' من فضلك ادخل رابط صحيح على متجر ابل',
    'valid_facebook_url' => ' من فضلك ادخل رابط فيسبوك صحيح',
    'valid_twitter_url' => ' من فضلك ادخل رابط تويتر صحيح',
    'valid_snapchat_url' => ' من فضلك ادخل رابط سناب شات صحيح',
    'valid_youtube_url' => ' من فضلك ادخل رابط يوتيوب صحيح',
    'valid_instagram_url' => ' من فضلك ادخل رابط انستاجرام صحيح',
    'valid_linkedin_url' => ' من فضلك ادخل رابط لينكد ان صحيح',

];
