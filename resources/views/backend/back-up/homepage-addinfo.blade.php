@extends('backend.layout.master')
@section('content')
        <div class="page-content page-content-white">
            
            <div class="container">        
                
                <div class="row">
                    <!-- Table -->
                    <div class="col-md-12">

                        <div class="block block-fill-white">
                            <div class="header">
                                <h2>Create Counter Info</h2>

                                <span class="pull-right"><a href="" type="button" class="btn btn-primary">Back</a> </span>

                            </div>
                            <div class="content controls">
                                <div class="form-row">
                                    <div class="col-md-3">Icon</div>
                                    <div class="col-md-9">
                                        <a type="button" class="btn btn-info"><i class="icon-fixed-width icon-pencil"></i></a>
                                        <a type="button" class="btn btn-danger"><i class="icon-fixed-width icon-trash"></i></a>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3">Title</div>
                                    <div class="col-md-9"><input type="text" class="form-control" value="url"/></div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3">Amount</div>
                                    <div class="col-md-9">
                                        <input id="spinner" class="form-control" name="spinner" value="0"/>
                                    </div>
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