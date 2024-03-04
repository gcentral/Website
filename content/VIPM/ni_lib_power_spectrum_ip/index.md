---
title: "NI Power Spectrum IP"
externalUrl: https://www.vipm.io/package/ni_lib_power_spectrum_ip
date: 2016-05-19
summary: "This IP provides FPGA building blocks for constructing overlapping FFTs."
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

Redirecting to https://www.vipm.io/package/ni_lib_power_spectrum_ip

Vendor: National Instruments

Author(s): National Instruments
 
Full Description:
This IP provides building blocks for creating overlapped FFTs.  It leverages LabVIEW FPGA 2014s wide data path FFT to provide support for instruments that process up to 8 samples per cycle.

Included blocks:
Configurable Window
RMS Magnitude
FFT Transpose
FFT Shift

Delayed copies of the FFT are leveraged to create up to 75% FFT overlap.  The FFT length is fixed at 1024, but the IP is written such that it can be modified with relative ease to create longer or shorter FFTs.