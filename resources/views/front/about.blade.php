@extends('layouts.menu')

@section('title', 'Tentang Kota Lama')

@section('content')
        <div id="content" class="site-content">

            <div class="wrap-content" role="main">
                <div class="container wrap-content-inner">
                    @foreach ($about as $abt)
                        
                    
                    <div class="row">
                        <div class="site-main page-content col-sm-12 " role="main">
                            <div class="vc_row wpb_row vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_single_image wpb_content_element vc_align_center">

                                                <figure class="wpb_wrapper vc_figure">
                                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img
                                                            class="vc_single_image-img "
                                                            src="/image/about/{{ $abt->image }}"
                                                            width="1206" height="220" alt="kota lama" title="kota lama">
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_row wpb_row vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                    <div style="text-align: justify;">
                                                        {!! $abt->description !!}
                                                    </div>
                                                    

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                        </div>
                    </div>
                    @if ($message = Session::get('message'))
                    
                    <script>
                    alert('terima kasih , pesan anda berhasil terkirim')
                    </script>
                    @endif
                    <form style="margin-bottom: 30px;" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="name">
                          </div>
                          <div class="mb-3">
                            <label for="pesan" class="form-label">Pesan</label>
                            <textarea class="form-control" name="description" id="pesan" rows="3"></textarea>
                          </div>
                          <div class="mt-3" style="margin-top: 30px; ">
                            <button type="submit" class="btn btn-warning" style="border-radius: 10px">
                                Kirim
                            </button>
                          </div>
                    </form>
                    @endforeach
                    @if (count($testimoni) > 0)
                    <div style="border:2px solid grey; border-radius: 30px; padding: 30px; margin-bottom:30px;">
                        <h2>Testimoni</h2>
                        <div style="height: 200px; overflow: auto">
                            @foreach ($testimoni as $testi)
                            <h4>{{ $testi->name }}</h4>
                            <p>{{ $testi->description }}</p>
                            <hr>
                            @endforeach
                            
                        </div>
                    </div>
                    @endif
                    {{-- form --}}
                    
                    
                    
                </div>
            </div>
        </div><!-- .site-content -->

@endsection
