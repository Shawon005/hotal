<?php
use Illuminate\Http\Request;
function saveFile(Request $request,$input)
{
    $file = $request->file($input);
    $ext = $file->extension();
    $filename = now()->timestamp.Str::random(20).'.'.$ext;

    $path = 'uploads'.date('/y') . '/' . date('m') . '/';
    $filePath = $path.$filename;
   
    $file->move('storage/uploads'.date('/y') . '/' . date('m') . '/',$filename);
    // Storage::put($filePath, file_get_contents($file));

    return Storage::url($filePath);
}
function dateFormatconverter($date)
{
  if($date==null)
  {
    return '';
  }
    $phpdate = strtotime($date);
    return date("d, M Y", $phpdate);
}
function saveFile1(Request $request,$file)
{

    $ext = $file->extension();
    $filename = now()->timestamp.Str::random(20).'.'.$ext;

    $path = 'uploads'.date('/y') . '/' . date('m') . '/';
    $filePath = $path.$filename;
   
    $file->move('storage/uploads'.date('/y') . '/' . date('m') . '/',$filename);
    // Storage::put($filePath, file_get_contents($file));

    return Storage::url($filePath);
}
function expt($str){
  $txt=explode(',',$str);
  return $txt;
}
function imp($str){
  $txt=implode(',',$str);
  return $txt;
}
function setting(){
    $tble=DB::table('settings')->where('id',1)->first();
    return $tble;
}
function table($table,$col,$id,$col1)
{
  $name=DB::table($table)->where($col,$id)->first();
  if($name==null)
  return '';
else  
 return $name->$col1;
}
function table_f($table){
  $tble=DB::table($table)->get();
  return $tble;
}
function cat($id)
{
  $name=DB::table('blogs')->where('category_id',$id)->get();
 return $name;
}
function table_s($table,$col,$id)
{
  $name=DB::table($table)->where($col,$id)->get();
  return $name;
}
function table_ss($id)
{
  $name=DB::table('rooms')->where('category_id',$id)->orderBy('room_id','asc')->get();
  return $name;
}
function table_b($id)
{
  $d=date('d/m/Y');
  $name=DB::select("SELECT * FROM `bookings` as t1 LEFT JOIN `rooms` as t2 ON t1.`booking_roomtype`=t2.id WHERE t1.`booking_checkin`= '$d' AND t2.category_id=$id ORDER BY t2.room_id asc;");
  return $name;
}
function translate($text)
{
  if($text==null)
  {
    return $text;
  }
  $translate=DB::table('translate')->where('main_text',$text)->first();
  if($translate==null){
    DB::table('translate')->insert([
      'main_text'=>$text
    ]);
    return $text;
  }
  else{
   
    $lang=session('lang');
    if($lang==null)
    {
      $cms=DB::table('settings')->where('id',1)->first();
      $lang=$cms->language;
    }
    if($lang==null)
    {
      return $text;
    }
    else{
      if($translate->$lang==null)
      {
        return $text;
      }
      else{
        return $translate->$lang;
      }
      
    }
  }
}