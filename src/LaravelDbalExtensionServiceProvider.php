<?php

namespace Hypocenter\LaravelDbalExtension;

use Doctrine\DBAL\Types\Type;
use Hypocenter\LaravelDbalExtension\Types\CharType;
use Hypocenter\LaravelDbalExtension\Types\JsonType;
use Hypocenter\LaravelDbalExtension\Types\StringType;

/**
 * Drift
 * User: hypo
 * Date: 2017/2/13
 * Time: 02:01
 */
class LaravelDbalExtensionServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register()
    {
        // 修改 Type::$_typesMap 私有属性, 替换原始的 StringType 为自定义类型
        // 以区分 Char,Varchar
        $property = new \ReflectionProperty(Type::class, '_typesMap');
        $property->setAccessible(true);
        $types = $property->getValue();
        $types['string'] = StringType::class;
        $property->setValue($types);
        $property->setAccessible(true);

        Type::addType('char', CharType::class);
        Type::addType('json', JsonType::class);
    }
}