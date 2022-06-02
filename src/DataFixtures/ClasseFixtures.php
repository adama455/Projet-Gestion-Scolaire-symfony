<?php

namespace App\DataFixtures;

use App\Entity\Classe;
use App\Entity\RP;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ClasseFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        for ($i=1; $i <= 3; $i++){  
            $rp= new RP();
            $rp->setNomComplet("Khadim NIASS");
            $rp->setLogin("niass@gmail.com");
            $rp->setPassword("passer123");
            $manager->persist($rp);
            $classe= new Classe();
            $classe->setLibelle("Classe ".$i);
            $classe->setNiveau("Licence ".$i);
            $classe->setFiliere("Informatique");
            $classe->setRp($rp);
            $manager->persist($classe);
            $manager->flush();
        }
    }
}
