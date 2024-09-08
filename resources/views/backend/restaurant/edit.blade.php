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
                                <form action="{{route('admin.restaurant.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-row">
                                        <div class="col-md-3">Restaurant Image</div>
                                        <div class="col-md-9"><input type="file" class="form-control" name="image[]"placeholder="text value" multiple="multiple"/></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">Sub Title</div>
                                        <div class="col-md-9"><input type="text" class="form-control" value="{{$restaurant->sub_title}}" name="sub_title" placeholder="text value"/></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">Details</div>
                                        <div class="col-md-9"><input type="text" class="form-control" value="{{$restaurant->details}}" name="details" placeholder="text value"/></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">Details (2nd)</div>
                                        <div class="col-md-9"><input type="text" class="form-control" value="{{$restaurant->details1}}" name="details1" placeholder="text value"/></div>
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