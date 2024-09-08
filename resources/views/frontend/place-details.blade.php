@extends('frontend.layout.master2')
@section('content')
        <!-- ========== HEADER ========== -->
   
        <!-- =========== PAGE TITLE ========== -->
        <div class="page_title gradient_overlay" style="background: url({{asset('')}}frontend/images/page_title_bg.jpg);">
            <div class="container">
                <div class="inner">
                    <h1>{{translate($place->name)}}</h1>
                    <ol class="breadcrumb">
                        <li><a href="{{route('home')}}">{{translate('Home')}}</a></li>
                        <li>{{translate('Places')}}</li>
                        <li>{{translate($place->name)}}</li>
                    </ol>
                </div>
            </div>
        </div>
        @php $setting=setting(); @endphp
        <!-- =========== MAIN ========== -->
        <main>
            <div class="container">
            @php $pics=expt($place->image); @endphp
                <img src="{{$pics[0]}}" class="img-responsive br2 mb20" alt="Image"style="height:550px;">
                <p>{{translate($place->details)}} </p>
                <div class="row image-gallery">
                    <!-- ITEM -->
                    @foreach($pics as $pic)
                    <div class="col-md-3 col-sm-6 mt20 mb20">
                        <a href="{{$pic}}">
                            <img src="{{$pic}}" class="img-responsive full_width br2"  alt="Image"style="height:190px; width:270px">
                        </a>
                    </div>
                    @endforeach
                  
                </div>
                <p>{{translate($setting->palce_page)}}</p>
            </div>
        </main>

        <!-- ========== FOOTER ========== -->
    @endsection