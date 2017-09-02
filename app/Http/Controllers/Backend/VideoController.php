<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use File;
use Auth;
use App\Models\Video;
use App\Models\Category;
use App\Models\Seo;


class VideoController extends Controller
{
    //
    public function __construct() {
        $this->middleware('auth');
    }

  	public function index() {
  		  $videos = Video::get();
  		  return view('backend.video.index', compact('videos'));
  	}

  	public function add() {
  		  $categories = Category::where('published', 1)->get();
  		  return view('backend.video.add', compact('categories'));
  	}

  	public function store(Request $request) {
        $validator = '';
        if($request->file('file_video')) {
            $validator = Validator::make($request->all(), [
                'title' => 'required',
                'category_id' => 'required',
                'file_video' => 'required|mimes:mp4|max:2000',
                'content' => 'required'
            ]);
        }else {
            $validator = Validator::make($request->all(), [
                'title' => 'required',
                'category_id' => 'required',
                'file_embed' => 'required',
                'content' => 'required'
            ]);
        }

        if($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

  		  return redirect()->route('')->with('success','Data berhasil disimpan.');
  	}

  	public function edit($id) {
    		$video = Video::find($id);
    		$categories = Category::where('published', 1)->get();
    		return view('backend.video.edit', compact('video','categories'));
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




  		return redirect()->route('')->with('success','Data berhasil disimpan.');
  	}

  	public function deleteVideo($id) {
    		$artikel = Video::where('id', $id)->first();

    		Video::where('id', $id)->delete();
    		Seo::where('slug', $artikel->slug)->delete();

    		unlink('/var/www/html/wiploo/public/upload/videos/'.$artikel->image);

    		return redirect()->route('')->with('alert-success', 'berhasil dihapus.');
  	}

}
