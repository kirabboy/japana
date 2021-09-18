<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function csvc(){
        return view('csvc');
    }
    public function dkgd(){
        return view('dkgd');
    }
    public function pttt(){
        return view ('pttt');
    }
    public function tggh(){
        return view ('tggh');
    }
    public function csbh(){
        return view ('csbh');
    }
    public function csbm(){
        return view ('csbm');
    }




}
