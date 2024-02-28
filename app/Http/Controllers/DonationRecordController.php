<?php

namespace App\Http\Controllers;


use App\Http\Requests\DonationRecordRequest;
use App\Models\DonationRecord;
use App\Models\Donation;
use App\Models\Recipient;
use App\Models\Donor;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DonationRecordController extends Controller
{

//    $recipient = Recipient::find()

    // Method For Add Donation Record.
    public function addDonationRecord(DonationRecordRequest $req){

        $validate = $req->validated();
        $records = DonationRecord::updateOrCreate(['id'=>$req->id],$validate);

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
        $recipients = DonationRecord::find(2);
        echo $recipients->Recipients->first_name;
        dd($recipients);



//        $recipients = DonationRecord::with('Recipients');
//        dd($recipients);



//        return view('donation_records_table',['data' => $records]);
    }



    // Method For Show Add And Edit Forms.
    public function RecordForm(){
        $don_date = Donation::all();
        $recip_name = Recipient::all();
        return view('add_donation_record',compact('don_date','recip_name'));
    }

    public function RecordEditForm(string $id){
        $records = DonationRecord::find($id);
        $don_date = Donation::all();
        $recip_name = Recipient::all();
        return view('edit_donation_record',compact('records','don_date','recip_name'));
    }
}
