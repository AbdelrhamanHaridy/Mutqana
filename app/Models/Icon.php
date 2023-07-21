<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Icon extends Model
{
    use SoftDeletes;

    protected $table = 'icons';
    public $timestamps = true;

    protected $dates = ['deleted_at'];
    protected $fillable = ['title','text','icon','user_id','status'];

    public function user(){

        return $this->belongsTo(User::class);
    }

    public function aboutus()
    {
        return $this->belongsToMany(About::class,'about_icon');
    }
    public function scopeStatus($query,$arg){
        return $query->where('status' , $arg);
    }
}
