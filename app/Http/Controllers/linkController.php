<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class linkController extends Controller
{

    public function showregister(){
        return view('register');
}

}
