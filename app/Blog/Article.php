<?php

namespace App\Blog;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable=[
        'blog_category_id',
        'image',
        'video_link',
        'description',
        'title'
    ];

    public function blog_category(){
        return $this->belongsTo(BlogCategory::class,'blog_category_id');
    }

    public function article_tags(){
        return $this->belongsToMany(GeneralArticleTag::class,'article_tags','general_article_tag_id','article_id');
    }

}
