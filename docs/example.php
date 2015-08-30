<?php

use Koriym\HttpConstants\StatusCode;

require dirname(__DIR__).'/vendor/autoload.php';

echo sprintf(
    "%s %s\n",
    StatusCode::BAD_REQUEST,
    (new StatusCode)->statusText[StatusCode::BAD_REQUEST]
);

// 400 Bad Request
