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

    'accepted'             => ':attribute的值必须是',
    'active_url'           => ':attribute必须是基于 PHP 函数 dns_get_record 的',
    'after'                => ':attribute必须是给定日期:date之后的一个值',
    'after_or_equal'       => ':attribute必须是大于等于给定日期:date的值',
    'alpha'                => ':attribute必须是字母',
    'alpha_dash'           => ':attribute可以包含字母和数字，以及破折号和下划线',
    'alpha_num'            => ':attribute必须是字母或数字',
    'array'                => ':attribute必须是 PHP 数组',
    'before'               => ':attribute必须是指定日期:date之前的一个数值',
    'before_or_equal'      => ':attribute必须小于等于给定日期:date',
    'between'              => [
        'numeric' => '数值:attribute的大小必须在给定的最小值:min和最大值:max之间',
        'file'    => '文件:attribute的大小必须在给定的最小值:min和最大值:max之间',
        'string'  => '字符串:attribute的长度必须在给定的最小值:min和最大值:max之间',
        'array'   => '数组:attribute的大小必须在在给定的最小值:min和最大值:max之间',
    ],
    'boolean'              => ':attribute必须可以被转化为布尔值',
    'confirmed'            => ':attribute必须有一个匹配字段foo_confirmation',
    'date'                 => ':attribute必须是一个基于 PHP strtotime 函数的有效日期',
    'date_format'          => ':attribute必须匹配指定格式:format',
    'different'            => ':attribute必须是一个和指定字段:other不同的值',
    'digits'               => ':attribute必须是数字且长度为:digits指定的值',
    'digits_between'       => ':attribute数值长度必须介于最小值:min和最大值:max之间',
    'dimensions'           => '图片:attribute尺寸必须满足该规定参数指定的约束条件',
    'distinct'             => ':attribute不能包含重复值',
    'email'                => ':attribute必须是格式化的电子邮件地址',
    'exists'               => ':attribute必须存在于指定数据表',
    'file'                 => ':attribute必须是上传成功的文件',
    'filled'               => ':attribute如果存在则不能为空',
    'image'                => '文件:attribute必须是图片（jpeg、png、bmp、gif或者svg）',
    'in'                   => '字段:attribute的值必须在给定的列表中',
    'in_array'             => '字段:attribute必须在另一个字段:other值中存在',
    'integer'              => '字段:attribute必须是整型',
    'ip'                   => '字段:attribute必须是IP地址',
    'ipv4'                 => '字段:attribute必须是IPv4地址',
    'ipv6'                 => '字段:attribute必须是IPv6地址',
    'json'                 => '字段:attribute必须是有效的JSON字符串',
    'max'                  => [
        'numeric' => '数值:attribute必须小于等于最大值:max',
        'file'    => '文件:attribute必须小于等于最大值:max',
        'string'  => '字符串:attribute必须小于等于最大值:max',
        'array'   => '数组:attribute必须小于等于最大值:max',
    ],
    'mimes'                => '文件:attribute的 MIME 类型必须是该规则列出的扩展:values类型中的一个',
    'mimetypes'            => '文件:attribute必须匹配给定的:valuesMIME文件类型之一',
    'min'                  => [
        'numeric' => '数值:attribute必须大于等于最小值:min',
        'file'    => '文件:attribute必须大于等于最小值:min',
        'string'  => '字符串:attribute必须大于等于最小值:min',
        'array'   => '数组:attribute必须大于等于最小值:min',
    ],
    'not_in'               => '字段:attribute值不能在给定列表中',
    'numeric'              => '字段:attribute必须是数值',
    'present'              => '字段:attribute必须出现在输入数据中但可以为空',
    'regex'                => '字段:attribute格式不正确',
    'required'             => '字段:attribute值不能为空',
    'required_if'          => '字段:attribute在另一个字段:other等于指定值:value时是必须的',
    'required_unless'      => '除非:other字段等于:values，否则字段:attribute不能空',
    'required_with'        => '字段:attribute只有在任一其它指定字段:values存在的情况才是必须的',
    'required_with_all'    => '字段:attribute只有在所有指定字段:values存在的情况下才是必须的',
    'required_without'     => '字段:attribute只有当任一指定字段:values不存在的情况下才是必须的',
    'required_without_all' => '字段:attribute只有当所有指定字段:values不存在的情况下才是必须的',
    'same'                 => '给定字段:other和字段:attribute必须匹配',
    'size'                 => [
        'numeric' => '数值:attribute必须有和给定值:size相匹配的大小',
        'file'    => '文件:attribute必须有和给定值:size相匹配的大小',
        'string'  => '字符串:attribute必须有和给定值:size相匹配的大小',
        'array'   => '数组:attribute必须有和给定值:size相匹配的大小',
    ],
    'string'               => '字段:attribute必须是字符串',
    'timezone'             => '字符:attribute必须是基于 PHP 函数timezone_identifiers_list的有效时区标识',
    'unique'               => '字段:attribute在给定数据表上必须是唯一的',
    'uploaded'             => '文件:attribute上传失败',
    'url'                  => '字段:attribute必须是有效的URL',

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

];
