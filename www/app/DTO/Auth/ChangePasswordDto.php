<?php

namespace App\DTO\Auth;

use App\DTO\Abstracts\DTO;

class ChangePasswordDto extends DTO
{
    public function __construct(
        public string $new_password,
        public string $new_password_confirmation,
        public int $code,
    ) {
    }
}
