<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
session_start();

class AdminController extends Controller
{
    public function log(){
        return view('log');
    }

    public function admin_layout(){
        return view('admin.dashboard');
    }

    public function dashboard(Request $request){

        $admin_email =$request->admin_email;
        $admin_password =md5($request->admin_password);


        $result = DB::table('tbl_admin')->where('admin_email', $admin_email)->where('admin_password', $admin_password)->first();
        //return view('admin.dashboard');
        if( $result){
            Session::put('admin_name', $result->admin_name);
            Session::put('admin_id', $result->admin_id);
            return view('admin.dashboard');
        }else{
            Session::put('message', 'Đăng nhập thất bại, vui lòng thử lại');
            return Redirect::to('/');
        }

    }
    public function logout() {
		// Auth::logout();
		// return view('log');

            Session::put('admin_name',null);
            Session::put('admin_id', null);
            return Redirect::to('/');
	}
}
