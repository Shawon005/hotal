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
                                <h2>Blog category</h2>
                                <!-- <div class="col-md-4 ">
                                    <select class="form-control">
                                        <option>English</option>
                                        <option>Bangla</option>
                                        <option>Option 3</option>
                                    </select>
                                </div> -->
                                <span class="pull-right"><a href="{{route('admin.blog_category.create')}}" type="button" class="btn btn-primary"><i class="icon-fixed-width icon-plus"></i>Add Category</a> </span>

                            </div>
                            
                            <div class="content">

                                <table cellpadding="0" cellspacing="0" width="100%" class="table table-bordered table-striped sortable">
                                    <thead>
                                        <tr>
                                            <th><input type="checkbox" class="checkall"/></th>
                                            <th>category Name</th>
                                            <th>Actions</th>                                 
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($categorys as $id=>$category)
                                        <tr>
                                            <td><input type="checkbox" name="checkbox"/></td>
                                            <td>{{$category->category_name}}</td> 
                                            <td>
                                            <a type="button" class="btn btn-info"href="{{route('admin.blog_category.edit',$category->id)}}"><i class="icon-fixed-width icon-pencil"></i></a>
                                             <a type="button" class="btn btn-danger" href="{{route('admin.blog_category.delete',$category->id)}}"><i class="icon-fixed-width icon-trash"></i></a> 
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