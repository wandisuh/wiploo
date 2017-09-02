<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Admin;
use Hash;

class AdminController extends Controller
{
    //
		public function __construct() {
				$this->middleware('auth');
		}

		public function index() {
				$users = Admin::get();
				return view('backend.admin.index', compact('users'));
		}

		public function add() {
				return view('backend.admin.add');
		}

		public function store(Request $request) {
				$validator = Validator::make($request->all(), [
					'name' => 'required|string|max:255',
					'email' => 'required|string|email|max:255',
					'password' => 'required|string|min:6',
				]);

				if($validator->fails()) {
						return redirect()->back()->withInput()->withErrors($validator);
				}

				$admin = new Admin;
				$admin->name = $request->name;
				$admin->email = $request->email;
				$admin->password = bcrypt($request->password);
				$admin->hash = hash::make($request->name.date('Y-m-d').$request->password.$request->email);
				$admin->status = $request->status;
				$admin->level = $request->level;
				$admin->save();

				return redirect()->route('data-admins')->with('success','Data berhasil disimpan.');
		}

		public function edit($id) {
				$admin = Admin::find($id);
				return view('backend.admin.edit', compact('admin'));
		}

		public function update(Request $request) {
				$validator = Validator::make($request->all(), [
						'name' => 'required|string|max:255',
						'email' => 'required|string|email|max:255',
						'level' => 'required',
						'status' => 'required',
				]);

				if($validator->fails()) {
						return redirect()->back()->withInput()->withErrors($validator);
				}
				if($request->password) {
						$admin = Admin::find($request->id);
						$admin->name = $request->name;
						$admin->email = $request->email;
						$admin->password = bcrypt($request->password);
						$admin->hash = hash::make($request->name.date('Y-m-d').$request->password.$request->email);
						$admin->status = $request->status;
						$admin->level = $request->level;
						$admin->save();
				}else {
						$admin = Admin::find($request->id);
						$admin->name = $request->name;
						$admin->email = $request->email;
						$admin->hash = hash::make($request->name.date('Y-m-d').$request->status.$request->email);
						$admin->status = $request->status;
						$admin->level = $request->level;
						$admin->save();
				}
				return redirect()->route('data-admins')->with('success','Data berhasil disimpan.');
		}

		public function deleteAdmin($id) {
				Admin::where('id', $id)->delete();
				return redirect()->route('data-admins')->with('alert-success', 'berhasil dihapus.');
		}

}
