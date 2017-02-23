# Koriym.HttpConstants

Contains the values of status codes, request method, and headers for the Hypertext Transfer Protocol (HTTP). 
Constants only.

## Example

```php

use Koriym\HttpConstants\HttpStatusCode;
use Koriym\HttpConstants\RequestHeader;
use Koriym\HttpConstants\ResponseHeader;
use Koriym\HttpConstants\MediaType;
use Koriym\HttpConstants\Method;

http_response_code(StatusCode::BAD_REQUEST);
header(ResponseHeaders::CONTENT_TYPE . ': ' . MediaType::APPLICATION_JSON_API);
// Content-Type: application/vnd.api+json
header(ResponseHeaders::CACHE_CONTROL . ': max-age=3600');
// Cache-Control: max-age=3600
```

### Install

    $ composer require koriym/http-constants


