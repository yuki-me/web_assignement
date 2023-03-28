<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use DB,Response;

class AdminInvicechController extends Controller
{
    //
    public function index(){
        return view('Admin.AdminInvoice.admininvoice');
    }

    public function getAll(Request $req){
        $cmd = $req->get('cmd');
        try {
            $result = DB::select('Call AdminInviceView("'. $cmd .'", "", "", "", 0, "")');
            if(count($result) > 0){
                return Response::json($result);
            }
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
        return Response::json('0');
    }

    public function getBID(Request $req){
        $cmd = $req->get('cmd');
        $id = $req->get('id');
        try {
            $result = DB::select('Call AdminInviceView("'. $cmd .'", "'. $id .'", "", "", 0, "")');
            if(count($result) > 0){
                return Response::json($result);
            }
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
        return Response::json('0');
    }

    public function getItemByInvoice(Request $req){
        $cmd = $req->get('cmd');
        $id = $req->get('id');
        try {
            $result = DB::select('Call AdminInviceDetailView("'. $cmd .'", "", "'. $id .'", "", 0, 0, 0, "")');
            if(count($result) > 0){
                return Response::json($result);
            }
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
        return Response::json('0');
    }
}
