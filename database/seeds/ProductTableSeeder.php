<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')
            ->insert([
            [   'name' => '$75 worth Australian Dining Gift',
                'description' => 'Let a friend or loved one experience contemporary Australian cuisine with this $75 gift voucher',
                'status' => 'Active',
                'category_id' => '1',
                'price' => '75',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Gift a $100 JYPSY Gift Card',
                'description' => 'Give a friend or loved the taste of modern Japanese cuisine in the heart of Singapore with love',
                'status' => 'Active',
                'category_id' => '1',
                'price' => '100',
                'created_at' => date("Y-m-d H:i:s") 
            ],
            [
                'name' => 'Spanish Dining at UNA',
                'description' => 'Let someone experience a fabulous Spanish meal with some exquisite drinks with this gift',
                'status' => 'Active',
                'category_id' => '1',
                'price' => '125',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => '$100 ISETAN Gift Vouchers',
                'description' => 'Let a friend or loved one shop away at Singapore\'s leading department store with this $100',
                'status' => 'Active',
                'category_id' => '2',
                'price' => '100',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Kids\'s 3-wheel Kick Scooter',
                'description' => 'Buy this gift card to let someone purchase a Globber MyFree 2C 3-wheel Kick Scooter today!',
                'status' => 'Active',
                'category_id' => '2',
                'price' => '129',
                'created_at' => date("Y-m-d H:i:s")
            ]
        ]);
    }
}
