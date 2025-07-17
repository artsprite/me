<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use App\Models\User;

class LoginRegister extends Component
{
    public $isLogin = true;
    public $showPassword = false;
    public $showConfirmPassword = false;
    public $loading = false;
    public $formData = [
        'name' => '',
        'email' => '',
        'password' => '',
        'confirmPassword' => ''
    ];

    protected $rules = [
        'formData.email' => 'required|email',
        'formData.password' => 'required',
    ];

    public function toggleMode($mode)
    {
        $this->isLogin = $mode === 'login';
    }

    public function updated($property)
    {
        $this->validateOnly($property);
    }

    public function login()
    {
        $this->loading = true;
        $this->validate([
            'formData.email' => 'required|email',
            'formData.password' => 'required',
        ]);
        if (Auth::attempt(['email' => $this->formData['email'], 'password' => $this->formData['password']])) {
            session()->regenerate();
            return redirect()->intended('/');
        } else {
            $this->addError('formData.email', 'Invalid email or password');
        }
        $this->loading = false;
    }

    public function register()
    {
        $this->loading = true;
        $this->validate([
            'formData.name' => 'required|string|max:255',
            'formData.email' => 'required|email|unique:users,email',
            'formData.password' => 'required|min:6',
            'formData.confirmPassword' => 'required|same:formData.password',
        ]);
        $user = User::create([
            'name' => $this->formData['name'],
            'email' => $this->formData['email'],
            'password' => Hash::make($this->formData['password']),
            'role' => 'user',
            'status' => 'active',
        ]);
        Auth::login($user);
        session()->regenerate();
        return redirect('/');
    }

    public function render()
    {
        return view('livewire.auth.login-register');
    }
} 