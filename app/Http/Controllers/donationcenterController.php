<?php

namespace App\Http\Controllers;

use App\Models\donationcenter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class donationcenterController extends Controller
{
    public function showDonationcenter(){
        $center = DonationCenter::all();
        return view('donation_centers_table',['data' => $center]);
    }
}
