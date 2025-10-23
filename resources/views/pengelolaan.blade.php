@extends('layouts.app')

@section('title', 'Pengelolaan Menu - TimiTimi')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-12">
            <h2 class="fw-bold">
                <i class="bi bi-list-ul me-2 text-primary"></i>Pengelolaan Menu Dessert
            </h2>
            <p class="text-muted">Daftar menu dessert yang tersedia di toko</p>
        </div>
    </div>

    <div class="row g-4">
        @foreach($desserts as $dessert)
        <div class="col-md-6 col-lg-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <h5 class="card-title fw-bold mb-0">{{ $dessert['nama'] }}</h5>
                        <span class="badge bg-primary">{{ $dessert['kategori'] }}</span>
                    </div>
                    <p class="card-text text-muted">{{ $dessert['deskripsi'] }}</p>
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <div>
                            <p class="mb-1 fw-bold text-primary" style="font-size: 1.2rem;">
                                Rp {{ number_format($dessert['harga'], 0, ',', '.') }}
                            </p>
                            <small class="text-muted">
                                <i class="bi bi-box-seam me-1"></i>Stok: {{ $dessert['stok'] }}
                            </small>
                        </div>
                        <button class="btn btn-sm btn-outline-primary">
                            <i class="bi bi-pencil-square"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="row mt-4">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-white fw-bold">
                <i class="bi bi-table me-2"></i>Tabel Menu Dessert
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Kategori</th>
                                <th>Harga</th>
                                <th>Stok</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($desserts as $dessert)
                            <tr>
                                <td>{{ $dessert['id'] }}</td>
                                <td>{{ $dessert['nama'] }}</td>
                                <td><span class="badge bg-primary">{{ $dessert['kategori'] }}</span></td>
                                <td>Rp {{ number_format($dessert['harga'], 0, ',', '.') }}</td>
                                <td>{{ $dessert['stok'] }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
