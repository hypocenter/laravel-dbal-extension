<?php
/**
 * Drift
 * User: hypo
 * Date: 2017/2/13
 * Time: 22:55
 */

namespace Hypocenter\LaravelDbalExtension\Types;


use Doctrine\DBAL\Platforms\AbstractPlatform;

class StringType extends \Doctrine\DBAL\Types\StringType
{
    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
        $fieldDeclaration['fixed'] = false;
        return $platform->getVarcharTypeDeclarationSQL($fieldDeclaration);
    }
}