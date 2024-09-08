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
                                    <div class="col-md-3">Location Name</div>
                                    <div class="col-md-9"><input type="text" class="form-control" value="Enter Address"/></div>
                                </div>  
                                
                                <div class="form-row">
                                    <div class="col-md-3">Latitude</div>
                                    <div class="col-md-9">
                                        <input id="spinner" class="form-control" name="spinner" value="0"/>
                                    </div>
                                </div> 
                                <div class="form-row">
                                    <div class="col-md-3">Longitude</div>
                                    <div class="col-md-9">
                                        <input id="spinner2" class="form-control" name="spinner" value="0"/>
                                    </div>
                                </div>

                                <div class="form-row text-right">
                                    <div class="col-md-12">
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
 