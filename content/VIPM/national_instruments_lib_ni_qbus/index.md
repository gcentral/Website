---
title: "NI Qbus"
externalUrl: https://www.vipm.io/package/national_instruments_lib_ni_qbus
date: 2016-05-19
summary: "NI Qbus is a LabVIEW based messaging API."
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
 - "NI LabVIEW Tools Network"
---

Redirecting to https://www.vipm.io/package/national_instruments_lib_ni_qbus

Vendor: National Instruments

Author(s): National Instruments
 
Full Description:
NI Qbus is a LabVIEW based messaging API.  The  library provides VIs for sharing messages between asynchronous processes.  The Qbus API provides subVIs that allow processes to send two types of messages:

Broadcast messages—Available to any process. The sender does not specify a recipient for a broadcast message. To receive a specific type of broadcast message, each process registers for the messages it desires by name. 

Routed messages—Sent only to a specific, named process. You might send a routed message when multiple processes register for a particular message name, but in a specific situation, you only want one specific process to receive and handle the message.