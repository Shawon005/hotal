@extends('backend.layout.master')
@section('content')
        <div class="page-content page-content-white">
            
            <div class="container">        
                
                <div class="row">
                    <!-- Table -->
                    <div class="col-md-12">

                        <div class="block block-fill-white">
                            <div class="header">
                                <h2>Update Testimonial Section</h2>
                                <div class="col-md-4 pull-right">
                                    <select class="form-control">
                                        <option>English</option>
                                        <option>Bangla</option>
                                    </select>
                                </div>

                            </div>
                            <div class="content controls">
                                <div class="form-row">
                                    <div class="col-md-3">Testimonial Section Title</div>
                                    <div class="col-md-9"><input type="text" class="form-control" value="text value"/></div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3">Testimonial Section Sub-Title</div>
                                    <div class="col-md-9"><input type="text" class="form-control" value="text value"/></div>
                                </div>

                                <div class="form-row text-right">
                                    <div class="col-md-12">
                                        <button type="button" class="btn btn-primary btn-lg">Update</button>
                                    </div>
                                </div>                            
                            </div>

                            <div class="block block-fill-white">
                                <div class="header">
                                    <h2>Testimonials</h2>
                                    <span class="pull-right"><a href="homepage-addtestimonial.html" type="button" class="btn btn-primary"><i class="icon-fixed-width icon-plus"></i>Add Testimonial</a> </span>                                       
                                </div>
                                <div class="content">

                                    <table cellpadding="0" cellspacing="0" width="100%" class="table table-bordered table-striped sortable">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Comment</th>
                                                <th>Serial Number</th>
                                                <th>Action</th>                  
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>             
                                                <td>james</td>
                                                <td>lorem ipsum</td>
                                                <td>5</td>
                                                <td>
                                                    <a type="button" class="btn btn-info"><i class="icon-fixed-width icon-pencil"></i></a> <a type="button" class="btn btn-danger"><i class="icon-fixed-width icon-trash"></i></a> 
                                                </td>
                                            </tr>
                                                                            
                                        </tbody>
                                    </table>                                        

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>            
            
        </div>
@endsection