@extends('layouts.app')

@section('title', 'Daftar Kamar')

@section('content')
<div class="container">
    <h3 class="mb-4 text-center">Daftar Kamar Hotel</h3>

    <div class="row">
        @foreach($rooms as $room)
            <div class="col-md-3 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title">Kamar {{ $room['no'] }}</h5>
                        <p class="card-text">
                            <b>Tipe:</b> {{ $room['type'] }} <br>
                            <b>Harga:</b> Rp {{ number_format($room['price'], 0, ',', '.') }} / malam <br>
                            <b>Status:</b>
                            @if($room['status'] === 'Tersedia')
                                <span class="badge bg-success">Tersedia</span>
                            @else
                                <span class="badge bg-danger">Dipesan</span>
                            @endif
                        </p>
                        <button class="btn btn-primary w-100" {{ $room['status'] === 'Dipesan' ? 'disabled' : '' }}>
                            Pesan Sekarang
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
