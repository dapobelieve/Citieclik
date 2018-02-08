<?php
namespace App\Http\Controllers\Emails;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Token;
use App\User;


class Confirm extends Controller
{
    public function __construct()
    {
        $this->middleware(['AuthCheck']);
    }


    public function getEmailToken(Request $request, Token $token)
    {
        if($token->user->id == $request->user()->id){
            User::where('id',$request->user()->id)->update([
                'verify' => 1,
            ]);
        }
        // dd();
    }
}
