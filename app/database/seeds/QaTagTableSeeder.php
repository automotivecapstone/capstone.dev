<?php

use Faker\Factory as Faker;

class Qa_TagTableSeeder extends Seeder {

	public function run()
	{

		$qas = Qa::all();

		$tags = Tag::lists('id');
		$last = count($tags) - 1;

		
		foreach($qas as $qa)      
		{
           $qa->tags()->attach( $tags[ rand(0, $last ) ] );
        }

        foreach($qas as $qa)      
		{
           $qa->tags()->attach( $tags[ rand(0, $last ) ] );
        }

        foreach($qas as $qa)      
		{
           $qa->tags()->attach( $tags[ rand(0, $last ) ] );
        }
		
	}

}