<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\About;
use App\Models\Article;
use App\Models\Category;
use App\Models\Contact_us;
use App\Models\Number;
use App\Models\Service;
use App\Models\Tag;
use App\Models\Testimony;
use App\Models\User;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\TwitterCard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index(){
        $services = Service::status(1)->limit(4)->get();
        $articles = Article::status(1)->limit(4)->get();
        $testimonies = Testimony::status(1)->limit(4)->get();
        $numbers = Number::limit(4)->get();
        $about_us = About::first();
        visit('visit_site');
        SEOMeta::setTitle('الرئيسية');
        SEOMeta::setDescription('نقل الأثاث داخل وخارج الرياض فك وتغليف ونقل وتركيب دون أى خدش للأثاث ونقدم لكم أفضل الأسعار والخصومات نحن فى شركة القطبان يسعدنا دائماً أن نقدم اكم أفضل خدمات التنظيف والتعقييم ونقل الأثاث والشحن الدولي داخل وخارج الرياض لدينا فريق متخصص.');
        SEOMeta::setCanonical(route('home'));
        OpenGraph::setTitle('الرئيسية');
        OpenGraph::setDescription('نقل الأثاث داخل وخارج الرياض فك وتغليف ونقل وتركيب دون أى خدش للأثاث ونقدم لكم أفضل الأسعار والخصومات نحن فى شركة القطبان يسعدنا دائماً أن نقدم اكم أفضل خدمات التنظيف والتعقييم ونقل الأثاث والشحن الدولي داخل وخارج الرياض لدينا فريق متخصص.');
        OpenGraph::setUrl(route('home'));
        OpenGraph::addProperty('locale:alternate', ['ar-eg']);
        OpenGraph::addProperty('type', 'home');
        TwitterCard::setTitle('الرئيسية');
        JsonLd::setTitle('الرئيسية');
        JsonLd::setDescription('نقل الأثاث داخل وخارج الرياض فك وتغليف ونقل وتركيب دون أى خدش للأثاث ونقدم لكم أفضل الأسعار والخصومات نحن فى شركة القطبان يسعدنا دائماً أن نقدم اكم أفضل خدمات التنظيف والتعقييم ونقل الأثاث والشحن الدولي داخل وخارج الرياض لدينا فريق متخصص.');
        JsonLd::setType('WebPage');
        JsonLd::addImage(asset('website/articles/articles.jpg'));
        return view('welcome',compact('services','articles','about_us','testimonies','numbers'));
    }

    public function articles(Request $request){
        $articles = Article::status(1)->where(function ($q) use($request){
            if($request->keyword){
                $q->where('title' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('content' , 'LIKE' , '%'.$request->keyword.'%');
            }})->paginate(12);
        $categories = Category::status(1)->limit(8)->get();

        $articlesPopular   = Article::status(1)
            ->join("visit_article", "visit_article.article_id", "=", "articles.id")
            ->groupBy("articles.id")/*->where("visit_article.created_at", ">=", date("Y-m-d H:i:s", strtotime('-1 days', time())))*/
            ->orderBy(DB::raw('COUNT(articles.id)'), 'DESC')
            ->paginate(5,[DB::raw('COUNT(articles.id) as total_views'), 'articles.*']);



        visit('visit_article');
        SEOMeta::setTitle('المقالات');
        SEOMeta::setDescription('مقالاتنا في موقع قبطان العالمي الدولي، هنا المقالات والمشاريع الخاصه بنا تابعنا وانتظر المزيد مننا');
        SEOMeta::setCanonical(route('articles'));
        OpenGraph::setTitle('المقالات');
        OpenGraph::setDescription('مقالاتنا في موقع قبطان العالمي الدولي، هنا المقالات والمشاريع الخاصه بنا تابعنا وانتظر المزيد مننا');
        OpenGraph::setUrl(route('articles'));
        OpenGraph::addProperty('locale:alternate', ['ar-eg']);
        OpenGraph::addProperty('type', 'articles');
        TwitterCard::setTitle('المقالات');
        JsonLd::setTitle('المقالات');
        JsonLd::setDescription('مقالاتنا في موقع قبطان العالمي الدولي، هنا المقالات والمشاريع الخاصه بنا تابعنا وانتظر المزيد مننا');
        JsonLd::setType('WebPage');
        JsonLd::addImage(asset('website/articles/articles.jpg'));

        return view('articles',compact('articles','categories','articlesPopular','request'));
    }

    public function services(Request $request){
        $services = Service::limit(4)->get();
        SEOMeta::setTitle('الخدمات');
        SEOMeta::setDescription(' نحن نقدم خدمات النقل والخدمات اللوجستية لتحقيق نجاح العملاء لشركة القبطان الدولي وتوفير النقل متعدد الوسائط والمحلي والعابر للقارة وتقديم الخدمات في جميع أنحاء العالم.');
        SEOMeta::setCanonical(route('services'));
        OpenGraph::setTitle('الخدمات');
        OpenGraph::setDescription(' نحن نقدم خدمات النقل والخدمات اللوجستية لتحقيق نجاح العملاء لشركة القبطان الدولي وتوفير النقل متعدد الوسائط والمحلي والعابر للقارة وتقديم الخدمات في جميع أنحاء العالم.');
        OpenGraph::setUrl(route('services'));
        OpenGraph::addProperty('locale:alternate', ['ar-eg']);
        OpenGraph::addProperty('type', 'services');
        TwitterCard::setTitle('الخدمات');
        JsonLd::setTitle('الخدمات');
        JsonLd::setDescription(' نحن نقدم خدمات النقل والخدمات اللوجستية لتحقيق نجاح العملاء لشركة القبطان الدولي وتوفير النقل متعدد الوسائط والمحلي والعابر للقارة وتقديم الخدمات في جميع أنحاء العالم.');
        JsonLd::setType('WebPage');
        JsonLd::addImage(asset('website/articles/articles.jpg'));

        return view('services',compact('services'));
    }

    public function about(Request $request){
        $numbers = Number::limit(4)->get();
        $users = User::where('team','1')->limit(8)->get();
        $testimonies = Testimony::status(1)->limit(4)->get();

        SEOMeta::setTitle('الخدمات');
        SEOMeta::setDescription(' نحن نقدم خدمات النقل والخدمات اللوجستية لتحقيق نجاح العملاء لشركة القبطان الدولي وتوفير النقل متعدد الوسائط والمحلي والعابر للقارة وتقديم الخدمات في جميع أنحاء العالم.');
        SEOMeta::setCanonical(route('about'));
        OpenGraph::setTitle('الخدمات');
        OpenGraph::setDescription(' نحن نقدم خدمات النقل والخدمات اللوجستية لتحقيق نجاح العملاء لشركة القبطان الدولي وتوفير النقل متعدد الوسائط والمحلي والعابر للقارة وتقديم الخدمات في جميع أنحاء العالم.');
        OpenGraph::setUrl(route('about'));
        OpenGraph::addProperty('locale:alternate', ['ar-eg']);
        OpenGraph::addProperty('type', 'about');
        TwitterCard::setTitle('الخدمات');
        JsonLd::setTitle('الخدمات');
        JsonLd::setDescription(' نحن نقدم خدمات النقل والخدمات اللوجستية لتحقيق نجاح العملاء لشركة القبطان الدولي وتوفير النقل متعدد الوسائط والمحلي والعابر للقارة وتقديم الخدمات في جميع أنحاء العالم.');
        JsonLd::setType('WebPage');
        JsonLd::addImage(asset('website/articles/articles.jpg'));

        return view('about',compact('users','numbers','testimonies'));
    }

    public function categories(Request $request,$id){
        $categories = Category::status(1)->findOrFail($id);
        $categoriesPopular = Category::status(1)->limit(8)->get();
        $articles = Article::status(1)->where('category_id',$id)->where(function ($q) use($request){
            if($request->keyword){
                $q->where('title' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('content' , 'LIKE' , '%'.$request->keyword.'%');
            }})->paginate(12);
        $articlesPopular   = Article::status(1)
            ->join("visit_article", "visit_article.article_id", "=", "articles.id")
            ->groupBy("articles.id")/*->where("visit_article.created_at", ">=", date("Y-m-d H:i:s", strtotime('-1 days', time())))*/
            ->orderBy(DB::raw('COUNT(articles.id)'), 'DESC')
            ->paginate(5,[DB::raw('COUNT(articles.id) as total_views'), 'articles.*']);

        visit('visit_article');
        SEOMeta::setTitle($categories->name);
        SEOMeta::setDescription($categories->content);
        SEOMeta::setCanonical(route('categories',$categories->id));
        OpenGraph::setTitle($categories->name);
        OpenGraph::setDescription($categories->content);
        OpenGraph::setUrl(route('categories',$categories->id));
        OpenGraph::addProperty('locale:alternate', ['ar-eg']);
        OpenGraph::addProperty('type', 'articles');
        TwitterCard::setTitle($categories->name);
        JsonLd::setTitle($categories->name);
        JsonLd::setDescription($categories->content);
        JsonLd::setType('WebPage');
        JsonLd::addImage(asset('website/articles/articles.jpg'));

        return view('categories',compact('articles','categories','categoriesPopular','articlesPopular','request'));
    }

    public function tags(Request $request,$id){
        $tags = Tag::findOrFail($id);

        $categoriesPopular = Category::status(1)->limit(8)->get();

        $articlesPopular   = Article::status(1)
            ->join("visit_article", "visit_article.article_id", "=", "articles.id")
            ->groupBy("articles.id")/*->where("visit_article.created_at", ">=", date("Y-m-d H:i:s", strtotime('-1 days', time())))*/
            ->orderBy(DB::raw('COUNT(articles.id)'), 'DESC')
            ->paginate(5,[DB::raw('COUNT(articles.id) as total_views'), 'articles.*']);

        visit('visit_article');
        SEOMeta::setTitle($tags->name);
        SEOMeta::setDescription($tags->content);
        SEOMeta::setCanonical(route('tags',$tags->id));
        OpenGraph::setTitle($tags->name);
        OpenGraph::setDescription($tags->content);
        OpenGraph::setUrl(route('tags',$tags->id));
        OpenGraph::addProperty('locale:alternate', ['ar-eg']);
        OpenGraph::addProperty('type', 'articles');
        TwitterCard::setTitle($tags->name);
        JsonLd::setTitle($tags->name);
        JsonLd::setDescription($tags->content);
        JsonLd::setType('WebPage');
        JsonLd::addImage(asset('website/articles/articles.jpg'));

        return view('tags',compact('tags','categoriesPopular','articlesPopular','request'));
    }

    public function article($id){
        $article     = Article::findOrFail($id);
        visit_details('visit_article','article_id',$article->id,$article->title_ar);
        SEOMeta::setTitle($article->title);
        SEOMeta::setDescription($article->meta_description);
        SEOMeta::setCanonical(route('article',$article->id));
        SEOMeta::addKeyword($article->keywords);
        OpenGraph::setTitle($article->title);
        OpenGraph::setDescription($article->meta_description);
        OpenGraph::setUrl(route('article',$article->id));
        OpenGraph::addProperty('locale:alternate', ['ar-eg']);
        OpenGraph::addProperty('type', 'articles');
        TwitterCard::setTitle($article->title);
        JsonLd::setTitle($article->title);
        JsonLd::setDescription($article->meta_description);
        JsonLd::setType('WebPage');
        JsonLd::addImage(asset('website/articles/articles.jpg'));
        return view('article',compact('article'));
    }

    public function contact(){
        SEOMeta::setTitle('اتصل بنا');
        SEOMeta::setDescription('تعد شركة القبطان الدولي للشحن داخل وخارج المملكة العربية السعودية من عمالقة الشحن فى العالم حيث توفر الشركة الشحن الدولي وكذلك الداخلي وجميع انواع الشحن البري والبحري والجوي وجميع انواع الشحن');
        SEOMeta::setCanonical(route('mail'));
        OpenGraph::setTitle('اتصل بنا');
        OpenGraph::setDescription('تعد شركة القبطان الدولي للشحن داخل وخارج المملكة العربية السعودية من عمالقة الشحن فى العالم حيث توفر الشركة الشحن الدولي وكذلك الداخلي وجميع انواع الشحن البري والبحري والجوي وجميع انواع الشحن');
        OpenGraph::setUrl(route('mail'));
        OpenGraph::addProperty('locale:alternate', ['ar-eg']);
        OpenGraph::addProperty('type', 'mail');
        TwitterCard::setTitle('اتصل بنا');
        JsonLd::setTitle('اتصل بنا');
        JsonLd::setDescription('تعد شركة القبطان الدولي للشحن داخل وخارج المملكة العربية السعودية من عمالقة الشحن فى العالم حيث توفر الشركة الشحن الدولي وكذلك الداخلي وجميع انواع الشحن البري والبحري والجوي وجميع انواع الشحن');
        JsonLd::setType('WebPage');
        JsonLd::addImage(asset('website/articles/articles.jpg'));
        return view('contact');
    }

    public function storeContact(ContactRequest $request){
        $contact = Contact_us::create($request->all());
        return back()->with(['message' => "تم إرسال الرسالة بنجاح"]);
    }

    public function privacy_policy() {
        return view('privacy-policy');
    }
}
