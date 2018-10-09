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
    /**
     * Indicates that the response may be cached by any cache.
     */
    const PUBLIC_ = 'public';

    /**
     * Indicates that the response is intended for a single user and must not be stored by a shared cache. A private cache may store the response.
     */
    const PRIVATE_ = 'private';

    /**
     * Specifies the maximum amount of time a resource will be considered fresh. Contrary to Expires, this directive is relative to the time of the request.
     */
    const MAX_AGE = 'max-age';

    /**
     * Takes precedence over max-age or the Expires header, but it only applies to shared caches (e.g., proxies) and is ignored by a private cache.
     */
    const S_MAX_AGE = 's-maxage';

    /**
     * Forces caches to submit the request to the origin server for validation before releasing a cached copy.
     */
    const NO_CACHE = 'no-cache';

    /**
     * The cache should not store anything about the client request or server response.
     */
    const NO_STORE = 'no-store';

    /**
     * The cache must verify the status of the stale resources before using it and expired ones should not be used.
     */
    const MUST_REVALIDATE = 'must-revalidate';

    /**
     * Same as must-revalidate, but it only applies to shared caches (e.g., proxies) and is ignored by a private cache.
     */
    const PROXY_REVALIDATE = 'proxy-revalidate';

    /**
     * Indicates that the response body will not change over time. (for web browser)
     *
     * @see http://bitsup.blogspot.com/2016/05/cache-control-immutable.html
     */
    const IMMUTABLE = 'immutable';
}
