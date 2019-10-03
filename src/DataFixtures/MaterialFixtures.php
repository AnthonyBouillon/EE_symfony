<?php

namespace App\DataFixtures;

use App\Entity\Material;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class MaterialFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 1; $i <= 50; $i++) {
            $material = new Material();
            $material->setName("Nom du produit numéro : " . $i)
                ->setContent("Contenu de l'article")
                ->setPrice(19.99)
                ->setQuantity(10)
                ->setCreatedAt(new \DateTime());

            $manager->persist($material);
        }

        $manager->flush();
    }
}
