<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class FacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $facilities=DB::table('facilities')->get();
        return view('backend.facility.index',compact('facilities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.facility.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([ 
            'image'=>'required',
           
        ]);
        DB::table('facilities')->insert([
            'title'=>$request->title,
            'description'=>$request->description,
            'image'=>saveFile($request,'image'),
        ]);
        return redirect()->route('admin.facility.index')->with('message' , 'Store was successful!');
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
        $facility=DB::table('facilities')->where('id',$id)->first();
        return view('backend.facility.edit',compact('facility'));
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
            $pic=DB::table('facilities')->where('id',$id)->first();
            $img=$pic->image;
        }
        DB::table('facilities')->where('id',$id)->update([
            'title'=>$request->title,
            'description'=>$request->description,
            'image'=>$img,
        ]);
        return redirect()->route('admin.facility.index')->with('message' , 'update was successful!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $slider=DB::table('facilities')->where('id',$id)->delete();
        return redirect()->route('admin.facility.index')->with('message' , 'Delete was successful!');
    }
}
