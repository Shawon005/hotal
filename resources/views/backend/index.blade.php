@extends('backend.layout.master')
  @section('content')
  <div class="page-content">
            
            <div class=""> 
          
            <div class="col-md-11">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb">
                            Welcome Mr. {{Auth::User()->name}} 
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-2">
                        <a href="{{route('admin.booking_room')}}">
                            <div class="block block-drop-shadow">
                                <div class="header">
                                    <h2>Todays Booking</h2>
                                </div>
                                <div class="head bg-dot30">
                                    <div class="head-panel nm" style="text-align: center;">
                                        <div class="knob">
                                            <div class="knob">
                                                <input type="text" data-fgColor="#3F97FE" data-min="0" data-max="72"
                                                    data-width="100" data-height="100" value="{{count(table_s('bookings','booking_checkin',date('d/m/Y')))}}" data-readOnly="true" />
                                            </div>
                                        </div>
                                        <div style="font-size: 14px;"> <a href="{{route('admin.booking_room')}}"> Details</a></div>
                                    </div>

                                </div>

                            </div>
                        </a>
                    </div>
                    <div class="col-md-2">
                        <a href="{{route('admin.a_room')}}">
                            <div class="block block-drop-shadow">
                                <div class="header">
                                    <h2>Available Rooms</h2>
                                </div>
                                <div class="head bg-dot30">
                                    <div class="head-panel nm" style="text-align: center;">
                                        <div class="knob">
                                            <div class="knob">
                                                <input type="text" data-fgColor="#3F97FE" data-min="0" data-max="72"
                                                    data-width="100" data-height="100" value="{{count(table_s('rooms','is_available',1))}}" data-readOnly="true" />
                                            </div>
                                        </div>
                                        <div style="font-size: 14px;"> <a href="{{route('admin.a_room')}}"> Details</a></div>
                                    </div>

                                </div>

                            </div>
                        </a>
                    </div>
                    <div class="col-md-2">
                        <a href="{{route('admin.all_room')}}">
                            <div class="block block-drop-shadow">
                                <div class="header">
                                    <h2>Total Rooms</h2>
                                </div>
                                <div class="head bg-dot30">
                                    <div class="head-panel nm" style="text-align: center;">
                                        <div class="knob">
                                            <div class="knob">
                                                <input type="text" data-fgColor="#3F97FE" data-min="0" data-max="72"
                                                    data-width="100" data-height="100" value="{{count($room)}}" data-readOnly="true" />
                                            </div>
                                        </div>
                                        <div style="font-size: 14px;"> <a href="{{route('admin.all_room')}}"> Details</a></div>
                                    </div>

                                </div>

                            </div>
                        </a>
                    </div>
                    <div class="col-md-2">
                        <a href="{{route('booking.today_cancle')}}">
                            <div class="block block-drop-shadow">
                                <div class="header">
                                    <h2>Todays Cancel </h2>
                                </div>
                                <div class="head bg-dot30">
                                    <div class="head-panel nm" style="text-align: center;">
                                        <div class="knob">
                                            <div class="knob">
                                                <input type="text" data-fgColor="#3F97FE" data-min="0" data-max="72"
                                                    data-width="100" data-height="100" value="{{count($T_booking)}}" data-readOnly="true" />
                                            </div>
                                        </div>
                                        <div style="font-size: 14px;"> <a href="{{route('booking.today_cancle')}}"> Details</a></div>
                                    </div>

                                </div>

                            </div>
                        </a>
                    </div>
                    <div class="col-md-2">
                        <a href="{{route('booking.infos')}}">
                            <div class="block block-drop-shadow">
                                <div class="header">
                                    <h2>Total Booking</h2>
                                </div>
                                <div class="head bg-dot30">
                                    <div class="head-panel nm" style="text-align: center;">
                                        <div class="knob">
                                            <div class="knob">
                                                <input type="text" data-fgColor="#3F97FE" data-min="0" data-max="72"
                                                    data-width="100" data-height="100" value="{{count(table_f('bookings'))}}" data-readOnly="true" />
                                            </div>
                                        </div>
                                        <div style="font-size: 14px;"> <a href="{{route('booking.infos')}}"> Details</a></div>
                                    </div>

                                </div>

                            </div>
                        </a>
                    </div>
                    <div class="col-md-2">
                        <a href="{{route('booking.cancle')}}">
                            <div class="block block-drop-shadow">
                                <div class="header">
                                    <h2>Total Cancelation</h2>
                                </div>
                                <div class="head bg-dot30">
                                    <div class="head-panel nm" style="text-align: center;">
                                        <div class="knob">
                                            <div class="knob">
                                                <input type="text" data-fgColor="#3F97FE" data-min="0" data-max="72"
                                                    data-width="100" data-height="100" value="{{count(table_s('bookings','cancle',1))}}" data-readOnly="true" />
                                            </div>
                                        </div>
                                        <div style="font-size: 14px;"> <a href="{{route('booking.cancle')}}"> Details</a></div>
                                    </div>

                                </div>

                            </div>
                        </a>
                    </div>



                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb">
                            Available
                        </div>
                    </div>
                </div>
                @foreach($categorys as $category)
                <div class="row">
                @php $rooms=table_ss($category->id); @endphp
                    <div class="col-md-12">
                        <div class="block">
                            <div class="header">
                                <h2>{{$category->category_name}}</h2>
                            </div>
                            <div class="content controls">
                                <div class="form-row">
                                    @foreach($rooms as $room)
                                    @if($room->is_available)
                                    <div class="col-md-2">
                                        <button type="button" class="btn btn-primary btn-block"> {{$room->room_id}} </button>
                                    </div>
                                    @endif
                                    @endforeach
                                </div>
                                   
                            </div>
                        </div>
                    </div>

                </div>
                @endforeach
                <!-- <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <div class="header">
                                <h2>Suite Room</h2>
                            </div>
                            <div class="content controls">
                                <div class="form-row">
                                    <div class="col-md-2">
                                        <button type="button" class="btn btn-primary btn-block">102 </button>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" class="btn btn-primary btn-block"> 103 </button>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" class="btn btn-primary btn-block">Button block</button>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" class="btn btn-primary btn-block">Button block</button>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" class="btn btn-primary btn-block">Button block</button>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" class="btn btn-primary btn-block">Button block</button>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <div class="header">
                                <h2>Double Room</h2>
                            </div>
                            <div class="content controls">
                                <div class="form-row">
                                    <div class="col-md-2">
                                        <button type="button" class="btn btn-primary btn-block">102 </button>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" class="btn btn-primary btn-block"> 103 </button>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" class="btn btn-primary btn-block">Button block</button>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" class="btn btn-primary btn-block">Button block</button>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" class="btn btn-primary btn-block">Button block</button>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" class="btn btn-primary btn-block">Button block</button>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div> -->
            </div>

        </div>
        </div>            
            
            </div>

@endsection