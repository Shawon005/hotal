<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    function index(){
        
        $bookings=DB::table('bookings')->where('booking_checkout',date('d/m/Y'))->get();
        //dd($bookings);
        foreach($bookings as $booking)
        {
            DB::table('rooms')->where('id',$booking->booking_roomtype)->update([
                'is_available'=>1,
            ]);
        }
        $reviews=DB::table('enquery')->get();
        $room_C=DB::table('rooms')->where('is_available',1)->get();
        $gallerys=DB::table('gallery')->get();
        $blogs=DB::table('blogs')->get();
        $setting=DB::table('settings')->where('id',1)->first();
        $rooms=DB::table('rooms')->where('favorite',1)->get();
        $services=DB::table('services')->get();
        $sliders=DB::table('sliders')->get();
        return view('frontend.index2',compact('rooms','services','sliders','setting','blogs',
        'gallerys','room_C','reviews'));
    }
    function room_list()
    {
        $rooms=DB::table('rooms')->get();
        return view('frontend.rooms-list',compact('rooms'));
    }
    function room($id)
    {
        $roomd=DB::table('rooms')->get();
        $blogs=DB::table('blogs')->get();
        $facilities=DB::table('facilities')->get();
        $room=DB::table('rooms')->where('id',$id)->first();
        $room_c=DB::table('rooms')->where('category_id',$room->category_id)->get();
        return view('frontend.room',compact('room','blogs','room_c','roomd'));
    }
    function room_cat($id)
    {
        $blogs=DB::table('blogs')->get();
        $facilities=DB::table('facilities')->get();
        $rooms=DB::table('rooms')->where('category_id',$id)->get();
        $room_c=DB::table('rooms')->get();
        return view('frontend.rooms-list',compact('rooms','blogs','room_c'));
    }
    function blog_list()
    {
        $categorys=DB::table('blog_categories')->get();
        $blogs=DB::table('blogs')->paginate(5);
        return view('frontend.blog',compact('blogs','categorys'));
    }
    function blog($id)
    {
        $blogs=DB::table('blogs')->get();
        $categorys=DB::table('blog_categories')->get();
        $blog=DB::table('blogs')->where('id',$id)->first();
        return view('frontend.blog-post',compact('blog','categorys','blogs'));
    }
    function blog_cat($id)
    {
        
        $categorys=DB::table('blog_categories')->get();
        $blogs=DB::table('blogs')->where('category_id',$id)->paginate(5);
        return view('frontend.blog',compact('categorys','blogs'));
    }
    function restaurent()
    {
        $restaurant=DB::table('restaurant')->where('id',1)->first();
        $manu=DB::table('manu')->get();
        return view('frontend.restaurant',compact('restaurant','manu'));
    }
 
    function about()
    {
        $rooms=DB::table('rooms')->get();
        return view('frontend.about-us',compact('rooms'));
    }
    function booking()
    {
        $roomF=DB::table('rooms')->where('favorite',1)->get();
        $categorys=DB::table('room_categories')->get();
        $rooms=DB::table('rooms')->where('is_available',1)->get();
        return view('frontend.booking-form',compact('rooms','categorys','roomF'));
    }
    function contact()
    {
        return view('frontend.contact2');
    }
    function gallery()
    {   $types=DB::table('services')->get();   
        $gallerys=DB::table('gallery')->get();
        return view('frontend.gallery',compact('gallerys','types'));
    }
    function place()
    {
        $places=DB::table('places')->get();
        return view('frontend.places',compact('places'));
    }
    function place_list($id)
    {
        $place=DB::table('places')->where('id',$id)->first();
        return view('frontend.place-details',compact('place'));
    }
    function lang($id)
    {
        session('lang','default');
        session(['lang'=>$id]);
        return redirect()->route('home');
    }
}
