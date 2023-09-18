<?php

namespace Database\Seeders;

use App\Models\PersonalDealerTheme;
use Illuminate\Database\Seeder;

class PersonalDealerThemesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $themes = [
            [
                'name' => 'Black',
                'image_path' => '/themes/tallstack/images/themes/black.jpg',
                'description' => 'Inspired by Mercedes-Benz',
            ],
            [
                'name' => 'Blue',
                'image_path' => '/themes/tallstack/images/themes/blue.jpg',
                'description' => 'Inspired by Honda and BMW',
            ],
            [
                'name' => 'Yellow',
                'image_path' => '/themes/tallstack/images/themes/yellow.jpg',
                'description' => 'Inspired by Lamborghini',
            ],
            [
                'name' => 'Red',
                'image_path' => '/themes/tallstack/images/themes/red.jpg',
                'description' => 'Inspired by Toyota & Ferrari',
            ],
            [
                'name' => 'Purple',
                'image_path' => '/themes/tallstack/images/themes/purple.jpg',
                'description' => 'Inspired by ... it looks nice',
            ],
            [
                'name' => 'Gold',
                'image_path' => '/themes/tallstack/images/themes/gold.jpg',
                'description' => 'Inspired by Chevrolet',
            ],
            [
                'name' => 'Green',
                'image_path' => '/themes/tallstack/images/themes/green.jpg',
                'description' => 'Inspired by Jeep'
            ]

            // ... add as many themes as you have
        ];

        foreach ($themes as $theme) {
            PersonalDealerTheme::create($theme);
        }
    }
}
