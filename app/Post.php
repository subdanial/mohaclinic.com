<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title','image','category_id','content','content_short'];
    
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
