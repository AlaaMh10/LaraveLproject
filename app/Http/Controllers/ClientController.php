<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Models\User;
use App\Models\Blog;
use Carbon\Carbon;
use App\Models\Purchase;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invaliDate();

        $request->session()->regenerateToken();

        $notification = array(
            'message' => 'Logout Successfully',
            'alert-type' => 'success'
        );

        return redirect('/login')->with($notification);
    } // End Method



    public function SearchIndicator(Request $request)
    {
        if($request->search){
            $searchCourse=Blog::where('blog_title','LIKE','%'.$request->search.'%')->latest()->paginate(15);
            return view('frontend.body.search',compact('searchCourse'));
        }
        else{
            redirect()->back()->with('message','Empty Search');
        }
    }




    public function profile()
    {
        $id = Auth::user()->id;
        $clientData = User::find($id);
        $transactions=Purchase::latest()->get();
        return view('client.client_profile_view', compact('clientData','transactions'));
    } // End Method


public function PurchaseHistory()
    {
        $id = Auth::user()->id;
        $clientData = User::find($id);
        $transactions=Purchase::latest()->get();
        return view('client.client_purchase', compact('clientData','transactions'));


}


    public function EditProfile()
    {
        $id = Auth::user()->id;
        $editData = User::find($id);
        return view('client.client_profile_edit', compact('editData'));
    }




    public function StoreProfile(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->username = $request->username;
        $data->email = $request->email;

        if ($request->file("profile_image")) {
            $file = $request->file("profile_image");
            $filename = date('Ymdhi') . $file->getClientOriginalName(); 
            $file->move(public_path('upload/user_images'), $filename);
            $data['profile_image'] = $filename;
        }
        $data->save();




        return redirect()->route('customer.profile');
        $notification = array(
            'message' => 'Profile Updated Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route(' customer.profile')->with($notification);
    } // End Method

    public function ChangePassword()
    {
        return view('client.client_change_password');
    }

    public function UpdatePassword(Request $request)
    {

        $validateData = $request->validate([
            'oldpassword' => 'required',
            'newpassword' => 'required',
            'confirm_password' => 'required|same:newpassword',

        ]);

        $hashedPassword = Auth::user()->password;
        if (Hash::check($request->oldpassword,$hashedPassword )) {
            $users = User::find(Auth::id());
            $users->password = bcrypt($request->newpassword);
            $users->save();

            session()->flash('message','Password Updated Successfully');
            return redirect()->back();
        } else{
            session()->flash('message','Old password is not match');
            return redirect()->back();
        }
}
public function Index( ){
    return view('client.client_login');
}
public function Login(Request $request){
    // dd($request->all());
    $check=$request->all();
    if (Auth::guard('client')->attempt(['email'=>$check['email'],'password'=>$check['password'] ])) {

        return redirect()->route('client.client_master')->with('error','client login succesfully');
        # code...
    }

    else{
        return back()->with('error','Invalid Email Or Password');
    }
}



}