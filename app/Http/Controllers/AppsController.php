<?php

namespace samadev\Http\Controllers;

use Illuminate\Http\Request;

class AppsController extends Controller
{
    public function allControllers()
    {
        return view('apps.index');
    }
}
