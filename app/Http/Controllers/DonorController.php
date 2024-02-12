<?php

namespace App\Http\Controllers;


use App\Models\Blood_type;
use App\Models\Donor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DonorController extends Controller
{
    public function showDonors(){
     $donors = Donor::all();
     return view('donors_table',['data' => $donors]);
    }

    public function DonorsForm(){
        $blood_type = Blood_type::all();
        return view('add_donor',compact('blood_type'));
    }



    public function addDonor(Request $req){
        $donors = Donor::create([
            'first_name' => $req->fname,
            'last_name' => $req->lname,
            'date_of_birth' => $req->birth_date,
            'gender' => $req->gender,
            'contact_number' => $req->contact,
            'email' => $req->email,
            'blood_type_id' => $req->blood_type,
            'last_donation_date' => $req->donation_date,
            'address' => $req->address,
        ]);
        if($donors){
            return redirect()->route('show.donors');
        }else{
            echo "Donor Is Not Added";
        }
    }



}
