@extends('backend.layout.master')
@section('content')
        <div class="page-content page-content-white">
            
            <div class="container">        
                
                <div class="row">
                    <!-- Table -->
                    <div class="col-md-12">

                        <div class="block block-fill-white">
                            <div class="content controls">
                                <div class="form-row">
                                    <div class="col-md-3">Title</div>
                                    <div class="col-md-9"><input type="text" class="form-control" value="title"/></div>
                                </div>  
                                <div class="form-row">
                                    <div class="col-md-3">Day No</div>
                                    <div class="col-md-9">
                                        <input id="spinner" class="form-control" name="spinner" value="0"/>
                                    </div>
                                </div> 
                                <div class="block block-fill-white">
                                    <div class="header">
                                        <h2>Plans</h2>
                                    </div>
                                    
                                    <div class="content np">                                
                                        <textarea class="tmce">

                                            <h2>It's a predefined text</h2>
                                            <img src="img/example/example_150x115.jpg" align="right" class="img-thumbnail"/>
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
                                

                                <div class="form-row text-right">
                                    <div class="col-md-12">
                                        <button type="button" class="btn btn-danger btn-lg">Close</button>
                                        <button type="button" class="btn btn-primary btn-lg">Save</button>
                                    </div>
                                </div>                            
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>            
            
        </div>
@endsection