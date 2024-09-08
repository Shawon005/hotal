@extends('frontend.layout.master2')
@section('content')
        
        <!-- =========== PAGE TITLE ========== -->
        <div class="page_title gradient_overlay" style="background: url({{asset('')}}frontend/images/page_title_bg.jpg);">
            <div class="container">
                <div class="inner">
                    <h1>All Rooms </h1>
                    <ol class="breadcrumb">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li>All Rooms</li>
                    </ol>
                </div>
            </div>
        </div> 
        
        <!-- =========== MAIN ========== -->
        <main id="rooms_list">
            <div class="container">
                @foreach($rooms as $room)
                <article class="room_list">
                    <div class="row row-flex">
                        <div class="col-lg-4 col-md-5 col-sm-12">
                           <figure>
                              <a href="{{route('room',$room->id)}}" class="hover_effect h_link h_blue">
                              <img src="{{$room->image}}" class="img-responsive" alt="Image">
                              </a>
                           </figure>
                        </div>
                        <div class="col-lg-8 col-md-7 col-sm-12">
                           <div class="room_details row-flex">
                              <div class="col-md-9 col-sm-9 col-xs-12 room_desc">
                                 <h3><a href="{{route('room',$room->id)}}"> {{translate(table('room_categories','id',$room->category_id,'category_name'))}} </a></h3>
                                 <p>{{translate($room->description)}}</p>
                                 <div class="room_services">
                                    @php $fac=expt($room->facility); @endphp
                                    @foreach($fac as $id=>$fact)
                                      <img src="{{table('facilities','id',$fact,'image')}}" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="{{translate(table('facilities','id',$fact,'description'))}}" data-original-title="{{translate(table('facilities','id',$fact,'title'))}}" alt=""style="height:25px; width:37px">
                                    @endforeach
                                 </div>
                              </div>
                              <div class="col-md-3 col-sm-3 col-xs-12 room_price">
                                 <div class="room_price_inner">
                                    <span class="room_price_number"> €{{$room->price}}  </span>
                                    <small class="upper"> {{translate('per night')}} </small>
                                    <a href="{{route('room',$room->id)}}" class="button upper">{{translate('More Details')}}</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                    </div>
                </article>
                @endforeach
            </div>
        </main>

   @endsection