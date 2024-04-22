<?php

namespace App\Http\Controllers\Api;

use App\DTO\Auth\LoginDto;
use App\DTO\Auth\RegistrationDto;
use App\DTO\Auth\ResetPasswordDto;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegistrationRequest;
use App\Http\Requests\Auth\ResetPasswordRequest;
use App\Http\Resources\User\UserResource;
use App\Services\User\AuthService;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

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

    public function login(LoginRequest $request): UserResource
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

    public function logout(): JsonResponse
    {
        Auth::guard('web')->logout();

        return response()->json(status: 204);
    }

    /** @throws Exception */
    public function getPasswordResetCode(ResetPasswordRequest $request): JsonResponse
    {
        /** @var ResetPasswordDto $data */
        $data = $request->dto($request->validated());

        $this->service->getPasswordResetCode($data);

        return response()->json(status: 204);
    }

    public function changePasswordShow()
    {

    }

    public function changePassword()
    {

    }
}
