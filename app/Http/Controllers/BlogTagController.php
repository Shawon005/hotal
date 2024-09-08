<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class BlogTagController extends Controller
{
    public function index()
    {
        $tags=DB::table('blog_tags')->get();
        return view('backend.blog.tag.index',compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.blog.tag.create1');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('blog_tags')->insert([
            'tag_name'=>$request->tag_name,
           
        ]);
        return redirect()->route('admin.blog_tag.index')->with('message' , 'Store was successful!');
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
        $tag=DB::table('blog_tags')->where('id',$id)->first();
        return view('backend.blog.tag.edit',compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::table('blog_tags')->where('id',$id)->update([
            'tag_name'=>$request->tag_name,
           
        ]);
        return redirect()->route('admin.blog_tag.index')->with('message' , 'Update was successful!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tag=DB::table('blog_tags')->where('id',$id)->delete();
        return redirect()->route('admin.blog_tag.index')->with('message' , 'Delete was successful!');
    }
}
