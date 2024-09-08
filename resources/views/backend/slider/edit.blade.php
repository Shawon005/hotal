@extends('backend.layout.master')
@section('content')
        <div class="page-content page-content-white">
            
            <div class="container">        
                
                <div class="row">
                    <!-- Table -->
                    <div class="col-md-12">

                        <div class="block block-fill-white">
                            <div class="header">
                                <h2>All Update Static Version</h2>
                                
                                <span class="pull-right"><a href="{{ url()->previous() }}" type="button" class="btn btn-primary">Back</a> </span>

                            </div>
                            <div class="content controls">
                                <form action="{{route('admin.slider.update',$slider->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <!-- <div class="form-row">
                                        <div class="col-md-3">
                                            <img src="img/logob.png"> </div>
                                        <div class="col-md-9">
                                            <button type="button" class="btn btn-info btn-lg">Choose Image</button>
                                        </div>
                                    </div> -->
                                    <div class="form-row">
                                        <div class="col-md-3">Image</div>
                                        <div class="col-md-9"><input type="file" class="form-control" name="image"placeholder="text value"/></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">Title</div>
                                        <div class="col-md-9"><input type="text" class="form-control" name="title" value="{{$slider->title}}" placeholder="text value"/></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">Sub-Title</div>
                                        <div class="col-md-9"><input type="text" class="form-control" name="sub_title"value="{{$slider->sub_title}}" placeholder="text value"/></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">Button Name</div>
                                        <div class="col-md-9"><input type="text" class="form-control" name="btn_text" value="{{$slider->btn_text}}"placeholder="text value"/></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">Button URL</div>
                                        <div class="col-md-9"><input type="URL" class="form-control" name="btn_link" value="{{$slider->btn_link}}"placeholder="https://www.test.com"/></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">Serial Number</div>
                                        <div class="col-md-9">
                                            <input id="spinner" class="form-control" name="serial_no" value="{{$slider->serial_no}}"placeholder="0"/>
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