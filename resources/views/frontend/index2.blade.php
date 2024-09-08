
@extends('frontend.layout.master')
    @section('content')  
            <!-- ========== REVOLUTION SLIDER ========== -->
            <div id="classic_slider" class="rev_slider" style="display:none" data-version="5.4.1">
                <ul>
                @foreach($sliders as $id=>$slider)
                    <!-- SLIDE NR. 1 -->
                    <li data-transition="crossfade">
                        <!-- MAIN IMAGE -->
                        <img src="{{$slider->image}}" 
                             alt="Image" 
                             title="slider_bg2"
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
                             data-y="320" 
                             data-voffset=""
                             data-responsive_offset="on" 
                             data-fontsize="['60','50','40','30']" 
                             data-lineheight="['60','50','40','30']"
                             data-whitespace="nowrap"
                             data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                             style="z-index: 5; color: #fff; font-weight: 900;">{{translate($slider->title)}} </div>
                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption tp-resizeme" 
                             data-x="center" 
                             data-hoffset="" 
                             data-y="410" 
                             data-voffset=""
                             data-responsive_offset="on" 
                             data-fontsize="16" 
                             data-lineheight="16"
                             data-whitespace="nowrap"
                             data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                             style="z-index: 6; color: #fff;">{{translate($slider->sub_title)}}</div>
                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme"
                             data-x="center" 
                             data-hoffset="-170" 
                             data-y="414"
                             data-voffset=""
                             data-responsive_offset="on" 
                             data-width="['100']" 
                             data-height="['4']"
                             data-transform_idle="o:1;"
                             data-transform_in="x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;s:1500;e:Power3.easeOut;" 
                             data-transform_out="opacity:0;s:500;" 
                             data-mask_in="x:[-100%];y:0;s:inherit;e:inherit;" 
                             data-start="2000"
                             style="z-index: 7;background: url(images/icons/wave_white.svg);"> 
                        </div>
                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme" 
                             data-x="center"
                             data-hoffset="-170" 
                             data-y="418" 
                             data-voffset=""
                             data-responsive_offset="on" 
                             data-width="['100']" 
                             data-height="['4']" 
                             data-transform_idle="o:1;"
                             data-transform_in="x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;s:1500;e:Power3.easeOut;" 
                             data-transform_out="opacity:0;s:500;"
                             data-mask_in="x:[-100%];y:0;s:inherit;e:inherit;"
                             data-start="2100"
                             style="z-index: 7;background: url(images/icons/wave_white.svg);"> </div>
                        <!-- LAYER NR. 5 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme"
                             data-x="center" 
                             data-hoffset="170"
                             data-y="414"
                             data-voffset=""
                             data-responsive_offset="on" 
                             data-width="['100']" 
                             data-height="['4']" 
                             data-transform_idle="o:1;" 
                             data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;s:1500;e:Power3.easeOut;" 
                             data-transform_out="opacity:0;s:500;"
                             data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
                             data-start="2000" 
                             style="z-index: 7;background: url(images/icons/wave_white.svg);"> 
                        </div>
                        <!-- LAYER NR. 6 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme"  
                             data-x="center"
                             data-hoffset="170" 
                             data-y="418" 
                             data-voffset=""
                             data-responsive_offset="on" 
                             data-width="['100']" 
                             data-height="['4']" 
                             data-transform_idle="o:1;"
                             data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;s:1500;e:Power3.easeOut;" 
                             data-transform_out="opacity:0;s:500;" 
                             data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
                             data-start="2100"
                             style="z-index: 7;background: url(images/icons/wave_white.svg);">
                        </div>
                       <!-- LAYER NR. 7 -->
                        @if($id==0)
                       <a class="tp-caption button btn_blue" 
                          href="{{route('booking')}}"
                          data-x="center"
                          data-hoffset="-100"
                          data-y="480" 
                          data-voffset=""
                          data-responsive_offset="on" 
                          data-fontsize="14"
                          data-whitespace="nowrap"
                          data-frames='[{"delay":2400,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                          style="z-index: 11;"><i class="fa fa-calendar"></i>{{translate('BOOK A ROOM')}}
                        </a>
                       <!-- LAYER NR. 8 -->
                       <a class="tp-caption button btn_yellow " 
                          href="{{route('contact')}}"
                          data-x="center" 
                          data-hoffset="108"
                          data-y="480" 
                          data-voffset=""
                          data-responsive_offset="on" 
                          data-fontsize="14"
                          data-whitespace="nowrap"
                          data-frames='[{"delay":2400,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                          style="z-index: 11;"><i class="fa fa-envelope-o" aria-hidden="true"></i>{{translate('CONTACT US')}}
                        </a>
                        <!-- LAYER NR. 9 -->
                        <div class="tp-caption tp_m_title tp-resizeme" 
                             data-x="center" 
                             data-hoffset="" 
                             data-y="200"
                             data-voffset=""
                             data-responsive_offset="on" 
                             data-fontsize="['18','18','16','16']"
                             data-lineheight="['18','18','16','16']"
                             data-whitespace="nowrap"
                             data-frames='[{"delay":1800,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <!-- LAYER NR. 10 -->
                        <div class="tp-caption tp_m_title tp-resizeme"
                             data-x="center"
                             data-hoffset="" 
                             data-y="240" 
                             data-voffset=""
                             data-responsive_offset="on" 
                             data-fontsize="['25','25','18','18']" 
                             data-lineheight="['25','25','18','18']"
                             data-whitespace="nowrap"
                             data-frames='[{"delay":1800,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                             {{translate('Star Luxury Hotel')}}
                        </div>
                        @endif
                    </li>
                    @endforeach
                </ul>
            </div>
        
             <!-- ========== HORIZONTAL BOOKING FORM ========== -->
            <div class="hbf">
                <div class="container">
                    <div class="inner">
                        <form id="booking-form">

                            <div class="col-md-3 md_pr5">
                                <div class="form-group">
                                    <label>{{translate('Your Email')}}
                                        <a href="#" title="Your Email" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Please Type Your Email"> <i class="label_icon_info fa fa-info-circle"></i></a>
                                    </label>
                                    <input class="form-control" name="booking-email" type="email" placeholder="{{translate('Your Email Address')}}">
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <div class="form-group">
                                    <label>{{translate('Mobile')}}
                                        <a href="#" title="Your Email" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Please Type Your Email"> <i class="label_icon_info fa fa-info-circle"></i></a>
                                    </label>
                                    <input class="form-control" name="booking-phone" type="tel" placeholder="{{translate('Your Phone Number')}}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>{{translate('Name')}}
                                        <a href="#" title="Name" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""> <i class="label_icon_info fa fa-info-circle"></i></a>
                                    </label>
                                    <input class="form-control" name="booking-name" type="text" placeholder="{{translate('Your Name')}}">
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <div class="form-group">
                                     <label>{{translate('Room Type')}}
                                        <a href="#" title="Room Type" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="{{translate('Please Select Room Type: Single Room, Double Room or Deluxe Room')}}"> <i class="label_icon_info fa fa-info-circle"></i></a>
                                    </label>
                                    <div class="form_select">
                                        <select name="booking-roomtype" class="form-control" title="Select Room Type" data-header="Room Type">
                                            @foreach($room_C as $room)
                                                <option value="{{$room->id}}" data-subtext="<span class='label label-info' style='font-size: 95%;'>kr {{$room->price}} / night</span>">{{translate(table('room_categories','id',$room->category_id,'category_name'))}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-2">
                                
                                        <div class="form-group">
                                             <label>{{translate('Chech In')}}
                                                <a href="#" title="Arrival" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="{{translate('Check In from 11:00 am')}}"> <i class="label_icon_info fa fa-info-circle"></i></a>
                                            </label>

                                            <div class="form_date">
                                                <input type="text" class="datepicker form-control " name="booking-checkin" placeholder="Arrival Date" readonly>
                                            </div>
                                            
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group">
                                             <label>{{translate('Check Out')}}
                                                <a href="#" title="Departure" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Check Out from 12:00 am"> <i class="label_icon_info fa fa-info-circle"></i></a>
                                            </label>
                                            <div class="form_date departure">
                                                <input type="text" class="datepicker form-control" name="booking-checkout" placeholder="{{translate('Departure Date')}}" readonly>
                                            </div>
                                        </div>
                                    </div>

                                
                           

                            <div class="col-md-2">
                                
                                        <div class="form-group">
                                            <label>{{('Adults')}}
                                                <a href="#" title="Adults" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="{{translate('+18 years')}}"> <i class="label_icon_info fa fa-info-circle"></i></a>
                                            </label>
                                            <div class="form_select">
                                                <select name="booking-adults" class="form-control " title="Adults" data-header="Adults">
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 ">
                                        <div class="form-group">
                                             <label>{{translate('Children')}}
                                                <a href="#" title="Children" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="0-18 years"> <i class="label_icon_info fa fa-info-circle"></i></a>
                                            </label>
                                            <div class="form_select children_select">
                                                <select name="booking-children" class="form-control" title="Children" data-header="Children">
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </div>
                                       
                                </div>
                            </div>
                            <div class="col-md-4 md_pl5">
                                <button type="submit" class="button  btn_blue btn_full">{{translate('BOOK A ROOM')}}</button>
                                <div class="advanced_form_link"> <a href="{{route('booking')}}">{{translate('Advanced Booking Form')}} </a> </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- ========== ABOUT & ROOMS ========== -->
            <section id="about_rooms">
                <div class="container">
                    <div class="row">
                    @php $pic=expt($setting->about_image2); @endphp
                 
                        <div class="col-md-4">
                            <div id="about">
                                <div class="main_title mt_wave a_left">
                                    <h2>{{translate($setting->about_title)}}</h2>
                                </div>
                                <p class="main_description a_left">{{ Str::limit(strip_tags(translate($setting->about_details)),340) }}.</p>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div id="rooms">
                                <div class="main_title mt_wave a_left">
                                    <h2>{{translate('OUR FAVORITE ROOMS')}}</h2>
                                </div> 
                                    <p class="main_description">{{translate($setting->home_room)}}</p> 
                                <div class="row">
                                    @foreach($rooms->slice(0,3) as $room)
                                    <div class="col-md-4">
                                        <article class="room">
                                            <figure>
                                                <div class="price">€{{$room->price}} <span>/ {{translate('night')}}</span></div>
                                                <a class="hover_effect h_blue h_link" href="{{route('room',$room->id)}}">
                                                    <img src="{{$room->image}}" class="img-responsive" alt="Image"style="height:168px;">
                                                </a>
                                                <figcaption>
                                                    <div class="text-center">
                                                        <h5><a href="{{route('room',$room->id)}}">{{translate(table('room_categories','id',$room->category_id,'category_name'))}}</a></h5>
                                                    </div>
                                                    <div class="text-center">
                                                        <span class=""><a href="{{route('room',$room->id)}}" class="button btn_xs btn_blue">{{translate('VIEW DETAILS')}}</a></span>
                                                    </div>
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
                                                    <img src="images/rooms/double-room.jpg" class="img-responsive" alt="Image">
                                                </a>
                                                <figcaption>
                                                    <h5><a href="room.html">Double Room</a></h5>
                                                    <span class="f_right"><a href="room.html" class="button btn_xs btn_blue">VIEW DETAILS</a></span>
                                                </figcaption>
                                            </figure>
                                        </article>
                                    </div>
                                    <div class="col-md-4">
                                        <article class="room">
                                            <figure>
                                                <div class="price"> € 189 <span>/ night</span></div>
                                                <a class="hover_effect h_blue h_link" href="room.html">
                                                    <img src="images/rooms/deluxe-room.jpg" class="img-responsive" alt="Image">
                                                </a>
                                                <figcaption>
                                                    <h5><a href="room.html">Delux Room</a></h5>
                                                    <span class="f_right"><a href="room.html" class="button btn_xs btn_blue">VIEW DETAILS</a></span>
                                                </figcaption>
                                            </figure>
                                        </article>
                                    </div> -->
                                </div>
                            </div>
                        </div> 
                        
                    </div>
                </div>
            </section> 
        
            <!-- ========== FEATURES ==========  -->
            <section class="lightgrey_bg" id="features">
                <div class="container">
                    <div class="main_title mt_wave mt_yellow a_center">
                        <h2>{{translate('OUR AWESOME SERVICES')}}</h2>
                    </div>
                    <p class="main_description a_center">{{translate($setting->home_service)}}</p>

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
                                    <span class="media-left"><img src="{{$service->logo}}" class="img-responsive" alt="Image"></span>
                                    <div class="media-body">
                                        <h5>{{translate($service->title)}}</h5>
                                        <p>{{translate($service->description)}}</p>
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

            <!-- ========== GALLERY ==========   -->
            <section id="gallery" class="blue_bg">
                <div class="container">
                    <div class="main_title mt_wave mt_white a_center">
                        <h2>{{translate($setting->site_title)}} PHOTOS</h2>
                    </div> 
                        <p class="main_description md_white a_center">{{translate($setting->home_gallery)}}.</p> 
                </div>
                <div id="gallery_slider" class="owl-carousel image-gallery">
                    <!-- ITEM -->
                    @foreach($gallerys as $gallery)
                    <div class="item">
                        <a class="hover_effect h_yellow h_lightbox" href="{{$gallery->image}}">
                            <img src="{{$gallery->image}}" style="height:150px;" height="150px" alt="Image">
                        </a>
                        <div class="gallery_item_info">
                            <h4>{{translate($gallery->title)}}</h4>
                            <p>{{translate($gallery->details)}}</p>
                        </div>
                    </div>
                    @endforeach
                
                    <!-- END ITEM -->
                </div>

                <div class="container">
                    <div class="mt40 a_center">
                        <a class="button btn_sm btn_dark upper" href="{{route('gallery')}}">{{translate('View Full Gallery')}}</a>
                    </div>
                </div>

            </section>

            <!-- ========== TESTIMONIALS ==========   -->
            <section id="testimonials_style_2" class="grey_bg">
                <div class="container">
                    <div class="main_title mt_wave a_center">
                        <h2>{{translate('WHAT PEOPLE SAY ABOUT US')}}</h2>
                    </div> 
                        <p class="main_description a_center">{{translate($setting->home_review)}}</p> 
                    <div class="row">
                        <!-- ITEM -->
                        <div class="col-md-4">
                            <div class="review_item">
                                <div class="review_content">
                                    <h3>Excellent! </h3>
                                    <div class="review_rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                                </div>
                                <div class="review_author">
                                    <img src="{{asset('')}}frontend/images/demo_iamge.png" alt="Image" style="width: 35px">
                                    <div class="author_info">
                                        <h5>John Doe</h5>
                                        <span class="place">Athens, Greece</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ITEM -->
                        <div class="col-md-4">
                            <div class="review_item">
                                <div class="review_content">
                                    <h3>Excellent! </h3>
                                    <div class="review_rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                                </div>
                                <div class="review_author">
                                    <img src="{{asset('')}}frontend/images/demo_iamge.png" alt="Image" style="width: 35px">
                                    <div class="author_info">
                                        <h5>Ina Aldrich</h5>
                                        <span class="place">Athens, Greece</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ITEM -->
                        <div class="col-md-4">
                            <div class="review_item">
                                <div class="review_content">
                                    <h3>Excellent! </h3>
                                    <div class="review_rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                                </div>
                                <div class="review_author">
                                    <img src="{{asset('')}}frontend/images/demo_iamge.png" alt="Image" style="width: 35px">
                                    <div class="author_info">
                                        <h5>William W.</h5>
                                        <span class="place">Athens, Greece</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ========== CONTACT ==========  -->
            <section class="white_bg" id="contact">
                <div class="container">
                    <div class="main_title mt_wave a_center">
                        <h2>{{translate('LOCATION - CONTACT US')}}</h2>
                    </div> 
                        <p class="main_description a_center">{{translate($setting->home_location)}}</p> 
                    <div class="row">
                        <div class="col-md-6">
                            <div id="map-canvas1">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2038.2480204470191!2d18.00532207692309!3d59.278711515071706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x465f770ef4a4df39%3A0x4b1b85c5345b3736!2zSMO0dGVsIGQnw4RsdnNqw7Y!5e0!3m2!1sen!2sbd!4v1690186159601!5m2!1sen!2sbd" width="570" height="380" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="contact-items">
                                    <div class="col-md-4 col-sm-4">
                                        <div class="contact-item">
                                            <i class="glyphicon glyphicon-map-marker"></i>
                                            <h6>{{translate($setting->address)}}</h6>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="contact-item">
                                            <i class="glyphicon glyphicon-phone-alt"></i>
                                            <h6>{{$setting->phone}}</h6>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="contact-item" style="font-size:13px">
                                            <i class="fa fa-envelope"></i>
                                            <h6>{{$setting->email}}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form id="contact-form" name="contact-form">
                                <div id="contact-result"></div>
                                <div class="form-group">
                                    <input class="form-control" name="name" placeholder="{{translate('Your Name')}}" type="text">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="email" placeholder="{{translate('Your Email Address')}}" type="email">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" placeholder="{{translate('Your Message')}}"></textarea>
                                </div>
                                <button class="button btn_lg btn_blue btn_full upper" type="submit"><i class="fa fa-location-arrow"></i>{{translate('Send Message')}}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- ========== SUBSCRIBE ========== -->
            <section id="subscribe" class="gradient_overlay" style="background: url('{{$setting->sub_image}}');">
                <div class="inner">
                    <div class="container">
                        <div class="main_title mt_wave mt_white a_center">
                            <h2>{{translate('SUBSCRIBE TO OUR NEWSLETTER')}}</h2>
                        </div>
                        <p class="main_description md_white a_center">{{translate('Subscribe to our newsletter to receive exclusive offers and the latest news')}}</p>
                        <form id="subscribe-form" name="subscribe">
                            <div class="form-group">
                                <input type="email" name="subscribe-email" class="form-control" placeholder="Enter your email">
                                <button class="button btn_lg btn_yellow" type="submit"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                            </div>
                        </form> 
                    </div>
                </div>
            </section>

            <!-- ========== FOOTER ========== -->
@endsection