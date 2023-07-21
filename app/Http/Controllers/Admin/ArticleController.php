<?php
//Done
namespace App\Http\Controllers\Admin;

use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use App\Models\Language;
use App\Models\Level;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Article\ArticleRequest;

class ArticleController extends Controller
{

    public function index(Request $request)
    {
        $articles = Article::orderBy('id','DESC')->where(function ($q) use($request){
            if($request->keyword){
                $q->where('title' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('content' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhereHas('user', function ($q) use ($request){
                        if($request->keyword){
                            $q->where('name' , 'LIKE' , '%'.$request->keyword.'%');
                        }
                    });
            }})->paginate(25);
        return view('admin.articles.index',compact('articles','request'));
    }

    public function create()
    {
        return view('admin.articles.create');
    }

    public function store(ArticleRequest $request)
    {
        $articles = Article::create($request->all());
        if ($request->hasFile('image')) {
            $articles
                ->addMediaFromRequest('image')
                ->UsingName($articles->title)
                ->UsingFileName("$articles->title.jpg")
                ->toMediaCollection('images');
        }
        $articles->tags()->sync($request->tag_id);
        return redirect()->route('articles.index')
            ->with(['message' => "تم إضافة المقال$articles->title_ar بنجاح"]);
    }

    public function show($id)
    {
        $articles = Article::findOrFail($id);

        $recentArticles = Article::orderBy('created_at','DESC')->limit(5)->get();

        return view('admin.articles.show',compact('articles','recentArticles'));

    }

    public function edit($id)
    {
        $model = Article::findOrFail($id);
        return view('admin.articles.edit',compact('model'));
    }

    public function update(ArticleRequest $request, $id)
    {
        $articles = Article::findOrFail($id);
        $articles->update($request->all());

        if ($request->hasFile('image')) {

            $articles
                ->clearMediaCollection('images')
                ->addMediaFromRequest('image')
                ->UsingName($articles->title)
                ->UsingFileName("$articles->title.jpg")
                ->toMediaCollection('images');
        }
        $articles->tags()->sync($request->tag_id);
        return redirect()->route('articles.index')
            ->with(['message' => "تم تعديل $articles->title_ar بنجاح"]);
    }

    public function destroy($id)
    {
        $articles = Article::findOrFail($id);
        $articles->delete();
        return redirect()->route('articles.index')
            ->with(['delete' => "تم حذف $articles->title_ar"]);
    }
}

