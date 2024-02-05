<?php

namespace App\Http\Controllers;



use App\Models\DonationRecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class donationrecordController extends Controller
{
    public function showdonationRecord(){
          $records = DonationRecord::all();
        return view('donation_records_table',['data' => $records]);
    }

    public function addDonationRecord(Request $req){
        $records =  DonationRecord::create([
           'donation_id' => $req->donation_id,
            'recipient_id' => $req->recipient_id,
            'quantity_transfused' => $req->quantity,
            'transfusion_date' => $req->date,
            'transfusion_status' => $req->status,
        ]);
        if($records){
            return redirect()->route('show.donationrecord');
        }else{
            echo "Record Is Not Added";
        }
    }
}
