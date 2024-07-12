<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PricesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('prices')->insert(
            [
                [
                    'id' => 1,
                    'price_categories_id' => 1,
                    'name' => 'Detartraj ultrasunete, periaj, fluorizare',
                    'price_currency_id' => 1,
                    'value' => '300',
                    'quantifier' => null,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'id' => 2,
                    'price_categories_id' => 1,
                    'name' => 'Detartraj ultrasunete rapel 6 luni',
                    'price_currency_id' => 1,
                    'value' => '200',
                    'quantifier' => null,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'id' => 3,
                    'price_categories_id' => 1,
                    'name' => 'Detartraj subgingival',
                    'price_currency_id' => 1,
                    'value' => '400',
                    'quantifier' => null,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'id' => 4,
                    'price_categories_id' => 1,
                    'name' => 'Detartraj subgingival cu anestezie',
                    'price_currency_id' => 1,
                    'value' => '500',
                    'quantifier' => null,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'id' => 5,
                    'price_categories_id' => 1,
                    'name' => 'AirFlow',
                    'price_currency_id' => 1,
                    'value' => '200',
                    'quantifier' => null,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'id' => 6,
                    'price_categories_id' => 6,
                    'name' => 'Tratament endodontic monoradiculari',
                    'price_currency_id' => 1,
                    'value' => '400',
                    'quantifier' => null,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'id' => 7,
                    'price_categories_id' => 6,
                    'name' => 'Tratament endodontic pluriradiculari',
                    'price_currency_id' => 1,
                    'value' => '600',
                    'quantifier' => null,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'id' => 8,
                    'price_categories_id' => 6,
                    'name' => 'Tratament endodontic molar de minte',
                    'price_currency_id' => 1,
                    'value' => '800',
                    'quantifier' => null,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'id' => 9,
                    'price_categories_id' => 6,
                    'name' => 'Retratament endodontic monoradiculari',
                    'price_currency_id' => 1,
                    'value' => '500',
                    'quantifier' => null,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'id' => 10,
                    'price_categories_id' => 6,
                    'name' => 'Retratament endodontic pluriradiculari',
                    'price_currency_id' => 1,
                    'value' => '700',
                    'quantifier' => null,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
            ]);
    }
}
