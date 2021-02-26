<?php

namespace App\Http\Controllers;


use App\Http\Requests\SaveUserRequest;
use App\Http\Requests\UpdatePasswordRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{

    public function profile(){
        return view('profile.index');
    }


    public function updateProfile(SaveUserRequest $request){

        if ($request->hasFile('image')){
            if ($request->file('image')->isValid()
            ){
                $image = $request->file('image');
                $extention = $image->getClientOriginalExtension();
                $filename = date('y_m_d_h_i_s') . "." . $extention;
                Storage::disk('public')->put('img/users/'.$filename,file_get_contents($image));
            }
            if (Storage::disk('public')->exists('img/users/'.Auth::user()->image)){
                try {
                    (Storage::disk('public')->delete('img/users/'.Auth::user()->image));
                } catch (\Exception $exception){
                    return null;
                }
            }
        }

        User::where('id', Auth::id())->update(array(
            'first_name' =>$request->input('first_name'),
            'last_name' =>$request->input('last_name'),
            'phone' =>$request->input('phone'),
            'website' =>$request->input('website'),
            'address' => $request->input('address'),
            'city' => $request->input('city'),
            'state' => $request->input('state'),
            'zip' => $request->input('zip'),
            'country' => $request->input('country'),
            'note' => $request->input('note'),
            'email' => $request->input('email'),
            'image' => isset($filename) ? $filename: Auth::user()->image,


        ));
        return back()->with('success','Profile Updated Successfully');

    }

    public function password(){
        return view('profile.updatePassword');
    }

    public function updatePassword(UpdatePasswordRequest $request)
    {

        if (Hash::check($request->current_password, Auth::user()->password)) {
            $hashed_password = Hash::make($request->password_confirmation);

            User::where('id', Auth::id())->update([
                'password' => $hashed_password,
            ]);

            return back()->with('success', 'Your Password Has been Updated');
        }
    }

}
