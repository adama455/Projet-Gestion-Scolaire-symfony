<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\RP;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class RPFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $faker = Factory::create();
        for ($i=1; $i < 8 ; $i++) { 
            $rp = new RP();
            $rp->setNomComplet($faker->name());
            $rp->setLogin($faker->email());
            $rp->setPassword($faker->password());
            $manager->persist($rp);
            
        }

        $manager->flush();
    }
}
