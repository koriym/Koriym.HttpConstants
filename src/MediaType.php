<?php

namespace Koriym\HttpConstants;

final class MediaType
{
    // generic
    public const MULTIPART_FORM_DATA         = 'multipart/form-data';
    public const TEXT_PLAIN                  = 'text/plain';
    public const TEXT_XML                    = 'text/xml';
    public const TEXT_HTML                   = 'text/html';
    public const WILDCARD                    = "*/*";

    // application
    public const APPLICATION_ATOM_XML        = "application/atom+xml";
    public const APPLICATION_FORM_URLENCODED = 'application/x-www-form-urlencoded';
    public const APPLICATION_JSON            = 'application/json';
    public const APPLICATION_XML             = 'application/xml';
    public const APPLICATION_SVG_XML         = 'application/svg+xml';
    public const APPLICATION_XHTML_XML       = "application/xhtml+xml";
    public const APPLICATION_RDF_XML         = "application/rdf+xml";
    public const APPLICATION_OCTET_STREAM    = 'application/octet-stream';

    // JSON hyper media
    public const APPLICATION_HAL             = 'application/hal+json';
    public const APPLICATION_JSON_API        = 'application/vnd.api+json';
    public const APPLICATION_JSON_LD         = 'application/ld+json';
    public const APPLICATION_COLLECTION_JSON = 'application/vnd.collection+json';
    public const APPLICATION_SIREN           = 'application/vnd.siren+json';
    public const APPLICATION_UBER            = 'application/vnd.uber+json';
}
