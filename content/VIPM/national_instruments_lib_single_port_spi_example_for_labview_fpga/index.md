---
title: "Single Port SPI Example for LabVIEW FPGA"
externalUrl: https://www.vipm.io/package/national_instruments_lib_single_port_spi_example_for_labview_fpga
date: 2016-05-19
summary: "SPI is a commonly used communication protocol for both integrated circuit communication and embedded sensors."
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

Redirecting to https://www.vipm.io/package/national_instruments_lib_single_port_spi_example_for_labview_fpga

Vendor: National Instruments

Author(s): IPNet
 
Full Description:
SPI is a commonly used communication protocol for both integrated circuit communication and embedded sensors.  The protocol operates in full duplex with a single master and multiple slaves per port.  This allows the flexibility of communicating with several different devices through a single port where each device can have its own clock rate and command set.

The SPI bus in this document is implemented using LabVIEW FPGA to perform the bus mastering and clocking signals.  A single-cycle timed loop (SCTL) is used to perform each step of communication between the SPI master (LabVIEW FPGA VI) and up to 8 slave devices per port.  Multiple ports can be created using the same FPGA VI and interface to a host program.

The bus is encapsulated in a higher level LabVIEW FPGA VI, which utilizes a state machine to perform intermediate communication between each SPI port and a host interface.  This VI synchronizes the host interface and SPI ports and multiplexes data sent from the host to a specified port.