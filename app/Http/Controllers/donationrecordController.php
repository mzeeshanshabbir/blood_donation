<?php

namespace App\Http\Controllers;


use App\Http\Requests\DonationRecordRequest;
use App\Models\DonationRecord;
use App\Models\Donation;
use App\Models\Recipient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class donationrecordController extends Controller
{

    // Method For Add Donation Record.
    public function addDonationRecord(DonationRecordRequest $req){


        $records =  DonationRecord::create([
            'donation_id' => $req->donation_id,
            'recipient_id' => $req->recipient_id,
            'quantity_transfused' => $req->quantity_transfused,
            'transfusion_date' => $req->transfusion_date,
            'transfusion_status' => $req->transfusion_status,
        ]);
        if($records){
            return redirect()->route('show.donationrecord');
        }else{
            echo "Record Is Not Added";
        }
    }



    // Method For Delete Donation Record.
    public function DeleteRecord( string $id){
        $records = DonationRecord::find($id)->where('id',$id)->delete();

        if($records){
            return redirect()->route('show.donationrecord');
        }else{
            echo "Donation Record Is Not Deleted";
        }
    }



    // Method For Show Table Data.
    public function showdonationRecord(){
        $records = DonationRecord::all();
        return view('donation_records_table',['data' => $records]);
    }



    // Method For Show Add And Edit Forms.
    public function RecordForm(){
        $don_date = Donation::all();
        $recip_date = Recipient::all();
        return view('add_donation_record',compact('don_date','recip_date'));
    }

    public function RecordEditForm(string $id){
        $records = DonationRecord::find($id);
        return view('eidt_donation_record',compact('records'));
    }
}
