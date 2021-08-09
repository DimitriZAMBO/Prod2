<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ControlController extends AbstractController
{
    /**
     * @Route("/", name="control")
     */
    public function index(): Response
    {
        return $this->render('control/index.html.twig', [
            'controller_name' => 'ControlController',
        ]);
    }
}
