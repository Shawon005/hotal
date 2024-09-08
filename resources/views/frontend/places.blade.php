@extends('frontend.layout.master2')
@section('content')

        <!-- ========== HEADER ========== -->
     

        <!-- =========== PAGE TITLE ========== -->
        <div class="page_title gradient_overlay" style="background: url({{asset('')}}frontend/images/page_title_bg.jpg);">
            <div class="container">
                <div class="inner">
                    <h1>{{translate('Discover Place')}}</h1>
                    <ol class="breadcrumb">
                        <li><a href="{{route('home')}}">{{translate('Home')}}</a></li>
                        <li>{{translate('Discover Place')}}</li>
                    </ol>
                </div>
            </div>
        </div>

        <!-- =========== MAIN ========== -->
        <main id="places_page">
            <div class="container">
                <div class="row">
                    <div class="grid">
                        <!-- ITEM -->
                        @foreach($places as $place)
                        <div class="col-md-3 col-sm-3 col-xs-12 g_item">
                            <div class="places_item">
                                <a href="{{route('places',$place->id)}}">
                                    @php $pic=expt($place->image); @endphp
                                    <img src="{{$pic[0]}}" alt="Image" style="height:156px;">
                                    <div class="place_name">
                                        <h2>{{translate($place->name)}}</h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </main>

      @endsection