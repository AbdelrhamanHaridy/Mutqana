<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Service extends Model implements HasMedia
{
    use InteractsWithMedia, HasFactory, SoftDeletes;

    protected $table = 'services';
    public $timestamps = true;

    protected $dates = ['deleted_at'];
    protected $fillable = ['title','content','icon','user_id','status'];

    public function user(){

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
