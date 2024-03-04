---
title: "NI RFFE Example for the NI PXIe-5644R"
externalUrl: https://www.vipm.io/package/national_instruments_lib_ni_rffe_example_for_the_ni_pxie_5644r
date: 2016-05-19
summary: "This example implements MIPI RF front end (RFFE) communication through the DIO port on the NI PXIe-5644R, including support for both master and slave functionality."
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
 - "I/O"
 - "NI"
 - "NI LabVIEW Tools Network"
 - "communication"
 - "protocol"
---

Redirecting to https://www.vipm.io/package/national_instruments_lib_ni_rffe_example_for_the_ni_pxie_5644r

Vendor: National Instruments

Author(s): National Instruments
 
Full Description:
The MIPI RF Front End (RFFE) specification was developed to form a standard bus protocol for devices in a radio frequency signal path to minimize noise coupled into the devices from digital signals and to solve high configuration speed requirements for MIMO applications. RFFE busses allow only a single master that drives a clock (SCLK) and data (SDATA) to multiple slave devices; the very low pin count (two pins) benefits overall system simplicity. This example includes an RFFE Master suitable for controlling an RFFE bus and an RFFE Slave. Note that the RFFE standard uses signaling levels (1.2 Volt or 1.8 Volt) that are not directly compatible with the NI PXIe-5644R DIO (3.3 V TTL). Therefore, external signal conditioning circuitry is required for any RFFE bus that is interfaced to the NI PXIe-5644R.