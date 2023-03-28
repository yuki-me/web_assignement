<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use DB,Response;

class CategoryController extends Controller
{
    //
    public function index(){
        return view('Category.category');
    }

    public function indexId($id){
        return view('Feature.feature', ['id' => $id]);
    }

    public function getAll(Request $req){
        $cmd = $req->get('cmd');
        try {
            $result = DB::select('Call ProductByCategory("'. $cmd .'", "")');
            return Response::json($result);
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }

    public function getBID(Request $req){
        $cmd = $req->get('cmd');
        $id = $req->get('id');
        try {
            $result = DB::select('Call ProductByCategory("'. $cmd .'", "'. $id .'")');
            return Response::json($result);
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }
    
    public function getPer(Request $req){
        $cmd = $req->get('cmd');
        $id = $req->get('id');
        try {
            $result = DB::select('Call ProductByCategory("'. $cmd .'", "'. $id .'")');
            return Response::json($result);
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }
}
