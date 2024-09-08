@extends('frontend.layout.master2')
@section('content')

        <!-- ========== HEADER ========== -->
   
        
        <!-- =========== PAGE TITLE ========== -->
        <div class="page_title gradient_overlay" style="background: url({{asset('')}}frontend/images/page_title_bg.jpg);">
            <div class="container">
                <div class="inner">
                    <h1>{{translate('Photo Gallery')}} {{count($types)}} {{translate('Columns')}}</h1>
                    <ol class="breadcrumb">
                        <li><a href="{{asset('')}}frontend/index.html">Home</a></li>
                        <li>Photo Gallery 4 Columns</li>
                    </ol>
                </div>
            </div>
        </div>
        
        <!-- =========== MAIN ========== -->
        <main id="gallery">
            <div class="container">
                <div class="grid_filters">
                    <a href="#" data-filter="*" class="button btn_sm btn_blue active">{{translate('ALL')}}</a>
                    @foreach($types as $type)
                    <a href="#" data-filter=".g_{{$type->id}}" class="button btn_sm btn_blue">{{translate($type->title)}}</a>
                    @endforeach
                    <!-- <a href="#" data-filter=".g_island" class="button btn_sm btn_blue">ISLAND</a>
                    <a href="#" data-filter=".g_swimming_pool" class="button btn_sm btn_blue">SWIMMING POOL</a>
                    <a href="#" data-filter=".g_spa" class="button btn_sm btn_blue">SPA</a> -->
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="grid gallery_items image-gallery">
                        <!-- ITEM -->
                        @foreach($gallerys as $gallery)
                        <figure class="g_item col-md-3 col-sm-6 g_{{$gallery->type}}">
                            <a href="{{$gallery->image}}" class="hover_effect h_lightbox h_blue">
                                <img src="{{$gallery->image}}" style="height:150px;"class="img-responsive" alt="Image">
                            </a>
                            <figcaption>
                                <h4>{{translate($gallery->title)}}</h4>
                                <span>{{translate($gallery->details)}}</span>
                            </figcaption>
                        </figure>
                        @endforeach
                       
                    </div>
                </div>
            </div>
        </main>

        <!-- ========== FOOTER ========== -->
      @endsection