<?php

namespace App\Services\V1\Auth;

use App\Repositories\V1\User\UserRepository;
use Illuminate\Support\Facades\Auth;

class SignupService
{
    private $userRepository;

    public function  __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function store($data)
    {
        $avatarName = time() . '.' . $data['avatar']->getClientOriginalExtension();
        $data['avatar']->storeAs('avatars', $avatarName);
        $data['avatar'] = $avatarName;
        $user = $this->userRepository->store($data);
        Auth::login($user);
    }
}
