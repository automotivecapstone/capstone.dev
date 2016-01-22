<?php

class TagUserTableSeeder extends Seeder {

	public function run()
	{

		$users =  User::all();

		$tags = Tag::lists('id');
		$last = count($tags) - 1;

		
		foreach($users as $user)      
		{
           $user->tags()->attach( $tags[ rand(0, $last ) ] );
        }

        foreach($users as $user)      
		{
           $user->tags()->attach( $tags[ rand(0, $last ) ] );
        }

        foreach($users as $user)      
		{
           $user->tags()->attach( $tags[ rand(0, $last ) ] );
        }
		
	}

}