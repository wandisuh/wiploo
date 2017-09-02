<?php

namespace App\Http\Controllers\Backend;

use App\Models\Article;
use App\Models\Category;
use App\Models\Seo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Facades\Datatables;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\ImageManagerStatic as Image;
use File;


class ArticlesController extends Controller
{
	const THUMB_WIDTH = 68;
    const THUMB_HEIGHT = 55;

    const X_WIDTH = 409;
    const X_HEIGHT = 333;
    //
	public function __construct() {
		$this->middleware('auth');
	}
	
	public function index() { 
		$articles = Article::get();
		return view('backend.articles.index', compact('articles'));
	}
	
	public function addArticle() {
		$categories = Category::where('published', 1)->get();
		return view('backend.articles.addArticle', compact('categories'));
	}
	
	public function store(Request $request) { 
		$validator = Validator::make($request->all(), [
            'title' => 'required',
            'category_id' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png|max:2000',
            'content' => 'required'
        ]);

        if($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }
		
		$destinationPath = 'upload/img_artikel/';
		$imgFile = $request->file('image');
		$extension = $imgFile->getClientOriginalExtension();
		$imgFileName = microtime(true) . '.' . $extension;
		
		//Create thumb
		$thumbName = "thumb_" . $imgFileName;
		Image::make($imgFile->getRealPath())->fit(self::THUMB_WIDTH, self::THUMB_HEIGHT)->save($destinationPath . $thumbName);

		$imgFile->move($destinationPath, $imgFileName);
		
		$article = new Article;
		$article->title = $request->title;
		$article->category_id = $request->category_id;
		$article->author = 'Admin wiploo';
		$article->image = $imgFileName;
		$article->short_content = $request->short_content;
		$article->content = $request->content;
		$article->slug = str_slug($request->title);
		$article->save();

		$seo = new Seo;
		$seo->og_name = 'Wiploo';
		$seo->slug = str_slug($request->title);
		$seo->save();
		
		return redirect()->route('data-articles')->with('success','Data berhasil disimpan.');
	}
	
	public function edit($id) {
		$article = Article::find($id);
		$categories = Category::where('published', 1)->get();
		return view('backend.articles.editArticle', compact('article','categories'));
	}
	
	public function update(Request $request) {
		$validator = Validator::make($request->all(), [
            'title' => 'required',
            'category_id' => 'required',
            'image' => 'mimes:jpeg,jpg,png|max:2000',
            'content' => 'required'
        ]);

        if($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }
		
		$destinationPath = 'upload/img_artikel/';
		$imgFile = $request->file('image');
		$cek_article = Article::where('id', $request->id)->first();

		if($imgFile) { dd($imgFile);
			$extension = $imgFile->getClientOriginalExtension();
			$imgFileName = microtime(true) . '.' . $extension;
			
			//Create thumb
			$thumbName = "thumb_" . $imgFileName;
			$xName = "x_" . $imgFileName;
			Image::make($imgFile->getRealPath())->fit(self::THUMB_WIDTH, self::THUMB_HEIGHT)->save($destinationPath . $thumbName);
			Image::make($imgFile->getRealPath())->fit(self::X_WIDTH, self::X_HEIGHT)->save($destinationPath . $xName);

			$imgFile->move($destinationPath, $imgFileName);

			unlink('/var/www/html/wiploo/public/upload/img_artikel/'.$cek_article->image);
			unlink('/var/www/html/wiploo/public/upload/img_artikel/thumb_'.$cek_article->image);
			unlink('/var/www/html/wiploo/public/upload/img_artikel/x_'.$cek_article->image);
			
			$article = Article::find($request->id);
			$article->title = $request->title;
			$article->category_id = $request->category_id;
			$article->author = 'Admin wiploo';
			$article->image = $imgFileName;
			$article->short_content = $request->short_content;
			$article->content = $request->content;
			$article->slug = str_slug($request->title);
			$article->save();

			$seo = Seo::find($cek_article->slug);
			$seo->og_name = 'Wiploo';
			$seo->slug = str_slug($request->title);
			$seo->save();
		}else {
			$article = Article::find($request->id);
			$article->title = $request->title;
			$article->category_id = $request->category_id;
			$article->author = 'Admin wiploo';
			$article->short_content = $request->short_content;
			$article->content = $request->content;
			$article->slug = str_slug($request->title);
			$article->save();

			$seo = Seo::find($cek_article->slug);
			$seo->og_name = 'Wiploo';
			$seo->slug = str_slug($request->title);
			$seo->save();
		}
		
		
		return redirect()->route('data-articles')->with('success','Data berhasil disimpan.');
	}
	
	public function deleteArticle($id) {
		$artikel = Article::where('id', $id)->first();

		Article::where('id', $id)->delete();
		Seo::where('slug', $artikel->slug)->delete();
		
		unlink('/var/www/html/wiploo/public/upload/img_artikel/'.$artikel->image);
		unlink('/var/www/html/wiploo/public/upload/img_artikel/thumb_'.$artikel->image);
		unlink('/var/www/html/wiploo/public/upload/img_artikel/x_'.$artikel->image);

		return redirect()->route('data-articles')->with('alert-success', 'berhasil dihapus.');
	}
}
