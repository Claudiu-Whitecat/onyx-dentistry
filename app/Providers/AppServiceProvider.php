<?php

namespace App\Providers;

use App\Models\Resource;
use Illuminate\Database\Eloquent\Model;
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
        Model::unguard();
        if (Schema::hasTable('resources')) { // Ensures the table exists before querying
            $resources = Resource::take(8)->orderBy('resources.weight', 'asc')->get();
            View::share('resources', $resources);
        }
    }
}

