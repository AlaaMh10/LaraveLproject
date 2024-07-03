<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\IndicatorCtgr;
use App\Models\Indicator;

class IndicatorCategoryController extends Controller
{
    public function AllIndicatorCategory(){

        $indicatorcategory = indicatorCtgr::latest()->get();
        return view('admin.indicator_category.indicator_category_all',compact('indicatorcategory'));

    } // End Method

    public function AddIndicatorCategory(){

        return view('admin.indicator_category.indicator_category_add');
    } // End Method


    public function StoreIndicatorCategory(Request $request){

         


            IndicatorCtgr::insert([
                'indicator_category' => $request->indicator_category,               

            ]); 

            $notification = array(
            'message' => 'Indicator Category Inserted Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->route('all.indicator.category')->with($notification);


    } // End Method

    public function EditIndicatorCategory($id){

        $indicatorcategory = IndicatorCtgr::findOrFail($id);
        return view('admin.indicator_category.indicator_category_edit',compact('indicatorcategory'));

    } // End Method


    public function UpdateIndicatorCategory(Request $request,$id){

        IndicatorCtgr::findOrFail($id)->update([
                'indicator_category' => $request->indicator_category,               

            ]); 

            $notification = array(
            'message' => 'Indicator Category Updated Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->route('all.indicator.category')->with($notification);

    } // End Method

    public function DeleteIndicatorCategory($id){

        IndicatorCtgr::findOrFail($id)->delete();

         $notification = array(
            'message' => 'Indicator Category Deleted Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);       

    } // End Method





}