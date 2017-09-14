<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Article;
use App\Models\Video;
use App\Models\Seo;
use App\Models\Subscribe;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
		//
		public function __construct() {

		}

		public function index(Request $request) {
				$categories = Category::get();
				$articles = Article::get();
				$videos = Video::get();
				//$banner = Article::where('')->get();
				//$popular = Article::where('popular', 1)->get();
				//$featured = Article::where('featured', 1)->get();
				return view('frontend.home.home', compact('category', 'articles','videos'));
		}

		public function subscribe(Request $request) {
				$validator = Validator::make($request->all(), [
						'fullName' => 'required',
						'email' => 'required|string|email|max:255'
				]);

				if($validator->fails()) {
						return redirect()->back()->withInput()->withErrors($validator);
				}

				$subscribe = new Subscribe;
				$subscribe->fullName = $request->fullName;
				$subscribe->email = $request->email;
				$subscribe->save();

				return redirect()->route('subscribe-success')->with('success','Data berhasil disimpan.');
		}

		public function subscribe_success(Request $request) {
				return 'p';view('');
		}

		public function about_us(Request $request) {
				return 'about_us';
		}

		public function term_and_conditions(Request $request) {
				return 'term_and_conditions';view('');
		}

		public function privacy_policy(Request $request) {
				return 'privacy_policy';view('');
		}

		public function career(Request $request) {
				return 'career';view('');
		}

}
