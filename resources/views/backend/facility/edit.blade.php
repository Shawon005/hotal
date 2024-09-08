@extends('backend.layout.master')
@section('content')
        <div class="page-content page-content-white">
            
            <div class="container">        
                
                <div class="row">
                    <!-- Table -->
                    <div class="col-md-12">

                        <div class="block block-fill-white">
                            <div class="header">
                                <h2>Create Facility</h2>

                                <span class="pull-right"><a href="" type="button" class="btn btn-primary">Back</a> </span>

                            </div>
                            <form action="{{route('admin.facility.update',$facility->id)}}" method="post"enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="content controls">
                                    <div class="form-row">
                                        <div class="col-md-3">Icon</div>
                                        <div class="col-md-9">
                                        <input type="file" class="form-control" name="image"/>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">Facility Title</div>
                                        <div class="col-md-9"><input type="text" class="form-control" value="{{$facility->title}}" name="title"/></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">Facility Text</div>
                                        <div class="col-md-9"><textarea class="form-control" name="description"> {{$facility->description}}</textarea></div>
                                    </div>
                                    <div class="form-row text-right">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary btn-lg">Save</button>
                                        </div>
                                    </div>                            
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>            
            
        </div>
@endsection