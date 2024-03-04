---
title: "NI LabVIEW FPGA Floating-Point Library"
externalUrl: https://www.vipm.io/package/ni_lib_lv_fpga_floating_point_library
date: 2017-12-20
summary: "The NI LabVIEW FPGA Floating-Point Library provides floating-point math operation IPs for LabVIEW FPGA"
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

Redirecting to https://www.vipm.io/package/ni_lib_lv_fpga_floating_point_library

Vendor: National Instruments

Author(s): National Instruments
 
Full Description:
Floating point math operations on FPGAs are important for many control and simulation applications. In LabVIEW FPGA, most math operation nodes in the **Numeric** and **Comparison** palette support the single-precision floating point data type. However, these primitive nodes cannot run inside a Single-Cycle Timed Loop to achieve higher performance. Additionally, these nodes cannot be configured for resource optimization at the cost of performance. The NI LabVIEW FPGA Floating-Point Library solves this problem by providing IP which can be optimized in the following ways:
 
1. **Resource Optimization**: You can save resources by sharing multiple instances of an IP when running outside Single-Cycle Timed Loop. Please note that there is IP in the library that does not support resource sharing. The reason for this is that they use very few resources and resource sharing is not applicable.
2. **Performance Optimization**: You can achieve better timing performance by running the IP in a Single-Cycle Timed Loop. Please note that only a subset of the IP in the library supports running in this mode.