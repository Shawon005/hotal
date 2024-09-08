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
                                <span class="pull-right"><a type="button" class="btn btn-primary">Back</a> </span>                                         
                            </div>
                            
                            <div class="content">
                                <div class="form-row">
                                    <div class="col-md-3">Featured Image:</div>
                                    <div class="col-md-9">
                                        <div class="input-group file">                                    
                                            <input type="text" class="form-control"/>
                                            <input type="file" name="file"/>
                                            <span class="input-group-btn">
                                                <button class="btn btn-primary" type="button">Browse</button>
                                            </span>
                                        </div>                                
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3">Slider Image:</div>
                                    <div class="col-md-9">
                                        <div class="input-group file">                                    
                                            <input type="text" class="form-control"/>
                                            <input type="file" name="file"/>
                                            <span class="input-group-btn">
                                                <button class="btn btn-primary" type="button">Browse</button>
                                            </span>
                                        </div>                                
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3">Multiple:</div>
                                    <div class="col-md-9">
                                        <select class="form-control">
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                            <option>Option 4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3">Rent/Night(In USD)</div>
                                    <div class="col-md-9">
                                        <input id="spinner2" class="form-control" name="spinner" value="0"/>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3">Quantity</div>
                                    <div class="col-md-9">
                                        <input id="spinner" class="form-control" name="spinner" value="0"/>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3">Beds</div>
                                    <div class="col-md-9">
                                        <input id="spinner" class="form-control" name="spinner" value="0"/>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3">Baths</div>
                                    <div class="col-md-9">
                                        <input id="spinner" class="form-control" name="spinner" value="0"/>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3">Max.Guests</div>
                                    <div class="col-md-9">
                                        <input id="spinner" class="form-control" name="spinner" value="0"/>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3">Latitude</div>
                                    <div class="col-md-9"><input type="text" class="form-control" value="Enter Latitude for Map"/></div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3">Longitude</div>
                                    <div class="col-md-9"><input type="text" class="form-control" value="Enter Longitude for Map"/></div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3">Address</div>
                                    <div class="col-md-9"><input type="text" class="form-control" value="Enter Address"/></div>
                                </div>             
                                <div class="form-row">
                                    <div class="col-md-3">Phone</div>
                                    <div class="col-md-9"><input type="tel" class="form-control" value="Enter Phone"/></div>
                                </div>
                            </div>
                        </div>
                        <div class="block block-fill-white">
                            <div class="header">
                                <h2>Room Details</h2>                                
                            </div>

                            <div class="form-row">
                                <div class="col-md-3">Choose Language</div>
                                <div class="col-md-9">
                                    <select class="form-control">
                                        <option>Englisg</option>
                                        <option>Hindi</option>
                                    </select>
                                </div>
                            </div>
                            <div class="content controls">
                                <div class="form-row">
                                    <div class="col-md-3">Room Title</div>
                                    <div class="col-md-9"><input type="text" class="form-control" value="title"/></div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3">Room Category</div>
                                    <div class="col-md-9">
                                        <select class="form-control">
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                            <option>Option 4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3">Checkbox:</div>
                                    <div class="col-md-9">
                                        <div class="checkbox-inline">
                                            <label><input type="checkbox" name="check_ex1"/> Free Wifi</label>
                                        </div>
                                        <div class="checkbox-inline">
                                            <label><input type="checkbox" name="check_ex1"/> Family Room</label>
                                        </div>
                                        <div class="checkbox-inline">
                                            <label><input type="checkbox" name="check_ex1"/> Parkings</label>
                                        </div>
                                        <div class="checkbox-inline">
                                            <label><input type="checkbox" name="check_ex1"/> Non Smoking Rooms</label>
                                        </div>
                                        <div class="checkbox-inline">
                                            <label><input type="checkbox" name="check_ex1"/> Gym</label>
                                        </div>
                                        <div class="checkbox-inline">
                                            <label><input type="checkbox" name="check_ex1"/> Pet Allowed</label>
                                        </div>
                                        <div class="checkbox-inline">
                                            <label><input type="checkbox" name="check_ex1"/> Tea/Coffie Maker in all Rooms</label>
                                        </div>                                
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3">Summary</div>
                                    <div class="col-md-9"><textarea class="form-control">Enter Summery</textarea></div>
                                </div>    
                                <div class="form-row">
                                    <div class="col-md-3">Room Descriptions</div>
                                    <div class="col-md-9"><textarea class="form-control">Enter Description</textarea></div>
                                </div>
                                <div class="form-row text-center">
                                    <div class="col-md-12">
                                        <button type="button" class="btn btn-info btn-lg">Save</button>
                                    </div>
                                </div>                            
                            </div>
                        </div>
                  
                    </div>


                </div>
                
            </div>            
            
        </div>
 @endsection