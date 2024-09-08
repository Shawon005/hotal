@extends('backend.layout.master')
  @section('content')
  <div class="page-content page-content-white">
            
            <div class="container"> 
                
               <div class="col-md-11">
                    <div class="">
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>                    
                            <li><a href="#">Components</a></li>
                            <li><a href="#">Layouts</a></li>
                            <li class="active">White layout</li>
                        </ol>
                    </div>                
                    
                    <div class="">
                        <div class="block block-fill-white">
                            <div class="header">
                                <h2>Welcome Mr. {{Auth::User()->name}} </h2>
                                <div class="pull-right">
                                    <span>
                                        <h2>22-june-2023</h2> 
                                    </span>
                                </div>
                            </div> 
                        </div>    
                    </div>
              
                <div class="row" style="margin-bottom: 30px;color:white">
                    <div class="col-md-12">
                        <h2 class="room-available-room-level">Todays Booking</h2>
                    </div>
                </div>
               

                @foreach($categorys as $category)
                <div class="row">
                    @php $rooms=table_b($category->id); @endphp
                    <div class="col-md-12">
                        <div class="block">
                            <div class="header">
                                <h2>{{$category->category_name}}</h2>
                            </div>
                            <div class="content controls">
                                <div class="form-row">
                                    @foreach($rooms as $room)
                                    
                                    <div class="col-md-2">
                                        <button type="button" class="btn btn-danger btn-block"> {{$room->room_id}}</button>
                                    </div>
                                    
                                    @endforeach
                                </div>
                                   
                            </div>
                        </div>
                    </div>

                </div>
                @endforeach
                
                </div>
            </div>            
            
        </div>
        @endsection