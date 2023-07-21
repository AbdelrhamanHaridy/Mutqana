<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{

    protected $table = 'tags';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = ['name','user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function articles()
    {
        return $this->belongsToMany(Article::class,'article_tag');
    }

    public function icons()
    {
        return $this->belongsToMany(Icon::class,'icon_track');
    }

    public function scopeStatus($query,$arg){
        return $query->where('status' , $arg);
    }
}
