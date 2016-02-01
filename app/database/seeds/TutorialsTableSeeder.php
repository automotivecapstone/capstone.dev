<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class TutorialsTableSeeder extends Seeder {

	public function run()
	{
		$users = User::all();
		$faker = Faker::create();
		$title = ["Changing your oil in 12 simple steps.", "Checking your tire pressure.", "Popping the hood: a lesson for beginners.", "How to put snow chains on your tires.", "How to lose friends and alienate people.", "The Art and Zen of light automobile maintenance.", "How to replace your transmission in 7 easy steps!"];
		$image = ["/uploaded/thumb_IMG_1922_1024.jpg", "/uploaded/thumb_IMG_1923_1024.jpg", "/uploaded/thumb_IMG_1924_1024.jpg", "/uploaded/thumb_IMG_1925_1024.jpg", "/uploaded/thumb_IMG_1926_1024.jpg", "/uploaded/thumb_IMG_1927_1024.jpg", "/uploaded/thumb_IMG_1928_1024.jpg", "/uploaded/thumb_IMG_1929_1024.jpg", "/uploaded/thumb_IMG_1930_1024.jpg", "/uploaded/thumb_IMG_1931_1024.jpg", "/uploaded/Altima.jpg", null];
		$video = ["/uploaded/traffic.mov", "/uploaded/check_oil-web.mov", "/uploaded/Untitled.ogg", null];
		

		foreach(range(1, 5) as $index)
		{
			$user = $users->random();

			Tutorial::create([
            'title' => $title[array_rand($title, 1)],
            'content'=> "What's the meaning of this. Good. Have a good trip Einstein, watch your head. So tell me, future boy, who's president of the United States in 1985? Let me show you my plan for sending you home. Please excuse the crudity of this model, I didn't have time to build it to scale or to paint it. Good evening, I'm Doctor Emmett Brown. I'm standing on the parking lot of Twin Pines Mall. It's Saturday morning, October 26, 1985, 1:18 a.m. and this is temporal experiment number one. C'mon, Einy, hey hey boy, get in there, that a boy, in you go, get down, that's it.
						That was the day I invented time travel. I remember it vividly. I was standing on the edge of my toilet hanging a clock, the porces was wet, I slipped, hit my head on the edge of the sink. And when I came to I had a revelation, a picture, a picture in my head, a picture of this. This is what makes time travel possible. The flux capacitor. Now remember, according to my theory you interfered with with your parent's first meeting. They don't meet, they don't fall in love, they won't get married and they wont have kids. That's why your older brother's disappeared from that photograph. Your sister will follow and unless you repair the damages, you will be next. Great Scott. Let me see that photograph again of your brother. Just as I thought, this proves my theory, look at your brother. One point twenty-one gigawatts. One point twenty-one gigawatts. Great Scott. Thank you. In about thirty years.
						Good, I'll see you tonight. Don't forget, now, 1:15 a.m., Twin Pines Mall. My god, they found me. I don't know how but they found me. Run for it, Marty. My god, they found me. I don't know how but they found me. Run for it, Marty. Oh, great scott. You get the cable, I'll throw the rope down to you. No, Marty, we've already agreed that having information about the future could be extremely dangerous. Even if your intentions are good, they could backfire drastically. Whatever you've got to tell me I'll find out through the natural course of time. About 30 years, it's a nice round number.",
            'description'=> $faker->sentence,
            'image'=> $image[array_rand($image, 1)],
            'video' => $video[array_rand($video, 1)],
            'user_id'=>$user->id
			]);
		}

		foreach(range(1, 5) as $index)
		{
			$user = $users->random();

			Tutorial::create([
            'title' => $title[array_rand($title, 1)],
            'content'=> "What's the meaning of this. Good. Have a good trip Einstein, watch your head. So tell me, future boy, who's president of the United States in 1985? Let me show you my plan for sending you home. Please excuse the crudity of this model, I didn't have time to build it to scale or to paint it. Good evening, I'm Doctor Emmett Brown. I'm standing on the parking lot of Twin Pines Mall. It's Saturday morning, October 26, 1985, 1:18 a.m. and this is temporal experiment number one. C'mon, Einy, hey hey boy, get in there, that a boy, in you go, get down, that's it.
						That was the day I invented time travel. I remember it vividly. I was standing on the edge of my toilet hanging a clock, the porces was wet, I slipped, hit my head on the edge of the sink. And when I came to I had a revelation, a picture, a picture in my head, a picture of this. This is what makes time travel possible. The flux capacitor. Now remember, according to my theory you interfered with with your parent's first meeting. They don't meet, they don't fall in love, they won't get married and they wont have kids. That's why your older brother's disappeared from that photograph. Your sister will follow and unless you repair the damages, you will be next. Great Scott. Let me see that photograph again of your brother. Just as I thought, this proves my theory, look at your brother. One point twenty-one gigawatts. One point twenty-one gigawatts. Great Scott. Thank you. In about thirty years.
						Good, I'll see you tonight. Don't forget, now, 1:15 a.m., Twin Pines Mall. My god, they found me. I don't know how but they found me. Run for it, Marty. My god, they found me. I don't know how but they found me. Run for it, Marty. Oh, great scott. You get the cable, I'll throw the rope down to you. No, Marty, we've already agreed that having information about the future could be extremely dangerous. Even if your intentions are good, they could backfire drastically. Whatever you've got to tell me I'll find out through the natural course of time. About 30 years, it's a nice round number.",
            'description'=> $faker->sentence,
            'image'=> $image[array_rand($image, 1)],
            'video' => $video[array_rand($video, 1)],
            'user_id'=>$user->id
			]);
		}

		foreach(range(1, 5) as $index)
		{
			$user = $users->random();

			Tutorial::create([
            'title' => $title[array_rand($title, 1)],
            'content'=> "What's the meaning of this. Good. Have a good trip Einstein, watch your head. So tell me, future boy, who's president of the United States in 1985? Let me show you my plan for sending you home. Please excuse the crudity of this model, I didn't have time to build it to scale or to paint it. Good evening, I'm Doctor Emmett Brown. I'm standing on the parking lot of Twin Pines Mall. It's Saturday morning, October 26, 1985, 1:18 a.m. and this is temporal experiment number one. C'mon, Einy, hey hey boy, get in there, that a boy, in you go, get down, that's it.
						That was the day I invented time travel. I remember it vividly. I was standing on the edge of my toilet hanging a clock, the porces was wet, I slipped, hit my head on the edge of the sink. And when I came to I had a revelation, a picture, a picture in my head, a picture of this. This is what makes time travel possible. The flux capacitor. Now remember, according to my theory you interfered with with your parent's first meeting. They don't meet, they don't fall in love, they won't get married and they wont have kids. That's why your older brother's disappeared from that photograph. Your sister will follow and unless you repair the damages, you will be next. Great Scott. Let me see that photograph again of your brother. Just as I thought, this proves my theory, look at your brother. One point twenty-one gigawatts. One point twenty-one gigawatts. Great Scott. Thank you. In about thirty years.
						Good, I'll see you tonight. Don't forget, now, 1:15 a.m., Twin Pines Mall. My god, they found me. I don't know how but they found me. Run for it, Marty. My god, they found me. I don't know how but they found me. Run for it, Marty. Oh, great scott. You get the cable, I'll throw the rope down to you. No, Marty, we've already agreed that having information about the future could be extremely dangerous. Even if your intentions are good, they could backfire drastically. Whatever you've got to tell me I'll find out through the natural course of time. About 30 years, it's a nice round number.",
            'description'=> $faker->sentence,
            'image'=> $image[array_rand($image, 1)],
            'video' => $video[array_rand($video, 1)],
            'user_id'=>$user->id
			]);
		}

		foreach(range(1, 5) as $index)
		{
			$user = $users->random();

			Tutorial::create([
            'title' => $title[array_rand($title, 1)],
            'content'=> "What's the meaning of this. Good. Have a good trip Einstein, watch your head. So tell me, future boy, who's president of the United States in 1985? Let me show you my plan for sending you home. Please excuse the crudity of this model, I didn't have time to build it to scale or to paint it. Good evening, I'm Doctor Emmett Brown. I'm standing on the parking lot of Twin Pines Mall. It's Saturday morning, October 26, 1985, 1:18 a.m. and this is temporal experiment number one. C'mon, Einy, hey hey boy, get in there, that a boy, in you go, get down, that's it.
						That was the day I invented time travel. I remember it vividly. I was standing on the edge of my toilet hanging a clock, the porces was wet, I slipped, hit my head on the edge of the sink. And when I came to I had a revelation, a picture, a picture in my head, a picture of this. This is what makes time travel possible. The flux capacitor. Now remember, according to my theory you interfered with with your parent's first meeting. They don't meet, they don't fall in love, they won't get married and they wont have kids. That's why your older brother's disappeared from that photograph. Your sister will follow and unless you repair the damages, you will be next. Great Scott. Let me see that photograph again of your brother. Just as I thought, this proves my theory, look at your brother. One point twenty-one gigawatts. One point twenty-one gigawatts. Great Scott. Thank you. In about thirty years.
						Good, I'll see you tonight. Don't forget, now, 1:15 a.m., Twin Pines Mall. My god, they found me. I don't know how but they found me. Run for it, Marty. My god, they found me. I don't know how but they found me. Run for it, Marty. Oh, great scott. You get the cable, I'll throw the rope down to you. No, Marty, we've already agreed that having information about the future could be extremely dangerous. Even if your intentions are good, they could backfire drastically. Whatever you've got to tell me I'll find out through the natural course of time. About 30 years, it's a nice round number.",
            'description'=> $faker->sentence,
            'image'=> $image[array_rand($image, 1)],
            'video' => $video[array_rand($video, 1)],
            'user_id'=>$user->id
			]);
		}

		foreach(range(1, 5) as $index)
		{
			$user = $users->random();

			Tutorial::create([
            'title' => $title[array_rand($title, 1)],
            'content'=> "What's the meaning of this. Good. Have a good trip Einstein, watch your head. So tell me, future boy, who's president of the United States in 1985? Let me show you my plan for sending you home. Please excuse the crudity of this model, I didn't have time to build it to scale or to paint it. Good evening, I'm Doctor Emmett Brown. I'm standing on the parking lot of Twin Pines Mall. It's Saturday morning, October 26, 1985, 1:18 a.m. and this is temporal experiment number one. C'mon, Einy, hey hey boy, get in there, that a boy, in you go, get down, that's it.
						That was the day I invented time travel. I remember it vividly. I was standing on the edge of my toilet hanging a clock, the porces was wet, I slipped, hit my head on the edge of the sink. And when I came to I had a revelation, a picture, a picture in my head, a picture of this. This is what makes time travel possible. The flux capacitor. Now remember, according to my theory you interfered with with your parent's first meeting. They don't meet, they don't fall in love, they won't get married and they wont have kids. That's why your older brother's disappeared from that photograph. Your sister will follow and unless you repair the damages, you will be next. Great Scott. Let me see that photograph again of your brother. Just as I thought, this proves my theory, look at your brother. One point twenty-one gigawatts. One point twenty-one gigawatts. Great Scott. Thank you. In about thirty years.
						Good, I'll see you tonight. Don't forget, now, 1:15 a.m., Twin Pines Mall. My god, they found me. I don't know how but they found me. Run for it, Marty. My god, they found me. I don't know how but they found me. Run for it, Marty. Oh, great scott. You get the cable, I'll throw the rope down to you. No, Marty, we've already agreed that having information about the future could be extremely dangerous. Even if your intentions are good, they could backfire drastically. Whatever you've got to tell me I'll find out through the natural course of time. About 30 years, it's a nice round number.",
            'description'=> $faker->sentence,
            'image'=> $image[array_rand($image, 1)],
            'video' => $video[array_rand($video, 1)],
            'user_id'=>$user->id
			]);
		}

		foreach(range(1, 5) as $index)
		{
			$user = $users->random();

			Tutorial::create([
            'title' => $title[array_rand($title, 1)],
            'content'=> "What's the meaning of this. Good. Have a good trip Einstein, watch your head. So tell me, future boy, who's president of the United States in 1985? Let me show you my plan for sending you home. Please excuse the crudity of this model, I didn't have time to build it to scale or to paint it. Good evening, I'm Doctor Emmett Brown. I'm standing on the parking lot of Twin Pines Mall. It's Saturday morning, October 26, 1985, 1:18 a.m. and this is temporal experiment number one. C'mon, Einy, hey hey boy, get in there, that a boy, in you go, get down, that's it.
						That was the day I invented time travel. I remember it vividly. I was standing on the edge of my toilet hanging a clock, the porces was wet, I slipped, hit my head on the edge of the sink. And when I came to I had a revelation, a picture, a picture in my head, a picture of this. This is what makes time travel possible. The flux capacitor. Now remember, according to my theory you interfered with with your parent's first meeting. They don't meet, they don't fall in love, they won't get married and they wont have kids. That's why your older brother's disappeared from that photograph. Your sister will follow and unless you repair the damages, you will be next. Great Scott. Let me see that photograph again of your brother. Just as I thought, this proves my theory, look at your brother. One point twenty-one gigawatts. One point twenty-one gigawatts. Great Scott. Thank you. In about thirty years.
						Good, I'll see you tonight. Don't forget, now, 1:15 a.m., Twin Pines Mall. My god, they found me. I don't know how but they found me. Run for it, Marty. My god, they found me. I don't know how but they found me. Run for it, Marty. Oh, great scott. You get the cable, I'll throw the rope down to you. No, Marty, we've already agreed that having information about the future could be extremely dangerous. Even if your intentions are good, they could backfire drastically. Whatever you've got to tell me I'll find out through the natural course of time. About 30 years, it's a nice round number.",
            'description'=> $faker->sentence,
            'image'=> $image[array_rand($image, 1)],
            'video' => $video[array_rand($video, 1)],
            'user_id'=>$user->id
			]);
		}

		foreach(range(1, 5) as $index)
		{
			$user = $users->random();

			Tutorial::create([
            'title' => $title[array_rand($title, 1)],
            'content'=> "What's the meaning of this. Good. Have a good trip Einstein, watch your head. So tell me, future boy, who's president of the United States in 1985? Let me show you my plan for sending you home. Please excuse the crudity of this model, I didn't have time to build it to scale or to paint it. Good evening, I'm Doctor Emmett Brown. I'm standing on the parking lot of Twin Pines Mall. It's Saturday morning, October 26, 1985, 1:18 a.m. and this is temporal experiment number one. C'mon, Einy, hey hey boy, get in there, that a boy, in you go, get down, that's it.
						That was the day I invented time travel. I remember it vividly. I was standing on the edge of my toilet hanging a clock, the porces was wet, I slipped, hit my head on the edge of the sink. And when I came to I had a revelation, a picture, a picture in my head, a picture of this. This is what makes time travel possible. The flux capacitor. Now remember, according to my theory you interfered with with your parent's first meeting. They don't meet, they don't fall in love, they won't get married and they wont have kids. That's why your older brother's disappeared from that photograph. Your sister will follow and unless you repair the damages, you will be next. Great Scott. Let me see that photograph again of your brother. Just as I thought, this proves my theory, look at your brother. One point twenty-one gigawatts. One point twenty-one gigawatts. Great Scott. Thank you. In about thirty years.
						Good, I'll see you tonight. Don't forget, now, 1:15 a.m., Twin Pines Mall. My god, they found me. I don't know how but they found me. Run for it, Marty. My god, they found me. I don't know how but they found me. Run for it, Marty. Oh, great scott. You get the cable, I'll throw the rope down to you. No, Marty, we've already agreed that having information about the future could be extremely dangerous. Even if your intentions are good, they could backfire drastically. Whatever you've got to tell me I'll find out through the natural course of time. About 30 years, it's a nice round number.",
            'description'=> $faker->sentence,
            'image'=> $image[array_rand($image, 1)],
            'video' => $video[array_rand($video, 1)],
            'user_id'=>$user->id
			]);
		}
	}

}