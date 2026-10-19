@extends('layouts.app')

@section('title', 'Home - Toko Tanaman Hias')

@section('content')
<div class="container mt-5">
    <div class="p-5 mb-4 bg-success text-white rounded-3 shadow">
        <div class="container-fluid py-3">
            <h1 class="display-5 fw-bold">Selamat Datang di Toko Tanaman Hias</h1>
            <p class="col-md-8 fs-4 mt-3">
                Temukan berbagai koleksi tanaman hias segar dan berkualitas untuk mempercantik hunian serta ruang kerja Anda.
            </p>
            <a href="{{ route('plant.index') }}" class="btn btn-light btn-lg text-success fw-bold mt-2">Lihat Katalog Tanaman</a>
        </div>
    </div>

    <div class="row text-center mt-5">
        <div class="col-md-4 mb-3">
            <div class="card p-3 shadow-sm h-100 border-0">
                <h3 class="text-success">🌱 Segar & Sehat</h3>
                <p class="text-muted">Tanaman dirawat langsung dengan nutrisi terbaik dan siap tumbuh subur.</p>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card p-3 shadow-sm h-100 border-0">
                <h3 class="text-success">🚚 Pengiriman Aman</h3>
                <p class="text-muted">Dikemas dengan standar khusus agar tanaman tetap aman sampai di tujuan.</p>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card p-3 shadow-sm h-100 border-0">
                <h3 class="text-success">💡 Konsultasi Gratis</h3>
                <p class="text-muted">Bingung cara merawatnya? Kami siap membantu memberikan tips perawatan.</p>
            </div>
        </div>
    </div>
</div>
@endsection