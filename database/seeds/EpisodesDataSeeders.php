<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class EpisodesDataSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('episodes')->insert([
            //========== Movie 1===============
            [
                'movie_id' => '1',
                'episode' => 'Episode 1',
                'title' => 'A Study in Pink'
            ],
            [
                'movie_id' => '1',
                'episode' => 'Episode 2',
                'title' => 'The Blind Banker'
            ],
            [
                'movie_id' => '1',
                'episode' => 'Episode 3',
                'title' => 'The Great Game'
            ],
            [
                'movie_id' => '1',
                'episode' => 'Episode 4',
                'title' => 'A Scandal in Belgravia'
            ],
            [
                'movie_id' => '1',
                'episode' => 'Episode 5',
                'title' => 'The Hounds of Baskerville'
            ],
            [
                'movie_id' => '1',
                'episode' => 'Episode 6',
                'title' => 'The Reichenbach Fall'
            ],
            [
                'movie_id' => '1',
                'episode' => 'Episode 7',
                'title' => 'The Empty Hearse'
            ],
            [
                'movie_id' => '1',
                'episode' => 'Episode 8',
                'title' => 'The Sign of Three'
            ],

            //=========== Movie 2 =============

            [
                'movie_id' => '2',
                'episode' => 'Episode 1',
                'title' => 'Chapter One: The Vanishing of Will Byers'
            ],
            [
                'movie_id' => '2',
                'episode' => 'Episode 2',
                'title' => 'Chapter Two: The Weirdo on Maple Street'
            ],
            [
                'movie_id' => '2',
                'episode' => 'Episode 3',
                'title' => 'Chapter Three: Holly, Jolly'
            ],
            [
                'movie_id' => '2',
                'episode' => 'Episode 4',
                'title' => 'Chapter Four: The Body'
            ],
            [
                'movie_id' => '2',
                'episode' => 'Episode 5',
                'title' => 'Chapter Five: The Flea and the Acrobat'
            ],
            [
                'movie_id' => '2',
                'episode' => 'Episode 6',
                'title' => 'Chapter Six: The Monster'
            ],
            [
                'movie_id' => '2',
                'episode' => 'Episode 7',
                'title' => 'Chapter Seven: The Bathtub'
            ],
            [
                'movie_id' => '2',
                'episode' => 'Episode 8',
                'title' => 'Chapter Eight: The Upside Down'
            ],

            //============== Movie 3 ====================

            [
                'movie_id' => '3',
                'episode' => 'Episode 1',
                'title' => 'The Original'
            ],
            [
                'movie_id' => '3',
                'episode' => 'Episode 2',
                'title' => 'Chestnut'
            ],
            [
                'movie_id' => '3',
                'episode' => 'Episode 3',
                'title' => 'The Stray'
            ],
            [
                'movie_id' => '3',
                'episode' => 'Episode 4',
                'title' => 'Dissonance Theory'
            ],
            [
                'movie_id' => '3',
                'episode' => 'Episode 5',
                'title' => 'Contrapasso'
            ],
            [
                'movie_id' => '3',
                'episode' => 'Episode 6',
                'title' => 'The Adversary'
            ],
            [
                'movie_id' => '3',
                'episode' => 'Episode 7',
                'title' => "Trompe L'Oeil"
            ],
            [
                'movie_id' => '3',
                'episode' => 'Episode 8',
                'title' => 'Trace Decay'
            ],

            //=============== Movie 4 ==============

            [
                'movie_id' => '4',
                'episode' => 'Episode 1',
                'title' => 'The Name of the Game'
            ],
            [
                'movie_id' => '4',
                'episode' => 'Episode 2',
                'title' => 'Cherry'
            ],
            [
                'movie_id' => '4',
                'episode' => 'Episode 3',
                'title' => 'Get Some'
            ],
            [
                'movie_id' => '4',
                'episode' => 'Episode 4',
                'title' => 'The Female of the Species'
            ],
            [
                'movie_id' => '4',
                'episode' => 'Episode 5',
                'title' => 'Good for the Soul'
            ],
            [
                'movie_id' => '4',
                'episode' => 'Episode 6',
                'title' => 'The Innocents'
            ],
            [
                'movie_id' => '4',
                'episode' => 'Episode 7',
                'title' => "The Self-Preservation Society"
            ],
            [
                'movie_id' => '4',
                'episode' => 'Episode 8',
                'title' => 'You Found Me'
            ],

            //=============== Movie 5 ===============

            [
                'movie_id' => '5',
                'episode' => 'Episode 1',
                'title' => 'Hard Nox'
            ],
            [
                'movie_id' => '5',
                'episode' => 'Episode 2',
                'title' => 'Payday'
            ],
            [
                'movie_id' => '5',
                'episode' => 'Episode 3',
                'title' => 'Drug Short'
            ],
            [
                'movie_id' => '5',
                'episode' => 'Episode 4',
                'title' => 'Cartel Bank'
            ],
            [
                'movie_id' => '5',
                'episode' => 'Episode 5',
                'title' => 'The Maple Syrup Heist'
            ],
            [
                'movie_id' => '5',
                'episode' => 'Episode 6',
                'title' => 'The Confidence Man'
            ],
            [
                'movie_id' => '5',
                'episode' => 'Episode 7',
                'title' => "The Wagon Wheel"
            ],
            [
                'movie_id' => '5',
                'episode' => 'Episode 8',
                'title' => 'The Man at the Top'
            ],

            //============= Movie 6 =================

            [
                'movie_id' => '6',
                'episode' => 'Episode 1',
                'title' => 'Standing Up in the Milky Way'
            ],
            [
                'movie_id' => '6',
                'episode' => 'Episode 2',
                'title' => 'Some of the Things That Molecules Do'
            ],
            [
                'movie_id' => '6',
                'episode' => 'Episode 3',
                'title' => 'When Knowledge Conquered Fear'
            ],
            [
                'movie_id' => '6',
                'episode' => 'Episode 4',
                'title' => 'A Sky Full of Ghosts'
            ],
            [
                'movie_id' => '6',
                'episode' => 'Episode 5',
                'title' => 'Hiding in the Light'
            ],
            [
                'movie_id' => '6',
                'episode' => 'Episode 6',
                'title' => 'Deeper, Deeper, Deeper Still'
            ],
            [
                'movie_id' => '6',
                'episode' => 'Episode 7',
                'title' => "The Clean Room"
            ],
            [
                'movie_id' => '6',
                'episode' => 'Episode 8',
                'title' => 'Sisters of the Sun'
            ],

            //============= Movie 7 ==============

            [
                'movie_id' => '7',
                'episode' => 'Episode 1',
                'title' => 'The Racial Wealth Gap'
            ],
            [
                'movie_id' => '7',
                'episode' => 'Episode 2',
                'title' => 'Designer DNA'
            ],
            [
                'movie_id' => '7',
                'episode' => 'Episode 3',
                'title' => 'Monogamy'
            ],
            [
                'movie_id' => '7',
                'episode' => 'Episode 4',
                'title' => 'K-Pop'
            ],
            [
                'movie_id' => '7',
                'episode' => 'Episode 5',
                'title' => 'Cryptocurrency'
            ],
            [
                'movie_id' => '7',
                'episode' => 'Episode 6',
                'title' => 'Why Diets Fail'
            ],
            [
                'movie_id' => '7',
                'episode' => 'Episode 7',
                'title' => "The Stock Market"
            ],
            [
                'movie_id' => '7',
                'episode' => 'Episode 8',
                'title' => "eSports"
            ],

            //============ Movie 8 ===============

            [
                'movie_id' => '8',
                'episode' => 'Episode 1',
                'title' => 'Part 1'
            ],
            [
                'movie_id' => '8',
                'episode' => 'Episode 2',
                'title' => 'Part 2'
            ],
            [
                'movie_id' => '8',
                'episode' => 'Episode 3',
                'title' => 'Part 3'
            ],
            [
                'movie_id' => '8',
                'episode' => 'Episode 4',
                'title' => 'Part 4'
            ],
            [
                'movie_id' => '8',
                'episode' => 'Episode 5',
                'title' => 'Part 5'
            ],
            [
                'movie_id' => '8',
                'episode' => 'Episode 6',
                'title' => 'Part 6'
            ],
            [
                'movie_id' => '8',
                'episode' => 'Episode 7',
                'title' => "Part 7"
            ],

            //============= Movie 9 ==============

            [
                'movie_id' => '9',
                'episode' => 'Episode 1',
                'title' => '1:23:45'
            ],
            [
                'movie_id' => '9',
                'episode' => 'Episode 2',
                'title' => 'Please Remain Calm'
            ],
            [
                'movie_id' => '9',
                'episode' => 'Episode 3',
                'title' => 'Open Wide, O Earth'
            ],
            [
                'movie_id' => '9',
                'episode' => 'Episode 4',
                'title' => 'The Happiness of All Mankind'
            ],
            [
                'movie_id' => '9',
                'episode' => 'Episode 5',
                'title' => 'Vichnaya Pamyat'
            ],

            //============ Movie 10 ================

            [
                'movie_id' => '10',
                'episode' => 'Episode 1',
                'title' => 'Wolferton Splash'
            ],
            [
                'movie_id' => '10',
                'episode' => 'Episode 2',
                'title' => 'Hyde Park Corner'
            ],
            [
                'movie_id' => '10',
                'episode' => 'Episode 3',
                'title' => 'Windsor'
            ],
            [
                'movie_id' => '10',
                'episode' => 'Episode 4',
                'title' => 'Act of God'
            ],
            [
                'movie_id' => '10',
                'episode' => 'Episode 5',
                'title' => 'Smoke and Mirrors'
            ],
            [
                'movie_id' => '10',
                'episode' => 'Episode 6',
                'title' => 'Gelignite'
            ],
            [
                'movie_id' => '10',
                'episode' => 'Episode 7',
                'title' => "Scientia Potentia Est"
            ],
            [
                'movie_id' => '10',
                'episode' => 'Episode 8',
                'title' => 'Pride & Joy'
            ],

            //============== Movie 11 ================

            [
                'movie_id' => '11',
                'episode' => 'Episode 1',
                'title' => "The Crocodile's Dilemma"
            ],
            [
                'movie_id' => '11',
                'episode' => 'Episode 2',
                'title' => 'The Rooster Prince'
            ],
            [
                'movie_id' => '11',
                'episode' => 'Episode 3',
                'title' => 'A Muddy Road'
            ],
            [
                'movie_id' => '11',
                'episode' => 'Episode 4',
                'title' => 'Eating the Blame'
            ],
            [
                'movie_id' => '11',
                'episode' => 'Episode 5',
                'title' => 'The Six Ungraspables'
            ],
            [
                'movie_id' => '11',
                'episode' => 'Episode 6',
                'title' => "Buridan's Ass"
            ],
            [
                'movie_id' => '11',
                'episode' => 'Episode 7',
                'title' => "Who Shaves the Barber?"
            ],
            [
                'movie_id' => '11',
                'episode' => 'Episode 8',
                'title' => 'The Heap'
            ],

            //============ Movie 12 =============

            [
                'movie_id' => '12',
                'episode' => 'Episode 1',
                'title' => 'Openings'
            ],
            [
                'movie_id' => '12',
                'episode' => 'Episode 2',
                'title' => 'Exchanges'
            ],
            [
                'movie_id' => '12',
                'episode' => 'Episode 3',
                'title' => 'Doubled Pawns'
            ],
            [
                'movie_id' => '12',
                'episode' => 'Episode 4',
                'title' => 'Middle Game'
            ],
            [
                'movie_id' => '12',
                'episode' => 'Episode 5',
                'title' => 'Fork'
            ],
            [
                'movie_id' => '12',
                'episode' => 'Episode 6',
                'title' => 'Adjournment'
            ],
            [
                'movie_id' => '12',
                'episode' => 'Episode 7',
                'title' => "End Game"
            ]

        ]);
    }
}
