<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Weapon;
use App\Http\Resources\WeaponResource;
use Illuminate\Http\Request;

class WeaponController extends Controller
{
    public function index(Request $request) {
        $weapons = Weapon::orderBy('name')->get();
        
        return WeaponResource::collection($weapons);
    }
}
