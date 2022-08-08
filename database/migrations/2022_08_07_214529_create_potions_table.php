<?php

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
            Schema::create('potions', function (Blueprint $table) {
                $table->id();
                $table->string('name', '200');
                $table->double('crafting_cost');
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
            Schema::dropIfExists('potions');
        }
    };