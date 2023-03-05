<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class SendEmailController extends Controller
{
    // send Email
    public function sendEmailPage($id)
    {
        $bookings = Booking::where('id',$id)->get();
        return view('admin.send.email',compact('bookings'));
    }

    // send Email
    public function sendEmail(Request $request)
    {
        $this->emailValidation($request);
        $data = $this->sendData($request);
        Mail::to($data['email'])->send(new SendMail($data));
        return back()->with('success','Send Mail successfully');
    }

     // email data store
     private function sendData($request)
     {
         $response = [
             'name' => $request->name,
             'email' => $request->email,
             'subject' => $request->subject,
             'message' => $request->message,
             'document' => $request->file('document'),
         ];
         return $response;
     }

    // email data validation
    private function emailValidation($request)
    {
        $response = [
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
            'document' => 'required',
        ];
        Validator::make($request->all(),$response)->validate();
    }
}
