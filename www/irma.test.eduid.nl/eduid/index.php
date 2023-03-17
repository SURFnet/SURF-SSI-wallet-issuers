<?php

require_once '../config.php';

define('PROVIDER', 'eduid');
define('PROVIDER_NAME', 'eduID');
define('PROVIDER_LOGO', 'https://met.refeds.org/media/federation_logo/surfconext.png');

define('CREDENTIAL', 'irma-demo.surf.eduid');
define('IRMA_NAME_ATTRIBUTE', 'displayname');
define('VALIDITY', '+3 months');

$MAP_IRMA_SAML_ATTRIBUTES = [
    'eppn'     => 'urn:mace:dir:attribute-def:eduPersonPrincipalName',
    'displayname'   => 'urn:mace:dir:attribute-def:displayName',
    'emailadres'      => 'urn:mace:dir:attribute-def:mail',
];

$SAML_LOGIN_OPTIONS = [
    'saml:idp' => 'https://login.test.eduid.nl',
];

define('LOGO', 'https://met.refeds.org/media/federation_logo/surfconext.png');


require '../index.php';
