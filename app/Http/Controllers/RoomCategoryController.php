<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class RoomCategoryController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorys=DB::table('room_categories')->get();
        return view('backend.room.category.index',compact('categorys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('backend.room.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('room_categories')->insert([
            'category_name'=>$request->category_name,
           
        ]);
        return redirect()->route('admin.room_category.index')->with('message' , 'Store was successful!');
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
        $category=DB::table('room_categories')->where('id',$id)->first();
        return view('backend.room.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::table('room_categories')->where('id',$id)->update([
            'category_name'=>$request->category_name,
           
        ]);
        return redirect()->route('admin.room_category.index')->with('message' , 'update was successful!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category=DB::table('room_categories')->where('id',$id)->delete();
        return redirect()->route('admin.room_category.index')->with('message' , 'Delete was successful!');
    }
}
