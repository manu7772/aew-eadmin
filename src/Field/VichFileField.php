<?php
namespace Aequation\EadminBundle\Field;

// EasyAdmin
use EasyCorp\Bundle\EasyAdminBundle\Contracts\Field\FieldInterface;
use EasyCorp\Bundle\EasyAdminBundle\Field\FieldTrait;
// Symfony
use Vich\UploaderBundle\Form\Type\VichImageType;

class VichFileField implements FieldInterface
{
    use FieldTrait;

    public static function new(string $propertyName, ?string $label = null)
    {
        return (new self())
            ->setProperty($propertyName)
            ->setTemplatePath('')
            ->setLabel($label)
            ->setFormType(VichImageType::class)
            ->setRequired(true)
            ->setFormTypeOptions([
                'allow_delete' => false,
            ])
            ;
    }
}
