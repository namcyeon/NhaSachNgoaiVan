<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'Thuộc tính: phải được chấp nhận.',
'active_url' => 'Thuộc tính: không phải là một URL hợp lệ.',
'after' => 'Thuộc tính: phải là một ngày sau: date.',
'alpha' => 'Thuộc tính: chỉ có thể chứa chữ cái.',
'alpha_dash' => 'Thuộc tính: chỉ có thể chứa chữ cái, số và dấu gạch ngang.',
'alpha_num' => 'Thuộc tính: chỉ có thể chứa chữ cái và số.',
'array' => 'Thuộc tính: phải là một mảng.',
'before' => 'Thuộc tính: phải là ngày trước: ngày.',
    'between'              => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file'    => 'The :attribute must be between :min and :max kilobytes.',
        'string'  => 'The :attribute must be between :min and :max characters.',
        'array'   => 'The :attribute must have between :min and :max items.',
    ],
    'boolean' => 'Trường thuộc tính: phải là đúng hoặc sai.',
'confirmed' => 'Các: xác nhận thuộc tính không phù hợp.',
'date' => 'Thuộc tính: không phải là ngày hợp lệ.',
'date_format' => 'Thuộc tính: không khớp với định dạng: định dạng.',
'different' => 'Thuộc tính: và: khác phải khác.',
'digits' => 'Thuộc tính: phải là: chữ số chữ số.',
'digits_between' => 'Thuộc tính: phải nằm trong khoảng: min và: max digits.',
'email' => 'Thuộc tính: phải là một địa chỉ email hợp lệ.',
'exists' => 'Thuộc tính đã chọn: không hợp lệ.',
'filled' => 'Trường thuộc tính: là bắt buộc.',
'image' => 'Thuộc tính: phải là một hình ảnh.',
'in' => 'Thuộc tính đã chọn: không hợp lệ.',
'integer' => 'Thuộc tính: phải là một số nguyên.',
'ip' => 'Thuộc tính: phải là một địa chỉ IP hợp lệ',
'json' => 'Thuộc tính: phải là một chuỗi JSON hợp lệ',
    'max'                  => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file'    => 'The :attribute may not be greater than :max kilobytes.',
        'string'  => 'The :attribute may not be greater than :max characters.',
        'array'   => 'The :attribute may not have more than :max items.',
    ],
    'mimes'                => 'The :attribute must be a file of type: :values.',
    'min'                  => [
        'numeric' => 'The :attribute must be at least :min.',
        'file'    => 'The :attribute must be at least :min kilobytes.',
        'string'  => 'The :attribute must be at least :min characters.',
        'array'   => 'The :attribute must have at least :min items.',
    ],
    'not_in' => 'Thuộc tính đã chọn: không hợp lệ.',
'numeric' => 'Thuộc tính: phải là một số.',
'regex' => 'Định dạng thuộc tính: không hợp lệ.',
'required' => 'Trường thuộc tính: là bắt buộc.',
'required_if' => 'Trường thuộc tính: được yêu cầu khi: khác: giá trị.',
'required_with' => 'Lĩnh vực thuộc tính: được yêu cầu khi: các giá trị hiện diện.',
'required_with_all' => 'Lĩnh vực thuộc tính: được yêu cầu khi: các giá trị hiện diện.',
'required_without' => 'Trường thuộc tính: được yêu cầu khi: các giá trị không có.',
'required_without_all' => 'Lĩnh vực thuộc tính: được yêu cầu khi không có: giá trị hiện diện.',
'same' => 'Thuộc tính: và: khác phải khớp.',
    'size'                 => [
        'numeric' => 'The :attribute must be :size.',
        'file'    => 'The :attribute must be :size kilobytes.',
        'string'  => 'The :attribute must be :size characters.',
        'array'   => 'The :attribute must contain :size items.',
    ],
    'string' => 'Thuộc tính: phải là một chuỗi.',
'timezone' => 'Thuộc tính: phải là một vùng hợp lệ.',
'unique' => 'Thuộc tính: đã được dùng.',
'url' => 'Định dạng thuộc tính: không hợp lệ.',

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

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],
    'whoops' => 'Rất tiếc!',
'input_error' => 'Có một số vấn đề với đầu vào của bạn.',
'billing_fill_first_name_field' => 'vui lòng điền vào mục Tên trường đầu tiên',
'shipping_fill_first_name_field' => 'vui lòng điền vào tên của trường vận chuyển',
'billing_fill_last_name_field' => 'vui lòng điền vào ô Ghi tên',
'shipping_fill_last_name_field' => 'vui lòng điền vào trường Tên Vận chuyển',
'billing_fill_email_field' => 'vui lòng điền vào trường Email gửi hóa đơn',
'shipping_fill_email_field' => 'vui lòng điền vào trường Email gửi hàng',
'billing_fill_valid_email_field' => 'vui lòng điền Email hợp lệ vào trường thanh toán',
'shipping_fill_valid_email_field' => 'vui lòng điền vào Email hợp lệ trong lĩnh vực vận chuyển',
'billing_country_name_field' => 'vui lòng chọn trường Tên quốc gia thanh toán',
'shipping_country_name_field' => 'vui lòng chọn vận chuyển quốc gia tên trường',
'billing_address_line_1_field' => 'vui lòng điền vào địa chỉ thanh toán Dòng Địa chỉ 1',
'shipping_address_line_1_field' => 'vui lòng điền vào trường Địa chỉ Line 1',
'billing_fill_town_city_field' => 'vui lòng điền vào địa chỉ thanh toán Town Or City',
'shipping_fill_town_city_field' => 'vui lòng điền điền vào địa chỉ Town Or City',
'billing_fill_zip_postal_field' => 'vui lòng điền vào ô gửi mã bưu điện hoặc mã bưu điện',
'shipping_fill_zip_postal_field' => 'vui lòng điền vào địa chỉ Zip hoặc mã bưu điện',
'fill_payment_gateway' => 'hãy chọn Cổng thanh toán',
'stripe_required_msg' => 'Dấu hiệu token sọc cần tiếp tục quá trình',
'display_name_required' => 'Vui lòng điền vào trường Tên hiển thị',
'user_name_required' => 'Vui lòng điền vào trường User Name',
'user_name_unique' => 'Trường tên người dùng là duy nhất, hãy thử với tên khác',
'email_required' => 'Vui lòng điền vào trường Địa chỉ Email',
'email_unique' => 'Trường địa chỉ email là duy nhất, hãy thử với một trường khác',
'email_is_email' => 'Vui lòng điền đúng địa chỉ email',
'password_required' => 'Vui lòng điền vào trường Mật khẩu',
'password_confirmation_required' => 'Vui lòng điền vào trường Xác nhận Mật khẩu',
'secret_key_required' => 'Vui lòng điền vào trường Khóa bí mật',
'g_recaptcha_response_required' => 'Vui lòng quản lý trả lời recaptcha',
'new_password_required' => 'Vui lòng điền vào trường Mật khẩu Mới',
'account_bill_first_name' => 'Vui lòng điền vào trường Tên Thanh toán',
'account_bill_last_name' => 'Vui lòng điền vào trường Tên Thanh toán',
'account_bill_select_country' => 'vui lòng chọn trường Tên Quốc gia Thanh toán',
'account_bill_adddress_line_1' => 'vui lòng điền vào trường Địa chỉ Thanh toán Dòng 1',
'account_shipping_first_name' => 'Vui lòng điền vào trường Tên Vận chuyển',
'account_shipping_last_name' => 'Vui lòng điền vào trường Tên Vận chuyển',
'account_bill_email_address' => 'vui lòng điền vào trường Email Thanh toán',
'account_bill_email_address_is_email' => 'Vui lòng điền vào trường Email Thanh toán với địa chỉ email chính xác',
'account_bill_town_or_city' => 'vui lòng điền vào trường Billing Town Or City',
'account_bill_zip_or_postal_code' => 'vui lòng điền vào trường Billing Zip Hoặc Mã bưu điện',
'account_shipping_email_address' => 'vui lòng điền vào trường Email Vận chuyển',
'account_shipping_email_address_is_email' => 'Vui lòng điền vào trường Email Vận chuyển với địa chỉ email chính xác',
'account_shipping_select_country' => 'vui lòng chọn trường Tên Nước Vận chuyển',
'account_shipping_adddress_line_1' => 'vui lòng điền địa chỉ gửi hàng Dòng 1',
'account_shipping_town_or_city' => 'vui lòng điền vào trường Vận chuyển Town Or City',
'account_shipping_zip_or_postal_code' => 'vui lòng điền vào địa chỉ gửi hàng Zip hoặc mã bưu điện',
'select_rating' => 'hãy chọn một đánh giá',
'write_review' => 'Hãy viết đánh giá của bạn',
'coupon_not_exists_msg' => 'Phiếu thưởng không tồn tại!',
'coupon_min_spend_msg' => 'Chi tiêu tối thiểu cho phiếu thưởng này là',
'coupon_max_spend_msg' => 'Chi tiêu tối đa cho phiếu thưởng này là',
'coupon_no_login_msg' => 'cần phải đăng nhập như một người dùng để sử dụng phiếu giảm giá này',
'coupon_no_role_match_msg' => 'người sử dụng vai trò không áp dụng cho phiếu giảm giá này',
'coupon_expired_msg' => 'Bây giờ phiếu giảm giá này đã hết hạn',
'coupon_already_sxist_label' => 'Xin lỗi, phiếu giảm giá này đã tồn tại',
'exceed_from_cart_total_msg' => 'Giá giảm giá không được lớn hơn so với tổng số giỏ hàng',
'coupon_removed_from_cart_msg' => 'Phiếu giảm giá đã được xóa khỏi giỏ hàng vì một điều kiện nào đó sai',
];
