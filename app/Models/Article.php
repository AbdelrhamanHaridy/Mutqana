<?php

namespace App\Models;

use ChristianKuri\LaravelFavorite\Traits\Favoriteable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Article extends Model implements HasMedia
{
    use InteractsWithMedia, SoftDeletes;
    protected $table = 'articles';
    public $timestamps = true;

    protected $dates = ['deleted_at'];
    protected $fillable = ['title','content','keywords','meta_description',
        'user_id','category_id','status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class,'article_tag');
    }

    public function visit_article()
    {
        return $this->hasMany(VisitArticle::class,'article_id');
    }
    public function getPhotoAttribute()
    {
        return $this->getFirstMediaUrl('images');
    }

    public function scopeStatus($query,$arg){
        return $query->where('status' , $arg);
    }
}
