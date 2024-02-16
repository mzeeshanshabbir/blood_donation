<?php

namespace App\Http\Controllers;


use App\Http\Requests\DonorRequest;
use App\Models\BloodType;
use App\Models\Donor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DonorController extends Controller
{


    public function showDonors(){
        $donors = Donor::with('BloodType')->get();
//        echo $donors->blood_group;
//dd([$donors]);
     return view('donors_table',['data' => $donors]);
    }



    public function DonorsForm(){
        $blood_type = BloodType::all();
        return view('add_donor',compact('blood_type'));
    }


    public function addDonor(DonorRequest $req, string $id){


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

    public function DeleteDonor( string $id){
        $donors = Donor::find($id)->where('id',$id)->delete();

        if($donors){
            return redirect()->route('show.donors');
        }else{
            echo "Donor Is Not Deleted";
        }
    }

    public function DonorEditForm(string $id){
        $donor = Donor::find($id);
        return view('edit_donor',compact('donor'));
    }



}
