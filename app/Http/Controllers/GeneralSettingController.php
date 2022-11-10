<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class GeneralSettingController extends Controller
{
    //
    public function language($lang){

        session()->put('language', $lang);
        return redirect()->back();
    }
}
