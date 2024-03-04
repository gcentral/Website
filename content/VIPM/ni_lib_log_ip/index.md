---
title: "NI Log IP"
externalUrl: https://www.vipm.io/package/ni_lib_log_ip
date: 2016-05-19
summary: "This package provides FPGA IP for computing the logarithm of a scalar.  Its intended use is for converting the output of an FFT from RMS V to dB."
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

Redirecting to https://www.vipm.io/package/ni_lib_log_ip

Vendor: National Instruments

Author(s): National Instruments
 
Full Description:
This IP provides an FPGA block for computing 20*Log(x) using a lookup table on the FPGA.  The input type is U29,12, which corresponds with the output of a length 1024 FFT computed on 18,1 data.

The design pattern can be followed if other fixed-point types are are required.