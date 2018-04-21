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
        $user = Socialite::driver('google')->user();
        $user_ = $this->authenticateSocialUser($user, '2');

        if (!$user_) {
            $user = User::where('email', $user->email)->first();
            $message = $this->getFailMessage($user->provider_type);
            return redirect()->route('login')->with(['fail' => $message]);
        } else {
            $user_ = User::where('email', $user->email)->first();
            Auth::loginUsingId($user_->id);
            return redirect()->route('home');
        }
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
        $user_ = $this->authenticateSocialUser($user, '1');

        if (!$user_) {
            $user = User::where('email', $user->email)->first();
            $message = $this->getFailMessage($user->provider_type);
            return redirect()->route('login')->with(['fail' => $message]);
        } else {
            $user_ = User::where('email', $user->email)->first();
            Auth::loginUsingId($user_->id);
            return redirect()->route('home');
        }
    }

    private function generateRandomString($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvw*xyz_).#&ABCDE+=FGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    private function authenticateSocialUser($user, $type)
    {
        $user_ = User::where('email', $user->email)->first();
        if (!is_null($user_)) {
            if ($user_->provider_type == $type)
                return $user_;
        } elseif (!is_null($user_))
            return false;
        else {
            $new_user = new User();
            $new_user->email = $user->email;
            $new_user->name = $user->name;
            $new_user->provider_type = $type;
            $new_user->password = bcrypt(/*$pwd = $this->generateRandomString(8)*/
                123456);
            $new_user->img_src = $user->avatar_original;
            if ($new_user->save())
                return $new_user;
            else return false;
        }
    }

    private function getFailMessage($provider)
    {
        switch ($provider) {
            case '1';
                $message = "This Social Login email is authenticated with google. Please Try Login With Google";
                break;

            case '2';
                $message = "This Social Login email is authenticated with Facebook. Please Try Login With Facebook";
                break;

            default;
                $message = "Default";
                break;
        }
        return $message;
    }
}
