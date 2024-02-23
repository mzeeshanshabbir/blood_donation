<?php

namespace App\Http\Controllers;

use App\Http\Requests\RecipientRequest;
use App\Models\BloodType;
use App\Models\Recipient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RecipientController extends Controller
{

    // Method For Add Recipient.
    public function addRecipient(RecipientRequest $req)
    {

        $validate = $req->validated();

        $recipients = Recipient::updateOrCreate(['id'=>$req->id],$validate);

        if ($recipients) {
            return redirect()->route('show.recipients');
        } else {
            echo "Recipients Is Not Added";
        }
    }



    // Method For Delete Recipient.
    public function DeleteRecip(string $id){
        $recipients = Recipient::find($id)->where('id',$id)->delete();

        if ($recipients) {
            return redirect()->route('show.recipients');
        } else {
            echo "Recipients Is Not Deleted";
        }
    }



    // Method For Show Table Data
    public function showRecipients(){
        $recipients = Recipient::all();
        return view('recipients_table',['data' => $recipients]);
    }



    // Methods For Show Edit And Add Forms.
    public function RecipientForm(){
        $blood_types = Recipient::BLOOD_TYPE;
        return view('add_recipient',compact('blood_types'));
    }

    public function RecipEditForm(string $id){
        $recipients = Recipient::find($id);
        $blood_types = Recipient::BLOOD_TYPE;
        return view('edit_recipient',compact('recipients','blood_types'));
    }
}
