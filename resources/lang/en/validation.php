<?php

return [


    'invalid_format'=>'dddddddddddddddddddddddddddd',
    'accepted' => 'The :attribute must be accepted.',
    'accepted_if' => 'The :attribute must be accepted when :other is :value.',
    'active_url' => 'The :attribute is not a valid URL.',
    'after' => 'The :attribute must be a date after :date.',
    'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    'alpha' => 'The :attribute must only contain letters.',
    'alpha_dash' => 'The :attribute must only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'The :attribute must only contain letters and numbers.',
    'array' => 'The :attribute must be an array.',
    'before' => 'The :attribute must be a date before :date.',
    'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
    'between' => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file' => 'The :attribute must be between :min and :max kilobytes.',
        'string' => 'The :attribute must be between :min and :max characters.',
        'array' => 'The :attribute must have between :min and :max items.',
    ],
    'boolean' => 'The :attribute field must be true or false.',
    'confirmed' => 'The :attribute confirmation does not match.',
    'current_password' => 'The password is incorrect.',
    'date' => 'The :attribute is not a valid date.',
    'date_equals' => 'The :attribute must be a date equal to :date.',
    'date_format' => 'The :attribute does not match the format :format.',
    'different' => 'The :attribute and :other must be different.',
    'digits' => 'The :attribute must be :digits digits.',
    'digits_between' => 'The :attribute must be between :min and :max digits.',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'email' => 'The :attribute must be a valid email address.',
    'ends_with' => 'The :attribute must end with one of the following: :values.',
    'exists' => 'The selected :attribute is invalid.',
    'file' => 'The :attribute must be a file.',
    'filled' => 'The :attribute field must have a value.',
    'gt' => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'string' => 'The :attribute must be greater than :value characters.',
        'array' => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file' => 'The :attribute must be greater than or equal :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal :value characters.',
        'array' => 'The :attribute must have :value items or more.',
    ],
    'image' => 'The :attribute must be an image.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => 'The :attribute must be an integer.',
    'ip' => 'The :attribute must be a valid IP address.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a valid JSON string.',
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
        'numeric' => 'The :attribute must not be greater than :max.',
        'file' => 'The :attribute must not be greater than :max kilobytes.',
        'string' => 'The :attribute must not be greater than :max characters.',
        'array' => 'The :attribute must not have more than :max items.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'The :attribute must be at least :min.',
        'file' => 'The :attribute must be at least :min kilobytes.',
        'string' => 'The :attribute must be at least :min characters.',
        'array' => 'The :attribute must have at least :min items.',
    ],
    'multiple_of' => 'The :attribute must be a multiple of :value.',
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => 'The :attribute must be a number.',
    'password' => 'The password is incorrect.',
    'present' => 'The :attribute field must be present.',
    'regex' => 'The :attribute format is invalid.',
    'required' => 'The :attribute field is required.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'prohibited' => 'The :attribute field is prohibited.',
    'prohibited_if' => 'The :attribute field is prohibited when :other is :value.',
    'prohibited_unless' => 'The :attribute field is prohibited unless :other is in :values.',
    'prohibits' => 'The :attribute field prohibits :other from being present.',
    'same' => 'The :attribute and :other must match.',

    'size' => [
        'numeric' => 'The :attribute must be :size.',
        'file' => 'The :attribute must be :size kilobytes.',
        'string' => 'The :attribute must be :size characters.',
        'array' => 'The :attribute must contain :size items.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values.',
    'string' => 'The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid timezone.',
    'unique' => 'The :attribute has already been taken.',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => 'The :attribute must be a valid URL.',
    'uuid' => 'The :attribute must be a valid UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'unique_city' => 'The :attribute must be unique for the same country.',
    'mobile_number_incorrect_for_selected_country'=>'Mobile number format is incorrect for selected country',

    'custom' => [
        'd' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'title_ar'             =>'name in Arabic',
        'title_en'             =>'name in English',
        'shortcut_ar'          => 'shortcut in Arabic',
        'shortcut_en'          => 'shortcut in English',
        'code'                 => 'code',
        'phone_code'           => 'phone code',
        'city_id'              =>'city',
        'country_id'           => 'country',
        'deactivation_reason'  =>'Deactivation reason',
        'department_id'        =>'Application department',
        'parent_category_id'   =>'Parent category',
        'sub_category_id'      =>'Sub category',
        'real_sub_category_id' =>'Real Estate Type',
        'headWare_sub_category_id' =>'Hardware Type',
        'headWare_category' =>'Hardware Category',
        'trucks_category' => 'Trucks Type' ,
        'trucks_type' => 'Trucks Type' ,
        'trucks_status' => 'Truck Status' ,
        'region_id'            =>'Region',
        'truck_status' => 'Truck Status' ,
        'ad_type'              =>'Ad type',
        'ad_status'            =>'Ad Status',
        'admodel_id'           =>'Model',
        'allow_comments'       =>'Allow comments',
        'is_double'            =>'Double',
        'gear_type'            =>'Gear type',
        'fuel_type'            =>'Fuel type',
        'is_guaranteed'        =>'Is guaranteed',
        'show_mobile'          =>'Show mobile',
        'rating_value'=>'rating value',
        'parent_id'=>'Parent category',
        'content_ar'=>'Ad details in Arabic',
        'content_en'=>'Ad details in English',
        'reply'=>'Reply',
        'pics'=>'advertisement  pictures',
        'ad_title_ar'=>'advertisement  title in Arabic',
        'ad_title_en'=>'advertisement  title in English',
        'price'=>'Price',
        'first_name'=>'Full name',
        'ad_id'=>'Advertisement number',
        'commission_amount'=>'Commission amount',
        'transfer_bank'=>'Transfer bank',
        'transfer_date'=>'Transfer date',
        'transfer_name'=>'Transfer full name',
        'mobile_related_to_your_account'=>'Mobile related to your account',
        'notes'=>'Notes',
        'transfer_receipt'=>'Transfer receipt',
        'your_message_or_complaint'=>'Your message/complaint',
        'full_name'=>'Full name',
        'mobile'=>'Mobile',
        'commission_percent'=>'Commission percent',
        'delete_reason'=>'Delete reason',
        'website'=>'Website',
        'snapchat'=>'Snapchat',
        'reply_content'=>'Reply',
        'factory_year'=>'Manufacturing year',
        'new_password'=>'New Password',
        'new_password_confirmation'=>'New Password confirmation',
        'picture'=>'Picture',
        'mobile_number'=>'Mobile number',
        'email'=>'Email',
        'realEstate_category'  =>'Real Estate Category',
        'cars_category'=>'Cars Agency',
        'junk'=>'Junk',
        'car_type'=>'Car type',
        'carsAgencies'=>'Cars Agencies',
        'hardware_categories'=>'Hardware Categories',
        'bank_account_id'=>'Bank account',


        'name'=>'Name',
        'company_name'=>'Company name',
        'address'=>'Address',
        'company_category'=>'Company field',
        'website'=>'Website',
        'email'=>'Email',
        'mobile'=>'Mobile',
        'order_details'=>'Order details',
        'years_count'=>'Experience years count',
        'emp_count'=>'Employees count',
        'video_link'=>'Video link',
        'name_ar'=>'Name in Arabic',
        'name_en'=>'Name in English',
        ''=>'',
        ''=>'',
        ''=>'',
        ''=>'',
        ''=>'',
        ''=>'',
        ''=>'',
        ''=>'',
        ''=>'',
        ''=>'',
        ''=>'',
        ''=>'',
        ''=>'',
        ''=>'',
        ''=>'',
        ''=>'',
        ''=>'',
        ''=>'',



        ''=>'',
        ''=>'',
        ''=>'',
        ''=>'',
        ''=>'',
        ''=>'',
        ''=>'',
        ''=>'',
        ''=>'',
        ''=>'',




    ],
    'phone' => 'The :attribute field contains an invalid number.',


];
