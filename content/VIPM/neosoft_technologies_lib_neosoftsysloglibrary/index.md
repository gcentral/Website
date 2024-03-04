---
title: "NeosoftSyslogLibrary"
externalUrl: https://www.vipm.io/package/neosoft_technologies_lib_neosoftsysloglibrary
date: 2021-04-06
summary: "Library to use syslog messaging (RFC3164 and RFC5424 avalaible)"
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
 - "DQMH"
 - "NI"
 - "NI LabVIEW Tools Network"
---

Redirecting to https://www.vipm.io/package/neosoft_technologies_lib_neosoftsysloglibrary

Vendor: Neosoft Technologies

Author(s): Neosoft Technologies
 
Full Description:
Neosoft Syslog Library is a set of VI to use syslog messaging  in your application. The standard RFC 3164 and RFC 5424 are available and you can send syslog message with a timestamp precision untill nanosecond. There are 2 parts in the libray :

- DQMH request : they are the high level VI, it allow you to use the DQMH module that handles the syslog messaging, you just need to run the module and use the request available (configuration, connection and write message requests)

- Low level VI : the Syslog DQMH module descripted precedently  works on these VIs from syslog classes. You will find here the necessary VIs to use the syslog messaging without the DQMH module (if you use DQMH module in your project, it's better to not use these VI)