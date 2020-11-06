<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ResourcesController extends AbstractController
{
    /**
     * @Route("/resources", name="resources")
     */
    public function index()
    {
        return $this->render('page/resources/index.html.twig', [
            'controller_name' => 'ResourcesController',
        ]);
    }
}
