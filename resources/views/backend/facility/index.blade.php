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

                        <!-- <div class="block block-fill-white">
                            <div class="header">
                                <h2>Update Facility Section</h2>
                                <div class="col-md-4 pull-right">
                                    <select class="form-control">
                                        <option>English</option>
                                        <option>Bangla</option>
                                    </select>
                                </div>

                            </div>
                            <div class="content controls">
                                <div class="form-row">
                                    <div class="col-md-3">
                                        <img src="img/logob.png"> </div>
                                    <div class="col-md-9">
                                        <button type="button" class="btn btn-info btn-lg">Choose Image</button>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-3">Facility Section Title</div>
                                    <div class="col-md-9"><input type="text" class="form-control" value="text value"/></div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3">Facility Section Sub-Title</div>
                                    <div class="col-md-9"><input type="text" class="form-control" value="text value"/></div>
                                </div>

                                <div class="form-row text-right">
                                    <div class="col-md-12 text-center">
                                        <button type="button" class="btn btn-success btn-lg">Update</button>
                                    </div>
                                </div>                            
                            </div>
                        </div> -->

                        <div class="block block-fill-white">
                            <div class="header">
                                <h2>Facilities</h2>
                                <span class="pull-right"><a href="{{route('admin.facility.create')}}" type="button" class="btn btn-primary"><i class="icon-fixed-width icon-plus"></i>Add</a> </span>                                       
                            </div>
                            <div class="content">

                                <table cellpadding="0" cellspacing="0" width="100%" class="table table-bordered table-striped sortable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Icon</th>
                                            <th>Title</th>
                                            <th>Action</th>                  
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($facilities as $id=>$facility )
                                        <tr>
                                            <td>{{$id+1}}</td>             
                                            <td>
                                                <img src="{{$facility->image}}" alt="" width="60px">
                                            </td>
                                            <td>{{$facility->title}}</td>
                                            <td>
                                                <a type="button" class="btn btn-info" href="{{route('admin.facility.edit',$facility->id)}}"><i class="icon-fixed-width icon-pencil"></i></a> 
                                                <a type="button" class="btn btn-danger"href="{{route('admin.facility.delete',$facility->id)}}"><i class="icon-fixed-width icon-trash"></i></a> 
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