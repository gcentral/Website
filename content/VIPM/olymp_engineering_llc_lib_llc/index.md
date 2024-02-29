---
title: "LLC"
externalUrl: https://www.vipm.io/package/olymp_engineering_llc_lib_llc
summary: "**LossLess Coding Library for LabVIEW FPGA**

Lossless data compression is a class of data compression algorithms that allows the exact original data to be reconstructed from the compressed data."
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

Redirecting to https://www.vipm.io/package/olymp_engineering_llc_lib_llc

Vendor: OLYMP Engineering LLC

Author(s): Razmik Gharibyan
 
Full Description:
**LossLess Coding Library for LabVIEW FPGA**

Lossless data compression is a class of data compression algorithms that allows the exact original data to be reconstructed from the compressed data. Lossless compression is used when it is important that the original and the decompressed data be identical, or when no assumption can be made on whether certain deviation is uncritical. Typical applications include data storage and transmission.
The following LabVIEW FPGA IP core allows lossless data compression based on the modified Lempel-Ziv-Ross-Williams-1 algorithm. Its focus is on high throughput of uncompressed data at the expense of a somewhat lower compression ratio. Two byte of uncompressed data can be processed at every clock cycle. 
An example with coder and decoder is included for one channel and two channel compression (suitable for RF Data streaming). The core is fully pipelined to allow high clock speeds. 100MHz can easily be achieved on 796xR and 797xR FPGA's. This results in a maximum compression throughput of almost 200MBytes/sec. 
Most of other algorithms are suitable for text or audio compression but there are no tools to compress test signals especially in streaming applications.
In addition, the following algorithm has zero delay, which means for every input data there is always an output data (playback).


Software requirements: LabVIEW (2014 or later), LabVIEW FPGA Module (2014 or later), NI-RIO Device Driver (14.5.0 or later),  Module Modulation Toolkit (4.4 or later), RFSA Toolkit (14.5 or later).

Hardware requirements:NI PXIe-5663, NI PXIe-5665, NI PIXe-5668R ,  NI PXIe-7965R , NI PXIe-7966R.