<?php
$config = [
    // This is a authentication source which handles SimpleSAMLphp admin authentication.
    'admin' => [
        'core:AdminPassword',
    ],
 
    // An authentication source which can authenticate against SURFconext
    'surfconext' => [
        'saml:SP',
        'privatekey'  => 'irma.test.eduid.nl.pem',
        'certificate' => 'irma.test.eduid.nl.crt',
#        'idp' => 'https://engine.test.surfconext.nl/authentication/idp/metadata',
 
        // The entries below are all OPTIONAL but RECOMMENDED to tell SURFconext
        // some details about your service.
        'name' => [
                'en' => '(TEST) SURFconext IRMA issuer',
                'nl' => '(TEST) SURFconext IRMA issuer',
        ],
  
        'description' => [
                'nl' => 'Deze TEST omgeving maakt het mogelijk SURFconext credentials uit te geven voor IRMA',
                'en' => 'This TEST service enables the issuance of SURFconext credentials towards IRMA',
        ],

    ],

    // An authentication source which can authenticate against edubages IdP
    'edubadges' => [
        'saml:SP',
        'privatekey'  => 'irma.test.eduid.nl.pem',
        'certificate' => 'irma.test.eduid.nl.crt',
#        'idp' => 'https://irma.test.eduid.nl/simplesaml/saml2/idp/metadata.php',
 
        // The entries below are all OPTIONAL but RECOMMENDED to tell SURFconext
        // some details about your service.
        'name' => [
                'en' => '(TEST) edubadge IRMA issuer',
                'nl' => '(TEST) edubadge IRMA issuer',
        ],
  
        'description' => [
                'nl' => 'Deze TEST omgeving maakt het mogelijk edubadge uit te geven voor IRMA',
                'en' => 'This TEST service enables the issuance of edubadge credentials towards IRMA',
        ],

    ],


    // An authentication source which can authenticate against eduID
    'eduid' => [
        'saml:SP',
        'privatekey'  => 'irma.test.eduid.nl.pem',
        'certificate' => 'irma.test.eduid.nl.crt',
#        'idp' => 'https://login.test2.eduid.nl',
 
        // The entries below are all OPTIONAL but RECOMMENDED to tell SURFconext
        // some details about your service.
        'name' => [
                'en' => '(TEST) eduID IRMA issuer',
                'nl' => '(TEST) eduID IRMA issuer',
        ],
  
        'description' => [
                'nl' => 'Deze TEST omgeving maakt het mogelijk eduID credentials uit te geven voor IRMA',
                'en' => 'This TEST service enables the issuance of eduID credentials towards IRMA',
        ],
 
    ],

    'edubadges' => [
    	'exampleauth:UserPass',
    	'student:student' => [
      		'learner_id' => '1d623b89683f9ce4e074de1676d12416@eduid.nl',
      		'badge_issued_on' => '2022-11-21T15:09:08.487Z',
      		'badge_logo_url' => 'https://api.edubadges.nl/media/uploads/badges/issuer_badgeclass_dcfcdfec-6ca0-41e0-a5cb-908345a0d6b9.png',
      		'badge_title' => 'Advanced Food Physics - Reology and fracture of soft solids',
      		'badge_issuer' => 'Wageningen University & Research - Professional Education',
      		'badge_issuer_logo_url' => 'https://wiki.surfnet.nl/download/thumbnails/35801321/logo_edubadges.png?version=1&modificationDate=1602609181770&api=v2'
     	],
    ],


    'irma' => [
       'authirma:IRMA',
       'irma_api_server' => 'https://irma-issuer.test.eduid.nl',
       'jwt_privatekeyfile' => 'irma.test.eduid.nl.pem',
       'jwt_apiserver_publickeyfile' => '/home/ubuntu/irmaserver/certs/irma.test.eduid.nl.crt',
       'issuer_id' => 'eduid-demo',
       'issuer_displayname' => 'my IRMA issuer',
       'requested_attributes' => [
        [
          [ "label" => "Name", "attributes" => ["pbdf.gemeente.personalData.fullname"] ],
          [ "label" => "Over 18", "attributes" => ["pbdf.gemeente.personalData.over18"] ],
          [ "label" => "DIGID level", "attributes" => ["pbdf.gemeente.personalData.digidlevel"] ],
        ], 
//        [
//          [ "label" => "Name", "attributes" => ["irma-demo.pbdf.linkedin.fullname"] ],
//          [ "label" => "Email", "attributes" => ["irma-demo.pbdf.linkedin.email"] ],//
//          [ "label" => "Profile", "attributes" => ["irma-demo.pbdf.linkedin.profileurl"] ],
//        ],         
//        [
//          [ "label" => "Institute", "attributes" => ["irma-demo.pbdf.surfnet-2..schacHomeOrganization"] ],
//          [ "label" => "Affiliations", "attributes" => ["irma-demo.geant-incubator.edugain-proxy.eduPersonScopedAffiliation"] ],
//          [ "label" => "ID", "attributes" => ["irma-demo.geant-incubator.edugain-proxy.subject-id"] ],
//          [ "label" => "Full name", "attributes" => ["irma-demo.geant-incubator.edugain-proxy.displayName"] ],
//          [ "label" => "Given name", "attributes" => ["irma-demo.geant-incubator.edugain-proxy.givenName"] ],
//          [ "label" => "Family name", "attributes" => ["irma-demo.geant-incubator.edugain-proxy.sn"] ],
//          [ "label" => "Email address", "attributes" => ["irma-demo.geant-incubator.edugain-proxy.mail"] ],
//          [ "label" => "Assurance", "attributes" => ["irma-demo.geant-incubator.edugain-proxy.eduPersonAssurance"] ], 
//        ],
//                [
//          [ "label" => "Entitlements", "attributes" => ["irma-demo.geant-incubator.surf-sram.eduPersonEntitlement"] ],
//          [ "label" => "ExternalAffilations", "attributes" => ["irma-demo.geant-incubator.surf-sram.voperson_external_affiliation"] ], 
//          [ "label" => "Home org", "attributes" => ["irma-demo.geant-incubator.surf-sram.schacHomeOrganization"] ], 
//          [ "label" => "Affiliations", "attributes" => ["irma-demo.geant-incubator.surf-sram.eduPersonScopedAffiliation"] ], 
//          [ "label" => "VO identifier", "attributes" => ["irma-demo.geant-incubator.surf-sram.subject-id"] ], 
//          [ "label" => "Name", "attributes" => ["irma-demo.geant-incubator.surf-sram.displayName"] ], 
//          [ "label" => "email", "attributes" => ["irma-demo.geant-incubator.surf-sram.mail"] ], 
//          [ "label" => "Assurance", "attributes" => ["irma-demo.geant-incubator.surf-sram.eduPersonAssurance"] ], 
//          [ "label" => "ePPN", "attributes" => ["irma-demo.geant-incubator.surf-sram.eduPersonPrincipalName"] ], 
//          [ "label" => "ORCID", "attributes" => ["irma-demo.geant-incubator.surf-sram.eduPersonOrcid"] ], 
//          [ "label" => "UID", "attributes" => ["irma-demo.geant-incubator.surf-sram.UID"] ], 
//          [ "label" => "External ID", "attributes" => ["irma-demo.geant-incubator.surf-sram.voperson_external_id"] ], 
//          [ "label" => "SSH key", "attributes" => ["irma-demo.geant-incubator.surf-sram.ssh_public_key"] ], 
//            ],
      ],
    ],
];
