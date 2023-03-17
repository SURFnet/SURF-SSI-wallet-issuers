<?php

require_once '../config.php';

define('PROVIDER', 'edubadges');
define('PROVIDER_LOGO', 'https://met.refeds.org/media/federation_logo/surfconext.png');
define('PROVIDER_NAME', 'eduBadges');

define('CREDENTIAL', 'irma-demo.surf.edubadge');
define('IRMA_NAME_ATTRIBUTE', 'fullname');
define('VALIDITY', '+3 months');

$MAP_IRMA_SAML_ATTRIBUTES = [
      'learner_id' => 'learner_id',
      'badge_issued_on' => 'badge_issued_on',
      'badge_logo_url' => 'badge_logo_url',
      'badge_title' => 'badge_title',
      'badge_issuer' => 'badge_issuer',
      'badge_issuer_logo_url' => 'badge_issuer_logo_url', 
];

#$SAML_LOGIN_OPTIONS = [
#    'saml:idp' => 'https://engine.test.surfconext.nl/authentication/idp/metadata',
#];

require '../index.php';
