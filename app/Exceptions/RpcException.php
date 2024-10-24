<?php

declare(strict_types=1);

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use RuntimeException;

/**
 * Class RpcException
 * @package GepurIt\RpcApiBundle\Exception
 */
class RpcException extends RuntimeException
{
}
