<?php

namespace FC\Skeleton\Exceptions;

class LoggerNotReadyException extends \Exception
{
    public function __construct(string $errorMessage = null, string $errorCode = null)
    {
        if (!$errorMessage) { $errorMessage = "Logger is not ready, logs cannot be written!"; }
        $message = ExceptionTrait::buildMessage($errorMessage, $errorCode);
        parent::__construct($message);
    }
}
