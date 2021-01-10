<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
class articles extends Model
{
    use HasFactory;
    use HasTranslations;
    public $translatable = ['title','description'];
     
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function getCategory(){
       return $this->hasOne('App\Models\Category','id','category_id');
    }

    public function getCommentCount(){
       return $this->hasOne('App\Models\Comment','comment_id','id')->count();
    }

    public function getLikesCount(){
        return $this->hasOne('App\Models\Likes','like_id','id')->count();
    }

}
