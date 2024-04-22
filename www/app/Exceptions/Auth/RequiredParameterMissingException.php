<?php

namespace App\Exceptions\Auth;

use App\Exceptions\AppHttpException as AppException;

class RequiredParameterMissingException extends AppException
{
    /** @var int */
    protected $code = 422;

    /** @var string */
    protected $message = 'Отсутствует обязательный параметр email или phone';
}
