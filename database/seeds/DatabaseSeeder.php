<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call([
             PropertySeeder::class,
             UsersSeeder::class,
             BookingChannelsSeeder::class,
             FeeTaxTypesSeeder::class,
             ProfileTypesSeeder::class,
         ]);
    }
}
