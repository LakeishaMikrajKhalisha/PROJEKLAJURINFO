<?php

namespace App\Http\Controllers\Auth;

use Exception;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

class GoogleAuthController extends Controller
{
    //
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();

            $user = User::where('email', $googleUser->getEmail())->first();

            if (!$user) {
                $user = User::create([
                    'name' => $googleUser->getName(),
                    'email' => $googleUser->getEmail(),
                    'google_id' => $googleUser->getId(),
                    'provider' => 'google'
                ]);
            } else {
                $user->update([
                    'google_id' => $googleUser->getId(),
                    'provider' => 'google',
                ]);
            }

            Auth::login($user, true);

            return redirect()->intended('/');
        } catch (Exception $e) {
            return redirect(route('login'))->withErrors(['error' => 'Unable to login with Google.']);
        }
    }
}
