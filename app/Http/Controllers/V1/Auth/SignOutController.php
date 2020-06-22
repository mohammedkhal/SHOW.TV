<?php

namespace App\Http\Controllers\V1\Auth;

use App\Http\Controllers\Controller;
use App\Services\V1\Auth\AuthService;

class SignOutController extends Controller
{
    private $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function signOut()
    {
        $this->authService->signOut();

        return redirect()->route('auth.sign-in');
    }
}
