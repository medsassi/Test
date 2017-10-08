<?php

namespace Project\InsectBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FriendshipType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('friendTo')
            ->add('isFriend')
            ->add('friendSince')
            ->add('friendOf')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Project\InsectBundle\Entity\Friendship'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'project_insectbundle_friendship';
    }
}
