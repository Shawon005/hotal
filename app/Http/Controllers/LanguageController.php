<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $language=DB::table('translate')->get();
        //dd($language);
        return view('backend.language.index',compact('language'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.language.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
     
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
        $language=DB::table('translate')->where('id',$id)->first();
        return view('backend.language.edit',compact('language'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       
        DB::table('translate')->where('id',$id)->update([
            'english'=>$request->english,
            'swedish'=>$request->swedish,
            'spanish'=>$request->spanish,
            'french'=>$request->french,
            'german'=>$request->german,
            'arabic'=>$request->arabic,
            'persian'=>$request->persian,
        ]);
        return redirect()->route('admin.language.index')->with('message' , 'update was successful!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
    }
}
