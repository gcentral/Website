---
title: "IG Stream Messaging"
externalUrl: https://www.vipm.io/package/illuminatedg_lib_ig_simple_msg
date: 2022-11-12
summary: "Simple Messaging layer based on IG Stream Base, can be used with any comms based on IG Stream Base"
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
 - "JSON"
 - "VIPM Community"
 - "communication"
---

Redirecting to https://www.vipm.io/package/illuminatedg_lib_ig_simple_msg

Vendor: IlluminatedG

Author(s): Derrick Bommarito
 
Full Description:
Provides a messaging layer overtop of a stream implementation based on *IG Stream Base*. Allows using a single communication stream to send multiple messages identified by a string. VI Callbacks are the mechanism used to process incoming messages which allow the developer to choose whether the message gets forwarded by events, queues, notifiers, or some other means.

Messages can be sent to all currently connected endoints (broadcasting) via the messaging manager or to specific endpoints by sending to a specific endpoint instance. Callbacks can also be registered to handle new connections or disconnections. Each endpoint runs in its own asynchronous messaging loop to take advantage of multi-threading and run without polling behaviors for efficiency.

Examples for this library are provided in the *IG Simple Msg Examples* package and also depend on *IG TCP Stream* as they use TCP streaming to communicate between parts of the examples. An example is included for basic data streaming from a data producer and a display. Another example is an updated chat application that provides more features than the chat example included with the TCP Stream package.