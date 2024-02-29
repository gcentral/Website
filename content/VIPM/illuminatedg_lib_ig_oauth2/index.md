---
title: "IG OAuth2"
externalUrl: https://www.vipm.io/package/illuminatedg_lib_ig_oauth2
summary: "Provides native LabVIEW OAuth2 implementation, currently only for the Authorization Code Flow with full application client credentials."
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

Redirecting to https://www.vipm.io/package/illuminatedg_lib_ig_oauth2

Vendor: IlluminatedG

Author(s): Derrick Bommarito
 
Full Description:
Provides native LabVIEW OAuth2 implementation, currently only for the Authorization Code Flow with full application client credentials. This is useful to authenticate for services such as GMail, Microsoft Identity, etc. to act on behalf of the user with the user's permission and without the application directly collecting the user's credentials. Runs a built-in server to automatically handle the redirect response. It does not use any .Net or Windows specific APIs so it works on other desktop targets as well.

Included in this package is a Google pre-defined provider and others can easily be added if requested, head to the source repo and open an issue or ping me somewhere online. They're also trivial so feel free to just make your own to use yourself.