<?php

namespace App\Http\Controllers\Api;

use App\DTO\Auth\LoginDto;
use App\DTO\Auth\RegistrationDto;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegistrationRequest;
use App\Http\Resources\User\UserResource;
use App\Providers\RouteServiceProvider;
use App\Services\User\AuthService;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    public function __construct(
        private readonly AuthService $service
    ) {
    }

    public function getAuthUser(): UserResource
    {
        return new UserResource(Auth::user());
    }

    public function login(LoginRequest $request)
    {
        /** @var LoginDto $data */
        $data = $request->dto($request->validated());

        $user = $this->service->login($data);

        return UserResource::make($user);
    }

    public function registration(RegistrationRequest $request): UserResource
    {
        /** @var RegistrationDto $data */
        $data = $request->dto($request->validated());

        $user = $this->service->registration($data);

        return UserResource::make($user);
    }

    public function logout(): Response
    {
        Auth::logout();

        return response(status: 204);
    }
}
