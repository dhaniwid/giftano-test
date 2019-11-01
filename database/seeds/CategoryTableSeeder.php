<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')
            ->insert([
                [
                    'id' => '1',
                    'name' => 'Restaurant',
                    'description' => 'Looking for a good restaurant in Singapore to buy a gift card for a friend? Whether the way to their heart is a hearty Italian, a classic French, or Modern Chinese, find that restaurant here. Giftano.com provides a kaleidoscope of the best restaurants anywhere in Singapore.',
                    'status' => 'Active',
                    'created_at' => date("Y-m-d H:i:s")
                ],
                [
                    'id' => '2',
                    'name' => 'Retail',
                    'description' => 'Giftano.com has partnered with many of the best and most sought-after brands and retail destinations in Singapore and internationally. With the variety of choices available, there\'s a gift for any occasion for any loved one. Get a gift card and send them shopping for whatever their heart desires.',
                    'status' => 'Active',
                    'created_at' => date("Y-m-d H:i:s")
                ],
                [
                    'id' => '3',
                    'name' => 'Experience',
                    'description' => 'Fancy to gift amazing, fun and memorable experience gifts in Singapore? Want to gift something cool and different? With a range of interesting experiences at your fingertips, it couldn\'t be easier to gift your loved ones with premium gift cards and vouchers that would brighten their day!',
                    'status' => 'Active',
                    'created_at' => date("Y-m-d H:i:s")
                ]
            ]);
    }
}
