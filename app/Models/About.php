<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
class About extends Model implements HasMedia
{
    use InteractsWithMedia,SoftDeletes;

    protected $table = 'about_us';
    public $timestamps = true;

    protected $dates = ['deleted_at'];
    protected $fillable = ['title','description'];


    public function icons()
    {
        return $this->belongsToMany(Icon::class,'about_icon');
    }

    public function getPhotoAttribute()
    {
        return $this->getFirstMediaUrl('images');
    }

    public function scopeStatus($query,$arg){
        return $query->where('status' , $arg);
    }
}
