<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemeControler extends Controller
{
    public function show($theme){
        $theme = config('pd_themes.' .$theme);
        return view($theme['file']);
    }
}
