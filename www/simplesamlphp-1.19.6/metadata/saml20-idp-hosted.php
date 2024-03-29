<?php
  /*
   * We use the '__DYNAMIC:1__' entity ID so that the entity ID
   * will be autogenerated.
   */
  $metadata['__DYNAMIC:1__'] = [
      /*
       * We use '__DEFAULT__' as the hostname so we won't have to
       * enter a hostname.
       */
      'host' => '__DEFAULT__',

      /* The private key and certificate used by this IdP. */
      'certificate' => 'edubadges.crt',
      'privatekey' => 'edubadges.pem',
      /*
       * The authentication source for this IdP. Must be one
       * from config/authsources.php.
       */
      'auth' => 'example-userpass',
  ];
