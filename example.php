<?php

namespace FC\Skeleton;

require __DIR__ . "/vendor/autoload.php";

const CONFIG_FILE = __DIR__ . "/config.php";
const CONFIG_LOCAL = __DIR__ . "/config.local.php";

try {
    // retrieve configuration data
    if (is_readable(CONFIG_LOCAL)) {
        $config = new \Noodlehaus\Config([CONFIG_FILE, CONFIG_LOCAL]);
    } else {
        $config = new \Noodlehaus\Config(CONFIG_FILE);
    }
    
    // init PHP error configuration
    ini_set("display_errors", $config->get('display-errors'));
    ini_set("error_reporting", $config->get('error-level'));

    // init logger
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

    $logger->notice("Starting process --->");

    // create a new container
    $di = new \FC\DependencyInjector\Di();

    // add to container
    $di->set('config', $config);
    $di->set('logger', $logger);

    //
    // do something here ....
    //

    $logger->notice("<--- End of process (SUCCESS)");

} catch (\Exception $e) {
    if (isset($logger)) {
        $logger->error($e->getMessage());
        $logger->error("<--- End of process (ERROR)");
    }
    echo $e->getMessage() . "\n";
}

echo "\n\nDone.";

