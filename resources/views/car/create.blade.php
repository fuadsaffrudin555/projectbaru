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

            <form action="car-store" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Gambar</label>
                            <input type="file" name="image" id="image" class="form-control border-dark-50">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="name" id="" class="form-control border-dark-50" required="" value="{{ old('name') }}">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Merk</label>
                            <select name="categories_id" id="" class="form-control select2">
                                @foreach ($categories as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Nomer Polisi</label>
                            <input type="text" name="nomer_lisensi" id="" class="form-control border-dark-50" required="" value="{{ old('nomer_lisensi') }}">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Tahun</label>
                            <input type="text" name="tahun" id="" class="form-control border-dark-50" required="" value="{{ old('tahun') }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Sewa Perhari</label>
                            <input type="text" name="harga" id="" class="form-control border-dark-50" required="" value="{{ old('harga') }}">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Denda Perhari</label>
                            <input type="text" name="denda" id="" class="form-control border-dark-50" required="" value="{{ old('denda') }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Warna</label>
                            <input type="text" name="warna" id="" class="form-control border-dark-50" required="" value="{{ old('warna') }}">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" class="form-control">
                                <option value="tersedia">Tersedia</option>
                                <option value="terpakai">Terpakai</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-gorup">
                            <button type="submit" class="btn btn-primary  shadow-sm">Simpan</button>
                            <a class="btn btn-light shadow-sm" href="{{route('car.index')}}">Batal</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection