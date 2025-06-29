<?php

namespace App\Http\Controllers;

use App\Models\Price\Price;
use Illuminate\Http\Request;
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
            ->orderBy('price_categories.weight', 'asc')
            ->get();
        $priceCurrencies = Price::query()
            ->join('price_currencies', 'prices.price_currency_id', '=', 'price_currencies.id')
            ->select('price_currencies.*')
            ->groupBy('price_currencies.id')
            ->get();
        $prices = Price::with(['priceCategories', 'priceCurrencies'])
            ->orderBy('name')
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
