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
        <main id="rooms_grid">
           <div class="container">
              <div class="row">
                 <!-- ITEM -->
                 @foreach($rooms as $room)
                 <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="room_grid_item">
                       <figure>
                          <a href="{{route('room',$room->id)}}" class="hover_effect h_link h_blue"><img src="{{$room->image}}" class="img-responsive" alt="Image"style="height:190px; width:270px"></a>
                       </figure>
                       <div class="room_info">
                          <h3><a  class="room_name"href="{{route('room',$room->id)}}">{{table('room_categories','id',$room->category_id,'category_name')}}</a></h3>
                          <span>€{{$room->price}} / night</span>
                          <p>{{$room->description}}</p>
                          <div class="room_services">
                           @php $fac=expt($room->facility); @endphp
                           @foreach($fac as $id=>$fact)
                           @if($id<=4)
                              <img src="{{table('facilities','id',$fact,'image')}}" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="{{table('facilities','id',$fact,'description')}}" data-original-title="{{table('facilities','id',$fact,'title')}}" alt=""style="height:25px; width:37px">
                           @endif
                           @endforeach
                          </div>
                          <a href="{{route('room',$room->id)}}" class="button  btn_blue btn_full upper mt20">Book Now</a>
                       </div>
                    </div>
                 </div>
                 @endforeach
                
                 <!-- <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="room_grid_item">
                       <figure>
                          <a href="room.html" class="hover_effect h_link h_blue"><img src="{{asset('')}}frontend/images/rooms/double1.jpg" class="img-responsive" alt="Image"></a>
                       </figure>
                       <div class="room_info">
                          <h3><a href="room.html">Double Room</a></h3>
                          <span>€129 / night</span>
                          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore...</p>
                          <div class="room_services">
                            <i class="fa fa-coffee" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Breakfast Included" data-original-title="Breakfast"></i> 
                            <i class="fa fa-cutlery" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Restaurant" data-original-title="Zante Restaurant"></i>
                            <i class="fa fa-television" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Plasma TV with cable Channel" data-original-title="Plasma TV"></i>
                          </div>
                          <a href="room.html" class="button  btn_blue btn_full upper mt20">Book Now</a>
                       </div>
                    </div>
                 </div>
                 
                 <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="room_grid_item">
                       <figure>
                          <a href="room.html" class="hover_effect h_link h_blue"><img src="{{asset('')}}frontend/images/rooms/delux.jpg" class="img-responsive" alt="Image"></a>
                       </figure>
                       <div class="room_info">
                          <h3><a href="room.html">Delux Room</a></h3>
                          <span>€189 / night</span>
                          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore...</p>
                          <div class="room_services">
                                <i class="fa fa-coffee" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Breakfast Included" data-original-title="Breakfast"></i>
                                <i class="fa fa-wifi" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Free WiFi" data-original-title="WiFi"></i>
                                <i class="fa fa-cutlery" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Restaurant" data-original-title="Zante Restaurant"></i>
                                <i class="fa fa-television" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Plasma TV with cable Channel" data-original-title="Plasma TV"></i>
                          </div>
                          <a href="room.html" class="button  btn_blue btn_full upper mt20">Book Now</a>
                       </div>
                    </div>
                 </div>
                
                 <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="room_grid_item">
                       <figure>
                          <a href="room.html" class="hover_effect h_link h_blue"><img src="{{asset('')}}frontend/images/rooms/king.jpg" class="img-responsive" alt="Image"></a>
                       </figure>
                       <div class="room_info">
                          <h3><a href="room.html">King Room</a></h3>
                          <span>€219 / night</span>
                          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore...</p>
                          <div class="room_services">
                            <i class="fa fa-coffee" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Breakfast Included" data-original-title="Breakfast"></i>
                            <i class="fa fa-wifi" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Free WiFi" data-original-title="WiFi"></i>
                            <i class="fa fa-cutlery" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Restaurant" data-original-title="Zante Restaurant"></i>
                            <i class="fa fa-television" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Plasma TV with cable Channel" data-original-title="Plasma TV"></i>
                          </div>
                          <a href="room.html" class="button  btn_blue btn_full upper mt20">Book Now</a>
                       </div>
                    </div>
                 </div>
                 
                 <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="room_grid_item">
                       <figure>
                          <a href="room.html" class="hover_effect h_link h_blue"><img src="{{asset('')}}frontend/images/rooms/honeymoon.jpg" class="img-responsive" alt="Image"></a>
                       </figure>
                       <div class="room_info">
                          <h3><a href="room.html">Honeymoon</a></h3>
                          <span>€289 / night</span>
                          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore...</p>
                          <div class="room_services">
                            <i class="fa fa-coffee" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Breakfast Included" data-original-title="Breakfast"></i> 
                            <i class="fa fa-cutlery" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Restaurant" data-original-title="Zante Restaurant"></i>
                            <i class="fa fa-television" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Plasma TV with cable Channel" data-original-title="Plasma TV"></i>
                          </div>
                          <a href="room.html" class="button  btn_blue btn_full upper mt20">Book Now</a>
                       </div>
                    </div>
                 </div>
               
                 <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="room_grid_item">
                       <figure>
                          <a href="room.html" class="hover_effect h_link h_blue"><img src="{{asset('')}}frontend/images/rooms/deluxe-room.jpg" class="img-responsive" alt="Image"></a>
                       </figure>
                       <div class="room_info">
                          <h3><a href="room.html">Family Room</a></h3>
                          <span>€149 / night</span>
                          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore...</p>
                          <div class="room_services">
                            <i class="fa fa-coffee" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Breakfast Included" data-original-title="Breakfast"></i> 
                            <i class="fa fa-cutlery" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Restaurant" data-original-title="Zante Restaurant"></i>
                            <i class="fa fa-television" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Plasma TV with cable Channel" data-original-title="Plasma TV"></i>
                          </div>
                          <a href="room.html" class="button  btn_blue btn_full upper mt20">Book Now</a>
                       </div>
                    </div>
                 </div>
                
                 <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="room_grid_item">
                       <figure>
                          <a href="room.html" class="hover_effect h_link h_blue"><img src="{{asset('')}}frontend/images/rooms/single.jpg" class="img-responsive" alt="Image"></a>
                       </figure>
                       <div class="room_info">
                          <h3><a href="room.html">Single Room</a></h3>
                          <span>€109 / night</span>
                          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore...</p>
                          <div class="room_services">
                            <i class="fa fa-coffee" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Breakfast Included" data-original-title="Breakfast"></i> 
                            <i class="fa fa-cutlery" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Restaurant" data-original-title="Zante Restaurant"></i>
                            <i class="fa fa-television" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Plasma TV with cable Channel" data-original-title="Plasma TV"></i>
                          </div>
                          <a href="room.html" class="button  btn_blue btn_full upper mt20">Book Now</a>
                       </div>
                    </div>
                 </div>
                
                 <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="room_grid_item">
                       <figure>
                          <a href="room.html" class="hover_effect h_link h_blue"><img src="{{asset('')}}frontend/images/rooms/single.jpg" class="img-responsive" alt="Image"></a>
                       </figure>
                       <div class="room_info">
                          <h3><a href="room.html">Single Room</a></h3>
                          <span>€119 / night</span>
                          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore...</p>
                          <div class="room_services">
                            <i class="fa fa-coffee" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Breakfast Included" data-original-title="Breakfast"></i> 
                            <i class="fa fa-cutlery" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Restaurant" data-original-title="Zante Restaurant"></i>
                            <i class="fa fa-television" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Plasma TV with cable Channel" data-original-title="Plasma TV"></i>
                          </div>
                          <a href="room.html" class="button  btn_blue btn_full upper mt20">Book Now</a>
                       </div>
                    </div>
                 </div> -->
                 <!-- <div class="col-md-12">
                     <div class="a_center mt50">
                        <button class="btn_load_more">Load More Rooms</button>
                     </div>
                 </div>  -->
                  
              </div>
           </div>
        </main>

        <!-- ========== FOOTER ========== -->
   @endsection