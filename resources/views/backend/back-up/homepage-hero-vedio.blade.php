@extends('backend.layout.master')
@section('content')
        <div class="page-content page-content-white">
            
            <div class="container">        
                
                <div class="row">
                    <!-- Table -->
                    <div class="col-md-12">

                        <div class="block block-fill-white">
                            <div class="header">
                                <h2>Update Vedio Version</h2>
                                <div class="col-md-4 ">
                                    <select class="form-control">
                                        <option>English</option>
                                        <option>Bangla</option>
                                        <option>Option 3</option>
                                    </select>
                                </div>
                                <!-- <span class="pull-right"><a href="homepage-hero-addslider.html" type="button" class="btn btn-primary"><i class="icon-fixed-width icon-plus"></i>Add Slider</a> </span> -->

                            </div>
                            <div class="content controls">
                                <div class="form-row">
                                    <div class="col-md-3">Vedio Link</div>
                                    <div class="col-md-9"><input type="URL" class="form-control" value="url"/></div>
                                </div>
                                
                                

                                <div class="form-row text-right">
                                    <div class="col-md-12">
                                        <button type="button" class="btn btn-success btn-lg">Update</button>
                                    </div>
                                </div>                            
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>            
            
        </div>
@endsection