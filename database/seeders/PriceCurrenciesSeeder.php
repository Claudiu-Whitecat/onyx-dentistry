<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PriceCurrenciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('price_currencies')->insert(
            [
                ['id' => 1, 'name' => 'ron', 'created_at' => Carbon::now(),  'updated_at' => Carbon::now()],
                ['id' => 2, 'name' => 'euro', 'created_at' => Carbon::now(),  'updated_at' => Carbon::now()],
                ['id' => 3, 'name' => 'usd', 'created_at' => Carbon::now(),     'updated_at' => Carbon::now()]
            ]);
    }
}
