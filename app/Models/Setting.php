<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Setting extends Model implements HasMedia
{
    protected $table = 'settings';
    public $timestamps = true;
    use InteractsWithMedia, SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = ['name','content','phone','location',
        'facebook','twitter','linkedin','youtube','instagram','whatsApp','email'];


    public function getPhotoAttribute()
    {
        return $this->getFirstMediaUrl('images');
    }

}
