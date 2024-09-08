@extends('frontend.layout.master2')
@section('content')
@php $setting=setting(); @endphp
        <!-- ========== PAGE TITLE ========== -->
        <div class="page_title gradient_overlay" style="background: url({{asset('')}}frontend/images/page_title_bg.jpg);">
            <div class="container">
                <div class="inner">
                    <h1>{{translate('ABOUT')}} {{translate($setting->site_title)}}</h1>
                    <ol class="breadcrumb">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li>ABOUT {{translate($setting->site_title)}}</li>
                    </ol>
                </div>
            </div>
        </div>

        <!-- ========== MAIN SECTION ========== -->
        <main id="about_us_page">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1 class="mb30">{{translate($setting->about_title)}}</h1>
                        <p>{{translate($setting->about_details)}}</p>
                    </div>
                    <div class="col-md-5">
                        <div class="about_img" style="margin-top:15px">
                            <img src="{{$setting->about_image1}}" class="img1 img-responsive" alt="Image">
                            <img src="{{$setting->about_image1}}" class="img2 img-responsive" alt="Image">
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <div class="countup_box">
                                    <div class="inner">
                                        <div class="countup number" data-count="{{count($rooms)}}"></div>
                                        <div class="text">{{translate('Rooms')}}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <div class="countup_box">
                                    <div class="inner">
                                        <div class="countup number" data-count="{{$setting->staffs}}"></div>
                                        <div class="text">{{translate('staffs')}}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <div class="countup_box">
                                    <div class="inner">
                                        <div class="countup number" data-count="1"></div>
                                        <div class="text">{{translate('restaurant')}}</div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="countup_box">
                                    <div class="inner">
                                        <div class="countup number" data-count="3"></div>
                                        <div class="text">pools</div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="row image-gallery">
                    @php $pics=expt($setting->about_image2); @endphp
                    @foreach($pics as  $pic)
                    <div class="col-md-3 col-sm-6 mt20 mb20 br2">
                        <a href="{{$pic}}" class="hover_effect h_lightbox h_blue">
                            <img src="{{$pic}}" class="img-responsive full_width br2" alt="Image">
                        </a>
                    </div>
                    @endforeach
                    <!-- <div class="col-md-3 col-sm-6 mt20 mb20 br2">
                        <a href="images/spa.jpg" class="hover_effect h_lightbox h_blue">
                            <img src="{{asset('')}}frontend/images/spa.jpg" class="img-responsive full_width br2" alt="Image">
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6 mt20 mb20 br2">
                        <a href="images/conference.jpg" class="hover_effect h_lightbox h_blue">
                            <img src="{{asset('')}}frontend/images/conference.jpg" class="img-responsive full_width br2" alt="Image">
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6 mt20 mb20 br2">
                        <a href="images/swimming.jpg" class="hover_effect h_lightbox h_blue">
                            <img src="{{asset('')}}frontend/images/swimming.jpg" class="img-responsive full_width br2" alt="Image">
                        </a>
                    </div> -->
                </div>
                <p>{{translate($setting->about_details2)}}</p>
            </div>

        </main>

        <!-- ========== FOOTER ========== -->
       @endsection