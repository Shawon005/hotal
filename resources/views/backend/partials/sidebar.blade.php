        <div class="page-sidebar">
            <div class="page-navigation-panel logo1">
                <a href="{{route('admin.dashboard')}}"> <img src="{{$setting->logo_light}}" alt="" width="100%"></a>
               
            </div>
            <div class="page-navigation-panel">
                <div class="name">Howdy, Aqvatarius</div>
                <div class="control"><a href="#" class="psn-control"><span class="icon-reorder"></span></a></div>
            </div>            
            <div class="page-navigation-panel search">                                
                <div class="input-group">                        
                    <input type="text" class="form-control" placeholder="Search..."/>
                    <div class="input-group-addon"><span class="icon-search"></span></div>
                </div>                
            </div>
            <ul class="page-navigation">
                <li>
                    <a href="{{route('admin.dashboard')}}">
                        <span class="icon-home"></span> Dashboard
                    </a>
                </li>                            
                <!-- <li>
                    <a href="#"><span class="icon-pencil"></span> Rooms Management</a>
                    <ul>                                    
                        <li><a href="">Settings</a></li>
                        <li><a href="">Coupons</a></li>
                        <li><a href="">Amenities</a></li>
                        <li><a href="">Catagories</a></li>
                        <li><a href="">Rooms</a></li>
                    </ul>                                
                </li> -->
                <!-- <li>
                    <a href="#"><span class="icon-pencil"></span> Room Bookings</a>
                    <ul>                                    
                        <li><a href="">All Bookings</a></li>
                        <li><a href="">Paid Bookings</a></li>
                        <li><a href=""></a>Unpaid Bookings</li>
                    </ul>                                
                </li> -->
                <!-- <li>
                    <a href="#"><span class="icon-pencil"></span> Package Management</a>
                    <ul>                                    
                        <li><a href="">Settings</a></li>
                        <li><a href="">Coupons</a></li>
                        <li><a href="">Catagories</a></li>
                        <li><a href="">Packages</a></li>
                    </ul>                                
                </li> -->
                <!-- <li>
                    <a href="#"><span class="icon-pencil"></span> Package Bookings</a>
                    <ul>                                    
                        <li><a href="">All Bookings</a></li>
                        <li><a href="">Paid Bookings</a></li>
                        <li><a href=""></a>Unpaid Bookings</li>
                    </ul>                                
                </li> -->
                <li>
                    <a href="#"><span class="icon-home"></span> HomePage</a>
                    <ul>
                        <li><a href="{{route('admin.slider.index')}}">Slider Section</a></li>
                        <li><a href="{{route('admin.setting.index')}}">CMS Section</a></li>
                        <li><a href="{{route('admin.service.index')}}">Service Section</a></li>
                        <li><a href="{{route('review.index')}}">Enquery Section from Contact page</a></li>
                        <li><a href="{{route('admin.setting.create')}}">Home Contain</a></li>
                        <li><a href="{{route('admin.gallery.index')}}">Gallery Section</a></li>

                        <!-- <li><a href="">Intro & Counter Section</a></li> -->
                       
                        
                        
                        
                        <!-- <li><a href="">Package Section</a></li> -->
                        
                        <!-- <li><a href="">Testimonial Section</a></li>
                        <li><a href="">Brand Section</a></li>
                        <li><a href="">FAQ Section</a></li>
                        <li><a href="">Sections Hide/Show</a></li>   -->
                                      
                    </ul>
                </li>     
                <li>
                    <a href="#"><span class="icon-shield"></span>Room Magement </a>
                    <ul>
                        <li><a href="{{route('admin.room_category.index')}}">Room Category</a></li>
                        <li><a href="{{route('admin.room.index')}}">Room Section</a></li>
                        <li><a href="{{route('admin.facility.index')}}">Facility Section</a></li>
                        <li><a href="{{route('admin.a_room')}}">Available Room </a></li>
                    </ul>
                </li>       
                <li>
                    <a href="#"><span class="icon-flag-checkered"></span> Booking Management</a>
                    <ul>
                        <li><a href="{{route('admin.booking_room')}}">Today’s Booking </a></li>
                        <li><a href="{{route('booking.index')}}">Total Booking </a></li>
                        <li><a href="{{route('booking.infos')}}">All Booking </a></li>
                        <li><a href="{{route('admin.a_room')}}">Available room </a></li>
                        <li><a href="{{route('booking.index')}}">Booking Extension </a></li>
                        <li><a href="{{route('booking.today_cancle')}}">Today’s Cancelation</a></li>
                        <li><a href="{{route('booking.cancle')}}">Total Cancelation</a></li>
                    </ul>
                </li>         
                <li>
                    <a href="#"><span class="icon-github"></span> Blog Management</a>
                    <ul>
                        <li><a href="{{route('admin.blog_category.index')}}">Category</a></li>
                        <li><a href="{{route('admin.blog_tag.index')}}">Tag</a></li>
                        <li><a href="{{route('admin.blog.index')}}">Blogs</a></li>
                    </ul>
                </li> 
                <li>
                    <a href="#"><span class="icon-food"></span> Restaurant Management</a>
                    <ul>
                        <li><a href="{{route('admin.restaurant.index')}}">Restaurant</a></li>
                        <li><a href="{{route('admin.manu.index')}}">Manu</a></li>
                        <li><a href="{{route('admin.place.index')}}"> Place</a></li>
                    </ul>
                </li> 
                <li>
                    <a href="#"><span class="icon-group"></span>Guest  Management</a>
                    <ul>
                        <li><a href="{{route('booking.guest')}}">Guest Information</a></li> 
                    </ul>
                </li>         
                <li>
                    <a href="#"><span class="icon-cogs"></span>Settings</a>
                    <ul>
                        <li><a href="{{route('admin.language.index')}}"> Language</a></li>
                        <li><a href="#"> Currency</a></li>
                        <li>
                        <a href="#">User</a>
                            <ul>
                                <li><a href="">Admin User</a></li>
                                <li><a href="">Booking User</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                 
               
               
                
                 
                <!-- <li>
                    <a href="#"><span class="icon-file-alt"></span> Gallery</a>
                    <ul>
                        <li><a href="">Categories</a></li>
                        <li><a href="">Images</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><span class="icon-cogs"></span> FAQ Management</a>
                </li>
                <li>
                    <a href="#"><span class="icon-file-alt"></span> Custom Pages</a>
                    <ul>
                        <li><a href="">Create Pages</a></li>
                        <li><a href="">Pages</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><span class="icon-file-alt"></span> Announcement Popup</a>
                    <ul>
                        <li><a href="">Add Popup</a></li>
                        <li><a href="">Popups</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><span class="icon-file-alt"></span> User Management</a>
                    <ul>
                        <li><a href="">Registered Users</a></li>
                        <li><a href="">Subscribers</a></li>
                        <li><a href="">Push Notificaton</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><span class="icon-file-alt"></span> Payment Gateways</a>
                    <ul>
                        <li><a href="">Online Gateways</a></li>
                        <li><a href="">Offline Gateways</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><span class="icon-file-alt"></span> Theme & Home</a>
                </li>
                <li>
                    <a href="#"><span class="icon-file-alt"></span> Drag & Drop Menu Builder</a>
                </li>
                <li>
                    <a href="#"><span class="icon-cogs"></span> Settings</a>
                    <ul>
                        <li><a href="">Favicon</a></li>
                        <li><a href="">Logo</a></li>
                        <li><a href="">Preloader</a></li>
                        <li><a href="">Information</a></li>
                        <li><a href="">Currency</a></li>
                        <li><a href="">Website Appearance</a></li>
                        <li>
                            <a href="">Email Settings</a>
                            <ul>
                                <li><a href="">Mail From Admin</a></li>
                                <li><a href="">Mail To Admin</a></li>
                                <li><a href="">Mail Templates</a></li>
                            </ul>
                        </li>
                        <li><a href="">File Manager</a></li>
                        <li><a href="">Social Links</a></li>
                        <li><a href="">Breadcrumb</a></li>
                        <li><a href="">Page Headings</a></li>
                        <li><a href="">Plugins</a></li>
                        <li><a href="">SEO Informations</a></li>
                        <li><a href="">Maintenance Mood</a></li> 
                        <li><a href="">Cookie Alert</a></li>                      
                        <li><a href="">Footer Logo</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><span class="icon-file-alt"></span> Language Management</a>
                </li>
                <li>
                    <a href="#"><span class="icon-file-alt"></span> Admins Management</a>
                    <ul>
                        <li><a href="">Roles & Permissions</a></li>
                        <li><a href="">Admins</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><span class="icon-file-alt"></span> Site Map</a>
                </li>
                <li>
                    <a href="#"><span class="icon-file-alt"></span> Clear Cache</a>
                </li>
                <li>
                    <a href="#"><span class="icon-file-alt"></span> QR Codes</a>
                    <ul>
                        <li><a href="">Genarate QR Code</a></li>
                        <li><a href="">Saved QR Codes</a></li>
                    </ul>
                </li> -->
                <li>
                    <a href="{{route('admin.logout')}}"><span class="icon-file-alt"></span> Logout</a>
                </li>
                
            </ul>

        </div>