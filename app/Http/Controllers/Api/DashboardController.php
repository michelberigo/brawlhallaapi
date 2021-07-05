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

        $dashboard = [
            'all_legends' => $legends->count(),
            'all_weapons' => $weapons->count(),
            'highest_strength_legends' => $legends->where('')
            'highest_dexterity_legends' => $legends->where('')
            'highest_defense_legends' => $legends->where('')
            'highest_speed_legends' => $legends->where('')
        ];
        
        return new DashboardCollection($dashboard);
    }
}
