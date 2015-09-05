# Koriym.HttpConstants

Contains the values of status codes, request method, and headers for the Hypertext Transfer Protocol (HTTP). 
Constants only.

## Example

```php

use Koriym\HttpConstants\HttpStatusCode;

http_response_code(StatusCode::BAD_REQUEST);
header(ResponseHeaders::CACHE_CONTROL . ': max-age=3600');
```

### Install

    $ composer require koriym/http-constants


