<?php

namespace App\Http\Controllers;

use App\Models\Blood_type;
use App\Models\Donor;
use Illuminate\Http\Request;

class TestController extends Controller
{


    function index(){
        return Donor::find(2)->DonorData->get();
    }


//    function index(){
//        return Donor::with('getBlood')->get();
//    }
}
