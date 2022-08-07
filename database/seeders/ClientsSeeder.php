<?php

    namespace Database\Seeders;

    use App\Models\Clients;
    use Illuminate\Database\Seeder;

    class ClientsSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            Clients::create(['client_name' => 'Elly Kedward']);
            Clients::create(['client_name' => 'Alice Kyteler']);
            Clients::create(['client_name' => 'Madame Blavatsky']);
            Clients::create(['client_name' => 'Joan Wytte']);
        }
    }
