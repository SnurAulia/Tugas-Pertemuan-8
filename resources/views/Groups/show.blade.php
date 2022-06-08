@extends('layout.app')

@section('title', 'Coba')

@section('content')
<div class="card">
    <div class="card-bodyt">
        <h3>Nama Teman : {{ $groups['name'] }}</h3>
        <h3>No.Tlp Teman : {{ $groups['description'] }}</h3>

    </div>
</div>


@endsection

