---
title: "NI Instruction Sequencer + SPI Host Example for the NI PXIe-5644R/45R/46R (System)"
externalUrl: https://www.vipm.io/package/national_instruments_lib_ni_instruction_sequencer_and_spi_for_the_ni_pxie_5644_45r_system
date: 2016-05-19
summary: "**This example replaces LabVIEW 2012 support with LabVIEW 2013 support."
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

Redirecting to https://www.vipm.io/package/national_instruments_lib_ni_instruction_sequencer_and_spi_for_the_ni_pxie_5644_45r_system

Vendor: National Instruments

Author(s): National Instruments
 
Full Description:
**This example replaces LabVIEW 2012 support with LabVIEW 2013 support.  In addition to the VIPM resolved dependencies, the following *must* be present on the system for correct operation:

Hardware:
NI PXIe-5644R/45R/46R

Software:
LabVIEW 2013 or LabVIEW 2013 SP1
RFSA 2.9 or 2.9.1
RFSG 1.9.7 or 1.9.8
NI PXIe-5644R/5645R/5646R Instrument Design Libraries 13.5**

This example uses NI-RFSA and NI-RFSG instrument driver FPGA extensions, along with the instruction sequencer and SPI IP to create FPGA personalities for the NI PXIe-5644R and NI PXIe-5645R that have the ability to issue sequences of SPI commands for hardware-timed DUT control. The example shows how to download instruction sequences from the host, configure the SPI IP settings, and then trigger sequence generation for hardware-timed execution. No NI-RFSG or NI-RFSG functionality is demonstrated, but since this FPGA IP is completely asynchronous to the NI-RFSG and NI-RFSG FPGA functionality, the only required order of operations is that the host interact with the additional IP after an NI-RFSA or NI-RFSG initialization.