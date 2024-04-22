<?php

namespace App\Services\User;

use App\DTO\Auth\LoginDto;
use App\DTO\Auth\RegistrationDto;
use App\DTO\Auth\ResetPasswordDto;
use App\Enums\NotifyType;
use App\Exceptions\Auth\EmailNotFoundException;
use App\Exceptions\Auth\IncorrectPasswordException;
use App\Exceptions\User\UserAlreadyExistsException;
use App\Exceptions\User\UserNotFoundException;
use App\Models\PasswordCode;
use App\Models\User;
use App\Notifications\SendPasswordResetCodeNotification;
use App\Repositories\User\UserRepositoryEloquent;
use Exception;
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

    /** @throws Exception */
    public function getPasswordResetCode(ResetPasswordDto $data): void
    {
        $user = User::findByEmailOrPhone($data->phoneOrEmail);

        if (! $user) {
            throw new UserNotFoundException('Пользователь не найден');
        }

        $code = PasswordCode::query()->create([
            'user_id' => $user->id,
            'code' => $this->getCode(),
        ]);

        $notifyType = $data->phone ? NotifyType::PHONE : NotifyType::EMAIL;

        $user->notify(new SendPasswordResetCodeNotification($code->code, $notifyType));

    }

    /** @throws Exception */
    private function getCode(): string
    {
        while (true) {
            $code = random_int(1000, 9999);
            $oldCode = PasswordCode::getCode($code);

            if (! $oldCode) {
                break;
            }
        }

        return (string) $code;
    }
}
