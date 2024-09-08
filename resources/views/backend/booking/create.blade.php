@extends('backend.layout.master')
@section('content')
        <div class="page-content page-content-white">
            
            <div class="container">        
                
                <div class="row">
                    <!-- Table -->
                    <div class="col-md-12">

                        <div class="block block-fill-white">
                            <div class="header">
                                <!-- <h2>All Update Static Version</h2>
                                <div class="col-md-4">
                                    <select class="form-control">
                                        <option>English</option>
                                        <option>Bangla</option>
                                        <option>Option 3</option>
                                    </select>
                                </div> -->
                                <span class="pull-right"><a href="{{ url()->previous() }}" type="button" class="btn btn-primary">Back</a> </span>

                            </div>
                            <div class="content controls">
                                <form action="{{route('booking.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                   
                                       
                                       <input type="hidden" class="form-control" name="type" value="1" />
                                  
                                    <div class="form-row">
                                        <div class="col-md-3">Name</div>
                                        <div class="col-md-9"><input type="text" class="form-control" name="booking_name" value="" /></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">Email</div>
                                        <div class="col-md-9"><input type="email" class="form-control" name="booking_email" value=""  /></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">Mobile</div>
                                        <div class="col-md-9"><input type="text" class="form-control" name="booking_phone" value=""  /></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">Room Type</div>
                                          
                                            <div class="col-md-9">
                                            <div class="form_select">
                                                <select name="booking_roomtype" class="form-control" title="Select Room Type">
                                                    @foreach($rooms as $room)
                                                   
                                                    <option value="{{$room->id}}" >{{table('room_categories','id',$room->category_id,'category_name')}}/{{$room->price}}kr</option>
                                                   
                                                    @endforeach
                                                </select>
                                            </div>
                                            </div>
                                        </div>
                                    <div class="form-row">
                                        <div class="col-md-3">checkin</div>
                                        <div class="col-md-9"><input type="date" class="form-control " name="booking_checkin" value=""  /></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">Checkout</div>
                                        <div class="col-md-9"><input type="date" class="form-control " name="booking_checkout" value=""  /></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">Adults</div>
                                        <div class="col-md-9"><input type="text" class="form-control" name="booking_adults" value=""  /></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">Children</div>
                                        <div class="col-md-9"><input type="text" class="form-control" name="booking_children" value="" /></div>
                                    </div>
                                    <div class="form-row text-right">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary btn-lg">save</button>
                                        </div>
                                    </div>  
                                </form>                          
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>            
            
        </div>

@endsection