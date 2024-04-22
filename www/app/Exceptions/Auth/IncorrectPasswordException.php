<?php

namespace App\Exceptions\Auth;

use App\Exceptions\AppHttpException as AppException;

class IncorrectPasswordException extends AppException
{
    /** @var int */
    protected $code = 422;

    /** @var string */
    protected $message = 'Неверный пароль';
}
