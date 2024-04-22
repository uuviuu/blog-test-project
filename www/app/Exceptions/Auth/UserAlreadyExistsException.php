<?php

namespace App\Exceptions\Auth;

use App\Exceptions\AppHttpException as AppException;

class UserAlreadyExistsException extends AppException
{
    /** @var int */
    protected $code = 422;

    /** @var string */
    protected $message = 'Пользователь с указанным Email уже существует.';
}
