<?php

namespace App\Form;

use App\Entity\Period;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PeriodType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateStart')
            ->add('dateEnd')
            ->add('workedDay')
            ->add('periodExpense')
            ->add('periodSalary')
            ->add('periodchargePayload')
            ->add('Contract')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Period::class,
        ]);
    }
}
