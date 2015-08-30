<?php

/**
 * This file is part of the Koriym.HttpConstants.
 *
 * @license http://opensource.org/licenses/MIT MIT
 */
namespace Koriym\HttpConstants;

/**
 * HTTP response header field names.
 *
 * @see https://www.ietf.org/rfc/rfc2109.txt
 * @see https://www.ietf.org/rfc/rfc2183.txt
 * @see https://www.ietf.org/rfc/rfc2616.txt
 * @see https://www.ietf.org/rfc/rfc2965.txt
 * @see https://www.ietf.org/rfc/rfc5998.txt
 */
final class ResponseHeaders
{
    // Standard (RFC) Response Fields
    const ACCESS_CONTROL_ALLOW_ORIGIN = 'Access-Control-Allow-Origin';
    const ACCEPT_PATCH = 'Accept-Patch';
    const ACCEPT_RANGES = 'Accept-Ranges';
    const AGE = 'Age';
    const ALLOW = 'Allow';
    const CACHE_CONTROL = 'Cache-Control';
    const CONNECTION = 'Connection';
    const CONTENT_DISPOSITION = 'Content-Disposition';
    const CONTENT_ENCODING = 'Content-Encoding';
    const CONTENT_LANGUAGE = 'Content-Language';
    const CONTENT_LENGTH = 'Content-Length';
    const CONTENT_LOCATION = 'Content-Location';
    const CONTENT_MD5 = 'Content-MD5';
    const CONTENT_TYPE = 'Content-Type';
    const DATE = 'Date';
    const ETAG = 'ETag';
    const EXPIRES = 'Expires';
    const LAST_MODIFIED = 'Last-Modified';
    const P3P = 'P3P';
    const PROXY_AUTHENTICATE = 'Proxy-Authenticate';
    const PUBLIC_KEY_PINS = 'Public-Key-Pins';
    const REFRESH = 'Refresh';
    const RETRY_AFTER = 'Retry-After';
    const SERVER = 'Server';
    const SET_COOKIE = 'Set-Cookie';
    const STATUS = 'Status';
    const STRICT_TRANSPORT_SECURITY = 'Strict-Transport-Security';
    const TRAILER = 'Trailer';
    const TRANSFER_ENCODING = 'Transfer-Encoding';
    const UPGRADE = 'Upgrade';
    const VARY = 'Vary';
    const WARNING = 'Warning';
    const WWW_AUTHENTICATE = 'WWW-Authenticate';
    // Common Non-Standard Request Fields
    const CONTENT_SECURITY_POLICY = 'Content-Security-Policy';
    const X_XSS_PROTECTION = 'X-XSS-Protection';
    const X_CONTENT_TYPE_OPTIONS = 'X-Content-Type-Options';
    const X_POWERED_BY = 'X-Powered-By';
    const X_UA_COMPATIBLE = 'X-UA-Compatible';
    const X_CONTENT_DURATION = 'X-Content-Duration';
}
