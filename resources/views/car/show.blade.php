@extends('layouts')
@section('title','Detail Car')
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
                                <label for="image">Image</label>
                                <div>
                                    <img src="{{ asset('img/'.$car->images) }}" width="150px">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="name" class="form-control" readonly="" value="{{ $car->name }}">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label>No Polisi</label>
                                <input type="text" name="nomer_lisensi" class="form-control" readonly="" value="{{ $car->nomer_lisensi }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Warna</label>
                                <input type="text" name="warna" class="form-control" readonly="" value="{{ $car->warna }}">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label>Tahun</label>
                                <input type="text" name="tahun" class="form-control" readonly="" value="{{ $car->tahun }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Merk</label>
                                <input type="text" name="categories_id" class="form-control" readonly="" value="{{ $car->categories->name }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Sewa per hari</label>
                                <input type="text" name="harga" class="form-control" readonly="" value="{{ $car->harga }}">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label>Denda per hari</label>
                                <input type="text" name="denda" class="form-control" readonly="" value="{{ $car->denda }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-gorup">
                                <a class="btn btn-light shadow-sm" href="{{route('car.index')}}">Kembali</a>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>

@endsection