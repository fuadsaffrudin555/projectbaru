@extends('layouts')
@section('title','Tambah Data')
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

            <div class="row justify-content-center">
                <div class="mt-2 col-4">
                @if (session('message'))
                    <div class="alert {{session('alert-class')}}">
                        {{ session('message') }}
                    </div>
                @endif
                </div>
            </div>
            
            <form action="transaksi-store" method="post">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>No Invoice</label>
                            <input type="text" name="invoice_no" id="" class="form-control border-dark-50" value="{{ old('invoice_no') }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Customer</label>
                            <select name="customer_id" id="" class="form-control inputbox">
                                <option value="">Select Customer</option>
                                @foreach ($customers as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Mobil</label>
                            <select name="car_id" id="" class="form-control inputbox">
                                <option value="">Select Car</option>
                                @foreach ($cars as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Tanggal Sewa</label>
                            <input type="date" name="rent_date" id="" class="form-control border-dark-50" required="" value="{{ old('rent_date') }}">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Tanggal Kembali</label>
                            <input type="date" name="return_date" id="" class="form-control border-dark-50" required="" value="{{ old('return_date') }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="text" name="harga" id="" class="form-control border-dark-50" required="" value="{{ old('harga') }}">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" class="form-control">
                                <option value="dipinjam">Dipinjam</option>
                                <option value="dikembalikan">Dikembalikan</option>
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
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.inputbox').select2();
    });
</script>
@endsection