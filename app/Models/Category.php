<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Category extends Model implements HasMedia
{
    use SoftDeletes, InteractsWithMedia;
    protected $table = 'categories';

    protected $dates = ['deleted_at'];

    protected $fillable = ['name','icon','user_id','status'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getPhotoAttribute()
    {
        return $this->getFirstMediaUrl('images');
    }

    public function scopeStatus($query,$arg){
        return $query->where('status' , $arg);
    }
}
