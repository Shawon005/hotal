<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $restaurant=DB::table('restaurant')->where('id',1)->first();
        return view('backend.restaurant.edit',compact('restaurant'));
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
        $db=DB::table('restaurant')->where('id',1)->first();
        if($request->image!=null){
            $files=$request->image;
            foreach($files as $file)
            {
                $imgs[]=saveFile1($request,$file);
            }
            $img=implode(',',$imgs);
        }
        else{
            $img= $db->gallery_image;
        }
        DB::table('restaurant')->where('id',1)->update([
            'sub_title' => $request->sub_title,
            'details' =>  $request->details,
            'details1' =>  $request->details1,
            'gallery_image'=>$img,
           
        ]);
        return redirect()->back();
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
}
