@extends('layouts.app')

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    <h3 class="text-center mb-3" style="font-family: helvetica">All Weapons</h3>

    <a href="{{ route('weapons.create') }}" type="button" class="btn btn-outline-success"><i class="fas fa-plus"></i> Add Weapon</a>

    <table class="table table-striped mt-3">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($weapons as $weapon)
                <tr>
                    <td>{{ $weapon->name }}</td>
                    <td>
                        <form action="{{ route('weapons.destroy', $weapon->id) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <a href="{{ route('weapons.edit', $weapon->id) }}" type="button" class="btn btn-outline-primary"><i class="fas fa-edit"></i></a>

                            <button type="submit" class="btn btn-outline-danger"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
