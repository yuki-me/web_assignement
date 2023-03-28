<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use DB,Response;

class LoginAdminController extends Controller
{
    //
    public function index(){
        return view('Admin.Login.login');
    }

    public function getLogin(Request $req){
        $cmd = $req->get('cmd');
        $email = $req->get('email');
        $pass = $req->get('pass');
        try {
            $result = DB::select('Call AdminLoginView("'. $cmd .'", "'. $email .'", "'. $pass .'")');
            return Response::json($result);
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
        return Response::json('0');
    }
}
