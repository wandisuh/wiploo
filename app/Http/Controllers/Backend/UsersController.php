<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Xdata;
use App\Admin;
use Redirect;
use Hash;

class UsersController extends Controller
{
    //
    public function __construct() {
  		  //$this->middleware('auth');
  	}

    public function index() {
        if(Auth::user()) {
            return Redirect()->route('dashboard');
        }else {
            return Redirect()->route('login');
        }
    }

	public function login() {
		return view('backend.user.login');
	}

	public function doLogin(Request $request) {
		$validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6',
        ]);

        if($validator->fails()) { dd($validator);
            return redirect()->back()->withInput()->withErrors($validator);
        }

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            // Authentication passed...
            //return redirect()->intended(route('dashboard'));
            return redirect()->route('dashboard');
        }
        var_dump($request->all()); dump($request->email);
        return redirect()->back()->withInput()->withErrors('Email / password salah.');
	}

	public function register_post(Request $request) {
		$validator = Validator::make($request->all(), [
			'name' => 'required',
            'email' => 'required|string|email|max:255|unique:admins',
            'password' => 'required|string|min:6',
        ]);

        if($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $admin = new Xdata;
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->level = $request->level;
        $admin->password = bcrypt($request->password);
        $admin->hash = hash::make($request->name. date('Y-m-d h:i:s'));
        $admin->type = 'Super User';
        $admin->save();

        return redirect()->route('xdata-login')->with('Registrasi berhasil.');
	}

	public function profile() {

	}

	public function logout() {
		Auth()->logout();
		return redirect()->route('xdata-login');
	}

}
