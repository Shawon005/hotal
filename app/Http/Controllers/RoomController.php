<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms=DB::table('rooms')->get();
        return view('backend.room.index',compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorys=DB::table('room_categories')->get();
        $facilitys=DB::table('facilities')->get();
        return view('backend.room.create',compact('facilitys','categorys'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([ 
            'image'=>'required',
            'gallery_image'=>'required',
            'category_id'=>'required', 
            'facility'=>'required'
        ]);
        //dd($request->all());
        $files=$request->gallery_image;
        foreach($files as $file)
        {
            $imgs[]=saveFile1($request,$file);
        }
        $img=implode(',',$imgs);
        DB::table('rooms')->insert([
            'room_id'=>$request->room_id,
            'category_id'=>$request->category_id,
            'description'=>$request->description,
            'facility'=>implode(',',$request->facility),
            'image'=>saveFile($request,'image'),
            'gallery_image'=>$img,
            'price'=>$request->price,
            'status'=>(request()->status)==null?0:1,
        ]);
        return redirect()->route('admin.room.index')->with('message' , 'Store was successful!');
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
        $categorys=DB::table('room_categories')->get();
        $facilitys=DB::table('facilities')->get();
        $room=DB::table('rooms')->where('id',$id)->first();
        return view('backend.room.edit',compact('room','facilitys','categorys'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //dd($request->all());
        $request->validate([ 
            'category_id'=>'required', 
            'facility'=>'required'
        ]);
        $db=DB::table('rooms')->where('id',$id)->first();

        if($request->image==null)
        {
            $img=$db->image;
        }
        else{
            $img=saveFile($request,'image');
        }

        $files=$request->gallery_image;
        if($files!=null)
        {
        foreach($files as $file)
        {
            $imgs[]=saveFile1($request,$file);
        }
        $img1=implode(',',$imgs);
        }
        else{
            $img1=$db->gallery_image;
        }
        DB::table('rooms')->where('id',$id)->update([
            'room_id'=>$request->room_id,
            'category_id'=>$request->category_id,
            'description'=>$request->description,
            'facility'=>implode(',',array_unique($request->facility)),
            'image'=>$img,
            'gallery_image'=>$img1,
            'price'=>$request->price,
            'status'=>(request()->status)==null?0:1,
        ]);
        return redirect()->route('admin.room.index')->with('message' , 'Update was successful!');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $room=DB::table('rooms')->where('id',$id)->delete();
        return redirect()->route('admin.room.index')->with('message' , 'Delete was successful!');
    }
    public function status(Request $request,string $id)
    {
        $match=DB::table('rooms')->where('id',$id)->first();
        if($match->favorite==1){
        DB::table('rooms')->where('id',$id)->update([
            'favorite'=>0,
        ]);
        }
        else{
            DB::table('rooms')->where('id',$id)->update([
                'favorite'=>1,
            ]);
        }
        response()->json(['Successfully update']);
    }
    public function booking()
    {

        $categorys=DB::table('room_categories')->get();
        return view('backend.all_room.room_b',compact('categorys'));
    }
    public function room()
    {
       
        $categorys=DB::table('room_categories')->get();
        return view('backend.all_room.room',compact('categorys'));
    }
    public function a_room()
    {
        $categorys=DB::table('room_categories')->get();
        return view('backend.all_room.a_room',compact('categorys'));
    }

}
