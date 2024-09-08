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
                                <h2>Sliders</h2>
                               
                                <span class="pull-right"><a href="{{route('admin.slider.create')}}" type="button" class="btn btn-primary"><i class="icon-fixed-width icon-plus"></i>Add Slider</a> </span>

                            </div>
                            
                            <div class="content">

                                <table cellpadding="0" cellspacing="0" width="100%" class="table table-bordered table-striped sortable">
                                    <thead>
                                        <tr>
                                            <th><input type="checkbox" class="checkall"/></th>
                                            <th>Slider Title</th>
                                            <th>Sub Title</th>
                                            <th>Image</th>
                                            <th>Actions</th>                                 
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($sliders as $id=>$slider)
                                        <tr>
                                            <td><input type="checkbox" name="checkbox"/></td>
                                            <td>{{$slider->title}}</td>
                                            <td>{{$slider->sub_title}}</td>
                                            <td><img src="{{$slider->image}}" alt=""width="60px"></td>
                                            <td>
                                            <a type="button" class="btn btn-info"href="{{route('admin.slider.edit',$slider->id)}}"><i class="icon-fixed-width icon-pencil"></i></a>
                                             <a type="button" class="btn btn-danger" href="{{route('admin.slider.delete',$slider->id)}}"><i class="icon-fixed-width icon-trash"></i></a> 
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