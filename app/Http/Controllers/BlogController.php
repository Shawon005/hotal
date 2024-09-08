<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Str;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs=DB::table('blogs')->get();
        return view('backend.blog.index',compact('blogs')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tags=DB::table('blog_tags')->get();
        $categorys=DB::table('blog_categories')->get();
        return view('backend.blog.create',compact('categorys','tags')); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([ 
            'blog_image'=>'required',
           
        ]);
        DB::table('blogs')->insert([
            'blog_title'=>$request->blog_title,
            'blog_description'=>$request->blog_description,
            'blog_image'=>saveFile($request,'blog_image'),
            'category_id'=>$request->category_id,
            'tag_id'=>($request->tag_id==null)?'':implode(',',$request->tag_id),
            'blog_slug'=>Str::of(request()->blog_title)->slug('-'),
           
        ]);
        return redirect()->route('admin.blog.index')->with('message' , 'Store was successful!');
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
        $blog=DB::table('blogs')->where('id',$id)->first();
        $tags=DB::table('blog_tags')->get();
        $categorys=DB::table('blog_categories')->get();
        return view('backend.blog.edit',compact('categorys','tags','blog')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        if($request->blog_image==null){
            $db=DB::table('blogs')->where('id',$id)->first();
            $img=$db->blog_image;
        }
        else{
            $img=saveFile($request,'blog_image');
        }
        DB::table('blogs')->where('id',$id)->update([
            'blog_title'=>$request->blog_title,
            'blog_description'=>$request->blog_description,
            'blog_image'=>$img,
            'category_id'=>$request->category_id,
            'tag_id'=>($request->tag_id==null)?'':implode(',',$request->tag_id),
            'blog_slug'=>Str::of(request()->blog_title)->slug('-'),
           
        ]);
        return redirect()->route('admin.blog.index')->with('message' , 'Update was successful!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('blogs')->where('id',$id)->delete();
        return redirect()->route('admin.blog.index')->with('message' , 'Delete was successful!');
    }
}
