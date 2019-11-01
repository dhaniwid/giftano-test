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
                    'name' => 'Restaurant',
                    'description' => Str::random(5),
                    'status' => 'Active'
                ],
                [
                    'name' => 'Retail',
                    'description' => Str::random(5),
                    'status' => 'Active'
                ],
                [
                    'name' => 'Experience',
                    'description' => Str::random(5),
                    'status' => 'Active'
                ]
            ]);
    }
}
