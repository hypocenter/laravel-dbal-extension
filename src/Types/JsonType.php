<?php

namespace Hypocenter\LaravelDbalExtension\Types;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\Type;

/**
 * Drift
 * User: hypo
 * Date: 2017/2/13
 * Time: 01:59
 */
class JsonType extends Type
{
    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
        return 'JSON';
    }

    public function getName()
    {
        return 'json';
    }

    public function getMappedDatabaseTypes(AbstractPlatform $platform)
    {
        return ['json'];
    }
}