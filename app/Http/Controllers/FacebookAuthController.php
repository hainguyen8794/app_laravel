<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use Socialite;

class FacebookAuthController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from facebook.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('facebook')->user();

        $authUser = $this->findOrCreateUser($user);

        // Chỗ này để check xem nó có chạy hay không


        Auth::login($authUser, true);

        return redirect()->route('home');
    }

    private function findOrCreateUser($facebookUser){
        $authUser = User::where('provider', $facebookUser->id)->first();

        if($authUser){
            return $authUser;
        }

        return User::create([
            'name' => $facebookUser->user["name"],
            'password' => $facebookUser->token,
            'email' => $facebookUser->email,
            'point'=>0,
            'role_id'=>4,
            'number_game'=>0,
            'provider_id' => $facebookUser->id,
            'provider' => $facebookUser->id,
        ]);
    }
}