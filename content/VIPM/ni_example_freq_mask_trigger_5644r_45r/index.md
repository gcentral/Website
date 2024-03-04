---
title: "NI Frequency Mask Trigger Host Example for the NI 5644R-45R"
externalUrl: https://www.vipm.io/package/ni_example_freq_mask_trigger_5644r_45r
date: 2016-05-19
summary: "This example provides an NI 5644R-45R FPGA personality for performing frequency mask triggering.  The frequency mask is definable at run-time."
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

Redirecting to https://www.vipm.io/package/ni_example_freq_mask_trigger_5644r_45r

Vendor: National Instruments

Author(s): National Instruments
 
Full Description:
**Required NI Software**
NI LabVIEW 2013 or later
NI-RFSA 14.1
NI PXIe-5644R/5645R/5646R Instrument Design Libraries 14.0.0

**Supported NI Hardware**
NI PXIe-5644R
NI PXIe-5646R

The NI Frequency Mask Trigger example uses 50% overlapping, length 1024 FFTs to continuously convert IQ data to the spectral data on an NI 5644R or NI 5645R FPGA.  The spectral data is compared against a 1024 element user-definted mask.  When this maks is violated, a reference trigger is asserted which causes NI-RFSA to acquire an IQ record.

The 100% POI duration is no better than 20 us for any device configuration.