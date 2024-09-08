@extends('backend.layout.master')
@section('content')
        <div class="page-content page-content-white">
            
            <div class="container">        
            
                <div class="row">
                    <!-- Table -->
                    <div class="col-md-12">

                        <div class="block block-fill-white">
                            <div class="header">
                                <h2>Guest</h2>
                                <!-- <div class="col-md-4 ">
                                    <select class="form-control">
                                        <option>English</option>
                                        <option>Bangla</option>
                                        <option>Option 3</option>
                                    </select>
                                </div> -->
                               

                            </div>
                            
                            <div class="content">
                            <span class="btn-sm btn-primary text-end" id="download">Download</span>  
                                <table cellpadding="0" cellspacing="0" width="100%" class="table table-bordered table-striped sortable" id="table2excel">
                                    <thead>
                                        <tr>
                                            <th><input type="checkbox" class="checkall"/></th>
                                            <th>Name</th>
                                            <th>Phone No</th>
                                            <th>Email</th>
                                            <th>Room No</th>
                                            <th>Check In</th>
                                            <th>Check Out</th>
                                            <th>Adults</th>
                                            <th>Children</th>
                                            <th>Country</th>                             
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($booking as $id=>$books)
                                        <tr>
                                            <td><input type="checkbox" name="checkbox"/></td>
                                            <td>{{$books->booking_name}}</td>
                                            <td>{{$books->booking_phone}}</td>
                                            <td>{{$books->booking_email}}</td>
                                            <td>{{table('rooms','id',$books->booking_roomtype,'room_id')}}</td>
                                            <td>{{$books->booking_checkin}}</td>
                                            <td>{{$books->booking_checkout}}</td>
                                            <td>{{$books->booking_adults}}</td>
                                            <td>{{$books->booking_children}}</td>
                                            <td>{{$books->booking_country}}</td> 
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
@section('js')
<script>
        $(document).ready(function() {
	$("#download").click(function(){
      
	  $("#table2excel").table2excel({

	    // exclude CSS class

	    exclude: ".noExl",

	    name: "Guest Information",

	    filename: "guest_information", //do not include extension

	    fileext: ".xlsx" // file extension

	  });

	});
});
</script>
@endsection
