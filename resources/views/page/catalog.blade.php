@extends('layouts.app')

@section('title', 'Katalog Tanaman Hias')

@section('content')
<div class="container mt-5 mb-5">
    <div class="mb-4 text-center">
        <h2 class="fw-bold text-success">Katalog Tanaman Hias 🌿</h2>
        <p class="text-muted">Jelajahi berbagai pilihan tanaman hias segar berkualitas untuk mempercantik ruangan Anda</p>
    </div>

   <div class="row mt-5 mb-5 pt-3">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm overflow-hidden">
                <img src="{{ asset('images/banner-tanaman.jpg') }}" alt="Foto Tanaman Hias" class="img-fluid w-100 rounded" style="max-height: 400px; object-fit: cover;">
            </div>
        </div>
    </div>

    <div class="row g-4">
        @foreach ($plants as $plant)
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0">
                    <img src="{{ asset('images/' . $plant->image) }}" class="card-img-top" alt="{{ $plant->name }}"
                        style="height: 220px; object-fit: cover;">
                    <div class="card-body">
                        <span class="badge bg-success mb-2">{{ $plant->species }}</span>
                        <h5 class="card-title fw-bold">{{ $plant->name }}</h5>
                        <p class="text-success fw-bold fs-5 mb-2">
                            Rp {{ number_format($plant->price, 0, ',', '.') }}
                        </p>
                        <p class="card-text text-secondary">Deskripsi : {{ Str::limit($plant->description, 90) }}</p>
                    </div>
                    <div class="card-footer bg-white border-0 pb-3">
                        <small class="text-muted d-block mb-2">Kebutuhan Cahaya: {{ Str::limit($plant->sunlight_requirements, 30) }}</small>
                        <a href="{{ route('plant.show', $plant->id) }}" class="btn btn-success w-100 fw-bold">Lihat Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="mt-4 d-flex justify-content-center">
        {{ $plants->links('pagination::bootstrap-5') }}
    </div>

    <style>
        .page-item.active .page-link {
            background-color: #198754 !important;
            border-color: #198754 !important;
            color: #ffffff !important;
        }

        .page-link {
            color: #198754 !important;
        }

        .page-link:hover {
            color: #146c43 !important;
            background-color: #e8f5e9 !important;
        }
    </style>
</div>
@endsection