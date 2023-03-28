<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use DB,Response;

class BranchController extends Controller
{
    //
    public function index(){
        // $branch = DB::select(
        //     'Call CountryView("GET_ALL", "", "", "", "", "", "")'
        // );
        // dd($branch);

        // return Response::json($branch);
        return View('Branch.branch');
    }

    

    // public function getBranch(){
    //     $branch = DB::select(
    //         'Call CountryView("GET_ALL", "", "", "", "", "", "")'
    //     );
    //     // dd($branch);

    //     return Response::json($branch);
    // }
}
