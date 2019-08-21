<?php

namespace App\Blog;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    protected $fillable=[
        'name'
    ];
    public function articles(){
        return $this->hasMany(Article::class,'blog_category_id');
    }
}
