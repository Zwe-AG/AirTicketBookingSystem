<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Flight;
use App\Models\User;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    //user or admin Change Role
    public function userChangeRole(Request $request){
        User::where('id',$request->userId)->update([
            'role' => $request->role,
        ]);
    }

    public function adminChangeRole(Request $request){
        User::where('id',$request->adminID)->update([
            'role' => $request->role,
        ]);
    }

    // Change Status
    public function statusChange(Request $request)
    {
        Booking::where('id',$request->bookingId)->update(
            [
                'status' => $request->status,
            ]
        );
    }


}
