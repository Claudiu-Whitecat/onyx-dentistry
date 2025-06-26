<?php

namespace App\Providers;

use App\Models\Price\Price;
use App\Models\Price\PriceCurrency;
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
        if (Schema::hasTable('prices')) {
            $priceCategories = Price::query()
                ->join('price_categories', 'prices.price_categories_id', '=', 'price_categories.id')
                ->select('price_categories.*')
                ->groupBy('price_categories.id')
                ->orderBy('price_categories.weight', 'asc')
                ->get();
            $priceCurrencies = Price::query()
                ->join('price_currencies', 'prices.price_currency_id', '=', 'price_currencies.id')
                ->select('price_currencies.*')
                ->groupBy('price_currencies.id')
                ->get();
            $prices =  Price::with(['priceCategories', 'priceCurrencies'])
                ->orderBy('name')
                ->get();
            View::share('prices', $prices);
        }
        if (Schema::hasTable('prices')) {
            $priceCurrencies = Price::query()
                ->join('price_currencies', 'prices.price_currency_id', '=', 'price_currencies.id')
                ->select('price_currencies.*')
                ->groupBy('price_currencies.id')
                ->get();
            View::share('priceCurrencies', $priceCurrencies);
        }
    }
}

