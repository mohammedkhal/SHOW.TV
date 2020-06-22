<?php

namespace App\Repositories\V1\User;

use App\Models\V1\User;
use App\Repositories\Repository;

class UserRepository extends Repository
{
    /**
     * Create a new User instance.
     * @return object
     */
    public function getModel()
    {
        return new User;
    }

    /**
     * Create one new user
     * @return App\Models\V1\User
     */
    public function store($data)
    {
        $user = $this->getModel();

        $user->email = $data['email'];
        $user->first_name = $data['first_name'];
        $user->second_name = $data['second_name'];
        $user->family_name = $data['family_name'];
        $user->password = $data['password'];
        $user->avatar = $data['avatar'];

        $user->save();

        return $user;
    }

    /**
     * Obtains and show one user
     * @return App\Models\V1\User
     */
    public function show($data)
    {
        $user = $this->getModel();

        $user = $user->findOrFail($data['user_uuid'])->first();

        return $user;
    }
}
