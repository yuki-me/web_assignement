<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use DB,Response;

class AdminCustomerController extends Controller
{
    //
    public function index(){
        return view('Admin.AdminCustomer.admincustomer');
    }

    public function getCustomer(Request $req){
        $cmd = $req->get('cmd');
        try {
            $result = DB::select('Call AdminCustomerView("' . $cmd . '", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "")');
            if(count($result) > 0){
                return Response::json($result);
            }
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
        return Response::json('0');
    }

    public function getCustomerId(Request $req){
        $cmd = $req->get('cmd');
        $id = $req->get('id');
        try {
            $result = DB::select('Call AdminCustomerView("' . $cmd . '", "' . $id . '", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "")');
            if(count($result) > 0){
                return Response::json($result);
            }
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
        return Response::json('0');
    }
}
