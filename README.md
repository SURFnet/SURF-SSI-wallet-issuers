
Copyright (c) 2023 SURF bv

All rights reserved. This software is distributed under the Apache 2.0 license. For more information, see LICENSE

## INTRODUCTION

To test with the eduID Wallet, 3 IRMA issuers were deployed, based on SimpleSAMLphp and the IRMA server software.

For the demos, 2 domains were deployed, where one points directly at the php based applications, and one acts as a proxy for the backend IRMA server component.

The code provided here contains the apache configurations, the simplesamlphp deploy configured for the domains and the 3 issuers, and some subdirectories that represent 3 different issuer configurations (eduID, SURFconext and edubadges), in accordance with the use cases tested at the demo.

## PREREQUISITES
To use these scripts you need to install the IRMA server, an apache webserver, SimpleSAMLphp and the authIRMA Simpelsamlphp module.

## CONTACT

Questions/remarks/suggestions/praise regarding this tool can be sent to:

Niels van Dijk  - <niels.vandijk@surf.nl>

