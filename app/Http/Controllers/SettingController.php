<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class SettingController extends Controller
{
  
    public function index()
    {
        $setting=DB::table('settings')->where('id',1)->first();
        return view('backend.setting.edit',compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //dd($request->all());
        $setting=DB::table('settings')->where('id',$id)->first();
        if($request->about_image1!=null){
            $img1=saveFile($request,'about_image1');
        }
        else{
          
            $img1=$setting->about_image1;
        }
        if($request->about_image2!=null){
            foreach($request->about_image2 as $file)
            {
                $imgs[]=saveFile1($request,$file);
            }
            $img2=implode(',',$imgs);
           
        }
        else{
          
            $img2=$setting->about_image2;
        }
        if($request->location_image!=null){
            $img3=saveFile($request,'location_image');
        }
        else{
            
            $img3=$setting->location_image;
        }
        if($request->logo_light!=null){
            $img4=saveFile($request,'logo_light');
        }
        else{
            
            $img4=$setting->logo_light;
        }
        if($request->logo_dark!=null){
            $img5=saveFile($request,'logo_dark');
        }
        else{
            
            $img5=$setting->logo_dark;
        }
        if($request->fav_logo!=null){
            $img6=saveFile($request,'fav_logo');
        }
        else{
            
            $img6=$setting->fav_logo;
        }
        if($request->sub_image!=null){
            $img7=saveFile($request,'sub_image');
        }
        else{
            
            $img7=$setting->sub_image;
        }
        DB::table('settings')->where('id',$id)->update([
           'about_image1'=>$img1,
           'about_image2'=>$img2,
           'location_image'=>$img3,
           'logo_light'=>$img4,
           'logo_dark'=>$img5,
           'fav_logo'=>$img6,
           'about_title'=>$request->about_title,
           'about_details'=>$request->about_details ,
           'footer_text' =>$request->footer_text,
           'address' =>$request->address,
           'phone' => $request->phone,
           'email' =>$request->email,
           'fax' => $request->fax,
           'web' => $request->web,
           'fb' =>$request->fb,
           'tw' => $request->tw,
           'ing' =>$request->ing,
           'lin' =>$request->lin,
           'you' => $request->you,
           'go' =>$request->go,
           'cy'=>$request->cy,
           'staffs'=>$request->staffs,
           'site_title'=>$request->site_title,
           'sub_image'=>$img7,
           'about_details2'=>$request->about_details2,
           'language'=>$request->language,
        ]);
        return redirect()->back()->with('message' , 'update was successful!');
    }
    public function create()
    {
       
        $setting=DB::table('settings')->where('id',1)->first();
        return view('backend.setting.contain',compact('setting'));
    }
    public function store(Request $request)
    {
        DB::table('settings')->where('id',1)->update([
            'home_room'=>$request->home_room,
            'home_service'=>$request->home_service,
            'home_gallery'=>$request->home_gallery,
            'home_location'=>$request->home_location,
            'home_review'=>$request->home_review,
            'resturrent_page'=>$request->resturrent_page,
            'palce_page'=>$request->palce_page,
        ]);
        return redirect()->back()->with('message' , 'update was successful!');
    }
}
