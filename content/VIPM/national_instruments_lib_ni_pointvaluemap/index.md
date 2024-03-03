---
title: "NI PointValueMap"
externalUrl: https://www.vipm.io/package/national_instruments_lib_ni_pointvaluemap
date: 2016-05-19
summary: "Processes commonly need to read properties that other processes write."
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

Redirecting to https://www.vipm.io/package/national_instruments_lib_ni_pointvaluemap

Vendor: National Instruments

Author(s): National Instruments
 
Full Description:
Processes commonly need to read properties that other processes write.  Maps contain points, which work like variables that store only the latest value written to them. In other words, point value maps are repositories of information that any process can read and write at run time.

In the example of reading the current operating state of a machine, processes do not require knowledge of every change in operating state that occurs, but rather, only the current state. Point value maps are designed for this use case, where the device software must store a value in memory that readers and writers can access with no flow control.

Map Format:
Maps and map points persist until the device code restarts. In other words, maps and points created before a restart no longer exist in memory after the restart. 
Map points consist of a key-value pair. 
Each map can contain multiple points, which are identified by name. 
Multiple maps can exist simultaneously, each of which is identified by name. 
Points support values whose data type is string, double, integer, Boolean, or variant. 
Points support a few types of attributes: a property that indicates whether the point value is valid, a timestamp that indicates when the value was written, and generic user-defined attributes.