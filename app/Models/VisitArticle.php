<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisitArticle extends Model
{
    use HasFactory;
    protected $table = 'visit_article';
    public $timestamps = true;

    protected $fillable = ['article_id','titleslug','url','session_id','user_id','ip','agent'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
