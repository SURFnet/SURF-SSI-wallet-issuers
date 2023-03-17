<?php
/**
 * SAML 2.0 remote SP metadata for SimpleSAMLphp.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-sp-remote
 */

/*
 * Example SimpleSAMLphp SAML 2.0 SP
 */
$metadata[''] = array(
	'AssertionConsumerService' => '',
	'authproc' => array(
   	    /* add the 'urn' prefix to all supported attributes (if available from authentication source) */
    	90 => array(
      		'class' => 'core:AttributeMap',
      		'name2urn'
            )
    )
);
