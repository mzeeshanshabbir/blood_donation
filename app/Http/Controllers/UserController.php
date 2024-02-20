<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Donor;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
   {

    // Method For Add User.
    public function AddUser(UserRequest $req)
    {
        $validate = $req->validated();

        $user = User::updateOrCreate(['id'=>$req->id],$validate);

        if ($user){
            return redirect()->route('show.user');
        } else{
            echo "User Is Not Added.";
        }
    }



    // Method For Delete User
    public function DeleteUser(string $id){
        $users = User::find($id)->where('id',$id)->delete();


        if ($users) {
            return redirect()->route('show.user');
        } else {
            echo "User Is Not deleted";
        }
    }



    // Method For Show Table Data.
     public function showUser(){
     $users = User::all();
     return view('users_table',['data' => $users]);
    }



    // Methods For Show Add And Edit Forms.
    public function UserForm(){
        return view('add_user');
    }

    public function UserEditForm($id){
        $user = User::find($id);
        return view('edit_user',compact('user'));
    }
   }



