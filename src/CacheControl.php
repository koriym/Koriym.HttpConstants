<?php

/**
 * This file is part of the Koriym.HttpConstants.
 *
 * @license http://opensource.org/licenses/MIT MIT
 */
namespace Koriym\HttpConstants;

/**
 * Cache control response directive
 */
final class CacheControl
{
    /** Indicates that the response may be cached by any cache. */
    public const PUBLIC_ = 'public';

    /** Indicates that the response is intended for a single user and must not be stored by a shared cache. A private cache may store the response. */
    public const PRIVATE_ = 'private';

    /** Specifies the maximum amount of time a resource will be considered fresh. Contrary to Expires, this directive is relative to the time of the request. */
    public const MAX_AGE = 'max-age';

    /** Takes precedence over max-age or the Expires header, but it only applies to shared caches (e.g., proxies) and is ignored by a private cache. */
    public const S_MAX_AGE = 's-maxage';

    /** Forces caches to submit the request to the origin server for validation before releasing a cached copy. */
    public const NO_CACHE = 'no-cache';

    /** The cache should not store anything about the client request or server response. */
    public const NO_STORE = 'no-store';

    /** The cache must verify the status of the stale resources before using it and expired ones should not be used. */
    public const MUST_REVALIDATE = 'must-revalidate';

    /** Same as must-revalidate, but it only applies to shared caches (e.g., proxies) and is ignored by a private cache. */
    public const PROXY_REVALIDATE = 'proxy-revalidate';

    /**
     * Indicates that the response body will not change over time. (for web browser)
     *
     * @see http://bitsup.blogspot.com/2016/05/cache-control-immutable.html
     */
    public const IMMUTABLE = 'immutable';

    /**
     * When present in an HTTP response, the stale-while-revalidate Cache-Control extension indicates that caches MAY serve the response in which it appears after it becomes stale, up to the indicated number of seconds.
     *
     * @link https://datatracker.ietf.org/doc/html/rfc5861#section-3
     */
    public const STALE_WHILE_REVALIDATE = 'stale-while-revalidate';

    /**
     * The stale-if-error Cache-Control extension indicates that when an error is encountered, a cached stale response MAY be used to satisfythe request, regardless of other freshness information.
     *
     * @link  https://datatracker.ietf.org/doc/html/rfc5861#section-4
     */
    public const STALE_IF_ERROR = 'stale-if-error';
}
