@extends('layouts')
@section('title', 'transaksi')
@section('content')
<div class="col-lg-12">
    <div class="card shadow-sm mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">@yield('title')</h6>
        </div>
        <div class="mt-2 d-flex justify-content-end col-lg-11">
            <div class="col-lg-4">
                <form action="transaksi" method="GET">
                    <div class="input-group mb-3">
                        <input type="search" value="{{ request('search') }}" class="form-control form-control-sm border-0 bg-light" name="search" id="search-box" placeholder="Masukkan Kata Kunci">
                        <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-search"></i></button>
                    </div>
                </form>
            </div>
            <div>
            <a href="transaksi-create" class="btn btn-sm btn-primary shadow-sm float-right" data-toggle="tooltip" title="Tambah Data">Tambah Data</a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="mt-2 col-4">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            </div>
        </div>
        <div class="card-body mb-5">
            <table class="table table-sm table-bordered" id="transaksins-table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>No.Invoice</th>
                        <th>Customer</th>
                        <th>Mobil</th>
                        <th>Date Sewa</th>
                        <th>Date Kembali</th>
                        <th>Harga</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transaksins as $index => $item)
                    <tr>
                        <td>{{ $index + $transaksins->firstItem() }}</td>
                        <td>{{ $item->invoice_no }}</td>
                        <td>{{ $item->customers->name }}</td>
                        <td>{{ $item->cars->name }}</td>
                        <td>{{ $item->rent_date }}</td>
                        <td>{{ $item->return_date }}</td>
                        <td>{{ $item->harga }}</td>
                        <td>{{ $item->status }}</td>
                        <td>                 
                            <a href="transaksi-edit/{{$item->id}}"
                                class="btn btn-success btn-sm shadow-sm"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Edit">
                                <i class="fa fa-pen"></i>
                            </a>
                            <a href="transaksi-destroy/{{$item->id}}"
                                class="btn btn-danger btn-sm shadow-sm delete-data"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Delete">
                                <i class="fa fa-times"></i>
                            </a> 
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $transaksins->links() }}
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script src="{{ asset('style/js/sweet-alert.min.js') }}"></script>
@endpush