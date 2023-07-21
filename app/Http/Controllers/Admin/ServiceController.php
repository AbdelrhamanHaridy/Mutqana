<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function index(Request $request)
    {
        $services = Service::orderBy('id','DESC')->where(function ($q) use($request){
            if($request->keyword){
                $q->where('title' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('content' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhereHas('user', function ($q) use ($request){
                        if($request->keyword){
                            $q->where('name' , 'LIKE' , '%'.$request->keyword.'%');
                        }
                    });
            }})->paginate(25);
        return view('admin.services.index',compact('services','request'));
    }


    public function create()
    {
        return view('admin.services.create');
    }


    public function store(ServiceRequest $request)
    {
        $services = Service::create($request->all());
        if ($request->hasFile('image')) {
            $services
                ->addMediaFromRequest('image')
                ->UsingName($services->title)
                ->UsingFileName("$services->title.avif")
                ->toMediaCollection('images');
        }
        return redirect()->route('services.index')
            ->with(['message' => "تم إضافة الأيقونة$services->title بنجاح"]);
    }


    public function show($id)
    {
        return abort(404);
    }


    public function edit($id)
    {
        $model = Service::findOrFail($id);
        return view('admin.services.edit',compact('model'));
    }


    public function update(ServiceRequest $request, $id)
    {
        $services = Service::findOrFail($id);
        $services->update($request->all());
        if ($request->hasFile('image')) {

            $services
                ->clearMediaCollection('images')
                ->addMediaFromRequest('image')
                ->UsingName($services->title)
                ->UsingFileName("$services->title.avif")
                ->toMediaCollection('images');
        }
        return redirect()->route('services.index')
            ->with(['message' => "تم تعديل $services->title بنجاح"]);
    }


    public function destroy($id)
    {
        $services = Service::findOrFail($id);
        $services->delete();
        return redirect()->route('services.index')
            ->with(['delete' => "تم حذف $services->title"]);
    }
}
