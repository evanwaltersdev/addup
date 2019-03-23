<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use App\User;

class LoginController extends Controller
{

    use AuthenticatesUsers;
  
    
    /**
     * Redirect the user to the Discord authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('discord')->redirect();
    }

    /**
     * Obtain the user information from Discord.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $discordUser = Socialite::driver('discord')->user();


        $user = User::firstOrCreate([
            'email' => $discordUser->email,
            'discord_id' => $discordUser->id,
            'discord_nick' => $discordUser->nickname,
            'discord_avatar' => $discordUser->avatar,
        ]);

        return redirect()->route('user', ['id' => $user->id]);

    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
