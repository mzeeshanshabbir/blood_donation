<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Donor;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
   {

    public function UserForm(){
        return view('add_user');
    }
 public function showUser(){
     $users = User::all();
     return view('users_table',['data' => $users]);
    }

 public function AddUser(UserRequest $req)
    {

     $users = User::updateOrCreate([

         'name' => $req->name,
         'email' => $req->email,
         'password' => $req->password,
     ]);
        if ($users) {
            return redirect()->route('show.user');
        } else {
            echo "User Is Not Added.";
        }
    }

    public function DeleteUser(string $id){
        $users = User::find($id)->where('id',$id)->delete();


         if ($users) {
         return redirect()->route('show.user');
         } else {
         echo "User Is Not deleted";
         }

    }
    }







//$users = User::updateOrCreate(
//    [])

//if ($users) {
//         return redirect()->route('show.user');
//     } else {
//         echo "User Is Not Added";
//     }
