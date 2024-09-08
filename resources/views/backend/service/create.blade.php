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
                                <form action="{{route('admin.service.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <!-- <div class="form-row">
                                        <div class="col-md-3">
                                            <img src="img/logob.png"> </div>
                                        <div class="col-md-9">
                                            <button type="button" class="btn btn-info btn-lg">Choose Image</button>
                                        </div>
                                    </div> -->
                                    <div class="form-row">
                                        <div class="col-md-3">Logo</div>
                                        <div class="col-md-9"><input type="file" class="form-control" name="logo"placeholder="text value"/></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">Image</div>
                                        <div class="col-md-9"><input type="file" class="form-control" name="image"placeholder="text value"/></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">Title</div>
                                        <div class="col-md-9"><input type="text" class="form-control" name="title" placeholder="text value"/></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">Sub-Title</div>
                                        <div class="col-md-9"><input type="text" class="form-control" name="description" placeholder="text value"/></div>
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