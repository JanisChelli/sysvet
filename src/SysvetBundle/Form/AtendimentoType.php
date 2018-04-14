<?php

namespace SysvetBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class AtendimentoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('cliente')
                ->add('servico')
                ->add('info')
                ->add('status', ChoiceType::class, array(
                    'choices' => array(
                        "Aberto" => "ABERTO",
                        "Pago" => "PAGO",
                        "Cancelado" => "CANCELADO"
                        )
                    ));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SysvetBundle\Entity\Atendimento'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'sysvetbundle_atendimento';
    }


}
