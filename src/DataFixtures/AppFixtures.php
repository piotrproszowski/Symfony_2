<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\MicroPost;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $microPost1 = new MicroPost(
            title: 'Hello, form Poland!',
            text: 'Lorem ipsum dolor sit amet',
            datetime: new \DateTime()
        );
        $manager->persist($microPost1);
        $manager->flush();


        $microPost2 = new MicroPost(
            title: 'Hello, from USA!',
            text: 'Lorem ipsum dolor sit amet',
            datetime: new \DateTime()
        );
        $manager->persist($microPost2);
        $manager->flush();

        $microPost3 = new MicroPost(
            title: 'Hello, from France!',
            text: 'Lorem ipsum dolor sit amet',
            datetime: new \DateTime()
        );
        $manager->persist($microPost3);
        $manager->flush();
    }
}
