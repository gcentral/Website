---
title: "Error Log"
externalUrl: https://www.vipm.io/package/benjaminr_error_log
summary: "A set of classes to provide comprehensive error logging functionality."
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

Redirecting to https://www.vipm.io/package/benjaminr_error_log

Vendor: BenjaminR

Author(s): BenjaminR
 
Full Description:
A set of classes to provide comprehensive error logging functionality.

The **Error Log** library takes a modular approach and offers several categories of components: Logger, Handler, and Serializer.

- **Logger**exposes the interface that application code directly uses. It keeps track of a set of Handler and send the log records to the appropriate destination.
- **Handler** is set of methods to effectively output (write/display) log records. Handler filters out log records based on their Level.
- **Serializer** specifies the layout of log records in the final output.

<u>Levels</u>: 
- **DEBUG** : Detailed information, typically of interest only when diagnosing problems.
- **INFO** : Confirmation that things are working as expected.
- **WARNING** : An indication that something unexpected happened. The application is still working as expected.
- **ERROR** : Due to a more serious problem, the application has not been able to perform some tasks.
- **CRITICAL** : A serious error, indicating that the application itself may be unable to continue running.

When you set a logging level to an Handler, you’re telling the library you want to handle all events from that level on up. If you set the log level to INFO, it will include INFO, WARNING, ERROR, and CRITICAL messages. DEBUG messages will not be included here.