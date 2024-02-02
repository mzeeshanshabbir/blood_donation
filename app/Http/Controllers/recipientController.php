<?php

namespace App\Http\Controllers;

use App\Models\recipient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class recipientController extends Controller
{
    public function showRecipients(){
        $recipients = recipient::all();
        return view('recipients_table',['data' => $recipients]);
    }
}
