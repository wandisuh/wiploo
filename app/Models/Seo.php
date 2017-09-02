<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    //
    protected $table = 'seo';
	
	protected $fillable = ['slug', 'title','keywords','description','og_title','og_description','og_image','og_url','og_name','og_type'];

}
