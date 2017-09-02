<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
	protected $table = 'articles';
	
	protected $fillable = ['title', 'author', 'category_id', 'image', 'content', 'slug'];
	
	public static function getDataArticles() {
		return $data = DB::table('articles');
	}
}
