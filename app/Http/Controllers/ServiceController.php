<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services=DB::table('services')->get();
        return view('backend.service.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([ 
            'image'=>'required',
           
        ]);
        DB::table('services')->insert([
            'title'=>$request->title,
            'description'=>$request->description,
            'image'=>saveFile($request,'image'),
            'logo'=>saveFile($request,'logo'),
        ]);
        return redirect()->route('admin.service.index')->with('message' , 'Store was successful!');
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
        $service=DB::table('services')->where('id',$id)->first();
        return view('backend.service.edit',compact('service'));
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
            $pic=DB::table('services')->where('id',$id)->first();
            $img=$pic->image;
        }
        if($request->logo!=null){
            $img1=saveFile($request,'logo');
        }
        else{
            $pic=DB::table('services')->where('id',$id)->first();
            $img1=$pic->logo;
        }
        DB::table('services')->where('id',$id)->update([
            'title'=>$request->title,
            'description'=>$request->description,
            'image'=>$img,
            'logo'=>$img1,
        ]);
        return redirect()->route('admin.service.index')->with('message' , 'update was successful!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('services')->where('id',$id)->delete();
        return redirect()->route('admin.service.index')->with('message' , 'Delete was successful!');
    }
}
