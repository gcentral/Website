<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\Validator\Constraints as SecurityAssert;

class ChangePassInfo {
    /**
     * @SecurityAssert\UserPassword(
     *  message = "Current password is incorrect."
     * )
     */
    private $oldPass;

    /**
     * @Assert\NotBlank
     */
    private $password;

    public function getOldPass() {
        return $this->oldPass;
    }

    public function setOldPass($oldPass) {
        $this->oldPass = $oldPass;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }
}

class ChangePassType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('old_pass', PasswordType::class, [
                'label' => 'Current Password',
                'attr' => ['class' => 'form-control mb-3'],
            ])
            ->add('password', RepeatedType::class, [
                'type' => PasswordType::class,
                'invalid_message' => 'Password fields must match.',
                'options' => ['attr' => ['class' => 'form-control mb-3']],
                'first_options' => ['label' => 'New Password'],
                'second_options' => ['label' => 'Confirm Password'],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ChangePassInfo::class,
        ]);
    }
}
