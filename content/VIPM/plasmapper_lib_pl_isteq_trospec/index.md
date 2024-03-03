---
title: "PL ISTEQ TroSpec"
externalUrl: https://www.vipm.io/package/plasmapper_lib_pl_isteq_trospec
date: 2022-12-21
summary: "LabVIEW instrument driver for ISTEQ TroSpec spectrometers."
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

Redirecting to https://www.vipm.io/package/plasmapper_lib_pl_isteq_trospec

Vendor: plasmapper

Author(s): plasmapper
 
Full Description:
LabVIEW instrument driver for ISTEQ TroSpec spectrometers.

Tested on custom TroSpec board with VID 0x04D8 and PID 0x89B6 on Windows 10.

Driver
Use Zadig (http://zadig.akeo.ie/) to install the WinUSB device driver (recommended way of using libusb on Windows (https://github.com/libusb/libusb/wiki/Windows#how-to-use-libusb-on-windows)).

Features
1. Configure CCD period, gain, offset and frame acquisition.
2. Acquire frames in finite and continuous modes.
3. Save configuration to the flash memory.