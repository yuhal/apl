<?php
namespace app\api\validate\oauth;

use think\Validate;

/**
 * 生成token参数验证器
 */
class Sign extends Validate
{
    protected $rule = [
        'appid'       =>  'require',
        'appsercet'       =>  'require',
        'mobile'      =>  'mobile|require',
        'timestamp'      =>  'number|require',
        'nonce'      =>  'number|require',
    ];
}
