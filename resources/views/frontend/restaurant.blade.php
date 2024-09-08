@extends('frontend.layout.master2')
@section('content')

        <!-- ========== HEADER ========== -->
     
        <!-- ========== REVOLUTION SLIDER ========== -->
        <div id="hero_restaurant" class="rev_slider gradient_slider" data-version="5.4.1">
            <ul>
                <!-- SLIDE  -->
                <li data-transition="fade">
                    <!-- MAIN IMAGE -->
                    @php $pics=expt($restaurant->gallery_image); @endphp
                    
                    <img src="{{$pics[0]}}" 
                         alt="Image" 
                         data-bgposition="center center" 
                         data-bgfit="cover" 
                         data-bgrepeat="no-repeat" 
                         data-bgparallax="5" 
                         class="rev-slidebg" 
                         data-no-retina>
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption" 
                         data-x="['center','center','center','center']" 
                         data-hoffset="" 
                         data-y="['250','250','350','350']" 
                         data-voffset=""
                         data-responsive_offset="on" 
                         data-fontsize="['40','32','28','22']" 
                         data-lineheight="['40','32','28','22']"
                         data-whitespace="nowrap" 
                         data-frames='[{"delay":0,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                         style="color: #fff; font-weight: 700; font-family: 'Raleway', sans-serif;">{{translate($restaurant->sub_title)}}
                    </div>
                </li>
            </ul>
        </div>
        @php $setting=setting(); @endphp
        <!-- ========== MAIN ========== -->
        <main id="restaurant_page">
           <div class="container">
              <div class="row">
                 <div class="col-md-7">
                    <div class="main_title">
                        <h2> {{translate('OUR RESTAURANT')}}</h2>
                    </div>
                    <p>{{translate($restaurant->details)}}</p>
                 </div>
                 <div class="col-md-5">
                    <div class="row" style="margin-top:15px">
                     @foreach($pics as $pic)
                       <div class="col-md-6 col-sm-6 restaurant_img md_pr5">
                          <img src="{{$pic}}" class="img-responsive full_width" alt="Image">
                       </div>
                     @endforeach
                    </div>
                 </div>
              </div>
              <p>{{$restaurant->details1}}</p>
              
              <div class="main_title mt50 mb30">
                 <h2>
                 {{translate('OUR MENU')}}</h2>
              </div>
              <div class="row">
                 <!-- ITEM -->
                 @foreach($manu as $manus)
                 <div class="col-md-6 col-sm-6">
                    <div class="menu_item">
                       <div class="row">
                          <div class="col-lg-4 col-md-6">
                             <figure>
                                <!-- <a href="#"> -->
                                <img src="{{$manus->image}}" class="img-responsive full_width" alt="Image">
                                <!-- </a> -->
                             </figure>
                          </div>
                          <div class="col-lg-8 col-md-6">
                             <div class="info">
                                <div class="title">
                                   <a href="#" class="name">{{translate($manus->name)}}</a>
                                   <span class="price">
                                   <span class="amount">€{{$manus->price}}</span>
                                   </span>
                                </div>
                                <p>{{translate($manus->details)}}</p>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
                 @endforeach
                 
                 <!-- <div class="col-md-6 col-sm-6">
                    <div class="menu_item">
                       <div class="row">
                          <div class="col-lg-4 col-md-6">
                             <figure>
                                <a href="#">
                                <img src="{{asset('')}}frontend/images/restaurant/restaurant2.jpg" class="img-responsive full_width" alt="Image">
                                </a>
                             </figure>
                          </div>
                          <div class="col-lg-8 col-md-6">
                             <div class="info">
                                <div class="title">
                                   <a href="#" class="name">Croquettes</a>
                                   <span class="price">
                                   <span class="amount">€9.99</span>
                                   </span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, elit, sed diam nonummy nibh euismod tincidunt ut laoreet... </p>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
                 
                 <div class="col-md-6 col-sm-6">
                    <div class="menu_item">
                       <div class="row">
                          <div class="col-lg-4 col-md-6">
                             <figure>
                                <a href="#">
                                <img src="{{asset('')}}frontend/images/restaurant/restaurant3.jpg" class="img-responsive full_width" alt="Image">
                                </a>
                             </figure>
                          </div>
                          <div class="col-lg-8 col-md-6">
                             <div class="info">
                                <div class="title">
                                   <a href="#" class="name">Pizza</a>
                                   <span class="price">
                                   <span class="amount">€11.99</span>
                                   </span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, elit, sed diam nonummy nibh euismod tincidunt ut laoreet... </p>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
                
                 <div class="col-md-6 col-sm-6">
                    <div class="menu_item">
                       <div class="row">
                          <div class="col-lg-4 col-md-6">
                             <figure>
                                <a href="#">
                                <img src="{{asset('')}}frontend/images/restaurant/restaurant4.jpg" class="img-responsive full_width" alt="Image">
                                </a>
                             </figure>
                          </div>
                          <div class="col-lg-8 col-md-6">
                             <div class="info">
                                <div class="title">
                                   <a href="#" class="name">Spaghetti</a>
                                   <span class="price">
                                   <span class="amount">€6.99</span>
                                   </span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, elit, sed diam nonummy nibh euismod tincidunt ut laoreet... </p>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
                 
                 <div class="col-md-6 col-sm-6">
                    <div class="menu_item">
                       <div class="row">
                          <div class="col-lg-4 col-md-6">
                             <figure>
                                <a href="#">
                                <img src="{{asset('')}}frontend/images/restaurant/restaurant5.jpg" class="img-responsive full_width" alt="Image">
                                </a>
                             </figure>
                          </div>
                          <div class="col-lg-8 col-md-6">
                             <div class="info">
                                <div class="title">
                                   <a href="#" class="name">Chicken</a>
                                   <span class="price">
                                   <span class="amount">€18.99</span>
                                   </span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, elit, sed diam nonummy nibh euismod tincidunt ut laoreet... </p>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
                
                 <div class="col-md-6 col-sm-6">
                    <div class="menu_item">
                       <div class="row">
                          <div class="col-lg-4 col-md-6">
                             <figure>
                                <a href="#">
                                <img src="{{asset('')}}frontend/images/restaurant/restaurant6.jpg" class="img-responsive full_width" alt="Image">
                                </a>
                             </figure>
                          </div>
                          <div class="col-lg-8 col-md-6">
                             <div class="info">
                                <div class="title">
                                   <a href="#" class="name">Meat</a>
                                   <span class="price">
                                   <span class="amount">€16.99</span>
                                   </span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, elit, sed diam nonummy nibh euismod tincidunt ut laoreet... </p>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div> -->
              </div>
              <p>{{translate($setting->resturrent_page)}}</p>
           </div>
        </main>

        <!-- ========== FOOTER ========== -->
  @endsection