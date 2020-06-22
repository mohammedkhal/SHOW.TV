<?php

namespace App\Http\Controllers\V1\Auth;

use App\Http\Controllers\Controller;
use App\Services\V1\Auth\AuthService;
use Illuminate\Http\Request;

class SignInController extends Controller
{
    private $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function create()
    {
        return view('auth.user_signin');
    }

    public function auth(Request $request)
    {
        $data = $request->only(
            'email',
            'password',
        );

        if ($this->authService->signIn($data)) {
            return redirect()->route('series.index');
        } else {
            return redirect()->route('auth.sign-in')->with('message', 'username or password are not correct');
        }
    }
}
