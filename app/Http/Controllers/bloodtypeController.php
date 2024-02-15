<?php

namespace App\Http\Controllers;

use App\Http\Requests\BloodTypeRequest;
use App\Models\BloodType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class bloodtypeController extends Controller
{

    public function BloodForm(){
        return view('add_blood_type');
    }

    public function showBloodtype(){
        $blood = BloodType::all();
        return view ('blood_types_table',['data' => $blood]);
    }

    public function addBloodType(BloodTypeRequest $req){
        $blood_types  = BloodType::create([
            'blood_group' => $req->blood_group,
        ]);
        if($blood_types){
            return redirect()->route('show.bloodtype');
        }else{
            echo "Blood Type Is Not Added";
        }
    }

    public function DeleteBlood(string $id){
        $blood_type = BloodType::find($id)->where('id',$id)->delete();


    if($blood_type){
    return redirect()->route('show.bloodtype');
    } else{
            echo "Blood Type Is Not Deleted.";
        }
    }

}
