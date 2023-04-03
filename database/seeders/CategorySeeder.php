<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'label' => 'Italiano',
                'color' => '#e91a1a',
                'image' => '',
            ],
            [
                'label' => 'Argentino',
                'color' => '#1ab7e9',
                'image' => '',
            ],
            [
                'label' => 'Giapponese',
                'color' => '#8e0ad8',
                'image' => '',
            ],
            [
                'label' => 'Messicano',
                'color' => '#d87a0a',
                'image' => '',
            ],
            [
                'label' => 'Indiano',
                'color' => '#43a90d',
                'image' => '',
            ],
        ];

        foreach ($categories as $category) {
            $new_category = new Category();
            $new_category->label = $category['label'];
            $new_category->color = $category['color'];
            $new_category->image = $category['image'];
            $new_category->save();
        }
    }
}
