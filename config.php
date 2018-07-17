<?php

return [
    'exec-profile' => 'prod',
    'display-errors' => false,
    'error-level' => E_ALL,

    /** log level
     * DEBUG        (100): Detailed debug information.
     * INFO         (200): Interesting events. Examples: User logs in, SQL logs.
     * NOTICE       (250): Normal but significant events.
     * WARNING      (300): Exceptional occurrences that are not errors. Examples: Use of deprecated APIs, poor use of an API, undesirable things that are not necessarily wrong.
     * ERROR        (400): Runtime errors that do not require immediate action but should typically be logged and monitored.
     * CRITICAL     (500): Critical conditions. Example: Application component unavailable, unexpected exception.
     * ALERT        (550): Action must be taken immediately. Example: Entire website down, database unavailable, etc. This should trigger the SMS alerts and wake you up.
     * EMERGENCY    (600): Emergency: system is unusable.
     */
    'log-error-level' => \Monolog\Logger::ERROR,
    'log-channel-name' => 'app',
    'log-file-path' => __DIR__ . '/logs/app.log',
    'log-date-format' => "Y-m-d H:i:s",
    'log-output-format' => "[%datetime%] %channel%.%level_name%: %message%\n"
];

