@extends('layouts')
@section('title', 'dashboard')
@section('content')
<div class="col-xl-3 col-md-6 mb-4">
    <a href="" style="text-decoration:none;">
    <div class="card border-left-danger shadow-sm h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Mobil Tersedia</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $car_count }}</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-car fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
    </a>
</div>
<div class="col-xl-3 col-md-6 mb-4">
    <a href="" style="text-decoration:none;">
    <div class="card border-left-danger shadow-sm h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Merk</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $category_count }}</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-car fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
    </a>
</div>
<div class="col-xl-3 col-md-6 mb-4">
    <a href="" style="text-decoration:none;">
    <div class="card border-left-danger shadow-sm h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">User</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $user_count }}</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-user fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
    </a>
</div>
<div class="col-xl-3 col-md-6 mb-4">
    <a href="" style="text-decoration:none;">
    <div class="card border-left-danger shadow-sm h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Transaksi</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $transaksi_count }}</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-book fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
    </a>
</div>
<div class="col-lg-6">
    <div class="card shadow-sm mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">Transaksi Tahun</h6>
        </div>
        <div class="card-body">
                
        </div>
    </div>
</div>
@endsection
