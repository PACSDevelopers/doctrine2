<?php

namespace Doctrine\Tests\Models\DDC889;

use Doctrine\DBAL\Types\Type;
use Doctrine\ORM\Mapping;

/**
 * @MappedSuperclass
 */
class DDC889SuperClass
{
    /** @Column() */
    protected $name;

    public static function loadMetadata(Mapping\ClassMetadata $metadata)
    {
        $fieldMetadata = new Mapping\FieldMetadata('name');
        $fieldMetadata->setType(Type::getType('string'));

        $metadata->addProperty($fieldMetadata);
        $metadata->isMappedSuperclass = true;
        $metadata->setIdGeneratorType(Mapping\GeneratorType::NONE);
    }
}
