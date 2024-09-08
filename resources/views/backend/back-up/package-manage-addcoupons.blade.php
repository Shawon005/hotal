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
                                    <div class="col-md-3">Name</div>
                                    <div class="col-md-9"><input type="text" class="form-control" value="Enter Address"/></div>
                                </div> 
                                <div class="form-row">
                                    <div class="col-md-3">Code</div>
                                    <div class="col-md-9"><input type="text" class="form-control" value="Enter Address"/></div>
                                </div> 
                                <div class="form-row">
                                    <div class="col-md-3">Coupon Type</div>
                                    <div class="col-md-9">
                                        <select class="form-control">
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                            <option>Option 4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3">Value</div>
                                    <div class="col-md-9">
                                        <input id="spinner2" class="form-control" name="spinner" value="0"/>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3">Start Date</div>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <div class="input-group-addon"><span class="icon-calendar-empty"></span></div>
                                            <input type="text" class="datepicker form-control" value="09/15/2013"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3">End Date</div>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <div class="input-group-addon"><span class="icon-calendar-empty"></span></div>
                                            <input type="text" class="datepicker form-control" value="09/15/2013"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-3">Serial Number</div>
                                    <div class="col-md-9">
                                        <input id="spinner" class="form-control" name="spinner" value="0"/>
                                    </div>
                                </div> 
                                <div class="form-row">
                                    <div class="col-md-3">Rooms</div>
                                    <div class="col-md-9">
                                        <select class="form-control">
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                            <option>Option 4</option>
                                        </select>
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