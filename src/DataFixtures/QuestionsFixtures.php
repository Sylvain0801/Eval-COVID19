<?php

namespace App\DataFixtures;

use App\Entity\Question;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;

class QuestionsFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Faker\Factory::create('fr_FR');
        for ($i = 0; $i < 30; $i++) {
            $index = $i % 6 + 1;
            $question = new Question();
            $question
                ->setQuestion($faker->realText(40, $indexSize = 2) . '?')
                ->setAnswer($faker->realText(300, $indexSize = 2));

                $manager->persist($question);
        }

        $manager->flush();
    }
}
