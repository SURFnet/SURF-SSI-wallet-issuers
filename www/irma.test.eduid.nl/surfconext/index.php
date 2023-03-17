<?php

require_once '../config.php';

define('PROVIDER', 'surfconext');
define('PROVIDER_LOGO', 'https://met.refeds.org/media/federation_logo/surfconext.png');
define('PROVIDER_NAME', 'SURFconext');

define('CREDENTIAL', 'irma-demo.surf.surfconext');
define('IRMA_NAME_ATTRIBUTE', 'fullname');
define('VALIDITY', '+3 months');

$MAP_IRMA_SAML_ATTRIBUTES = [
    'institute'  => 'urn:mace:terena.org:attribute-def:schacHomeOrganization',
    'affiliation'       => 'urn:mace:dir:attribute-def:eduPersonAffiliation',
    'id'         => 'urn:mace:dir:attribute-def:uid',
    'fullid'     => 'urn:mace:dir:attribute-def:eduPersonPrincipalName',
    'fullname'   => 'urn:mace:dir:attribute-def:displayName',
    'firstname'  => 'urn:mace:dir:attribute-def:givenName',
    'familyname' => 'urn:mace:dir:attribute-def:sn',
    'email'      => 'urn:mace:dir:attribute-def:mail',
];

#$SAML_LOGIN_OPTIONS = [
#    'saml:idp' => 'https://engine.test.surfconext.nl/authentication/idp/metadata',
#];

require '../index.php';
