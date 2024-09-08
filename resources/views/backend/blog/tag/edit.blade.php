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
                                <form action="{{route('admin.blog_tag.update',$tag->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-row">
                                        <div class="col-md-3">tag Name</div>
                                        <div class="col-md-9"><input type="text" class="form-control" value="{{$tag->tag_name}}" name="tag_name" placeholder="text value"/></div>
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