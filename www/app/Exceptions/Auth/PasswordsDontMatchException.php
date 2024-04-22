<?php

namespace App\Exceptions\Auth;

use App\Exceptions\AppHttpException as AppException;

class PasswordsDontMatchException extends AppException
{
    /** @var int */
    protected $code = 422;

    /** @var string */
    protected $message = 'Введенные пароли не совпадают.';
}
