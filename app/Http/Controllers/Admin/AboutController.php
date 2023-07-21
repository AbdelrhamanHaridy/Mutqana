<?php
// No
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function index()
    {
        return abort(404);
    }

    public function create()
    {
        return view('admin.about.create');
    }


    public function store(Request $request)
    {


        $about = About::create($request->all());

        if ($request->hasFile('image')) {
            $about
                ->addMediaFromRequest('image')
                ->UsingName($about->title)
                ->UsingFileName("$about->title.avif")
                ->toMediaCollection('images');
        }

        $about->icons()->sync($request->icon_id);
        return redirect()->route('about.edit',$about->id)
            ->with(['message' => "تم الإضافة بنجاح"]);
    }


    public function show($id)
    {
        return abort(404);
    }


    public function edit($id)
    {
        $model = About::findOrFail($id);
        return view('admin.about.edit',compact('model'));
    }


    public function update(Request $request, $id)
    {
        $about = About::findOrFail($id);
        $about->update($request->all());
        if ($request->hasFile('image')) {
            $about
                ->clearMediaCollection('images')
                ->addMediaFromRequest('image')
                ->UsingName($about->title)
                ->UsingFileName("$about->title.avif")
                ->toMediaCollection('images');
        }
        if ($request->input('icon_id'))
        {
            $about->icons()->sync($request->icon_id);
        }

        return redirect()->back()
            ->with(['message' => "تم التعديل بنجاح"]);
    }


    public function destroy($id)
    {
        return abort(404);
    }
}
