<?php

namespace App\Http\Controllers;



use App\Models\DonationRecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class donationrecordController extends Controller
{
    public function showdonationRecord(){
//        $records = DB::table('donation_records')->get();
          $records = DonationRecord::all();
        return view('donation_records_table',['data' => $records]);
    }
}
