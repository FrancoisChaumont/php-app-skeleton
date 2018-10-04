<?php

namespace FC\Skeleton;

require __DIR__ . "/vendor/autoload.php";

const CONFIG_FILE = __DIR__ . "/config.php";
const CONFIG_DEBUG = __DIR__ . "/config.debug.php";

require __DIR__ . '/usage.php';

try {
    // NOTE: initializations
    // retrieve configuration data
    if (is_readable(CONFIG_DEBUG)) {
        $config = new \Noodlehaus\Config([CONFIG_FILE, CONFIG_DEBUG]);
    } else {
        $config = new \Noodlehaus\Config(CONFIG_FILE);
    }
    
    // init PHP error configuration
    ini_set("display_errors", $config->get('display-errors'));
    ini_set("error_reporting", $config->get('error-level'));

    // init memory allowance
    ini_set("memory_limit", $config->get('memory-limit'));

    // define the execution mode
    define('DEBUG', $config->get('exec-profile') != 'prod');

    // retrieve parameters [optional]
    $params = new \Noodlehaus\Config(PARAMETERS_FILE);

    // init logger [optional]
    $logger = \FC\Logger\Log::getLogger(
        $config->get('log-channel-name'), 
        $config->get('log-file-path'),
        $config->get('log-error-level'),
        $config->get('log-date-format'),
        $config->get('log-output-format')
    );

    if (!\FC\Logger\Log::isReady()) {
        throw new Exceptions\LoggerNotReadyException();
    }

    // init notification settings [optional]
    $notifications = array();
    $receiver = $config->get('pushover-email');
    $subject = $config->get('pushover-subject');

    // init parameters sent to the script [optional]
    $options = getopt(null, ['opt1::']);
    if (isset($options['opt1'])) {

    }

    $logger->notice("Starting process --->");
    // NOTE: process starts here below

    // create a new container [optional]
    $di = new \FC\DependencyInjector\Di();

    // add to container [optional]
    $di->set('config', $config);
    $di->set('logger', $logger);

    //
    // do something here ....
    //

    // NOTE: end of process
    $logger->notice("<--- End of process (SUCCESS)");

} catch (\Exception $e) {
    if (isset($logger)) {
        $logger->error($e->getMessage());
        $logger->error("<--- End of process (ERROR)");
    }
    echo $e->getMessage() . "\n";

    // send notification
    $notifications[] = $e->getMessage();
    $text = $tempFolder . "/$outputFileName" . "\n\n" . implode("\n", $notifications);
    PushOver::pushNotification($receiver, $subject, $text);
}

echo "\nDone.\n";

