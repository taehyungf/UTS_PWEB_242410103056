@extends('layouts.app')

@section('title', 'Profile - TimiTimi')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-4 mb-4">
            <div class="card text-center">
                <div class="card-body p-4">
                    <div class="mb-3">
                        <i class="bi bi-person-circle text-primary" style="font-size: 6rem;"></i>
                    </div>
                    <h4 class="fw-bold">{{ $username }}</h4>
                    <p class="text-muted">Administrator</p>
                    <span class="badge bg-success mb-3">
                        <i class="bi bi-check-circle me-1"></i>Active
                    </span>
                </div>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-header bg-white fw-bold">
                    <i class="bi bi-person-fill me-2"></i>Informasi Profile
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-sm-4">
                            <p class="mb-0 fw-bold">Username:</p>
                        </div>
                        <div class="col-sm-8">
                            <p class="mb-0 text-muted">{{ $username }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row mb-3">
                        <div class="col-sm-4">
                            <p class="mb-0 fw-bold">Role:</p>
                        </div>
                        <div class="col-sm-8">
                            <p class="mb-0 text-muted">Admin</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row mb-3">
                        <div class="col-sm-4">
                            <p class="mb-0 fw-bold">Email:</p>
                        </div>
                        <div class="col-sm-8">
                            <p class="mb-0 text-muted">{{ strtolower($username) }}@timitimi.com</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row mb-3">
                        <div class="col-sm-4">
                            <p class="mb-0 fw-bold">Bergabung:</p>
                        </div>
                        <div class="col-sm-8">
                            <p class="mb-0 text-muted">Juni 2025</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header bg-white fw-bold">
                    <i class="bi bi-graph-up me-2"></i>Aktivitas Terbaru
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mb-0">
                        <li class="mb-3 pb-3 border-bottom">
                            <i class="bi bi-check-circle-fill text-success me-2"></i>
                            Menambahkan menu "Klepon"
                            <small class="text-muted d-block ms-4">2 jam yang lalu</small>
                        </li>
                        <li class="mb-3 pb-3 border-bottom">
                            <i class="bi bi-pencil-square text-primary me-2"></i>
                            Mengupdate stok "Klepon"
                            <small class="text-muted d-block ms-4">2 jam yang lalu</small>
                        </li>
                        <li class="mb-0">
                            <i class="bi bi-box-arrow-in-right text-info me-2"></i>
                            Login ke sistem
                            <small class="text-muted d-block ms-4">Hari ini</small>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
