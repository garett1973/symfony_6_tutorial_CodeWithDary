<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $movie = new Movie();
        $movie->setTitle('The Matrix');
        $movie->setReleaseYear(1999);
        $movie->setDescription('A computer hacker learns from mysterious rebels about the true nature of his reality and his role in the war against its controllers.');
        $movie->setImagePath('https://images.pexels.com/photos/57043/pexels-photo-57043.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');

        // Adding data to pivot table
        $movie->addActor($this->getReference('actor_1'));
        $movie->addActor($this->getReference('actor_2'));
        $manager->persist($movie);

        $movie2 = new Movie();
        $movie2->setTitle('The Matrix Reloaded');
        $movie2->setReleaseYear(2003);
        $movie2->setDescription('Neo and the rebel leaders estimate that they have 72 hours until 250,000 probes discover Zion and destroy it and its inhabitants. During this, Neo must decide how he can save Trinity from a dark fate in his dreams.');
        $movie2->setImagePath('https://images.pexels.com/photos/65437/pexels-photo-65437.jpeg?auto=compress&cs=tinysrgb&w=1600');

        // Adding data to pivot table
        $movie2->addActor($this->getReference('actor_3'));
        $movie2->addActor($this->getReference('actor_4'));
        $movie2->addActor($this->getReference('actor_5'));
        $manager->persist($movie2);

        $manager->flush();
    }
}

