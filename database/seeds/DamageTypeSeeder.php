<?php

use Illuminate\Database\Seeder;

class DamageTypeSeeder extends Seeder
{
    static protected $seeds = [
        ['name' => 'bludgeoning'],
        ['name' => 'piercing'],
        ['name' => 'slashing'],
    ];

    public function run()
    {
        foreach (self::$seeds as $seed) {
            $record = new \App\Model\DamageType(
                [
                    'name' => $seed['name']
                ]
            );
            $record->save();
        }
    }
}
