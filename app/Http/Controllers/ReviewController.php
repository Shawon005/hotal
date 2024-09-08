<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ReviewController extends Controller
{/**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews=DB::table('enquery')->get();
        return view('backend.review.index',compact('reviews'));
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
        
        try{
            $request->validate([ 
                'user_email'=>'required',
                'user_name'=>'required',
                'user_message'=>'required',
            ]);
        DB::table('enquery')->insert([
            'name' => $request->user_name,
            'email' => $request->user_email,
            'phone' =>  $request->user_phone,
            'subject' =>  $request->user_subject,
            'comment' =>  $request->user_message,
        ]);
        return response()->json(['type'=>'succes','text'=>'Succesfully Submit']);
    }
    catch(\Throwable $th)
    {
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
        $review=DB::table('enquery')->where('id',$id)->delete();
        return redirect()->route('review.index')->with('message' , 'Delete was successful!');
    }
}
