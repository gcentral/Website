<?php

namespace App\Controller\API;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

use Carbon\Carbon;

use App\Service\UserService;

class UserAPIController extends AbstractController
{
    /**
     * @Route("/profile/updatefullname", name="update_full_name")
     */
    public function update_full_name(Request $request) {
        $entityManager = $this->getDoctrine()->getManager();

        $fullname = $request->getContent();

        // change full name
        $user = $this->getUser();
        $user->setFullName($fullname);

        // write changes to database
        $entityManager->persist($user);
        $entityManager->flush(); 

        return new Response('Updated the data:'.$user->getFullName());
    }
}
