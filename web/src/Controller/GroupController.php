<?php

namespace App\Controller;

use App\Entity\DeveloperGroup;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GroupController extends AbstractController
{
    /**
     * @Route("/group/{id}", name="group_details")
     */
    public function package_details(DeveloperGroup $group) {
        return $this->render('page/group/details.html.twig', [
            'group' => $group,
        ]);
    }
}
