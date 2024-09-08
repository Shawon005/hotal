@extends('backend.layout.master')
  @section('content')
  <div class="page-content page-content-white">
            
            <div class="container"> 
                
               
                    <div class="">
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>                    
                            <!-- <li><a href="#">Components</a></li>
                            <li><a href="#">Layouts</a></li>
                            <li class="active">White layout</li> -->
                        </ol>
                    </div>                
                    
                    <div class="">
                        <div class="block block-fill-white">
                            <div class="header">
                                <h2>Welcome Mr.  User (User Name)</h2>
                                <div class="pull-right">
                                    <span>
                                        <h2>22-june-2023</h2> 
                                    </span>
                                </div>
                            </div> 
                        </div>    
                    </div>
              


                <div class="row" style="margin-bottom: 30px; margin-top: 30px;">
                    <div class="col-md-4">
                        <div class="box">
                            <div class="box-1st">{{count(table_s('bookings','booking_checkin',date('d/m/Y')))}}</div>
                            <div class="box-2nd">Todays Booking</div>
                            <div class="box-3rd"><a href="{{route('admin.booking_room')}}">View Details</a></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <div class="box-1st">{{count(table_s('rooms','is_available',1))}}</div>
                            <div class="box-2nd">Available Rooms</div>
                            <div class="box-3rd"><a href="{{route('admin.a_room')}}">View Details</a></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <div class="box-1st">{{count($room)}}</div>
                            <div class="box-2nd">Total Rooms</div>
                            <div class="box-3rd"><a href="{{route('admin.all_room')}}">View Details</a></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <div class="box-1st">{{count(table_s('bookings','booking_checkout',date('d/m/Y')))}}</div>
                            <div class="box-2nd">Todays Cancelation</div>
                            <div class="box-3rd"><a href="">View Details</a></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <div class="box-1st">{{count(table_f('bookings'))}}</div>
                            <div class="box-2nd">Total Booking</div>
                            <div class="box-3rd"><a href="{{route('booking.index')}}">View Details</a></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <div class="box-1st">3</div>
                            <div class="box-2nd">Total Cancelation</div>
                            <div class="box-3rd"><a href="">View Details</a></div>
                        </div>
                    </div>
                </div>
                
                <div class="row" style="margin-bottom: 30px;">
                    <div class="col-md-12">
                        <h2 class="room-available-room-level">Available Room</h2>
                    </div>
                </div>
                @foreach($categorys as $category)
                <div class="row" style="margin-bottom: 30px;">
                    @php $rooms=table_ss($category->id); @endphp
                    <div class="col-md-12">
                        <h2 class="room-category-level">{{$category->category_name}}</h2>
                    </div>
                   @foreach($rooms as $room)
                   @if($room->is_available)
                    <div class="col-md-2">
                        <div class="btn btn-{{($room->is_available)?'success':'danger'}} btn-block room">{{$room->room_id}}</div>
                    </div>
                    @endif
                    @endforeach
                </div>
                @endforeach
                <!-- <div class="row" style="margin-bottom: 30px;">
                    <div class="col-md-12">
                        <h2 class="room-category-level">Suite</h2>
                    </div>
                    <div class="col-md-2">
                        <div class="btn btn-success btn-block room">101</div>
                    </div>
                    <div class="col-md-2">
                        <div class="btn btn-success btn-block room">101</div>
                    </div>
                    <div class="col-md-2">
                        <div class="btn btn-success btn-block room">101</div>
                    </div>
                    <div class="col-md-2">
                        <div class="btn btn-danger btn-block room">101</div>
                    </div>
                    <div class="col-md-2">
                        <div class="btn btn-success btn-block room">101</div>
                    </div>
                    <div class="col-md-2">
                        <div class="btn btn-success btn-block room">101</div>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 30px;">
                    <div class="col-md-12">
                        <h2 class="room-category-level">Double</h2>
                    </div>
                    <div class="col-md-2">
                        <div class="btn btn-success btn-block room">101</div>
                    </div>
                    <div class="col-md-2">
                        <div class="btn btn-success btn-block room">101</div>
                    </div>
                    <div class="col-md-2">
                        <div class="btn btn-success btn-block room">101</div>
                    </div>
                    <div class="col-md-2">
                        <div class="btn btn-danger btn-block room">101</div>
                    </div>
                    <div class="col-md-2">
                        <div class="btn btn-success btn-block room">101</div>
                    </div>
                    <div class="col-md-2">
                        <div class="btn btn-success btn-block room">101</div>
                    </div>
                    <div class="col-md-2">
                        <div class="btn btn-success btn-block room">101</div>
                    </div>
                    <div class="col-md-2">
                        <div class="btn btn-success btn-block room">101</div>
                    </div>
                    <div class="col-md-2">
                        <div class="btn btn-success btn-block room">101</div>
                    </div>
                    <div class="col-md-2">
                        <div class="btn btn-danger btn-block room">101</div>
                    </div>
                    <div class="col-md-2">
                        <div class="btn btn-success btn-block room">101</div>
                    </div>
                    <div class="col-md-2">
                        <div class="btn btn-success btn-block room">101</div>
                    </div>
                    <div class="col-md-2">
                        <div class="btn btn-success btn-block room">101</div>
                    </div>
                    <div class="col-md-2">
                        <div class="btn btn-success btn-block room">101</div>
                    </div>
                </div> -->
            </div>            
            
        </div>
   @endsection