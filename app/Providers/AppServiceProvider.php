<?php

namespace App\Providers;

use App\Models\Setting;
use App\Models\SocialLink;
use Illuminate\Support\Facades\URL;
use App\Models\SpecialSection;
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
        //

        if (env('APP_ENV') === 'production') {
            Url::forceScheme('https');
        }
        $links = SocialLink::all();
        $setting = Setting::first();
//        $headerpages = SpecialSection::all();
        view()->share('links',$links);
        view()->share('setting',$setting);
//        view()->share('headerpages',$headerpages);

    }
}
