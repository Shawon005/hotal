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
                                <span class="pull-right"><a href="{{ url()->previous() }}" type="button" class="btn btn-primary">Back</a> </span>

                            </div>
                            <div class="content controls">
                                <form action="{{route('admin.gallery.update',$gallery->id)}}" method="post" enctype="multipart/form-data">
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
                                        <div class="col-md-9"><input type="text" class="form-control" name="title" value="{{$gallery->title}}" placeholder="text value"/></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">Service</div>
                                        <div class="col-md-9">
                                        <select class="form-control" name="type" >
                                           @foreach($types as $type)
                                           @if($type->id==$gallery->type)
                                           <option selected value="{{$type->id}}">{{$type->title}}</option>
                                           @else
                                           <option value="{{$type->id}}">{{$type->title}}</option>
                                           @endif
                                           @endforeach
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">Details</div>
                                        <div class="col-md-9"><input type="text" class="form-control" name="details" value="{{$gallery->details}}"placeholder="text value"/></div>
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