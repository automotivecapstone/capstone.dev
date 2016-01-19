<?php

use Faker\Factory as Faker;

class Tag_TutorialsTableSeeder extends Seeder {

	public function run()
	{

		$tutorials = Tutorial::all();

		$tags = Tag::lists('id');
		$last = count($tags) - 1;

		
		foreach($tutorials as $tutorial)      
		{
           $tutorial->tags()->attach( $tags[ rand(0, $last ) ] );
        }

        foreach($tutorials as $tutorial)      
		{
           $tutorial->tags()->attach( $tags[ rand(0, $last ) ] );
        }

        foreach($tutorials as $tutorial)      
		{
           $tutorial->tags()->attach( $tags[ rand(0, $last ) ] );
        }
		
	}

}