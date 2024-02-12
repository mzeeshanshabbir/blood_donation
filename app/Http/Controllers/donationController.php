<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class donationController extends Controller
{

    public function DonationForm(){
        return view('add_donation');
    }
    public function showDonation(){
        $donations = Donation::all();
        return view('donations_table',['data' => $donations]);
    }

    public function addDonation(Request $req){
        $donations = Donation::create([
            'donor_id' => $req->donor_id,
            'donation_date' => $req->donation_date,
            'blood_type_id' => $req->blood_type,
            'quantity_in_ml' => $req->quantity,
            'status' => $req->status,
        ]);

        if($donations){
            return redirect()->route('show.donations');
        }else{
            echo "Donation Is Not Added";
        }
    }
}
