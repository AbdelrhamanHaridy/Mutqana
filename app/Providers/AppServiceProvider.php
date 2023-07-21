<?php

namespace App\Providers;
use App\Models\About;
use App\Models\Category;
use App\Models\Contact_us;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->share('users',User::orderBy('created_at','DESC')->whereDate('created_at', today())->limit(25)->get());
        view()->share('about',About::orderBy('id','desc')->latest()->get());
        view()->share('settings',Setting::orderBy('id','desc')->latest()->get());
        view()->share('about_us',About::first());
        view()->share('setting',Setting::first());
        view()->share('contactUsCount',Contact_us::where('is_read',0)->orderBy('id','desc')->count());
        view()->share('contacts',Contact_us::orderBy('created_at','DESC')->limit(8)->get());
        view()->share('categoriesheader',Category::orderBy('created_at','DESC')->limit(8)->get());
    }
}
