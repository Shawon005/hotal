                <nav id="main_menu" class="mobile_menu navbar-collapse">
                    <ul class="nav navbar-nav">
                        @php $rooms=table_f('room_categories'); @endphp
                        <li class="mobile_menu_title" style="display:none;">{{translate('MENU')}}</li>
                        <li><a href="{{route('home')}}">{{translate('HOME')}}</a></li>
                        <li><a href="{{route('about')}}">{{translate('ABOUT US')}}</a></li>
                        <!-- <li><a href="{{route('room_list')}}">ROOMS</a></li> -->
                        <li class="dropdown simple_menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{translate('ROOMS')}} <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                            <li><a href="{{route('room_list')}}">All Room</a></li>
                                @foreach($rooms as $room)
                                    <li><a href="{{route('room_cat',$room->id)}}">{{translate($room->category_name)}}</a></li>
                                   
                                @endforeach
                            </ul>
                        </li>
                        <li class="dropdown simple_menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{translate('Services')}} <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                            <li><a href="{{route('restaurent')}}">{{translate('Restaurant')}}</a></li>
                            <li><a href="{{route('place')}}">{{translate('Place')}}</a></li>
                            </ul>
                        </li>
                        <!-- <li class=" simple_menu active">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">HOME <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="index.html">Home Version 1</a></li>
                                <li><a href="index2.html">Home Version 2</a></li>
                                <li><a href="index3.html">Home Version 3</a></li>
                                <li><a href="index4.html">Home Version 4</a></li>
                                <li><a href="boxed.html">Boxed Layout</a></li>
                            </ul>
                        </li>
                        <li class="dropdown simple_menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">ROOMS <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="rooms-list.html">Rooms List View</a></li>
                                <li><a href="rooms-grid.html">Rooms Grid View</a></li>
                                <li><a href="rooms-block.html">Rooms Block View</a></li>
                                <li><a href="room.html">Room Details 1</a></li>
                                <li><a href="room2.html">Room Details 2</a></li>
                            </ul>
                        </li>
                        <li class="dropdown mega_menu mega_menu_fullwidth"><a href="#" data-toggle="dropdown" class="dropdown-toggle" aria-expanded="true">PAGES <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="mega_menu_inner">
                                        <div class="row">
                                            <ul class="col-md-3">
                                                <li class="list_title">PAGES</li>
                                                <li><a href="gallery.html">Gallery 4 Columns</a></li>
                                                <li><a href="gallery-3columns.html">Gallery 3 Columns</a></li>
                                                <li><a href="gallery-2columns.html">Gallery 2 Columns</a></li>
                                                <li><a href="gallery-withoutdetails.html">Gallery Without Details</a></li>
                                                <li><a href="gallery-withoutfilters.html">Gallery Without Filters</a></li>
                                                <li><a href="gallery-slider.html">Gallery Slider</a></li>
                                                <li><a href="gallery2.html">Gallery Version 2</a></li>
                                            </ul>
                                            <ul class="col-md-3">
                                                <li class="list_title">PAGES</li>
                                                <li><a href="contact2.html">Contact Us Version 2</a></li>
                                                <li><a href="about-us.html">About Us</a></li>
                                                <li><a href="404.html">404 Page Version 1</a></li>
                                                <li><a href="404-v2.html">404 Page Version 2</a></li>
                                                <li><a href="coming-soon.html">Coming Soon</a></li>
                                                <li><a href="location.html">Our Location</a></li>
                                                <li><a href="restaurant.html">Our Restaurant</a></li>
                                            </ul>
                                            <ul class="col-md-3">
                                                <li class="list_title">PAGES</li>
                                                <li><a href="blog-post.html">Blog Details 1</a></li>
                                                <li><a href="blog-post2.html">Blog Details 2</a></li>
                                                <li><a href="places.html">Places</a></li>
                                                <li><a href="place-details.html">Place Details</a></li>
                                                <li><a href="events.html">Events</a></li>
                                                <li><a href="event-details.html">Event Details</a></li>
                                                <li><a href="spa.html">Our Spa</a></li>
                                            </ul>
                                            <ul class="col-md-3">
                                                <li class="list_title">MORE PAGES</li>
                                                <li><a href="loading.html">Loading Page </a></li>
                                                <li><a href="loading2.html">Loading Page 2</a></li>
                                                <li><a href="loading3.html">Loading Page 3</a></li>
                                                <li><a href="full-width.html">Full Width Page</a></li>
                                                <li><a href="right-sidebar.html">Right Sidebar Page</a></li>
                                                <li><a href="left-sidebar.html">Left Sidebar Page</a></li>
                                                <li><a href="our-staff.html">Our Staff</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown simple_menu"><a href="#" data-toggle="dropdown" class="dropdown-toggle" aria-expanded="true">ELEMENTS <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="typography.html">Typography</a></li>
                                <li><a href="buttons.html">Buttons</a></li>
                                <li><a href="icons.html">Icons</a></li>
                            </ul>
                        </li> -->
                        <li><a href="{{route('blog_list')}}">{{translate('BLOG')}}</a></li>
                        
                        <li><a href="{{route('contact')}}">{{translate('CONTACT US')}}</a></li>
                       
                        <li class="menu_button">
                            <a href="{{route('booking')}}" class="button  btn_yellow"><i class="fa fa-calendar"></i>{{translate('BOOK ONLINE')}}</a>
                        </li>
                    </ul>
                </nav>