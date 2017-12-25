<?php
namespace App\Http\Controllers\Sms;

use Illuminate\Http\Request;

class SmsController
{
    private $SMS_SENDER = "CitieClik";
    private $RESPONSE_TYPE = 'json';
    private $SMS_USERNAME = 'Your username';
    private $SMS_PASSWORD = 'Your password';



    public static function index()
    {
        return 'Sending SMS...';
    }

    private function sender()
    {
        $client = new Client();
        $message = "";

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
