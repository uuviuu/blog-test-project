<?php

namespace App\DTO\Auth;

use App\DTO\Abstracts\DTO;
use App\Exceptions\Auth\RequiredParameterMissingException;

class ResetPasswordDto extends DTO
{
    public function __construct(
        public ?string $email = null,
        public ?string $phone = null,
        public ?string $phoneOrEmail = null,
    ) {
        $this->phoneOrEmail = $this->setPhoneOrEmail();
    }

    private function setPhoneOrEmail(): ?string
    {
        if (! $this->phone && ! $this->email) {
            throw new RequiredParameterMissingException();
        }

        if ($this->phone) {
            return $this->phone;
        }

        return $this->email;
    }
}
