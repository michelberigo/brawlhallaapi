@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header text-white bg-primary">Legend</div>

        <div class="card-body">
            <form action="{{ route('legends.update', $legend->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-row">
                    <div class="col-sm-3 form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $legend->name }}">
                    </div>

                    <div class="col-sm-3 form-group">
                        <label for="gender">Gender</label>
                        
                        <select class="form-control" name="gender">
                            <option value="Male" {{ $legend->gender == 'Male' ? 'selected' : '' }}>Homem</option>
                            <option value="Female" {{ $legend->gender == 'Female' ? 'selected' : '' }}>Mulher</option>
                        </select>
                    </div>

                    <div class="col-sm-3 form-group">
                        <label for="first_weeapon_id">First Weapon</label>
                        
                        <select class="form-control" name="first_weapon_id">
                            @foreach ($weapons as $weapon)
                                <option value="{{ $weapon->id }}" {{ $legend->first_weapon_id == $weapon->id ? 'selected' : '' }}>{{ $weapon->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-sm-3 form-group">
                        <label for="second_weeapon_id">Second Weapon</label>
                        
                        <select class="form-control" name="second_weapon_id">
                            @foreach ($weapons as $weapon)
                                <option value="{{ $weapon->id }}" {{ $legend->second_weapon_id == $weapon->id ? 'selected' : '' }}>{{ $weapon->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-sm-3 form-group">
                        <label for="strength">Strength</label>
                        <input type="text" class="form-control" name="strength" value="{{ $legend->strength }}">
                    </div>

                    <div class="col-sm-3 form-group">
                        <label for="dexterity">Dexterity</label>
                        <input type="text" class="form-control" name="dexterity" value="{{ $legend->dexterity }}">
                    </div>

                    <div class="col-sm-3 form-group">
                        <label for="defense">Defense</label>
                        <input type="text" class="form-control" name="defense" value="{{ $legend->defense }}">
                    </div>

                    <div class="col-sm-3 form-group">
                        <label for="speed">Speed</label>
                        <input type="text" class="form-control" name="speed" value="{{ $legend->speed }}">
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-sm-3 form-group">
                        <label for="price">Price</label>
                        <input type="text" class="form-control" name="price" value="{{ $legend->price }}">
                    </div>

                    <div class="col-sm-3 form-group">
                        <label for="new">New</label>

                        <select class="form-control" name="new">
                            <option value="true" {{ $legend->new == true ? 'selected' : '' }}>Sim</option>
                            <option value="false" {{ $legend->new == false ? 'selected' : '' }}>Não</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-sm-12">
                        <div class="text-center mt-3">
                            <button class="btn btn-success">Salvar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
