<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PriceCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('price_categories')->insert(
            [
                [
                    'id' => 1,
                    'weight' => 1,
                    'name' => 'Profilaxie / Igienizare',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'id' => 2,
                    'weight' => 2,
                    'name' => 'Obturații (Plombe)',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'id' => 3,
                    'weight' => 3,
                    'name' => 'Protetică dentară',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'id' => 4,
                    'weight' => 4,
                    'name' => 'Estetica dentara',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'id' => 5,
                    'weight' => 5,
                    'name' => 'Parodontologie',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'id' => 6,
                    'weight' => 6,
                    'name' => 'Endodontie',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'id' => 7,
                    'weight' => 7,
                    'name' => 'Ortodontie',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'id' => 8,
                    'weight' => 8,
                    'name' => 'Chirurgie',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'id' => 9,
                    'weight' => 9,
                    'name' => 'Implantologie',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'id' => 10,
                    'weight' => 10,
                    'name' => 'Pedodonție',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
        ]);
    }
}
