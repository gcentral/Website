<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CollaborateController extends AbstractController
{
    /**
     * @Route("/collaborate", name="collaborate")
     */
    public function index()
    {
        return $this->render('page/collaborate/index.html.twig', [
            'controller_name' => 'CollaborateController',
        ]);
    }
}
