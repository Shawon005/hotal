@extends('backend.layout.master')
@section('content')
        <div class="page-content page-content-white">
            
            <div class="container">        
            @if(session('message'))
                <div class="alert alert-success">
                    <span class="close" data-dismiss="alert"></span>
                    <strong>{{session('message')}}</strong>
                </div>
                 @endif
                <div class="row">
                    <!-- Table -->
                    <div class="col-md-12">

                     

                        <div class="block block-fill-white">
                            <div class="header">
                                <h2>Facilities</h2>
                                
                            </div>
                            <div class="content">

                                <table cellpadding="0" cellspacing="0" width="100%" class="table table-bordered table-striped sortable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Main Text</th>
                                            <th>English</th>
                                            <th>Swedish</th>
                                            <th>Spanish</th>  
                                            <th>German</th>                  
                                            <th>Arabic</th>  
                                            <th>Persian</th>  
                                            <th>French</th>
                                            <th>Action</th>  
                                        </tr>
                                    </thead>
                                    <tbody>
                                      
                                        @foreach($language as $id=>$lang)
                                       
                                        <tr>
                                            <td>{{$id+1}}</td>         
                                            <td>{{$lang->main_text}}</td>    
                                            <td>{{$lang->english}}</td>
                                            <td>{{$lang->swedish}}</td>
                                            <td>{{$lang->spanish}}</td>
                                            <td>{{$lang->german}}</td>
                                            <td>{{$lang->arabic}}</td>
                                            <td>{{$lang->persian}}</td>
                                            <td>{{$lang->french}}</td>
                                            <td>
                                                <a type="button" class="btn btn-info" href="{{route('admin.language.edit',$lang->id)}}"><i class="icon-fixed-width icon-pencil"></i></a> 
                                              
                                            </td>
                                        </tr>
                                           @endforeach                             
                                    </tbody>
                                </table>                                        

                            </div>
                        </div>
                        
                    </div>
                </div>
                
            </div>            
            
        </div>
@endsection