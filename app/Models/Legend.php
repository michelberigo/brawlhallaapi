<?php

namespace App\Models;

use App\Models\Weapon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Legend extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'gender',
        'first_weapon_id',
        'second_weapon_id',
        'strength',
        'dexterity',
        'defense',
        'speed',
        'price',
        'new'
    ];

    public function firstWeapon()
    {
        return $this->belongsTo(Weapon::class, 'first_weapon_id');
    }
    
    public function secondWeapon()
    {
        return $this->belongsTo(Weapon::class, 'second_weapon_id');
    }
}
