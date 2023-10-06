@extends('layouts.menu')

@section('title', 'Paket Wisata')

@section('content')<!-- .site-header -->
<style>
.pagination>.active>a, .pagination>.active>a:hover, .pagination>.active>a:focus, .pagination>.active>span, .pagination>.active>span:hover, .pagination>.active>span:focus {
    z-index: 2;
    color: #fff;
    background-color: orange;
    border-color: orange;
    cursor: default;
}
.pagination>li>a, .pagination>li>span,.pagination>li>a:hover, .pagination>li>span:hover{
    color: orange;
}
</style>
        <div id="content" class="site-content">
            <div class="row">
                <h1 class="text-center">Paket Wisata</h1>
            </div>
            @foreach ($packages as $package)
                
            <div id="{{ $package->title }}" style="margin: 20px 0 ; padding-bottom: 10px; border-bottom: solid 1px grey ;" class="row">
                <div  class="col-12 col-md-6">
                    <img style="width: 100%;" src="/image/package/{{$package->image}}" alt="">
                </div>
                <div class="col-12 col-md-6">
                    <h2>{{ $package->title }}</h2>
                    <p>{!! $package->description !!}</p>
                    @foreach ($about as $abt)
                    <a target="_blank" href="Https://wa.me/62{{ $abt->wa }}?text=Halo%20kak%20Bisa%20Pesan%20Paket%20{{ $package->title }}">
                        <button style="background-color: green; border-radius: 30px;" type="button" class="btn btn-success"><i style="margin-right: 3px;" class="bi bi-whatsapp"></i>Pesan</button>
                    </a>
                    @endforeach
                </div>
            </div>
            @endforeach
            
            <div style="display: flex ; justify-content: center;" class="row">
                    {{ $packages->links('pagination::bootstrap-4') }}
            </div>

        </div>
        <!-- .site-content -->
@endsection