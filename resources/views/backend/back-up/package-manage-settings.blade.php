@extends('backend.layout.master')
@section('content')
        <div class="page-content page-content-white">
            
            <div class="container">        
                
                <div class="row">
                    <!-- Table -->
                    <div class="col-md-12">
                
                        <div class="block block-fill-white">
                            <div class="header">
                                <h2>Package Settings</h2>
                                <!-- <span class="pull-right"><a href="" type="button" class="btn btn-primary"><i class="icon-fixed-width icon-plus"></i>Add Room</a> </span>                                        -->
                            </div>
                            <div class="content">
                                <div class="form-row">
                                    <div class="col-md-3">Category Status</div>
                                    <div class="col-md-9">
                                        <p>
                                            <a type="button" class="btn btn-primary btn-lg">Active</a>
                                            <a type="button" class="btn btn-default btn-lg">Deactive</a>
                                        </p>
                                        <p>Specify weather the category for room will be active or not.</p>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3">Rating Status</div>
                                    <div class="col-md-9">
                                        <p>
                                            <a type="button" class="btn btn-primary btn-lg">Active</a>
                                            <a type="button" class="btn btn-default btn-lg">Deactive</a>
                                        </p>
                                        <p>Specify weather the rating system for room will be active or not.</p>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3">Guest Checkout Status</div>
                                    <div class="col-md-9">
                                        <p>
                                            <a type="button" class="btn btn-primary btn-lg">Active</a>
                                            <a type="button" class="btn btn-default btn-lg">Deactive</a>
                                        </p>
                                        <p>If guest checkout is activem,then users can checkout without login.</p>
                                    </div>
                                </div>
                                <div class="form-row text-center">
                                    <div class="col-md-12">
                                        <button type="button" class="btn btn-info btn-lg">Update</button>
                                    </div>
                                </div>                                              
                            </div>
                        </div>
                  
                    </div>


                </div>
                
            </div>            
            
        </div>
 @endsection