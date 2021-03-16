<?php

namespace Database\Seeders;

use App\Models\Weapon;
use Illuminate\Database\Seeder;

class WeaponsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $weapons = [
            ['name' => 'Grapple Hammer'],
            ['name' => 'Sword'],
            ['name' => 'Blasters'],
            ['name' => 'Rocket Lance'],
            ['name' => 'Spear'],
            ['name' => 'Katars'],
            ['name' => 'Axe'],
            ['name' => 'Bow'],
            ['name' => 'Gauntlets'],
            ['name' => 'Scythe'],
            ['name' => 'Cannon'],
            ['name' => 'Orb'],
            ['name' => 'Greatsword'],
        ];

        foreach ($weapons as $weapon) {
            Weapon::updateOrCreate($weapon, $weapon);
        }
    }
}
