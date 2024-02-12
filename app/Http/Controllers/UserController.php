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

 public function AddUser(Request $req){

     $users = User::create([
         'name' => $req->name,
         'email' => $req->email,
         'password' => $req->password,
     ]);
     if($users){
         return redirect()->route('show.user');
     }else{
         echo "User Is Not Added";
     }
 }
}
//$users = User::updateOrCreate(
//    []
//)
