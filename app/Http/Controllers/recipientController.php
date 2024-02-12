<?php

namespace App\Http\Controllers;

use App\Models\Blood_type;
use App\Models\Recipient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class recipientController extends Controller
{

    public function RecipientForm(){
        $blood_type = Blood_type::all();
        return view('add_recipient',compact('blood_type'));
    }


    public function showRecipients(){
        $recipients = Recipient::all();
        return view('recipients_table',['data' => $recipients]);
    }

    public function addRecipient(Request $req){
        $req->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'date_of_birth' => 'required|date',
            'gender' => 'required',
            'contact_number' => 'required|numeric',
            'email' => 'required|email',
            'blood_type_id' => 'required',
            'required_units' => 'required|numeric',
            'address' => 'required',
            'hospital_name' => 'required',
        ]);

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
