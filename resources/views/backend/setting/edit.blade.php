@extends('backend.layout.master')
@section('content')
        <div class="page-content page-content-white">
            
            <div class="container">        
                
                <div class="row">
                    <!-- Table -->
                    <div class="col-md-12">

                        <div class="block block-fill-white">
                            <div class="header">
                                <!-- <h2>All Update Static Version</h2>
                                <div class="col-md-4">
                                    <select class="form-control">
                                        <option>English</option>
                                        <option>Bangla</option>
                                        <option>Option 3</option>
                                    </select>
                                </div> -->
                                <span class="pull-right"><a href="{{ url()->previous() }}" type="button" class="btn btn-primary">Back</a> </span>

                            </div>
                            <div class="content controls">
                                <form action="{{route('admin.setting.update',$setting->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <!-- <div class="form-row">
                                        <div class="col-md-3">
                                            <img src="img/logob.png"> </div>
                                        <div class="col-md-9">
                                            <button type="button" class="btn btn-info btn-lg">Choose Image</button>
                                        </div>
                                    </div> -->
                                    <div class="form-row">
                                        <div class="col-md-3">Site Title</div>
                                        <div class="col-md-9"><input type="text" class="form-control" name="site_title" value="{{$setting->site_title}}" placeholder="text value"/></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">Header Logo</div>
                                        <div class="col-md-9"><input type="file" class="form-control" name="logo_light"placeholder="text value"/></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">Header Logo Dark</div>
                                        <div class="col-md-9"><input type="file" class="form-control" name="logo_dark"placeholder="text value"/></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">Fav Logo </div>
                                        <div class="col-md-9"><input type="file" class="form-control" name="fav_logo"placeholder="text value"/></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">About Image</div>
                                        <div class="col-md-9"><input type="file" class="form-control" name="about_image1"placeholder="text value"/></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">Subscribe Imgae</div>
                                        <div class="col-md-9"><input type="file" class="form-control" name="sub_image"  placeholder="text value"/></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">About Image Inner</div>
                                        <div class="col-md-9"><input type="file" class="form-control" name="about_image2[]" multiple="multiple" placeholder="text value"/></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">About Title</div>
                                        <div class="col-md-9"><input type="text" class="form-control" name="about_title"value="{{$setting->about_title}}" placeholder="text value"/></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">About Details</div>
                                        <div class="col-md-9"><textarea name="about_details" class="form-control" id="" cols="30" rows="10">{{$setting->about_details}}</textarea></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">About 2nd Details</div>
                                        <div class="col-md-9"><textarea name="about_details2" class="form-control" id="" cols="30" rows="10">{{$setting->about_details2}}</textarea></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">Staffs No</div>
                                        <div class="col-md-9"><input type="number" class="form-control" name="staffs"value="{{$setting->staffs}}" placeholder="Staffs No"/></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">location Image</div>
                                        <div class="col-md-9"><input type="file" class="form-control" name="location_image"  /></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">Footer Text</div>
                                        <div class="col-md-9"><textarea name="footer_text" class="form-control" id="" cols="30" rows="10">{{$setting->footer_text}}</textarea></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">Address</div>
                                        <div class="col-md-9"><input type="text" class="form-control" name="address"value="{{$setting->address}}" placeholder="text value"/></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">Mobile</div>
                                        <div class="col-md-9"><input type="text" class="form-control" name="phone"value="{{$setting->phone}}" placeholder="text value"/></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">Language</div>
                                        <div class="col-md-9">
                                        <select class="form-control" name="language">
                                           <option  value="english" {{($setting->language=='english')?'selected':''}}>English</option>
                                           <option  value="swedish" {{($setting->language=='swedish')?'selected':''}}>Swedish</option>
                                           <option  value="spanish" {{($setting->language=='spanish')?'selected':''}}>Spanish</option>
                                           <option  value="french" {{($setting->language=='french')?'selected':''}}>French</option>
                                           <option  value="german" {{($setting->language=='german')?'selected':''}}>German</option>
                                           <option  value="arabic" {{($setting->language=='arabic')?'selected':''}}>Arabic</option>
                                           <option  value="persian" {{($setting->language=='persian')?'selected':''}}>Persian</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">Email</div>
                                        <div class="col-md-9"><input type="email" class="form-control" name="email"value="{{$setting->email}}" placeholder="text value"/></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">Fax</div>
                                        <div class="col-md-9"><input type="text" class="form-control" name="fax"value="{{$setting->fax}}" placeholder="text value"/></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">Web</div>
                                        <div class="col-md-9"><input type="url" class="form-control" name="web"value="{{$setting->web}}" placeholder="text value"/></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">Facebook</div>
                                        <div class="col-md-9"><input type="url" class="form-control" name="fb"value="{{$setting->fb}}" placeholder="text value"/></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">Twitter</div>
                                        <div class="col-md-9"><input type="url" class="form-control" name="tw"value="{{$setting->tw}}" placeholder="text value"/></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">Instagram</div>
                                        <div class="col-md-9"><input type="url" class="form-control" name="ing"value="{{$setting->ing}}" placeholder="text value"/></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">Linkedin</div>
                                        <div class="col-md-9"><input type="url" class="form-control" name="lin"value="{{$setting->lin}}" placeholder="text value"/></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">Youtube</div>
                                        <div class="col-md-9"><input type="url" class="form-control" name="you"value="{{$setting->you}}" placeholder="text value"/></div>
                                    </div>
                                    <!-- <div class="form-row">
                                        <div class="col-md-3">google plus</div>
                                        <div class="col-md-9"><input type="url" class="form-control" name="go"value="{{$setting->go}}" placeholder="text value"/></div>
                                    </div> -->
                                    <div class="form-row">
                                        <div class="col-md-3">Copyright year</div>
                                        <div class="col-md-9"><input type="text" class="form-control" name="cy"value="{{$setting->cy}}" placeholder="text value"/></div>
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