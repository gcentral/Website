<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DonateController extends AbstractController
{
    /**
     * @Route("/donate", name="donate")
     */
    public function index()
    {
        return $this->render('page/donate/index.html.twig', [
            'controller_name' => 'DonateController',
        ]);
    }
}
