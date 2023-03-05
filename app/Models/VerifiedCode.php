<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Twilio\Rest\Client;
use Exception;

class VerifiedCode extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','otp','experied_date'];

    public function sendSMS($receiverNumber){
        $message = "Login OTP is " . $this->otp;
        try {
            $account_id = "ACb72f69d10ba813f78b7fadf9cb0f45f3";
            $auth_token = "bbe474a0d45d032fdf76901adcd409e5";
            $client = new Client($account_id,$auth_token);
            $client->messages->create($receiverNumber,[
                'messagingServiceSid' =>'MG82f2d31afc3b6b585de7815faa3b83db',
                'body' => $message,
            ]);
            info('SMS Sent successfully');
        } catch (\Exception $e) {
            info("Error".$e->getMessage());
        }
    }
}
