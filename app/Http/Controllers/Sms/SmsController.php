<?php
namespace App\Http\Controllers\Sms;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use App\Setting;

class SmsController
{
    
    private $SMS_SENDER = "CitieClik";
    private $RESPONSE_TYPE = 'json';
    public  $SMS_USERNAME;
    private $SMS_PASSWORD;

    public  function setkeys()
    {
        $data  =  Setting::all()->first();
        $this->SMS_USERNAME = $data->sms_api_username;
        $this->SMS_PASSWORD = $data->sms_api_password;
        // dd($data->sms_api_username);
    }



    public function index()
    {
        $this->setkeys();
        $this->sender();
        // return $this->SMS_PASSWORD;;
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
                'mobiles' => '08134327417,09078081328,',
            ],
        ]);


        $response = json_decode($response->getBody(), true);
        dd($response);
    }

}
