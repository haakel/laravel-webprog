<?php

return [

    /*
    |--------------------------------------------------------------------------
    | خطاهای اعتبارسنجی
    |--------------------------------------------------------------------------
    |
    | این خطوط زبانی شامل پیام‌های پیش‌فرض خطاهای استفاده شده توسط کلاس اعتبارسنجی (validator) هستند.
    | برخی از این قوانین نسخه‌های مختلفی دارند، مانند قوانین اندازه. آزادانه می‌توانید
    | هر یک از این پیام‌ها را در اینجا تنظیم کنید.
    |
    */

    'accepted' => 'فیلد :attribute باید پذیرفته شود.',
    'accepted_if' => 'فیلد :attribute باید پذیرفته شود وقتی که :other برابر با :value باشد.',
    'active_url' => 'فیلد :attribute باید یک آدرس URL معتبر باشد.',
    'after' => 'فیلد :attribute باید تاریخی بعد از :date باشد.',
    'after_or_equal' => 'فیلد :attribute باید تاریخی بعد یا مساوی با :date باشد.',
    'alpha' => 'فیلد :attribute فقط باید شامل حروف باشد.',
    'alpha_dash' => 'فیلد :attribute فقط باید شامل حروف، اعداد، خط تیره و زیرخط باشد.',
    'alpha_num' => 'فیلد :attribute فقط باید شامل حروف و اعداد باشد.',
    'any_of' => 'فیلد :attribute نامعتبر است.',
    'array' => 'فیلد :attribute باید یک آرایه باشد.',
    'ascii' => 'فیلد :attribute فقط باید شامل کاراکترها و نمادهای الفبایی تک‌بایتی باشد.',
    'before' => 'فیلد :attribute باید تاریخی قبل از :date باشد.',
    'before_or_equal' => 'فیلد :attribute باید تاریخی قبل یا مساوی با :date باشد.',
    'between' => [
        'array' => 'فیلد :attribute باید بین :min و :max آیتم داشته باشد.',
        'file' => 'فیلد :attribute باید بین :min و :max کیلوبایت باشد.',
        'numeric' => 'فیلد :attribute باید بین :min و :max باشد.',
        'string' => 'فیلد :attribute باید بین :min و :max کاراکتر باشد.',
    ],
    'boolean' => 'فیلد :attribute باید مقدار درست (true) یا نادرست (false) داشته باشد.',
    'can' => 'فیلد :attribute شامل مقداری غیرمجاز است.',
    'confirmed' => 'تأیید فیلد :attribute با مقدار اصلی مطابقت ندارد.',
    'contains' => 'فیلد :attribute مقدار مورد نیاز را ندارد.',
    'current_password' => 'رمز عبور نادرست است.',
    'date' => 'فیلد :attribute باید یک تاریخ معتبر باشد.',
    'date_equals' => 'فیلد :attribute باید تاریخی برابر با :date باشد.',
    'date_format' => 'فیلد :attribute با فرمت :format مطابقت ندارد.',
    'decimal' => 'فیلد :attribute باید :decimal رقم اعشار داشته باشد.',
    'declined' => 'فیلد :attribute باید رد شود.',
    'declined_if' => 'فیلد :attribute باید رد شود وقتی که :other برابر با :value باشد.',
    'different' => 'فیلد :attribute و :other باید متفاوت باشند.',
    'digits' => 'فیلد :attribute باید :digits رقم باشد.',
    'digits_between' => 'فیلد :attribute باید بین :min و :max رقم باشد.',
    'dimensions' => 'فیلد :attribute ابعاد تصویر نامعتبر دارد.',
    'distinct' => 'فیلد :attribute دارای مقدار تکراری است.',
    'doesnt_end_with' => 'فیلد :attribute نباید با یکی از موارد زیر خاتمه یابد: :values.',
    'doesnt_start_with' => 'فیلد :attribute نباید با یکی از موارد زیر شروع شود: :values.',
    'email' => 'فیلد :attribute باید یک آدرس ایمیل معتبر باشد.',
    'ends_with' => 'فیلد :attribute باید با یکی از موارد زیر خاتمه یابد: :values.',
    'enum' => ':attribute انتخاب‌شده نامعتبر است.',
    'exists' => ':attribute انتخاب‌شده نامعتبر است.',
    'extensions' => 'فیلد :attribute باید یکی از پسوندهای زیر را داشته باشد: :values.',
    'file' => 'فیلد :attribute باید یک فایل باشد.',
    'filled' => 'فیلد :attribute باید دارای مقدار باشد.',
    'gt' => [
        'array' => 'فیلد :attribute باید بیشتر از :value آیتم داشته باشد.',
        'file' => 'فیلد :attribute باید بیشتر از :value کیلوبایت باشد.',
        'numeric' => 'فیلد :attribute باید بزرگتر از :value باشد.',
        'string' => 'فیلد :attribute باید بیشتر از :value کاراکتر داشته باشد.',
    ],
    'gte' => [
        'array' => 'فیلد :attribute باید حداقل :value آیتم یا بیشتر داشته باشد.',
        'file' => 'فیلد :attribute باید بزرگتر یا مساوی :value کیلوبایت باشد.',
        'numeric' => 'فیلد :attribute باید بزرگتر یا مساوی :value باشد.',
        'string' => 'فیلد :attribute باید بزرگتر یا مساوی :value کاراکتر باشد.',
    ],
    'hex_color' => 'فیلد :attribute باید یک رنگ شش‌شانزده‌تایی (hex) معتبر باشد.',
    'image' => 'فیلد :attribute باید یک تصویر باشد.',
    'in' => ':attribute انتخاب‌شده نامعتبر است.',
    'in_array' => 'فیلد :attribute باید در :other وجود داشته باشد.',
    'in_array_keys' => 'فیلد :attribute باید حداقل شامل یکی از کلیدهای زیر باشد: :values.',
    'integer' => 'فیلد :attribute باید یک عدد صحیح باشد.',
    'ip' => 'فیلد :attribute باید یک آدرس IP معتبر باشد.',
    'ipv4' => 'فیلد :attribute باید یک آدرس IPv4 معتبر باشد.',
    'ipv6' => 'فیلد :attribute باید یک آدرس IPv6 معتبر باشد.',
    'json' => 'فیلد :attribute باید یک رشته JSON معتبر باشد.',
    'list' => 'فیلد :attribute باید یک لیست باشد.',
    'lowercase' => 'فیلد :attribute باید کوچک باشد.',
    'lt' => [
        'array' => 'فیلد :attribute باید کمتر از :value آیتم داشته باشد.',
        'file' => 'فیلد :attribute باید کمتر از :value کیلوبایت باشد.',
        'numeric' => 'فیلد :attribute باید کوچکتر از :value باشد.',
        'string' => 'فیلد :attribute باید کمتر از :value کاراکتر داشته باشد.',
    ],
    'lte' => [
        'array' => 'فیلد :attribute نباید بیشتر از :value آیتم داشته باشد.',
        'file' => 'فیلد :attribute باید کوچکتر یا مساوی :value کیلوبایت باشد.',
        'numeric' => 'فیلد :attribute باید کوچکتر یا مساوی :value باشد.',
        'string' => 'فیلد :attribute باید کوچکتر یا مساوی :value کاراکتر باشد.',
    ],
    'mac_address' => 'فیلد :attribute باید یک آدرس MAC معتبر باشد.',
    'max' => [
        'array' => 'فیلد :attribute نباید بیشتر از :max آیتم داشته باشد.',
        'file' => 'فیلد :attribute نباید بیشتر از :max کیلوبایت باشد.',
        'numeric' => 'فیلد :attribute نباید بزرگتر از :max باشد.',
        'string' => 'فیلد :attribute نباید بیشتر از :max کاراکتر داشته باشد.',
    ],
    'max_digits' => 'فیلد :attribute نباید بیشتر از :max رقم داشته باشد.',
    'mimes' => 'فیلد :attribute باید از نوع فایل باشد: :values.',
    'mimetypes' => 'فیلد :attribute باید از نوع فایل باشد: :values.',
    'min' => [
        'array' => 'فیلد :attribute باید حداقل :min آیتم داشته باشد.',
        'file' => 'فیلد :attribute باید حداقل :min کیلوبایت باشد.',
        'numeric' => 'فیلد :attribute باید حداقل :min باشد.',
        'string' => 'فیلد :attribute باید حداقل :min کاراکتر داشته باشد.',
    ],
    'min_digits' => 'فیلد :attribute باید حداقل :min رقم داشته باشد.',
    'missing' => 'فیلد :attribute باید وجود نداشته باشد.',
    'missing_if' => 'فیلد :attribute باید وجود نداشته باشد وقتی که :other برابر با :value باشد.',
    'missing_unless' => 'فیلد :attribute باید وجود نداشته باشد مگر اینکه :other برابر با :value باشد.',
    'missing_with' => 'فیلد :attribute باید وجود نداشته باشد وقتی که :values وجود داشته باشد.',
    'missing_with_all' => 'فیلد :attribute باید وجود نداشته باشد وقتی که :values وجود داشته باشند.',
    'multiple_of' => 'فیلد :attribute باید مضربی از :value باشد.',
    'not_in' => ':attribute انتخاب‌شده نامعتبر است.',
    'not_regex' => 'فرمت فیلد :attribute نامعتبر است.',
    'numeric' => 'فیلد :attribute باید یک عدد باشد.',
    'password' => [
        'letters' => 'فیلد :attribute باید حداقل یک حرف داشته باشد.',
        'mixed' => 'فیلد :attribute باید حداقل یک حرف بزرگ و یک حرف کوچک داشته باشد.',
        'numbers' => 'فیلد :attribute باید حداقل یک عدد داشته باشد.',
        'symbols' => 'فیلد :attribute باید حداقل یک نماد داشته باشد.',
        'uncompromised' => ':attribute داده‌شده در نشت اطلاعات دیده شده است. لطفاً یک :attribute دیگر انتخاب کنید.',
    ],
    'present' => 'فیلد :attribute باید موجود باشد.',
    'present_if' => 'فیلد :attribute باید موجود باشد وقتی که :other برابر با :value باشد.',
    'present_unless' => 'فیلد :attribute باید موجود باشد مگر اینکه :other برابر با :value باشد.',
    'present_with' => 'فیلد :attribute باید موجود باشد وقتی که :values موجود باشد.',
    'present_with_all' => 'فیلد :attribute باید موجود باشد وقتی که :values موجود باشند.',
    'prohibited' => 'فیلد :attribute ممنوع است.',
    'prohibited_if' => 'فیلد :attribute ممنوع است وقتی که :other برابر با :value باشد.',
    'prohibited_if_accepted' => 'فیلد :attribute ممنوع است وقتی که :other پذیرفته شود.',
    'prohibited_if_declined' => 'فیلد :attribute ممنوع است وقتی که :other رد شود.',
    'prohibited_unless' => 'فیلد :attribute ممنوع است مگر اینکه :other در :values باشد.',
    'prohibits' => 'فیلد :attribute مانع حضور :other می‌شود.',
    'regex' => 'فرمت فیلد :attribute نامعتبر است.',
    'required' => 'فیلد :attribute الزامی است.',
    'required_array_keys' => 'فیلد :attribute باید شامل ورودی‌های زیر باشد: :values.',
    'required_if' => 'فیلد :attribute الزامی است وقتی که :other برابر با :value باشد.',
    'required_if_accepted' => 'فیلد :attribute الزامی است وقتی که :other پذیرفته شود.',
    'required_if_declined' => 'فیلد :attribute الزامی است وقتی که :other رد شود.',
    'required_unless' => 'فیلد :attribute الزامی است مگر اینکه :other در :values باشد.',
    'required_with' => 'فیلد :attribute الزامی است وقتی که :values موجود باشد.',
    'required_with_all' => 'فیلد :attribute الزامی است وقتی که :values موجود باشند.',
    'required_without' => 'فیلد :attribute الزامی است وقتی که :values موجود نباشد.',
    'required_without_all' => 'فیلد :attribute الزامی است وقتی که هیچ یک از :values موجود نباشند.',
    'same' => 'فیلد :attribute باید با :other مطابقت داشته باشد.',
    'size' => [
        'array' => 'فیلد :attribute باید شامل :size آیتم باشد.',
        'file' => 'فیلد :attribute باید :size کیلوبایت باشد.',
        'numeric' => 'فیلد :attribute باید :size باشد.',
        'string' => 'فیلد :attribute باید :size کاراکتر باشد.',
    ],
    'starts_with' => 'فیلد :attribute باید با یکی از موارد زیر شروع شود: :values.',
    'string' => 'فیلد :attribute باید یک رشته باشد.',
    'timezone' => 'فیلد :attribute باید یک منطقه زمانی معتبر باشد.',
    'unique' => ':attribute واردشده قبلاً استفاده شده است.',
    'uploaded' => 'بارگذاری :attribute با شکست مواجه شد.',
    'uppercase' => 'فیلد :attribute باید بزرگ باشد.',
    'url' => 'فیلد :attribute باید یک آدرس URL معتبر باشد.',
    'ulid' => 'فیلد :attribute باید یک ULID معتبر باشد.',
    'uuid' => 'فیلد :attribute باید یک UUID معتبر باشد.',

    /*
    |--------------------------------------------------------------------------
    | پیام‌های سفارشی اعتبارسنجی
    |--------------------------------------------------------------------------
    |
    | در اینجا می‌توانید پیام‌های سفارشی اعتبارسنجی را برای ویژگی‌ها با استفاده از قرارداد
    | "attribute.rule" نام‌گذاری کنید. این کار باعث می‌شود به سرعت بتوانید یک پیام زبانی
    | خاص برای یک قانون خاص تعیین کنید.
    |
    */

     'custom' => array(
        'password' => [

            'regex' => 'در پسورد شما باید حداقل یک حرف بزرگ و یک حرف کوچک و یک عدد و یک کاراکتر خاص مثل (?,@,$,%,...) باشد',

        ],
        'userName' => [

            'regex' => 'نام کاربری باید انگیلیسی باشد',

        ],
    ),

    /*
    |--------------------------------------------------------------------------
    | ویژگی‌های سفارشی اعتبارسنجی
    |--------------------------------------------------------------------------
    |
    | این خطوط زبانی برای جایگزینی نام ویژگی‌های ما با نام‌های خواناتر استفاده می‌شوند،
    | مثلاً "آدرس ایمیل" به جای "email". این تنها به بیان بهتر و روان‌تر پیام کمک می‌کند.
    |
    */

    'attributes' => array(
        "name" => "نام",
        "username" => "نام کاربری",
        "email" => "ایمیل",
        "first_name" => "نام",
        "last_name" => "نام خانوادگی",
        "password" => "رمز عبور",
        "password_confirmation" => "تاییدیه ی رمز عبور",
        "city" => "شهر",
        "country" => "کشور",
        "address" => "نشانی",
        "phone" => "تلفن",
        "mobile" => "تلفن همراه",
        "age" => "سن",
        "sex" => "جنسیت",
        "gender" => "جنسیت",
        "day" => "روز",
        "month" => "ماه",
        "year" => "سال",
        "hour" => "ساعت",
        "minute" => "دقیقه",
        "second" => "ثانیه",
        "title" => "عنوان",
        "text" => "متن",
        "content" => "محتوا",
        "description" => "توضیحات",
        "excerpt" => "گلچین کردن",
        "date" => "تاریخ",
        "time" => "زمان",
        "available" => "موجود",
        "size" => "اندازه",
        "body" => "متن",
        "imageUrl" => "تصویر",
        "videoUrl" => "آدرس ویدیو",
        "slug" => "نامک",
        "tags" => "تگ ها",
        "category" => "دسته",
        "story" => "داستان",
        'number' => 'شماره قسمت',
        'price' => 'قیمت دوره',
        'course_id' => 'دوره مورد نظر',
        'fileUrl' => 'آدرس فایل',
        'enSlug' => 'نامک انگلیسی',
        'percent' => 'درصد',
        'images' => 'تصویر',
        'userName' => 'نام کاربری',
        'comment' => 'متن نظرات شما',
        'coupon' => 'کد تخفیف',
        'amount' => 'مقدار تخفیف',
        'expire' => 'زمان تخفیف',
        'avatar' => 'تصویر پروفایل',
        'priority' => 'الویت',
        'message' => 'متن پیام'
    ),

];