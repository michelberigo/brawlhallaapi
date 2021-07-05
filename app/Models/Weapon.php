<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weapon extends Model
{
    use HasFactory;

    const WEAPON_GRAPPLE_HAMMER = 1;
    const WEAPON_SWORD = 2;
    const WEAPON_BLASTERS = 3;
    const WEAPON_ROCKET_LANCE = 4;
    const WEAPON_SPEAR = 5;
    const WEAPON_KATARS = 6;
    const WEAPON_AXE = 7;
    const WEAPON_BOW = 8;
    const WEAPON_GAUNTLETS = 9;
    const WEAPON_SCYTHE = 10;
    const WEAPON_CANNON = 11;
    const WEAPON_ORB = 12;
    const WEAPON_GREATSWORD = 13;

    protected $fillable = [
        'name'
    ];
}
