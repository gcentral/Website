---
title: "IG Promises"
externalUrl: https://www.vipm.io/package/illuminatedg_lib_ig_promises
date: 2023-10-27
summary: "Provides a Promise/Future implementation for LabVIEW."
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
 - "Actor Framework"
---

Redirecting to https://www.vipm.io/package/illuminatedg_lib_ig_promises

Vendor: IlluminatedG

Author(s): Derrick Bommarito
 
Full Description:
Provides a Promise/Future implementation for LabVIEW. Promises and Futures can be used to standardize the way responses are returned from asynchronous tasks, such as when sending an Actor message and a result needs to be waited on. Unlike the built in Send and Wait for Reply mechanism of Actor Framework, this library supports Strict-Typing by providing a base Values class that can be overridden to pass values without using variants.

This library also encapsulates error propagation and handling. With response notifiers, specific types must be created that combine the desired result value and an error cluster that can be bundled and responded with whereas this library only requires the Value class and manages the error passing itself.