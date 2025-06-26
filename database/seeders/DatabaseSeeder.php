<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;
use Database\Factories\CurrencyFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            FilamentUsers::class,
            PriceCategoriesSeeder::class,
            PriceCurrenciesSeeder::class,
            PricesSeeder::class,
            ResourcesSeeder::class,
            DoctorSeeder::class,
        ]);
    }
}
