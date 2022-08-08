<?php

    namespace Database\Seeders;

    use App\Models\Potions;
    use Illuminate\Database\Seeder;

    class PotionsSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run(): void
        {
            Potions::create([
                'name' => 'poción de amor',
                'crafting_cost' => 1000
            ]);
            Potions::create([
                'name' => 'poción alisadora',
                'crafting_cost' => 1000
            ]);
            Potions::create([
                'name' => 'poción multijugos',
                'crafting_cost' => 1000
            ]);
        }
    }
