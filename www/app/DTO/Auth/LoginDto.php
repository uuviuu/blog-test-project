<?php

namespace App\DTO\Auth;

use App\DTO\Abstracts\DTO;

class LoginDto extends DTO
{
    public function __construct(
        public string $email,
        public string $password,
        public bool $is_remember = false,
    ) {
    }
}
