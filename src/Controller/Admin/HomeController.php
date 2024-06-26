<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('', name: 'app_admin_home')]
    public function index(): Response
    {
        return $this->redirectToRoute('app_admin_dashboard');
    }
}
