<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class GalleryController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gallery=DB::table('gallery')->get();
        return view('backend.gallery.index',compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types=DB::table('services')->get();
        return view('backend.gallery.create',compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('gallery')->insert([
            'title'=>$request->title,
            'details'=>$request->details,
            'image'=>saveFile($request,'image'),
            'type'=>$request->type,
        ]);
        return redirect()->route('admin.gallery.index')->with('message' , 'Store was successful!');
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
        $types=DB::table('services')->get();
        $gallery=DB::table('gallery')->where('id',$id)->first();
        return view('backend.gallery.edit',compact('gallery','types'));
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
            $pic=DB::table('gallery')->where('id',$id)->first();
            $img=$pic->image;
        }
        DB::table('gallery')->where('id',$id)->update([
            'title'=>$request->title,
            'details'=>$request->details,
            'image'=>$img,
            'type'=>$request->type,
        ]);
        return redirect()->route('admin.gallery.index')->with('message' , 'Update was successful!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $gallery=DB::table('gallery')->where('id',$id)->delete();
        return redirect()->route('admin.gallery.index')->with('message' , 'Delete was successful!');
    }
}
