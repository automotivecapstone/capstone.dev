<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class QasTableSeeder extends Seeder {

	public function run()
	{
		$user = User::firstOrFail();
		$faker = Faker::create();

		foreach(range(1, 100) as $index)
		{
			
			Qa::create([
            'question' => $faker->sentence,
            'content' => $faker->paragraph,
            'image' =>'/uploaded/stockimage.png',
            'user_id'=> $user->id,
            'video' => '/uploaded/traffic.mov'
			]);
		}
	}

}