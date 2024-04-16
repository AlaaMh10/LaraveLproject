<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Illuminate\Http\Request;

class employeeController extends Controller
{
    public function index()
    {
        $employees = employee::all();
        return response()->json($employees);
    }

    function addEmployee (Request $request){
        {
            $employees = new Employee([
                'name'=>$request->input('name'),
                'address'=>$request->input('address'),
                'mobile'=>$request->input('mobile')
        ]);
            $employees->save();
            return response()->json('employee created!');
        }    }

}
