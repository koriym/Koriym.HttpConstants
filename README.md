# Koriym.HttpConstants

Provides frequently-used HTTP protocol constants for PHP applications.
This library includes commonly-used status codes, request methods, headers, media types, and cache control directives that are typically referenced in PHP application code.

## Example

```php

use Koriym\HttpConstants\HttpStatusCode;
use Koriym\HttpConstants\RequestHeader;
use Koriym\HttpConstants\ResponseHeader;
use Koriym\HttpConstants\MediaType;
use Koriym\HttpConstants\Method;

http_response_code(StatusCode::BAD_REQUEST);
header(ResponseHeader::CONTENT_TYPE . ': ' . MediaType::APPLICATION_JSON_API);
// Content-Type: application/vnd.api+json
header(ResponseHeader::CACHE_CONTROL . ': max-age=3600');
// Cache-Control: max-age=3600
```

### Install

    $ composer require koriym/http-constants

## Scope and Philosophy

This library focuses on **HTTP constants frequently used in PHP application code**, rather than providing comprehensive coverage of all HTTP specifications.

For example:
- CORS headers are included because they are commonly set in API endpoints
- Rate limiting status codes (429) are included for API development
- Security headers typically configured at the web server level are not included
- Basic image media types (image/png, etc.) are not included as they are rarely referenced in application code

## HTTP Constants Coverage

The following tables show commonly-used HTTP constants and whether they are included in this library (✓) or not (✗).

### HTTP Status Codes

| Code | Name | Included | Reason if excluded |
|------|------|----------|-------------------|
| 100 | Continue | ✓ | |
| 101 | Switching Protocols | ✓ | |
| 102 | Processing | ✓ | |
| 103 | Early Hints | ✗ | Rarely used in PHP code |
| 200 | OK | ✓ | |
| 201 | Created | ✓ | |
| 202 | Accepted | ✓ | |
| 203 | Non-Authoritative Information | ✓ | |
| 204 | No Content | ✓ | |
| 205 | Reset Content | ✓ | |
| 206 | Partial Content | ✓ | |
| 207 | Multi-Status | ✗ | WebDAV-specific |
| 208 | Already Reported | ✗ | WebDAV-specific |
| 226 | IM Used | ✗ | Rarely used |
| 300 | Multiple Choices | ✓ | |
| 301 | Moved Permanently | ✓ | |
| 302 | Found | ✓ | |
| 303 | See Other | ✓ | |
| 304 | Not Modified | ✓ | |
| 305 | Use Proxy | ✓ | |
| 307 | Temporary Redirect | ✓ | |
| 308 | Permanent Redirect | ✓ | |
| 400 | Bad Request | ✓ | |
| 401 | Unauthorized | ✓ | |
| 402 | Payment Required | ✓ | |
| 403 | Forbidden | ✓ | |
| 404 | Not Found | ✓ | |
| 405 | Method Not Allowed | ✓ | |
| 406 | Not Acceptable | ✓ | |
| 407 | Proxy Authentication Required | ✓ | |
| 408 | Request Timeout | ✓ | |
| 409 | Conflict | ✓ | |
| 410 | Gone | ✓ | |
| 411 | Length Required | ✓ | |
| 412 | Precondition Failed | ✓ | |
| 413 | Request Entity Too Large | ✓ | |
| 414 | Request-URI Too Long | ✓ | |
| 415 | Unsupported Media Type | ✓ | |
| 416 | Requested Range Not Satisfiable | ✓ | |
| 417 | Expectation Failed | ✓ | |
| 418 | I'm a teapot | ✓ | |
| 421 | Misdirected Request | ✗ | HTTP/2 specific, rarely used |
| 422 | Unprocessable Entity | ✗ | In statusText only |
| 423 | Locked | ✗ | WebDAV-specific |
| 424 | Failed Dependency | ✗ | WebDAV-specific |
| 425 | Too Early | ✗ | Rarely used |
| 426 | Upgrade Required | ✗ | Rarely used in PHP code |
| 428 | Precondition Required | ✓ | |
| 429 | Too Many Requests | ✓ | |
| 431 | Request Header Fields Too Large | ✓ | |
| 451 | Unavailable For Legal Reasons | ✗ | Rarely used in PHP code |
| 500 | Internal Server Error | ✓ | |
| 501 | Not Implemented | ✓ | |
| 502 | Bad Gateway | ✓ | |
| 503 | Service Unavailable | ✓ | |
| 504 | Gateway Timeout | ✓ | |
| 505 | HTTP Version Not Supported | ✓ | |
| 506 | Variant Also Negotiates | ✗ | Rarely used |
| 507 | Insufficient Storage | ✗ | WebDAV-specific |
| 508 | Loop Detected | ✗ | WebDAV-specific |
| 510 | Not Extended | ✗ | Rarely used |
| 511 | Network Authentication Required | ✗ | Captive portal specific |

**IANA Registry**: [HTTP Status Code Registry](https://www.iana.org/assignments/http-status-codes/http-status-codes.xhtml)

### HTTP Methods

| Method | Included | Reason if excluded |
|--------|----------|-------------------|
| GET | ✓ | |
| POST | ✓ | |
| PUT | ✓ | |
| DELETE | ✓ | |
| HEAD | ✓ | |
| OPTIONS | ✓ | |
| PATCH | ✓ | |
| CONNECT | ✓ | |
| TRACE | ✓ | |
| LINK | ✓ | |
| UNLINK | ✓ | |
| PROPFIND | ✗ | WebDAV-specific |
| PROPPATCH | ✗ | WebDAV-specific |
| MKCOL | ✗ | WebDAV-specific |
| COPY | ✗ | WebDAV-specific |
| MOVE | ✗ | WebDAV-specific |
| LOCK | ✗ | WebDAV-specific |
| UNLOCK | ✗ | WebDAV-specific |

**IANA Registry**: [HTTP Method Registry](https://www.iana.org/assignments/http-methods/http-methods.xhtml)

### HTTP Request Headers

| Header | Included | Reason if excluded |
|--------|----------|-------------------|
| Accept | ✓ | |
| Accept-Charset | ✓ | |
| Accept-Datetime | ✓ | |
| Accept-Encoding | ✓ | |
| Accept-Language | ✓ | |
| Access-Control-Request-Headers | ✓ | |
| Access-Control-Request-Method | ✓ | |
| Authorization | ✓ | |
| Cache-Control | ✓ | |
| Connection | ✓ | |
| Content-Encoding | ✓ | |
| Content-Length | ✓ | |
| Content-MD5 | ✓ | |
| Content-Range | ✓ | |
| Content-Type | ✓ | |
| Cookie | ✓ | |
| Date | ✓ | |
| DNT | ✓ | |
| Expect | ✓ | |
| Forwarded | ✗ | Less common than X-Forwarded-* |
| From | ✓ | |
| Front-End-Https | ✓ | |
| Host | ✓ | |
| If-Match | ✓ | |
| If-Modified-Since | ✓ | |
| If-None-Match | ✓ | |
| If-Range | ✓ | |
| If-Unmodified-Since | ✓ | |
| Max-Forwards | ✓ | |
| Origin | ✓ | |
| Pragma | ✓ | |
| Proxy-Authorization | ✓ | |
| Proxy-Connection | ✓ | |
| Range | ✓ | |
| Referer | ✓ | |
| Sec-Fetch-Dest | ✗ | Browser-set, not in PHP code |
| Sec-Fetch-Mode | ✗ | Browser-set, not in PHP code |
| Sec-Fetch-Site | ✗ | Browser-set, not in PHP code |
| TE | ✓ | |
| Upgrade | ✓ | |
| Upgrade-Insecure-Requests | ✗ | Browser-set, not in PHP code |
| User-Agent | ✓ | |
| Via | ✓ | |
| Warning | ✓ | |
| X-Csrf-Token | ✓ | |
| X-Forwarded-For | ✓ | |
| X-Forwarded-Proto | ✓ | |
| X-Http-Method-Override | ✓ | |
| X-Requested-With | ✓ | |
| X-Wap-Profile | ✓ | |

**IANA Registry**: [Message Headers Registry](https://www.iana.org/assignments/message-headers/message-headers.xhtml)

### HTTP Response Headers

| Header | Included | Reason if excluded |
|--------|----------|-------------------|
| Accept-Patch | ✓ | |
| Accept-Ranges | ✓ | |
| Access-Control-Allow-Credentials | ✓ | |
| Access-Control-Allow-Headers | ✓ | |
| Access-Control-Allow-Methods | ✓ | |
| Access-Control-Allow-Origin | ✓ | |
| Access-Control-Expose-Headers | ✓ | |
| Access-Control-Max-Age | ✓ | |
| Age | ✓ | |
| Allow | ✓ | |
| Cache-Control | ✓ | |
| Connection | ✓ | |
| Content-Disposition | ✓ | |
| Content-Encoding | ✓ | |
| Content-Language | ✓ | |
| Content-Length | ✓ | |
| Content-Location | ✓ | |
| Content-MD5 | ✓ | |
| Content-Range | ✓ | |
| Content-Security-Policy | ✓ | |
| Content-Type | ✓ | |
| Cross-Origin-Embedder-Policy | ✗ | Usually set in web server config |
| Cross-Origin-Opener-Policy | ✗ | Usually set in web server config |
| Cross-Origin-Resource-Policy | ✗ | Usually set in web server config |
| Date | ✓ | |
| ETag | ✓ | |
| Expires | ✓ | |
| Last-Modified | ✓ | |
| Location | ✓ | |
| P3P | ✓ | |
| Permissions-Policy | ✗ | Usually set in web server config |
| Proxy-Authenticate | ✓ | |
| Public-Key-Pins | ✓ | |
| Referrer-Policy | ✗ | Usually set in web server config |
| Refresh | ✓ | |
| Retry-After | ✓ | |
| Server | ✓ | |
| Set-Cookie | ✓ | |
| Status | ✓ | |
| Strict-Transport-Security | ✓ | |
| Trailer | ✓ | |
| Transfer-Encoding | ✓ | |
| Upgrade | ✓ | |
| Vary | ✓ | |
| Warning | ✓ | |
| WWW-Authenticate | ✓ | |
| X-Content-Duration | ✓ | |
| X-Content-Type-Options | ✓ | |
| X-Frame-Options | ✗ | Usually set in web server config |
| X-Powered-By | ✓ | |
| X-UA-Compatible | ✓ | |
| X-XSS-Protection | ✓ | |

**IANA Registry**: [Message Headers Registry](https://www.iana.org/assignments/message-headers/message-headers.xhtml)

### Media Types

| Media Type | Included | Reason if excluded |
|------------|----------|-------------------|
| */* | ✓ | |
| application/atom+xml | ✓ | |
| application/graphql+json | ✗ | Could be added if requested |
| application/gzip | ✗ | Rarely referenced in PHP code |
| application/hal+json | ✓ | |
| application/json | ✓ | |
| application/ld+json | ✓ | |
| application/octet-stream | ✓ | |
| application/pdf | ✗ | Rarely referenced in PHP code |
| application/problem+json | ✗ | Could be added if requested |
| application/rdf+xml | ✓ | |
| application/svg+xml | ✓ | |
| application/vnd.api+json | ✓ | |
| application/vnd.collection+json | ✓ | |
| application/vnd.siren+json | ✓ | |
| application/vnd.uber+json | ✓ | |
| application/x-www-form-urlencoded | ✓ | |
| application/xhtml+xml | ✓ | |
| application/xml | ✓ | |
| application/zip | ✗ | Rarely referenced in PHP code |
| image/gif | ✗ | Rarely referenced in PHP code |
| image/jpeg | ✗ | Rarely referenced in PHP code |
| image/png | ✗ | Rarely referenced in PHP code |
| image/svg+xml | ✗ | Rarely referenced in PHP code |
| image/webp | ✗ | Rarely referenced in PHP code |
| multipart/form-data | ✓ | |
| text/css | ✗ | Rarely referenced in PHP code |
| text/csv | ✗ | Rarely referenced in PHP code |
| text/html | ✓ | |
| text/javascript | ✗ | Rarely referenced in PHP code |
| text/plain | ✓ | |
| text/xml | ✓ | |

**IANA Registry**: [Media Types Registry](https://www.iana.org/assignments/media-types/media-types.xhtml)

### Cache-Control Directives

| Directive | Included | Reason if excluded |
|-----------|----------|-------------------|
| public | ✓ | |
| private | ✓ | |
| no-cache | ✓ | |
| no-store | ✓ | |
| max-age | ✓ | |
| s-maxage | ✓ | |
| must-revalidate | ✓ | |
| proxy-revalidate | ✓ | |
| immutable | ✓ | |
| stale-while-revalidate | ✓ | |
| stale-if-error | ✓ | |
| no-transform | ✗ | Less commonly used |
| only-if-cached | ✗ | Client directive, less common |
| max-stale | ✗ | Client directive, less common |
| min-fresh | ✗ | Client directive, less common |

**RFC 9111**: [HTTP Caching](https://www.rfc-editor.org/rfc/rfc9111.html)

## Related Projects

See also [PSR Http Message Util](https://github.com/php-fig/http-message-util).
