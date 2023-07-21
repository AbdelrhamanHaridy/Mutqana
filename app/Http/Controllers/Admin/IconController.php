<?php
// Done
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Icon\IconRequest;
use App\Models\Icon;
use Illuminate\Http\Request;

class IconController extends Controller
{

    public function index(Request $request)
    {
        $icons = Icon::orderBy('id','DESC')->where(function ($q) use($request){
            if($request->keyword){
                $q->where('title' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('text' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('icon' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhereHas('user', function ($q) use ($request){
                        if($request->keyword){
                            $q->where('name' , 'LIKE' , '%'.$request->keyword.'%');
                        }
                    });
            }})->paginate(25);
        return view('admin.icons.index',compact('icons','request'));
    }


    public function create()
    {
        return view('admin.icons.create');
    }


    public function store(IconRequest $request)
    {
        $icons = Icon::create($request->all());

        return redirect()->route('icons.index')
            ->with(['message' => "تم إضافة الأيقونة$icons->title_ar بنجاح"]);
    }


    public function show($id)
    {
        return abort(404);
    }


    public function edit($id)
    {
        $model = Icon::findOrFail($id);
        return view('admin.icons.edit',compact('model'));
    }


    public function update(IconRequest $request, $id)
    {
        $icons = Icon::findOrFail($id);
        $icons->update($request->all());

        return redirect()->route('icons.index')
            ->with(['message' => "تم تعديل $icons->title_ar بنجاح"]);
    }


    public function destroy($id)
    {
        $icons = Icon::findOrFail($id);
        $icons->delete();
        return redirect()->route('icons.index')
            ->with(['delete' => "تم حذف $icons->title_ar"]);
    }
}
