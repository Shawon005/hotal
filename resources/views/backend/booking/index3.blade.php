@extends('backend.layout.master')
@section('content')
        <div class="page-content page-content-white">
            
            <div class="container">        
            @if(session('message'))
                <div class="alert alert-success">
                    <span class="close" data-dismiss="alert"></span>
                    <strong>{{session('message')}}</strong>
                </div>
                 @endif
                <div class="row">
                    <!-- Table -->
                    <div class="col-md-12">

                        <div class="block block-fill-white">
                            <div class="header">
                                <h2>Booking</h2>
                                <!-- <div class="col-md-4 ">
                                    <select class="form-control">
                                        <option>English</option>
                                        <option>Bangla</option>
                                        <option>Option 3</option>
                                    </select>
                                </div> -->
                                
                            </div>
                            
                            <div class="content">

                                <table cellpadding="0" cellspacing="0" width="100%" class="table table-bordered table-striped sortable">
                                    <thead>
                                        <tr>
                                            <th><input type="checkbox" class="checkall"/></th>
                                            <th>Name</th>
                                            <th>Phone No</th>
                                            <th>Email</th>
                                            <th>Room Details</th>
                                            <th>Check In</th>
                                            <th>Check Out</th>
                                            <th>Adults</th>
                                            <th>Children</th>
                                            <th>Country</th>
                                            <th>Commend</th>
                                            <th>Status</th>                   
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($booking as $id=>$books)
                                        <tr>
                                            <td><input type="checkbox" name="checkbox"/></td>
                                            <td>{{$books->booking_name}}</td>
                                            <td>{{$books->booking_phone}}</td>
                                            <td>{{$books->booking_email}}</td>
                                            <td>Name:{{table('room_categories','id',table('rooms','id',$books->booking_roomtype,'category_id'),'category_name')}} <br>
                                             Price:{{table('rooms','id',$books->booking_roomtype,'price')}}</td>
                                            <td>{{$books->booking_checkin}}</td>
                                            <td>{{$books->booking_checkout}}</td>
                                            <td>{{$books->booking_adults}}</td>
                                            <td>{{$books->booking_children}}</td>
                                            <td>{{$books->booking_country}}</td>
                                            <td>{{$books->booking_comments}}</td>
                                            <td><span class="btn" style="background:{{($books->cancle==0)?'green':'red'}}; padding:3px">{{($books->cancle==0)?'Active':'Cancle'}}</span></td>
                                        </tr>
                                        @endforeach                           
                                    </tbody>
                                </table>                                        
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>            
            
        </div>
@endsection
