<?php

use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->truncate();

        DB::table('items')->insert([
            'name' => 'Backpack',
            'description' => 'For storing stuff',
        ]);
        DB::table('items')->insert([
            'name' => 'Rope',
            'description' => '50\'',
        ]);

    }
}
