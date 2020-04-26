<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SocialAuth;

use Auth;
use App\User;
class socialController extends Controller
{
    

    public function auth($provider){

    	return SocialAuth::driver($provider)->redirect();

    }

    public function auth_Callback($provider){

    	$gitHubUser = SocialAuth::driver('github')->user();

    	// dd($user);
        $user = User::where('provider_id' , $gitHubUser->getId())->first();

        if(!$user){
           $user = User::create([




                'name' => $gitHubUser->getNickname(),
                'avator' => $gitHubUser->getAvatar(),
                'email' => $gitHubUser->getEmail(),
                'provider_id' => $gitHubUser->getId(),

           ]);
        }
           Auth::login($user , true);

           return redirect('/home');

    }
}
