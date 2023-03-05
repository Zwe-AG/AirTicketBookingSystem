<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    // user List
    public function userList()
    {
        $users = User::when(request('searchKey'),function($query){
            $key = request('searchKey');
            $query->orWhere('name','like','%'.$key.'%')->orWhere('email','like','%'.$key.'%');
        })->where('role','user')->orderBy('created_at','asc')->paginate(3);
        $users->appends(request()->all());
        return view('admin.user.list',compact('users'));
    }
}
