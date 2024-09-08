<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $T_booking=DB::table('bookings')->where('cancle',1)->where('cancle_date',date('Y-m-d'))->orderBy('booking_id','desc')->get();
        $room=DB::table('rooms')->get();
        $categorys=DB::table('room_categories')->get();
        return view('backend.index',compact('room','categorys','T_booking'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $ch= DB::table('users')->where('email',$request->email)->where('password',$request->password)->first();
       if($ch!=null){
        Auth::loginUsingId($ch->id);
        return redirect()->route('admin.dashboard');
       }
       else{
        return redirect()->back();
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
