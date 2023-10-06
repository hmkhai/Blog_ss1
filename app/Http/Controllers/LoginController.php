<?php

namespace App\Http\Controllers;

use App\Models\tbl_admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('log');
    }

    public function create()
    {
        return view('signin');
    }

    public function store(Request $request)
    {
        $request->validate([
            'admin_email' => 'required|email',
        ]);

        $email  = $request->email;
        $pwd    = $request->password;

        $adminModel = new tbl_admin();
        return $adminModel->create([
            'admin_email' => $email,
            'admin_password' => Hash::make($pwd),
            'admin_name' => 'admin',
            'admin_phone' => '0123456879'
        ]);
    }

    public function loginPost(Request $request)
    {
        $email  = $request->admin_email;
        $pwd    = $request->admin_password;
        // $logedIn = Auth::attempt(
        //     [
        //         'admin_email' => $email,
        //         'admin_password' => $pwd
        //     ]
        // );

        $logedIn = false;

        if (!$logedIn) {
            return redirect()->back()->with('error', 'Email or password is incorrect');
        }

        return redirect()->route('admin');;
    }
}
