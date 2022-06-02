<?php
namespace App\Controller;

use App\Entity\Professeur;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfesseurController extends AbstractController
{
    #[Route('/professeur', name: 'app_professeur')]
    public function index(EntityManagerInterface $em): Response
    {
        $prof=$em->getRepository(Professeur::class)->findAll();
        // dd($prof);
        return $this->render('professeur/index.html.twig', [
            'profs' => $prof,
            'title' => "LISTE DES PROFESSEURS",
        ]);
    }
}
