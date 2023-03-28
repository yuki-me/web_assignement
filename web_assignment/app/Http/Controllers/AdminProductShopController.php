<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use App\Models\AdminProductShop;
use DB,Response;

class AdminProductShopController extends Controller
{
    //
    public function index(){
        return view('Admin.AdminProductShop.adminproductshop');
    }

    public function getAll(Request $req){
        $cmd = $req->get('cmd');
        try {
            $result = DB::select('Call AdminProductShopView("'. $cmd .'", "", "", "", 0, 0, 0, 0, "", "", "", "", "")');
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
            $result = DB::select('Call AdminProductShopView("'. $cmd .'", "'. $id .'", "", "", 0, 0, 0, 0, "", "", "", "", "")');
            return Response::json($result);
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
        return Response::json('0');
    }

    public function insert(Request $req){
        $cmd = $req->get('cmd');
        $productcode = $req->get('productcode');
        $displayspace = $req->get('displayspace');
        $qty = $req->get('qty');
        $cost = $req->get('cost');
        $saleprice = $req->get('saleprice');
        $amount = $req->get('amount');
        $statuspromotion = $req->get('statuspromotion');
        $statusproduct = $req->get('statusproduct');
        try {
            $result = DB::select('Call AdminProductShopView("'. $cmd .'", "", "'. $productcode .'", "'. $displayspace .'", "'. $qty .'", "'. $cost .'", "'. $saleprice .'", "'. $amount .'", "'. $statuspromotion .'", "'. $statusproduct .'", "", "", "")');
            return Response::json($result);
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
        return Response::json('0');
    }

    public function update(Request $req){
        $cmd = $req->get('cmd');
        $id = $req->get('id');
        $productcode = $req->get('productcode');
        $displayspace = $req->get('displayspace');
        $qty = $req->get('qty');
        $cost = $req->get('cost');
        $saleprice = $req->get('saleprice');
        $amount = $req->get('amount');
        $statuspromotion = $req->get('statuspromotion');
        $statusproduct = $req->get('statusproduct');
        try {
            $result = DB::select('Call AdminProductShopView("'. $cmd .'", "'. $id .'", "'. $productcode .'", "'. $displayspace .'", "'. $qty .'", "'. $cost .'", "'. $saleprice .'", "'. $amount .'", "'. $statuspromotion .'", "'. $statusproduct .'", "", "", "")');
            return Response::json($result);
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
        return Response::json('0');
    }

    public function delete(Request $req){
        $cmd = $req->get('cmd');
        $id = $req->get('id');
        try {
            $result = DB::select('Call AdminProductShopView("'. $cmd .'", "'. $id .'", "", "", 0, 0, 0, 0, "", "", "", "", "")');
            return Response::json($result);
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
        return Response::json('0');
    }

    public function inserti(Request $req){
        $cmd = $req->get('cmd');
        $id = $req->get('id');
        $filename = $req->get('filename');
        $filepath = $req->get('filepath');
        $filesize = $req->get('filesize');
        try {
            $file_path = 'files/';
            $file = $req->file('myfile');
            DB::select('Call AdminProductShopView("INSERTI", "'. $id .'", "", "", 0, 0, 0, 0, "", "", "'. $filename .'", "'. $filepath .'", "'. $filesize .'")');

            $file->storeAs($file_path, $filename, 'product');
            return Response::json($file);
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
        return Response::json('0');
    }

    public function prosea(Request $req){
        $cmd = $req->get('cmd');
        try {
            $result = DB::select('Call AdminProductShopView("'. $cmd .'", "", "", "", 0, 0, 0, 0, "", "", "", "", "")');
            if(count($result) > 0){
                return Response::json($result);
            }
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
        return Response::json('0');
    }

    public function presea(Request $req){
        $cmd = $req->get('cmd');
        try {
            $result = DB::select('Call AdminProductShopView("'. $cmd .'", "", "", "", 0, 0, 0, 0, "", "", "", "", "")');
            if(count($result) > 0){
                return Response::json($result);
            }
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
        return Response::json('0');
    }

    public function stasea(Request $req){
        $cmd = $req->get('cmd');
        try {
            $result = DB::select('Call AdminProductShopView("'. $cmd .'", "", "", "", 0, 0, 0, 0, "", "", "", "", "")');
            if(count($result) > 0){
                return Response::json($result);
            }
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
        return Response::json('0');
    }
}
