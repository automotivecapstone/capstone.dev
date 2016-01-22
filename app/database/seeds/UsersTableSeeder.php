<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$user = new User();
		$user->username = 'admin';
		$user->email = 'info@codeup.com';
		$user->password = $_ENV['DB_PASS'];
		$user->image = '/uploaded/stockimage.png';
		$user->tut_modal = true;
        $user->qa_modal = true;
		$user->save();

		$faker = Faker::create();

		foreach(range(1, 100) as $index)
		{
			User::create([
            'username' => $faker->name,
            'email' => $faker->email,
            'password' => 'secret',
            'image' => $faker->image,
            'tut_modal'=>true,
            'qa_modal'=>true
			]);
		}
	}

}