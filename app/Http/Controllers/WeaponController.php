<?php

namespace App\Http\Controllers;

use App\Models\Weapon;
use App\Http\Resources\WeaponResource;
use Illuminate\Http\Request;

class WeaponController extends Controller
{
    public function apiIndex(Request $request) {
        $weapons = Weapon::orderBy('name')->get();
        
        return WeaponResource::collection($weapons);
    }
}
