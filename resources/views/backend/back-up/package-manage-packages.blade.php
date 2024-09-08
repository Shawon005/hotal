@extends('backend.layout.master')
@section('content')
        <div class="page-content page-content-white">
            
            <div class="container">        
                
                <div class="row">
                    <!-- Table -->
                    <div class="col-md-12">
                
                        <div class="block block-fill-white">
                            <div class="header">
                                <h2>Packages</h2>
                                <span class="pull-right"><a href="package-manage-addpackages.html" type="button" class="btn btn-primary"><i class="icon-fixed-width icon-plus"></i>Add Package</a> </span>                                       
                            </div>
                            <div class="content">

                                <table cellpadding="0" cellspacing="0" width="100%" class="table table-bordered table-striped sortable">
                                    <thead>
                                        <tr>
                                            <th><input type="checkbox" class="checkall"/></th>
                                            <th>Title</th>
                                            <th>Price</th>
                                            <th>Locations</th>
                                            <th>Plans</th>
                                            <th>Featured</th>
                                            <th>Actions</th>                                    
                                                                               
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="checkbox" name="checkbox"/></td>  
                                            <td>$50.00</td>           
                                            <td>Hotel Shalimar Motijhil</td>
                                            <td>
                                                <a href="package-manage-locations.html" type="button" class="btn btn-info">Manage</a>
                                            </td>
                                            <td>
                                                <a href="package-manage-plans.html" type="button" class="btn btn-info">Manage</a>
                                            </td>
                                            <td>
                                                <select class="form-control">
                                                    <option>Yes</option>
                                                    <option>No</option>
                                                </select>
                                            </td>
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