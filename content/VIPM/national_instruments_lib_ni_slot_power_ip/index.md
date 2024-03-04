---
title: "NI Slot Power IP"
externalUrl: https://www.vipm.io/package/national_instruments_lib_ni_slot_power_ip
date: 2016-05-19
summary: "Time slot power measurements are important in cellular calibration and many communications standards, such as GSM, CDMA, and LTE. These measurements involve a power in band measurement after passing the signal through a Resolution Bandwidth Filter. In this IP, this filter can be None, Flat, Gaussian, or a Root Raised Cosine filter. Then, the signal's power is measured in discrete slots. These slots can be long to give a representative average power over time, or made smaller to get a more granular signal power over time measurement."
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
 - "communication"
---

Redirecting to https://www.vipm.io/package/national_instruments_lib_ni_slot_power_ip

Vendor: National Instruments

Author(s): National Instruments
 
Full Description:
This IP provides FPGA IP and a Host API for taking time slot power measurements. The FPGA IP has a filter on the data stream that can optionally be stubbed out, or used as a Resolution Bandwidth Filter with automatically generated coefficients. After this filter, the resultant IQ signal is then measured for average power over a specified time period, with the results returned as an array of power measurements.
The Slot Power measurement is specified by the number of slots to be measured, the length in seconds of each slot, the length of the actual desired measurement, and the offset of this measurement within the slot.
The filter component IP requires an in phase clock operating at three times the sample clock frequency for correct operation. For more information, see the documentation for the NI Programmable Filter IP.
The Host API consists of three top level VIs that must be called in sequence; Two for configuration of the RF acquisition engine being used and the configuration of the Slot Power measurement, and one that takes a single set of slot power measurements, which can be called once or in a loop.