<?php

namespace App\Http\Controllers;

use App\Models\donor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DonorController extends Controller
{
    public function showDonors(){
     $donors = donor::all();
     return view('donors_table',['data' => $donors]);
    }
}
