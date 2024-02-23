<?php

namespace App\Http\Controllers;


use App\Http\Requests\DonorRequest;
use App\Models\BloodType;
use App\Models\Donor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DonorController extends Controller
{

    // Method For Add Donor.
    public function addDonor(DonorRequest $req){

        $validate = $req->validated();

        $donors = Donor::updateOrCreate(['id'=>$req->id],$validate);

        if($donors){
            return redirect()->route('show.donors');
        }else{
            echo "Donor Is Not Added";
        }

    }



    // Method For Delete Donor.
    public function DeleteDonor( string $id){
        $donors = Donor::find($id)->where('id',$id)->delete();

        if($donors){
            return redirect()->route('show.donors');
        }else{
            echo "Donor Is Not Deleted";
        }
    }



    // Method For Show Table Data.
    public function showDonors(){
        $donors = Donor::with('BloodType')->get();
     // echo $donors->blood_group;
     //dd([$donors]);
        return view('donors_table',['data' => $donors]);
    }



    // Methods For Show Edit And Add Forms.
    public function DonorsForm(){
        $blood_types = Donor::BLOOD_TYPE;//BloodType::all();
        return view('add_donor',compact('blood_types'));
    }

    public function DonorEditForm(string $id){
        $donor = Donor::find($id);
        $blood_type = BloodType::all();
        return view('edit_donor',compact('donor','blood_type'));
    }



}
