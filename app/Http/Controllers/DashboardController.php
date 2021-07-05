<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Legend;
use App\Models\Weapon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $legends = Legend::get();
        $weapons = Weapon::get();
        
        $parametros = [
            'legends' => $legends,
            'weapons' => $weapons
        ];

        return view('dashboard.index', $parametros);
    }
}