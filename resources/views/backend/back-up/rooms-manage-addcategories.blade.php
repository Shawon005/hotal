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
                                    <div class="col-md-3">Category Name</div>
                                    <div class="col-md-9"><input type="text" class="form-control" value="Enter Address"/></div>
                                </div>  
                                <div class="form-row">
                                    <div class="col-md-3">Category Status</div>
                                    <div class="col-md-9">
                                        <select class="form-control">
                                            <option>Active</option>
                                            <option>Deactive</option>
                                        </select>
                                    </div>
                                </div>
                                

                                <div class="form-row">
                                    <div class="col-md-3">Category Serial Number</div>
                                    <div class="col-md-9">
                                        <input id="spinner" class="form-control" name="spinner" value="0"/>
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
 