<?php
$metadata['https://engine.test.surfconext.nl/authentication/idp/metadata'] = [
    'name' => [
        'en' => 'SURFconext proxy test',
        'nl' => 'SURFconext proxy test',
    ],
    'SingleSignOnService' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208',
    'certificate' => 'engineblock.test.surfconext.nl.20190208.pem',
 
    // convert OID formatted attributes from SAML assertion to 'name' similar to LDAP
    // so they will be available as 'mail' and 'displayName'
    'authproc' => [
      50 => [
        'class' => 'core:AttributeMap', 'oid2name',
      ],
    ],
];

$metadata['https://login.test2.eduid.nl'] = [
    'entityid' => 'https://login2.test.eduid.nl',
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/0e02dc001c56f2bf78c699a00910253f',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'UIInfo' => [
        'DisplayName' => [],
        'Description' => [],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/media/idp/eduid.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://eduid.demo.eduid.nl'] = [
    'entityid' => 'https://eduid.demo.eduid.nl',
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/c60f46fd77c2f4aecd76583baddf83a0',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'UIInfo' => [
        'DisplayName' => [],
        'Description' => [
            'nl' => 'EduID demo environment',
            'en' => 'EduID demo environment',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'eduid',
            ],
            'nl' => [
                'eduid',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/media/idp/surfconext.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://login.test.eduid.nl'] = [
    'entityid' => 'https://login.test.eduid.nl',
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/41446efe752391789124c87fed487952',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'eduID (NL) test omgeving',
            'en' => 'eduID (NL) test enviroment',
        ],
        'Description' => [
            'nl' => 'eduID (NL) IdP test omgeving',
            'en' => 'eduID (NL) IdP test environment',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'eduid',
                'nl',
                'guest',
                'idp',
                'onegini',
                'surfguest',
            ],
            'nl' => [
                'eduid',
                'nl',
                'guest',
                'idp',
                'onegini',
                'surfguest',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/media/idp/eduid.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
    'name' => [
        'nl' => 'eduID (NL) test omgeving',
        'en' => 'eduID (NL) test enviroment',
    ],
];
$metadata['https://irma.test.eduid.nl/simplesaml/saml2/idp/metadata.php'] = [
    'entityid' => 'https://irma.test.eduid.nl/simplesaml/saml2/idp/metadata.php',
    'contacts' => [
        [
            'contactType' => 'technical',
            'givenName' => 'Niels van Dijk',
            'emailAddress' => [
                'niels.vandijk@surf.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://irma.test.eduid.nl/simplesaml/saml2/idp/SSOService.php',
        ],
    ],
    'SingleLogoutService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://irma.test.eduid.nl/simplesaml/saml2/idp/SingleLogoutService.php',
        ],
    ],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEoTCCAwmgAwIBAgIUK5mtDePBpoD+1A5iGkaGYYZpOhcwDQYJKoZIhvcNAQELBQAwYDELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxEjAQBgNVBAoMCWVkdWJhZGdlczEZMBcGA1UEAwwQZWR1YmFkZ2VzIGlzc3VlcjAeFw0yMzAyMjExNDU4NTFaFw0zMzAyMjAxNDU4NTFaMGAxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRIwEAYDVQQKDAllZHViYWRnZXMxGTAXBgNVBAMMEGVkdWJhZGdlcyBpc3N1ZXIwggGiMA0GCSqGSIb3DQEBAQUAA4IBjwAwggGKAoIBgQDb58JuFazNaeNmC3KmQj+ltuQJ5dk51uO/17XSAOGb/z/xa5ew7IhSIinWYTPQVPIVpzDGefNtv+ZMyTR5kcrwC4TXDyQLOfcSn1yjPR5DtwqqyJWvWZ16pevZftWng2cz4w+Z+Y3wNZxhVEeMEi+wuRkudGD12ViRLVY3+kkTcAUiWjfPy+RxSULrypmhXwQ/i79192Ic04b6yDIa4gVMLjqjEyVZAKYut3ruZw+yp1Y22y8IoEqOeel1KBHPkpCmrBZToIpSf2yLQh/VRyz80BkHsEJIFnu15Zm6fx3EBl+6YGH/DDeJZYIY0Bsj7Kpaxkpo2soforEqmUJP/IYRVCf2KSsXyA40VdJjAK54u7lSQUtOOi1zCl/ujfXRO9qh/W97SNb63ZxV/fl04aojf3jjrYzcB2HparH3CRn9MfUJI9WHRvvORVu3w4FlQePfqk+Y/pQcOOAe20UQn9ldCuotPoxkiPR0Tax2jKPocvPQ3HuLzqdCxyITfrvhf38CAwEAAaNTMFEwHQYDVR0OBBYEFFyQmB0nHGAqup3Ofa9lIMssVc2eMB8GA1UdIwQYMBaAFFyQmB0nHGAqup3Ofa9lIMssVc2eMA8GA1UdEwEB/wQFMAMBAf8wDQYJKoZIhvcNAQELBQADggGBADKZrO7tLcKQMmKXR4jMorA0PUbZrupud58VmD/Rxd5V8Nhru4g9oUzn/wkbG3vtMM+g6CobJ+e05RSdvWEeuUvtD3zGcJyBebHidfBNyvj+i4CxFhHBOl5s/LMyeohOUSqnikI7ztNHwgqLaTp2Ux5kmUHAr+nrg7ME6YobGURiSmJit2a1rrZLJEsoQwPJfjRBhJF7ZIyyufQ6SpmR+RYK7DRvw7glQa6EDN2ld4l/8W1adM3IWpopRidUqH2e0skZXWCnhPDZBZjvZ6gOsCpVQ+ETNdrjP7hQAfWaTOaiSJ05oOOLQaXUy+RI4xzTtTohQnaZ8Ke3MEfvyUDrR+25aTCaxENQeLr1Upznjb5pW8oS0WiCsFNsD1Q0PSASiWwbeGhn/197Ib8Mw9UotRzhdxWZZMWj/VQKMToROz4ILiCvzWgF5xRFWx66vcAcq/zyjEXw6vG1HwMpEa3XHYGR3897U+rCcvqwEqxvF0s655czeBQbFss7X2uzHvsyUA==',
        ],
        [
            'encryption' => true,
            'signing' => false,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEoTCCAwmgAwIBAgIUK5mtDePBpoD+1A5iGkaGYYZpOhcwDQYJKoZIhvcNAQELBQAwYDELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxEjAQBgNVBAoMCWVkdWJhZGdlczEZMBcGA1UEAwwQZWR1YmFkZ2VzIGlzc3VlcjAeFw0yMzAyMjExNDU4NTFaFw0zMzAyMjAxNDU4NTFaMGAxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRIwEAYDVQQKDAllZHViYWRnZXMxGTAXBgNVBAMMEGVkdWJhZGdlcyBpc3N1ZXIwggGiMA0GCSqGSIb3DQEBAQUAA4IBjwAwggGKAoIBgQDb58JuFazNaeNmC3KmQj+ltuQJ5dk51uO/17XSAOGb/z/xa5ew7IhSIinWYTPQVPIVpzDGefNtv+ZMyTR5kcrwC4TXDyQLOfcSn1yjPR5DtwqqyJWvWZ16pevZftWng2cz4w+Z+Y3wNZxhVEeMEi+wuRkudGD12ViRLVY3+kkTcAUiWjfPy+RxSULrypmhXwQ/i79192Ic04b6yDIa4gVMLjqjEyVZAKYut3ruZw+yp1Y22y8IoEqOeel1KBHPkpCmrBZToIpSf2yLQh/VRyz80BkHsEJIFnu15Zm6fx3EBl+6YGH/DDeJZYIY0Bsj7Kpaxkpo2soforEqmUJP/IYRVCf2KSsXyA40VdJjAK54u7lSQUtOOi1zCl/ujfXRO9qh/W97SNb63ZxV/fl04aojf3jjrYzcB2HparH3CRn9MfUJI9WHRvvORVu3w4FlQePfqk+Y/pQcOOAe20UQn9ldCuotPoxkiPR0Tax2jKPocvPQ3HuLzqdCxyITfrvhf38CAwEAAaNTMFEwHQYDVR0OBBYEFFyQmB0nHGAqup3Ofa9lIMssVc2eMB8GA1UdIwQYMBaAFFyQmB0nHGAqup3Ofa9lIMssVc2eMA8GA1UdEwEB/wQFMAMBAf8wDQYJKoZIhvcNAQELBQADggGBADKZrO7tLcKQMmKXR4jMorA0PUbZrupud58VmD/Rxd5V8Nhru4g9oUzn/wkbG3vtMM+g6CobJ+e05RSdvWEeuUvtD3zGcJyBebHidfBNyvj+i4CxFhHBOl5s/LMyeohOUSqnikI7ztNHwgqLaTp2Ux5kmUHAr+nrg7ME6YobGURiSmJit2a1rrZLJEsoQwPJfjRBhJF7ZIyyufQ6SpmR+RYK7DRvw7glQa6EDN2ld4l/8W1adM3IWpopRidUqH2e0skZXWCnhPDZBZjvZ6gOsCpVQ+ETNdrjP7hQAfWaTOaiSJ05oOOLQaXUy+RI4xzTtTohQnaZ8Ke3MEfvyUDrR+25aTCaxENQeLr1Upznjb5pW8oS0WiCsFNsD1Q0PSASiWwbeGhn/197Ib8Mw9UotRzhdxWZZMWj/VQKMToROz4ILiCvzWgF5xRFWx66vcAcq/zyjEXw6vG1HwMpEa3XHYGR3897U+rCcvqwEqxvF0s655czeBQbFss7X2uzHvsyUA==',
        ],
    ],
];
