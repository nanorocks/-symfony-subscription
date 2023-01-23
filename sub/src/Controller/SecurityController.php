<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\SecurityBundle\Security;

class SecurityController extends AbstractController
{

    #[Route('/logout', name: 'app_logout', methods: ['GET'])]
    public function logout(Security $security)
    {
        $response = $security->logout();

        $response = $security->logout(false);

        return $this->redirectToRoute('app_dashboard');
    }
}
