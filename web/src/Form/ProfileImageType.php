<?php
// CRTD This entire file is now obsolete, right?
namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class ProfileImageInfo {
    private $profileImage;

    public function getProfileImage() {
        return $this->profileImage;
    }

    public function setProfileImage($profileImage) {
        $this->profileImage = $profileImage;
    }
}

class ProfileImageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('profile_image', FileType::class, [
                'label' => 'Profile Image (jpg, png)',

                'mapped' => false,

                'required' => false

                // 'constraints' => [
                //     new File([
                //         'maxSize' => '1024k',
                //         'mimeTypes' => [
                //             'image/png',
                //             'image/jpeg'
                //         ],
                //         'mimeTypesMessage' => 'Please upload a valid image file, only jpeg and png files are accepted.'
                //     ])
                // ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ProfileImageInfo::class,
        ]);
    }
}