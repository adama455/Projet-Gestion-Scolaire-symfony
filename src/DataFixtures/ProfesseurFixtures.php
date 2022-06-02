<?php

namespace App\DataFixtures;

use App\Entity\RP;
use App\Entity\Professeur;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class ProfesseurFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        for ($i=1; $i <2 ; $i++) { 
            
            $rp= new RP();
            $rp->setNomComplet("Souleymane dieye");
            $rp->setLogin("dieyeo@gmail.com");
            $rp->setPassword("dieye123");
            $manager->persist($rp);

            $prof= new Professeur();
            $prof->setGrade("dieye");
            $prof->setNomComplet("dieye dieye");
            $prof->setRp($rp);
            $manager->persist($prof);
            $manager->flush();
        }
    }
}
