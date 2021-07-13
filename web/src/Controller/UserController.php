<?php

namespace App\Controller;

use \DateTime;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

use App\Form\RegistrationType;
use App\Form\ChangePassType;
use App\Entity\User;

use App\Service\Mailer;

class UserController extends AbstractController
{
    /**
     * @Route("/user/{id}", name="user_info")
     */
    public function userInfo(User $user)
    {
        return $this->render('user/userinfo.html.twig', [
            'controller_name' => 'UserController',
            'profile' => $user
        ]);
    }

    /**
     * @Route("/profile", name="profile", methods={"GET"})
     */
    public function profile()
    {
        $user = $this->getUser();

        return $this->render('user/profile.html.twig', [
            'userJson' => json_encode($user->userProfile())
        ]);
    }
}
