---
title: "Plasmionique Modbus Master"
externalUrl: https://www.vipm.io/package/mb_master
date: 2022-10-17
summary: "This package contains the Plasmionique Modbus Master library for LabVIEW."
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

Redirecting to https://www.vipm.io/package/mb_master

Vendor: Plasmionique Inc

Author(s): Ryan Porter
 
Full Description:
This package contains the Plasmionique Modbus Master library for LabVIEW.

It supports RTU, ASCII and TCP modes with the following function codes:
0x01 - Read Coils
0x02 - Read Discrete Inputs
0x03 - Read Holding Registers
0x04 - Read Input Registers
0x05 - Write Single Coil
0x06 - Write Single Register
0x07 - Read Exception Status
0x0F - Write Multiple Coils
0x10 - Write Multiple Registers
0x16 - Mask Write Register
0x17 - Read/Write Multiple Registers
0x2B/0x0E - Read Device Identification

Other features include:
- Sharing a COM port across multiple Modbus sessions using VISA locks (10 second timeout).
- Sharing a Modbus session across multiple communication loops.
- TCP transaction ID handling to ensure that requests and responses are matched up correctly in case responses are received out of order.
- Modbus Comm Tester, available through the 'Tools->Plasmionique' menu, for testing communication with a slave device without writing any code. 
- Detailed help document available through the 'Help->Plasmionique' menu.

This package requires LabVIEW 2012 (or newer) and NI-VISA 5.4 (or newer).