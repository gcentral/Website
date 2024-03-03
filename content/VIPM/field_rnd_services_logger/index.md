---
title: "Logger"
externalUrl: https://www.vipm.io/package/field_rnd_services_logger
date: 2021-05-31
summary: "A simple logging utility similar to the Log4j library but for LabVIEW."
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

Redirecting to https://www.vipm.io/package/field_rnd_services_logger

Vendor: Field R&D Services

Author(s): Christopher R. Field
 
Full Description:
A simple logging utility similar to the Log4j library but for LabVIEW. Levels are provided for different logging statements: TRACE, DEBUG, INFO, WARN, ERROR, and FATAL. The higher the level, the more statements that are written to a file. The creation of 'rollover' log files is supported along with organizing log files by Year, Month, and Day folder tree. Minimal error handling VIs are provided for logging or masking errors based on severity. The utility is known to work with 32-bit and 64-bit environments as well as Real-Time targets. Writing to a log file is done on a separate thread to maintain determinism on Real-Time targets.