<?php

    use App\Models\Potions;
    use App\Models\Sells;
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
            Schema::create('sells_items', function (Blueprint $table) {
                $table->id();
                $table->foreignIdFor(Sells::class, 'sell_id')->comment('Related to Sells table.');
                $table->foreignIdFor(Potions::class, 'potion_id')->comment('Related to Potions table.');
                $table->integer('quantity')->comment('Quantity of potions bought.');
                $table->timestamps();
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down(): void
        {
            Schema::dropIfExists('sells_items');
        }
    };
