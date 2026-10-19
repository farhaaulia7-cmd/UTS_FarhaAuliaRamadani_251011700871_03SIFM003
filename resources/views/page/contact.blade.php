@extends('layouts.app')

@section('title', 'Kontak Toko Tanaman Hias')

@section('content')
<div class="container mt-5 mb-5">
    <h1 class="text-center mb-4">Hubungi Toko Kami</h1>
    <div class="card mx-auto shadow-sm" style="max-width: 600px;">
        <div class="card-header bg-white text-center py-4">
            <center><img src="https://sahabatnesia.com/wp-content/uploads/2019/02/gambar-bunga.jpg" alt="Logo Toko" class="rounded-circle mb-3 shadow-sm" style="width: 120px; height: 120px; object-fit: cover;">
            <h3 class="card-title mb-0">{{ $toko['nama'] }}</h3>
        </div>
        <div class="card-body px-4 py-4">
            <p class="card-text"><strong>Alamat:</strong> {{ $toko['alamat'] }}</p>
            <p class="card-text"><strong>WhatsApp / Telepon:</strong> {{ $toko['telepon'] }}</p>
            <p class="card-text"><strong>Email:</strong> {{ $toko['email'] }}</p>
            <p class="card-text"><strong>Jam Operasional:</strong> {{ $toko['jam_buka'] }}</p>
            <p class="card-text"><strong>Status Toko:</strong> <span class="badge bg-success">{{ $toko['status'] }}</span></p>
        </div>
    </div>
</div>
@endsection