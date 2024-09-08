@extends('backend.layout.master')
@section('content')
        <div class="page-content page-content-white">
            
            <div class="container">        
                
                <div class="row">
                    <!-- Table -->
                    <div class="col-md-12">
                
                        <div class="block block-fill-white">
                            <div class="header">
                                <h2>Rooms</h2>
                                <span class="pull-right"><a href="rooms-manage-addrooms.html" type="button" class="btn btn-primary"><i class="icon-fixed-width icon-plus"></i>Add Room</a> </span>                                       
                            </div>
                            <div class="content">

                                <table cellpadding="0" cellspacing="0" width="100%" class="table table-bordered table-striped sortable">
                                    <thead>
                                        <tr>
                                            <th><input type="checkbox" class="checkall"/></th>
                                            <th>Title</th>
                                            <th>Category</th>
                                            <th>Featured</th>
                                            <th>Rent</th>
                                            <th>Action</th>                                    
                                                                               
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="checkbox" name="checkbox"/></td>             
                                            <td>Hotel Shalimar Motijhil</td>
                                            <td>Deluxe Room</td>
                                            <td>
                                                <select class="form-control">
                                                    <option>Yes</option>
                                                    <option>No</option>
                                                </select>
                                            </td>
                                            <td>$20.00</td>
                                            <td>
                                                <a type="button" class="btn btn-info"><i class="icon-fixed-width icon-pencil"></i></a> <a type="button" class="btn btn-danger"><i class="icon-fixed-width icon-trash"></i></a> 
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><input type="checkbox" name="checkbox"/></td>
                                            <td>Hotel Shalimar Motijhil</td>
                                            <td>Deluxe Room</td>
                                            <td>
                                                <select class="form-control">
                                                    <option>Yes</option>
                                                    <option>No</option>
                                                </select>
                                            </td>
                                            <td>$86.00</td>
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