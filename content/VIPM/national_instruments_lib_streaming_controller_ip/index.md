---
title: "NI Streaming Controller IP"
externalUrl: https://www.vipm.io/package/national_instruments_lib_streaming_controller_ip
date: 2016-05-19
summary: "This IP controls the writing and reading of data to and from FIFOs on the FPGA."
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
---

Redirecting to https://www.vipm.io/package/national_instruments_lib_streaming_controller_ip

Vendor: National Instruments

Author(s): National Instruments
 
Full Description:
Some applications require offloading the data from the FPGA in the VST to another device. This can be accomplished in several ways: DMA FIFOs to a host system, Peer-to-Peer DMA FIFOs to other devices in a PXIe system, or through the front-panel DIO of the VST. Or, some applications require transferring data to another clock domain for processing, which can be done using local FIFOs. This IP provides an API to control the reading and writing of the FIFOs used in these applications.