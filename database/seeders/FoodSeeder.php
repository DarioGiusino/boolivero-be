<?php

namespace Database\Seeders;

use App\Models\Food;
use App\Models\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $restaurants = Restaurant::pluck('id')->toArray();
        $foods = [
            [
                'label' => 'Hamburger vegetale',
                'description' => 'Un hamburger vegetariano o veggie burger è un impasto simile all\'hamburger, ma che non contiene carne. L\'impasto di un veggie burger può contenere proteine vegetali isolate, legumi, cereali, verdure, glutine di frumento, addensanti. Spesso gli hamburger vegetariani commercializzati vengono addizionati di vitamina B12.',
                'price' => '6.99',
                'is_published' => '1',
                'image' => ''
            ],
            [
                'label' => 'Pasta al pesto',
                'description' => 'Il pesto alla genovese è un condimento tradizionale tipico originario della Liguria. Con tale denominazione è inserito tra i Prodotti agroalimentari tradizionali liguri. Il suo ingrediente base è il basilico, e più specificamente il Basilico Genovese.',
                'price' => '12.56',
                'is_published' => '0',
                'image' => ''
            ],
            [
                'label' => 'Riso nero con salmone e rucola',
                'description' => 'Il riso nero integrale con salmone, pomodorini e rucola è un primo piatto estivo. Fresco, gustoso e saporito è perfetto per le giornate calde. Lo possiamo preparare in anticipo ed usarlo come schiscetta al lavoro, oppure lo possiamo portare al mare o in montagna. Ma non solo, è ideale da servire anche a buffet o durante gli aperitivi.',
                'price' => '78.32',
                'is_published' => '1',
                'image' => ''
            ],
            [
                'label' => 'Frittata con prosciutto',
                'description' => 'La frittata è uno di quei piatti che piace proprio a tutti e si può preparare davvero in tanti modi.Al forno o in padella,con verdure o con salumi. A casa mia piace molto la frittata con prosciutto e formaggio,l’avete mai provata?',
                'price' => '15.87',
                'is_published' => '1',
                'image' => ''
            ],
            [
                'label' => 'Pizza patate e salsiccia',
                'description' => 'Pizza con patate e salsiccia buona e saporita,la pizza non stanca mai in igni modo la si fà è sempre ottima,ma così è sublime',
                'price' => '99.97',
                'is_published' => '0',
                'image' => ''
            ],
            [
                'label' => 'Frittata con prosciutto',
                'description' => 'La frittata è uno di quei piatti che piace proprio a tutti e si può preparare davvero in tanti modi.Al forno o in padella,con verdure o con salumi. A casa mia piace molto la frittata con prosciutto e formaggio,l’avete mai provata?',
                'price' => '15.87',
                'is_published' => '1',
                'image' => ''
            ],
            [
                'label' => 'Frittata con prosciutto',
                'description' => 'La frittata è uno di quei piatti che piace proprio a tutti e si può preparare davvero in tanti modi.Al forno o in padella,con verdure o con salumi. A casa mia piace molto la frittata con prosciutto e formaggio,l’avete mai provata?',
                'price' => '15.87',
                'is_published' => '1',
                'image' => ''
            ],
            [
                'label' => 'Frittata con prosciutto',
                'description' => 'La frittata è uno di quei piatti che piace proprio a tutti e si può preparare davvero in tanti modi.Al forno o in padella,con verdure o con salumi. A casa mia piace molto la frittata con prosciutto e formaggio,l’avete mai provata?',
                'price' => '15.87',
                'is_published' => '1',
                'image' => ''
            ],
            [
                'label' => 'Frittata con prosciutto',
                'description' => 'La frittata è uno di quei piatti che piace proprio a tutti e si può preparare davvero in tanti modi.Al forno o in padella,con verdure o con salumi. A casa mia piace molto la frittata con prosciutto e formaggio,l’avete mai provata?',
                'price' => '15.87',
                'is_published' => '1',
                'image' => ''
            ],
            [
                'label' => 'Frittata con prosciutto',
                'description' => 'La frittata è uno di quei piatti che piace proprio a tutti e si può preparare davvero in tanti modi.Al forno o in padella,con verdure o con salumi. A casa mia piace molto la frittata con prosciutto e formaggio,l’avete mai provata?',
                'price' => '15.87',
                'is_published' => '1',
                'image' => ''
            ],
            [
                'label' => 'Frittata con prosciutto',
                'description' => 'La frittata è uno di quei piatti che piace proprio a tutti e si può preparare davvero in tanti modi.Al forno o in padella,con verdure o con salumi. A casa mia piace molto la frittata con prosciutto e formaggio,l’avete mai provata?',
                'price' => '15.87',
                'is_published' => '1',
                'image' => ''
            ],
            [
                'label' => 'Frittata con prosciutto',
                'description' => 'La frittata è uno di quei piatti che piace proprio a tutti e si può preparare davvero in tanti modi.Al forno o in padella,con verdure o con salumi. A casa mia piace molto la frittata con prosciutto e formaggio,l’avete mai provata?',
                'price' => '15.87',
                'is_published' => '1',
                'image' => ''
            ],
            [
                'label' => 'Frittata con prosciutto',
                'description' => 'La frittata è uno di quei piatti che piace proprio a tutti e si può preparare davvero in tanti modi.Al forno o in padella,con verdure o con salumi. A casa mia piace molto la frittata con prosciutto e formaggio,l’avete mai provata?',
                'price' => '15.87',
                'is_published' => '1',
                'image' => ''
            ],
            [
                'label' => 'Frittata con prosciutto',
                'description' => 'La frittata è uno di quei piatti che piace proprio a tutti e si può preparare davvero in tanti modi.Al forno o in padella,con verdure o con salumi. A casa mia piace molto la frittata con prosciutto e formaggio,l’avete mai provata?',
                'price' => '15.87',
                'is_published' => '1',
                'image' => ''
            ],
            [
                'label' => 'Frittata con prosciutto',
                'description' => 'La frittata è uno di quei piatti che piace proprio a tutti e si può preparare davvero in tanti modi.Al forno o in padella,con verdure o con salumi. A casa mia piace molto la frittata con prosciutto e formaggio,l’avete mai provata?',
                'price' => '15.87',
                'is_published' => '1',
                'image' => ''
            ],
            [
                'label' => 'Frittata con prosciutto',
                'description' => 'La frittata è uno di quei piatti che piace proprio a tutti e si può preparare davvero in tanti modi.Al forno o in padella,con verdure o con salumi. A casa mia piace molto la frittata con prosciutto e formaggio,l’avete mai provata?',
                'price' => '15.87',
                'is_published' => '1',
                'image' => ''
            ],
            [
                'label' => 'Frittata con prosciutto',
                'description' => 'La frittata è uno di quei piatti che piace proprio a tutti e si può preparare davvero in tanti modi.Al forno o in padella,con verdure o con salumi. A casa mia piace molto la frittata con prosciutto e formaggio,l’avete mai provata?',
                'price' => '15.87',
                'is_published' => '1',
                'image' => ''
            ],
        ];

        foreach ($foods as $food) {
            $new_food = new Food();
            $new_food->restaurant_id = Arr::random($restaurants);
            $new_food->label = $food['label'];
            $new_food->description = $food['description'];
            $new_food->price = $food['price'];
            $new_food->is_published = $food['is_published'];
            $new_food->image = $food['image'];
            $new_food->save();
        }
    }
}
