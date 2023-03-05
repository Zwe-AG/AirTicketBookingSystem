<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Support\Facades\Validator;

class ReviewController extends Controller
{

    // rule Page
    public function rulePage(){
        return view('user.review.rule');
    }

    // join page
    public function joinPage(){
        return view('user.review.join');
    }

    // review Page
    public function reviewPage(){
        $reviews = Review::select('reviews.*','users.image as user_image','users.gender as user_gender')
        ->join('users','reviews.user_id','users.id')
        ->orderBy('created_at','desc')->get();
        return view('user.review.page',compact('reviews'));
    }

    // review List
    public function reviewList()
    {
        $reviews = Review::select('reviews.*','users.image as user_image','users.gender as user_gender')
        ->join('users','reviews.user_id','users.id')
        ->orderBy('created_at','desc')->get();
        return view('user.review.messageList',compact('reviews'));
    }

    // review create
    public function reviewCreate(Request $request){
        $this->reviewValidation($request);
        $data = $this->reviewData($request);
        Review::create($data);
        return redirect()->route('user#reviewpage')->with('success','Review Successfully!');
    }

    // review Edit
    public function reviewEdit($id){
        $reviews = Review::select('reviews.*','users.image as user_image','users.gender as user_gender')
        ->join('users','reviews.user_id','users.id')
        ->orderBy('created_at','desc')->get();
        $data = Review::where('id',$id)->get();
        return view('user.review.edit',compact('reviews','data'));
    }

    // review Update
    public function reviewUpdate(Request $request,$id){
        Validator::make($request->all(),[
            'message' => 'required',
        ])->validate();
        Review::where('id',$id)->update([
            'review' => $request->message,
        ]);
        return redirect()->route('user#reviewpage')->with('success','Review Update Successfully!');
    }

    // review Delete
    public function reviewDelete($id){
        Review::where('id',$id)->delete();
        return redirect()->route('user#reviewpage')->with('success','Review Delete Successfully!');
    }

     // review data validation
     private function reviewValidation($request)
     {
         $response = [
             'name' => 'required',
             'email' => 'required',
             'message' => 'required',
         ];
         Validator::make($request->all(),$response)->validate();
     }

    // review data store
    private function reviewData($request)
    {
        $response = [
            'name' => $request->name,
            'user_id' => $request->user_id,
            'email' => $request->email,
            'review' => $request->message,
        ];
        return $response;
    }
}
