<?php

namespace App\Http\Requests\Auth;

use App\DTO\Auth\RegistrationDto;
use App\Http\Requests\Traits\HasDto;
use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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
            'name' => 'required|string|max:20',
            'email' => 'required|email|unique:users',
            'phone' => 'string|unique:users|max:13',
            'password' => 'required|string|min:5|max:20',
        ];
    }

    protected function getDto(): string
    {
        return RegistrationDto::class;
    }
}
