<?php

namespace AppCofidurBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class TaskType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ordre', IntegerType::class,  ['label' => 'task.order'])
            ->add('name', TextType::class,  ['label' => 'task.name'])
            ->add('save', SubmitType::class,    ['label' => 'task.save.submit']);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppCofidurBundle\Entity\Task',
        ));
    }
}
