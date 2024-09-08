@extends('backend.layout.master')
@section('content')
        <div class="page-content page-content-white">
            
            <div class="container">        
                
                <div class="row">
                    <!-- Table -->
                    <div class="col-md-12">

                        <div class="block block-fill-white">
                            <div class="header">
                                <h2>Update Intro Section</h2>
                                <div class="col-md-4 pull-right">
                                    <select class="form-control">
                                        <option>English</option>
                                        <option>Bangla</option>
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
                                    <div class="col-md-3">Intro Primary Title</div>
                                    <div class="col-md-9"><input type="text" class="form-control" value="text value"/></div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3">Intro Secondary Title</div>
                                    <div class="col-md-9"><input type="text" class="form-control" value="text value"/></div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3">Intro Text</div>
                                    <div class="col-md-9"><textarea class="form-control">textarea value</textarea></div>
                                </div>

                                <div class="form-row text-right">
                                    <div class="col-md-12 text-center">
                                        <button type="button" class="btn btn-success btn-lg">Update</button>
                                    </div>
                                </div>                            
                            </div>
                        </div>
                        <div class="block block-fill-white">
                            <div class="header">
                                <h2>Counter Information</h2>
                                <span class="pull-right"><a href="homepage-addcounter.html" type="button" class="btn btn-primary"><i class="icon-fixed-width icon-plus"></i>Add</a> </span>                                       
                            </div>
                            <div class="content">

                                <table cellpadding="0" cellspacing="0" width="100%" class="table table-bordered table-striped sortable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Icon</th>
                                            <th>Title</th>
                                            <th>Amount</th>
                                            <th>Serial Number</th>
                                            <th>Action</th>                  
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>             
                                            <td>
                                                <i class="icon-fixed-width icon-pencil"></i>
                                            </td>
                                            <td>lots of ameneties</td>
                                            <td>550</td>
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