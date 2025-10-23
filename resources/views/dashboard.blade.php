@extends('layouts.app')

@section('title', 'Dashboard - TimiTimi')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-12">
            <div class="card bg-gradient text-white" style="background: linear-gradient(135deg, var(--primary-color), var(--accent-color));">
                <div class="card-body p-4">
                    <h2 class="mb-2">
                        <i class="bi bi-emoji-smile-fill me-2"></i>Selamat datang, {{ $username }}!
                    </h2>
                    <p class="mb-0">Kelola menu dessert toko Anda dengan mudah</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <i class="bi bi-cake2-fill text-primary" style="font-size: 3rem;"></i>
                    <h3 class="mt-3">25</h3>
                    <p class="text-muted mb-0">Total Menu</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <i class="bi bi-bag-check-fill text-success" style="font-size: 3rem;"></i>
                    <h3 class="mt-3">186</h3>
                    <p class="text-muted mb-0">Pesanan Hari Ini</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <i class="bi bi-star-fill text-warning" style="font-size: 3rem;"></i>
                    <h3 class="mt-3">4.9</h3>
                    <p class="text-muted mb-0">Rating Toko</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-white fw-bold">
                    <i class="bi bi-graph-up me-2"></i>Statistik Penjualan
                </div>
                <div class="card-body">
                    <p class="text-muted">Penjualan minggu ini meningkat 25% dibanding minggu lalu</p>
                    <div class="progress" style="height: 25px;">
                        <div class="progress-bar" role="progressbar" style="width: 75%; background: linear-gradient(90deg, var(--primary-color), var(--accent-color));" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
