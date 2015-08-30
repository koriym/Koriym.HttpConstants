<?php

/**
 * This file is part of the Koriym.HttpConstants.
 *
 * @license http://opensource.org/licenses/MIT MIT
 */
namespace Koriym\HttpConstants;

/**
 * Media Type
 */
final class MediaType
{
    // generic
    const MULTIPART_FORM_DATA         = 'multipart/form-data';
    const TEXT_PLAIN                  = 'text/plain';
    const TEXT_XML                    = 'text/xml';
    const TEXT_HTML                   = 'text/html';
    const WILDCARD                    = "*/*";

    // application
    const APPLICATION_ATOM_XML        = "application/atom+xml";
    const APPLICATION_FORM_URLENCODED = 'application/x-www-form-urlencoded';
    const APPLICATION_JSON            = 'application/json';
    const APPLICATION_XML             = 'application/xml';
    const APPLICATION_SVG_XML         = 'application/svg+xml';
    const APPLICATION_XHTML_XML       = "application/xhtml+xml";
    const APPLICATION_RDF_XML         = "application/rdf+xml";
    const APPLICATION_OCTET_STREAM    = 'application/octet-stream';

    // JSON hyper media
    const APPLICATION_HAL             = 'application/hal+json';
    const APPLICATION_JSON_API        = 'application/vnd.api+json';
    const APPLICATION_JSON_LD         = 'application/ld+json';
    const APPLICATION_COLLECTION_JSON = 'application/vnd.collection+json';
    const APPLICATION_SIREN           = 'application/vnd.siren+json';
    const APPLICATION_UBER            = 'application/vnd.uber+json';
}
