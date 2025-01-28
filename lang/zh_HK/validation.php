<?php

declare(strict_types=1);

return [
    'accepted'             => '必須接受 :attribute。',
    'accepted_if'          => ':other 為 :value 时，:attribute 必須接受。',
    'active_url'           => ':attribute 並非一個有效的網址。',
    'after'                => ':attribute 必須要晚於 :date。',
    'after_or_equal'       => ':attribute 必須要等於 :date 或更晚。',
    'alpha'                => ':attribute 只能以字母組成。',
    'alpha_dash'           => ':attribute 只能以字母、數字、連接線(-)及底線(_)組成。',
    'alpha_num'            => ':attribute 只能以字母及數字組成。',
    'array'                => ':attribute 必須為陣列。',
    'ascii'                => ':attribute 必须仅包含单字节字母数字字符和符号。',
    'before'               => ':attribute 必須要早於 :date。',
    'before_or_equal'      => ':attribute 必須要等於 :date 或更早。',
    'between'              => [
        'array'   => ':attribute: 必須有 :min 至 :max 個項目。',
        'file'    => ':attribute 必須介乎 :min 至 :max KB 之間。',
        'numeric' => ':attribute 必須介乎 :min 至 :max 之間。',
        'string'  => ':attribute 必須介乎 :min 至 :max 個字符之間。',
    ],
    'boolean'              => ':attribute 必須是布爾值。',
    'can'                  => ':attribute 欄位包含未经授权的值。',
    'confirmed'            => ':attribute 確認欄位的輸入並不相符。',
    'contains'             => ':attribute 欄位缺少必要的值。',
    'current_password'     => '當前密碼不正確。',
    'date'                 => ':attribute 並非一個有效的日期。',
    'date_equals'          => ':attribute 必須等於 :date。',
    'date_format'          => ':attribute 與 :format 格式不相符。',
    'decimal'              => ':attribute 必须有 :decimal 位小数。',
    'declined'             => ':attribute 必須被拒絕。',
    'declined_if'          => '當 :other 為 :value 時，:attribute 必須被拒絕。',
    'different'            => ':attribute 與 :other 必須不同。',
    'digits'               => ':attribute 必須是 :digits 位數字。',
    'digits_between'       => ':attribute 必須介乎 :min 至 :max 位數字。',
    'dimensions'           => ':attribute 圖片尺寸不正確。',
    'distinct'             => ':attribute 已經存在。',
    'doesnt_end_with'      => ':attribute 不能以下列之一结尾：:values。',
    'doesnt_start_with'    => ':attribute 不能以下列之一开头：:values。',
    'email'                => ':attribute 必須是有效的電郵地址。',
    'ends_with'            => ':attribute 結尾必須包含下列之一：:values。',
    'enum'                 => ':attribute 無效。',
    'exists'               => ':attribute 不存在。',
    'extensions'           => ':attribute 欄位必须具有以下扩展名之一：:values。',
    'file'                 => ':attribute 必須是文件。',
    'filled'               => ':attribute 不能留空。',
    'gt'                   => [
        'array'   => ':attribute 必須多於 :value 個項目。',
        'file'    => ':attribute 必須大於 :value KB。',
        'numeric' => ':attribute 必須大於 :value。',
        'string'  => ':attribute 必須多於 :value 個字符。',
    ],
    'gte'                  => [
        'array'   => ':attribute 必須多於或等於 :value 個項目。',
        'file'    => ':attribute 必須大於或等於 :value KB。',
        'numeric' => ':attribute 必須大於或等於 :value。',
        'string'  => ':attribute 必須多於或等於 :value 個字符。',
    ],
    'hex_color'            => ':attribute 欄位必须是有效的十六进制颜色。',
    'image'                => ':attribute 必須是一張圖片。',
    'in'                   => '所揀選的 :attribute 選項無效。',
    'in_array'             => ':attribute 沒有在 :other 中。',
    'integer'              => ':attribute 必須是一個整數。',
    'ip'                   => ':attribute 必須是一個有效的 IP 地址。',
    'ipv4'                 => ':attribute 必須是一個有效的 IPv4 地址。',
    'ipv6'                 => ':attribute 必須是一個有效的 IPv6 地址。',
    'json'                 => ':attribute 必須是正確的 JSON 格式。',
    'list'                 => ':attribute 欄位必须是一个列表。',
    'lowercase'            => ':attribute 必须小写。',
    'lt'                   => [
        'array'   => ':attribute 必須少於 :value 個項目。',
        'file'    => ':attribute 必須小於 :value KB。',
        'numeric' => ':attribute 必須小於 :value。',
        'string'  => ':attribute 必須少於 :value 個字符。',
    ],
    'lte'                  => [
        'array'   => ':attribute 必須少於或等於 :value 個項目。',
        'file'    => ':attribute 必須小於或等於 :value KB。',
        'numeric' => ':attribute 必須小於或等於 :value。',
        'string'  => ':attribute 必須少於或等於 :value 個字符。',
    ],
    'mac_address'          => ':attribute 必須是一個有效的 MAC 地址。',
    'max'                  => [
        'array'   => ':attribute 不能多於 :max 個項目。',
        'file'    => ':attribute 不能大於 :max KB。',
        'numeric' => ':attribute 不能大於 :max。',
        'string'  => ':attribute 不能多於 :max 個字符。',
    ],
    'max_digits'           => ':attribute 不得超过 :max 位。',
    'mimes'                => ':attribute 必須為 :values 的檔案。',
    'mimetypes'            => ':attribute 必須為 :values 的檔案。',
    'min'                  => [
        'array'   => ':attribute 不能小於 :min 個項目。',
        'file'    => ':attribute 不能小於 :min KB。',
        'numeric' => ':attribute 不能小於 :min。',
        'string'  => ':attribute 不能小於 :min 個字符。',
    ],
    'min_digits'           => ':attribute 必须至少有 :min 位数字。',
    'missing'              => '必须缺少 :attribute 欄位。',
    'missing_if'           => '当 :other 为 :value 时，必须缺少 :attribute 欄位。',
    'missing_unless'       => '必须缺少 :attribute 欄位，除非 :other 是 :value。',
    'missing_with'         => '存在 :values 时，必须缺少 :attribute 欄位。',
    'missing_with_all'     => '存在 :values 时，必须缺少 :attribute 欄位。',
    'multiple_of'          => '所揀選的 :attribute 必須為 :value 中的多個。',
    'not_in'               => '所揀選的 :attribute 選項無效。',
    'not_regex'            => ':attribute 的格式錯誤。',
    'numeric'              => ':attribute 必須為一個數字。',
    'password'             => [
        'letters'       => ':attribute 必须至少包含一个字母。',
        'mixed'         => ':attribute 必须至少包含一个大写字母和一个小写字母。',
        'numbers'       => ':attribute 必须至少包含一个数字。',
        'symbols'       => ':attribute 必须包含至少一个符号。',
        'uncompromised' => '给定的 :attribute 已出现数据泄漏。请选择不同的 :attribute。',
    ],
    'present'              => ':attribute 必須存在。',
    'present_if'           => '当 :other 等于 :value 时，必须存在 :attribute 欄位。',
    'present_unless'       => '除非 :other 等于 :value，否则 :attribute 欄位必须存在。',
    'present_with'         => '当 :values 存在时，:attribute 欄位必须存在。',
    'present_with_all'     => '当存在 :values 时，必须存在 :attribute 欄位。',
    'prohibited'           => ':attribute 欄位被禁止。',
    'prohibited_if'        => '当 :other 为 :value 时，:attribute欄位被禁止。',
    'prohibited_unless'    => ':attribute 欄位被禁止，除非 :other 位于 :values 中。',
    'prohibits'            => ':attribute 不能包含 :other。',
    'regex'                => ':attribute 的格式錯誤。',
    'required'             => ':attribute 不能留空。',
    'required_array_keys'  => ':attribute 必須包含指定的鍵：:values.',
    'required_if'          => '當 :other 是 :value 時 :attribute 不能留空。',
    'required_if_accepted' => '接受 :other 时需要 :attribute 欄位。',
    'required_if_declined' => '拒絕 :other 时需要 :attribute 欄位。',
    'required_unless'      => '當 :other 不是 :values 時 :attribute 不能留空。',
    'required_with'        => '當 :values 出現時 :attribute 不能留空。',
    'required_with_all'    => '當 :values 出現時 :attribute 不能留空。',
    'required_without'     => '當 :values 留空時 :attribute field 不能留空。',
    'required_without_all' => '當 :values 都不出現時 :attribute 不能留空。',
    'same'                 => ':attribute 與 :other 必須相同。',
    'size'                 => [
        'array'   => ':attribute 必須是 :size 個單元。',
        'file'    => ':attribute 的大小必須是 :size KB。',
        'numeric' => ':attribute 的大小必須是 :size。',
        'string'  => ':attribute 必須是 :size 個字符。',
    ],
    'starts_with'          => ':attribute 開頭必須包含下列之一：:values。',
    'string'               => ':attribute 必須是一個字符串',
    'timezone'             => ':attribute 必須是一個正確的時區值。',
    'ulid'                 => ':attribute 必须是有效的 ULID。',
    'unique'               => ':attribute 已經存在。',
    'uploaded'             => ':attribute 上傳失敗。',
    'uppercase'            => ':attribute 必须大写。',
    'url'                  => ':attribute 的格式錯誤。',
    'uuid'                 => ':attribute 必須是有效的 UUID。',
];
