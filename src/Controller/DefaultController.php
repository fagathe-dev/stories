<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
    #[Route(path: "", name: "app_default")]
    public function indexAction(): Response
    {
        return $this->render("layouts/default.html.twig");
    }
}
