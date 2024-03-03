---
title: "NI Slot Power IP"
externalUrl: https://www.vipm.io/package/national_instruments_lib_ni_slot_power_ip
date: 2016-05-19
summary: "This IP provides FPGA IP and a Host API for taking time slot power measurements."
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

Redirecting to https://www.vipm.io/package/national_instruments_lib_ni_slot_power_ip

Vendor: National Instruments

Author(s): National Instruments
 
Full Description:
This IP provides FPGA IP and a Host API for taking time slot power measurements. The FPGA IP has a filter on the data stream that can optionally be stubbed out, or used as a Resolution Bandwidth Filter with automatically generated coefficients. After this filter, the resultant IQ signal is then measured for average power over a specified time period, with the results returned as an array of power measurements.
The Slot Power measurement is specified by the number of slots to be measured, the length in seconds of each slot, the length of the actual desired measurement, and the offset of this measurement within the slot.
The filter component IP requires an in phase clock operating at three times the sample clock frequency for correct operation. For more information, see the documentation for the NI Programmable Filter IP.
The Host API consists of three top level VIs that must be called in sequence; Two for configuration of the RF acquisition engine being used and the configuration of the Slot Power measurement, and one that takes a single set of slot power measurements, which can be called once or in a loop.