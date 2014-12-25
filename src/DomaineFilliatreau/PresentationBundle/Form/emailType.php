<?php

namespace DomaineFilliatreau\PresentationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class emailType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName',       'text')
            ->add('lastName',        'text')
            ->add('emailAddress',    'text')
            ->add('title',           'text')
            ->add('content',         'textarea')
            ->add('save',      'submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'DomaineFilliatreau\PresentationBundle\Entity\email'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'domainefilliatreau_presentationbundle_email';
    }
}
