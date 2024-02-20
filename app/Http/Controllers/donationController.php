<?php

namespace App\Http\Controllers;

use App\Http\Requests\DonationRequest;
use App\Models\BloodType;
use App\Models\Donation;
use App\Models\Donor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class donationController extends Controller
{

    // Method For Add Donation.
    public function addDonation(DonationRequest $req){

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



    // Method For Delete Donation.
    public function DeleteDonation(string $id){
        $donations = Donation::find($id)->where('id',$id)->delete();

        if($donations){
            return redirect()->route('show.donations');
        }else{
            echo "Donation Is Not Deleted";
        }
    }



   // Method For Show Table Data.
    public function showDonation(){
        $donations = Donation::all();
        return view('donations_table',['data' => $donations]);
    }



    // Methods For Show Add And Edit Form.
    public function DonationForm(){
        $donor = Donor::all();
        $blood_type = BloodType::all();
        return view('add_donation',compact('donor','blood_type'));
    }

    public function DonationEditForm(string $id){
        $donations = Donation::find($id);
        return view('edit_donation',compact('donations'));
    }
}
