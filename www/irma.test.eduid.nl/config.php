<?php
define('LANG', 'en');

define('ROOT_DIR', __DIR__ . '');
define('LOG_FILE', ROOT_DIR . 'logs/php.log');
define('IRMA_SERVER_API_TOKEN', 'BBZ?qr54IH/5');
define('IRMA_SERVER_URL', 'https://irma.test.eduid.nl:443');
define('IRMA_SERVER_URL_BACKEND', 'http://localhost:8080');

define('IRMA_ISSUER_ID', 'irma-demo.pbdf');

//require_once ROOT_DIR . '/vendor/autoload.php';
require_once ROOT_DIR . '/../simplesamlphp/lib/_autoload.php';
