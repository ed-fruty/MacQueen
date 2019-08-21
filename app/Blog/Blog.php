<?php

namespace App\Blog;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{

    protected $fillable=[
        'image',
        'video_link',
        'title',
        'description',
        'blog_category_id',
    ];


    public function blog_category(){
        return $this->belongsTo(BlogCategory::class,'blog_category_id');
    }

    public function tags(){
        return $this->belongsToMany(GeneralBlogTag::class,'blog_tags','general_blog_tag_id','blog_id');
    }
}
