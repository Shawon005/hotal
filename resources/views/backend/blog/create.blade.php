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
                                <span class="pull-right"><a href="" type="button" class="btn btn-primary">Back</a> </span>

                            </div>
                            <div class="content controls">
                                <form action="{{route('admin.blog.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                   
                                    <div class="form-row">
                                        <div class="col-md-3">Blog Image</div>
                                        <div class="col-md-9"><input type="file" class="form-control" name="blog_image"placeholder="text value"/></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">Blog Title</div>
                                        <div class="col-md-9"><input type="text" class="form-control" name="blog_title" placeholder="text value"/></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">Blog Details</div>
                                        <div class="col-md-9"><input type="text" class="form-control" name="blog_description" placeholder="text value"/></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">Category</div>
                                        <div class="col-md-9">
                                        <select class="form-control" name="category_id">
                                           @foreach($categorys as $category)
                                           <option value="{{$category->id}}">{{$category->category_name}}</option>
                                           @endforeach
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">Tag</div>
                                        <div class="col-md-9">
                                        <select class="form-control" name="tag_id[]" multiple="multiple">
                                           @foreach($tags as $tag)
                                           <option value="{{$tag->id}}">{{$tag->tag_name}}</option>
                                           @endforeach
                                        </select>
                                        </div>
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