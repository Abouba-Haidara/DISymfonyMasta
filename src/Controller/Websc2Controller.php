<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Websc2Controller extends AbstractController
{
    /**
     * @Route("/websc2", name="websc2")
     */
    public function index(): Response
    {
        return $this->render('websc2/index.html.twig', [
            'controller_name' => 'Websc2Controller',
        ]);
    }
}
