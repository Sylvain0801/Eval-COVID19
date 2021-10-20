<?php

namespace App\DataFixtures;

use App\Entity\Post;
use DateTimeImmutable;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;

class PostFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Faker\Factory::create('fr_FR');
        for ($i = 0; $i < 18; $i++) {
            $index = $i % 6 + 1;
            $post = new Post();
            $post
                ->setCategory($faker->realText(30, $indexSize = 2))
                ->setTitle($faker->realText(45, $indexSize = 2))
                ->setContent($faker->realText(650, $indexSize = 2))
                ->setLikes(rand(15, 85))
                ->setComments(rand(15, 85))
                ->setCreatedAt(DateTimeImmutable::createFromMutable($faker->dateTimeBetween('-10 months', 'now')))
                ->setImgPath("assets/images/actu_$index.jpg");

                $manager->persist($post);
        }


        $manager->flush();
    }
}
