<?php

namespace App\Http\Controllers;

use App\Models\Legend;
use App\Models\Weapon;
use Illuminate\Http\Request;

class LegendController extends Controller
{
    public function index() {
        $legends = Legend::orderBy('name')->get();

        $parametros = [
            'legends' => $legends
        ];

        return view('legend.index', $parametros);
    }

    public function create() {
        $weapons = Weapon::orderBy('name')->get();

        $parametros = [
            'weapons' => $weapons
        ];

        return view('legend.create', $parametros);
    }

    public function store(Request $request) {
        Legend::create([
            'name' => $request->name,
            'gender' => $request->gender,
            'first_weapon_id' => $request->first_weapon_id,
            'second_weapon_id' => $request->second_weapon_id,
            'strength' => $request->strength,
            'dexterity' => $request->dexterity,
            'defense' => $request->defense,
            'speed' => $request->speed,
            'price' => $request->price,
            'new' => $request->new
        ]);

        return redirect()->route('legends.index')->with('success', 'Legend atualizado com sucesso!');
    }

    public function edit(Legend $legend) {
        $weapons = Weapon::orderBy('name')->get();

        $parametros = [
            'legend' => $legend,
            'weapons' => $weapons
        ];

        return view('legend.edit', $parametros);
    }

    public function update(Request $request, Legend $legend) {
        $legend->update([
            'name' => $request->name,
            'gender' => $request->gender,
            'first_weapon_id' => $request->first_weapon_id,
            'second_weapon_id' => $request->second_weapon_id,
            'strength' => $request->strength,
            'dexterity' => $request->dexterity,
            'defense' => $request->defense,
            'speed' => $request->speed,
            'price' => $request->price,
            'new' => $request->new
        ]);

        return redirect()->route('legends.index')->with('success', 'Legend atualizado com sucesso!');
    }

    public function destroy(Legend $legend)
    {
        $legend->delete();

        return redirect()->route('legends.index')->with('success','Legend deletada com sucesso');
    }
}
