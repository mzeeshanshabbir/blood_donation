<?php

namespace App\Http\Controllers;

use App\Http\Requests\BloodTypeRequest;
use App\Models\BloodType;
use Faker\Core\Blood;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class bloodtypeController extends Controller
{

    // Method For Add Blood Type.
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



    // Method For Edit Blood Type.






    // Method For Delete Blood Type.
    public function DeleteBlood(string $id){
        $blood_type = BloodType::find($id)->where('id',$id)->delete();


    if($blood_type){
    return redirect()->route('show.bloodtype');
    } else{
            echo "Blood Type Is Not Deleted.";
        }
    }



    // Method For Show Table Data.
    public function showBloodtype(){
        $blood = BloodType::all();
        return view ('blood_types_table',['data' => $blood]);
    }



    // Methods For Show Edit And Add Form.
    public function BloodForm(){
        return view('add_blood_type');
    }

    public function BloodEditForm(string $id){
        $blood_type = BloodType::find($id);
        return view('edit_blood_type', compact('blood_type'));
    }

}
