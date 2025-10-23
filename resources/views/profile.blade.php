@extends('layouts.app')

@section('title', 'Profil User')

@section('content')
<div class="container">
    <div class="card shadow-sm mx-auto" style="max-width: 500px;">
        <div class="card-body">
        <h4 class="card-title mb-3 text-center">Profil Pengguna</h4>
        <ul class="list-group">
            <li class="list-group-item"><b>Username:</b> {{ $username }}</li>
        </ul>
        </div>
    </div>
</div>
@endsection
