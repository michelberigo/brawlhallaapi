<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Legend;
use App\Models\Weapon;
use App\Http\Resources\DashboardCollection;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request) {
        $legends = Legend::get();
        $weapons = Weapon::get();

        $highestStatus = [
            'strength' => $legends->max('strength'),
            'dexterity' => $legends->max('dexterity'),
            'defense' => $legends->max('defense'),
            'speed' => $legends->max('speed')
        ];

        $lowestStatus = [
            'strength' => $legends->min('strength'),
            'dexterity' => $legends->min('dexterity'),
            'defense' => $legends->min('defense'),
            'speed' => $legends->min('speed')
        ];

        $dashboard = [
            'all_legends' => $legends->count(),
            'all_weapons' => $weapons->count(),
            'all_male_legends' => $legends->where('gender', 'Male')->count(),
            'all_female_legends' => $legends->where('gender', 'Female')->count(),

            'highest_strength_legends' => $legends->where('strength', $highestStatus['strength'])->values(),
            'highest_dexterity_legends' => $legends->where('dexterity', $highestStatus['dexterity'])->values(),
            'highest_defense_legends' => $legends->where('defense', $highestStatus['defense'])->values(),
            'highest_speed_legends' => $legends->where('speed', $highestStatus['speed'])->values(),

            'lowest_strength_legends' => $legends->where('strength', $lowestStatus['strength'])->values(),
            'lowest_dexterity_legends' => $legends->where('dexterity', $lowestStatus['dexterity'])->values(),
            'lowest_defense_legends' => $legends->where('defense', $lowestStatus['defense'])->values(),
            'lowest_speed_legends' => $legends->where('speed', $lowestStatus['speed'])->values(),
        ];

        $dashboard = collect($dashboard);
        
        return new DashboardCollection($dashboard);
    }
}
