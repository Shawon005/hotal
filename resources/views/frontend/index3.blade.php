

        <!-- ========== HEADER ========== -->
        
    @extends('frontend.layout.master')
    @section('content') 
        <!-- ========== REVOLUTION SLIDER ========== -->
        <section id="slider" class="full_slider">
            <div class="rev_slider_wrapper fullscreen-container">
                <div id="fullscreen_slider" class="rev_slider fullscreenbanner gradient_slider" style="display:none" data-version="5.4.1">
                    <ul>
                        @foreach($sliders as $slider)
                        <!-- SLIDE NR. 1 -->
                        <li data-transition="fade">
                            <!-- MAIN IMAGE -->
                            <img src="{{$slider->image}}"
                                 alt="Image"
                                 title="slider_bg1-1"
                                 data-bgposition="center center"
                                 data-bgfit="cover"
                                 data-bgrepeat="no-repeat"
                                 data-bgparallax="10"
                                 class="rev-slidebg"
                                 data-no-retina="">
                             <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-resizeme"
                                 data-x="center"
                                 data-hoffset=""
                                 data-y="middle"
                                 data-voffset="['-30','-30','-30','-30']"
                                 data-responsive_offset="on"
                                 data-fontsize="['60','50','40','30']"
                                 data-lineheight="['60','50','40','30']"
                                 data-whitespace="nowrap"
                                 data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                 style="z-index: 5; color: #fff; font-weight: 900;">{{$slider->title}}
                            </div>
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption tp-resizeme"
                                 data-x="center"
                                 data-hoffset=""
                                 data-y="middle"
                                 data-voffset="['45','45','45','45']"
                                 data-fontsize="['16', '16', '14', '12']"
                                 data-lineheight="['16', '16', '14', '12']"
                                 data-whitespace="nowrap"
                                 data-transform_idle="o:1;"
                                 data-transform_in="opacity:0;s:300;e:Power2.easeInOut;"
                                 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                 data-start="3000"
                                 data-splitin="chars"
                                 data-splitout="none"
                                 data-basealign="slide"
                                 data-responsive="off"
                                 data-elementdelay="0.05"
                                 style="z-index: 9; font-weight: 400; color: rgba(255, 255, 255, 0.8); font-family: Raleway;">{{$slider->sub_title}}
                            </div>
                        </li>
                        @endforeach
                        <!-- SLIDE NR. 2 -->
                        <!-- <li data-transition="fade"
                            data-slotamount="7"
                            data-easein="default"
                            data-easeout="default"
                            data-masterspeed="1000">
                            
                            <img src="{{asset('')}}frontend/images/slider/full-slider-2.jpg"
                                 alt="Image"
                                 title="slider_bg1-2"
                                 data-bgposition="center center"
                                 data-bgfit="cover"
                                 data-bgrepeat="no-repeat"
                                 data-bgparallax="10"
                                 class="rev-slidebg"
                                 data-no-retina="">

                            <div class="tp-caption tp-resizeme"
                                 data-x="center"
                                 data-hoffset=""
                                 data-y="middle"
                                 data-voffset="['-30','-30','-30','-30']"
                                 data-responsive_offset="on"
                                 data-fontsize="['60','50','40','30']"
                                 data-lineheight="['60','50','40','30']"
                                 data-whitespace="nowrap"
                                 data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                 style="z-index: 5; color: #fff; font-weight: 900;">LUXURY EXPERIENCE
                            </div>
                         
                            <div class="tp-caption tp-resizeme"
                                 data-x="center"
                                 data-hoffset=""
                                 data-y="middle"
                                 data-voffset="['45','45','45','45']"
                                 data-fontsize="['16', '16', '14', '12']"
                                 data-lineheight="['16', '16', '14', '12']"
                                 data-whitespace="nowrap"
                                 data-transform_idle="o:1;"
                                 data-transform_in="opacity:0;s:300;e:Power2.easeInOut;"
                                 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                 data-start="3000"
                                 data-splitin="chars"
                                 data-splitout="none"
                                 data-basealign="slide"
                                 data-responsive="off"
                                 data-elementdelay="0.05"
                                 style="z-index: 9; font-weight: 400; color: rgba(255, 255, 255, 0.8); font-family: Raleway;">Live Your Myth In Greece
                            </div>
                        </li> -->

                       
                        <!-- <li data-transition="fade"
                            data-slotamount="7"
                            data-easein="default"
                            data-easeout="default"
                            data-masterspeed="1000">
                           
                            <img src="{{asset('')}}frontend/images/slider/full-slider-3.jpg"
                                 alt="Image"
                                 title="slider_bg1-3"
                                 data-bgposition="center center"
                                 data-bgfit="cover"
                                 data-bgrepeat="no-repeat"
                                 data-bgparallax="10"
                                 class="rev-slidebg"
                                 data-no-retina="">
                            
                            <div class="tp-caption tp-resizeme"
                                 data-x="center"
                                 data-hoffset=""
                                 data-y="middle"
                                 data-voffset="['-30','-30','-30','-30']"
                                 data-responsive_offset="on"
                                 data-fontsize="['60','50','40','30']"
                                 data-lineheight="['60','50','40','30']"
                                 data-whitespace="nowrap"
                                 data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                 style="z-index: 5; color: #fff; font-weight: 900;">BOOK YOUR ROOM NOW
                            </div>
                          
                            <div class="tp-caption tp-resizeme"
                                   data-x="['center','center','center','center']"
                                 data-hoffset=""
                                 data-y="['middle','middle','middle','middle']"
                                 data-voffset="['45','45','45','45']"
                                 data-fontsize="['16', '16', '14', '12']"
                                 data-lineheight="['16', '16', '14', '12']"
                                 data-whitespace="nowrap"
                                 data-transform_idle="o:1;"
                                 data-transform_in="opacity:0;s:300;e:Power2.easeInOut;"
                                 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                 data-start="3000"
                                 data-splitin="chars"
                                 data-splitout="none"
                                 data-basealign="slide"
                                 data-responsive="off"
                                 data-elementdelay="0.05"
                                 style="z-index: 9; font-weight: 400; color: rgba(255, 255, 255, 0.8); font-family: Raleway;">Family Room from €89 per night
                            </div>
                        </li> -->

                    </ul>
                </div>
            </div>
              <!-- ========== BOOKING FORM ========== -->
              <div class="hbf_2">
                <div class="container">
                    <div class="inner">
                        <form id="booking-form">
                            <div class="col-md-2 md_pr5">
                                <div class="form-group">
                                    <input name="booking-email" type="text" id="email" value="" class="form-control" placeholder="Your Email Address">
                                </div>
                            </div>
                            <div class="col-md-2 md_p5">
                                <div class="form-group">
                                    <div class="form_select">
                                        <select name="booking-roomtype" class="form-control" title="Select Room Type" data-header="Room Type">
                                            <option value="Single">Single Room</option>
                                            <option value="Double">Double Room</option>
                                            <option value="Deluxe">Deluxe Room</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 arrival_date md_pl5 md_nopadding_right">
                                        <div class="form-group">
                                            <div class="form_date">
                                                <input type="text" class="datepicker form-control md_noborder_right" name="booking-checkin" placeholder="Arrival Date" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 departure_date md_pr5 md_nopadding_left">
                                        <div class="form-group">
                                            <div class="form_date departure">
                                                <input type="text" class="datepicker form-control" name="booking-checkout" placeholder="Departure Date" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 adults md_pl5 md_nopadding_right">
                                        <div class="form-group">
                                            <div class="form_select">
                                                <select name="booking-adults" class="form-control md_noborder_right" title="Adults" data-header="Adults">
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 children md_pr5 md_nopadding_left">
                                        <div class="form-group">
                                            <div class="form_select childrens_select">
                                                <select name="booking-children" class="form-control dropup" title="Adults" data-header="Adults">
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 md_pl5">
                                <button type="submit" class="button  btn_blue btn_full">BOOK A ROOM</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- ========== ROOMS ========== -->
        <section class="white_bg" id="rooms">
            <div class="container">
                <div class="main_title mt_wave mt_yellow a_center">
                    <h2>OUR FAVORITE ROOMS</h2>
                </div>
                    <p class="main_description a_center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
                <div class="row">
                    @foreach($rooms->slice(0,3) as $room)
                    <div class="col-md-4">
                        <article class="room">
                            <figure>
                                <div class="price">€{{$room->price}} <span>/ night</span></div>
                                <a class="hover_effect h_blue h_link" href="{{route('room',$room->id)}}">
                                    <img src="{{$room->image}}" class="img-responsive" alt="Image">
                                </a>
                                <figcaption>
                                    {{table('room_categories','id',$room->category_id,'category_name')}}<h4><a href="{{route('room',$room->id)}}"></a></h4>
                                    <span class="f_right"><a href="{{route('room',$room->id)}}" class="button btn_sm btn_blue">VIEW DETAILS</a></span>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    @endforeach
                    <!-- <div class="col-md-4">
                        <article class="room">
                            <figure>
                                <div class="price">€129 <span>/ night</span></div>
                                <a class="hover_effect h_blue h_link" href="room.html">
                                    <img src="{{asset('')}}frontend/images/rooms/double-room.jpg" class="img-responsive" alt="Image">
                                </a>
                                <figcaption>
                                    <h4><a href="room.html">Double Room</a></h4>
                                    <span class="f_right"><a href="room.html" class="button btn_sm btn_blue">VIEW DETAILS</a></span>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="col-md-4">
                        <article class="room">
                            <figure>
                                <div class="price"> € 189 <span>/ night</span></div>
                                <a class="hover_effect h_blue h_link" href="room.html">
                                    <img src="{{asset('')}}frontend/images/rooms/deluxe-room.jpg" class="img-responsive" alt="Image">
                                </a>
                                <figcaption>
                                    <h4><a href="room.html">Delux Room</a></h4>
                                    <span class="f_right"><a href="room.html" class="button btn_sm btn_blue">VIEW DETAILS</a></span>
                                </figcaption>
                            </figure>
                        </article>
                    </div> -->
                </div>
                <div class="mt40 a_center">
                    <a class="button btn_sm btn_yellow" href="{{route('room_list')}}">VIEW ROOMS LIST</a>
                </div>
            </div>
        </section>

        <!-- ========== FEATURES ========== -->
        <section class="lightgrey_bg" id="features">
            <div class="container">
                <div class="main_title mt_wave mt_yellow a_center">
                    <h2>OUR AWESOME SERVICES</h2>
                </div>
                <p class="main_description a_center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>

                <div class="row">
                    <div class="col-md-7">
                        <div data-slider-id="features" id="features_slider" class="owl-carousel">
                            @foreach($services as $service)
                            <div><img src="{{$service->image}}" class="img-responsive" alt="Image"></div>
                            <!-- <div><img src="{{asset('')}}frontend/images/spa.jpg" class="img-responsive" alt="Image"></div>
                            <div><img src="{{asset('')}}frontend/images/conference.jpg" class="img-responsive" alt="Image"></div>
                            <div><img src="{{asset('')}}frontend/images/swimming.jpg" class="img-responsive" alt="Image"></div> -->
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="owl-thumbs" data-slider-id="features">
                        @foreach($services as $service)
                            <div class="owl-thumb-item">
                                <span class="media-left"><i class="flaticon-food"></i></span>
                                <div class="media-body">
                                    <h5>{{$service->title}}</h5>
                                    <p>{{$service->description}}</p>
                                </div>
                            </div>
                            @endforeach
                            <!-- <div class="owl-thumb-item">
                                <span class="media-left"><i class="flaticon-person"></i></span>
                                <div class="media-body">
                                    <h5>Spa - Beauty &amp; Health</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
                                </div>
                            </div>
                            <div class="owl-thumb-item">
                                <span class="media-left"><i class="flaticon-business"></i></span>
                                <div class="media-body">
                                    <h5>Conference Room</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
                                </div>
                            </div>
                            <div class="owl-thumb-item">
                                <span class="media-left"><i class="flaticon-beach"></i></span>
                                <div class="media-body">
                                    <h5>Swimming Pool</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ========== ABOUT ========== -->
        <section id="about_style_2" class="blue_bg">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-6 col-sm-12">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="about_img_1">
                                    <div class="about_img_inner">
                                        <img src="{{$setting->about_image1}}" class="img-responsive" alt="Image">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 about_img_2_col">
                                <div class="about_img_2">
                                    <div class="about_img_inner">
                                        @php $pic=expt($setting->about_image2); @endphp
                                        <img src="{{$pic[0]}}" class="img-responsive" alt="Image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <div class="main_title mt_wave mt_white a_left">
                            <h2>{{$setting->about_title}}</h2>
                        </div>
                        <p class="main_description md_white">{{$setting->about_details}}</p>
                    </div>

                </div>
            </div>

        </section>

        <!-- ========== BLOG ========== -->
        <section id="blog">
            <div class="container">
                <div class="main_title mt_wave mt_yellow a_center">
                    <h2>LATEST NEWS & EVENTS</h2>
                </div>
                <p class="main_description a_center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>

                <div class="row">
                    <!-- ITEM -->
                    @foreach($blogs as $blog)
                    <div class="col-md-6 col-sm-6">
                        <article class="blog_item">
                            <div class="row">
                                <div class="col-md-5">
                                    <figure>
                                        <a href="{{route('blog',$blog->id)}}" class="hover_effect h_blue h_link"><img src="{{$blog->blog_image}}" class="img-responsive" alt="Image"></a>
                                    </figure>
                                </div>
                                <div class="col-md-7">
                                    <div class="main">
                                        <h3><a href="{{route('blog',$blog->id)}}">{{$blog->blog_title}}</a></h3>
                                        <p>{{$blog->blog_description}}</p>
                                        <div class="info">
                                            <i class="fa fa-user" aria-hidden="true"></i><a href="#">JOHN DOE</a>
                                            <i class="fa fa-calendar" aria-hidden="true"></i><a href="#">{{dateFormatconverter($blog->blog_cdt)}}</a>
                                            <!-- <i class="fa fa-comment-o" aria-hidden="true"></i><a href="#">4 COMMENTS</a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    @endforeach
                    <!-- ITEM -->
                    <!-- <div class="col-md-6 col-sm-6">
                        <article class="blog_item">
                            <div class="row">
                                <div class="col-md-5">
                                    <figure>
                                        <a href="blog-post.html" class="hover_effect h_blue h_link"><img src="{{asset('')}}frontend/images/blog/latest_news2.jpg" class="img-responsive" alt="Image"></a>
                                    </figure>
                                </div>
                                <div class="col-md-7">
                                    <div class="main">
                                        <h3><a href="blog-post.html">Hotel Zante in pictures</a></h3>
                                        <p>Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore...</p>
                                        <div class="info">
                                            <i class="fa fa-user" aria-hidden="true"></i><a href="#">JOHN DOE</a>
                                            <i class="fa fa-calendar" aria-hidden="true"></i><a href="#">AUGUST 16, 2017</a>
                                            <i class="fa fa-comment-o" aria-hidden="true"></i><a href="#">6 COMMENTS</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div> -->
                    <!-- ITEM -->
                    <!-- <div class="col-md-6 col-sm-6">
                        <article class="blog_item">
                            <div class="row">
                                <div class="col-md-5">
                                    <figure>
                                        <a href="blog-post.html" class="hover_effect h_blue h_link"><img src="{{asset('')}}frontend/images/blog/latest_news3.jpg" class="img-responsive" alt="Image"></a>
                                    </figure>
                                </div>
                                <div class="col-md-7">
                                    <div class="main">
                                        <h3><a href="blog-post.html">Hotel Zante family party</a></h3>
                                        <p>Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore...</p>
                                        <div class="info">
                                            <i class="fa fa-user" aria-hidden="true"></i><a href="#">JOHN DOE</a>
                                            <i class="fa fa-calendar" aria-hidden="true"></i><a href="#">SEPTEMBER 25, 2017</a>
                                            <i class="fa fa-comment-o" aria-hidden="true"></i><a href="#">3 COMMENTS</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div> -->
                    <!-- ITEM -->
                    <!-- <div class="col-md-6 col-sm-6">
                        <article class="blog_item">
                            <div class="row">
                                <div class="col-md-5">
                                    <figure>
                                        <a href="blog-post.html" class="hover_effect h_blue h_link"><img src="{{asset('')}}frontend/images/blog/latest_news4.jpg" class="img-responsive" alt="Image"></a>
                                    </figure>
                                </div>
                                <div class="col-md-7">
                                    <div class="main">
                                        <h3><a href="blog-post.html">Hotel Zante weddings</a></h3>
                                        <p>Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore...</p>
                                        <div class="info">
                                            <i class="fa fa-user" aria-hidden="true"></i><a href="#">JOHN DOE</a>
                                            <i class="fa fa-calendar" aria-hidden="true"></i><a href="#">OCTOBER 20, 2015</a>
                                            <i class="fa fa-comment-o" aria-hidden="true"></i><a href="#">0 COMMENTS</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div> -->
                    </div>
                </div>
        </section>

        <!-- ========== CONTACT ========== -->
        <section class="white_bg" id="contact">
            <div class="container">
                <div class="main_title mt_wave mt_yellow a_center">
                    <h2>LOCATION - CONTACT US</h2>
                </div>
                <p class="main_description a_center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
                <div class="row">
                    <div class="col-md-6">
                        <div id="map-canvas"></div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="contact-items">
                                <div class="col-md-4 col-sm-4">
                                    <div class="contact-item">
                                        <i class="glyphicon glyphicon-map-marker"></i>
                                        <h6>Navagio Zakynthos</h6>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="contact-item">
                                        <i class="glyphicon glyphicon-phone-alt"></i>
                                        <h6>1-888-123-4567</h6>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="contact-item">
                                        <i class="fa fa-envelope"></i>
                                        <h6>contact@site.com</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form id="contact-form" name="contact-form">
                            <div id="contact-result"></div>
                            <div class="form-group">
                                <input class="form-control" name="name" placeholder="Your Name" type="text">
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="email" type="email" placeholder="Your Email Address">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" placeholder="Your Message"></textarea>
                            </div>
                            <button class="button btn_lg btn_blue btn_full upper" type="submit"><i class="fa fa-location-arrow"></i>Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
@endsection
        <!-- ========== FOOTER ========== -->
        

 

    <!-- ========== BACK TO TOP ========== -->
  