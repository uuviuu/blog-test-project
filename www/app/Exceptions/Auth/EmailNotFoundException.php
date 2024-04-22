<?php

namespace App\Exceptions\Auth;

use App\Exceptions\AppHttpException as AppException;

class EmailNotFoundException extends AppException
{
    /** @var int */
    protected $code = 422;

    /** @var string */
    protected $message = 'Аккаунт не найден. Повторите попытку или зарегистрируйтесь.';
}
