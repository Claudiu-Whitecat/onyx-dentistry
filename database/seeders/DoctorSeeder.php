<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\Price\PriceCategory;
use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $doctorsData = [
            [
                'name' => 'Alice Johnson',
                'job_title' => 'Software Engineer',
                'short_description' => 'Expert in Laravel and Vue.js',
                'image' => 'images/alice.jpg',
                'email' => 'alice@example.com',
                'phone' => '+1234567890',
                'markdown_text' => '## About Alice\nAlice loves clean code and good coffee.',
            ],
            [
                'name' => 'Bob Smith',
                'job_title' => 'Product Manager',
                'short_description' => 'Focused on delivering value',
                'image' => 'images/bob.jpg',
                'email' => 'bob@example.com',
                'phone' => '+0987654321',
                'markdown_text' => '## About Bob\nBob aligns tech with business goals.',
            ],
        ];

        foreach ($doctorsData as $doctorData) {
            $doctor = Doctor::create($doctorData);

            $categoryIds = PriceCategory::class::inRandomOrder()
                ->limit(rand(1, 3))
                ->pluck('id');

            $doctor->priceCategories()->attach($categoryIds);
        }
    }
}
