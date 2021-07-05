@extends('layouts.app')

@section('content')
    <h3 class="text-center" style="font-family: helvetica">Seja bem-vindo, {{ Auth::user()->name }}!</h3>

    <h4>Informações Gerais</h4>

    <div class="row mb-3">
        <div class="col-lg-3">
            <div class="card widget-flat">
                <div class="card-body">
                    <h5 class="text-muted fw-normal mt-0">Legends</h5>
                    <h3 class="mt-3 mb-3">{{ $legends->count() }} legends</h3>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card widget-flat">
                <div class="card-body">
                    <h5 class="text-muted fw-normal mt-0">Weapons</h5>
                    <h3 class="mt-3 mb-3">{{ $weapons->count() }} weapons</h3>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card widget-flat">
                <div class="card-body">
                    <h5 class="text-muted fw-normal mt-0">Expensive Legend</h5>
                    <h3 class="mt-3 mb-3">{{ $legends->sortByDesc('price')->first()->name }}</h3>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card widget-flat">
                <div class="card-body">
                    <h5 class="text-muted fw-normal mt-0">New Legend</h5>
                    <h3 class="mt-3 mb-3">{{ $legends->where('new', true)->first()->name }}</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-3">
            <div class="card widget-flat">
                <div class="card-body">
                    <h5 class="text-muted fw-normal mt-0">Legend High Strength</h5>
                    <h3 class="mt-3 mb-3">{{ $legends->sortByDesc('strength')->first()->name }}</h3>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card widget-flat">
                <div class="card-body">
                    <h5 class="text-muted fw-normal mt-0">Legend High Dexterity</h5>
                    <h3 class="mt-3 mb-3">{{ $legends->sortByDesc('dexterity')->first()->name }}</h3>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card widget-flat">
                <div class="card-body">
                    <h5 class="text-muted fw-normal mt-0">Legend High Defense</h5>
                    <h3 class="mt-3 mb-3">{{ $legends->sortByDesc('defense')->first()->name }}</h3>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card widget-flat">
                <div class="card-body">
                    <h5 class="text-muted fw-normal mt-0">Legend High Speed</h5>
                    <h3 class="mt-3 mb-3">{{ $legends->sortByDesc('speed')->first()->name }}</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-3">
            <div class="card widget-flat">
                <div class="card-body">
                    <h5 class="text-muted fw-normal mt-0">Legend Low Strength</h5>
                    <h3 class="mt-3 mb-3">{{ $legends->sortBy('strength')->first()->name }}</h3>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card widget-flat">
                <div class="card-body">
                    <h5 class="text-muted fw-normal mt-0">Legend Low Dexterity</h5>
                    <h3 class="mt-3 mb-3">{{ $legends->sortBy('dexterity')->first()->name }}</h3>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card widget-flat">
                <div class="card-body">
                    <h5 class="text-muted fw-normal mt-0">Legend Low Defense</h5>
                    <h3 class="mt-3 mb-3">{{ $legends->sortBy('defense')->first()->name }}</h3>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card widget-flat">
                <div class="card-body">
                    <h5 class="text-muted fw-normal mt-0">Legend Low Speed</h5>
                    <h3 class="mt-3 mb-3">{{ $legends->sortBy('speed')->first()->name }}</h3>
                </div>
            </div>
        </div>
    </div>
@endsection
