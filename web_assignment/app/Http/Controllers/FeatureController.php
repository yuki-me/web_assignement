<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeatureController extends Controller
{
    //
    public function index(){
        return View('Feature.feature');
    }
}
