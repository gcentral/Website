---
title: "Async Methods Actor"
externalUrl: https://www.vipm.io/package/ls_instruments_ag_lib_async_methods_actor
date: 2023-11-20
summary: "A library that extends the Actor Framework to allow for async method execution"
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
 - "OOP"
 - "VIPM Community"
 - "communication"
---

Redirecting to https://www.vipm.io/package/ls_instruments_ag_lib_async_methods_actor

Vendor: LS Instruments AG

Author(s): Andrea Vaccaro
 
Full Description:
An Actor-based library that implements an infrastructure for launching async methods. By making actors inherit from the 'Async Mathods Actor', it is possible to launch any method without waiting for its conclusion, by sending messages child of the abstract message 'Async Message.lvclass'. This framework is especially useful for tasks that take a long time to execute which implemented as Actor methods would lock the actor until completion. The official way to implement those tasks in the Actor Framework is to code them as helper loops within the 'Actor Core.vi'. This however brings along the overhead of setting up a communication mechanism between Actor methods and the helper loop, thus voiding the advantage of OOP encapsulation. Using this framework you continue to benefit from OOP encapsulation of the Actor Framework for long execution tasks without having to implement ad-hoc data transfer methods between methods and helper loops.