<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\User;
use Auth;
use Hash;
use Validator;

class SettingsController extends Controller
{
    public function change(){
       
    }
 
    public function update(){
        // custom validator
        Validator::extend('password', function ($attribute, $value, $parameters, $validator) {
            return Hash::check($value, \Auth::user()->password);
        });
 
        // message for custom validation
        $messages = [
            'password' => 'Invalid current password.',
        ];
 
        // validate form
        $validator = Validator::make(request()->all(), [
            'current_password'      => 'required|password',
            'password'              => 'required|min:6|confirmed',
            'password_confirmation' => 'required',
 
        ], $messages);
 
        // if validation fails
        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator->errors());
        }
 
        // update password
        $users = User::find(Auth::id());
 
        $users->password = bcrypt(request('password'));
        $users->save();
 
        return redirect()->back()->with('success','Password has been updated.');
                      
    }
}
