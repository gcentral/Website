---
title: "NI Channel Emulation Example for the NI PXIe-5644R"
externalUrl: https://www.vipm.io/package/national_instruments_lib_ni_channel_emulation_example_for_the_ni_pxie_5644r
date: 2016-05-19
summary: "With a DSP-focused FPGA coupled to both RF input and RF output, the NI PXIe-5644R makes an ideal hardware platform for an RF channel emulator. This example implements inline, real-time DSP to apply arbitrary channel models to the RF data."
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
 - "real-time"
---

Redirecting to https://www.vipm.io/package/national_instruments_lib_ni_channel_emulation_example_for_the_ni_pxie_5644r

Vendor: National Instruments

Author(s): National Instruments
 
Full Description:
This example uses the NI PXIe-5644R VST to emulate the over-the-air (OTA) channel for a wireless communication link. The wireless channel emulator is based on the VST streaming sample project. By combining floating point host code and fixed point FPGA code, the channel emulator provides flexible channel profiles and models that can be easily added and/or modified. It provides two custom channel profiles which are deterministic and stochastic with multiple input multiple output (MIMO) configurations. The channel emulator example can be run as is, or extended to more sophisticated models. In addition to the channel emulation IP linked in the dependecies section, this example includes fixed-rate resamplers to convert the 120 MS/s VST I/Q rate to 100 MS/s, supporting channels up to 80 MHz wide.