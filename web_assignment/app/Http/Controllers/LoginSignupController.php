<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use DB,Response;

class LoginSignupController extends Controller
{
    //
    public function index(){
        return view('Login.loginlogup');
    }

    public function login(Request $request){
        $email = $request->get('P_Email');
        $password = $request->get('P_Password');
        try {
            $checkLogin = DB::select('Call LoginSignup("LOGIN", "", "", "", "", "", "", "' . $email . '", "", "", "", "", "", "", "", "", "' . $password .'")');
            if( count($checkLogin) > 0){
                // $checkLogin -> session() -> put('user', $checkLogin['P_Email']);
                return Response::json($checkLogin);
            }
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
        return Response::json('0');
    }

    public function signup(Request $request){
        $firstName = $request->get('P_LastName');
        $lastName = $request->get('P_FirstName');
        $gender = $request->get('P_Gender');
        $dob = $request->get('P_DateOfBirth');
        $phonrnumber = $request->get('P_PhoneNumber');
        $email = $request->get('P_Email');
        $password = $request->get('P_Password');
        $jobTitle = $request->get('P_JobTitle');
        $conuntry = $request->get('P_Country');
        $province = $request->get('P_Province');
        $distrinct = $request->get('P_District');
        $communes = $request->get('P_Commnues');
        $villages = $request->get('P_Villages');
        $street = $request->get('P_Street');
        $house = $request->get('P_House');
        try {
            $insertData = DB::select('Call LoginSignup("SIGNUP", "", "' . $firstName . '", "' . $lastName . '", "' . $gender . '", "' . $dob . '", "' . $phonrnumber . '", "' . $email . '", "' . $jobTitle . '", "' . $conuntry . '", "' . $province . '", "' . $distrinct . '", "' . $communes . '", "' . $villages . '", "' . $street . '", "' . $house . '", "' . $password . '")');
            if(count($insertData) > 0){
                return Response::json($insertData);
            }
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }

    public function getCountry(){
        try {
            $country = DB::select('Call LoginSignup("COU", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "")');
            if(count($country) > 0){
                return Response::json($country);
            }
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
        return Response::json('0');
    }

    public function getProvince(Request $request){
        $cmd = $request->get('P_CMD');
        $country = $request->get('P_Country');
        try {
            $province = DB::select('Call LoginSignup("PRO", "", "", "", "", "", "", "", "", "' . $country . '", "", "", "", "", "", "", "")');
            if(count($province) > 0){
                return Response::json($province);
            }
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
        return Response::json('0');
    }

    public function getDistrict(Request $request){
        $cmd = $request->get('P_CMD');
        $province = $request->get('P_Province');
        try {
            $distrinct = DB::select('Call LoginSignup("DIS", "", "", "", "", "", "", "", "", "", "' . $province . '", "", "", "", "", "", "")');
            if(count($distrinct) > 0){
                return Response::json($distrinct);
            }
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
        return Response::json('0');
    }

    public function getCommnues(Request $request){
        $cmd = $request->get('P_CMD');
        $district = $request->get('P_District');
        try {
            $communes = DB::select('Call LoginSignup("COM", "", "", "", "", "", "", "", "", "", "", "' . $district . '", "", "", "", "", "")');
            if(count($communes) > 0){
                return Response::json($communes);
            }
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
        return Response::json('0');
    }

    public function getVillages(Request $request){
        $cmd = $request->get('P_CMD');
        $communes = $request->get('P_Commnues');
        try {
            $villages = DB::select('Call LoginSignup("VIL", "", "", "", "", "", "", "", "", "", "", "", "' . $communes . '", "", "", "", "")');
            if(count($villages) > 0){
                return Response::json($villages);
            }
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
        return Response::json('0');
    }
}
