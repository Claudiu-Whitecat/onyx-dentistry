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
    public function index():View
    {

        $priceCategories = Price::query()
            ->join('price_categories', 'price_categories.id', '=', 'prices.price_categories_id')
            ->select('price_categories.*')
            ->groupBy('price_categories.id')
            ->get();

        $prices = Price::with(['priceCategories'])
            ->get();


        return view('prices.index', compact('prices', 'priceCategories'));
    }

    /**
     * Display the specified resource.
     */
//    public function show(string $id):View
//    {
//
//    }

}
