@extends('layouts.backend.master-backend')

@section('title')
Edit Slider
@endsection

@section('content')

<div class="container">
    <div class="fade-in">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4>Edit Slider</h4>
                        <a class="d-flex align-items-center btn btn-primary" href="{{ route('sliders.index') }}">Kembali</a>
                    </div>
                    <div class="card-body">
                        @include('backend.sliders._form', [ 'url' =>route('sliders.update',$slider->id), 'method' => 'PATCH'])
                    </div>
                    <div class="card-footer d-flex justify-content-end">
                        <button type="button" class="btn btn-outline-danger btn-sm mx-2" @click="onResetForm">Reset</button>
                        <button type="submit" class="btn btn-primary btn-sm" @click="onFileUpload">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
