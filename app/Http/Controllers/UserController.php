<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
 public function showUser(){
     $users = User::all();
     return view('users_table',['data' => $users]);
 }
}
