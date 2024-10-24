<?php

declare(strict_types=1);

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class InvalidAmqpMessageException extends RpcException
{
    public function __construct()
    {
        parent::__construct("RPC message should contain message_id and reply_to", 0, null);
    }
}
