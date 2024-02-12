<?php

namespace App\Http\Controllers;

use App\Models\donationcenter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class donationcenterController extends Controller
{

    public function CenterForm(){
        return view('add_donation_centers');
    }
    public function showDonationcenter(){
        $center = DonationCenter::all();
        return view('donation_centers_table',['data' => $center]);
    }

    public function addDonationCenter(Request $req){
        $req->validate([
            'center_name' => 'required',
            'location' =>'required' ,
            'contact_number' => 'required|numeric',
            'email' => 'required|email',
        ]);
        $center = DonationCenter::create([
            'center_name' => $req->center_name,
            'location' => $req->location,
            'contact_number' => $req->contact,
            'email' => $req->email,
        ]);

        if($center){
            return redirect()->route('show.donationcenter');
        }else{
            echo "Center Is Not Added";
        }
    }
}
