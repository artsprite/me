<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();

            $user = User::where('email', $googleUser->email)->first();

            if (!$user) {
                // Create new user
                $user = User::create([
                    'name' => $googleUser->name,
                    'email' => $googleUser->email,
                    'password' => Hash::make(uniqid()),
                    'google_id' => $googleUser->id,
                    'email_verified_at' => now(),
                ]);

                // Assign default role (user)
                $user->assignRole('user');
            } else {
                // Update existing user's Google ID
                $user->update([
                    'google_id' => $googleUser->id,
                ]);
            }

            Auth::login($user);

            return redirect()->intended($this->redirectTo);
        } catch (\Exception $e) {
            return redirect()->route('login')->withErrors(['email' => 'Google authentication failed. Please try again.']);
        }
    }

    protected function authenticated(Request $request, $user)
    {
        if ($user->isAdmin()) {
            return redirect()->route('admin.dashboard');
        } elseif ($user->isTherapist()) {
            return redirect()->route('therapist.dashboard');
        }

        return redirect()->intended($this->redirectTo);
    }
} 