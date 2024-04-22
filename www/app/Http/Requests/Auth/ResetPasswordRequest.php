<?php

namespace App\Http\Requests\Auth;

use App\DTO\Auth\ResetPasswordDto;
use App\Http\Requests\Traits\HasDto;
use Illuminate\Foundation\Http\FormRequest;

class ResetPasswordRequest extends FormRequest
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
            'email' => 'required_if:phone,=,null|email',
            'phone' => 'required_if:phone,=,null|string|max:13',
        ];
    }

    protected function getDto(): string
    {
        return ResetPasswordDto::class;
    }
}
