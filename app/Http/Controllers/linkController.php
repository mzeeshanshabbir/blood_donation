<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class linkController extends Controller
{

    publuc function showregister(){
        return view('register');
}

}
