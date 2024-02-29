---
title: "PL Modbus Client"
externalUrl: https://www.vipm.io/package/plasmapper_lib_pl_modbus_client
summary: "Modbus client library for LabVIEW."
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

Redirecting to https://www.vipm.io/package/plasmapper_lib_pl_modbus_client

Vendor: plasmapper

Author(s): plasmapper
 
Full Description:
Modbus client library for LabVIEW.

Features:
1. RTU, ASCII and TCP protocols via serial or network connection.
2. Implemented read/write functions (Modbus function codes):
  - Read Coils / Discrete Inputs / Holding Registers / Input Registers (1/2/3/4)
  - Write Single Coil / Holding Register (5/6)
  - Write Multiple Coils / Holding Registers (15/16)
3. Splitting single read/write requests into multiple requests with valid number of memory elements.
4. Automatic reconnection to device.
5. Support of multiple devices on the same serial port (VISA Lock/Unlock).
6. Possibility of other Modbus function code (including user-defined) implementation.

Not implemented and user-defined Modbus function codes:
All implemented Read/Write VIs internally use Command.vi with function code and data in as inputs and data out as output. For Modbus TCP and Modbus ASCII this VI can be used with any function code, since these protocols allow to receive responce data without knowing its size beforehand. For Modbus RTU descendant class should be created with overriden Read RTU Data.vi.