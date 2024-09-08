        <footer>
        @php $setting=setting(); @endphp
            <div class="inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 widget">
                            <div class="about">
                                <a href="{{route('home')}}"><img class="logo" src="{{$setting->logo_dark}}" width="150" height="50" alt="Logo"></a>
                                <p>{{translate($setting->footer_text)}}</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 widget">
                            <h5>{{translate('Latest News')}}</h5>
                            @php $blogs=table_f('blogs'); @endphp
                            <ul class="blog_posts">
                                    @foreach($blogs as $blog)
                                <li><a href="{{route('blog',$blog->id)}}">{{translate($blog->blog_title)}}</a> <small>{{dateFormatconverter($blog->blog_cdt)}}</small></li>
                                <!-- <li><a href="blog-post.html">Hotel Zante in pictures</a> <small>AUGUST 16, 2017</small></li>
                                <li><a href="blog-post.html">Hotel Zante family party</a> <small>SEPTEMBER 15, 2017</small></li> -->
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-6 widget">
                            <h5>{{translate('Useful Links')}}</h5>
                            <ul class="useful_links">
                                <li><a href="{{route('about')}}">{{translate('About us')}}</a></li>
                                <li><a href="{{route('contact')}}">{{translate('Contact us')}}</a></li>
                                <!-- <li><a href="#">History</a></li> -->
                                <li><a href="{{route('gallery')}}">{{translate('Gallery')}}</a></li>
                                <!-- <li><a href="#">Location</a></li> -->
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-6 widget">
                            <h5>{{translate('Contact Us')}}</h5>
                            <address>
								<ul class="address_details">
									<li><i class="glyphicon glyphicon-map-marker"></i> {{$setting->address}}</li>
									<li><i class="glyphicon glyphicon-phone-alt"></i> Phone: {{$setting->phone}} </li>
									<li><i class="fa fa-fax"></i> Fax: {{$setting->fax}}</li>
									<li><i class="fa fa-envelope"></i> Email: <a href="mailto:{{$setting->email}}">{{$setting->email}}</a></li>
								</ul>
							</address>
                        </div>
                    </div>
                </div>
            </div>
            <div class="subfooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="copyrights">
                                 Copyright {{$setting->cy}} <a href="{{route('home')}}">{{translate($setting->site_title)}}</a> {{translate('All Rights Reserved')}}.
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="social_media">
                                <a class="facebook" data-original-title="Facebook" data-toggle="tooltip" href="{{$setting->fb}}"><i class="fa fa-facebook"></i></a>
                                <a class="twitter" data-original-title="Twitter" data-toggle="tooltip" href="{{$setting->tw}}"><i class="fa fa-twitter"></i></a>
                                <!-- <a class="googleplus" data-original-title="Google Plus" data-toggle="tooltip" href="{{$setting->go}}"><i class="fa fa-google-plus"></i></a> -->
                                <a class="youtube" data-original-title="Youtube" data-toggle="tooltip" href="{{$setting->you}}"><i class="fa fa-youtube"></i></a>
                                <a class="linkedin" data-original-title="Linkedin" data-toggle="tooltip" href="{{$setting->lin}}"><i class="fa fa-linkedin"></i></a>
                                <a class="instagram" data-original-title="Instagram" data-toggle="tooltip" href="{{$setting->ing}}"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>