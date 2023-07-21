<?php
// Done
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tag\TagRequest;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{

    public function index(Request $request)
    {
        $tags = Tag::where(function ($q) use($request){
            if($request->keyword){
                $q->where('name' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhereHas('user', function ($q) use ($request){
                        if($request->keyword){
                            $q->where('name' , 'LIKE' , '%'.$request->keyword.'%')
                                ->orWhere('email' , 'LIKE' , '%'.$request->keyword.'%');
                        }
                    });
            }})->paginate(25);
        return view('admin.tags.index',compact('tags','request'));
    }


    public function create()
    {
        return view('admin.tags.create');
    }


    public function store(TagRequest $request)
    {
        $tags = Tag::create($request->all());

        return redirect()->route('tags.index')
            ->with(['message' => "تم إضافة  $tags->name_ar بنجاح"]);
    }


    public function show($id)
    {
        return abort(404);
    }


    public function edit($id)
    {
        $model = Tag::findOrFail($id);
        return view('admin.tags.edit',compact('model'));
    }


    public function update(TagRequest $request, $id)
    {
        $tags = Tag::findOrFail($id);
        $tags->update($request->all());

        return redirect()->route('tags.index')
            ->with(['message' => " تم تعديل $tags->name_ar بنجاح "]);
    }


    public function destroy($id)
    {
        $tags = Tag::findOrFail($id);
        $tags->delete();
        return redirect()->route('tags.index')
            ->with(['delete' => " تم حذف  $tags->name_ar"]);
    }
}
