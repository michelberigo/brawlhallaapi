@extends('layouts.app')

@section('content')
    <h3 class="text-center" style="font-family: helvetica">Seja bem-vindo, {{ Auth::user()->name }}!</h3>
@endsection
