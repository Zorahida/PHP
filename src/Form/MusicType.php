<?php

namespace App\Form;

use App\Entity\Debilidad;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Entity\Pokemon;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PokemonType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {

        $builder
            ->add('name', null, [
                'label' => 'Nombre',
                'attr' => ['placeholder'=>'Pon aquí el nombre del Pokemon']
            ])
            ->add('description')
            ->add('pokemonImage', FileType::class, [
                'mapped' => false,
                'label'=> 'Sube la foto del Pokemon'
            ])
            ->add('code')
            ->add('debilidades', EntityType::class, [
                'class' => Debilidad::class,
                'choice_label' => 'name',
                'multiple' => true,
                'expanded' => true
            ])
            ->add('Enviar', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Pokemon::class,
        ]);
    }
}
