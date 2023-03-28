<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use App\Models\AdminBranch;
use DB,Response;

class AdminBranchController extends Controller
{
    //
    public function index(){
        return view('Admin.AdminBranch.adminbranch');
    }

    public function getBranch(Request $req){
        $cmd = $req->get('cmd');
        try {
            $result = DB::select('Call AdminBranchView("'. $cmd .'", "", "", "", "", "", "", "")');
            if(count($result) > 0){
                return Response::json($result);
            }
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
        return Response::json();
    }

    public function getBranchId(Request $req){
        $cmd = $req->get('cmd');
        $id = $req->get('id');
        try {
            $result = DB::select('Call AdminBranchView("'. $cmd .'", "'. $id .'", "", "", "", "", "", "")');
            if(count($result) > 0){
                return Response::json($result);
            }
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
        return Response::json('0');
    }

    public function insertBranch(Request $req){
        $cmd = $req->get('cmd');
        $branchname = $req->get('branchname');
        $description = $req->get('description');
        $branchimage = $req->get('branchimage');
        try {
            $result = DB::select('Call AdminBranchView("'. $cmd .'", "", "'. $branchname .'", "'. $description .'", "'. $branchimage .'", "", "", "")');
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


            DB::select('Call AdminBranchView("INSERTI", "", "", "", "", "'. $filename .'", "'. $filepath .'", "'. $filesize .'")');

            $file->storeAs($file_path, $filename, 'branch');

            $result = DB::select('Call AdminBranchView("GET_FID", "", "", "", "", "", "", "")');
            return Response::json($result);
            // if(count($result) > 0){
            //     return Response::json($result);
            // }
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
        return Response::json('0');
    }

    public function updateBranch(Request $req){
        $cmd = $req->get('cmd');
        $id = $req->get('id');
        $branchname = $req->get('branchname');
        $description = $req->get('description');
        $branchimage = $req->get('branchimage');
        try {
            $result = DB::select('Call AdminBranchView("'. $cmd .'", "'. $id .'", "'. $branchname .'", "'. $description .'", "'. $branchimage .'", "", "", "")');
            return Response::json('0');
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
        return Response::json('0');
    }

    public function deleteBranch(Request $req){
        $cmd = $req->get('cmd');
        $id = $req->get('id');
        try {
            $result = DB::select('Call AdminBranchView("'. $cmd .'", "'. $id .'", "", "", "", "", "", "")');
            return Response::json($result);
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
        return Response::json('0');
    }
}
