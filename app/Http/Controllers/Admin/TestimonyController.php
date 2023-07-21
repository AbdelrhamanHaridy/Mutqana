<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TestimonyRequest;
use App\Models\Testimony;
use Illuminate\Http\Request;

class TestimonyController extends Controller
{
    public function index(Request $request)
    {
        $testimonials = Testimony::orderBy('id','DESC')->where(function ($q) use($request){
            if($request->keyword){
                $q->where('name' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('content' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhereHas('user', function ($q) use ($request){
                        if($request->keyword){
                            $q->where('name' , 'LIKE' , '%'.$request->keyword.'%');
                        }
                    });
            }})->paginate(25);
        return view('admin.testimonials.index',compact('testimonials','request'));
    }


    public function create()
    {
        return view('admin.testimonials.create');
    }


    public function store(TestimonyRequest $request)
    {
        $testimonials = Testimony::create($request->all());
        if ($request->hasFile('image')) {
            $testimonials
                ->addMediaFromRequest('image')
                ->UsingName($testimonials->name)
                ->UsingFileName("$testimonials->name.avif")
                ->toMediaCollection('images');
        }
        return redirect()->route('testimonials.index')
            ->with(['message' => "تم الإضافة$testimonials->name بنجاح"]);
    }


    public function show($id)
    {
        return abort(404);
    }


    public function edit($id)
    {
        $model = Testimony::findOrFail($id);
        return view('admin.testimonials.edit',compact('model'));
    }


    public function update(TestimonyRequest $request, $id)
    {
        $testimonials = Testimony::findOrFail($id);
        $testimonials->update($request->all());
        if ($request->hasFile('image')) {

            $testimonials
                ->clearMediaCollection('images')
                ->addMediaFromRequest('image')
                ->UsingName($testimonials->name)
                ->UsingFileName("$testimonials->name.avif")
                ->toMediaCollection('images');
        }
        return redirect()->route('testimonials.index')
            ->with(['message' => "تم تعديل $testimonials->name بنجاح"]);
    }


    public function destroy($id)
    {
        $testimonials = Testimony::findOrFail($id);
        $testimonials->delete();
        return redirect()->route('testimonials.index')
            ->with(['delete' => "تم حذف $testimonials->name"]);
    }
}
