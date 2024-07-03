<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function CustomerAll(){
        $customers=User::latest()->get();
        
            return view('admin.customer.customer_all',compact('customers')); 

    }

    public function CustomerUpdate($id){

        $customer = User::findOrFail($id);
        return view('admin.customer.customer_edit',compact('customer'));
    }// End Method


    public function CustomerEdit(Request $request){

        $customer_id = $request->id;

        
           // 3434343443.jpg

            User::findOrFail($customer_id)->update([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'role' => $request->role,

            ]); 
            $notification = array(
            'message' => 'Customer Updated with Image Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->route('customers.all')->with($notification);

    
        

     } // End Method 


public function CustomerDelete(Request $request){
 
        

    User::find($request->id)->delete();
 
     $notification = array(
        'message' => 'Customer Deleted Successfully', 
        'alert-type' => 'success'
    );
 
    return redirect()->back()->with($notification);       
 
  
      }// End Method 
     //
    }
    

