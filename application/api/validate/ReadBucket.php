<?php
namespace app\api\validate;

use think\Validate;
/**
 * 生成token参数验证器
 */
class ReadBucket extends Validate
{

    protected $rule = [
        'id'       =>  'require',
        'limit'       =>  'number|min:1',
    ];
    protected $message  =   [
        'id.require'    => 'id不能为空',
    ];
}