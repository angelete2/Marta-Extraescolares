<?php

namespace Hoplite\TeachersBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class TeacherType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('first_name')
            ->add('last_name')
            ->add('login')
            ->add('password')
            ->add('salt')
            ->add('created_at')
            ->add('updated_at')
        ;
    }

    public function getName()
    {
        return 'hoplite_teachersbundle_teachertype';
    }
}
