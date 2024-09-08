<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    public function index()
    {
        $place=DB::table('places')->get();
        return view('backend.place.index',compact('place'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.place.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([ 
            'image'=>'required',
           
        ]);
        $files=$request->image;
        foreach($files as $file)
        {
            $imgs[]=saveFile1($request,$file);
        }
        $img=implode(',',$imgs);
        DB::table('places')->insert([
            'name'=>$request->name,
            'details'=>$request->details,
            'image'=>$img,
            
        ]);
        return redirect()->route('admin.place.index')->with('message' , 'Store was successful!');
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
        $place=DB::table('places')->where('id',$id)->first();
        return view('backend.place.edit',compact('place'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $db=DB::table('places')->where('id',$id)->first();
        if($request->image==null)
        {
            $img=$db->image;
        }
        else{
            foreach($request->image as $file)
            {
                $imgs[]=saveFile1($request,$file);
            }
            $img=implode(',',$imgs);
        }
        DB::table('places')->where('id',$id)->update([
            'name'=>$request->name,
            'details'=>$request->details,
            'image'=>$img,
            
        ]);
        return redirect()->route('admin.place.index')->with('message' , 'Update was successful!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('places')->where('id',$id)->delete();
        return redirect()->route('admin.place.index')->with('message' , 'Delete was successful!');
    }
}
