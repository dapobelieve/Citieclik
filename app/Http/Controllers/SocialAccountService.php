<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Contracts\User as ProviderUser;
use App\SocialAccount;
use App\User;

use Illuminate\Http\Request;

class SocialAccountService extends Controller
{
    public function createOrGetUser(Provider $provider)
    {
        $providerUser = $provider->user();
        $providerName = class_basename($provider);


        $account = SocialAccount::where('provider',$providerName)
            ->where('provider_user_id', $providerUser->getId())
            ->first();
            
        
        // dd($duser);

        if ((!empty($account))) {

            $duser = User::where('email',$providerUser->getEmail())->first();

            if($duser)
                return $duser;
            else
                return $account->users;
        } else {

            $account = new SocialAccount([
                'provider_user_id' => $providerUser->getId(),
                'provider' => $providerName,
            ]);

            $user = User::where('email', $providerUser->getEmail())->first();

            if (!$user) {

                $user = User::create([
                    'email' => $providerUser->getEmail(),
                    'first_name' => $providerUser->getName(),
                    'image' => $providerUser->getAvatar(),
                ]);
            }

            $account->users()->associate($user);
            $account->save();
            
            return $user;

        }
    }
}
