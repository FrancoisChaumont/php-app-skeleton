<?php

namespace LiverampEmailProcess;

class PushOver
{
    public static function pushNotification($to, $subject, $message)
    {
        @mail($to, $subject, $message);
    }
}

