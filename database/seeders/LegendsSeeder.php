<?php

namespace Database\Seeders;

use App\Models\Legend;
use App\Models\Weapon;
use Illuminate\Database\Seeder;

class LegendsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $legends = [
            ['name' => 'Ada', 'gender' => 'Female', 'first_weapon_id' => Weapon::WEAPON_BLASTERS, 'second_weapon_id' => Weapon::WEAPON_SPEAR, 'strength' => 6, 'dexterity' => 6, 'defense' => 3, 'speed' => 5, 'price' => 3900, 'new' => false],
            ['name' => 'Artemis', 'gender' => 'Female', 'first_weapon_id' => Weapon::WEAPON_ROCKET_LANCE, 'second_weapon_id' => Weapon::WEAPON_SCYTHE, 'strength' => 5, 'dexterity' => 5, 'defense' => 4, 'speed' => 8, 'price' => 5400, 'new' => false],
            ['name' => 'Asuri', 'gender' => 'Female', 'first_weapon_id' => Weapon::WEAPON_KATARS, 'second_weapon_id' => Weapon::WEAPON_SWORD, 'strength' => 4, 'dexterity' => 7, 'defense' => 5, 'speed' => 6, 'price' => 3900, 'new' => false],
            ['name' => 'Azoth', 'gender' => 'Male', 'first_weapon_id' => Weapon::WEAPON_BOW, 'second_weapon_id' => Weapon::WEAPON_AXE, 'strength' => 7, 'dexterity' => 5, 'defense' => 6, 'speed' => 4, 'price' => 5400, 'new' => false],
            ['name' => 'Barraza', 'gender' => 'Male', 'first_weapon_id' => Weapon::WEAPON_AXE, 'second_weapon_id' => Weapon::WEAPON_BLASTERS, 'strength' => 6, 'dexterity' => 4, 'defense' => 8, 'speed' => 4, 'price' => 3900, 'new' => false],
            ['name' => 'Bodvar', 'gender' => 'Male', 'first_weapon_id' => Weapon::WEAPON_GRAPPLE_HAMMER, 'second_weapon_id' => Weapon::WEAPON_SWORD, 'strength' => 6, 'dexterity' => 6, 'defense' => 5, 'speed' => 5, 'price' => 900, 'new' => false],
            ['name' => 'Brynn', 'gender' => 'Female', 'first_weapon_id' => Weapon::WEAPON_AXE, 'second_weapon_id' => Weapon::WEAPON_SPEAR, 'strength' => 5, 'dexterity' => 5, 'defense' => 5, 'speed' => 7, 'price' => 900, 'new' => false],
            ['name' => 'Caspian', 'gender' => 'Male', 'first_weapon_id' => Weapon::WEAPON_GAUNTLETS, 'second_weapon_id' => Weapon::WEAPON_KATARS, 'strength' => 7, 'dexterity' => 5, 'defense' => 4, 'speed' => 6, 'price' => 5400, 'new' => false],
            ['name' => 'Cassidy', 'gender' => 'Female', 'first_weapon_id' => Weapon::WEAPON_BLASTERS, 'second_weapon_id' => Weapon::WEAPON_GRAPPLE_HAMMER, 'strength' => 6, 'dexterity' => 8, 'defense' => 4, 'speed' => 4, 'price' => 2300, 'new' => false],
            ['name' => 'Cross', 'gender' => 'Male', 'first_weapon_id' => Weapon::WEAPON_BLASTERS, 'second_weapon_id' => Weapon::WEAPON_GAUNTLETS, 'strength' => 7, 'dexterity' => 4, 'defense' => 6, 'speed' => 5, 'price' => 5400, 'new' => false],
            ['name' => 'Diana', 'gender' => 'Female', 'first_weapon_id' => Weapon::WEAPON_BOW, 'second_weapon_id' => Weapon::WEAPON_BLASTERS, 'strength' => 5, 'dexterity' => 6, 'defense' => 5, 'speed' => 6, 'price' => 5400, 'new' => false],
            ['name' => 'Dusk', 'gender' => 'Male', 'first_weapon_id' => Weapon::WEAPON_SPEAR, 'second_weapon_id' => Weapon::WEAPON_ORB, 'strength' => 6, 'dexterity' => 7, 'defense' => 4, 'speed' => 5, 'price' => 5400, 'new' => false],
            ['name' => 'Ember', 'gender' => 'Female', 'first_weapon_id' => Weapon::WEAPON_BOW, 'second_weapon_id' => Weapon::WEAPON_KATARS, 'strength' => 6, 'dexterity' => 6, 'defense' => 3, 'speed' => 7, 'price' => 900, 'new' => false],
            ['name' => 'Fait', 'gender' => 'Female', 'first_weapon_id' => Weapon::WEAPON_SCYTHE, 'second_weapon_id' => Weapon::WEAPON_ORB, 'strength' => 7, 'dexterity' => 4, 'defense' => 4, 'speed' => 7, 'price' => 5400, 'new' => false],
            ['name' => 'Gnash', 'gender' => 'Male', 'first_weapon_id' => Weapon::WEAPON_GRAPPLE_HAMMER, 'second_weapon_id' => Weapon::WEAPON_SPEAR, 'strength' => 7, 'dexterity' => 3, 'defense' => 5, 'speed' => 7, 'price' => 2300, 'new' => false],
            ['name' => 'Hattori', 'gender' => 'Female', 'first_weapon_id' => Weapon::WEAPON_SWORD, 'second_weapon_id' => Weapon::WEAPON_SPEAR, 'strength' => 4, 'dexterity' => 6, 'defense' => 4, 'speed' => 8, 'price' => 2300, 'new' => false],
            ['name' => 'Isaiah', 'gender' => 'Male', 'first_weapon_id' => Weapon::WEAPON_CANNON, 'second_weapon_id' => Weapon::WEAPON_BLASTERS, 'strength' => 5, 'dexterity' => 6, 'defense' => 7, 'speed' => 4, 'price' => 5400, 'new' => false],
            ['name' => 'Jaeyun', 'gender' => 'Male', 'first_weapon_id' => Weapon::WEAPON_SWORD, 'second_weapon_id' => Weapon::WEAPON_GREATSWORD, 'strength' => 6, 'dexterity' => 5, 'defense' => 5, 'speed' => 6, 'price' => 5400, 'new' => false],
            ['name' => 'Jhala', 'gender' => 'Female', 'first_weapon_id' => Weapon::WEAPON_AXE, 'second_weapon_id' => Weapon::WEAPON_SWORD, 'strength' => 7, 'dexterity' => 7, 'defense' => 3, 'speed' => 5, 'price' => 5400, 'new' => false],
            ['name' => 'Jiro', 'gender' => 'Male', 'first_weapon_id' => Weapon::WEAPON_SCYTHE, 'second_weapon_id' => Weapon::WEAPON_SWORD, 'strength' => 5, 'dexterity' => 7, 'defense' => 3, 'speed' => 7, 'price' => 5400, 'new' => false],
            ['name' => 'Kaya', 'gender' => 'Female', 'first_weapon_id' => Weapon::WEAPON_SPEAR, 'second_weapon_id' => Weapon::WEAPON_BOW, 'strength' => 4, 'dexterity' => 4, 'defense' => 7, 'speed' => 7, 'price' => 5400, 'new' => false],
            ['name' => 'Koji', 'gender' => 'Male', 'first_weapon_id' => Weapon::WEAPON_BOW, 'second_weapon_id' => Weapon::WEAPON_SWORD, 'strength' => 5, 'dexterity' => 8, 'defense' => 4, 'speed' => 5, 'price' => 5400, 'new' => false],
            ['name' => 'Kor', 'gender' => 'Male', 'first_weapon_id' => Weapon::WEAPON_GAUNTLETS, 'second_weapon_id' => Weapon::WEAPON_GRAPPLE_HAMMER, 'strength' => 6, 'dexterity' => 5, 'defense' => 7, 'speed' => 4, 'price' => 3900, 'new' => false],
            ['name' => 'Lin Fei', 'gender' => 'Female', 'first_weapon_id' => Weapon::WEAPON_KATARS, 'second_weapon_id' => Weapon::WEAPON_CANNON, 'strength' => 3, 'dexterity' => 8, 'defense' => 4, 'speed' => 7, 'price' => 5400, 'new' => false],
            ['name' => 'Lucien', 'gender' => 'Male', 'first_weapon_id' => Weapon::WEAPON_KATARS, 'second_weapon_id' => Weapon::WEAPON_BLASTERS, 'strength' => 3, 'dexterity' => 5, 'defense' => 6, 'speed' => 8, 'price' => 2300, 'new' => false],
            ['name' => 'Magyar', 'gender' => 'Male', 'first_weapon_id' => Weapon::WEAPON_GRAPPLE_HAMMER, 'second_weapon_id' => Weapon::WEAPON_GREATSWORD, 'strength' => 5, 'dexterity' => 4, 'defense' => 9, 'speed' => 4, 'price' => 5400, 'new' => false],
            ['name' => 'Mako', 'gender' => 'Female', 'first_weapon_id' => Weapon::WEAPON_KATARS, 'second_weapon_id' => Weapon::WEAPON_GREATSWORD, 'strength' => 6, 'dexterity' => 4, 'defense' => 4, 'speed' => 8, 'price' => 5400, 'new' => false],
            ['name' => 'Mirage', 'gender' => 'Female', 'first_weapon_id' => Weapon::WEAPON_SCYTHE, 'second_weapon_id' => Weapon::WEAPON_SPEAR, 'strength' => 7, 'dexterity' => 6, 'defense' => 4, 'speed' => 5, 'price' => 3900, 'new' => false],
            ['name' => 'Mordex', 'gender' => 'Male', 'first_weapon_id' => Weapon::WEAPON_SCYTHE, 'second_weapon_id' => Weapon::WEAPON_GAUNTLETS, 'strength' => 6, 'dexterity' => 4, 'defense' => 5, 'speed' => 7, 'price' => 5400, 'new' => false],
            ['name' => 'Queen Nai', 'gender' => 'Female', 'first_weapon_id' => Weapon::WEAPON_SPEAR, 'second_weapon_id' => Weapon::WEAPON_KATARS, 'strength' => 7, 'dexterity' => 4, 'defense' => 8, 'speed' => 3, 'price' => 2300, 'new' => false],
            ['name' => 'Nix', 'gender' => 'Female', 'first_weapon_id' => Weapon::WEAPON_SCYTHE, 'second_weapon_id' => Weapon::WEAPON_BLASTERS, 'strength' => 4, 'dexterity' => 5, 'defense' => 7, 'speed' => 6, 'price' => 5400, 'new' => false],
            ['name' => 'Onyx', 'gender' => 'Female', 'first_weapon_id' => Weapon::WEAPON_GAUNTLETS, 'second_weapon_id' => Weapon::WEAPON_CANNON, 'strength' => 5, 'dexterity' => 4, 'defense' => 8, 'speed' => 5, 'price' => 5400, 'new' => false],
            ['name' => 'Orion', 'gender' => 'Male', 'first_weapon_id' => Weapon::WEAPON_ROCKET_LANCE, 'second_weapon_id' => Weapon::WEAPON_SPEAR, 'strength' => 4, 'dexterity' => 6, 'defense' => 6, 'speed' => 6, 'price' => 2300, 'new' => false],
            ['name' => 'Petra', 'gender' => 'Female', 'first_weapon_id' => Weapon::WEAPON_GAUNTLETS, 'second_weapon_id' => Weapon::WEAPON_ORB, 'strength' => 8, 'dexterity' => 4, 'defense' => 4, 'speed' => 6, 'price' => 5400, 'new' => false],
            ['name' => 'Ragnir', 'gender' => 'Male', 'first_weapon_id' => Weapon::WEAPON_KATARS, 'second_weapon_id' => Weapon::WEAPON_AXE, 'strength' => 5, 'dexterity' => 6, 'defense' => 6, 'speed' => 5, 'price' => 5400, 'new' => false],
            ['name' => 'Rayman', 'gender' => 'Male', 'first_weapon_id' => Weapon::WEAPON_GAUNTLETS, 'second_weapon_id' => Weapon::WEAPON_AXE, 'strength' => 5, 'dexterity' => 5, 'defense' => 6, 'speed' => 6, 'price' => 5400, 'new' => false],
            
            ['name' => 'Reno', 'gender' => 'Male', 'first_weapon_id' => Weapon::WEAPON_BLASTERS, 'second_weapon_id' => Weapon::WEAPON_ORB, 'strength' => 4, 'dexterity' => 7, 'defense' => 6, 'speed' => 5, 'price' => 5400, 'new' => true],
            
            ['name' => 'Sir Roland', 'gender' => 'Male', 'first_weapon_id' => Weapon::WEAPON_ROCKET_LANCE, 'second_weapon_id' => Weapon::WEAPON_SWORD, 'strength' => 5, 'dexterity' => 4, 'defense' => 8, 'speed' => 3, 'price' => 2300, 'new' => false],
            ['name' => 'Scarlet', 'gender' => 'Female', 'first_weapon_id' => Weapon::WEAPON_GRAPPLE_HAMMER, 'second_weapon_id' => Weapon::WEAPON_ROCKET_LANCE, 'strength' => 8, 'dexterity' => 5, 'defense' => 5, 'speed' => 4, 'price' => 3900, 'new' => false],
            ['name' => 'Sentinel', 'gender' => 'Male', 'first_weapon_id' => Weapon::WEAPON_GRAPPLE_HAMMER, 'second_weapon_id' => Weapon::WEAPON_KATARS, 'strength' => 5, 'dexterity' => 3, 'defense' => 7, 'speed' => 5, 'price' => 2300, 'new' => false],
            ['name' => 'Sidra', 'gender' => 'Female', 'first_weapon_id' => Weapon::WEAPON_CANNON, 'second_weapon_id' => Weapon::WEAPON_SWORD, 'strength' => 6, 'dexterity' => 4, 'defense' => 6, 'speed' => 6, 'price' => 3900, 'new' => false],
            ['name' => 'Teros', 'gender' => 'Male', 'first_weapon_id' => Weapon::WEAPON_GRAPPLE_HAMMER, 'second_weapon_id' => Weapon::WEAPON_AXE, 'strength' => 7, 'dexterity' => 3, 'defense' => 6, 'speed' => 4, 'price' => 3900, 'new' => false],
            ['name' => 'Thatch', 'gender' => 'Male', 'first_weapon_id' => Weapon::WEAPON_SWORD, 'second_weapon_id' => Weapon::WEAPON_BLASTERS, 'strength' => 7, 'dexterity' => 4, 'defense' => 3, 'speed' => 6, 'price' => 3900, 'new' => false],
            ['name' => 'Thor', 'gender' => 'Male', 'first_weapon_id' => Weapon::WEAPON_GRAPPLE_HAMMER, 'second_weapon_id' => Weapon::WEAPON_ORB, 'strength' => 6, 'dexterity' => 4, 'defense' => 7, 'speed' => 5, 'price' => 5400, 'new' => false],
            ['name' => 'Ulgrim', 'gender' => 'Male', 'first_weapon_id' => Weapon::WEAPON_AXE, 'second_weapon_id' => Weapon::WEAPON_ROCKET_LANCE, 'strength' => 6, 'dexterity' => 3, 'defense' => 7, 'speed' => 6, 'price' => 5400, 'new' => false],
            ['name' => 'Val', 'gender' => 'Female', 'first_weapon_id' => Weapon::WEAPON_GAUNTLETS, 'second_weapon_id' => Weapon::WEAPON_SWORD, 'strength' => 4, 'dexterity' => 5, 'defense' => 6, 'speed' => 7, 'price' => 5400, 'new' => false],
            ['name' => 'Vector', 'gender' => 'Male', 'first_weapon_id' => Weapon::WEAPON_ROCKET_LANCE, 'second_weapon_id' => Weapon::WEAPON_BOW, 'strength' => 5, 'dexterity' => 4, 'defense' => 6, 'speed' => 7, 'price' => 5400, 'new' => false],
            ['name' => 'Volkov', 'gender' => 'Male', 'first_weapon_id' => Weapon::WEAPON_AXE, 'second_weapon_id' => Weapon::WEAPON_SPEAR, 'strength' => 4, 'dexterity' => 8, 'defense' => 6, 'speed' => 4, 'price' => 5400, 'new' => false],
            ['name' => 'Lord Vraxx', 'gender' => 'Male', 'first_weapon_id' => Weapon::WEAPON_BLASTERS, 'second_weapon_id' => Weapon::WEAPON_ROCKET_LANCE, 'strength' => 4, 'dexterity' => 8, 'defense' => 4, 'speed' => 6, 'price' => 2300, 'new' => false],
            ['name' => 'Wu Shang', 'gender' => 'Male', 'first_weapon_id' => Weapon::WEAPON_GAUNTLETS, 'second_weapon_id' => Weapon::WEAPON_SPEAR, 'strength' => 5, 'dexterity' => 7, 'defense' => 5, 'speed' => 5, 'price' => 5400, 'new' => false],
            ['name' => 'Xull', 'gender' => 'Male', 'first_weapon_id' => Weapon::WEAPON_CANNON, 'second_weapon_id' => Weapon::WEAPON_AXE, 'strength' => 9, 'dexterity' => 4, 'defense' => 5, 'speed' => 4, 'price' => 5400, 'new' => false],
            ['name' => 'Yumiko', 'gender' => 'Female', 'first_weapon_id' => Weapon::WEAPON_BOW, 'second_weapon_id' => Weapon::WEAPON_GRAPPLE_HAMMER, 'strength' => 4, 'dexterity' => 7, 'defense' => 4, 'speed' => 7, 'price' => 5400, 'new' => false],
            ['name' => 'Zariel', 'gender' => 'Male', 'first_weapon_id' => Weapon::WEAPON_GAUNTLETS, 'second_weapon_id' => Weapon::WEAPON_BOW, 'strength' => 7, 'dexterity' => 4, 'defense' => 7, 'speed' => 4, 'price' => 5400, 'new' => false],
        ];

        foreach ($legends as $legend) {
            Legend::updateOrCreate(['name' => $legend['name']], $legend);
        }
    }
}
