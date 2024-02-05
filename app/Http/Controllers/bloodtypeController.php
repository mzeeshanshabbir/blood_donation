<?php

namespace App\Http\Controllers;

use App\Models\blood_type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class bloodtypeController extends Controller
{
    public function showBloodtype(){
        $blood = Blood_type::all();
        return view ('blood_types_table',['data' => $blood]);
    }

    public function addBloodType(Request $req){
        $blood_types  = Blood_type::create([
            'blood_group' => $req->blood_group,
            'rh_factor' => $req->rh_factor,
        ]);
        if($blood_types){
            return redirect()->route('show.bloodtype');
        }else{
            echo "Blood Type Is Not Added";
        }
    }
}
