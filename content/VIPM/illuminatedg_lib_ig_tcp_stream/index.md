---
title: "IG TCP Stream"
externalUrl: https://www.vipm.io/package/illuminatedg_lib_ig_tcp_stream
date: 2022-11-12
summary: "Provides a TCP implementation over *IG Stream Base*."
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

Redirecting to https://www.vipm.io/package/illuminatedg_lib_ig_tcp_stream

Vendor: IlluminatedG

Author(s): Derrick Bommarito
 
Full Description:
Provides a TCP implementation over *IG Stream Base*. All of the low-level TCP is entirely native LabVIEW functionality so it runs on all supported LabVIEW programs. The library runs connection management asynchronously to enable more parallel operation. TCP Servers enable multiple simultaneous incoming connections whereas Clients establish single connections to a specific server.

Connection notification is handled with VI Callback mechanisms that provide new connections as they are established or when existing connections disconnect. From these connections the underlying TCP stream class to begin reading/writing data.

For a simpler messaged based interface that can utilize this TCP library check out the *IG Simple Msg* package.

An example of a multi-client chat application is available in this package.