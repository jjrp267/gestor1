<?php

namespace CARP\MtoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TareasType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tarea')
            ->add('desctarea')
            ->add('fechatarea')
            ->add('cantidad')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CARP\MtoBundle\Entity\Tareas'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'carp_mtobundle_tareas';
    }
}
