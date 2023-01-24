@extends('layouts')
@section('title','Tambah Data')
@section('content')
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

            <form action="customer-store" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                          <label>NIK</label>
                          <input type="text" name="NIK" id="NIK" class="form-control border-dark-50" required="" value="{{ old('NIK') }}">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                          <label>Nama</label>
                          <input type="text" name="name" id="Nama" class="form-control border-dark-50" required="" value="{{ old('name') }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                          <label>Alamat</label>
                          <input type="text" name="alamat" id="Alamat" class="form-control border-dark-50" required="" value="{{ old('alamat') }}">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                          <label>Jenis Kelamin</label>
                          <select name="sex" class="form-control">
                              <option value="laki-laki">Laki-Laki</option>
                              <option value="perempuan">Perempuan</option>
                          </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                          <label>No Telp</label>
                          <input type="text" name="nomer_hp" id="No_Telp" class="form-control border-dark-50" required="" value="{{ old('nomer_hp') }}">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                          <label>Email</label>
                          <input type="email" name="email" id="Email" class="form-control border-dark-50" required="" value="{{ old('email') }}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-gorup">
                            <button type="submit" class="btn btn-primary shadow-sm">Simpan</button>
                            <a class="btn btn-light shadow-sm" href="{{route('customer.index')}}">Batal</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection