@extends('layouts.app')

@section('title', 'Detail Tanaman - ' . $plant->name)

@section('content')
<div class="container mt-4 mb-5">
    <div class="mb-3">
        <a href="{{ route('plant.index') }}" class="btn btn-outline-success btn-sm">
            &larr; Kembali ke Katalog Tanaman
        </a>
    </div>

    <div class="card shadow-sm border-0 overflow-hidden">
        <div class="row g-0">
            <div class="col-md-5">
                <img src="{{ asset('images/' . $plant->image) }}" class="img-fluid h-100 w-100"
                    alt="{{ $plant->name }}" style="object-fit: cover; min-height: 350px;"
                    onerror="this.onerror=null;this.src='https://via.placeholder.com/600x400?text=No+Image';">
            </div>

            <div class="col-md-7">
                <div class="card-body p-4">
                    <div class="mb-2">
                        <span class="badge bg-success fs-6">
                            Spesies: {{ $plant->species }}
                        </span>
                    </div>

                    <h2 class="fw-bold text-success mb-3">{{ $plant->name }}</h2>

                    <div class="mb-3">
                        <h4 class="text-dark fw-bold">Rp {{ number_format($plant->price, 0, ',', '.') }}</h4>
                    </div>

                    <div class="mb-4">
                        <h6 class="fw-bold text-muted mb-1">Kebutuhan Cahaya:</h6>
                        <p class="text-secondary mb-0">{{ $plant->sunlight_requirements }}</p>
                    </div>

                    <div class="mb-4">
                        <h6 class="fw-bold text-muted mb-1">Deskripsi Tanaman:</h6>
                        <p class="card-text text-secondary" style="line-height: 1.7;">
                            {{ $plant->description }}
                        </p>
                    </div>

                    <hr>

                    <div class="d-flex justify-content-between align-items-center">
                        <div class="text-muted small">
                            <span>Ditambahkan pada: {{ $plant->created_at->format('d M Y') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection