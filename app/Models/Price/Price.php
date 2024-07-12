<?php

namespace App\Models\Price;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Price extends Model
{
    use HasFactory;
    protected $fillable = ['price_categories_id','name','price_currency_id','value','quantifier'];

    public function priceCategories(): BelongsTo
    {
        return $this->belongsTo(PriceCategory::class, 'price_categories_id');
    }
    public function priceCurrencies(): BelongsTo
    {
        return $this->belongsTo(PriceCurrency::class, 'price_currency_id');
    }
}
