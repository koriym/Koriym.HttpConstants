<?php

namespace Koriym\HttpConstants;

/**
 * HTTP request header field names.
 */
final class RequestHeader
{
    // Standard (RFC) Request Fields
    public const ACCEPT = 'Accept';
    public const ACCEPT_CHARSET = 'Accept-Charset';
    public const ACCEPT_ENCODING = 'Accept-Encoding';
    public const ACCEPT_LANGUAGE = 'Accept-Language';
    public const ACCEPT_DATETIME = 'Accept-Datetime';
    public const AUTHORIZATION = 'Authorization';
    public const CACHE_CONTROL = 'Cache-Control';
    public const CONNECTION = 'Connection';
    public const COOKIE = 'Cookie';
    public const CONTENT_LENGTH = 'Content-Length';
    public const CONTENT_MD5 = 'Content-MD5';
    public const DATE = 'Date';
    public const EXPECT = 'Expect';
    public const FROM = 'From';
    public const HOST = 'Host';
    public const IF_MATCH = 'If-Match';
    public const IF_MODIFIED_SINCE = 'If-Modified-Since';
    public const IF_NONE_MATCH = 'If-None-Matched';
    public const IF_RANGE = 'If-Range';
    public const IF_UNMODIFIED_SINCE = 'If-Unmodified-Since';
    public const MAX_FORWARDS = 'Max-Forwards';
    public const ORIGIN = 'Origin';
    public const PRAGMA = 'Pragma';
    public const PROXY_AUTHORIZATION = 'Proxy-Authorization';
    public const RANGE = 'Range';
    public const REFERER = 'Referer';
    public const TE = 'TE';
    public const UPGRADE = 'Upgrade';
    public const USER_AGENT = 'User-Agent';
    public const VIA = 'Via';
    public const WARNING = 'Warning';

    // Common Non-Standard Request Fields
    public const DNT = 'DNT';
    public const FRONT_END_HTTPS = 'Front-End-Https';
    public const PROXY_CONNECTION = 'Proxy-Connection';
    public const X_CSRF_TOKEN = 'X-Csrf-Token';
    public const X_FORWARDED_FOR = 'X-Forwarded-For';
    public const X_FORWARDED_HOSTS = 'X-Forwarded-For';
    public const X_FORWARDED_PROTO = 'X-Forwarded-Proto';
    public const X_HTTP_METHOD_OVERRIDE = 'X-Http-Method-Override';
    public const X_REQUESTED_WITH = 'X-Requested-With';
    public const X_WAP_PROFILE = 'X-Wap-Profile';
}
