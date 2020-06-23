<?php

namespace App\Http\Controllers\V1\Auth;

use App\Services\V1\Auth\SignupService;
use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Auth\StoreRequest;
use Illuminate\Http\Request;

class SignUpController extends Controller
{
    private $signupService;

    public function  __construct(SignupService $signupService)
    {
        $this->signupService = $signupService;
    }

    public function create()
    {
        return view('auth.user_signup');
    }

    public function store(StoreRequest $request)
    {
        $data = request()->all();
        $this->signupService->store($data);
        return redirect()->route('episode.index');
    }
}
