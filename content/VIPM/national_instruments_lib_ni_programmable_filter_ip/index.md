---
title: "NI Programmable Filter IP"
externalUrl: https://www.vipm.io/package/national_instruments_lib_ni_programmable_filter_ip
date: 2016-05-19
summary: "This IP is a 33 Tap configurable, general purpose finite impulse response (non recursive) filter. The coefficients have no symmetry requirements, so this filter can be used wherever an FIR filter is desired on the FPGA to filter IQ data."
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
 - "NI"
 - "NI LabVIEW Tools Network"
---

Redirecting to https://www.vipm.io/package/national_instruments_lib_ni_programmable_filter_ip

Vendor: National Instruments

Author(s): National Instruments
 
Full Description:
This IP implements a 33 tap FIR Filter. The coefficients are written sequentially to the FPGA filter from the Host code. The Digital Filter Design toolkit can be used to design filters for any purpose, then the filter can be implemented on the FPGA using this IP. 
In order to operate properly, this IP requires an additional in phase clock at three times the sample clock frequency. This allows for the total pipeline delay of the IP to be only 9 clock cycles.
This IP is designed for IQ architecture; I and Q data streams are filtered separately by identical filters, and then recombined for output in the data path. When coefficients are programmed onto the filter, they are sent to both filters.