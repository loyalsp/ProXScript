<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{

    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleFacebookCallback()
    {
        $user = Socialite::driver('facebook')->user();

        // $user->token;
    }

    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();
        $user_ = User::where('email',$user->email)
            ->where('provider',1)->first();
        if(!is_null($user_))
        {
            Auth::loginUsingId($user_->id);
            return redirect()->route('home');
        }
        $new_user = new User();


        $new_user->email = $user->email;
        $new_user->name = $user->name;
        $new_user->provider = 1;
        $new_user->provider_id = $user->id;
        $new_user->password = bcrypt($pwd =$this->generateRandomString(8));
        $new_user->img_src = $user->avatar_original;
        if($new_user->save())
        {
            Auth::user($user,true);
            return response()->json(array('success' => $pwd));
        }
        return response()->json(array('fail' => "failed"));
    }
    private function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvw*xyz_).#&ABCDE+=FGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
