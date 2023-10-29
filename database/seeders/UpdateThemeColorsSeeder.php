<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PersonalDealerTheme;

class UpdateThemeColorsSeeder extends Seeder
{
    public function run()
    {
        // Define an array of theme IDs and their corresponding colors
        $themes = [
            1 => ['primary' => 'gray-700', 'secondary' => '#gray-800'],
            2 => ['primary' => 'blue-500', 'secondary' => 'blue-700'],
            3 => ['primary' => 'yellow-400', 'secondary' => 'yellow-600'],
            4 => ['primary' => 'red-500', 'secondary' => 'red-700'],
            5 => ['primary' => 'purple-500', 'secondary' => 'purple-700'],
            6 => ['primary' => 'yellow-500', 'secondary' => 'yellow-700'],
            7 => ['primary' => 'green-500', 'secondary' => 'green-700'],
            
        ];

        foreach ($themes as $id => $colors) {
            PersonalDealerTheme::where('id', $id)->update([
                'pd_theme_primary_color' => $colors['primary'],
                'pd_theme_secondary_color' => $colors['secondary'],
            ]);
        }
    }
}
