<?php

namespace App\Models;

use App\Models\Price\PriceCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'job_title',
        'short_description',
        'image',
        'email',
        'phone',
        'markdown_text',
    ];

    public function priceCategories(): BelongsToMany
    {
        return $this->belongsToMany(PriceCategory::class, 'doctor_price_category');
    }

}
