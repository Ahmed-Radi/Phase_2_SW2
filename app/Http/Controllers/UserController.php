<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserController extends Controller
{
    public function profile($id){
        $user = User::find($id);
        return view('users.profile')->withUser($user);
    }

    public function edit(){
        if(Auth::user()){
            $user = User::find(Auth::user()->id);
            if($user){
                return view('users.edit')->withUser($user);

            }else{
                return redirect()->back();
            }

        }else{
            return redirect()->back();

        }
    }
    public function update(Request $request){
        $user = User::find(Auth::user()->id);

        if($user){
            $validate = null;
            if(Auth::user()->email === $request['email']){
                $validate = $request->validate([
                    'name'=>'required|min:2',
                    'email'=>'required|email'
                ]);
            }else{
                $validate = $request->validate([
                    'name'=>'required|min:2',
                    'email'=>'required|email|unique:users'
                ]);
            }


            if($validate){
                $user->name = $request['name'];
                $user->email = $request['email'];
                $user->save();
                $request->session()->flash('success', 'Your details have been updated!');
                return redirect()->back();
            }else{
                return redirect()->back();
            }

        }else{
            return redirect()->back();
        }


    }


}
