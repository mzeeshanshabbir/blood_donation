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

    public function RecordForm(){
        $don_date = Donation::all();
        $recip_date = Recipient::all();
        return view('add_donation_record',compact('don_date','recip_date'));
    }
    public function showdonationRecord(){
          $records = DonationRecord::all();
        return view('donation_records_table',['data' => $records]);
    }

    public function addDonationRecord(DonationRecordRequest $req){


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

    public function DeleteRecord( string $id){
        $records = DonationRecord::find($id)->where('id',$id)->delete();

        if($records){
            return redirect()->route('show.donationrecord');
        }else{
            echo "Donation Record Is Not Deleted";
        }
    }

    public function RecordEditForm(string $id){
        $records = DonationRecord::find($id);
        return view('eidt_donation_record',compact('records'));
    }
}
