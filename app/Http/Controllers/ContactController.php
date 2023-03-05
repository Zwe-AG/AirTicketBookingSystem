<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    // list for dashboard
    public function list()
    {
        $contacts = Contact::when(request('searchKey'),function($query){
            $key = request('searchKey');
            $query->orWhere('name','like','%'.$key.'%')->orWhere('email','like','%'.$key.'%');
           })->orderBy('created_at','desc')->paginate(5);
        $contacts->appends(request()->all());
        return view('admin.contact.list',compact('contacts'));
    }

    // contact delete for dashboard
    public function conatctDelete($id)
    {
        Contact::where('id',$id)->delete();
        return redirect()->route('admin#contactpage')->with('success','Success Delete');
    }

    // conatct Detail for dashboard
    public function conatctDetail($id)
    {
       $data =  Contact::where('id',$id)->get();
        return view('admin.contact.detail',compact('data'));
    }

    // contact Page for website
    public function contactPage()
    {
        return view('user.contact.feedback');
    }

      // contact success for website
    public function contactSuccess()
    {
        return view('user.contact.success');
    }

    // contact to admin for website
    public function sendMessage(Request $request)
    {
        $this->messageValidation($request);
        $data = $this->messageData($request);
        Contact::create($data);
        return redirect()->route('user#contactsuccess');
    }

     // message data store
     private function messageData($request)
     {
         $response = [
             'name' => $request->name,
             'email' => $request->email,
             'message' => $request->message,
         ];
         return $response;
     }

     // message data validation
     private function messageValidation($request)
     {
         $response = [
             'name' => 'required',
             'email' => 'required',
             'message' => 'required',
         ];
         Validator::make($request->all(),$response)->validate();
     }

}
