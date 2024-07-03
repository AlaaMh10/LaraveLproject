<?php

namespace App\Http\Controllers\Demo;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Indicator;
use App\Models\IndicatorCtgr;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function HomeMain(){
        return view('frontend.index');
    }// end mehtod 

    public function About(){
        $aboutpage = About::find(1);
        return view('frontend.about_page',compact('aboutpage'));
    }

    public function MarketPlace(){
        
    $categories = IndicatorCtgr::orderBy('indicator_category','ASC')->limit(4)->get();
    $allindicators = Indicator::latest()->get();
    $recentindicators = Indicator::latest()->limit(4)->get();
        return view('frontend.indicator',compact('allindicators','categories','recentindicators'));
    }// end mehtod 

    public function ContactMethod(){
        return view('frontend.contact');
    }

}
