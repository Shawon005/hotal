@extends('frontend.layout.master2')
@section('content')
       
        <!-- ========== REVOLUTION SLIDER ========== -->
        <div id="hero_event" class="rev_slider gradient_slider" style="display:none" data-version="5.4.1">
            <ul>
                <!-- SLIDE  -->
                <li data-transition="fade">
                    <!-- MAIN IMAGE -->
                    <img src="{{asset('')}}frontend/images/events/event1_big.jpg" 
                         alt="Image" 
                         data-bgposition="center center" 
                         data-bgfit="cover" 
                         data-bgrepeat="no-repeat" 
                         data-bgparallax="5" 
                         class="rev-slidebg" 
                         data-no-retina>
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption"
                         data-x="['center','center','center','center']" 
                         data-hoffset="['0','0','0','0']" 
                         data-y="['250','150','150','150']" 
                         data-fontsize="['40','32','28','22']" 
                         data-lineheight="['70','70','70','50']"
                         data-whitespace="nowrap" 
                         data-transform_idle="o:1;" 
                         data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                         data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                         data-start="500" 
                         data-splitin="none" 
                         data-splitout="none" 
                         data-responsive_offset="on" 
                         style="color: #fff; font-weight: 700; font-family:'Raleway', sans-serif;">Hotel Zante FAMILY PARTY
                    </div>
                    <div class="tp-caption"
                         data-x="['center','center','center','center']" 
                         data-y="['bottom', '400', '400', '400']" 
                         data-width=""
                         data-height=""
                         data-whitespace="nowrap" 
                         data-transform_idle="o:1;" 
                         data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                         data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                         data-start="500" 
                         data-splitin="none" 
                         data-splitout="none" 
                         data-responsive_offset="on"><div id="countdown" data-countdown="2018/01/01"></div>
                        </div>
                </li>
                
            </ul>
        </div>

        <!-- ========== MAIN ========== -->
        <main id="typography">
            <div class="container">
                <div class="row">

                    <div class="col-md-9">
                        <div class="main_title">
                            <h2>EVENT DESCRIPTION</h2>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Expressa vero in iis aetatibus, quae iam confirmatae sunt. Ab his oratores, ab his imperatores ac rerum publicarum principes extiterunt. Non minor, inquit, voluptas percipitur ex vilissimis rebus quam ex pretiosissimis. Quo modo autem optimum, si bonum praeterea nullum est? Dicimus aliquem hilare vivere; Duo Reges: constructio interrete.Illa videamus, quae a te de amicitia dicta sunt. Aeque enim contingit omnibus fidibus, ut incontentae sint. Non quam nostram quidem, inquit Pomponius iocans; Satis est ad hoc responsum. At ille pellit, qui permulcet sensum voluptate. Tum Piso: Quoniam igitur aliquid omnes, quid Lucius noster? Quorum sine causa fieri nihil putandum est.</p>
                        <p>ia genera bonorum; Quid enim de amicitia statueris utilitatis causa expetenda vides. Quamquam id quidem, infinitum est in hac urbe; Mihi, inquam, qui te id ipsum rogavi? Invidiosum nomen est, infame, suspectum. Possumusne ergo in vita summum bonum dicere, cum id ne in cena quidem posse videamur? Tollenda est atque extrahenda radicitus. At ille pellit, qui permulcet sensum voluptate. Quae duo sunt, unum facit. Sed quanta sit alias, nunc tantum possitne esse tanta. Non quaero, quid dicat, sed quid convenienter possit rationi et sententiae suae dicere. Tum mihi Piso: Quid ergo? De illis, cum volemus. Tum ille timide vel potius verecunde: Facio, inquit.</p>

                        <div class="row image-gallery">
                            <div class="col-md-3 col-sm-6 mt20 mb20 br2">
                                <a href="images/events/event2.jpg" class="hover_effect h_lightbox h_blue">
                                    <img src="{{asset('')}}frontend/images/events/event2.jpg" class="img-responsive full_width br2" alt="Image">
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6 mt20 mb20 br2">
                                <a href="images/events/event3.jpg" class="hover_effect h_lightbox h_blue">
                                    <img src="{{asset('')}}frontend/images/events/event3.jpg" class="img-responsive full_width br2" alt="Image">
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6 mt20 mb20 br2">
                                <a href="images/events/event4.jpg" class="hover_effect h_lightbox h_blue">
                                    <img src="{{asset('')}}frontend/images/events/event4.jpg" class="img-responsive full_width br2" alt="Image">
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6 mt20 mb20 br2">
                                <a href="images/events/event5.jpg" class="hover_effect h_lightbox h_blue">
                                    <img src="{{asset('')}}frontend/images/events/event5.jpg" class="img-responsive full_width br2" alt="Image">
                                </a>
                            </div>
                        </div>
                        
                         <p>ia genera bonorum; Quid enim de amicitia statueris utilitatis causa expetenda vides. Quamquam id quidem, infinitum est in hac urbe; Mihi, inquam, qui te id ipsum rogavi? Invidiosum nomen est, infame, suspectum. Possumusne ergo in vita summum bonum dicere, cum id ne in cena quidem posse videamur? Tollenda est atque extrahenda radicitus. At ille pellit, qui permulcet sensum voluptate. Quae duo sunt, unum facit. Sed quanta sit alias, nunc tantum possitne esse tanta. Non quaero, quid dicat, sed quid convenienter possit rationi et sententiae suae dicere. Tum mihi Piso: Quid ergo? De illis, cum volemus. Tum ille timide vel potius verecunde: Facio, inquit.</p>
                        
                        <div class="main_title mt80">
                            <h2>EVENT CONTENT</h2>
                        </div>
                        <ul class="list_menu">
                            <li>Lorem ipsum dolor sit amet.</li>
                            <li>Lorem ipsum dolor sit amet.</li>
                            <li>Lorem ipsum dolor sit amet.</li>
                            <li>Lorem ipsum dolor sit amet.</li>
                            <li>Lorem ipsum dolor sit amet.</li>
                            <li>Lorem ipsum dolor sit amet.</li>
                            <li>Lorem ipsum dolor sit amet.</li>
                            <li>Lorem ipsum dolor sit amet.</li>
                            <li>Lorem ipsum dolor sit amet.</li>
                        </ul>
                        <div class="social_media mt80 mb80">
                            <a class="facebook" href="#" data-toggle="tooltip" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a class="twitter" href="#" data-toggle="tooltip" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a class="googleplus" href="#" data-toggle="tooltip" data-original-title="Google Plus"><i class="fa fa-google-plus"></i></a>
                            <a class="pinterest" href="#" data-toggle="tooltip" data-original-title="Pinterest"><i class="fa fa-pinterest"></i></a>
                            <a class="linkedin" href="#" data-toggle="tooltip" data-original-title="Linkedin"><i class="fa fa-linkedin"></i></a>
                            <a class="youtube" href="#" data-toggle="tooltip" data-original-title="YouTube"><i class="fa fa-youtube"></i></a>
                            <a class="instagram" href="#" data-toggle="tooltip" data-original-title="Instagram"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="sidebar">
                            <aside class="widget">
                                <div class="search">
                                    <form method="get" class="widget_search">
                                        <input type="search" placeholder="Start Searching...">
                                        <button class="search_btn" id="searchsubmit" type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </form>
                                </div>
                            </aside>
                            <aside class="widget">
                                <img src="{{asset('')}}frontend/images/banner.jpg" class="img-responsive" alt="Image">
                            </aside>
                            <aside class="widget">
                                <div class="help">
                                    If you have any question please don't hesitate to contact us
                                    <div class="phone"><i class="fa  fa-phone"></i><a href="tel:18475555555"> 1-888-123-4567 </a></div>
                                    <div class="email"><i class="fa  fa-envelope-o "></i><a href="mailto:contact@site.com">contact@site.com</a> or use <a href="contact.html"> contact form</a></div>
                                </div>
                            </aside>
                        </div>
                    </div>

                </div>
            </div>
        </main>

        <!-- ========== FOOTER ========== -->
      @endsection