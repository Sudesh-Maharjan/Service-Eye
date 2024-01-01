<?php
namespace App\Providers;
use App\Helpers\DateConverter;
use App\Models\Ads\AdPage;
use App\Models\service;
use App\Models\SubscribedUser;
use App\Models\Url;
use Carbon\Carbon;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *  8
     * @return void
     */
    public function register()
    {
        View::composer('layouts.app', function ($view) {
            $services = service::orderBy("id", "asc")->take(6)->get();
            $urls = Url::all();
            $view->with([
                'services' => $services,
                'urls' => $urls, // Add this line to pass URLs to the view
            ]);
        });
    }
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}