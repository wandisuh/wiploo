<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Member;

class MemberController extends Controller
{
    //
	public function __construct() {
		$this->middleware('auth');
	}
	
	public function index() {
		$users = Member::get();
		return view('backend.member.index', compact('users'));
	}

}
