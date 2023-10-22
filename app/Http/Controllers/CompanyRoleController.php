<?php

namespace App\Http\Controllers;

use App\Models\AssignRole;
use App\Models\Roles;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CompanyRoleController extends Controller
{
    public function companyPage(){

        $datas = User::get();
        
        
        return view('welcome',compact('datas'));
    }
 
    public function search(Request $request){
        $search = $request->search;
    
        $datas = User::where(function ($query) use ($search){
            
            $query->where('name','like',"%$search%")
            ->orWhere('email','like',"%$search%");
        })->get();
    

        return view('welcome',compact('datas','search'));

    }


    public function createUser(){
        return view('createcustomer');
    } 
    public function goback(){
        return redirect('/');
    }
    
    public function createUserRole(Request $request){
       
       
        DB::transaction(function () use ($request) {
            $validated = $request->validate([
                'name' => 'required',
                'email' => 'required',
                // 'role' => 'required',
            ]); 


            $user_data = new User();
            $user_data->name = $request->name;
            $user_data->email = $request->email;
            $user_data->save();
           
            $role = new Roles();
            $role->roles = $request->role;
            $role->save();

            $asign_id = new AssignRole();
            $asign_id->user_id = $user_data->id ;
            $asign_id->role_id = $role->id;
            $asign_id->save();

          

        });
        return redirect('/')->with('success', 'User Role Created Successfully');
       
     
    }

}
