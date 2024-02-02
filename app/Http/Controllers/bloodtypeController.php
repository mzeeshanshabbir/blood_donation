<?php

namespace App\Http\Controllers;

use App\Models\blood_type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class bloodtypeController extends Controller
{
    public function showBloodtype(){
        $blood = blood_type::all();
        return view ('blood_types_table',['data' => $blood]);
    }
}
