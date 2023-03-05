<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{

    // direct change password page
    public function changePasswordPage()
    {
       return view('admin.admin_account.changepassword');
    }

    // change password
    public function changePassword(Request $request)
    {
        $this->passwordValidation($request);
        $currentId = Auth::user()->id;
        $user = User::where('id',$currentId)->first();
        $dbPassword = $user->password;
        if (Hash::check($request->oldPassword, $dbPassword)) {
            $updatePassword = [
                'password' => Hash::make($request->newPassword),
            ];
            User::where('id',$currentId)->update($updatePassword);
            Auth::logout();
	        return redirect('/');
        }
        return back();
    }

    // direct profile page
    public function profilePage()
    {
        return view('admin.admin_account.accountprofileedit');
    }

    // profile edit page
    public function profileEdit()
    {
       return view('admin.admin_account.accountprofile');
    }

    // profile update
    public function profileUpdate(Request $request,$id)
    {
       $this->profileValidation($request);
       $data = $this->profileData($request);
       if($request->hasFile('image')){
          $dbImage = User::where('id',$id)->first();
          $dbImage = $dbImage->image;
          if ($dbImage != null) {
             Storage::delete('public/'.$dbImage);
          }
          $filename = uniqid() . $request->file('image')->getClientOriginalName();
          $request->file('image')->storeAs('public',$filename);
          $data['image'] = $filename;
       }
       User::where('id',$id)->update($data);
       return redirect()->route('admin#accountprofilepage')->with('success','Success Profile Update');
    }

    // admin List
    public function adminList()
    {
        $admins = User::when(request('searchKey'),function($query){
            $key = request('searchKey');
            $query->orWhere('name','like','%'.$key.'%')->orWhere('email','like','%'.$key.'%');
        })->where('role','admin')->orderBy('created_at','asc')->paginate(2);
        $admins->appends(request()->all());
        return view('admin.admin_account.list',compact('admins'));
    }

    // admin delete
    public function adminDelete($id)
    {
        User::where('id',$id)->delete();
        return back()->with('success','Success Delete');
    }

    // profile data store
    private function profileData($request)
    {
        $response = [
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'country' => $request->country,
            'language' => $request->language,
            'gender' => $request->gender,
        ];
        return $response;
    }

    // profile data validation
    private function profileValidation($request)
    {
        $response = [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
            'country' => 'required',
            'language' => 'required',
            'gender' => 'required',
            'image' => 'mimes:jpg,jpeg,png,webp',
        ];
        Validator::make($request->all(),$response)->validate();
    }

    // password validation
    private function passwordValidation ($request)
    {
        $response = [
            'oldPassword'  => 'required|min:6|max:10',
            'newPassword'  => 'required|min:6|max:10',
            'confirmPassword'  => 'required|min:6|max:10|same:newPassword',
        ];
        Validator::make($request->all(),$response)->validate();
    }

}
