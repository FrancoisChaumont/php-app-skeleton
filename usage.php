<?php

define("USAGE", "Usage: php " . basename(__FILE__) . " [options]

Options:
  --help                  Display help message and exit
");

// set options for this run
$options = getopt(null, ['help::']);
if (isset($options['help'])) {
    print USAGE;
    exit;
}

