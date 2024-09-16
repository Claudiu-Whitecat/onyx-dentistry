<?php

namespace App\Http\Controllers;

use App\Models\Price\Price;
use App\Models\Price\PriceCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request):View
    {

        $priceCategories = Price::query()
            ->join('price_categories', 'prices.price_categories_id', '=', 'price_categories.id')
            ->select('price_categories.*')
            ->groupBy('price_categories.id')
            ->get();
        $priceCurrencies = Price::query()
            ->join('price_currencies', 'prices.price_currency_id', '=', 'price_currencies.id')
            ->select('price_currencies.*')
            ->groupBy('price_currencies.id')
            ->get();
        $prices = Price::with(['priceCategories', 'priceCurrencies'])

            ->get();


        return view('prices.index', compact('prices', 'priceCategories', 'priceCurrencies'));
    }

    /**
     * Display the specified resource.
     */
//    public function show(string $id):View
//    {
//
//    }

}
