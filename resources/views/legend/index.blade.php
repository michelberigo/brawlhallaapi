@extends('layouts.app')

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    <h3 class="text-center mb-3" style="font-family: helvetica">All Legends</h3>

    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Arma 1</th>
                <th scope="col">Arma 2</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($legends as $legend)
                <tr class="{{ $legend->new ? 'table-success' : '' }}">
                    <td>{{ $legend->id }}</td>
                    <td>{{ $legend->name }}</td>
                    <td>{{ $legend->firstWeapon->name }}</td>
                    <td>{{ $legend->secondWeapon->name }}</td>
                    <td>
                        <a href="{{ route('legends.edit', $legend->id) }}" type="button" class="btn btn-outline-primary"><i class="fas fa-edit"></i></a>
                        <button type="button" class="btn btn-outline-danger"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
