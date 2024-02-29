---
title: "Oauth 2.0"
externalUrl: https://www.vipm.io/package/labview_open_source_lib_oauth2
summary: "Oauth 2.0 library for LabVIEW

Open Authorization 2.0 API (Oauth2)

This library contains the base class for Oauth2 authorization workflow."
showSummary: true
showAuthor: false
showEdit: false
showData: false
showViews: false
showReadingTime: false
showWordCount: false
showBreadcrumbs: false
showHeadingAnchors: false
sharingLinks: false
showZenMode: false
showPagination: false
showRelatedContent: false
draft: true
tags:
 - "VIPM"
 - "VIPM Community"
---

Redirecting to https://www.vipm.io/package/labview_open_source_lib_oauth2

Vendor: LabVIEW Open Source Project

Author(s): Francois Normandin
 
Full Description:
Oauth 2.0 library for LabVIEW

Open Authorization 2.0 API (Oauth2)

This library contains the base class for Oauth2 authorization workflow.

Extensions currently provided with the framework: 
- Oauth2.Github
- Oauth2.GitLab
- Oauth2.Slack
- Oauth2.LinkedIn
- Oauth2.Google
- Oauth2.Harvest
- Oauth2.Template (for extensions)

(suggestions for more integrations, and community contributions are welcome)

Online authoritative resources: 
https://oauth.net/2
https://www.oauth.com/

Online blogs by LabVIEW developers: 
- https://info.erdosmiller.com/blog/implementing-oauth2-authorization-in-labview
- https://stravaro.com/2020/01/oauth2-and-labview/


A few comments about the current state and evolution of the project: 

- This Oath2 library does not support Implicit Grant Flow, as it will be deprecated in Oauth 2.1 due to security concerns.
- PKCE (Proof-Key Challenge Exchange) workflow is implemented and used by default. It is highly recommended not to deactivate it, as it will become a mandatory feature when Oauth2.1 becomes the norm.

- As of this release, the library currently supports only redirections on port 80 (http) but has been built in a way that future updates should be easy to change to port 443 through https connection. This is because the project is maintained in LV2013 and TLS support was added in LV2020. However, an OauthClient class has been created to act as an 'interface' which should allow injection of a TLS-secured client in later versions of LabVIEW (distributed as an extension addon to this library)
- This library currently supports Authorization tokens, but not the ID Tokens for OpenID extension. It should be part of a future upgrade, once support for JWT (JSON Web Token) has been added to the library.