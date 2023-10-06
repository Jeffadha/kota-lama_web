@extends('layouts.admin')

@section('title', 'Edit Data Souvenir')

@section('content')

<div class="container">
    <a href="/admin/souvenir" class="btn btn-primary mb-3" style="">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('souvenir.update', $souvenir->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="">Nama Souvenir</label>
                    <input type="text" class="form-control" name="title" placeholder="Nama Souvenir" value="{{ $souvenir->title }}" >
                @error('title')
                <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <input id="description" type="hidden" name="description" value="{!! $souvenir->description !!}">
                    <trix-editor input="description"></trix-editor>
                </div>
                @error('description')
                <small style="color:red">{{ $message }}</small>
                @enderror
                <img src="/image/souvenir/{{ $souvenir->image }}" alt="" class="img-fluid">
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