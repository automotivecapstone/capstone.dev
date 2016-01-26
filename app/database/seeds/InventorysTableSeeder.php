<?php

class InventorysTableSeeder extends Seeder {

	public function run()
	{
		foreach(range(1, 100) as $index)
		{

			Inventory::create([
            'item_name' => "Monkey Coffee Cup",
            'price' => 2.5,
            'image' =>'/uploaded/monkeycup.jpg',
			]);
		}
	}
}