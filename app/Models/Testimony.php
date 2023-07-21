<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Testimony extends Model implements HasMedia
{
    use HasFactory,  InteractsWithMedia;
    protected $table = 'testimonials';


    protected $fillable = ['name','content','job','user_id','status'];
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
