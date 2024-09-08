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
                                <span class="pull-right"><a href="rooms-manage-addcoupons.html" type="button" class="btn btn-primary"><i class="icon-fixed-width icon-plus"></i>Add</a> </span>                                       
                            </div>
                            <div class="content">

                                <table cellpadding="0" cellspacing="0" width="100%" class="table table-bordered table-striped sortable">
                                    <thead>
                                        <tr>
                                            <!-- <th><input type="checkbox" class="checkall"/></th> -->
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Code</th>
                                            <th>Discount</th>
                                            <th>Created</th>
                                            <th>Status</th>                                    
                                            <th>Action</th>                                    
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <!-- <td><input type="checkbox" name="checkbox"/></td> -->
                                            <td>1</td>  
                                            <td>Eid Offer</td>
                                            <td>Save 30</td>
                                            <td>$30.00</td>
                                            <td>1year ago</td>
                                            <td>$20.00</td>
                                            <td><span class="btn-sm btn-danger">Expired</span></td>
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