@extends('backend.layout.master')
@section('content')
        <div class="page-content page-content-white">
            
            <div class="container">        
                
                <div class="row">
                    <!-- Table -->
                    <div class="col-md-12">

                        <div class="block block-fill-white">
                            <div class="header">
                                <h2>Updated FAQ Section</h2>
                                <div class="col-md-4 pull-right">
                                    <select class="form-control">
                                        <option>English</option>
                                        <option>Bangla</option>
                                        <option>Option 3</option>
                                    </select>
                                </div>

                            </div>
                            <div class="content controls">
                                <div class="form-row">
                                    <div class="col-md-3">
                                        <img src="img/logob.png"> </div>
                                    <div class="col-md-9">
                                        <button type="button" class="btn btn-info btn-lg">Choose Image</button>
                                    </div>
                                </div>
                                
                                <div class="form-row">
                                    <div class="col-md-3">FAQ SectionTitle</div>
                                    <div class="col-md-9"><input type="text" class="form-control" value="text value"/></div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3">FAQ Sub Section Title</div>
                                    <div class="col-md-9"><input type="text" class="form-control" value="text value"/></div>
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