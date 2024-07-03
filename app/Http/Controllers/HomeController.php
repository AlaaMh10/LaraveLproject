<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class HomeController extends Controller
{
    public function getData()
    {
        $id = Auth::user()->id;
        $clientData = User::find($id);
        return view('frontend.body.header', compact('data'));
    } // End Method
}
