---
title: "NI Power Servoing Host Example for the NI PXIe-5644R/45R/46R"
externalUrl: https://www.vipm.io/package/national_instruments_lib_power_servoing_host_example_for_the_pxie_5644r_45r
date: 2016-05-19
summary: "This example uses an FPGA-based control loop to rapidly adjust VST output power to reach a desired input power, when a load or amplifier of unknown gain is connected between the output and input."
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

Redirecting to https://www.vipm.io/package/national_instruments_lib_power_servoing_host_example_for_the_pxie_5644r_45r

Vendor: National Instruments

Author(s): National Instruments
 
Full Description:
This example is designed to level the output of an RF power amplifier by iteratively measuring its output power and adjusting the supplied stimulus. These measurements and adjustments are performed continuously, as opposed to traditional techniques which make these measurements and adjustments in series, with significant latency between each. The parallel leveling in this IP is able to achieve much faster performance than traditional methods, placing the power amplifier into a known state so that subsequent measurements can be performed, decreasing overall test time.