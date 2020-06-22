<?php

namespace App\Services\V1\Auth;

use Illuminate\Support\Facades\Auth;

class AuthService
{
    public function signIn($data)
    {
        return Auth::attempt(['email' => $data['email'], 'password' => $data['password']]);
    }

    public function signOut()
    {
        return auth()->logout();
    }
}
