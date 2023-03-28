<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use DB,Response;

class AdminPromotionController extends Controller
{
    //
    public function index(){
        return view('Admin.AdminPromotion.adminPromotion');
    }

    public function getPromo(Request $req){
        $cmd = $req->get('cmd');
        try {
            $result = DB::select('Call AdminPromoionView("'. $cmd .'", "", "", "", "", "", "")');
            if(count($result) > 0){
                return Response::json($result);
            }
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
        return Response::json();
    }

    public function getPromoId(Request $req){
        $cmd = $req->get('cmd');
        $id = $req->get('id');
        try {
            $result = DB::select('Call AdminPromoionView("'. $cmd .'", "'. $id .'", "", "", "", "", "")');
            if(count($result) > 0){
                return Response::json($result);
            }
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
        return Response::json('0');
    }

    public function insertPromo(Request $req){
        $cmd = $req->get('cmd');
        $percentage = $req->get('percentage');
        $image = $req->get('image');
        try {
            $result = DB::select('Call AdminPromoionView("'. $cmd .'", "", "'. $percentage .'", "'. $image .'", "", "", "")');
            if(count($result) > 0){
                return Response::json('0');
            }
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
        return Response::json('0');
    }

    public function insertImage(Request $req){
        $cmd = $req->get('cmd');
        $filename = $req->get('filename');
        $filepath = $req->get('filepath');
        $filesize = $req->get('filesize');
        try {
            $file_path = 'files/';
            $file = $req->file('myfile');
            // $file_name = $file->getClientOriginalName();
            // $filesize = $file->getSize();

            // return Response::json($filename);


            DB::select('Call AdminPromoionView("INSERTI", "", "", "", "'. $filename .'", "'. $filepath .'", "'. $filesize .'")');

            $file->storeAs($file_path, $filename, 'branch');

            $result = DB::select('Call AdminPromoionView("GET_FID", "", "", "", "", "", "")');
            return Response::json($result);
            // if(count($result) > 0){
            //     return Response::json($result);
            // }
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
        return Response::json('0');
    }

    public function updatePromo(Request $req){
        $cmd = $req->get('cmd');
        $id = $req->get('id');
        $percentage = $req->get('percentage');
        $image = $req->get('image');
        try {
            $result = DB::select('Call AdminPromoionView("'. $cmd .'", "'. $id .'", "'. $percentage .'", "'.$image.'", "", "", "")');
            return Response::json('0');
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
        return Response::json('0');
    }

    public function deletePromo(Request $req){
        $cmd = $req->get('cmd');
        $id = $req->get('id');
        try {
            $result = DB::select('Call AdminPromoionView("'. $cmd .'", "'. $id .'", "", "", "", "", "")');
            return Response::json($result);
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
        return Response::json('0');
    }
}
