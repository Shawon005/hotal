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
                                <h2>Room</h2>
                                <!-- <div class="col-md-4 ">
                                    <select class="form-control">
                                        <option>English</option>
                                        <option>Bangla</option>
                                        <option>Option 3</option>
                                    </select>
                                </div> -->
                                <span class="pull-right"><a href="{{route('admin.room.create')}}" type="button" class="btn btn-primary"><i class="icon-fixed-width icon-plus"></i>Add Room</a> </span>

                            </div>
                            
                            <div class="content">

                                <table cellpadding="0" cellspacing="0" width="100%" class="table table-bordered table-striped sortable">
                                    <thead>
                                        <tr>
                                            <th><input type="checkbox" class="checkall"/></th>
                                            <th>Room No</th>
                                            <th>Room Category</th>
                                            <th>Price</th>
                                            <th>Image</th>
                                            <th>Favorite</th>
                                            <th>Actions</th>                                 
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($rooms as $id=>$room)
                                        <tr>
                                            
                                            <td><input type="checkbox" name="checkbox"/></td>
                                            <td>{{$room->room_id}}</td>
                                            <td>{{table('room_categories','id',$room->category_id,'category_name')}}</td>
                                            <td align="center">{{$room->price}} SEK</td>
                                            <td><img src="{{$room->image}}" alt=""width="60px"></td>
                                            <td ><input type="checkbox"  class="js-switch" id="switch" data-color="#118a27" data-size="small" data-id={{$room->id}} {{($room->favorite==1)?'checked':''}} /></td>
                                            <td>
                                            <a type="button" class="btn btn-info"href="{{route('admin.room.edit',$room->id)}}"><i class="icon-fixed-width icon-pencil"></i></a>
                                             <a type="button" class="btn btn-danger" href="{{route('admin.room.delete',$room->id)}}"><i class="icon-fixed-width icon-trash"></i></a> 
                                            </td>
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
        $(".js-switch").on( "change",function(){
            var id=$(this).data('id');
         $.ajax({
             url:"RoomStatusById/"+id,
             type:"GET",
             success:function(data){
                 
             }
         });
            
        });
    });
  </script>
  @endsection