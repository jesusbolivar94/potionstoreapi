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

            // Poción Alisadora
            Recipes::create([
                'potion_id' => 2,
                'ingredient_id' => 5,
                'quantity' => 3
            ]);
            Recipes::create([
                'potion_id' => 2,
                'ingredient_id' => 6,
                'quantity' => 3
            ]);
            Recipes::create([
                'potion_id' => 2,
                'ingredient_id' => 7,
                'quantity' => 1
            ]);
            Recipes::create([
                'potion_id' => 2,
                'ingredient_id' => 8,
                'quantity' => 3
            ]);

            // Poción Multijugos
            Recipes::create([
                'potion_id' => 3,
                'ingredient_id' => 9,
                'quantity' => 2
            ]);
            Recipes::create([
                'potion_id' => 3,
                'ingredient_id' => 10,
                'quantity' => 1
            ]);
            Recipes::create([
                'potion_id' => 3,
                'ingredient_id' => 7,
                'quantity' => 3
            ]);
            Recipes::create([
                'potion_id' => 3,
                'ingredient_id' => 7,
                'quantity' => 3
            ]);
            Recipes::create([
                'potion_id' => 3,
                'ingredient_id' => 4,
                'quantity' => 2
            ]);
            Recipes::create([
                'potion_id' => 3,
                'ingredient_id' => 2,
                'quantity' => 1
            ]);
            Recipes::create([
                'potion_id' => 3,
                'ingredient_id' => 5,
                'quantity' => 1
            ]);
        }
    }
