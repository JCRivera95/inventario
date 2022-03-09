<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Test category 1',
        ]);
        DB::table('categories')->insert([
            'name' => 'Test category 2',
        ]);
        DB::table('categories')->insert([
            'name' => 'Test category 3',
        ]);
        DB::table('categories')->insert([
            'name' => 'Test category 4',
        ]);
    }
}
