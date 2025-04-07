<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/bootstrap.php';

use MHWilds\Parameters\ListParameters;
use MHWilds\SDK;

/** @var SDK */
$sdk = getSDK();

// $skills = $sdk->skills()->all();
// $items  = $sdk->items()->all();
$array = $sdk->locations()->all();

echo "\nFinished!\n";
