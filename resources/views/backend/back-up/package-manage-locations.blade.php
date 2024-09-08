@extends('backend.layout.master')
@section('content')
        <div class="page-content page-content-white">
            
            <div class="container">        
                
                <div class="row">
                    <!-- Table -->
                    <div class="col-md-12">
                
                        <div class="block block-fill-white">
                            <div class="header">
                                <h2>Package Locations</h2>
                                <div class="col-md-4">
                                    <select class="form-control">
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                    </select>
                                </div>
                                <span class="pull-right"><a href="package-manage-addlocations.html" type="button" class="btn btn-primary"><i class="icon-fixed-width icon-plus"></i>Add Location</a> </span>                                         
                            </div>
                            <div class="content">

                                <table cellpadding="0" cellspacing="0" width="100%" class="table table-bordered table-striped sortable">
                                    <thead>
                                        <tr>
                                            <th><input type="checkbox" class="checkall"/></th>
                                            <th>Name</th>
                                            <th>Langitude</th>
                                            <th>Latitude</th>
                                            <th>Action</th>                                    
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="checkbox" name="checkbox"/></td>
                                            <td>Auburn,NY,USA</td>
                                            <td>42.5562</td>
                                            <td>-79.2563</td>
                                            <td>3</td>
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