---
title: "SEA 9510 EnDat Interface Module"
externalUrl: https://www.vipm.io/package/sea_9510_driver
date: 2019-05-10
summary: "Driver software for SEA 9510 EnDat Encoder Interface modules."
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
 - "FPGA"
 - "I/O"
 - "JKI"
 - "NI"
 - "NI LabVIEW Tools Network"
---

Redirecting to https://www.vipm.io/package/sea_9510_driver

Vendor: SEA

Author(s): S.E.A. Datentechnik GmbH
 
Full Description:
This driver software (RIO module support) enables the operation of the **SEA 9510** cRIO EnDat Interface module inside a NI CompactRIO (FPGA-based) chassis. This package provides the API (FPGA nodes), examples (use '9510' as search word in LabVIEW Example Finder) as well as user documentation (see LabVIEW Help menu). 
**Software requirements:**
- the **latest** JKI VI Package Manager (VIPM)
- LabVIEW 2017 or higher development environment incl. Real-Time and FPGA modules
**Hardware requirements:**
- SEA 9510 C-Series EnDat Interface module (SEA part number 60000006)
**Important Note:**
The max. acqusition rate has dropped starting with version 2.3.0 due to the added support for NI cRIO-904x/905x targets. If this is an issue and a non-904x/905x target is used please use the previous version (2.2) of this driver software. For details refer to the hardware manual.