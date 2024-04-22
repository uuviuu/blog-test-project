<?php

namespace App\Exceptions\Auth;

use App\Exceptions\AppHttpException as AppException;

class PasswordCodeNotFoundException extends AppException
{
    /** @var int */
    protected $code = 404;

    /** @var string */
    protected $message = 'Код для смены пароля не найден или просрочен.';
}
