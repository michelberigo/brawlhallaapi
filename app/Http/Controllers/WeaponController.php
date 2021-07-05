<?php

namespace App\Http\Controllers;

use App\Models\Weapon;
use Illuminate\Http\Request;

class WeaponController extends Controller
{
    public function index() {
        $weapons = Weapon::orderBy('name')->get();

        $parametros = [
            'weapons' => $weapons
        ];

        return view('weapon.index', $parametros);
    }

    public function create() {
        $weapons = Weapon::orderBy('name')->get();

        $parametros = [
            'weapons' => $weapons
        ];

        return view('weapon.create', $parametros);
    }

    public function store(Request $request) {
        Weapon::create([
            'name' => $request->name
        ]);

        return redirect()->route('weapons.index')->with('success', 'Weapon atualizado com sucesso!');
    }

    public function edit(Weapon $weapon) {
        $weapons = Weapon::orderBy('name')->get();

        $parametros = [
            'weapon' => $weapon,
            'weapons' => $weapons
        ];

        return view('weapon.edit', $parametros);
    }

    public function update(Request $request, Weapon $Weapon) {
        $Weapon->update([
            'name' => $request->name
        ]);

        return redirect()->route('weapons.index')->with('success', 'Weapon atualizado com sucesso!');
    }

    public function destroy(Weapon $weapon)
    {
        $weapon->delete();

        return redirect()->route('weapons.index')->with('success','Weapon deletada com sucesso');
    }
}
