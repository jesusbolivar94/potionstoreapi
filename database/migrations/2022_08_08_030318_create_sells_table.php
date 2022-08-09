<?php

    use App\Models\Clients;
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
            Schema::create('sells', function (Blueprint $table) {
                $table->id();
                $table->foreignIdFor(Clients::class, 'client_id')->comment('Related to Clients table.');
                $table->timestamp('sell_at');
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
            Schema::dropIfExists('sells');
        }
    };
