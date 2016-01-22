<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class TutorialsTableSeeder extends Seeder {

	public function run()
	{
		$user = User::firstOrFail();
		$faker = Faker::create();

		foreach(range(1, 50) as $index)
		{
			Tutorial::create([
            'title' => $faker->sentence,
            'content'=> $faker->paragraph,
            'description'=> $faker->sentence,
            'image'=>'/uploaded/stockimage.png',
            'video' => '/uploaded/traffic.mov',
            'user_id'=>$user->id
			]);
		}
	}

}