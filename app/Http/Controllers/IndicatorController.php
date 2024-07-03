<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Indicator;
use App\Models\IndicatorCtgr;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Carbon;

class indicatorController extends Controller
{
    public function AllIndicator(){

        $indicators = Indicator::latest()->get();
        return view('admin.indicators.indicator_all',compact('indicators'));
    } // End Method

    public function AddIndicator(){
        $categories = IndicatorCtgr::orderBy('indicator_category','ASC')->get();
        return view('admin.indicators.indicator_add',compact('categories'));
    }// End Method

    public function Storeindicator(Request $request){

         $image = $request->file('image');
         $mt4_free = $request->file('MT4_free');
         $mt5_free = $request->file('MT5_free');
         $mt4_pro = $request->file('MT4_PRO');
         $mt5_pro = $request->file('MT5_pro');
         $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

            Image::make($image)->resize(430,327)->save('upload/indicator/'.$name_gen);
            $save_url = 'upload/indicator/'.$name_gen;




            $path_MT4_free='upload/indicators/MT4free';
            $path_MT5_free='upload/indicators/MT5free';
            $path_MT4_pro='upload/indicators/MT4pro';
            $path_MT5_pro='upload/indicators/MT5pro';
   
   
// /////////////////////------__________----------//////////////// //
$MT4_free = $request->file('MT4_free');
$MT4_freeName = $MT4_free->getClientOriginalName();
$MT4FreePath = $MT4_free->storeAs($path_MT4_free, $MT4_freeName, 'public');
$MT4_free->move($path_MT4_free, $MT4_freeName);

// /////////////////////------__________----------//////////////// //

$MT5_free = $request->file('MT5_free');
$MT5_freeName = $MT5_free->getClientOriginalName();
$MT5FreePath = $MT5_free->storeAs($path_MT5_free, $MT5_freeName, 'public');
$MT5_free->move($path_MT5_free, $MT5_freeName);

// /////////////////////------__________----------//////////////// //

$MT4_pro = $request->file('MT4_pro');
               
               $MT4_proName = $MT4_pro->getClientOriginalName();
               $MT4ProPath = $MT4_pro->storeAs($path_MT4_pro, $MT4_proName, 'public');
               
               $MT4_pro->move($path_MT4_pro, $MT4_proName);


// /////////////////////------__________----------//////////////// //

$MT5_pro = $request->file('MT5_pro');
               
               $MT5_ProName = $MT5_pro->getClientOriginalName();
               $MT5ProPath = $MT5_pro->storeAs($path_MT5_pro, $MT5_ProName, 'public');
               
               $MT5_pro->move($path_MT5_pro, $MT5_ProName);

// /////////////////////------__________----------//////////////// //
// Store the file information in the database

Indicator::insert([
                'indicator_ctgr_id'=>$request->cat_id,
                'title' => $request->title,
                'tags' => $request->tags,
                'description' => $request->description,
                'price' => $request->price,
                'image' => $save_url,
                'MT4_free' => $MT4_proName,
                'MT5_free' => $MT5_freeName,
                'MT4_pro' => $MT5_ProName,
                'MT5_pro' => $MT5_ProName,
                'created_at' => Carbon::now(),

            ]); 
            $notification = array(
            'message' => 'Course Inserted Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->route('all.indicator')->with($notification);
    }// End Method






    public function Editindicator($id){

        $indicator = Indicator::findOrFail($id);
        $categories = IndicatorCtgr::orderBy('indicator_category','ASC')->get();
       return view('admin.indicators.indicator_edit',compact('indicator','categories'));

   } // End Method

   public function Updateindicator(Request $request){

    $indicator_id = $request->id;

// /////////////////////----------------//////////////// //   

   if ($request->file('indicator_image') || $request->file('MT4_free') || $request->file('MT5_free') || $request->file('MT4_pro') || $request->file('MT5_pro')) {
       $image = $request->file('indicator_image');
       $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

        Image::make($image)->resize(430,327)->save('upload/indicator/'.$name_gen);
       $save_url = 'upload/indicator/'.$name_gen;

       $path_MT4_free='upload/indicators/MT4free';
            $path_MT5_free='upload/indicators/MT5free';
            $path_MT4_pro='upload/indicators/MT4pro';
            $path_MT5_pro='upload/indicators/MT5pro';



            // /////////////////////----------------//////////////// //
$MT4_free = $request->file('MT4_free');
$MT4_freeName = $MT4_free->getClientOriginalName();
$MT4_free->move($path_MT4_free, $MT4_freeName);

// /////////////////////----------------//////////////// //

$MT5_free = $request->file('MT5_free');
$MT5_freeName = $MT5_free->getClientOriginalName();
$MT5_free->move($path_MT5_free, $MT5_freeName);

// /////////////////////----------------//////////////// //

$MT4_pro = $request->file('MT4_pro');
               
               $MT4_proName = $MT4_pro->getClientOriginalName();
               
               $MT4_pro->move($path_MT4_pro, $MT4_proName);


// /////////////////////----------------//////////////// //

$MT5_pro = $request->file('MT5_pro');
               
               $MT5_ProName = $MT5_pro->getClientOriginalName();
               
               $MT5_pro->move($path_MT5_pro, $MT5_ProName);



       Indicator::findOrFail($indicator_id)->update([
           'indicator_id' => $request->indicator_id,
           'title' => $request->indicator_title,
           'tags' => $request->indicator_tags,
           'description' => $request->indicator_description,
           'price' => $request->price,
           'image' => $save_url,
           'title' => $request->title,
                
                'MT4_free' => $MT4_proName,
                'MT5_free' => $MT5_freeName,
                'MT4_pro' => $MT5_ProName,
                'MT5_pro' => $MT5_ProName,
                'created_at' => Carbon::now(),

       ]); 
       $notification = array(
       'message' => 'indicator Updated with Image Successfully', 
       'alert-type' => 'success'
   );

   return redirect()->route('all.indicator')->with($notification);

   } else{

       Indicator::findOrFail($indicator_id)->update([
           'title' => $request->title,
           'tags' => $request->tags,
           'description' => $request->description,
           'price' => $request->price, 

       ]); 

       $notification = array(
       'message' => 'indicator Updated without Image Successfully', 
       'alert-type' => 'success'
   );

  return redirect()->route('all.indicator')->with($notification);

   } // end Else

} // End Method


public function indicatorDetails($id){

   $allindicators = Indicator::latest()->limit(3)->get();
   $indicators = Indicator::findOrFail($id);
   return view('frontend.indicator_details',compact('indicators','allindicators'));

} // End Method 

public function Categoryindicator($id){

    $indicatorpost = Indicator::where('indicator_category',$id)->orderBy('id','DESC')->get();
    $allindicators = Indicator::latest()->limit(5)->get();
    $categories = IndicatorCtgr::orderBy('indicator_category','ASC')->get();
    $categoryname = IndicatorCtgr::findOrFail($id);
    return view('frontend.cat_indicator_details',compact('indicatorpost','allindicators','categories','categoryname'));

 } // End Method 

 public function Homeindicator(){

    $categories = IndicatorCtgr::orderBy('indicator_category','ASC')->limit(4)->get();
    $allindicators = Indicator::latest()->get();
    $recentindicators = Indicator::latest()->limit(4)->get();
    return view('frontend.indicator',compact('allindicators','categories','recentindicators'));

 } // End Method 

 public function Deleteindicator($id){

    $indicators = Indicator::findOrFail($id);
    $img = $indicators->image;
 
    Indicator::findOrFail($id)->delete();
 
     $notification = array(
        'message' => 'indicator Deleted Successfully', 
        'alert-type' => 'success'
    );
 
    return redirect()->back()->with($notification);       
 
 }// End Method




}