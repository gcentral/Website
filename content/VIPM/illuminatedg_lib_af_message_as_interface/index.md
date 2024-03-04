---
title: "IG AF Message as Interface"
externalUrl: https://www.vipm.io/package/illuminatedg_lib_af_message_as_interface
date: 2023-07-04
summary: "Changes the base Message.lvclass to a LabVIEW Interface and updates the message tooling."
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
draft: false
tags:
 - "VIPM"
 - "Actor Framework"
 - "VIPM Community"
---

Redirecting to https://www.vipm.io/package/illuminatedg_lib_af_message_as_interface

Vendor: IlluminatedG

Author(s): Derrick Bommarito
 
Full Description:
Change the base Message.lvclass in Actor Framework to an Interface. The base Message class stores no class data and is only used for method definitions but AF has existed before LabVIEW Interfaces. Changing the base Message to an interface allows using other classes as parents of messages for more flexibility in messaging capabilities.

**NOTE:** This package creates backup copies of the original AF files so they can be restored when the package is uninstalled. However, once used for a project, there is no automated tooling to return message implementations back to the original parent configuration and will need to be done manually.

Shoutout to Casey May of Zyah Solutions for doing the initial test of the concept when I asked about the idea in the AF Guild Discord server.