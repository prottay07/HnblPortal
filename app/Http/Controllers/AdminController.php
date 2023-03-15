<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login')->with('warning', "User Logout Successfully");
    } 

    public function profile(){
        $id = Auth::user()->id;
        // $id = optional(Auth::user())->id;
        $adminData = User::find($id);
        return view('admin.admin_profile_view', compact('adminData'));
    } 

    public function editProfile(){
        $id = Auth::user()->id;
        $editData = User::find($id);
        return view('admin.admin_profile_edit', compact('editData'));
    }

    public function storeProfile(Request $request){
        $id = Auth::user()->id;
        $data = User::find($id);

        $data->name = $request->name;
        $data->email = $request->email;

        if($request->file('profile_image')){
            $file = $request->file('profile_image');
            $filename = date('YmdHi').$file-> getClientOriginalName();
            $file->move(public_path('upload/admin_images'), $filename);

            $data['profile_image'] = $filename;

        }

        $data->save();

        
        

        return redirect()->route('admin.profile')->with('message', "Admin Profile Updated Successfully");


    }

    public function changePassword(){

        return view('admin.admin_password_change');
    }

    public function updatePassword(Request $request){
        $validateData = $request->validate([
            'oldpassword' => 'required',
            'newpassword' => 'required',
            'confirm_password' => 'required | same:newpassword'
        ]);

        $hashedpassword = Auth::user()->password;

        if(Hash::check($request->oldpassword,$hashedpassword)){
            $users = User::find(Auth::id());

            $users->password = bcrypt($request->newpassword);
            $users->save();

            session()->flash('message', 'Password changed successfuly');
            return redirect()->back();
        }
        else{
            session()->flash('message', 'Old Password did not match');
            return redirect()->back();
        }
    }
}
