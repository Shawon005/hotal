
@extends('frontend.layout.master2')
@section('content') 
        <!-- =========== PAGE TITLE ========== -->
        <div class="page_title gradient_overlay" style="background: url({{asset('')}}frontend/images/page_title_bg.jpg);">
            <div class="container">
                <div class="inner"> 
                    <h1>Hotel Zante Events</h1>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li>Hotel Zante Events</li>
                    </ol>
                </div>
            </div>
        </div>

        <!-- ========== MAIN ========== -->
        <main id="events_page">
            <div class="container">
                
                <!-- ITEM -->
                <div class="item">
                    <div class="row">
                        <div class="col-lg-2 col-md-1">
                            <div class="time-from">
                                <div class="date"> 30</div>
                                <div class="month"> May</div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="event-wrapper">
                                <h5> <a href="event-details.html">Hotel Zante family party</a></h5>
                                <div class="meta">
                                    <div class="time"> <i class="fa fa-clock-o"></i> 8:00 am - 5:00 pm</div>
                                    <div class="location"> <i class="fa fa-map-marker"></i> Zakynthos, Greece</div>
                                </div>
                                <div class="description">
                                    <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris itae erat conuat</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5">
                            <div class="image">
                                <a href="event-details.html" class="hover_effect h_blue h_link">
                                    <img src="{{asset('')}}frontend/images/events/event1.jpg" class="img-responsive" alt="Image">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ITEM -->
                <div class="item">
                    <div class="row">
                        <div class="col-lg-2 col-md-1">
                            <div class="time-from">
                                <div class="date"> 16</div>
                                <div class="month"> August</div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="event-wrapper">
                                <h5> <a href="event-details.html">Wedding John  & Ina</a></h5>
                                <div class="meta">
                                    <div class="time"> <i class="fa fa-clock-o"></i> 11:30 am - 4:00 pm</div>
                                    <div class="location"> <i class="fa fa-map-marker"></i> Zakynthos, Greece</div>
                                </div>
                                <div class="description">
                                    <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris itae erat conuat</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5">
                            <div class="image">
                                <a href="event-details.html" class="hover_effect h_blue h_link">
                                    <img src="{{asset('')}}frontend/images/events/event2.jpg" class="img-responsive" alt="Image">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ITEM -->
                <div class="item">
                    <div class="row">
                        <div class="col-lg-2 col-md-1">
                            <div class="time-from">
                                <div class="date"> 10 </div>
                                <div class="month"> September</div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="event-wrapper">
                                <h5> <a href="event-details.html">Music Party</a></h5>
                                <div class="meta">
                                    <div class="time"> <i class="fa fa-clock-o"></i> 11:00 am - 3:00 pm</div>
                                    <div class="location"> <i class="fa fa-map-marker"></i> Zakynthos, Greece</div>
                                </div>
                                <div class="description">
                                    <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris itae erat conuat</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5">
                            <div class="image">
                                <a href="event-details.html" class="hover_effect h_blue h_link">
                                    <img src="{{asset('')}}frontend/images/events/event3.jpg" class="img-responsive" alt="Image">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ITEM -->
                <div class="item">
                    <div class="row">
                        <div class="col-lg-2 col-md-1">
                            <div class="time-from">
                                <div class="date">23 </div>
                                <div class="month"> December</div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="event-wrapper">
                                <h5> <a href="event-details.html">Birthday Party</a></h5>
                                <div class="meta">
                                    <div class="time"> <i class="fa fa-clock-o"></i> 10:00 am - 2:00 pm</div>
                                    <div class="location"> <i class="fa fa-map-marker"></i> Zakynthos, Greece</div>
                                </div>
                                <div class="description">
                                    <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris itae erat conuat</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5">
                            <div class="image">
                                <a href="event-details.html" class="hover_effect h_blue h_link">
                                    <img src="{{asset('')}}frontend/images/events/event4.jpg" class="img-responsive" alt="Image">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ITEM -->
                <div class="item">
                    <div class="row">
                        <div class="col-lg-2 col-md-1">
                            <div class="time-from">
                                <div class="date"> 30</div>
                                <div class="month"> January</div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="event-wrapper">
                                <h5> <a href="event-details.html">Pool Party</a></h5>
                                <div class="meta">
                                    <div class="time"> <i class="fa fa-clock-o"></i> 9:00 am - 1:00 pm</div>
                                    <div class="location"> <i class="fa fa-map-marker"></i> Zakynthos, Greece</div>
                                </div>
                                <div class="description">
                                    <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris itae erat conuat</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5">
                            <div class="image">
                                <a href="event-details.html" class="hover_effect h_blue h_link">
                                    <img src="{{asset('')}}frontend/images/events/event5.jpg" class="img-responsive" alt="Image">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ITEM -->
                <div class="item">
                    <div class="row">
                        <div class="col-lg-2 col-md-1">
                            <div class="time-from">
                                <div class="date"> 15</div>
                                <div class="month"> February</div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="event-wrapper">
                                <h5> <a href="event-details.html">20 Years Hotel Zante</a></h5>
                                <div class="meta">
                                    <div class="time"> <i class="fa fa-clock-o"></i> 8:00 am - 8:00 pm</div>
                                    <div class="location"> <i class="fa fa-map-marker"></i> Zakynthos, Greece</div>
                                </div>
                                <div class="description">
                                    <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris itae erat conuat</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5">
                            <div class="image">
                                <a href="event-details.html" class="hover_effect h_blue h_link">
                                    <img src="{{asset('')}}frontend/images/events/event6.jpg" class="img-responsive" alt="Image">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="a_center mt50">
                    <button class="btn_load_more">Load More Events</button>
                </div>

            </div>
        </main>
 @endsection   
        <!-- ========== FOOTER ========== -->
        