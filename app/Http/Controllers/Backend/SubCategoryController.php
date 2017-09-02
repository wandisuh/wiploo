<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\SubCategory;
use App\Models\Category;
use App\Models\Seo;

class SubCategoryController extends Controller
{
    //
    public function __construct() {
		$this->middleware('auth');
	}
	
    public function per_category($id) {
    	$subcategories = SubCategory::where('category_id', $id)->get();
    	$category = Category::where('id', $id)->first();
    	return view('backend.sub_category.per_category',compact('subcategories','id','category'));
    }

    public function add($id) {
    	$category = Category::where('id', $id)->first();
		return view('backend.sub_category.add',compact('category'));	
	}
	
	public function store(Request $request) {
		$validator = Validator::make($request->all(), [
            'name' => 'required',
            'published' => 'required'
        ]);

        if($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }
		
		$subcategory = new SubCategory;
		$subcategory->name = $request->name;
		$subcategory->category_id = $request->category_id;
		$subcategory->slug = str_slug($request->name);
		$subcategory->published = $request->published;
		$subcategory->save();

		$seo = new Seo;
		$seo->og_name = 'Wiploo';
		$seo->slug = str_slug($request->name);
		$seo->save();
		
		return redirect()->route('sub-category-per-category', ['id'=>$request->category_id])->with('success','Data berhasil disimpan.');
	}
	
	public function edit($category_id,$id) {
		$subcategory = SubCategory::find($id);
		$category = Category::find($category_id);
		return view('backend.sub_category.edit',compact('category','subcategory'));
	}
	
	public function delete_category($category_id, $id) {
		$slug = SubCategory::where('id',$id)->first();
		SubCategory::find($id)->delete();

		$seo = Seo::find($slug->slug);
		$seo->delete();

		return redirect()->route('sub-category-per-category', ['id'=>$category_id])->with('alert-success', 'berhasil dihapus.');
	}
	
	public function update(Request $request) {
		$subcategory = SubCategory::find($request->id);
		$subcategory->name = $request->name;
		$subcategory->category_id = $request->category_id;
		$subcategory->slug = str_slug($request->name);
		$subcategory->published = $request->published;
		$subcategory->save();

		$seo = Seo::find($category->slug);
		$seo->og_name = 'Wiploo';
		$seo->slug = str_slug($request->name);
		$seo->save();

		return redirect()->route('sub-category-per-category', ['id'=>$request->category_id])->with('alert-success', 'berhasil dihapus.');
	}

	public function edit_seo($category_id, $slug) {
		$seo = Seo::where('slug',$slug)->first();
		return $seo;
	}

}
