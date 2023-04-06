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
                'image' => 'https://www.kikkoman.it/fileadmin/_processed_/d/0/csm_Italien_0525c8ba3c.jpg',
            ],
            [
                'label' => 'Argentino',
                'color' => '#1ab7e9',
                'image' => 'https://res.cloudinary.com/rainforest-cruises/images/c_fill,g_auto/f_auto,q_auto/v1626265148/Argentina-Traditional-Food-Asado/Argentina-Traditional-Food-Asado.jpg',
            ],
            [
                'label' => 'Giapponese',
                'color' => '#8e0ad8',
                'image' => 'https://s3-eu-west-1.amazonaws.com/fratelliorsero/wp-content/uploads/2019/11/25120833/shutterstock_648560977-1.jpg',
            ],
            [
                'label' => 'Messicano',
                'color' => '#d87a0a',
                'image' => 'https://www.viaggiaregratis.eu/wp-content/uploads/2020/11/Cucina-Messicana.jpg',
            ],
            [
                'label' => 'Indiano',
                'color' => '#43a90d',
                'image' => 'https://blog.giallozafferano.it/viaggiandomangiando/wp-content/uploads/2019/11/shutterstock_649541308.jpg',
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
