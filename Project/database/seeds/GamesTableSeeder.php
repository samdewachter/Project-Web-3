<?php

use Illuminate\Database\Seeder;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	DB::table('games')->insert([
                'name' => 'Uncharted 3',
                'console' => 'playStation 4',
                'genre' => 'Adventure',
                'user_id'=> 2,
                'photoUrl' => "http://www.giantbomb.com/api/image/scale_small/2215091-box_unch3.png",
                'description' => "Uncharted 3: Drake's Deception, like previous entries in the series, is a cross between a cover-based third-person shooter and a platformer with some light puzzle solving. Uncharted 3 deals with the theme of deception while exploring Nathan Drake's relationship with Victor Sullivan, his mentor and father figure. The game is based on T.E. Lawrence's days as an archaeologist and takes players all over the world in search of the Iram of the Pillars, also known as the Atlantis of the Sands.",
            ]);

        DB::table('games')->insert([
                'name' => 'Fallout 3',
                'console' => 'playStation 3',
                'genre' => 'RPG',
                'user_id'=> 3,
                'photoUrl' => "http://www.giantbomb.com/api/image/scale_small/1974388-box_fallout3.png",
                'description' => "Fallout 3 is the third game in the Fallout series and the first to feature a first person perspective. Developed and published by Bethesda Softworks, it was released on October 28, 2008 on the PC, Xbox 360 and PlayStation 3; the game takes place approximately thirty years after the events in Fallout 2. Although set in the same universe, Fallout 3 takes place in the Capital Wasteland in and around the Washington D.C. area, rather than California. The game blends design elements and approaches from both the Fallout and Elder Scrolls franchises, resulting in fan debate about Fallout 3's legitimacy as a 'real' Fallout game.",
            ]);

        DB::table('games')->insert([
                'name' => 'Grand Theft Auto V',
                'console' => 'Xboxe One',
                'genre' => 'Shooter',
                'user_id'=> 4,
                'photoUrl' => "http://www.giantbomb.com/api/image/scale_small/2463980-grand%20theft%20auto%20v.jpg",
                'description' => "Grand Theft Auto V (GTA V) takes the franchise back to the city of Los Santos previously seen in Grand Theft Auto: San Andreas. Unlike prior games in the series which focus on telling the story of a single player controlled character, GTA V features three central characters that the player is able to actively switch between at nearly any time during gameplay.",
            ]);

        DB::table('games')->insert([
                'name' => 'God Of War 3',
                'console' => 'playStation 3',
                'genre' => 'Action',
                'user_id'=> 5,
                'photoUrl' => "http://www.giantbomb.com/api/image/scale_small/1817063-box_gow3.png",
                'description' => "Kratos, now with 4x the polygons!God of War III is the fourth installment in the  God of War franchise. It is a third person action-adventure game based heavily on Greek Mythology. The main character, Kratos, is a fallen spartan general who must solve puzzles, traverse dangerous locales and kill anything that gets in his way.",
            ]);

        DB::table('games')->insert([
                'name' => 'Borderlands',
                'console' => 'Xbox 360',
                'genre' => 'RPG',
                'user_id'=> 6,
                'photoUrl' => 'http://www.giantbomb.com/api/image/scale_small/2560037-blclean.jpg',
                'description' => "Borderlands is an original first-person role-playing shooter game developed by Gearbox Software. Its weapon system is a ground breaking content generation system that has a never ending variety of weapon and item drops. The game features a unique art style to complement its story, which places the player in the shoes of a treasure hunter in search of priceless alien artifacts. Borderlands features four-player co-op online, and the console versions feature two-player split-screen play locally.",
            ]);
    }
}
