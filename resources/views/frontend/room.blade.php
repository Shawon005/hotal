@extends('frontend.layout.master2')
@section('content')
        <!-- =========== PAGE TITLE ========== -->
        <div class="page_title gradient_overlay" style="background: url({{asset('')}}frontend/images/page_title_bg.jpg);">
            <div class="container">
                <div class="inner">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <h1>{{translate(table('room_categories','id',$room->category_id,'category_name'))}}</h1>
                            <ol class="breadcrumb">
                                <li><a href="{{route('home')}}">{{translate('Home')}}</a></li>
                                <li>Rooms</li>
                                <li>{{translate(table('room_categories','id',$room->category_id,'category_name'))}}</li>
                            </ol>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="price">
                                <div class="inner">
                                    €{{$room->price}} <span>{{translate('per night')}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @php $setting=setting(); @endphp
        <!-- =========== MAIN ========== -->
        <main id="room_page">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="slider">
                            <div id="slider-larg" class="owl-carousel image-gallery">
                                <!-- ITEM -->
                                <div class="item lightbox-image-icon">
                                    <a href="{{$room->image}}" class="hover_effect h_lightbox h_blue">
                                        <img class="img-responsive" src="{{$room->image}}" alt="Image"style="height:450px;">
                                    </a>
                                </div>
                                @php $pics= expt($room->gallery_image) @endphp
                                @foreach($pics as $pic)
                                <div class="item lightbox-image-icon">
                                    <a href="{{$pic}}" class="hover_effect h_lightbox h_blue">
                                        <img class="img-responsive" src="{{$pic}}" alt="Image"style="height:450px; ">
                                    </a>
                                </div>
                                @endforeach
                             
                                <!-- <div class="item lightbox-image-icon">
                                    <a href="images/rooms/single-room/single-room2.jpg" class="hover_effect h_lightbox h_blue">
                                        <img class="img-responsive" src="{{asset('')}}frontend/images/rooms/single-room/single-room2.jpg" alt="Image">
                                    </a>
                                </div>
                               
                                <div class="item lightbox-image-icon">
                                    <a href="images/rooms/single-room/single-room3.jpg" class="hover_effect h_lightbox h_blue">
                                        <img class="img-responsive" src="{{asset('')}}frontend/images/rooms/single-room/single-room3.jpg" alt="Image">
                                    </a>
                                </div>
                                
                                <div class="item lightbox-image-icon">
                                    <a href="images/rooms/single-room/single-room4.jpg" class="hover_effect h_lightbox h_blue">
                                        <img class="img-responsive" src="{{asset('')}}frontend/images/rooms/single-room/single-room4.jpg" alt="Image">
                                    </a>
                                </div>
                               
                                <div class="item lightbox-image-icon">
                                    <a href="images/rooms/single-room/single-room5.jpg" class="hover_effect h_lightbox h_blue">
                                        <img class="img-responsive" src="{{asset('')}}frontend/images/rooms/single-room/single-room5.jpg" alt="Image">
                                    </a>
                                </div>
                                
                                <div class="item lightbox-image-icon">
                                    <a href="images/rooms/single-room/single-room6.jpg" class="hover_effect h_lightbox h_blue">
                                        <img class="img-responsive" src="{{asset('')}}frontend/images/rooms/single-room/single-room6.jpg" alt="Image">
                                    </a>
                                </div>
                              
                                <div class="item lightbox-image-icon">
                                    <a href="images/rooms/single-room/single-room7.jpg" class="hover_effect h_lightbox h_blue">
                                        <img class="img-responsive" src="{{asset('')}}frontend/images/rooms/single-room/single-room7.jpg" alt="Image">
                                    </a>
                                </div>
                               
                                <div class="item  lightbox-image-icon">
                                    <a href="images/rooms/single-room/single-room8.jpg" class="hover_effect h_lightbox h_blue">
                                        <img class="img-responsive" src="{{asset('')}}frontend/images/rooms/single-room/single-room8.jpg" alt="Image">
                                    </a>
                                </div> -->
                            </div>
                            <div id="thumbs" class="owl-carousel">
                                <!-- ITEM -->
                                <div class="item"><img class="img-responsive" src="{{$room->image}}" alt="Image"style="height:150px; width:270px"></div>
                                @foreach($pics as $pic)
                                <div class="item"><img class="img-responsive" src="{{$pic}}" alt="Image" style="height:150px;"></div>
                                @endforeach
                                <!-- <div class="item"><img class="img-responsive" src="{{asset('')}}frontend/images/rooms/single-room/single-room-thumb2.jpg" alt="Image"></div>
                                
                                <div class="item"><img class="img-responsive" src="{{asset('')}}frontend/images/rooms/single-room/single-room-thumb3.jpg" alt="Image"></div>
                                
                                <div class="item"><img class="img-responsive" src="{{asset('')}}frontend/images/rooms/single-room/single-room-thumb4.jpg" alt="Image"></div>
                               
                                <div class="item"><img class="img-responsive" src="{{asset('')}}frontend/images/rooms/single-room/single-room-thumb5.jpg" alt="Image"></div>
                               
                                <div class="item"><img class="img-responsive" src="{{asset('')}}frontend/images/rooms/single-room/single-room-thumb6.jpg" alt="Image"></div>
                                
                                <div class="item"><img class="img-responsive" src="{{asset('')}}frontend/images/rooms/single-room/single-room-thumb7.jpg" alt="Image"></div>
                               
                                <div class="item"><img class="img-responsive" src="{{asset('')}}frontend/images/rooms/single-room/single-room-thumb8.jpg" alt="Image"></div> -->
                            </div>
                        </div>
                        <div class="main_title mt50">
                            <h2>{{translate('ABOUT')}} {{translate(table('room_categories','id',$room->category_id,'category_name'))}}</h2>
                        </div>
                        <p>{{$room->description}}</p>
                        
                        <div class="main_title t_style a_left s_title mt50">
                            <div class="c_inner">
                                <h2 class="c_title">{{translate('ROOM SERVICES')}}</h2>
                            </div>
                        </div>
                        <div class="room_facilitys_list">
                            <div class="all_facility_list">
                                <div class="col-sm-4 nopadding">
                                    <ul class="list-unstyled">
                                        
                                    @php $fac=expt($room->facility); @endphp
                                    @foreach($fac as $id=>$fact)
                                        @if($id<=3)
                                        <li>
                                            </i><img src="{{table('facilities','id',$fact,'image')}}" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="{{translate(table('facilities','id',$fact,'description'))}}" data-original-title="{{translate(table('facilities','id',$fact,'title'))}}" alt=""style="height:25px; width:37px">
                                            {{translate(table('facilities','id',$fact,'title'))}}
                                        </li>
                                        @endif
                                    @endforeach
                                    </ul>
                                </div>
                                <div class="col-sm-4 nopadding">
                                    <ul class="list-unstyled">
                                    @php $fac=expt($room->facility); @endphp
                                    @foreach($fac as $id=>$fact)
                                        @if($id>=4 && $id<=7)
                                        <li>
                                            </i><img src="{{table('facilities','id',$fact,'image')}}" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="{{translate(table('facilities','id',$fact,'description'))}}" data-original-title="{{translate(table('facilities','id',$fact,'title'))}}" alt=""style="height:25px; width:37px">
                                            {{translate(table('facilities','id',$fact,'title'))}}
                                        </li>
                                        @endif
                                    @endforeach
                                    </ul>
                                </div>
                                <div class="col-sm-4 nopadding_left">
                                    <ul class="list-unstyled">
                                    @php $fac=expt($room->facility); @endphp
                                    @foreach($fac as $id=>$fact)
                                        @if($id>=8 && $id<=11)
                                        <li>
                                            <img src="{{table('facilities','id',$fact,'image')}}" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="{{translate(table('facilities','id',$fact,'description'))}}" data-original-title="{{translate(table('facilities','id',$fact,'title'))}}" alt=""style="height:25px; width:37px">
                                            {{translate(table('facilities','id',$fact,'title'))}}
                                        </li>
                                        @endif
                                    @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="similar_rooms">
                            <div class="main_title t_style5 l_blue s_title a_left">
                                <div class="c_inner text-center">
                                    <h2 class="c_title ">{{translate('SIMILAR ROOMS')}}</h2>
                                </div>
                            </div>
                            <div class="row">
                            @foreach($room_c as $Croom)
                                <div class="col-md-4">
                                   
                                    <article>
                                        <figure>
                                            <a href="{{route('room',$room->id)}}" class="hover_effect h_blue h_link"><img src="{{$Croom->image}}" alt="Image" class="img-responsive" style="height:167px; width:100%"></a>
                                            <div class="price">€{{$Croom->price}}<span> night</span></div>
                                            <figcaption>
                                                <h4 class="text-center"><a href="{{route('room',$room->id)}}">{{translate(table('room_categories','id',$room->category_id,'category_name'))}}</a></h4>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                                @endforeach
                                <!-- <div class="col-md-4">
                                    <article>
                                        <figure>
                                            <a href="room.html" class="hover_effect h_blue h_link"><img src="{{asset('')}}frontend/images/rooms/double-room.jpg" alt="Image" class="img-responsive"></a>
                                            <div class="price">€129<span> night</span></div>
                                            <figcaption>
                                                <h4><a href="room.html">Single Room </a></h4>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                                <div class="col-md-4">
                                    <article>
                                        <figure>
                                            <a href="room.html" class="hover_effect h_blue h_link"><img src="{{asset('')}}frontend/images/rooms/deluxe-room.jpg" alt="Image" class="img-responsive"></a>
                                            <div class="price">€189<span> night</span></div>
                                            <figcaption>
                                                <h4><a href="room.html">Deluxe Room </a></h4>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="sidebar">
                            <aside class="widget">
                                <div class="vbf">
                                    <h2 class="form_title"><i class="fa fa-calendar"></i> {{translate('BOOK ONLINE')}}</h2>
                                    <form id="booking-form" class="inner">
                                        <div class="form-group">
                                            <input class="form-control" name="booking-name" placeholder="{{translate('Enter Your Name')}}" type="text">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="booking-email" placeholder="{{translate('Enter Your Email Address')}}" type="email">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="booking-phone" placeholder="{{translate('Enter Your Phone Number')}}" type="text">
                                        </div>
                                        <div class="form-group">
                                            <div class="form_select">
                                                <select name="booking-roomtype" class="form-control" title="{{translate('Select Room Type')}}" data-header="Room Type" disabled>
                                                    @foreach($roomd as $rooms)
                                                    @if($room->id==$rooms->id)
                                                    <option selected value="{{$rooms->id}}" data-subtext="<span class='label label-info'>€{{$room->price}} / night</span>">{{translate(table('room_categories','id',$rooms->category_id,'category_name'))}}</option>
                                                    @else
                                                    <option  value="{{$rooms->id}}" data-subtext="<span class='label label-info'>€{{$room->price}} / night</span>">{{translate(table('room_categories','id',$rooms->category_id,'category_name'))}}</option>
                                                    @endif
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12 nopadding">
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
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12 nopadding">
                                            <div class="form_select">
                                                <select name="booking-children" class="form-control" title="Children" data-header="Children">
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12 nopadding">
                                            <div class="input-group">
                                                <div class="form_date">
                                                    <input type="text" class="datepicker form-control md_noborder_right" name="booking-checkin" placeholder="Arrival Date" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12 nopadding">
                                            <div class="input-group">
                                                <div class="form_date">
                                                    <input type="text" class="datepicker form-control" name="booking-checkout" placeholder="Departure Date" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="button btn_lg btn_blue btn_full" type="submit">{{translate('BOOK A ROOM NOW')}}</button>
                                        <div class="a_center mt10">
                                            <a href="{{route('booking')}}" class="a_b_f">{{translate('Advanced Booking Form')}}</a>
                                        </div>
                                    </form>
                                </div>
                            </aside>
                            <aside class="widget">
                                <h4>{{translate('NEED HELP')}}?</h4>
                                <div class="help">
                                @php $setting=setting(); @endphp
                                    {{translate('If you have any question please don\'t hesitate to contact us')}}
                                    <div class="phone"><i class="fa  fa-phone"></i><a href="tel:{{$setting->phone}}"> {{$setting->phone}}</a></div>
                                    <div class="email"><i class="fa  fa-envelope-o "></i><a href="mailto:{{$setting->email}}">{{$setting->email}}</a></div>
                                </div>
                            </aside>
                            <aside class="widget">
                                <h4>{{translate('Latest Posts')}}</h4>
                                <div class="latest_posts">
                                    @foreach($blogs as $blog)
                                    <article class="latest_post">
                                        <figure>
                                            <a href="{{route('blog',$blog->id)}}" class="hover_effect h_link h_blue">
                                                <img src="{{$blog->blog_image}}" width="100px" alt="Image">
                                            </a>
                                        </figure>
                                        <div class="details">
                                            <h6><a href="{{route('blog',$blog->id)}}">{{translate($blog->blog_title)}}</a></h6>
                                            <span><i class="fa fa-calendar"></i>{{dateFormatconverter($blog->blog_cdt)}}</span>
                                        </div>
                                    </article>
                                    @endforeach
                                    <!-- <article class="latest_post">
                                        <figure>
                                            <a href="blog-post.html" class="hover_effect h_link h_blue">
                                                <img src="{{asset('')}}frontend/images/blog/thumb2.jpg" alt="Image">
                                            </a>
                                        </figure>
                                        <div class="details">
                                            <h6><a href="blog-post.html">Hotel Zante in pictures</a></h6>
                                            <span><i class="fa fa-calendar"></i>18/10/2017</span>
                                        </div>
                                    </article>
                                    <article class="latest_post">
                                        <figure>
                                            <a href="blog-post.html" class="hover_effect h_link h_blue">
                                                <img src="{{asset('')}}frontend/images/blog/thumb3.jpg" alt="Image">
                                            </a>
                                        </figure>
                                        <div class="details">
                                            <h6><a href="blog-post.html">Hotel Zante family party</a></h6>
                                            <span><i class="fa fa-calendar"></i>13/08/2017</span>
                                        </div>
                                    </article>
                                    <article class="latest_post">
                                        <figure>
                                            <a href="blog-post.html" class="hover_effect h_link h_blue">
                                                <img src="{{asset('')}}frontend/images/blog/thumb4.jpg" alt="Image">
                                            </a>
                                        </figure>
                                        <div class="details">
                                            <h6><a href="blog-post.html">Hotel Zante weddings</a></h6>
                                            <span><i class="fa fa-calendar"></i>13/08/2017</span>
                                        </div>
                                    </article>
                                    <article class="latest_post">
                                        <figure>
                                            <a href="blog-post.html" class="hover_effect h_link h_blue">
                                                <img src="{{asset('')}}frontend/images/blog/thumb5.jpg" alt="Image">
                                            </a>
                                        </figure>
                                        <div class="details">
                                            <h6><a href="blog-post.html">10 things you should know</a></h6>
                                            <span><i class="fa fa-calendar"></i>13/08/2017</span>
                                        </div>
                                    </article> -->
                                    <div id="notification">

                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </main>

      @endsection