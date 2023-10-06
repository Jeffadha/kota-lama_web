@extends('layouts.admin')

@section('title', 'Edit Data About')

@section('content')

<div class="container">
    <a href="/admin/abouts" class="btn btn-primary mb-3" style="">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('abouts.update', $about->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <h3>Jangan massukan angka 0 diawal </h3>
                    <label for="">Wa</label>
                    <input type="text" class="form-control" name="wa" placeholder="wa" value="{{ $about->wa }}" >
                @error('wa')
                <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <input id="description" type="hidden" name="description" value="{!! $about->description !!}">
                    <trix-editor input="description"></trix-editor>
                </div>
                @error('description')
                <small style="color:red">{{ $message }}</small>
                @enderror
                <img src="/image/about/{{ $about->image }}" alt="" class="img-fluid">
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