<?php

namespace samadev\Http\Controllers;

use Illuminate\Http\Request;

class ManifestController extends Controller
{

        public function See()
    {

        return view('manifest.index');
    }

}
