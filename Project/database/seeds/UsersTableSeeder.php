<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->insert([
	    		'name' => 'Sam De Wachter',
	    		'email' => 'samdewachter@hotmail.com',
	    		'password' => bcrypt('123456'),
	    		'town' => 'Kruibeke',
	    		'console' => 'PlayStation 3',
	    		'genre' => 'Action',
	    		'admin' => true,
	    	]);

    	DB::table('users')->insert([
	    		'name' => 'Stig Van Brabant',
	    		'email' => 'stigvanbrabant@hotmail.com',
	    		'password' => bcrypt('123456'),
	    		'town' => 'Hoboken',
	    		'console' => 'PlayStation 4',
	    		'genre' => 'Adventure',
	    		'admin' => true,
	    	]);

    	DB::table('users')->insert([
	    		'name' => 'Tom Roels',
	    		'email' => 'tomroels@hotmail.com',
	    		'password' => bcrypt('123456'),
	    		'town' => 'Kruibeke',
	    		'console' => 'PlayStation 3',
	    		'genre' => 'MMO',
	    		'admin' => false,
	    	]);

    	DB::table('users')->insert([
	    		'name' => 'Bennert Robberecht',
	    		'email' => 'bennertrobberecht@hotmail.com',
	    		'password' => bcrypt('123456'),
	    		'town' => 'Temse',
	    		'console' => 'Xbox One',
	    		'genre' => 'RPG',
	    		'admin' => false,
	    	]);

    	DB::table('users')->insert([
	    		'name' => 'Jeff Monballiu',
	    		'email' => 'jeffmonballiu@hotmail.com',
	    		'password' => bcrypt('123456'),
	    		'town' => 'Hemiksem',
	    		'console' => 'Xbox 360',
	    		'genre' => 'Shooter',
	    		'admin' => false,
	    	]);

    	DB::table('users')->insert([
	    		'name' => 'Jeffrey Moorthamer',
	    		'email' => 'jeffreymoorthamer@hotmail.com',
	    		'password' => bcrypt('123456'),
	    		'town' => 'Antwerpen',
	    		'console' => 'PlayStation 4',
	    		'genre' => 'Sport',
	    		'admin' => false,
	    	]);
    }
}
