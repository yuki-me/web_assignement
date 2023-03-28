<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use DB,Response;

class HomeMainController extends Controller
{
    //
    public function index(){
        return View('Home.home');
    }

    public function gotoBrand(){
        return Response::json('0');
    }

    public function getCategory(){
        try {
            $category = DB::select('CALL HomeView("CATEGORY")');
            if(count($category) > 0){
                return Response::json($category);
            }
        } catch (\Exception $ex) {
            $ex->getMessage();
        }
    }

    public function gotoCategory(Request $req){
        $cmd = $req->get('cmd');
        $id = $req->get('id');
        try {
            if($cmd == 'GET_ALL'){
                $result = DB::select('Call ProductByCategory("'. $cmd .'", "")');
                return Response::json($result);
            }else if($cmd == 'GET_BID'){
                $result = DB::select('Call ProductByCategory("'. $cmd .'", "'. $id .'")');
                return Response::json($result);
            }
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }

    public function getItemBCat(Request $req){
        $cmd = $req->get('cmd');
        try {
            $result = DB::select('Call HomeView("'. $cmd .'")');
            return Response::json($result);
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }

    public function getFavorite(Request $req){
        $cmd = $req->get('cmd');
        $user = $req->get('user');
        try {
            $result = DB::select('Call FavoriteView("'. $cmd .'", "", "", 0, 0, "'. $user .'")');
            return Response::json($result);
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }

    public function addFavorite(Request $req){
        $cmd = $req->get('cmd');
        $pid = $req->get('pid');
        $qty = $req->get('qty');
        $price = $req->get('price');
        $user = $req->get('user');
        try {
            $result = DB::select('Call FavoriteView("'. $cmd .'", "", "'. $pid .'", "'. $qty .'", "'. $price .'", "'. $user .'")');
            return Response::json($result);
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
        return Response::json('0');
    }

    public function deleteFavorite(Request $req){
        $cmd = $req->get('cmd');
        $id = $req->get('id');
        try {
            $result = DB::select('Call FavoriteView("'. $cmd .'", "'. $id .'", "", 0, 0, "")');
            return Response::json($result);
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
        return Response::json('0');
    }

    public function insertInvoice(Request $req){
        $cmd = $req->get('cmd');
        $cid = $req->get('cid');
        $amount = $req->get('amount');
        try {
            $result = DB::select('Call AdminInviceView("'. $cmd .'", "", "'. $cid .'", "", "'. $amount .'", "1")');
            return Response::json($result);
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
        return Response::json('0');
    }

    public function getOrderLine(Request $req){
        $cmd = $req->get('cmd');
        $cid = $req->get('cid');
        try {
            $result = DB::select('Call AdminInviceView("'. $cmd .'", "", "'. $cid .'", "", 0, "")');
            return Response::json($result);
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
        return Response::json('0');
    }
}
