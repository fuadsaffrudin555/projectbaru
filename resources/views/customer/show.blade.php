@extends('layouts')
@section('title','Detail Customer')
@section('content')

<div class="col-lg-12">
    {{-- <div class="card border-left-primary"> --}}
    <div class="card mb-4">
        <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">@yield('title')</h6>
        </div>
        <div class="card-body">
            <div class="modal-body rounded-0">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>NIK</label>
                            <input type="text" name="NIK" class="form-control" readonly="" value="{{ $customer->NIK }}">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="name" class="form-control" readonly="" value="{{ $customer->name }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>No telp</label>
                            <input type="text" name="nomer_hp" class="form-control" readonly="" value="{{ $customer->nomer_hp }}">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" readonly="" value="{{ $customer->email }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <input type="text" name="sex" class="form-control" readonly="" value="{{ $customer->sex }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" name="alamat" class="form-control" readonly="" value="{{ $customer->alamat }}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-gorup">
                            <a class="btn btn-light shadow-sm" href="{{route('customer.index')}}">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection