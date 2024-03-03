---
title: "NI SPI IP"
externalUrl: https://www.vipm.io/package/national_instruments_lib_ni_spi_ip
date: 2016-05-19
summary: "**This VI must be placed in a single-cycle timed loop for guaranteed behavior."
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

Redirecting to https://www.vipm.io/package/national_instruments_lib_ni_spi_ip

Vendor: National Instruments

Author(s): National Instruments
 
Full Description:
**This VI must be placed in a single-cycle timed loop for guaranteed behavior.**

Serial Peripheral Interface (SPI) buses are commonly used to communicate between a controller (master) device and a target (slave) device. In general, SPI buses require four lines for communication: chip select/clock enable, serial clock, master serial data out (MOSI), and master serial data in (MISO). In some cases only a subset of these lines are used; some devices multiplex both MOSI and MISO onto a single bidirectional data line. This IP includes LabVIEW FPGA code for both an SPI master and an SPI slave.