<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class TagsTableSeeder extends Seeder {

	public function run()
	{
		$tag= new Tag();
		$tag->name = 'oil change';
		$tag->save();

		$tag= new Tag();
		$tag->name = 'Ford';
		$tag->save();

		$tag= new Tag();
		$tag->name = 'Ranger';
		$tag->save();

		$tag= new Tag();
		$tag->name = 'Camry';
		$tag->save();

		$tag= new Tag();
		$tag->name = 'windshield wipers';
		$tag->save();

		$tag= new Tag();
		$tag->name = 'hood';
		$tag->save();

		$tag= new Tag();
		$tag->name = 'tire';
		$tag->save();

		$tag= new Tag();
		$tag->name = 'Honda';
		$tag->save();

		$tag= new Tag();
		$tag->name = 'flat';
		$tag->save();

		$tag= new Tag();
		$tag->name = 'battery';
		$tag->save();

		$tag= new Tag();
		$tag->name = 'jump start';
		$tag->save();

		$tag= new Tag();
		$tag->name = 'oil pan';
		$tag->save();

		$tag= new Tag();
		$tag->name = 'rags';
		$tag->save();

		$tag= new Tag();
		$tag->name = 'clunk';
		$tag->save();

		$tag= new Tag();
		$tag->name = 'rattle';
		$tag->save();

		$tag= new Tag();
		$tag->name = 'rust';
		$tag->save();

		$tag= new Tag();
		$tag->name = 'combination wrench';
		$tag->save();

		$tag= new Tag();
		$tag->name = 'coolant';
		$tag->save();

		$tag= new Tag();
		$tag->name = 'carburetor';
		$tag->save();

		$tag= new Tag();
		$tag->name = 'trunk';
		$tag->save();

		$tag= new Tag();
		$tag->name = 'transmission';
		$tag->save();

		$tag= new Tag();
		$tag->name = 'hardtop';
		$tag->save();

		$tag= new Tag();
		$tag->name = 'chevy to the levy';
		$tag->save();

		$tag= new Tag();
		$tag->name = 'timing belt';
		$tag->save();

		$tag= new Tag();
		$tag->name = 'pliers';
		$tag->save();

		$tag= new Tag();
		$tag->name = 'socket';
		$tag->save();

		$tag= new Tag();
		$tag->name = 'spark plugs';
		$tag->save();

		$tag= new Tag();
		$tag->name = 'Altima';
		$tag->save();

		$tag= new Tag();
		$tag->name = 'fuel filter';
		$tag->save();

		$tag= new Tag();
		$tag->name = 'power-steering fluid';
		$tag->save();

		$tag= new Tag();
		$tag->name = 'Focus';
		$tag->save();

		$tag= new Tag();
		$tag->name = 'engine belts';
		$tag->save();

		$tag= new Tag();
		$tag->name = 'socket';
		$tag->save();
		
	}

}