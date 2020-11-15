<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SwaggerController extends AbstractController
{
    /**
     * @Route("/swagger", name="swagger")
     */
    public function index()
    {
        return $this->render('page/swagger/index.html.twig', [
        ]);
    }
}
