<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CommentsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		$user = User::firstOrFail();
		$qa = Qa::firstOrFail();
		$tutorial = Tutorial::firstOrFail();



		foreach(range(1, 50) as $index)
		{
			Comment::create([
            'content' => $faker->sentence,
            'user_id'=> $user->id,
            'qa_id'=>$qa->id
			]);
		}

		foreach(range(1, 50) as $index)
		{
			Comment::create([
            'content' => $faker->sentence,
            'user_id'=> $user->id,
            'tutorial_id'=>$tutorial->id
			]);
		}
	}

}