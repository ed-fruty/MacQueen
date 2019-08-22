<?php

namespace App\Blog;

use Illuminate\Database\Eloquent\Model;

class ArticleTag extends Model
{
    protected $fillable=[
        'article_id',
        'general_article_tag_id'
    ];

    public function article(){
        return $this->belongsTo(Article::class,'article_id');
    }

    public function general_article_tag(){
        return $this->belongsTo(GeneralArticleTag::class,'general_article_tag_id');
    }
}
