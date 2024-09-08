@extends('backend.layout.master')
@section('content')
        <div class="page-content page-content-white">
            
            <div class="container">        
                
                <div class="row">
                    <!-- Table -->
                    <div class="col-md-12">

                        <div class="block block-fill-white">
                            <div class="header">
                                <h2>All Update Static Version</h2>
                                <div class="col-md-4">
                                    <select class="form-control">
                                        <option>English</option>
                                        <option>Bangla</option>
                                        <option>Option 3</option>
                                    </select>
                                </div>
                                <span class="pull-right"><a href="" type="button" class="btn btn-primary">Back</a> </span>

                            </div>
                            <div class="content controls">
                                <div class="form-row">
                                    <div class="col-md-3">
                                        <img src="img/logob.png"> </div>
                                    <div class="col-md-3">
                                        <input type="file" class="btn btn-info btn-lg ">Choose Image
                                    </div>
                                </div>
                                
                                <div class="form-row">
                                    <div class="col-md-3">Brands URL</div>
                                    <div class="col-md-9"><input type="URL" class="form-control" value="url"/></div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3">Serial Number</div>
                                    <div class="col-md-9">
                                        <input id="spinner" class="form-control" name="spinner" value="0"/>
                                    </div>
                                </div>

                                <div class="form-row text-right">
                                    <div class="col-md-12">
                                        <button type="button" class="btn btn-danger btn-lg">close</button>
                                        <button type="button" class="btn btn-primary btn-lg">save</button>
                                    </div>
                                </div>                            
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>            
            
        </div>
@endsection