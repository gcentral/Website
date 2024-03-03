---
title: "NI SPI Host Example for the PXIe-5644/45R/46R"
externalUrl: https://www.vipm.io/package/national_instruments_lib_ni_spi_host_example_for_the_pxie_5644_45r
date: 2017-01-30
summary: "**Adds support for LabVIEW 2013 and later."
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

Redirecting to https://www.vipm.io/package/national_instruments_lib_ni_spi_host_example_for_the_pxie_5644_45r

Vendor: National Instruments

Author(s): National Instruments
 
Full Description:
**Adds support for LabVIEW 2013 and later.  In addition to the VIPM resolved dependencies, the following *must* be present on the system for correct operation:

Hardware:
NI PXIe-5644R/45R/46R

Software:
LabVIEW 2013 or LabVIEW 2013 SP1
RFSA 2.9 or 2.9.1
RFSG 1.9.7 or 1.9.8
NI PXIe-5644R/5645R/5646R Instrument Design Libraries 13.5**

This VI exercises a SPI master to SPI slave interface impletemented within a NI 5644R using the front panel DIO for digital input and output. The DIO must be connected correctly for the interface to operate (see the IO Mapping table below for wiring instructions). This VI attempts to write four registers in the slave device (not all registers are writable) and then reads back the registers in the slave. The values of registers 1 and 2 (shown below) should always match since they are both readable and writable. See the FPGA VI for additional information on the slave logic implementation. See the documentation included with this example for further details on the SPI master and slave interfaces. All read and write requests through the SPI Master to the SPI slave are made through Direct Memory Access (DMA).