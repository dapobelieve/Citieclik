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

    public function __construct()
    {
        $data  =  Setting::all()->first();
        $this->SMS_USERNAME = $data->sms_api_username;
        $this->SMS_PASSWORD = $data->sms_api_password;
    }



    public function index()
    {
        $this->setkeys();
        // $this->sender();
    }

    private function shortenUrl($hash)
    {
        $body = '{"longUrl" : ';
        $body .= '"http://localhost:8000/requests/'.$hash;
        $body .= '"}';

        $client = new Client();
         
        $response = $client->request('POST','https://www.googleapis.com/urlshortener/v1/url', [
            'headers' => ['Content-Type' => 'application/json'],
            'query' => [
                'key' => 'AIzaSyC6dSgfZmdrjSCFfa4A13dKZwZFTtxJbj0',
            ],
            'body' =>  $body
        ]);
        $shortUrl = json_decode($response->getBody(), true);

        return $shortUrl['id'];
    }

    public function send($smsTo, $data)
    {
        $link = $this->shortenUrl($data);
        $this->sendSms($link);
        // dd($smsTo." ".$data);
    }

    private function sendSms($link)
    {
        $client = new Client();
        $message = "Hello, a service has been requested on CitieClik. Click here ".$link." to view the latest request";
        $numbers = '09078081328,07069494803,08129615513,';

        $response = $client->post('http://portal.bulksmsnigeria.net/api/?', [
            'verify'    =>  false,
            'form_params' => [
                'username' => $this->SMS_USERNAME,
                'password' => $this->SMS_PASSWORD,
                'message' => $message,
                'sender' => $this->SMS_SENDER,
                'mobiles' => $numbers
            ],
        ]);


        $response = json_decode($response->getBody(), true);
        dd($response);
    }

}
