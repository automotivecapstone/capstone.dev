<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class TutorialsTableSeeder extends Seeder {

	public function run()
	{
		$users = User::all();
		$faker = Faker::create();

		foreach(range(1, 5) as $index)
		{
			$user = $users[mt_rand(0,count($users))];

			Tutorial::create([
            'title' => "Changing your oil in 12 simple steps.",
            'content'=> "What's the meaning of this. Good. Have a good trip Einstein, watch your head. So tell me, future boy, who's president of the United States in 1985? Let me show you my plan for sending you home. Please excuse the crudity of this model, I didn't have time to build it to scale or to paint it. Good evening, I'm Doctor Emmett Brown. I'm standing on the parking lot of Twin Pines Mall. It's Saturday morning, October 26, 1985, 1:18 a.m. and this is temporal experiment number one. C'mon, Einy, hey hey boy, get in there, that a boy, in you go, get down, that's it.
						That was the day I invented time travel. I remember it vividly. I was standing on the edge of my toilet hanging a clock, the porces was wet, I slipped, hit my head on the edge of the sink. And when I came to I had a revelation, a picture, a picture in my head, a picture of this. This is what makes time travel possible. The flux capacitor. Now remember, according to my theory you interfered with with your parent's first meeting. They don't meet, they don't fall in love, they won't get married and they wont have kids. That's why your older brother's disappeared from that photograph. Your sister will follow and unless you repair the damages, you will be next. Great Scott. Let me see that photograph again of your brother. Just as I thought, this proves my theory, look at your brother. One point twenty-one gigawatts. One point twenty-one gigawatts. Great Scott. Thank you. In about thirty years.
						Good, I'll see you tonight. Don't forget, now, 1:15 a.m., Twin Pines Mall. My god, they found me. I don't know how but they found me. Run for it, Marty. My god, they found me. I don't know how but they found me. Run for it, Marty. Oh, great scott. You get the cable, I'll throw the rope down to you. No, Marty, we've already agreed that having information about the future could be extremely dangerous. Even if your intentions are good, they could backfire drastically. Whatever you've got to tell me I'll find out through the natural course of time. About 30 years, it's a nice round number.",
            'description'=> $faker->sentence,
            'image'=>'/uploaded/stockimage.png',
            'video' => '/uploaded/traffic.mov',
            'user_id'=>$user->id
			]);
		}

		foreach(range(1, 5) as $index)
		{
			$user = $users[mt_rand(0,count($users))];

			Tutorial::create([
            'title' => "Checking your tire pressure.",
            'content'=> "What's the meaning of this. Good. Have a good trip Einstein, watch your head. So tell me, future boy, who's president of the United States in 1985? Let me show you my plan for sending you home. Please excuse the crudity of this model, I didn't have time to build it to scale or to paint it. Good evening, I'm Doctor Emmett Brown. I'm standing on the parking lot of Twin Pines Mall. It's Saturday morning, October 26, 1985, 1:18 a.m. and this is temporal experiment number one. C'mon, Einy, hey hey boy, get in there, that a boy, in you go, get down, that's it.
						That was the day I invented time travel. I remember it vividly. I was standing on the edge of my toilet hanging a clock, the porces was wet, I slipped, hit my head on the edge of the sink. And when I came to I had a revelation, a picture, a picture in my head, a picture of this. This is what makes time travel possible. The flux capacitor. Now remember, according to my theory you interfered with with your parent's first meeting. They don't meet, they don't fall in love, they won't get married and they wont have kids. That's why your older brother's disappeared from that photograph. Your sister will follow and unless you repair the damages, you will be next. Great Scott. Let me see that photograph again of your brother. Just as I thought, this proves my theory, look at your brother. One point twenty-one gigawatts. One point twenty-one gigawatts. Great Scott. Thank you. In about thirty years.
						Good, I'll see you tonight. Don't forget, now, 1:15 a.m., Twin Pines Mall. My god, they found me. I don't know how but they found me. Run for it, Marty. My god, they found me. I don't know how but they found me. Run for it, Marty. Oh, great scott. You get the cable, I'll throw the rope down to you. No, Marty, we've already agreed that having information about the future could be extremely dangerous. Even if your intentions are good, they could backfire drastically. Whatever you've got to tell me I'll find out through the natural course of time. About 30 years, it's a nice round number.",
            'description'=> $faker->sentence,
            'image'=>'/uploaded/stockimage.png',
            'video' => '/uploaded/traffic.mov',
            'user_id'=>$user->id
			]);
		}

		foreach(range(1, 5) as $index)
		{
			$user = $users[mt_rand(0,count($users))];

			Tutorial::create([
            'title' => "Popping the hood: a lesson for beginners.",
            'content'=> "What's the meaning of this. Good. Have a good trip Einstein, watch your head. So tell me, future boy, who's president of the United States in 1985? Let me show you my plan for sending you home. Please excuse the crudity of this model, I didn't have time to build it to scale or to paint it. Good evening, I'm Doctor Emmett Brown. I'm standing on the parking lot of Twin Pines Mall. It's Saturday morning, October 26, 1985, 1:18 a.m. and this is temporal experiment number one. C'mon, Einy, hey hey boy, get in there, that a boy, in you go, get down, that's it.
						That was the day I invented time travel. I remember it vividly. I was standing on the edge of my toilet hanging a clock, the porces was wet, I slipped, hit my head on the edge of the sink. And when I came to I had a revelation, a picture, a picture in my head, a picture of this. This is what makes time travel possible. The flux capacitor. Now remember, according to my theory you interfered with with your parent's first meeting. They don't meet, they don't fall in love, they won't get married and they wont have kids. That's why your older brother's disappeared from that photograph. Your sister will follow and unless you repair the damages, you will be next. Great Scott. Let me see that photograph again of your brother. Just as I thought, this proves my theory, look at your brother. One point twenty-one gigawatts. One point twenty-one gigawatts. Great Scott. Thank you. In about thirty years.
						Good, I'll see you tonight. Don't forget, now, 1:15 a.m., Twin Pines Mall. My god, they found me. I don't know how but they found me. Run for it, Marty. My god, they found me. I don't know how but they found me. Run for it, Marty. Oh, great scott. You get the cable, I'll throw the rope down to you. No, Marty, we've already agreed that having information about the future could be extremely dangerous. Even if your intentions are good, they could backfire drastically. Whatever you've got to tell me I'll find out through the natural course of time. About 30 years, it's a nice round number.",
            'description'=> $faker->sentence,
            'image'=>'/uploaded/stockimage.png',
            'video' => '/uploaded/traffic.mov',
            'user_id'=>$user->id
			]);
		}

		foreach(range(1, 5) as $index)
		{
			$user = $users[mt_rand(0,count($users))];

			Tutorial::create([
            'title' => "How to put snow chains on your tires.",
            'content'=> "What's the meaning of this. Good. Have a good trip Einstein, watch your head. So tell me, future boy, who's president of the United States in 1985? Let me show you my plan for sending you home. Please excuse the crudity of this model, I didn't have time to build it to scale or to paint it. Good evening, I'm Doctor Emmett Brown. I'm standing on the parking lot of Twin Pines Mall. It's Saturday morning, October 26, 1985, 1:18 a.m. and this is temporal experiment number one. C'mon, Einy, hey hey boy, get in there, that a boy, in you go, get down, that's it.
						That was the day I invented time travel. I remember it vividly. I was standing on the edge of my toilet hanging a clock, the porces was wet, I slipped, hit my head on the edge of the sink. And when I came to I had a revelation, a picture, a picture in my head, a picture of this. This is what makes time travel possible. The flux capacitor. Now remember, according to my theory you interfered with with your parent's first meeting. They don't meet, they don't fall in love, they won't get married and they wont have kids. That's why your older brother's disappeared from that photograph. Your sister will follow and unless you repair the damages, you will be next. Great Scott. Let me see that photograph again of your brother. Just as I thought, this proves my theory, look at your brother. One point twenty-one gigawatts. One point twenty-one gigawatts. Great Scott. Thank you. In about thirty years.
						Good, I'll see you tonight. Don't forget, now, 1:15 a.m., Twin Pines Mall. My god, they found me. I don't know how but they found me. Run for it, Marty. My god, they found me. I don't know how but they found me. Run for it, Marty. Oh, great scott. You get the cable, I'll throw the rope down to you. No, Marty, we've already agreed that having information about the future could be extremely dangerous. Even if your intentions are good, they could backfire drastically. Whatever you've got to tell me I'll find out through the natural course of time. About 30 years, it's a nice round number.",
            'description'=> $faker->sentence,
            'image'=>'/uploaded/stockimage.png',
            'video' => '/uploaded/traffic.mov',
            'user_id'=>$user->id
			]);
		}

		foreach(range(1, 5) as $index)
		{
			$user = $users[mt_rand(0,count($users))];

			Tutorial::create([
            'title' => "How to lose friends and alienate people.",
            'content'=> "What's the meaning of this. Good. Have a good trip Einstein, watch your head. So tell me, future boy, who's president of the United States in 1985? Let me show you my plan for sending you home. Please excuse the crudity of this model, I didn't have time to build it to scale or to paint it. Good evening, I'm Doctor Emmett Brown. I'm standing on the parking lot of Twin Pines Mall. It's Saturday morning, October 26, 1985, 1:18 a.m. and this is temporal experiment number one. C'mon, Einy, hey hey boy, get in there, that a boy, in you go, get down, that's it.
						That was the day I invented time travel. I remember it vividly. I was standing on the edge of my toilet hanging a clock, the porces was wet, I slipped, hit my head on the edge of the sink. And when I came to I had a revelation, a picture, a picture in my head, a picture of this. This is what makes time travel possible. The flux capacitor. Now remember, according to my theory you interfered with with your parent's first meeting. They don't meet, they don't fall in love, they won't get married and they wont have kids. That's why your older brother's disappeared from that photograph. Your sister will follow and unless you repair the damages, you will be next. Great Scott. Let me see that photograph again of your brother. Just as I thought, this proves my theory, look at your brother. One point twenty-one gigawatts. One point twenty-one gigawatts. Great Scott. Thank you. In about thirty years.
						Good, I'll see you tonight. Don't forget, now, 1:15 a.m., Twin Pines Mall. My god, they found me. I don't know how but they found me. Run for it, Marty. My god, they found me. I don't know how but they found me. Run for it, Marty. Oh, great scott. You get the cable, I'll throw the rope down to you. No, Marty, we've already agreed that having information about the future could be extremely dangerous. Even if your intentions are good, they could backfire drastically. Whatever you've got to tell me I'll find out through the natural course of time. About 30 years, it's a nice round number.",
            'description'=> $faker->sentence,
            'image'=>'/uploaded/stockimage.png',
            'video' => '/uploaded/traffic.mov',
            'user_id'=>$user->id
			]);
		}

		foreach(range(1, 5) as $index)
		{
			$user = $users[mt_rand(0,count($users))];

			Tutorial::create([
            'title' => "The Art and Zen of light automobile maintenance.",
            'content'=> "What's the meaning of this. Good. Have a good trip Einstein, watch your head. So tell me, future boy, who's president of the United States in 1985? Let me show you my plan for sending you home. Please excuse the crudity of this model, I didn't have time to build it to scale or to paint it. Good evening, I'm Doctor Emmett Brown. I'm standing on the parking lot of Twin Pines Mall. It's Saturday morning, October 26, 1985, 1:18 a.m. and this is temporal experiment number one. C'mon, Einy, hey hey boy, get in there, that a boy, in you go, get down, that's it.
						That was the day I invented time travel. I remember it vividly. I was standing on the edge of my toilet hanging a clock, the porces was wet, I slipped, hit my head on the edge of the sink. And when I came to I had a revelation, a picture, a picture in my head, a picture of this. This is what makes time travel possible. The flux capacitor. Now remember, according to my theory you interfered with with your parent's first meeting. They don't meet, they don't fall in love, they won't get married and they wont have kids. That's why your older brother's disappeared from that photograph. Your sister will follow and unless you repair the damages, you will be next. Great Scott. Let me see that photograph again of your brother. Just as I thought, this proves my theory, look at your brother. One point twenty-one gigawatts. One point twenty-one gigawatts. Great Scott. Thank you. In about thirty years.
						Good, I'll see you tonight. Don't forget, now, 1:15 a.m., Twin Pines Mall. My god, they found me. I don't know how but they found me. Run for it, Marty. My god, they found me. I don't know how but they found me. Run for it, Marty. Oh, great scott. You get the cable, I'll throw the rope down to you. No, Marty, we've already agreed that having information about the future could be extremely dangerous. Even if your intentions are good, they could backfire drastically. Whatever you've got to tell me I'll find out through the natural course of time. About 30 years, it's a nice round number.",
            'description'=> $faker->sentence,
            'image'=>'/uploaded/stockimage.png',
            'video' => '/uploaded/traffic.mov',
            'user_id'=>$user->id
			]);
		}

		foreach(range(1, 5) as $index)
		{
			$user = $users[mt_rand(0,count($users))];

			Tutorial::create([
            'title' => "How to replace your transmission in 7 easy steps!",
            'content'=> "What's the meaning of this. Good. Have a good trip Einstein, watch your head. So tell me, future boy, who's president of the United States in 1985? Let me show you my plan for sending you home. Please excuse the crudity of this model, I didn't have time to build it to scale or to paint it. Good evening, I'm Doctor Emmett Brown. I'm standing on the parking lot of Twin Pines Mall. It's Saturday morning, October 26, 1985, 1:18 a.m. and this is temporal experiment number one. C'mon, Einy, hey hey boy, get in there, that a boy, in you go, get down, that's it.
						That was the day I invented time travel. I remember it vividly. I was standing on the edge of my toilet hanging a clock, the porces was wet, I slipped, hit my head on the edge of the sink. And when I came to I had a revelation, a picture, a picture in my head, a picture of this. This is what makes time travel possible. The flux capacitor. Now remember, according to my theory you interfered with with your parent's first meeting. They don't meet, they don't fall in love, they won't get married and they wont have kids. That's why your older brother's disappeared from that photograph. Your sister will follow and unless you repair the damages, you will be next. Great Scott. Let me see that photograph again of your brother. Just as I thought, this proves my theory, look at your brother. One point twenty-one gigawatts. One point twenty-one gigawatts. Great Scott. Thank you. In about thirty years.
						Good, I'll see you tonight. Don't forget, now, 1:15 a.m., Twin Pines Mall. My god, they found me. I don't know how but they found me. Run for it, Marty. My god, they found me. I don't know how but they found me. Run for it, Marty. Oh, great scott. You get the cable, I'll throw the rope down to you. No, Marty, we've already agreed that having information about the future could be extremely dangerous. Even if your intentions are good, they could backfire drastically. Whatever you've got to tell me I'll find out through the natural course of time. About 30 years, it's a nice round number.",
            'description'=> $faker->sentence,
            'image'=>'/uploaded/stockimage.png',
            'video' => '/uploaded/traffic.mov',
            'user_id'=>$user->id
			]);
		}
	}

}