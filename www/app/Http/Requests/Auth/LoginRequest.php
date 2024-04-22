<?php

namespace App\Http\Requests\Auth;

use App\DTO\Auth\LoginDto;
use App\Http\Requests\Traits\HasDto;
use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    use HasDto;

    public function authorize(): bool
    {
        return true;
    }

    /** @return string[] */
    public function rules(): array
    {
        return [
            'email' => 'required|email|exists:users,email',
            'password' => 'required|string',
            'is_remember' => 'bool',
        ];
    }

    protected function getDto(): string
    {
        return LoginDto::class;
    }
}
