<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilamentUsers extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
            [
                ['id' => 1, 'name' => 'admin','email' => 'claudiucerna@gmail.com','email_verified_at' => null, 'password' => '$2y$12$nfuero2HdNiYeQ/WuxbBl.bNTzKRf.LfaFB5eujlrv0UIOA5Cjfle', 'remember_token' => null, 'created_at' => Carbon::now(),  'updated_at' => Carbon::now()],
            ]);
    }
}
