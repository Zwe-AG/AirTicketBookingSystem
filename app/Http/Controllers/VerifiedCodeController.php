<?php

namespace App\Http\Controllers;


use Exception;
use Carbon\Carbon;
use App\Models\User;
use Twilio\Rest\Client;
use App\Models\VerifiedCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class VerifiedCodeController extends Controller
{
    //
    public function otpPage()
    {
       return view('otpPage');
    }

     public function otpVerifiedPage($user_id)
    {
       return view('otpVerified')->with([
         'user_id' => $user_id
       ]);
    }

    public function otpGenerate(Request $request)
    {
        Validator::make($request->all(),[
            'phone' => 'required|exists:users,phone'
        ])->validate();
        $userOTP = $this->generateOTP($request->phone);
        $phone_num = $request->phone;
        $userOTP->sendSMS($phone_num);
        return redirect()->route('otp#verifiedpage',['user_id'=>$userOTP->user_id])->with('success','OTP has been sent Your Phone Number');
    }

    public function generateOTP($phone)
    {
        $user = User::where('phone',$phone)->first();
        $userOTP = VerifiedCode::where('user_id',$user->id)->latest()->first();
        $now = Carbon::now();
        if($userOTP && $now->isBefore($userOTP->experied_date)){
            return $userOTP;
        }
        return VerifiedCode::create([
            'user_id' => $user->id,
            'otp' => rand(123456,999999),
            'experied_date' => Carbon::now()->addMinutes(10),
        ]);
    }

    public function otpLogin(Request $request)
    {
        Validator::make($request->all(),[
            'otp' => 'required',
            'user_id' => 'required',
        ])->validate();
        $userOTP = VerifiedCode::where('user_id',$request->user_id)->where('otp',$request->otp)->first();
        $now = Carbon::now();

        if(!$userOTP){
            return redirect()->back();
        }elseif($userOTP && $now->isAfter($userOTP->experied_date)){
            return redirect()->back();
        }
        $user = User::where('id',$request->user_id)->first();
        if($user){
            $userOTP->update([
                'experied_date' => Carbon::now()
            ]);
            // dd($user);
            // Auth::login($user);
            if($user->role == "admin"){
                Auth::loginUsingId($user->id);
                return redirect()->route('admin#mainpage');
            }elseif($user->role == "user"){
                Auth::loginUsingId($user->id);
                return redirect()->route('user#home');
            }
            // Auth::loginUsingId($user->id);
            // return redirect()->route('admin#mainpage');
        }
        return redirect()->route('otp#login');
    }

}
