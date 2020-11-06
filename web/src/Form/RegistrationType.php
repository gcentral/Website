<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('email', EmailType::class, [
                'help' => "Used to log in. We'll email you a random password for your first login."
            ])
            ->add('display_name', TextType::class, [
                'help' => "The name we display for you throughout the site."
            ])
            ->add('full_name', TextType::class, [
                'help' => "Your real name will only be visible to organizers of events, administrators of the site, and anyone else you choose."
            ])
            ->add('location', TextType::class, [
                'help' => "Displayed on your profile to give people an idea of where you live/work."
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
