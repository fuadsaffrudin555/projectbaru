@extends('layouts')
@section('title', 'delete')
@section('content')
<div class="col-lg-12">
    <div class="card mb-4">
        <div class="card-header py-3"></div>
        <div class="card-body">
            <div class="modal-body rounded-0">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <h2">Are You Sure To Delete Customer {{$customer->name}} ?</h2>
                            <div class="mt-5">
                                <a href="/customer-destroy/{{$customer->slug}}" class="btn btn-danger">Sure</a>
                                <a href="/customer" class="btn btn-primary">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
