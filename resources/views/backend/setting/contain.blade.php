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
                                <form action="{{route('admin.setting.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    
                                    <div class="form-row">
                                        <div class="col-md-3">FAVORITE ROOMS</div>
                                        <div class="col-md-9"><textarea name="home_room" class="form-control" id="" cols="30" rows="5">{{$setting->home_room}}</textarea></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">AWESOME SERVICES</div>
                                        <div class="col-md-9"><textarea name="home_service" class="form-control" id="" cols="30" rows="5">{{$setting->home_service}}</textarea></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">GALLERY PHOTOS</div>
                                        <div class="col-md-9"><textarea name="home_gallery" class="form-control" id="" cols="30" rows="5">{{$setting->home_gallery}}</textarea></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">REVIEW</div>
                                        <div class="col-md-9"><textarea name="home_review" class="form-control" id="" cols="30" rows="5">{{$setting->home_review}}</textarea></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">LOCATION </div>
                                        <div class="col-md-9"><textarea name="home_location" class="form-control" id="" cols="30" rows="5">{{$setting->home_location}}</textarea></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">Restaurant Page </div>
                                        <div class="col-md-9"><textarea name="resturrent_page" class="form-control" id="" cols="30" rows="5">{{$setting->resturrent_page}}</textarea></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">Place Page </div>
                                        <div class="col-md-9"><textarea name="palce_page" class="form-control" id="" cols="30" rows="5">{{$setting->palce_page}}</textarea></div>
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