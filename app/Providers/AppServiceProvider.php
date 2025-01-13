<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;

use Livewire\Livewire;
use Illuminate\Support\Facades\Route;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Model::unguard();

         // Share services globally across all views
         $services = DB::table('services')->orderBy('name')->get();
         View::share('services_hdr', $services);
         
         Livewire::setScriptRoute(function ($handle) {
        return Route::get('public/livewire/livewire-js', $handle);
        });

    }

  
  
}
