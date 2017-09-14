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
				$categories = Category::where('published', 1)->get();
				$articles = Article::limit(4)->get();
				$videos = Video::get();
				$banner = Article::where('banners', 0)->limit(3)->get();
				$banners = $banner->split(2);
				$popular = Article::where('popular', 0)->limit(5)->get();
				$featured = Article::where('featured', 0)->limit(3)->get();
				//$breaking_news = Article::where('featured', 1)->limit()->get();
				return view('frontend.home.home', compact('categories', 'articles','videos','popular','banners','featured'));
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
			$categories = Category::where('published', 1)->get();
			return view('frontend.home.subscribe_success', compact('categories'));
		}

		public function about_us(Request $request) {
				$categories = Category::where('published', 1)->get();
				return view('frontend.home.about_us', compact('categories'));
		}

		public function term_and_conditions(Request $request) {
				$categories = Category::where('published', 1)->get();
				return view('frontend.home.term_and_conditions', compact('categories'));
		}

		public function privacy_policy(Request $request) {
				$categories = Category::where('published', 1)->get();
				return view('frontend.home.privacy_policy', compact('categories'));
		}

		public function faq(Request $request) {
			$categories = Category::where('published', 1)->get();
			return view('frontend.home.faq', compact('categories'));
		}

		public function career(Request $request) {
				$categories = Category::where('published', 1)->get();
				return view('frontend.home.career', compact('categories'));
		}

}
