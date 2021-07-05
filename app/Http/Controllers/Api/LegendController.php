<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Legend;
use App\Http\Resources\LegendResource;
use Illuminate\Http\Request;

class LegendController extends Controller
{
    public function index(Request $request) {
        $legends = Legend::orderBy('name')->get();
        $legends = $this->filtrarDados($legends, $request->all());
        
        return LegendResource::collection($legends);
    }

    private function filtrarDados($legends, $parametros) {
        if (isset($parametros['name'])) {
            $parametros['name'] = mb_strtolower($parametros['name']);

            $legends = $legends->filter(function ($legend) use ($parametros) {
                return mb_strtolower($legend->name) == $parametros['name'];
            });
        }

        if (isset($parametros['gender'])) {
            $parametros['gender'] = mb_strtolower($parametros['gender']);

            if ($parametros['gender'] == 'm') {
                $parametros['gender'] = 'male';
            } elseif ($parametros['gender'] == 'f') {
                $parametros['gender'] = 'female';
            }

            $legends = $legends->filter(function ($legend) use ($parametros) {
                return mb_strtolower($legend->gender) == $parametros['gender'];
            });
        }

        if (isset($parametros['weapons'])) {
            $parametros['weapons'] = explode(",", mb_strtolower($parametros['weapons']));

            $legends = $legends->filter(function ($legend) use ($parametros) {
                if (count($parametros['weapons']) == 1) {
                    return mb_strtolower($legend->firstWeapon->name) == $parametros['weapons'][0] || mb_strtolower($legend->secondWeapon->name) == $parametros['weapons'][0];
                } elseif (count($parametros['weapons']) == 2) {
                    return (mb_strtolower($legend->firstWeapon->name) == $parametros['weapons'][0] || mb_strtolower($legend->secondWeapon->name) == $parametros['weapons'][0])
                        && (mb_strtolower($legend->firstWeapon->name) == $parametros['weapons'][1] || mb_strtolower($legend->secondWeapon->name) == $parametros['weapons'][1]);
                }
            });
        }

        if (isset($parametros['strength'])) {
            $legends = $legends->filter(function ($legend) use ($parametros) {
                return $legend->strength == $parametros['strength'];
            });
        }

        if (isset($parametros['gtstrength'])) {
            $legends = $legends->filter(function ($legend) use ($parametros) {
                return $legend->strength > $parametros['gtstrength'];
            });
        }

        if (isset($parametros['ltstrength'])) {
            $legends = $legends->filter(function ($legend) use ($parametros) {
                return $legend->strength < $parametros['ltstrength'];
            });
        }

        if (isset($parametros['dexterity'])) {
            $legends = $legends->filter(function ($legend) use ($parametros) {
                return $legend->dexterity == $parametros['dexterity'];
            });
        }

        if (isset($parametros['gtdexterity'])) {
            $legends = $legends->filter(function ($legend) use ($parametros) {
                return $legend->dexterity > $parametros['gtdexterity'];
            });
        }

        if (isset($parametros['ltdexterity'])) {
            $legends = $legends->filter(function ($legend) use ($parametros) {
                return $legend->dexterity < $parametros['ltdexterity'];
            });
        }

        if (isset($parametros['defense'])) {
            $legends = $legends->filter(function ($legend) use ($parametros) {
                return $legend->defense == $parametros['defense'];
            });
        }
        
        if (isset($parametros['gtdefense'])) {
            $legends = $legends->filter(function ($legend) use ($parametros) {
                return $legend->defense > $parametros['gtdefense'];
            });
        }

        if (isset($parametros['ltdefense'])) {
            $legends = $legends->filter(function ($legend) use ($parametros) {
                return $legend->defense < $parametros['ltdefense'];
            });
        }

        if (isset($parametros['speed'])) {
            $legends = $legends->filter(function ($legend) use ($parametros) {
                return $legend->speed == $parametros['speed'];
            });
        }

        if (isset($parametros['gtspeed'])) {
            $legends = $legends->filter(function ($legend) use ($parametros) {
                return $legend->speed > $parametros['gtspeed'];
            });
        }

        if (isset($parametros['ltspeed'])) {
            $legends = $legends->filter(function ($legend) use ($parametros) {
                return $legend->speed < $parametros['ltspeed'];
            });
        }

        if (isset($parametros['price'])) {
            $legends = $legends->filter(function ($legend) use ($parametros) {
                return $legend->price == $parametros['price'];
            });
        }

        if (isset($parametros['gtprice'])) {
            $legends = $legends->filter(function ($legend) use ($parametros) {
                return $legend->price > $parametros['gtprice'];
            });
        }

        if (isset($parametros['ltprice'])) {
            $legends = $legends->filter(function ($legend) use ($parametros) {
                return $legend->price < $parametros['ltprice'];
            });
        }

        return $legends;
    }
}