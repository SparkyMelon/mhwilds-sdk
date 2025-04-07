<?php

declare(strict_types=1);

use MHWilds\SDK;

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

function getSDK(): SDK
{
    return new SDK($_ENV['API_URL']);
}
