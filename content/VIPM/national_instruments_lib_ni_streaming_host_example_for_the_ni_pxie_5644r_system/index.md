---
title: "NI Streaming Host Example for the NI PXIe-5644R/45R/46R (System)"
externalUrl: https://www.vipm.io/package/national_instruments_lib_ni_streaming_host_example_for_the_ni_pxie_5644r_system
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

Redirecting to https://www.vipm.io/package/national_instruments_lib_ni_streaming_host_example_for_the_ni_pxie_5644r_system

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

Some applications require offloading the data from the FPGA in the VST to another device. This can be accomplished in several ways: DMA FIFOs to a host system, Peer-to-Peer DMA FIFOs to other devices in a PXIe system, or through the front-panel DIO of the VST. Or, some applications require transferring data to another clock domain for processing, which can be achieved using local FIFOs.