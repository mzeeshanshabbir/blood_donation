<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//         \App\Models\User::factory(10)->create();
//         \App\Models\Donor::factory(10)->create();
//        \App\Models\Recipient::factory(10)->create();
//        \App\Models\Blood_type::factory(10)->create();
//        \App\Models\DonationCenter::factory(10)->create();
//        \App\Models\DonationRecord::factory(10)->create();

          $this->call([
            UserSeeder::class
          ]);

          $this->call([
             DonationRecordSeeder::class
          ]);



    }
}
