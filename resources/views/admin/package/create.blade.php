@extends('layouts.admin')

@section('title', 'Tambah Data Paket')

@section('content')

<div class="container">
    <a href="/admin/packages" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('packages.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Nama Paket</label>
                    <input type="text" class="form-control" name="title" placeholder="Nama Paket">
                </div>
                @error('title')
                <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <input id="description" type="hidden" name="description">
                    <trix-editor input="description"></trix-editor>
                </div>
                @error('description')
                <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" class="form-control" name="image">
                </div>
                @error('image')
                <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-block">submit</button>
                </div>
            </form>
        </div>
    </div>

</div>

@endsection