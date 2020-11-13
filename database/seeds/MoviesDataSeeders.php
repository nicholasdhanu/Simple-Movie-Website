<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class MoviesDataSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            [
                'genre_id' => 1,
                'title' => 'Sherlock',
                'photo' => 'slPoster.jpg',
                'description' => 'Dr Watson, a former army doctor, finds himself sharing a flat with Sherlock Holmes, an eccentric individual with a knack for solving crimes. Together, they take on the most unusual cases.',
                'rating' => '4.75/5',
            ],
            [
                'genre_id' => 1,
                'title' => 'Stranger Things',
                'photo' => 'sTPoster.jpg',
                'description' => "A love letter to the '80s classics that captivated a generation, Stranger Things is set in 1983 Indiana, where a young boy vanishes into thin air. As friends, family and local police search for answers, they are drawn into an extraordinary mystery involving top-secret government experiments, terrifying supernatural forces and one very strange little girl.",
                'rating' => '4.8/5',
            ],
            [
                'genre_id' => 1,
                'title' => 'Westworld',
                'photo' => 'wwPoster.jpg',
                'description' => "A sci-fi drama set in an Old West theme park where guests interact with automatons in scenarios that are developed, overseen and scripted by the park's creative, security and quality assurance departments. Based on the 1973 feature film directorial debut by Michael Crichton.",
                'rating' => '4.7/5',
            ],
            [
                'genre_id' => 1,
                'title' => 'The Boys',
                'photo' => 'tbPoster.jpg',
                'description' => "A fun and irreverent take on what happens when superheroes abuse their superpowers rather than use them for good. It's the powerless against the superpowerful as ''The Boys'' embark on a heroic quest to expose the truth about ''The Seven'' and Vought -- the multibillion dollar conglomerate that manages these superheroes.",
                'rating' => '4.35/5',
            ],
            [
                'genre_id' => 2,
                'title' => 'Dirty Money',
                'photo' => 'dmPoster.jpg',
                'description' => "Dirty Money is a thrilling investigative series from Oscar Award-winning director Alex Gibney, which provides an up-close and personal view into untold stories of scandal and corruption in the world of business.",
                'rating' => '4.2/5',
            ],
            [
                'genre_id' => 2,
                'title' => 'Cosmos: A Spacetime Odyssey',
                'photo' => 'cosPoster.jpg',
                'description' => "Cosmos: A Spacetime Odyssey is a 2014 American science documentary television series. The show is a follow-up to the 1980 television series Cosmos: A Personal Voyage, which was presented by Carl Sagan on the Public Broadcasting Service and is considered a milestone for scientific documentaries",
                'rating' => '4.9/5',
            ],
            [
                'genre_id' => 2,
                'title' => 'Explained',
                'photo' => 'exPoster.jpg',
                'description' => "News site Vox is behind this series that puts the spotlight on topical issues that impact people's lives. The docuseries -- which features episodes that generally range from 15 to 20 minutes in length -- aims to dig deeper into topics, questions and ideas that aren't often part of the daily news cycle. Among the subjects covered are the rise of cryptocurrency, why diets fail, and the world of K-pop music.",
                'rating' => '3.9/5',
            ],
            [
                'genre_id' => 2,
                'title' => "Inside Bill's Brain: Decoding Bill Gates",
                'photo' => 'billPoster.jpg',
                'description' => "This three-part docuseries explores the mind and motivations of the celebrated tech visionary, business leader and philanthropist.",
                'rating' => '4/5',
            ],
            [
                'genre_id' => 3,
                'title' => 'Cherbobyl',
                'photo' => 'cbPoster.jpg',
                'description' => "CHERNOBYL dramatizes the story of the 1986 nuclear accident, one of the worst man-made catastrophes in history, and of the brave men and women who sacrificed to save Europe from unimaginable disaster, all the while battling a culture of disinformation.",
                'rating' => '5/5',
            ],
            [
                'genre_id' => 3,
                'title' => 'The Crown',
                'photo' => 'tcPoster.jpg',
                'description' => "The Crown tells the inside story of two of the most famous addresses in the world -- Buckingham Palace and 10 Downing Street - and the intrigues, love lives and machinations behind the great events that shaped the second half of the 20th century. Two houses, two courts, one Crown.",
                'rating' => '4.6/5',
            ],
            [
                'genre_id' => 3,
                'title' => 'Fargo',
                'photo' => 'fgPoster.jpg',
                'description' => 'An anthology series inspired by the 1996 Coen brothers film. The first season follows a drifter who brings trouble to small-town Minnesota in 2006, while Season 2 focuses on a young state police officer and Vietnam veteran in 1979 South Dakota and Minnesota.',
                'rating' => '4.55/5',
            ],
            [
                'genre_id' => 3,
                'title' => "The Queen's Gambit",
                'photo' => 'tqgPoster.jpg',
                'description' => "Based on the novel by Walter Tevis, the Netflix limited series drama The Queen's Gambit is a coming-of-age story that explores the true cost of genius. Abandoned and entrusted to a Kentucky orphanage in the late 1950s, a young Beth Harmon (Anya Taylor-Joy) discovers an astonishing talent for chess while developing an addiction to tranquilizers provided by the state as a sedative for the children. Haunted by her personal demons and fueled by a cocktail of narcotics and obsession, Beth transforms into an impressively skilled and glamorous outcast while determined to conquer the traditional boundaries established in the male-dominated world of competitive chess.",
                'rating' => '4.75/5',
            ]
        ]);

    }
}
