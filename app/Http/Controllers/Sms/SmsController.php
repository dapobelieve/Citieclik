<?php
namespace App\Http\Controllers\Sms;

use Illuminate\Http\Request;
use App\Setting;

class SmsController
{
    
    private $SMS_SENDER = "CitieClik";
    private $RESPONSE_TYPE = 'json';
    public  $SMS_USERNAME;
    private $SMS_PASSWORD;

    public  function __construct()
    {
        // dd(Setting::get());
        $smsKeys = new Setting;
        $this->SMS_USERNAME = $smsKeys->getApiDetails()['username'];

    }



    public static function index()
    {
        return 'Sending SMS...';
    }

    private function sender()
    {
        $client = new Client();
        $message = "Hello, compliments of the season from all of us at citieclik a new request has been posted.";

        $response = $client->post('http://portal.bulksmsnigeria.net/api/?', [
            'verify'    =>  false,
            'form_params' => [
                'username' => $this->SMS_USERNAME,
                'password' => $this->SMS_PASSWORD,
                'message' => $message,
                'sender' => $this->SMS_SENDER,
                'mobiles' => $phone_number,
            ],
        ]);


        $response = json_decode($response->getBody(), true);
    }

}
