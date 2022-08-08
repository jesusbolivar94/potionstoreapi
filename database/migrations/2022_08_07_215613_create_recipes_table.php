<?php

    use App\Models\Ingredients;
    use App\Models\Potions;
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up(): void
        {
            Schema::create('recipes', function (Blueprint $table) {
                $table->id();
                $table->foreignIdFor(Potions::class, 'potion_id')->comment('Related to Potions table.');
                $table->foreignIdFor(Ingredients::class, 'ingredient_id')->comment('Related to Ingredients table.');
                $table->integer('quantity')->comment('Quantity of ingredient needed.');
                $table->timestamp('created_at')->default(now());
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down(): void
        {
            Schema::dropIfExists('recipes');
        }
    };
