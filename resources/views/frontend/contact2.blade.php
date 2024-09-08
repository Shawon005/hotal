@extends('frontend.layout.master2')
@section('content')

        <!-- =========== PAGE TITLE ========== -->
        <div class="page_title gradient_overlay" style="background: url({{asset('')}}frontend/images/page_title_bg.jpg);">
            <div class="container">
                <div class="inner">
                    <h1>{{translate('Contact Us')}}</h1>
                    <ol class="breadcrumb">
                        <li><a href="{{route('home')}}">{{translate('Home')}}</a></li>
                        <li>{{translate('Contact Us')}}</li>
                    </ol>
                </div>
            </div>
        </div>
        @php $setting=setting(); @endphp
        <!-- =========== MAIN ========== -->
        <main id="contact_page_style_2">
            <div class="container">
                <div class="row">

                    <div class="col-md-8">
                        <div class="main_title  a_left">
                            <h2>{{translate('CONTACT US')}}</h2>
                        </div>
                        <form id="contact-form-page">
                            <div class="row">
                                <div class="form-group col-md-6 col-sm-6">
                                    <label class="control-label">{{translate('Name')}}</label>
                                    <input type="text" class="form-control" name="name" placeholder="Your Name">
                                </div>
                                <div class="form-group col-md-6 col-sm-6">
                                    <label class="control-label">{{translate('Phone')}}</label>
                                    <input type="text" class="form-control" name="phone" placeholder="Phone">
                                </div>
                                <div class="form-group col-md-6 col-sm-6">
                                    <label class="control-label">{{translate('Email')}}</label>
                                    <input type="email" class="form-control" name="email" placeholder="Your Email">
                                </div>
                                <div class="form-group col-md-6 col-sm-6">
                                    <label class="control-label">{{translate('Subject')}}</label>
                                    <input type="text" class="form-control" name="subject" placeholder="Subject">
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <label class="control-label">{{translate('Message')}}</label>
                                    <textarea class="form-control" name="message" placeholder="Your Message..."></textarea>
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <button type="submit" class="button  btn_blue mt35 upper pull-right"> <i class="fa fa-paper-plane-o" aria-hidden="true"></i> {{translate('Send Your Message')}} </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div id="notification">

                    </div>
                    <div class="col-md-4">
                        <div id="contact-page22">
                            <div id="google-map"></div>
                            <div id="map-canvas1">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2038.2480204470191!2d18.00532207692309!3d59.278711515071706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x465f770ef4a4df39%3A0x4b1b85c5345b3736!2zSMO0dGVsIGQnw4RsdnNqw7Y!5e0!3m2!1sen!2sbd!4v1690186159601!5m2!1sen!2sbd" width="370" height="186" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                              <ul class="contact-info upper mt40">
                            <li>
                                <span class="ci_item">ADDRESS:</span>
                                {{$setting->address}}
                            </li>
                            <li>
                                <span class="ci_item">EMAIL:</span>
                                {{$setting->email}}
                            </li>
                            <li>
                                <span class="ci_item">WEB:</span>
                                {{$setting->web}}
                            </li>
                            <li>
                                <span class="ci_item">PHONE:</span>
                                {{$setting->phone}}
                            </li>
                            <li>
                                <span class="ci_item">FAX:</span> 
                                <strong>{{$setting->fax}}</strong>
                            </li>
                        </ul>

                            <div class="social_media">
                                <a class="facebook" href="{{$setting->fb}}"><i class="fa fa-facebook"></i></a>
                                <a class="twitter" href="{{$setting->tw}}"><i class="fa fa-twitter"></i></a>
                                <!-- <a class="googleplus" href="{{$setting->go}}"><i class="fa fa-google-plus"></i></a> -->
                                <!-- <a class="pinterest" href="{{$setting->fb}}"><i class="fa fa-pinterest"></i></a> -->
                                <a class="linkedin" href="{{$setting->lin}}"><i class="fa fa-linkedin"></i></a>
                                <a class="youtube" href="{{$setting->you}}"><i class="fa fa-youtube"></i></a>
                                <a class="instagram" href="{{$setting->ing}}"><i class="fa fa-instagram"></i></a>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </main>

        <!-- ========== FOOTER ========== -->
   @endsection