---
title: "Asynchronous TDMS Logger"
externalUrl: https://www.vipm.io/package/ni_lib_asynch_tdms_log
date: 2016-05-19
summary: "This is a library of functions of the asynchronous TDMS logger."
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
 - "NI"
 - "NI LabVIEW Tools Network"
---

Redirecting to https://www.vipm.io/package/ni_lib_asynch_tdms_log

Vendor: National Instruments

Author(s): Piotr Kruczkowski
 
Full Description:
This is a library of functions of the asynchronous TDMS logger. It allows you to dynamically run an asynchronous thread for data logging with additional functionality of seperating the data into multiple files based on size or date and time. It also implements functions to delete old files that would normally overflow your hard drive.

These functions can be used in the same loop as you measurement task because they are asynchronous. This means that the logger is created in the background and works as a parallel thread. You can monitor the status of that thread by getting its info.

Please note that this functionality may not work correctly when the destination folder is updated by NI Data Finder or Google Drive etc.

The supported data types are: Single, Double, Double Waveform, Signed Integer 8 bit, Signed Integer 16 bit, Unsigned Integer 8 bit, 16 bit and String Events.