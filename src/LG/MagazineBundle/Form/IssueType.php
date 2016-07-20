<?php

namespace LG\MagazineBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;


class IssueType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('number')
            ->add('datePublication', DateTimeType::class, array(
                'years' => range(date('Y'), date('Y', strtotime('-50 years'))),
                'required' => TRUE,
                
            ) )
            ->add('file')
            ->add('publication', \Symfony\Bridge\Doctrine\Form\Type\EntityType::class , array(
                'required' => TRUE,
                'class' => 'LGMagazineBundle:Publication',
            ))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'LG\MagazineBundle\Entity\Issue'
        ));
    }
}
