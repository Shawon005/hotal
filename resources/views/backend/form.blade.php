

@extends('backend.layout.master')
@section('content')
        <div class="page-content page-content-white">
            
            <div class="container">        
                
                <div class="row">
                    <div class="col-md-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>                    
                            <li><a href="#">Components</a></li>
                            <li><a href="#">Layouts</a></li>
                            <li class="active">White layout</li>
                        </ol>
                    </div>                
                    
                    <div class="col-md-12">
               
                        <div class="block block-fill-white">
                            <div class="header">
                                <h2>Default elements</h2>
                            </div>
                            <div class="content controls">
                                <div class="form-row">
                                    <div class="col-md-3">Text:</div>
                                    <div class="col-md-9"><input type="text" class="form-control" value="text value"/></div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3">Password:</div>
                                    <div class="col-md-9"><input type="password" class="form-control" value="password value"/></div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3">Readonly:</div>
                                    <div class="col-md-9"><input type="text" readonly="readonly" class="form-control" value="Some readonly value"/></div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3">Disabled:</div>
                                    <div class="col-md-9"><input type="text" disabled="disabled" class="form-control" value="Some disabled value"/></div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3">Placeholder:</div>
                                    <div class="col-md-9"><input type="text" class="form-control" placeholder="Placeholder"/></div>
                                </div>                                        
                                <div class="form-row">
                                    <div class="col-md-3">Textarea:</div>
                                    <div class="col-md-9"><textarea class="form-control">textarea value</textarea></div>
                                </div>                        
                                <div class="form-row">
                                    <div class="col-md-3">Default:</div>
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
                                    <div class="col-md-3">Multiple:</div>
                                    <div class="col-md-9">
                                        <select class="form-control" multiple="multiple">
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                            <option>Option 4</option>
                                        </select>
                                    </div>
                                </div>                        
                            </div>
                        </div>                
                        
                        <div class="block block-fill-white">
                            <div class="header">
                                <h2>Checkbox, radio and file fields</h2>
                            </div>
                            <div class="content controls">
                                <div class="form-row">
                                    <div class="col-md-3">Checkbox:</div>
                                    <div class="col-md-9">
                                        <div class="checkbox-inline">
                                            <label><input type="checkbox" name="check_ex1"/> Default</label>
                                        </div>
                                        <div class="checkbox-inline">
                                            <label><input type="checkbox" name="check_ex2" checked="checked"/> Checked</label>
                                        </div>                                
                                        <div class="checkbox-inline">
                                            <label><input type="checkbox" name="check_ex1" disabled="disabled"/> Disabled</label>
                                        </div>
                                        <div class="checkbox-inline">
                                            <label><input type="checkbox" name="check_ex1" disabled="disabled" checked="checked"/> Disabled checked</label>
                                        </div>                                
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3">Radio:</div>
                                    <div class="col-md-9">
                                        <div class="radiobox-inline">
                                            <label><input type="radio" name="radio_ex1"/> Default</label>
                                        </div>
                                        <div class="radiobox-inline">
                                            <label><input type="radio" name="radio_ex1" checked="checked"/> Checked</label>
                                        </div>
                                        <div class="radiobox-inline">
                                            <label><input type="radio" name="radio_ex2" disabled="disabled"/> Disabled</label>
                                        </div>
                                        <div class="radiobox-inline">
                                            <label><input type="radio" name="radio_ex2" disabled="disabled" checked="checked"/> Disabled checked</label>
                                        </div>                                
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3">File:</div>
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
                            </div>
                        </div>                
                        
                        <div class="block block-fill-white">
                            <div class="header">
                                <h2>Switch</h2>
                            </div>
                            <div class="content controls">
                                <div class="form-row">
                                    <div class="col-md-3">Checkbox:</div>
                                    <div class="col-md-9">
                                        <input type="checkbox" class="ibutton" name="eic_2" checked="checked"/>
                                        <input type="checkbox" class="ibutton" name="eic_1"/>                                
                                        <input type="checkbox" class="ibutton" name="eic_4" disabled="disabled" checked="checked"/>
                                        <input type="checkbox" class="ibutton" name="eic_3" disabled="disabled"/>                                
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3">Radio:</div>
                                    <div class="col-md-9">
                                        <input type="radio" class="ibutton" name="eir_1" checked="checked"/>
                                        <input type="radio" class="ibutton" name="eir_1"/>                                
                                        <input type="checkbox" class="ibutton" name="eir_3" disabled="disabled" checked="checked"/>                                
                                        <input type="radio" class="ibutton" name="eir_1" disabled="disabled"/>                                
                                    </div>
                                </div>
                            </div>
                        </div>                
                        
                        <div class="block block-fill-white">
                            <div class="header">
                                <h2>Spinner</h2>
                            </div>
                            <div class="content controls">
                                <div class="form-row">
                                    <div class="col-md-3">Default:</div>
                                    <div class="col-md-9">
                                        <input id="spinner" class="form-control" name="spinner" value="0"/>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3">Decimal:</div>
                                    <div class="col-md-9">
                                        <input id="spinner2" class="form-control" name="spinner" value="0"/>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3">Currency:</div>
                                    <div class="col-md-9">
                                        <input id="spinner3" class="form-control" name="spinner" value="0"/>
                                    </div>
                                </div>                        
                            </div>
                        </div>                
                        
                        <div class="block block-fill-white">
                            <div class="header">
                                <h2>Select2 plugin</h2>
                            </div>
                            <div class="content controls">
                                <div class="form-row">
                                    <div class="col-md-3">Default:</div>
                                    <div class="col-md-9">
                                        
                                        <select class="select2" style="width: 100%;" tabindex="-1">
                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                <option value="AK">Alaska</option>
                                                <option value="HI">Hawaii</option>
                                            </optgroup>
                                            <optgroup label="Pacific Time Zone">
                                                <option value="CA">California</option>
                                                <option value="NV">Nevada</option>
                                                <option value="OR">Oregon</option>
                                                <option value="WA">Washington</option>
                                            </optgroup>
                                            <optgroup label="Mountain Time Zone">
                                                <option value="AZ">Arizona</option>
                                                <option value="CO">Colorado</option>
                                                <option value="ID">Idaho</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="UT">Utah</option>
                                                <option value="WY">Wyoming</option>
                                            </optgroup>
                                            <optgroup label="Central Time Zone">
                                                <option value="AL">Alabama</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Missouri</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="SD">South Dakota</option>
                                                <option value="TX">Texas</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="WI">Wisconsin</option>
                                            </optgroup>
                                            <optgroup label="Eastern Time Zone">
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="IN">Indiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">Massachusetts</option>
                                                <option value="MI">Michigan</option>
                                                <option value="NH">New Hampshire</option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">North Carolina</option>
                                                <option value="OH">Ohio</option>
                                                <option value="PA">Pennsylvania</option>
                                                <option value="RI">Rhode Island</option>
                                                <option value="SC">South Carolina</option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WV">West Virginia</option>
                                            </optgroup>
                                        </select>                                
                                        
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3">Multiple:</div>
                                    <div class="col-md-9">
                                        
                                        <select class="select2" multiple="multiple" style="width: 100%;" tabindex="-1">
                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                <option value="AK" selected="selected">Alaska</option>
                                                <option value="HI">Hawaii</option>
                                            </optgroup>
                                            <optgroup label="Pacific Time Zone">
                                                <option value="CA">California</option>
                                                <option value="NV" selected="selected">Nevada</option>
                                                <option value="OR">Oregon</option>
                                                <option value="WA" selected="selected">Washington</option>
                                            </optgroup>
                                            <optgroup label="Mountain Time Zone">
                                                <option value="AZ">Arizona</option>
                                                <option value="CO">Colorado</option>
                                                <option value="ID">Idaho</option>
                                                <option value="MT" selected="selected">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="UT">Utah</option>
                                                <option value="WY">Wyoming</option>
                                            </optgroup>
                                            <optgroup label="Central Time Zone">
                                                <option value="AL">Alabama</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Missouri</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="SD">South Dakota</option>
                                                <option value="TX">Texas</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="WI">Wisconsin</option>
                                            </optgroup>
                                            <optgroup label="Eastern Time Zone">
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="IN">Indiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">Massachusetts</option>
                                                <option value="MI">Michigan</option>
                                                <option value="NH">New Hampshire</option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">North Carolina</option>
                                                <option value="OH">Ohio</option>
                                                <option value="PA">Pennsylvania</option>
                                                <option value="RI">Rhode Island</option>
                                                <option value="SC">South Carolina</option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WV">West Virginia</option>
                                            </optgroup>
                                        </select>                                
                                        
                                    </div>
                                </div>                        
                            </div>
                        </div>
                        
                        <div class="block block-fill-white">
                            <div class="header">
                                <h2>Tags Input</h2>
                            </div>
                            <div class="content controls">
                                <div class="form-row">
                                    <div class="col-md-3">Default:</div>
                                    <div class="col-md-9">                                                    
                                        <input type="text" class="tags" value="jQuery,HTML,CSS,PHP,Java"/>
                                    </div>
                                </div>                                             
                            </div>
                        </div>
                        
                        <div class="block block-fill-white">
                            <div class="header">
                                <h2>Date picker </h2>
                            </div>
                            <div class="content controls">
                                <div class="form-row">
                                    <div class="col-md-3">Date:</div>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <div class="input-group-addon"><span class="icon-calendar-empty"></span></div>
                                            <input type="text" class="datepicker form-control" value="09/15/2013"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3">Multiple:</div>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <div class="input-group-addon"><span class="icon-calendar"></span></div>
                                            <input type="text" class="mdatepicker form-control" value="09/15/2013"/>
                                        </div>
                                    </div>
                                </div>                        
                            </div>
                        </div>
                        <div class="block block-fill-white">
                            <div class="header">
                                <h2>Time picker</h2>
                            </div>
                            <div class="content controls">
                                <div class="form-row">
                                    <div class="col-md-3">Time:</div>
                                    <div class="col-md-9">                                                    
                                        <div class="input-group">
                                            <div class="input-group-addon"><span class="icon-time"></span></div>
                                            <input type="text" class="timepicker form-control" value="12:17"/>
                                        </div>                                                                
                                    </div>
                                </div>                        
                                <div class="form-row">
                                    <div class="col-md-3">Date and time:</div>
                                    <div class="col-md-9">                                                    
                                        <div class="input-group">
                                            <div class="input-group-addon"><span class="icon-globe"></span></div>
                                            <input type="text" class="datetimepicker form-control" value="09/15/2013 12:17"/>
                                        </div>                                                                                                
                                    </div>
                                </div>                        
                            </div>
                        </div>                
                        <div class="block block-fill-white">
                            <div class="header">
                                <h2>Slider</h2>
                            </div>
                            <div class="content controls">
                                <div class="form-row">
                                    <div class="col-md-3">Default:</div>
                                    <div class="col-md-9">                                                    
                                        <div class="slider_example"></div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3">Range:</div>
                                    <div class="col-md-9">                                                    
                                        <div class="slider_example2"></div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3">Vertical:</div>
                                    <div class="col-md-9">                                            
                                        <div class="slider_example3" style="height: 150px;"></div>
                                        <div class="slider_example4" style="height: 150px;"></div>
                                    </div>
                                </div>                        
                            </div>
                        </div>                
                                         
                    </div>

                    <div class="col-md-9">
                        
                        <div class="block block-fill-white">
                            <div class="header">
                                <h2>Page Edit</h2>
                                <div class="pull-right">
                                    <button class="btn btn-success"><span class="icon-plus"></span> Add New</button>
                                </div>
                            </div>
                            <div class="content controls">
                                <div class="form-row">
                                    <div class="col-md-3">Page Title:</div>
                                    <div class="col-md-9">
                                        <input type="text" value="Lorem ipsum dolor sit" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3">
                                        Page Alias:
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" value="lorem-ipsum-dolor-sit" class="form-control"/>
                                    </div>
                                </div>                                
                            </div>
                            <div class="content np">                                
                                <textarea class="tmce">

                                    <h2>It's a predefined text</h2>
                                    <img src="{{asset('')}}backend/img/example/example_150x115.jpg" align="right" class="img-thumbnail"/>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <ul class="blue">
                                        <li>But also the leap into electronic typesetting</li>
                                        <li>It was popularised in the 1960s</li>
                                        <li>Galley of type and scrambled it to make</li>
                                        <li>Lorem Ipsum passages, and more</li>
                                    </ul>
                                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <table align="right" cellpadding="0" cellspacing="0">                            
                                        <thead>
                                            <tr>
                                                <th scope="col">Lorem Ipsum passages</th>
                                                <th scope="col">It has survived not</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Galley of type</td>
                                                <td>Scrambled it to make</td>
                                            </tr>
                                            <tr>
                                                <td>It was popularised in the</td>
                                                <td>remaining essentially unchanged</td>
                                            </tr>
                                        </tbody>
                                    </table>                                
                                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>                            
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                                    <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>

                                </textarea>                                
                            </div>
                        </div>
                        
                        <div class="block block-fill-white">
                            <div class="header">
                                <h2>Discussion</h2>                                
                            </div>
                            <div class="content controls">
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="checkbox">
                                            <input type="checkbox" checked="checked"/> Allow comments.
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="checkbox">
                                            <input type="checkbox"/> Allow somethink else on this page.
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                            
                    </div>
                    <div class="col-md-3">
                        <div class="block block-fill-white">
                            <div class="header">
                                <h2>Publish</h2>
                                <div class="pull-right">
                                    <button class="btn btn-default"><span class="icon-eye-open"></span> Preview</button>
                                </div>
                            </div>
                            <div class="content controls">
                                <div class="form-row">
                                    <div class="col-md-12">Status: <strong>Published</strong></div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12">Visibility: <strong>Public</strong></div>
                                </div>                                
                                <div class="form-row">
                                    <div class="col-md-4">Published on:</div>
                                    <div class="col-md-8"><input type="text" class="form-control datepicker" value="11/17/2013"/></div>
                                </div>                                
                                <div class="form-row">
                                    <div class="col-md-8">
                                        <button class="btn btn-warning"><span class="icon-trash"></span> Trash</button>
                                    </div>
                                    <div class="col-md-4"><button class="btn btn-info btn-block"><span class="icon-refresh"></span> Update</button></div>
                                </div>                                                                
                            </div>    
                        </div>
                        
                        <div class="block block-fill-white">
                            <div class="header">
                                <h2>Page Attributes</h2>
                            </div>
                            <div class="content controls">
                                <div class="form-row">
                                    <div class="col-md-4">Parent:</div>
                                    <div class="col-md-8">
                                        <select class="form-control">
                                            <option>(no parent)</option>
                                            <option>Category 1</option>
                                            <option>Category 2</option>
                                            <option>Category 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4">Template:</div>
                                    <div class="col-md-8">
                                        <select class="form-control">
                                            <option>Default Template</option>
                                            <option>Template 1</option>
                                            <option>Template 2</option>
                                            <option>Template 3</option>
                                        </select>                                        
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4">Order:</div>
                                    <div class="col-md-8"><input type="text" class="form-control" value="1"/></div>
                                </div>                                
                                <div class="form-row">
                                    <div class="col-md-4">Author:</div>
                                    <div class="col-md-8">
                                        <select class="form-control">
                                            <option>Administrator</option>
                                            <option>Manager</option>
                                            <option>Someone else</option>
                                            <option>Visitor</option>
                                        </select>                                        
                                    </div>
                                </div>                                
                            </div>
                        </div>
                        
                        <div class="block block-fill-white">
                            <div class="content controls">
                                <div class="form-row">
                                    <div class="col-md-4">Article ID:</div>
                                    <div class="col-md-8"><strong>999</strong></div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4">Hits:</div>
                                    <div class="col-md-8"><strong>1,999</strong></div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4">Modified:</div>
                                    <div class="col-md-8"><strong>Today, 17 october 2013</strong></div>
                                </div>                                
                            </div>
                        </div>
                        
                    </div>
                </div>
                
            </div>            
            
        </div>
@endsection   
    
   