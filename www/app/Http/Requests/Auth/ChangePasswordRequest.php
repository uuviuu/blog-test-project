<?php

namespace App\Http\Requests\Auth;

use App\DTO\Auth\ChangePasswordDto;
use App\Http\Requests\Traits\HasDto;
use Illuminate\Foundation\Http\FormRequest;

class ChangePasswordRequest extends FormRequest
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
            'new_password' => 'required|string|min:5|max:20',
            'new_password_confirmation' => 'required|string|min:5|max:20',
            'code' => 'required|int|min:4|max:4',
        ];
    }

    protected function getDto(): string
    {
        return ChangePasswordDto::class;
    }
}
