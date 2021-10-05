<?php

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
final class ResponseHeader
{
    // Standard (RFC) Response Fields
    public const ACCESS_CONTROL_ALLOW_ORIGIN = 'Access-Control-Allow-Origin';
    public const ACCEPT_PATCH = 'Accept-Patch';
    public const ACCEPT_RANGES = 'Accept-Ranges';
    public const AGE = 'Age';
    public const ALLOW = 'Allow';
    public const CACHE_CONTROL = 'Cache-Control';
    public const CONNECTION = 'Connection';
    public const CONTENT_DISPOSITION = 'Content-Disposition';
    public const CONTENT_ENCODING = 'Content-Encoding';
    public const CONTENT_LANGUAGE = 'Content-Language';
    public const CONTENT_LENGTH = 'Content-Length';
    public const CONTENT_LOCATION = 'Content-Location';
    public const CONTENT_MD5 = 'Content-MD5';
    public const CONTENT_TYPE = 'Content-Type';
    public const DATE = 'Date';
    public const ETAG = 'ETag';
    public const EXPIRES = 'Expires';
    public const LAST_MODIFIED = 'Last-Modified';
    public const LOCATION = 'Location';
    public const P3P = 'P3P';
    public const PROXY_AUTHENTICATE = 'Proxy-Authenticate';
    public const PUBLIC_KEY_PINS = 'Public-Key-Pins';
    public const REFRESH = 'Refresh';
    public const RETRY_AFTER = 'Retry-After';
    public const SERVER = 'Server';
    public const SET_COOKIE = 'Set-Cookie';
    public const STATUS = 'Status';
    public const STRICT_TRANSPORT_SECURITY = 'Strict-Transport-Security';
    public const TRAILER = 'Trailer';
    public const TRANSFER_ENCODING = 'Transfer-Encoding';
    public const UPGRADE = 'Upgrade';
    public const VARY = 'Vary';
    public const WARNING = 'Warning';
    public const WWW_AUTHENTICATE = 'WWW-Authenticate';
    // Common Non-Standard Request Fields
    public const CONTENT_SECURITY_POLICY = 'Content-Security-Policy';
    public const X_XSS_PROTECTION = 'X-XSS-Protection';
    public const X_CONTENT_TYPE_OPTIONS = 'X-Content-Type-Options';
    public const X_POWERED_BY = 'X-Powered-By';
    public const X_UA_COMPATIBLE = 'X-UA-Compatible';
    public const X_CONTENT_DURATION = 'X-Content-Duration';
}
