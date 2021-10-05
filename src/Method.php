<?php

/**
 * This file is part of the Koriym.HttpConstants.
 *
 * @license http://opensource.org/licenses/MIT MIT
 */
namespace Koriym\HttpConstants;

/**
 * HTTP Request Methods
 *
 * @see http://www.ietf.org/rfc/rfc7231.txt
 */
final class Method
{
    public const POST = 'POST';
    public const GET = 'GET';
    public const OPTIONS = 'OPTIONS';
    public const HEAD = 'HEAD';
    public const PUT = 'PUT';
    public const DELETE = 'DELETE';
    public const TRACE = 'TRACE';
    public const CONNECT = 'CONNECT';
    public const PATCH = 'PATCH';
    public const LINK = 'LINK';
    public const UNLINK = 'UNLINK';
}
