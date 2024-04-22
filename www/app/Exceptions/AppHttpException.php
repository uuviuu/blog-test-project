<?php

namespace App\Exceptions;

use Symfony\Component\HttpKernel\Exception\HttpException;
use Throwable;

/**
 * Class AppHttpException
 */
class AppHttpException extends HttpException
{
    /** @var string|null */
    protected $message = null;

    /**
     * @param  string[]  $headers
     */
    public function __construct(string $message = '', int $statusCode = 422, ?Throwable $previous = null, array $headers = [], ?int $code = 0)
    {
        parent::__construct($statusCode, ! empty($this->message) ? __($this->message) : $message, $previous, $headers, $code);
    }
}
