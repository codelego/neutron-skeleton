<?php

$time = microtime(1);

include __DIR__ . '/config/bootstrap.php';

service('app')->dispatch();

echo PHP_EOL, (microtime(1) - $time) * 1000, ' (ms)';