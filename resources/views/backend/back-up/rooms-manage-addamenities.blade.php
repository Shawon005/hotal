@extends('backend.layout.master')
@section('content')
        <div class="page-content page-content-white">
            
            <div class="container">        
                
                <div class="row">
                    <!-- Table -->
                    <div class="col-md-12">

                        <div class="block block-fill-white">
                            <div class="content controls">
                                <div class="form-row">
                                    <div class="col-md-3">Aminity Name</div>
                                    <div class="col-md-9"><input type="text" class="form-control" value="Enter Aminity Name"/></div>
                                </div> 
                                <div class="form-row">
                                    <div class="col-md-3">Serial Number</div>
                                    <div class="col-md-9">
                                        <input id="spinner" class="form-control" name="spinner" value="0"/>
                                        <p>The higher the serial number is,the later the aminity number will shown</p>
                                    </div>
                                </div> 
                                

                                <div class="form-row text-right">
                                    <div class="col-md-12">
                                        <button type="button" class="btn btn-danger btn-lg">Close</button>
                                        <button type="button" class="btn btn-primary btn-lg">Save</button>
                                    </div>
                                </div>                            
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>            
            
        </div>
 @endsection