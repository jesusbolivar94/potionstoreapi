<?php

    namespace Database\Seeders;

    use App\Models\Ingredients;
    use Illuminate\Database\Seeder;

    class IngredientsSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            Ingredients::create([
                'name' => 'petalos',
                'stock' => 10,
                'price' => 2000
            ]);
            Ingredients::create([
                'name' => 'sal de mar',
                'stock' => 10,
                'price' => 3000
            ]);
            Ingredients::create([
                'name' => 'vino',
                'stock' => 10,
                'price' => 6000
            ]);
            Ingredients::create([
                'name' => 'polvo magico',
                'stock' => 10,
                'price' => 30000
            ]);
            Ingredients::create([
                'name' => 'cenizas',
                'stock' => 10,
                'price' => 2500
            ]);
            Ingredients::create([
                'name' => 'aloe vera',
                'stock' => 10,
                'price' => 1500
            ]);
            Ingredients::create([
                'name' => 'lagrima de gato',
                'stock' => 10,
                'price' => 9000
            ]);
            Ingredients::create([
                'name' => 'jugo magico',
                'stock' => 10,
                'price' => 27000
            ]);
            Ingredients::create([
                'name' => 'sanguijuelas',
                'stock' => 10,
                'price' => 13000
            ]);
            Ingredients::create([
                'name' => 'polvo de cuerno de bicornio',
                'stock' => 10,
                'price' => 65000
            ]);
        }
    }
