<?php

namespace App\Http\Controllers;

use App\Models\donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class donationController extends Controller
{
    public function showDonation(){
        $donations = donation::all();
        return view('donations_table',['data' => $donations]);
    }
}
