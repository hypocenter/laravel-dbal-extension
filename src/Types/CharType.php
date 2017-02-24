<?php

namespace Hypocenter\LaravelDbalExtension\Types;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\Type;

/**
 * Drift
 * User: hypo
 * Date: 2017/2/13
 * Time: 16:18
 */
class CharType extends Type
{
    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
        $fieldDeclaration['fixed'] = true;
        return $platform->getVarcharTypeDeclarationSQL($fieldDeclaration);
    }

    public function getName()
    {
        return 'char';
    }
}