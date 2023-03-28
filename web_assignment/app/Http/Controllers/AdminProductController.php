<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use DB,Response;

class AdminProductController extends Controller
{
    //
    public function index(){
        return view('Admin.AdminProducts.AdminProduct');
    }

    public function getAll(Request $req){
        $cmd = $req->get('cmd');
        try {
            $result = DB::select('Call AdminProductView("' . $cmd . '", "", "", "", "", "")');
            if( count($result) > 0){
                return Response::json($result);
            }
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
        return Response::json('0');
    }

    public function getById(Request $req){
        $cmd = $req->get('cmd');
        $id = $req->get('id');
        try {
            $result = DB::select('Call AdminProductView("' . $cmd . '", "' . $id . '", "", "", "", "")');
            if( count($result) > 0){
                return Response::json($result);
            }
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
        return Response::json('0');
    }

    public function insert(Request $req){
        $cmd = $req->get('cmd');
        $item = $req->get('item');
        $description = $req->get('description');
        $category = $req->get('category');
        try {
            $result = DB::select('Call AdminProductView("' . $cmd . '", "", "' . $item . '", "' . $description . '", "' . $category . '", "")');
            if( count($result) > 0){
                return Response::json($result);
            }
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
        return Response::json('0');
    }

    public function update(Request $req){
        $cmd = $req->get('cmd');
        $id = $req->get('id');
        $item = $req->get('item');
        $description = $req->get('description');
        $category = $req->get('category');
        try {
            $result = DB::select('Call AdminProductView("' . $cmd . '", "' . $id . '", "' . $item . '", "' . $description . '", "' . $category . '", "")');
            if( count($result) > 0){
                return Response::json($result);
            }
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
        return Response::json('0');
    }

    public function delete(Request $req){
        $cmd = $req->get('cmd');
        $id = $req->get('id');
        try {
            $result = DB::select('Call AdminProductView("' . $cmd . '", "' . $id . '", "", "", "", "")');
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
        return Response::json('0');
    }

    public function getCategory(Request $req){
        $cmd = $req->get('cmd');
        try {
            $result = DB::select('Call AdminProductView("' . $cmd . '", "", "", "", "", "")');
            if( count($result) > 0){
                return Response::json($result);
            }
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
        return Response::json('0');
    }

    public function getCategoryId(Request $req){
        $cmd = $req->get('cmd');
        $id = $req->get('id');
        try {
            $result = DB::select('Call AdminProductView("' . $cmd . '", "' . $id . '", "", "", "", "")');
            if( count($result) > 0){
                return Response::json($result);
            }
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
        return Response::json('0');
    }

    public function insertCate(Request $req){
        $cmd = $req->get('cmd');
        $category = $req->get('category');
        try {
            $result = DB::select('Call AdminProductView("' . $cmd . '", "", "", "", "' . $category . '", "")');
            return Response::json('0');
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
        return Response::json('0');
    }

    public function updateCate(Request $req){
        $cmd = $req->get('cmd');
        $id = $req->get('id');
        $category = $req->get('category');
        try {
            $result = DB::select('Call AdminProductView("' . $cmd . '", "' . $id . '", "", "", "' . $category . '", "")');
            return Response::json('0');
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
        return Response::json('0');
    }

    public function deleteCate(Request $req){
        $cmd = $req->get('cmd');
        $id = $req->get('id');
        try {
            $result = DB::select('Call AdminProductView("' . $cmd . '", "' . $id . '", "", "", "", "")');
            return Response::json('0');
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
        return Response::json('0');
    }

    public function getSubCate(Request $req){
        $cmd = $req->get('cmd');
        try {
            $result = DB::select('Call AdminProductView("' . $cmd . '", "", "", "", "", "")');
            if( count($result) > 0){
                return Response::json($result);
            }
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
        return Response::json('0');
    }

    public function getSubBy(Request $req){
        $cmd = $req->get('cmd');
        $id = $req->get('id');
        try {
            $result = DB::select('Call AdminProductView("' . $cmd . '", "' . $id . '", "", "", "", "")');
            if( count($result) > 0){
                return Response::json($result);
            }
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
        return Response::json('0');
    }

    public function insertSub(Request $req){
        $cmd = $req->get('cmd');
        $category = $req->get('category');
        $subcategory = $req->get('subcategory');
        try {
            $result = DB::select('Call AdminProductView("' . $cmd . '", "", "", "", "' . $category . '", "' . $subcategory . '")');
            if( count($result) > 0){
                return Response::json($result);
            }
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
        return Response::json('0');
    }

    public function updateSub(Request $req){
        $cmd = $req->get('cmd');
        $id = $req->get('id');
        $category = $req->get('category');
        $subcategory = $req->get('subcategory');
        try {
            $result = DB::select('Call AdminProductView("' . $cmd . '", "' . $id . '", "", "", "' . $category . '", "' . $subcategory . '")');
            return Response::json('0');
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
        return Response::json('0');
    }

    public function deleteSub(Request $req){
        $cmd = $req->get('cmd');
        $id = $req->get('id');
        try {
            $result = DB::select('Call AdminProductView("' . $cmd . '", "' . $id . '", "", "", "", "")');
            return Response::json('0');
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
        return Response::json('0');
    }
}
