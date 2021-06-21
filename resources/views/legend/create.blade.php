@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header text-white bg-primary">Create Legend</div>

        <div class="card-body">
            <form action="{{ route('legends.store') }}" method="POST">
                @csrf
                @method('POST')

                <div class="form-row">
                    <div class="col-sm-3 form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>

                    <div class="col-sm-3 form-group">
                        <label for="gender">Gender</label>
                        
                        <select class="form-control" name="gender">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>

                    <div class="col-sm-3 form-group">
                        <label for="first_weeapon_id">First Weapon</label>
                        
                        <select class="form-control" name="first_weapon_id">
                            @foreach ($weapons as $weapon)
                                <option value="{{ $weapon->id }}">{{ $weapon->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-sm-3 form-group">
                        <label for="second_weeapon_id">Second Weapon</label>
                        
                        <select class="form-control" name="second_weapon_id">
                            @foreach ($weapons as $weapon)
                                <option value="{{ $weapon->id }}">{{ $weapon->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-sm-3 form-group">
                        <label for="strength">Strength</label>
                        <input type="text" class="form-control" name="strength">
                    </div>

                    <div class="col-sm-3 form-group">
                        <label for="dexterity">Dexterity</label>
                        <input type="text" class="form-control" name="dexterity">
                    </div>

                    <div class="col-sm-3 form-group">
                        <label for="defense">Defense</label>
                        <input type="text" class="form-control" name="defense">
                    </div>

                    <div class="col-sm-3 form-group">
                        <label for="speed">Speed</label>
                        <input type="text" class="form-control" name="speed">
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-sm-3 form-group">
                        <label for="price">Price</label>
                        <input type="text" class="form-control" name="price">
                    </div>

                    <div class="col-sm-3 form-group">
                        <label for="new">New</label>

                        <select class="form-control" name="new">
                            <option value="true">Sim</option>
                            <option value="false">Não</option>
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
