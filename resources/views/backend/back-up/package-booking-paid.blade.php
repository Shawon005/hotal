@extends('backend.layout.master')
@section('content')
        <div class="page-content page-content-white">
            
            <div class="container">        
                
                <div class="row">
                    <!-- Table -->
                    <div class="col-md-12">
                
                        <div class="block block-fill-white">
                            <div class="header">
                                <h2>Paid Room Bookings</h2>
                                <!-- <span class="pull-right"><a href="" type="button" class="btn btn-primary"><i class="icon-fixed-width icon-plus"></i>Add Booking</a> </span>                                        -->
                            </div>
                            <div class="content">

                                <table cellpadding="0" cellspacing="0" width="100%" class="table table-bordered table-striped sortable">
                                    <thead>
                                        <tr>
                                            <th><input type="checkbox" class="checkall"/></th>
                                            <th>Booking No.</th>
                                            <th>Package</th>
                                            <th>Cost</th>
                                            <th>paid Via</th>
                                            <th>Payment Status</th>
                                            <th>Attachment</th>
                                            <th>Actions</th>                                 
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="checkbox" name="checkbox"/></td>             
                                            <td>#165426</td>
                                            <td>Radison Blue</td>
                                            <td>$80.23</td>
                                            <td>Paypal</td>
                                            <td>
                                                <select class="form-control">
                                                    <option>Paid</option>
                                                    <option>Unpaid</option>
                                                </select>
                                            </td>
                                            <td>-</td>
                                            <td>
                                                <select class="form-control">
                                                    <option>Details & Edit</option>
                                                    <option>Invoice</option>
                                                    <option>Send Mail</option>
                                                    <option>Delete</option>
                                                </select>
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