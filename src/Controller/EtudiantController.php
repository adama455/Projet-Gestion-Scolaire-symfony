<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EtudiantController extends AbstractController
{
    
    #[Route('/etudiant', name: 'app_etudiant')]
    public function index(): Response
    {
        $age=25;
        return $this->render('etudiant/index.html.twig', [
            'age' => $age,
        ]);
    }
}
