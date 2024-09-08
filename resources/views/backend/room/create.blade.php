@extends('backend.layout.master')
@section('content')
        <div class="page-content page-content-white">
            
            <div class="container">        
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
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
                                <form action="{{route('admin.room.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <!-- <div class="form-row">
                                        <div class="col-md-3">
                                            <img src="img/logob.png"> </div>
                                        <div class="col-md-9">
                                            <button type="button" class="btn btn-info btn-lg">Choose Image</button>
                                        </div>
                                    </div> -->
                                    <div class="form-row">
                                        <div class="col-md-3">Room Number</div>
                                        <div class="col-md-9"><input type="text" class="form-control" name="room_id"placeholder=""/></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">Image</div>
                                        <div class="col-md-9"><input type="file" class="form-control" name="image"placeholder="text value"/></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">Category</div>
                                        <div class="col-md-9">
                                        <select class="form-control" name="category_id" >
                                           @foreach($categorys as $category)
                                           <option value="{{$category->id}}">{{$category->category_name}}</option>
                                           @endforeach
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">Room Details</div>
                                        <div class="col-md-9"><input type="text" class="form-control" name="description" placeholder=""/></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">Price</div>
                                        <div class="col-md-9"><input type="text" class="form-control" name="price" placeholder=""/></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">Gallery</div>
                                        <div class="col-md-9"><input type="file" class="form-control" name="gallery_image[]" multiple="multiple" placeholder="https://www.test.com"/></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">Facility</div>
                                        <div class="col-md-9">
                                        <select class="form-select" id="multiple-select-field" data-width="500px" data-placeholder="Choose anything" name="facility[]" multiple>
                                           @foreach($facilitys as $facility)
                                           <option value="{{$facility->id}}">{{$facility->title}}</option>
                                           @endforeach
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">
                                            Is Published  
                                        </div>
                                        <div class="col-md-9">
                                            <div class=" checkbox checkbox-success ">
                                                <input id="checkbox1" type="checkbox" name="status"class="form-control">
                                                <label for="checkbox1"> </label>
                                            </div>
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