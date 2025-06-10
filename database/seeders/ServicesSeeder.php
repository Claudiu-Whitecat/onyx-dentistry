<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert(
            [
                [
                    'slug' => 'surgical-services',
                    'weight' => 1,
                    'title' => 'Surgical Services',
                    'imagePath' => 'images/services/placeholder-01.jpg',
                    'body' => '# Preventive Health Screenings
                    At our clinic, we offer a comprehensive range of healthcare services designed to meet the diverse needs of our patients. Our experienced team of healthcare professionals is committed to providing personalized care and support to help you achieve your health goals. From preventive care and wellness programs to specialized treatments and therapies, we are dedicated to delivering high-quality healthcare services that prioritize your well-being.

Our comprehensive range of healthcare services is designed to address all aspects of your health, from preventive care to specialized treatments, we\'re here to support you every step of the way.

- Healthy eating for vibrant living
- Mental wellness nurturing emotional health
- Wellness wisdom holistic health tips
- Mindful living cultivating inner balance

## Advanced Health Support

1. Healthy eating for vibrant living
2. Mental wellness nurturing emotional health
3. Wellness wisdom holistic health tips
4. Mindful living cultivating inner balance

>Discover a new level of healthcare excellence with B-Well. Our dedicated team of healthcare professionals is committed to providing personalized care and support to help you achieve your health goals. With a focus on compassion, expertise',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'slug' => 'test2',
                    'weight' => 2,
                    'title' => 'test2',
                    'imagePath' => 'images/blalala2.jpg',
                    'body' => 'dsadasdasdsa da dasd asda dasdasdasdas',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'slug' => 'test3',
                    'weight' => 3,
                    'title' => 'test3',
                    'imagePath' => 'images/blalala3.jpg',
                    'body' => 'dsadasdasdsa da dasd3232 asda dasdasdasdas',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
            ]
        );
    }
}
