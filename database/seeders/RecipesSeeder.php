<?php

    namespace Database\Seeders;

    use App\Models\Recipes;
    use Illuminate\Database\Seeder;

    class RecipesSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run(): void
        {
            // Poción de Amor
            Recipes::create([
                'potion_id' => 1,
                'ingredient_id' => 1,
                'quantity' => 2
            ]);
            Recipes::create([
                'potion_id' => 1,
                'ingredient_id' => 2,
                'quantity' => 1
            ]);
            Recipes::create([
                'potion_id' => 1,
                'ingredient_id' => 3,
                'quantity' => 4
            ]);
            Recipes::create([
                'potion_id' => 1,
                'ingredient_id' => 4,
                'quantity' => 3
            ]);
        }
    }
