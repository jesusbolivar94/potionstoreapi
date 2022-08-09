<?php

    namespace Database\Seeders;

    use App\Models\Sells;
    use App\Models\SellsItems;
    use Carbon\Carbon;
    use Illuminate\Database\Seeder;

    class SellsSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run(): void
        {
            // Sell 1
            Sells::create([
                'client_id' => 3,
                'sell_at' => Carbon::createFromFormat('Y/m/d H:i:s', '2021/09/13 20:48:48')->format('Y-m-d H:i:s')
            ]);
            SellsItems::create([
                'sell_id' => 1,
                'potion_id' => 2,
                'quantity' => 2
            ]);

            // Sell 2
            Sells::create([
                'client_id' => 1,
                'sell_at' => Carbon::createFromFormat('Y/m/d H:i:s', '2021/09/13 20:48:48')->format('Y-m-d H:i:s')
            ]);
            SellsItems::create([
                'sell_id' => 2,
                'potion_id' => 1,
                'quantity' => 22
            ]);

            // Sell 3
            Sells::create([
                'client_id' => 1,
                'sell_at' => Carbon::createFromFormat('Y/m/d H:i:s', '2021/09/15 13:28:12')->format('Y-m-d H:i:s')
            ]);
            SellsItems::create([
                'sell_id' => 3,
                'potion_id' => 2,
                'quantity' => 5
            ]);

            // Sell 4
            Sells::create([
                'client_id' => 1,
                'sell_at' => Carbon::createFromFormat('Y/m/d H:i:s', '2021/09/15 13:28:12')->format('Y-m-d H:i:s')
            ]);
            SellsItems::create([
                'sell_id' => 4,
                'potion_id' => 2,
                'quantity' => 13
            ]);

            // Sell 5
            Sells::create([
                'client_id' => 4,
                'sell_at' => Carbon::createFromFormat('Y/m/d H:i:s', '2021/09/15 18:06:10')->format('Y-m-d H:i:s')
            ]);
            SellsItems::create([
                'sell_id' => 5,
                'potion_id' => 1,
                'quantity' => 42
            ]);

            // Sell 6
            Sells::create([
                'client_id' => 1,
                'sell_at' => Carbon::createFromFormat('Y/m/d H:i:s', '2021/09/15 18:06:10')->format('Y-m-d H:i:s')
            ]);
            SellsItems::create([
                'sell_id' => 6,
                'potion_id' => 1,
                'quantity' => 12
            ]);

            // Sell 7
            Sells::create([
                'client_id' => 2,
                'sell_at' => Carbon::createFromFormat('Y/m/d H:i:s', '2021/09/15 19:33:24')->format('Y-m-d H:i:s')
            ]);
            SellsItems::create([
                'sell_id' => 7,
                'potion_id' => 2,
                'quantity' => 12
            ]);
            SellsItems::create([
                'sell_id' => 7,
                'potion_id' => 1,
                'quantity' => 5
            ]);

            // Sell 8
            Sells::create([
                'client_id' => 3,
                'sell_at' => Carbon::createFromFormat('Y/m/d H:i:s', '2021/09/16 19:48:34')->format('Y-m-d H:i:s')
            ]);
            SellsItems::create([
                'sell_id' => 8,
                'potion_id' => 2,
                'quantity' => 7
            ]);

            // Sell 9
            Sells::create([
                'client_id' => 4,
                'sell_at' => Carbon::createFromFormat('Y/m/d H:i:s', '2021/09/16 19:48:34')->format('Y-m-d H:i:s')
            ]);
            SellsItems::create([
                'sell_id' => 9,
                'potion_id' => 1,
                'quantity' => 8
            ]);

            // Sell 10
            Sells::create([
                'client_id' => 4,
                'sell_at' => Carbon::createFromFormat('Y/m/d H:i:s', '2021/09/16 19:48:34')->format('Y-m-d H:i:s')
            ]);
            SellsItems::create([
                'sell_id' => 10,
                'potion_id' => 1,
                'quantity' => 8
            ]);

            // Sell 11
            Sells::create([
                'client_id' => 4,
                'sell_at' => Carbon::createFromFormat('Y/m/d H:i:s', '2021/09/19 21:45:35')->format('Y-m-d H:i:s')
            ]);
            SellsItems::create([
                'sell_id' => 11,
                'potion_id' => 3,
                'quantity' => 13
            ]);

            // Sell 12
            Sells::create([
                'client_id' => 3,
                'sell_at' => Carbon::createFromFormat('Y/m/d H:i:s', '2021/09/19 21:45:35')->format('Y-m-d H:i:s')
            ]);
            SellsItems::create([
                'sell_id' => 12,
                'potion_id' => 2,
                'quantity' => 33
            ]);

            // Sell 13
            Sells::create([
                'client_id' => 3,
                'sell_at' => Carbon::createFromFormat('Y/m/d H:i:s', '2021/09/22 20:59:28')->format('Y-m-d H:i:s')
            ]);
            SellsItems::create([
                'sell_id' => 13,
                'potion_id' => 3,
                'quantity' => 1
            ]);

            // Sell 14
            Sells::create([
                'client_id' => 1,
                'sell_at' => Carbon::createFromFormat('Y/m/d H:i:s', '2021/09/22 20:59:28')->format('Y-m-d H:i:s')
            ]);
            SellsItems::create([
                'sell_id' => 14,
                'potion_id' => 1,
                'quantity' => 5
            ]);

            // Sell 15
            Sells::create([
                'client_id' => 4,
                'sell_at' => Carbon::createFromFormat('Y/m/d H:i:s', '2021/09/22 21:33:21')->format('Y-m-d H:i:s')
            ]);
            SellsItems::create([
                'sell_id' => 15,
                'potion_id' => 3,
                'quantity' => 33
            ]);
            SellsItems::create([
                'sell_id' => 15,
                'potion_id' => 2,
                'quantity' => 13
            ]);

            // Sell 16
            Sells::create([
                'client_id' => 3,
                'sell_at' => Carbon::createFromFormat('Y/m/d H:i:s', '2021/09/23 18:08:52')->format('Y-m-d H:i:s')
            ]);
            SellsItems::create([
                'sell_id' => 16,
                'potion_id' => 3,
                'quantity' => 19
            ]);

            // Sell 17
            Sells::create([
                'client_id' => 1,
                'sell_at' => Carbon::createFromFormat('Y/m/d H:i:s', '2021/09/23 18:08:52')->format('Y-m-d H:i:s')
            ]);
            SellsItems::create([
                'sell_id' => 17,
                'potion_id' => 2,
                'quantity' => 21
            ]);

            // Sell 18
            Sells::create([
                'client_id' => 4,
                'sell_at' => Carbon::createFromFormat('Y/m/d H:i:s', '2021/09/23 20:04:55')->format('Y-m-d H:i:s')
            ]);
            SellsItems::create([
                'sell_id' => 18,
                'potion_id' => 1,
                'quantity' => 15
            ]);

            // Sell 19
            Sells::create([
                'client_id' => 4,
                'sell_at' => Carbon::createFromFormat('Y/m/d H:i:s', '2021/09/23 20:04:55')->format('Y-m-d H:i:s')
            ]);
            SellsItems::create([
                'sell_id' => 19,
                'potion_id' => 1,
                'quantity' => 17
            ]);

            // Sell 20
            Sells::create([
                'client_id' => 3,
                'sell_at' => Carbon::createFromFormat('Y/m/d H:i:s', '2021/09/27 19:06:41')->format('Y-m-d H:i:s')
            ]);
            SellsItems::create([
                'sell_id' => 20,
                'potion_id' => 1,
                'quantity' => 22
            ]);

            // Sell 21
            Sells::create([
                'client_id' => 3,
                'sell_at' => Carbon::createFromFormat('Y/m/d H:i:s', '2021/09/27 19:06:41')->format('Y-m-d H:i:s')
            ]);
            SellsItems::create([
                'sell_id' => 21,
                'potion_id' => 1,
                'quantity' => 45
            ]);

            // Sell 22
            Sells::create([
                'client_id' => 1,
                'sell_at' => Carbon::createFromFormat('Y/m/d H:i:s', '2021/10/01 19:35:59')->format('Y-m-d H:i:s')
            ]);
            SellsItems::create([
                'sell_id' => 22,
                'potion_id' => 3,
                'quantity' => 6
            ]);
            SellsItems::create([
                'sell_id' => 22,
                'potion_id' => 1,
                'quantity' => 21
            ]);

            // Sell 23
            Sells::create([
                'client_id' => 3,
                'sell_at' => Carbon::createFromFormat('Y/m/d H:i:s', '2021/10/03 15:22:59')->format('Y-m-d H:i:s')
            ]);
            SellsItems::create([
                'sell_id' => 23,
                'potion_id' => 2,
                'quantity' => 35
            ]);

            // Sell 24
            Sells::create([
                'client_id' => 2,
                'sell_at' => Carbon::createFromFormat('Y/m/d H:i:s', '2021/10/03 15:22:59')->format('Y-m-d H:i:s')
            ]);
            SellsItems::create([
                'sell_id' => 24,
                'potion_id' => 2,
                'quantity' => 13
            ]);

            // Sell 25
            Sells::create([
                'client_id' => 3,
                'sell_at' => Carbon::createFromFormat('Y/m/d H:i:s', '2021/10/06 17:34:33')->format('Y-m-d H:i:s')
            ]);
            SellsItems::create([
                'sell_id' => 25,
                'potion_id' => 1,
                'quantity' => 30
            ]);

            // Sell 26
            Sells::create([
                'client_id' => 1,
                'sell_at' => Carbon::createFromFormat('Y/m/d H:i:s', '2021/10/06 17:34:33')->format('Y-m-d H:i:s')
            ]);
            SellsItems::create([
                'sell_id' => 26,
                'potion_id' => 1,
                'quantity' => 3
            ]);

            // Sell 27
            Sells::create([
                'client_id' => 4,
                'sell_at' => Carbon::createFromFormat('Y/m/d H:i:s', '2021/10/06 18:52:48')->format('Y-m-d H:i:s')
            ]);
            SellsItems::create([
                'sell_id' => 27,
                'potion_id' => 3,
                'quantity' => 23
            ]);
            SellsItems::create([
                'sell_id' => 27,
                'potion_id' => 1,
                'quantity' => 25
            ]);

            // Sell 28
            Sells::create([
                'client_id' => 3,
                'sell_at' => Carbon::createFromFormat('Y/m/d H:i:s', '2021/10/09 16:43:11')->format('Y-m-d H:i:s')
            ]);
            SellsItems::create([
                'sell_id' => 28,
                'potion_id' => 1,
                'quantity' => 17
            ]);
            SellsItems::create([
                'sell_id' => 28,
                'potion_id' => 2,
                'quantity' => 12
            ]);

            // Sell 29
            Sells::create([
                'client_id' => 3,
                'sell_at' => Carbon::createFromFormat('Y/m/d H:i:s', '2021/10/10 16:43:11')->format('Y-m-d H:i:s')
            ]);
            SellsItems::create([
                'sell_id' => 29,
                'potion_id' => 2,
                'quantity' => 14
            ]);

            // Sell 30
            Sells::create([
                'client_id' => 1,
                'sell_at' => Carbon::createFromFormat('Y/m/d H:i:s', '2021/10/10 16:43:11')->format('Y-m-d H:i:s')
            ]);
            SellsItems::create([
                'sell_id' => 30,
                'potion_id' => 1,
                'quantity' => 22
            ]);

            // Sell 31
            Sells::create([
                'client_id' => 1,
                'sell_at' => Carbon::createFromFormat('Y/m/d H:i:s', '2021/10/11 16:43:11')->format('Y-m-d H:i:s')
            ]);
            SellsItems::create([
                'sell_id' => 31,
                'potion_id' => 1,
                'quantity' => 9
            ]);

            // Sell 32
            Sells::create([
                'client_id' => 4,
                'sell_at' => Carbon::createFromFormat('Y/m/d H:i:s', '2021/10/11 16:43:11')->format('Y-m-d H:i:s')
            ]);
            SellsItems::create([
                'sell_id' => 32,
                'potion_id' => 3,
                'quantity' => 15
            ]);

            // Sell 33
            Sells::create([
                'client_id' => 4,
                'sell_at' => Carbon::createFromFormat('Y/m/d H:i:s', '2021/10/11 17:04:16')->format('Y-m-d H:i:s')
            ]);
            SellsItems::create([
                'sell_id' => 33,
                'potion_id' => 1,
                'quantity' => 6
            ]);

            // Sell 34
            Sells::create([
                'client_id' => 2,
                'sell_at' => Carbon::createFromFormat('Y/m/d H:i:s', '2021/10/11 17:04:16')->format('Y-m-d H:i:s')
            ]);
            SellsItems::create([
                'sell_id' => 34,
                'potion_id' => 2,
                'quantity' => 1
            ]);

            // Sell 35
            Sells::create([
                'client_id' => 2,
                'sell_at' => Carbon::createFromFormat('Y/m/d H:i:s', '2021/10/11 17:04:16')->format('Y-m-d H:i:s')
            ]);
            SellsItems::create([
                'sell_id' => 35,
                'potion_id' => 2,
                'quantity' => 1
            ]);

            // Sell 36
            Sells::create([
                'client_id' => 2,
                'sell_at' => Carbon::createFromFormat('Y/m/d H:i:s', '2021/10/12 16:43:11')->format('Y-m-d H:i:s')
            ]);
            SellsItems::create([
                'sell_id' => 36,
                'potion_id' => 1,
                'quantity' => 22
            ]);

            // Sell 37
            Sells::create([
                'client_id' => 3,
                'sell_at' => Carbon::createFromFormat('Y/m/d H:i:s', '2021/10/12 16:43:11')->format('Y-m-d H:i:s')
            ]);
            SellsItems::create([
                'sell_id' => 37,
                'potion_id' => 3,
                'quantity' => 11
            ]);

            // Sell 38
            Sells::create([
                'client_id' => 1,
                'sell_at' => Carbon::createFromFormat('Y/m/d H:i:s', '2021/10/12 18:37:00')->format('Y-m-d H:i:s')
            ]);
            SellsItems::create([
                'sell_id' => 38,
                'potion_id' => 2,
                'quantity' => 5
            ]);

            // Sell 39
            Sells::create([
                'client_id' => 2,
                'sell_at' => Carbon::createFromFormat('Y/m/d H:i:s', '2021/10/12 18:37:00')->format('Y-m-d H:i:s')
            ]);
            SellsItems::create([
                'sell_id' => 39,
                'potion_id' => 1,
                'quantity' => 18
            ]);

            // Sell 40
            Sells::create([
                'client_id' => 3,
                'sell_at' => Carbon::createFromFormat('Y/m/d H:i:s', '2021/10/14 13:32:59')->format('Y-m-d H:i:s')
            ]);
            SellsItems::create([
                'sell_id' => 40,
                'potion_id' => 2,
                'quantity' => 9
            ]);

            // Sell 41
            Sells::create([
                'client_id' => 2,
                'sell_at' => Carbon::createFromFormat('Y/m/d H:i:s', '2021/10/14 13:32:59')->format('Y-m-d H:i:s')
            ]);
            SellsItems::create([
                'sell_id' => 41,
                'potion_id' => 1,
                'quantity' => 30
            ]);

            // Sell 42
            Sells::create([
                'client_id' => 1,
                'sell_at' => Carbon::createFromFormat('Y/m/d H:i:s', '2021/10/17 22:00:03')->format('Y-m-d H:i:s')
            ]);
            SellsItems::create([
                'sell_id' => 42,
                'potion_id' => 3,
                'quantity' => 27
            ]);

            // Sell 43
            Sells::create([
                'client_id' => 4,
                'sell_at' => Carbon::createFromFormat('Y/m/d H:i:s', '2021/10/17 22:00:03')->format('Y-m-d H:i:s')
            ]);
            SellsItems::create([
                'sell_id' => 43,
                'potion_id' => 3,
                'quantity' => 22
            ]);

            // Sell 44
            Sells::create([
                'client_id' => 4,
                'sell_at' => Carbon::createFromFormat('Y/m/d H:i:s', '2021/10/17 22:00:03')->format('Y-m-d H:i:s')
            ]);
            SellsItems::create([
                'sell_id' => 44,
                'potion_id' => 3,
                'quantity' => 22
            ]);

            // Sell 45
            Sells::create([
                'client_id' => 1,
                'sell_at' => Carbon::createFromFormat('Y/m/d H:i:s', '2021/10/18 20:49:23')->format('Y-m-d H:i:s')
            ]);
            SellsItems::create([
                'sell_id' => 45,
                'potion_id' => 2,
                'quantity' => 54
            ]);
            SellsItems::create([
                'sell_id' => 45,
                'potion_id' => 1,
                'quantity' => 95
            ]);

            // Sell 46
            Sells::create([
                'client_id' => 2,
                'sell_at' => Carbon::createFromFormat('Y/m/d H:i:s', '2021/10/18 22:00:03')->format('Y-m-d H:i:s')
            ]);
            SellsItems::create([
                'sell_id' => 46,
                'potion_id' => 3,
                'quantity' => 7
            ]);

            // Sell 47
            Sells::create([
                'client_id' => 3,
                'sell_at' => Carbon::createFromFormat('Y/m/d H:i:s', '2021/10/18 22:00:03')->format('Y-m-d H:i:s')
            ]);
            SellsItems::create([
                'sell_id' => 47,
                'potion_id' => 2,
                'quantity' => 2
            ]);

            // Sell 48
            Sells::create([
                'client_id' => 4,
                'sell_at' => Carbon::createFromFormat('Y/m/d H:i:s', '2021/10/19 22:00:03')->format('Y-m-d H:i:s')
            ]);
            SellsItems::create([
                'sell_id' => 48,
                'potion_id' => 3,
                'quantity' => 1
            ]);

            // Sell 49
            Sells::create([
                'client_id' => 4,
                'sell_at' => Carbon::createFromFormat('Y/m/d H:i:s', '2021/10/19 22:00:03')->format('Y-m-d H:i:s')
            ]);
            SellsItems::create([
                'sell_id' => 49,
                'potion_id' => 3,
                'quantity' => 3
            ]);

            // Sell 50
            Sells::create([
                'client_id' => 3,
                'sell_at' => Carbon::createFromFormat('Y/m/d H:i:s', '2021/10/20 22:00:03')->format('Y-m-d H:i:s')
            ]);
            SellsItems::create([
                'sell_id' => 50,
                'potion_id' => 2,
                'quantity' => 18
            ]);

            // Sell 51
            Sells::create([
                'client_id' => 3,
                'sell_at' => Carbon::createFromFormat('Y/m/d H:i:s', '2021/10/20 22:00:03')->format('Y-m-d H:i:s')
            ]);
            SellsItems::create([
                'sell_id' => 51,
                'potion_id' => 1,
                'quantity' => 33
            ]);
        }
    }
