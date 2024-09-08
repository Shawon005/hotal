@extends('backend.layout.master')
@section('content')
        <div class="page-content page-content-white">
            
            <div class="container">        
                
                <div class="row">
                    <!-- Table -->
                    <div class="col-md-12">

                        <div class="block block-fill-white">
                            <div class="header">
                             
                                <span class="pull-right"><a href="{{ url()->previous() }}" type="button" class="btn btn-primary">Back</a> </span>

                            </div>
                            <div class="content controls">
                                <form action="{{route('admin.language.update',$language->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                  
                                    <div class="form-row">
                                        <div class="col-md-3">Main Text</div>
                                        <div class="col-md-9"><input type="text" class="form-control" name="main_text" value="{{$language->main_text}}" readonly/></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">Engish</div>
                                        <div class="col-md-9"><input type="text" class="form-control" name="english" value="{{$language->english}}" placeholder="text value"/></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">Swedish</div>
                                        <div class="col-md-9"><input type="text" class="form-control" name="swedish" value="{{$language->swedish}}" placeholder="text value"/></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">Spanish</div>
                                        <div class="col-md-9"><input type="text" class="form-control" name="spanish" value="{{$language->spanish}}" placeholder="text value"/></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">French</div>
                                        <div class="col-md-9"><input type="text" class="form-control" name="french" value="{{$language->french}}" placeholder="text value"/></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">German</div>
                                        <div class="col-md-9"><input type="text" class="form-control" name="german" value="{{$language->german}}" placeholder="text value"/></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">Arabic</div>
                                        <div class="col-md-9"><input type="text" class="form-control" name="arabic" value="{{$language->arabic}}" placeholder="text value"/></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">Persian</div>
                                        <div class="col-md-9"><input type="text" class="form-control" name="persian" value="{{$language->persian}}" placeholder="text value"/></div>
                                    </div>
                                
                                    <div class="form-row text-right">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary btn-lg">save</button>
                                        </div>
                                    </div>  
                                </form>                          
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>            
            
        </div>
@endsection