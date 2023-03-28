<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use DB,Response;

class DisplayProductController extends Controller
{
    //
    public function index($id){
        return view('DisplayProduct.displayproduct', ['id' => $id]);
    }

    public function getDsiplay(Request $req){
        $cmd =$req->get('cmd');
        $id = $req->get('id');
        try {
            $result = DB::select('Call SingelProductView("'. $cmd .'", "'. $id .'")');
            return Response::json($result);
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
        return Response::json('0');
    }

    public function getFeature(Request $req){
        $cmd = $req->get('cmd');
        try {
            $result = DB::select('Call SingelProductView("'. $cmd .'", "")');
            return Response::json($result);
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
        return Response::json('0');
    }
}
