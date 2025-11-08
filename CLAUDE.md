# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

This is a PHP library that provides **frequently-used HTTP protocol constants for PHP applications**. It is a **constants-only library** with no runtime logic, tests, or build processes.

### Design Philosophy

The library focuses on HTTP constants that are **commonly referenced in PHP application code**, rather than comprehensive HTTP specification coverage:

- ✅ **Included**: CORS headers (frequently set in API code), rate limiting status codes (429), JSON hypermedia types
- ❌ **Not included**: Security headers (typically configured at web server level), basic image types (rarely referenced in code)

The library provides:

- HTTP status codes with numeric constants and text descriptions (`StatusCode`)
- HTTP request methods (`Method`)
- Request and response header field names (`RequestHeader`, `ResponseHeader`)
- Media types including JSON hypermedia formats (`MediaType`)
- Cache-Control directive constants (`CacheControl`)

All classes are `final` classes containing `public const` declarations without type hints (PHP 7.1+ compatible).

## Architecture

The codebase follows a simple structure:

- **Namespace**: `Koriym\HttpConstants`
- **Source location**: `src/` directory
- **No dependencies**: Requires only PHP >= 7.1.0
- **PSR-4 autoloading**: Maps `Koriym\HttpConstants\` to `src/`

### Key Design Patterns

1. **Constants-only classes**: All classes are final with only public constants
2. **Naming convention for reserved keywords**: When a constant name conflicts with PHP reserved words, append underscore (e.g., `CONTINUE_`, `PUBLIC_`, `PRIVATE_`)
3. **Status text mapping**: `StatusCode` class includes a public `$statusText` array property mapping status codes to human-readable descriptions

## Development

This library has **no build, test, or lint commands** - it consists only of constant definitions. Changes typically involve:

- Adding HTTP constants that are **frequently used in PHP application code**
- Updating existing constants to match RFC specifications
- **Important**: Do not add constants just because they exist in IANA registries; only add constants that PHP developers commonly reference in their code

### Adding New Constants - Decision Criteria

Ask these questions before adding new constants:

1. **Is it commonly set in PHP code?** (e.g., CORS headers in API endpoints)
2. **Is it frequently used in modern web applications?** (e.g., rate limiting status 429)
3. **Would PHP developers write this as a string literal without this library?** (e.g., `header('Access-Control-Allow-Origin: *')`)

If the constant is typically configured at the web server/infrastructure level (nginx, Apache) rather than in PHP code, it should NOT be added.

### References

For comprehensive HTTP specifications, see README.md which links to IANA registries and RFCs.

## Usage Pattern

Consumers use these constants to avoid magic numbers and strings:

```php
use Koriym\HttpConstants\StatusCode;
use Koriym\HttpConstants\ResponseHeader;
use Koriym\HttpConstants\MediaType;

http_response_code(StatusCode::BAD_REQUEST);
header(ResponseHeader::CONTENT_TYPE . ': ' . MediaType::APPLICATION_JSON_API);
```

## Related Projects

See [PSR Http Message Util](https://github.com/php-fig/http-message-util) for related HTTP utilities.
