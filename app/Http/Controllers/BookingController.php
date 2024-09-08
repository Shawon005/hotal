<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;
use DB;
class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $booking=DB::table('bookings')->where('cancle',0)->orderBy('booking_id','desc')->get();
        return view('backend.booking.index',compact('booking'));
    }
    public function index3()
    {
        
        $booking=DB::table('bookings')->orderBy('booking_id','desc')->get();
        return view('backend.booking.index3',compact('booking'));
    }
    public function index2()
    {
        $booking=DB::table('bookings')->orderBy('booking_id','desc')->get();
        return view('backend.booking.index2',compact('booking'));
    }
    public function index4()
    {
        $booking=DB::table('bookings')->where('cancle',1)->orderBy('booking_id','desc')->get();
        return view('backend.booking.index3',compact('booking'));
    }
    public function index5()
    {
        
        $booking=DB::table('bookings')->where('cancle',1)->where('cancle_date',date('Y-m-d'))->orderBy('booking_id','desc')->get();
        return view('backend.booking.index3',compact('booking'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rooms=DB::table('rooms')->where('is_available',1)->get();
        return view('backend.booking.create',compact('rooms'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        try{

            $request->validate([ 
                'booking_email'=>'required',
                'booking_checkin'=>'required',
                'booking_checkout'=>'required',
                'booking_roomtype'=>'required',
            ]);
            
            DB::table('bookings')->insert([
                'booking_name' => $request->booking_name,
                'booking_email' => $request->booking_email,
                'booking_phone' =>  $request->booking_phone,
                'booking_roomtype' =>  $request->booking_roomtype,
                'booking_checkin' => $request->booking_checkin,
                'booking_checkout' => $request->booking_checkout,
                'booking_adults' =>  $request->booking_adults,
                'booking_children' =>  $request->booking_children,
                'booking_country' =>  $request->booking_country,
                'booking_comments' =>  $request->booking_comments,
            ]);
            
           DB::table('rooms')->where('id',$request->booking_roomtype)->update([
                'is_available'=>0,
            ]);
            $room=DB::table('rooms')->where('id',$request->booking_roomtype)->first();
            
                $doman=URL::to('/');
                $url=$doman.'/'.'room/'.$request->booking_roomtype;
                $data['title']="Hotel ALVSJO STADSHOTELL";
                $data['checkin']=$request->booking_checkin;
                $data['room']=$request->booking_roomtyp;
                $data['checkout']= $request->booking_checkout;
                $data['user_email']=$request->booking_email;
                $data['url']=$url;
                $data['room_no']=$room->room_id;
            
                Mail::send('booking_mail', ['data'=>$data], function($message) use ($data) {
                $message->to($data['user_email'])->subject
                ($data['title']);});
                if($request->type)
                {
                    return redirect()->route('booking.index')->with('message' , 'Store was successful!');
                }
            return response()->json(['type'=>'succes','text'=>'Succesfully Submit']);
    }
    catch(\Throwable $th)
    {
        if($request->type)
        {
            return redirect()->route('booking.index')->with('message' , 'Email Not Send!');
        }
        return response()->json(['type'=>'error','text'=>'Some Thing is wrong']);
    }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $booking=DB::table('bookings')->where('booking_id',$id)->first();
        $rooms=DB::table('rooms')->get();
        return view('backend.booking.edit',compact('booking','rooms'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //dd($request->all());
        $booking=DB::table('bookings')->where('booking_id',$id)->first();

        DB::table('rooms')->where('id',$booking->booking_roomtype)->update([
            'is_available'=>1,
        ]);
        DB::table('bookings')->where('booking_id',$id)->update([
            'booking_name' => $request->booking_name,
            'booking_email' => $request->booking_email,
            'booking_phone' =>  $request->booking_phone,
            'booking_roomtype' => $request->booking_roomtype,
            'booking_checkin' => $request->booking_checkin,
            'booking_checkout' => $request->booking_checkout,
            'booking_adults' =>  $request->booking_adults,
            'booking_children' =>  $request->booking_children,
            'booking_country' =>  $request->booking_country,
            'booking_comments' =>  $request->booking_comments,
        ]);
        DB::table('rooms')->where('id',$request->booking_roomtype)->update([
            'is_available'=>0,
        ]);
        return redirect()->route('booking.index')->with('message' , 'Update was successful!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $booking=DB::table('bookings')->where('booking_id',$id)->delete();
        return redirect()->route('booking.index')->with('message' , 'Delete was successful!');
    }
    public function Cancle(string $id)
    {
        $booking=DB::table('bookings')->where('booking_id',$id)->first();
       
        DB::table('bookings')->where('booking_id',$id)->update([
            'cancle'=>1,
            'cancle_date'=>now(),
        ]);
       
        DB::table('rooms')->where('id',$booking->booking_roomtype)->update([
            'is_available'=>1,
        ]);
        response()->json(['Successfully update']);
    }
}
