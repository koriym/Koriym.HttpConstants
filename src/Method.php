<?php

/**
 * This file is part of the Koriym.HttpConstants.
 *
 * @license http://opensource.org/licenses/MIT MIT
 */
namespace Koriym\HttpConstants;

/**
 * HTTP Request Methods.
 *
 * @see http://www.ietf.org/rfc/rfc7231.txt
 */
final class Method
{
    const POST = 'POST';
    const GET = 'GET';
    const OPTIONS = 'OPTIONS';
    const HEAD = 'HEAD';
    const PUT = 'PUT';
    const DELETE = 'DELETE';
    const TRACE = 'TRACE';
    const CONNECT = 'CONNECT';
    const PATCH = 'PATCH';
    const LINK = 'LINK';
    const UNLINK = 'UNLINK';
}
