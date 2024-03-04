---
title: "DCAF Linux Shared Memory Example"
externalUrl: https://www.vipm.io/package/ni_refdes_dcaf_linux_shared_memory_example
date: 2017-06-12
summary: "C and DCAF based LVRT applications will run in parallel on an NI Linux RT cRIO target, sharing data between them using Linux shared memory."
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
 - "DCAF"
 - "I/O"
 - "Linux"
 - "NI"
 - "NI LabVIEW Tools Network"
---

Redirecting to https://www.vipm.io/package/ni_refdes_dcaf_linux_shared_memory_example

Vendor: National Instruments

Author(s): Lee Harding
 
Full Description:
This LabVIEW Real-Time (RT) application, based on the Distributed Control and Automation Framework (DCAF), uses NI Scan Engine on NI CompactRIO (cRIO) for scanned hardware I/O data access, and provides access to the data by creating Linux shared memory as the interface to other processes. The LabVIEW RT application is based on DCAF, and implements a semaphore Linux IPC mechanism as a timing signal to enable synchronous execution of a complimenting example C application. The C example and LabVIEW RT applicationl run in parallel, sharing data between them on the NI Linux RT cRIO target.

Supported Hardware:
NI cRIO-906x, cRIO-903x.