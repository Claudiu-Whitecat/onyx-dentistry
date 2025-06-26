<?php

namespace App\Models\Price;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PriceCategory extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'weight'];

    public function price():HasMany
    {
        return $this->hasMany(Price::class);
    }
    public function doctor(): BelongsToMany
    {
        return $this->belongsToMany(Person::class, 'doctor_price_category');
    }
}
