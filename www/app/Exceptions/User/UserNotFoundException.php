<?php

namespace App\Exceptions\User;

use App\Exceptions\AppHttpException as AppException;

class UserNotFoundException extends AppException
{
    /** @var int */
    protected $code = 404;

    /** @var string */
    protected $message = 'Пользователь не найден.';
}
