<?php

namespace App\Blog;

use Illuminate\Database\Eloquent\Model;

class BlogTag extends Model
{
    protected $fillable=[
        'blog_id',
        'general_blog_tag_id'
    ];

    public function blog(){
        return $this->belongsTo(Blog::class,'blog_id');
    }
    public function general_blog_tag(){
        return $this->belongsTo(GeneralBlogTag::class,'general_blog_tag_id');
    }
}
