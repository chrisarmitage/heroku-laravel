<?php

use Illuminate\Database\Seeder;

class PropertySeeder extends Seeder
{
    static protected $seeds = [
        [
            'category'    => 'weapon',
            'name'        => 'ammunition',
            'description' => 'One ammo per attack. Recover 50% of ammo after battle for 1 minute. Improvised melee weapon.',
        ],
        [
            'category'    => 'weapon',
            'name'        => 'finesse',
            'description' => 'Use STR or DEX modifier for Attack and Damage rolls. Same for both rolls.',
        ],
        [
            'category'    => 'weapon',
            'name'        => 'heavy',
            'description' => 'Small Creatures use at Disadvantage.',
        ],
        [
            'category'    => 'weapon',
            'name'        => 'light',
            'description' => 'Suitable for two-weapon fighting.',
        ],
        [
            'category'    => 'weapon',
            'name'        => 'loading',
            'description' => '(normal / max range) Normal attack up to Normal, Disadvantage attack up to Max.',
        ],
        [
            'category'    => 'weapon',
            'name'        => 'range',
            'description' => 'One ammo per attack. Recover 50% of ammo after battle for 1 minute. Improvised melee weapon.',
        ],
        [
            'category'    => 'weapon',
            'name'        => 'reach',
            'description' => 'Add 5 feet to reach.',
        ],
        [
            'category'    => 'weapon',
            'name'        => 'thrown',
            'description' => 'Same attack at melee. Finesse rules apply.',
        ],
        [
            'category'    => 'weapon',
            'name'        => 'two-handed',
            'description' => 'Requires two hands.',
        ],
        [
            'category'    => 'weapon',
            'name'        => 'versatile',
            'description' => 'One or Two handed. Use damage in parentheses if used two-handed.',
        ],
    ];

    public function run()
    {
        foreach (self::$seeds as $seed) {
            $record = new \App\Model\Property(
                [
                    'category'    => $seed['category'],
                    'name'        => $seed['name'],
                    'description' => $seed['description'],
                ]
            );
            $record->save();
        }
    }
}
