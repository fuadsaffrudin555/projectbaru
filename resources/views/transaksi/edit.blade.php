@extends('layouts')
@section('title','Ubah Data')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<div class="col-lg-12">
    {{-- <div class="card border-left-primary"> --}}
    <div class="card mb-4">
        <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">@yield('title')</h6>
        </div>
        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            <form action="/transaksi-update/{{$transaksi->id}}" method="post">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>No Invoice</label>
                            <input type="text" name="invoice_no" id="" class="form-control border-dark-50" readonly="" value="{{ $transaksi->invoice_no }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Customer</label>
                            <input type="text" name="customer_id" class="form-control" readonly="" value="{{ $transaksi->customers->name }}">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Mobil</label>
                            <input type="text" name="car_id" class="form-control" readonly="" value="{{ $transaksi->cars->name }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Tanggal Sewa</label>
                            <input type="date" name="rent_date" id="" class="form-control border-dark-50" required="" value="{{ $transaksi->rent_date }}">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Tanggal Kembali</label>
                            <input type="date" name="return_date" id="" class="form-control border-dark-50" required="" value="{{ $transaksi->return_date }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="text" name="harga" id="" class="form-control border-dark-50" required="" value="{{ $transaksi->harga }}">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" class="form-control">
                                <option value="dipinjam">Dipinjam</option>
                                <option value="kembali">Dikembalikan</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-gorup">
                            <button type="submit" class="btn btn-primary  shadow-sm">Simpan</button>
                            <a class="btn btn-light shadow-sm" href="{{route('transaksi.index')}}">Batal</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection