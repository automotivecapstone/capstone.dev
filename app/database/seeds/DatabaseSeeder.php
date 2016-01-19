<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		DB::table('users')->delete();
		DB::table('qas')->delete();
		DB::table('tutorials')->delete();
		DB::table('tags')->delete();
		DB::table('comments')->delete();
		DB::table('tag_tutorial')->delete();
		DB::table('qa_tag')->delete();


		$this->call('UsersTableSeeder');
		$this->call('QasTableSeeder');
		$this->call('TutorialsTableSeeder');
		$this->call('TagsTableSeeder');
		$this->call('CommentsTableSeeder');
		$this->call('Tag_TutorialsTableSeeder');
		$this->call('Qa_TagTableSeeder');

	}

}
