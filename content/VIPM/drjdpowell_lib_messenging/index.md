---
title: "Messenger Library"
externalUrl: https://www.vipm.io/package/drjdpowell_lib_messenging
date: 2023-11-29
summary: "A library for easy messaging between processes (including easy TCP)."
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
 - "JKI"
 - "NI"
 - "NI LabVIEW Tools Network"
 - "OOP"
 - "OpenG"
 - "communication"
---

Redirecting to https://www.vipm.io/package/drjdpowell_lib_messenging

Vendor: JDP Science

Author(s): James David Powell, drjdpowell
 
Full Description:
Advanced messaging made simple

A library for passing messages between parallel processes.  Uses 'Addresses' to generalize the communication method, allowing the message sender to use any method as provided by the receiver.  Supported communication methods include wrappings of simple queues, user events, and notifiers, as well a more complex channels such as a TCP server and client.  

Comunication patterns supported include *request-reply*, where the reply is sent to a 'reply address' attached to the request, and *register-notify*, where one process sends a registration message to another in order to subscribe to published messages.

A framework for dynamically-launched VI 'actors' is also provided.  An 'Actor Manager' debug tool is installed under the Tools menu, as is an option to generate a new actor from a template.

**Note:** On Windows 10, it may be necessary to run VI Package Manager 'as an administrator' in order to install the VI Package.