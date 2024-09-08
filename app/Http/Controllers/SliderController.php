<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders=DB::table('sliders')->get();
        return view('backend.slider.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('sliders')->insert([
            'title'=>$request->title,
            'sub_title'=>$request->sub_title,
            'btn_text'=>$request->btn_text,
            'btn_link'=>$request->btn_link,
            'serial_no'=>$request->serial_no,
            'image'=>saveFile($request,'image'),
        ]);
        return redirect()->route('admin.slider.index')->with('message' , 'Store was successful!');
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
        $slider=DB::table('sliders')->where('id',$id)->first();
        return view('backend.slider.edit',compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if($request->image!=null){
            $img=saveFile($request,'image');
        }
        else{
            $pic=DB::table('sliders')->where('id',$id)->first();
            $img=$pic->image;
        }
        DB::table('sliders')->where('id',$id)->update([
            'title'=>$request->title,
            'sub_title'=>$request->sub_title,
            'btn_text'=>$request->btn_text,
            'btn_link'=>$request->btn_link,
            'serial_no'=>$request->serial_no,
            'image'=>$img,
        ]);
        return redirect()->route('admin.slider.index')->with('message' , 'Update was successful!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $slider=DB::table('sliders')->where('id',$id)->delete();
        return redirect()->route('admin.slider.index')->with('message' , 'Delete was successful!');
    }
}
