<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class QasTableSeeder extends Seeder {

	public function run()
	{
		$users = User::all();
		$faker = Faker::create();

		foreach(range(1, 5) as $index)
		{
			$user = $users[mt_rand(0,count($users))];
			
			Qa::create([
            'question' => "Why Is The Blazer Not Shifting Into 4-wheel Drive?",
            'content' => "I need fuel. Go ahead, quick, get in the car. Time machine, I haven't invented any time machine. Safe now, everything's let lined. Don't you lose those tapes now, we'll need a record. Wup, wup, I almost forgot my luggage. Who knows if they've got cotton underwear in the future. I'm allergic to all synthetics. Never? Unroll their fire.",
            'image' =>'/uploaded/stockimage.png',
            'user_id'=> $user->id,
            'video' => '/uploaded/traffic.mov'
			]);
		}

		foreach(range(1, 5) as $index)
		{
			$user = $users[mt_rand(0,count($users))];
			
			Qa::create([
            'question' => "Water Leak",
            'content' => "I need fuel. Go ahead, quick, get in the car. Time machine, I haven't invented any time machine. Safe now, everything's let lined. Don't you lose those tapes now, we'll need a record. Wup, wup, I almost forgot my luggage. Who knows if they've got cotton underwear in the future. I'm allergic to all synthetics. Never? Unroll their fire.",
            'image' =>'/uploaded/stockimage.png',
            'user_id'=> $user->id,
            'video' => '/uploaded/traffic.mov'
			]);
		}

		foreach(range(1, 5) as $index)
		{
			$user = $users[mt_rand(0,count($users))];
			
			Qa::create([
            'question' => "What is that sound?",
            'content' => "I need fuel. Go ahead, quick, get in the car. Time machine, I haven't invented any time machine. Safe now, everything's let lined. Don't you lose those tapes now, we'll need a record. Wup, wup, I almost forgot my luggage. Who knows if they've got cotton underwear in the future. I'm allergic to all synthetics. Never? Unroll their fire.",
            'image' =>'/uploaded/stockimage.png',
            'user_id'=> $user->id,
            'video' => '/uploaded/traffic.mov'
			]);
		}

		foreach(range(1, 5) as $index)
		{
			$user = $users[mt_rand(0,count($users))];
			
			Qa::create([
            'question' => "Why does my AC smell like gas when I'm going over 45mph?",
            'content' => "I need fuel. Go ahead, quick, get in the car. Time machine, I haven't invented any time machine. Safe now, everything's let lined. Don't you lose those tapes now, we'll need a record. Wup, wup, I almost forgot my luggage. Who knows if they've got cotton underwear in the future. I'm allergic to all synthetics. Never? Unroll their fire.",
            'image' =>'/uploaded/stockimage.png',
            'user_id'=> $user->id,
            'video' => '/uploaded/traffic.mov'
			]);
		}

		foreach(range(1, 5) as $index)
		{
			$user = $users[mt_rand(0,count($users))];
			
			Qa::create([
            'question' => "Why do my tires smell like burned rubber coming out of a start?",
            'content' => "I need fuel. Go ahead, quick, get in the car. Time machine, I haven't invented any time machine. Safe now, everything's let lined. Don't you lose those tapes now, we'll need a record. Wup, wup, I almost forgot my luggage. Who knows if they've got cotton underwear in the future. I'm allergic to all synthetics. Never? Unroll their fire.",
            'image' =>'/uploaded/stockimage.png',
            'user_id'=> $user->id,
            'video' => '/uploaded/traffic.mov'
			]);
		}

		foreach(range(1, 5) as $index)
		{
			$user = $users[mt_rand(0,count($users))];
			
			Qa::create([
            'question' => "How do I change my windshield wipers?",
            'content' => "I need fuel. Go ahead, quick, get in the car. Time machine, I haven't invented any time machine. Safe now, everything's let lined. Don't you lose those tapes now, we'll need a record. Wup, wup, I almost forgot my luggage. Who knows if they've got cotton underwear in the future. I'm allergic to all synthetics. Never? Unroll their fire.",
            'image' =>'/uploaded/stockimage.png',
            'user_id'=> $user->id,
            'video' => '/uploaded/traffic.mov'
			]);
		}

		foreach(range(1, 5) as $index)
		{
			$user = $users[mt_rand(0,count($users))];
			
			Qa::create([
            'question' => "What is that weird thump I hear from the rear of the car?",
            'content' => "I need fuel. Go ahead, quick, get in the car. Time machine, I haven't invented any time machine. Safe now, everything's let lined. Don't you lose those tapes now, we'll need a record. Wup, wup, I almost forgot my luggage. Who knows if they've got cotton underwear in the future. I'm allergic to all synthetics. Never? Unroll their fire.",
            'image' =>'/uploaded/stockimage.png',
            'user_id'=> $user->id,
            'video' => '/uploaded/traffic.mov'
			]);
		}

		foreach(range(1, 5) as $index)
		{
			$user = $users[mt_rand(0,count($users))];
			
			Qa::create([
            'question' => "What is the average air speed velocity of a laden swallow?",
            'content' => "I need fuel. Go ahead, quick, get in the car. Time machine, I haven't invented any time machine. Safe now, everything's let lined. Don't you lose those tapes now, we'll need a record. Wup, wup, I almost forgot my luggage. Who knows if they've got cotton underwear in the future. I'm allergic to all synthetics. Never? Unroll their fire.",
            'image' =>'/uploaded/stockimage.png',
            'user_id'=> $user->id,
            'video' => '/uploaded/traffic.mov'
			]);
		}

		foreach(range(1, 5) as $index)
		{
			$user = $users[mt_rand(0,count($users))];
			
			Qa::create([
            'question' => "What is wrong with my exhaust system?",
            'content' => "I need fuel. Go ahead, quick, get in the car. Time machine, I haven't invented any time machine. Safe now, everything's let lined. Don't you lose those tapes now, we'll need a record. Wup, wup, I almost forgot my luggage. Who knows if they've got cotton underwear in the future. I'm allergic to all synthetics. Never? Unroll their fire.",
            'image' =>'/uploaded/stockimage.png',
            'user_id'=> $user->id,
            'video' => '/uploaded/traffic.mov'
			]);
		}
		


	}

}