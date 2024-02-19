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

        $users = User::updateOrCreate([
            'name' => $req->name,
            'email' => $req->email,
            'password' => $req->password,
        ]);

        if ($users){
            return redirect()->route('show.user');
        } else{
            echo "User Is Not Added.";
        }
    }



    // Method For Update User.
    public function EditUser(Request $req ,$id){
        $users = DB::table('users')->where('id',$id)
        ->update([
            'name' => $req->name,
            'email' => $req->email,
            'password' => $req->password,
        ]);

        if ($users){
            return redirect()->route('show.user');
        } else{
            echo "User Is Not Updated.";
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

    public function UserEditForm(string $id){
        $user = User::find($id);
        return view('edit_user',compact('user'));
    }
   }



