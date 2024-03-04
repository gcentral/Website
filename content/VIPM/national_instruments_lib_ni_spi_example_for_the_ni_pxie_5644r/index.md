---
title: "NI SPI Example for the NI PXIe-5644R"
externalUrl: https://www.vipm.io/package/national_instruments_lib_ni_spi_example_for_the_ni_pxie_5644r
date: 2016-05-19
summary: "This example implements serial peripheral interface (SPI) communication through the DIO port on the NI PXIe-5644R, including support for both master and slave functionality."
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
 - "NI"
 - "NI LabVIEW Tools Network"
 - "communication"
 - "serial"
---

Redirecting to https://www.vipm.io/package/national_instruments_lib_ni_spi_example_for_the_ni_pxie_5644r

Vendor: National Instruments

Author(s): National Instruments
 
Full Description:
Serial Peripheral Interface (SPI) buses are commonly used to communicate between a controller (master) device and a target (slave) device. In general, SPI buses require four lines for communication: chip select/clock enable, serial clock, master serial data out (MOSI), and master serial data in (MISO). In some cases only a subset of these lines are used; some devices multiplex both MOSI and MISO onto a single bidirectional data line. This example includes LabVIEW FPGA code for both an SPI master and an SPI slave.