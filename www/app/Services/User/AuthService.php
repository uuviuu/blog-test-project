<?php

namespace App\Services\User;

use App\DTO\Auth\LoginDto;
use App\DTO\Auth\RegistrationDto;
use App\Exceptions\Auth\EmailNotFoundException;
use App\Exceptions\Auth\IncorrectPasswordException;
use App\Exceptions\Auth\UserAlreadyExistsException;
use App\Models\User;
use App\Repositories\User\UserRepositoryEloquent;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthService
{
    public function __construct(
        private readonly UserRepositoryEloquent $repository
    ) {

    }

    public function login(LoginDto $data): User
    {
        $user = $this->repository->findWhere([
            'email' => $data->email,
        ])->first();

        if (! $user) {
            throw new EmailNotFoundException();
        }

        if (! Hash::check($data->password, $user->password)) {
            throw new IncorrectPasswordException();
        }

        Auth::login($user);

        return $user;
    }

    public function registration(RegistrationDto $data): User
    {
        $user = $this->repository->findWhere([
            'email' => $data->email,
        ])->count();

        if ($user) {
            throw new UserAlreadyExistsException();
        }

        return $this->repository->firstOrCreate($data->toArray());
    }
}
