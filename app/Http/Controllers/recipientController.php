<?php

namespace App\Http\Controllers;

use App\Models\Recipient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class recipientController extends Controller
{

    public function RecipientForm(){
        return view('add_recipient');
    }


    public function showRecipients(){
        $recipients = Recipient::all();
        return view('recipients_table',['data' => $recipients]);
    }

    public function addRecipient(Request $req){
        $recipients = Recipient::create([
            'first_name' => $req->fname,
            'last_name' => $req->lname,
            'date_of_birth' => $req->birth_date,
            'gender' => $req->gender,
            'contact_number' => $req->contact,
            'email' => $req->email,
            'blood_type_id' => $req->blood_type,
            'required_units' => $req->required_units,
            'address' => $req->address,
            'hospital_name' => $req->hospital,
        ]);

        if($recipients){
            return redirect()->route('show.recipients');
        }else{
            echo "Recipients Is Not Added";
        }
    }
}
