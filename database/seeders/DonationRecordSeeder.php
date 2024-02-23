<?php

namespace Database\Seeders;

use App\Models\DonationRecord;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DonationRecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DonationRecord::create([
           'donation_id' => 4,
            'recipient_id' => 5,
            'quantity_transfused' => 7,
            'transfusion_date' => '2024-02-24',
            'transfusion_status' => 'Pending',
        ]);
    }
}
