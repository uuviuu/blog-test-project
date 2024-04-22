<?php

namespace App\DTO\Auth;

use App\DTO\Abstracts\DTO;
use Illuminate\Support\Facades\Hash;

class RegistrationDto extends DTO
{
    public function __construct(
        public string $name,
        public string $email,
        public ?string $phone,
        public string $password,
    ) {
        $this->password = Hash::make($this->password);
    }
}
