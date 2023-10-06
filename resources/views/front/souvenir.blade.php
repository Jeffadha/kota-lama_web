@extends('layouts.menu')

@section('title', 'Souvenir')

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
                <h1 class="text-center">Souvenir</h1>
            </div>
            @foreach ($souvenirs as $souvenir)
                
            <div id="{{ $souvenir->title }}" style="margin: 20px 0 ; padding-bottom: 10px; border-bottom: solid 1px grey ;" class="row">
                <div class="col-12 col-md-6">
                    <img style="width: 100%;" src="/image/souvenir/{{ $souvenir->image }}" alt="">
                </div>
                <div class="col-12 col-md-6">
                    <h2>{{ $souvenir->title }}</h2>
                    <p>{!! $souvenir->description !!}</p>
                    </div>
                </div>
            @endforeach
            
            <div style="display: flex ; justify-content: center;" class="row">
                {{ $souvenirs->links('pagination::bootstrap-4') }}
            </div>

        </div>
        <!-- .site-content -->
@endsection