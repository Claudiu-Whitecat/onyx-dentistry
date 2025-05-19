<?php

namespace App\Models\Price;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PriceCategory extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'weight'];

    public function price():HasMany
    {
        return $this->hasMany(Price::class);
    }
}
