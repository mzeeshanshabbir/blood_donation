<?php

namespace App\Http\Controllers;

use App\Http\Requests\DonationCenterRequest;
use App\Models\Donation;
use App\Models\donationcenter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class donationcenterController extends Controller
{

    // Method For Add Donation Center.
    public function addDonationCenter(DonationCenterRequest $req){

        $center = DonationCenter::create([
            'center_name' => $req->center_name,
            'location' => $req->location,
            'contact_number' => $req->contact,
            'email' => $req->email,
        ]);

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
