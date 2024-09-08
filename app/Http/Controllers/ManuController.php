<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ManuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $manu=DB::table('manu')->get();
        return view('backend.manu.index',compact('manu'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.manu.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('manu')->insert([
            'name'=>$request->name,
            'details'=>$request->details,
            'image'=>saveFile($request,'image'),
            'price'=>$request->price,
        ]);
        return redirect()->route('admin.manu.index')->with('message' , 'Store was successful!');
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
        $manu=DB::table('manu')->where('id',$id)->first();
        return view('backend.manu.edit',compact('manu'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $db=DB::table('manu')->where('id',$id)->first();
        if($request->image==null)
        {
            $img=$db->image;
        }
        else{
            $img=saveFile($request,'image');
        }
        DB::table('manu')->where('id',$id)->update([
            'name'=>$request->name,
            'details'=>$request->details,
            'image'=>$img,
            'price'=>$request->price,
        ]);
        return redirect()->route('admin.manu.index')->with('message' , 'Update was successful!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('manu')->where('id',$id)->delete();
        return redirect()->route('admin.manu.index')->with('message' , 'Delete was successful!');
    }
}
