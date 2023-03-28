<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use DB,Response;

class AdminPurchaseController extends Controller
{
    //
    public function index(){
        return view();
    }

    public function getAll(Request $req){
        $cmd = $req->get('cmd');
        try {
            $result = DB::select('Call AdminPurchaseView("'. $cmd .'", "", "", "", "", "", "")');
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
            $result = DB::select('Call AdminPurchaseView("'. $cmd .'", "'. $id .'", "", "", "", "", "")');
            return Response::json($result);
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
        return Response::json('0');
    }

    public function INSERT(Request $req){
        $cmd = $req->get('cmd');
        $company = $req->get('company');
        $date = $req->get('date');
        $staff = $req->get('staff');
        $amount = $req->get('amount');
        $status = $req->get('status');
        try {
            $result = DB::select('Call AdminPurchaseView("'. $cmd .'", "", "'. $company .'", "'. $date .'", "'. $staff .'", "'. $amount .'", "'. $status .'")');
            return Response::json('1');
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
        return Response::json('0');
    }

    public function UPDATE(Request $req){
        $cmd = $req->get('cmd');
        $id = $req->get('id');
        $company = $req->get('company');
        $date = $req->get('date');
        $staff = $req->get('staff');
        $amount = $req->get('amount');
        $status = $req->get('status');
        try {
            $result = DB::select('Call AdminPurchaseView("'. $cmd .'", "'. $id .'", "'. $company .'", "'. $date .'", "'. $staff .'", "'. $amount .'", "'. $status .'")');
            return Response::json('1');
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
        return Response::json('0');
    }

    public function DELETE(Request $req){
        $cmd = $req->get('cmd');
        $id = $req->get('id');
        try {
            $result = DB::select('Call AdminPurchaseView("'. $cmd .'", "'. $id .'", "", "", "", "", "")');
            return Response::json('1');
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
        return Response::json('0');
    }
}
