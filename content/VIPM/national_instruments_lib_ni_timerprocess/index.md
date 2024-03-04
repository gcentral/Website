---
title: "NI TimerProcess"
externalUrl: https://www.vipm.io/package/national_instruments_lib_ni_timerprocess
date: 2016-05-19
summary: "Process for handling general timer tasks of other processes."
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

Redirecting to https://www.vipm.io/package/national_instruments_lib_ni_timerprocess

Vendor: National Instruments

Author(s): National Instruments
 
Full Description:
This process implements timer tasks that other processes register by sending Qbus messages to those processes. When a process registers a timer task, the Timer process sends a particular type of Qbus message at a configurable time interval to cause the original process to execute the desired subdiagram. This works similarly to a callback in that this process can also return a value along with the name of the subdiagram to execute.