<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LegendResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'gender' => $this->gender,
            'first_weapon' => $this->firstWeapon->name,
            'second_weapon' => $this->secondWeapon->name,
            'strength' => $this->strength,
            'dexterity' => $this->dexterity,
            'defense' => $this->defense,
            'speed' => $this->speed,
            'price' => $this->price
        ];
    }
}
