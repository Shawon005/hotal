@extends('backend.layout.master')
@section('content')
        <div class="page-content page-content-white">
            
            <div class="container">        
                
                <div class="row">
                    <!-- Table -->
                    <div class="col-md-12">
                
                        <div class="block block-fill-white">
                            <div class="header">
                                <h2>Room Amenities</h2>
                                <span class="pull-right"><a href="rooms-manage-addamenities.html" type="button" class="btn btn-primary"><i class="icon-fixed-width icon-plus"></i>Add Amenities</a> </span>                                       
                            </div>
                            <div class="content">

                                <table cellpadding="0" cellspacing="0" width="100%" class="table table-bordered table-striped sortable">
                                    <thead>
                                        <tr>
                                            <th><input type="checkbox" class="checkall"/></th>
                                            <th>Name</th>
                                            <th>Serial Number</th>
                                            <th>Actions</th>                                    
                                                                               
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="checkbox" name="checkbox"/></td>
                                            <td>Tea/Coffie maker in all rooms</td>
                                            <td>7</td>
                                            <td>
                                                <a type="button" class="btn btn-info"><i class="icon-fixed-width icon-pencil"></i></a> <a type="button" class="btn btn-danger"><i class="icon-fixed-width icon-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" name="checkbox"/></td>
                                            <td>Tea/Coffie maker in all rooms</td>
                                            <td>7</td>
                                            <td>
                                                <a type="button" class="btn btn-info"><i class="icon-fixed-width icon-pencil"></i></a> <a type="button" class="btn btn-danger"><i class="icon-fixed-width icon-trash"></i></a> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" name="checkbox"/></td>
                                            <td>Non smoking rooms</td>
                                            <td>9</td>
                                            <td>
                                                <a type="button" class="btn btn-info"><i class="icon-fixed-width icon-pencil"></i></a> <a type="button" class="btn btn-danger"><i class="icon-fixed-width icon-trash"></i></a> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" name="checkbox"/></td>
                                            <td>Family rooms</td>
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
@endsection