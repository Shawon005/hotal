@extends('backend.layout.master')
@section('content')
        <div class="page-content page-content-white">
            
            <div class="container">        
                
                <div class="row">
                    <!-- Table -->
                    <div class="col-md-12">

                        <div class="block block-fill-white">
                            <div class="header">
                                <h2>Create New Testimonial</h2>

                                <span class="pull-right"><a href="" type="button" class="btn btn-primary">Back</a> </span>

                            </div>
                            <div class="content controls">
                                <div class="form-row">
                                    <div class="col-md-3">Client Name</div>
                                    <div class="col-md-9"><input type="text" class="form-control" value="url"/></div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3">Comment:</div>
                                    <div class="col-md-9"><textarea class="form-control">enter comment</textarea></div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3">Serial Number</div>
                                    <div class="col-md-9">
                                        <input id="spinner" class="form-control" name="spinner" value="0"/>
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