<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;

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

		}

}
