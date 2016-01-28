<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$images = ['/img/IMG_1218.JPG', '/img/IMG_1230.JPG', '/img/IMG_1256.JPG', '/img/IMG_1516.JPG', '/img/IMG_1589.JPG', '/img/IMG_1723.JPG', '/img/IMG_1755.JPG', '/img/IMG_1792.JPG', '/css/monkey-icon-taupe-on-cream.png', '/css/monkey-icon-taupe-on-cream.png', '/css/monkey-icon-taupe-on-cream.png', '/css/monkey-icon-taupe-on-cream.png', '/css/monkey-icon-taupe-on-cream.png', '/css/monkey-icon-taupe-on-cream.png'];

		$user = new User();
		$user->username = 'admin';
		$user->email = 'info@codeup.com';
		$user->password = $_ENV['DB_PASS'];
		$user->image = '/css/monkey-icon-taupe-on-cream.png';
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
            'image' => $images[mt_rand(0,(count($images)-1))],
            'tut_modal'=>true,
            'qa_modal'=>true
			]);
		}
	}

}