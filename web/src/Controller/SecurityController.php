<?php

namespace App\Controller;

use \DateTime;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

use App\Form\RegistrationType;
use App\Form\ChangePassType;
use App\Entity\User;

use App\Service\Mailer;

class SecurityController extends AbstractController
{
    /**
     * @Route("/register", name="user_register")
     *
     * @return void
     */
    public function register(Request $req, UserPasswordEncoderInterface $passwordEncoder, Mailer $mailer) {
        $user = new User();
        $form = $this->createForm(RegistrationType::class, $user);

        $form->handleRequest($req);

        if ($form->isSubmitted() && $form->isValid()) {
            $user = $form->getData();

            $password = bin2hex(random_bytes(16));

            $site = $req->getSchemeAndHttpHost();

            $user->setPassword($passwordEncoder->encodePassword($user, $password));

            $user->setRegistered(new DateTime());
            $user->setRegIp($req->getClientIp());
            //$user->setTempKey(bin2hex(random_bytes(64)));

            $mail = $mailer->createMail();

            $mail->setFrom('negentropicdev@gmail.com', 'GCentral Admin');
            $mail->addAddress($user->getEmail(), $user->getFullName());
            $mail->Subject = $req->getHost() . ' User Registration';

            $msg = $this->renderView('email/registration.html.twig', [
                'newuser' => $user,
                'newpass' => $password,
                'site' => $site
            ]);

            $mail->msgHTML($msg);
            if (!$mail->send()) {
                $error = 'There was an error sending your user registration email: ' . $mail->ErrorInfo . '<br>';
                $error .= 'Email us at <a href="mailto:negentropicdev@gmail.com">negentropicdev@gmail.com</a> if you need assistance.';

                return $this->render('user/register.html.twig', [
                    'form' => $form->createView(),
                    'error' => $error
                ]);
            }
            
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash('success', 'Registration successful. Check your email for your one-time use password to log in.');

            return $this->redirectToRoute('home');
        }

        return $this->render('user/register.html.twig', [
            'form' => $form->createView(),
            'error' => null,
        ]);
    }

    /**
     * @Route("/pass", name="change_pass")
     */
    public function changePass(Request $req, UserPasswordEncoderInterface $passwordEncoder, Mailer $mailer): Response {
        $form = $this->createForm(ChangePassType::class);

        $form->handleRequest($req);

        if ($form->isSubmitted() && $form->isValid()) {
            $user = $this->getUser();
            $user->setPassword($passwordEncoder->encodePassword($user, $form->getData()->getPassword()));

            $mail = $mailer->createMail();

            $mail->setFrom($_ENV['MAIL_EMAIL'], $_ENV['MAIL_NAME']);
            $mail->addAddress($user->getEmail(), $user->getFullName());
            $mail->Subject = $req->getHost() . ' User Password Changed';

            $msg = $this->renderView('email/changepass.html.twig');

            $mail->msgHTML($msg);
            $mail->send();

            $user->setResetPass(false);
            $user->setTempKey('');

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash('success', 'Password changed.');

            return $this->redirectToRoute('profile');
        }
        
        return $this->render('security/changepass.html.twig', [
            'form' => $form->createView(),
            'error' => null,
        ]);
    }

    /**
     * @Route("/login", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout()
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}
