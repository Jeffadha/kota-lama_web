@extends('layouts.admin')

@section('title', 'Edit Data Gallery')

@section('content')

<div class="container">
    <a href="/admin/gallery" class="btn btn-primary mb-3" style="">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('gallery.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control" name="title" placeholder="Judul" value="{{ $gallery->title }}" >
                @error('title')
                <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <input id="description" type="hidden" name="description" value="{!! $gallery->description !!}">
                    <trix-editor input="description"></trix-editor>
                </div>
                @error('description')
                <small style="color:red">{{ $message }}</small>
                @enderror
                <img src="/image/gallery/{{ $gallery->image }}" alt="" class="img-fluid">
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