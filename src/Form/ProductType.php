<?php

namespace App\Form;

use App\Entity\Product;
use App\Entity\Category;
use App\Entity\Producer;
use App\Entity\Actor;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')            
            ->add('publication_date', DateType::class, [
                  'widget' => 'single_text',
                  // this is actually the default format for single_text
                 'format' => 'yyyy-MM-dd',
                ])
            ->add('description')
            ->add('qte')
            ->add('duration')
            ->add('icone', FileType::class, [
                        'constraints' => [
                    new File([
                        'maxSize' => '1024k',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                        ],
                        'mimeTypesMessage' => 'Please upload a valid image',
                    ])
                ],
                'data_class' => null,
                'required'=>false
            ])
            ->add('category', EntityType::class, [
                'class' => Category::class, 
                'query_builder' => function (EntityRepository $er) {
                                  return $er->createQueryBuilder('c')
                                            ->orderBy('c.label', 'ASC');
                                },
                'choice_label' => 'label',
               ])

            ->add('producer', EntityType::class, [
                'class' => Producer::class, 
                'query_builder' => function (EntityRepository $er) {
                                  return $er->createQueryBuilder('p')
                                            ->orderBy('p.name_producer', 'ASC');
                                },
                'choice_label' => 'name_producer',
            ])

            ->add('actor', EntityType::class, [
                'mapped' => false,
                'class' => Actor::class, 
                'query_builder' => function (EntityRepository $er) {
                                  return $er->createQueryBuilder('a')
                                            ->orderBy('a.name_actor', 'ASC');
                                },
                'choice_label' => 'name_actor',
                'multiple' => true,
                'expanded' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}
