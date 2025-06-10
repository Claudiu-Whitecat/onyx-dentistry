<?php

namespace App\Providers;

use App\Models\Service;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Filament\Support\Assets\Css;
use Filament\Support\Facades\FilamentAsset;

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
        FilamentAsset::register([
            Css::make('custom-stylesheet', __DIR__ . '/../../resources/css/filament/dashboard.css'),
        ]);
        if (Schema::hasTable('services')) { // Ensures the table exists before querying
            $services = Service::latest()->take(10)->get();
            View::share('services', $services);
        }
    }
}

