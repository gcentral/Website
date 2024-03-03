---
title: "IG Stream Messaging Examples"
externalUrl: https://www.vipm.io/package/illuminatedg_lib_ig_stream_messaging_examples
date: 2022-11-12
summary: "Provides 2 client/server example applications, one with a very simple mechanism that uses functional globals and no classes (aside from the library) and another that is a more full-featured chat application that shares user lists, connect and disconnect events, and minimal administration features on the server."
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

Redirecting to https://www.vipm.io/package/illuminatedg_lib_ig_stream_messaging_examples

Vendor: IlluminatedG

Author(s): Derrick Bommarito
 
Full Description:
Provides 2 client/server example applications, one with a very simple mechanism that uses functional globals and no classes (aside from the library) and another that is a more full-featured chat application that shares user lists, connect and disconnect events, and minimal administration features on the server.

The *Basic Streaming* example is a simple uni-directional streaming demo that sends a counter value and the value from a slider as separate messages to a connected app. This demo shows the minimal effort for getting a TCP connection to an application and using the messaging API. It would be very easy to expand this demo to more complex data types such as waveforms or custom cluster type definitions for a real-world streaming application connected to an embedded data acquisition system. Unlike this demo, messaging works in both directions so this could also serve as the basis for a bi-directional embedded control application as well.

The *Chat Demo - LV Types* project shows a more full-fledged chat application that utilizes classes for each half of the application and demonstrates how to use class instances with the message callback mechanism. Additionally, connection state callbacks are used to trigger actions when clients initially connect to servers and removing users when clients disconnect from the server.