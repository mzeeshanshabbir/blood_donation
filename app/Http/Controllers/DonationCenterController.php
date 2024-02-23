<?php

namespace App\Http\Controllers;

use App\Http\Requests\DonationCenterRequest;
use App\Models\Donation;
use App\Models\donationcenter;
use App\Models\Recipient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Donor;

class DonationCenterController extends Controller
{

    // Method For Add Donation Center.
    public function addDonationCenter(DonationCenterRequest $req){

       $validate = $req->validated();
       $center = DonationCenter::updateOrCreate(['id'=>$req->id],$validate);
        if($center){
            return redirect()->route('show.donationcenter');
        }else{
            echo "Center Is Not Added.";
        }
    }



    // Method For Delete Donation Center.
    public function DeleteCenter(string $id){
        $center = DonationCenter::find($id)->where('id',$id)->delete();

        if($center){
            return redirect()->route('show.donationcenter');
        }else{
            echo "Donation Center Is Not Deleted";
        }
    }



    // Method For Show Table Data.
    public function showDonationcenter(){
        $center = DonationCenter::all();
        return view('donation_centers_table',['data' => $center]);
    }



    // Methods For Show Edit And Add Form.
    public function CenterForm(){
        return view('add_donation_centers');
    }
    public function CenterEditForm(string $id){
        $center = DonationCenter::find($id);
        return view('edit_donation_center',compact('center'));

    }


}
