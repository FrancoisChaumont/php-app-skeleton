<?php

namespace FC\Skeleton\Exceptions;

trait ExceptionTrait
{
    public static function buildMessage(string $message = '', int $code = null)
    {
        $codeTxt = '';

        if ($code !== null) {
            $codeTxt = "[$code] ";
        }

        return $codeTxt . $message . "\n";
    }
}
