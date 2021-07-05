@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header text-white bg-primary">Weapon</div>

        <div class="card-body">
            <form action="{{ route('weapons.update', $weapon->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-row">
                    <div class="col-sm-3 form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $weapon->name }}">
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
