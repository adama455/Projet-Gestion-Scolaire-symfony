<?php

namespace App\DataFixtures;

use App\Entity\AnneeScolaire;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AnneeScolaireFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        
        for ($i=1; $i <4 ; $i++) { 
            $annee= new AnneeScolaire();
            $annee->setLibelle("202".$i."- 202".$i);
            $manager->persist($annee);
        }

        $manager->flush();
    }
}
