---
title: "NI Slot Power Host Example for the NI PXIe-5644R/45R"
externalUrl: https://www.vipm.io/package/national_instruments_lib_ni_slot_power_host_example_for_the_ni_pxie_5644r_45r
summary: "This example demonstrates how to use a modified instrument driver bitfile for RFSA/RFSG using a NI PXIe-5644R or 5645R Vector Signal Transceiver to take time slot average power measurements."
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

Redirecting to https://www.vipm.io/package/national_instruments_lib_ni_slot_power_host_example_for_the_ni_pxie_5644r_45r

Vendor: National Instruments

Author(s): National Instruments
 
Full Description:
This example demonstrates how to use a modified instrument driver bitfile for RFSA/RFSG using a NI PXIe-5644R or 5645R Vector Signal Transceiver to take time slot average power measurements. For more information about these measurements, please see the documentation for the NI Slot Power IP. By opening an RFSA session along with an FPGA session for NI Slot Power IP, slot power measurements can be taken.
Additionally, this package includes a VI that generates a sample multi-slot stepped power input signal via RFSG. This example can be modified to generate more complicated signals.
**
Note:
 After installing a VI package containing an instrument driver FPGA Extensions host example, before opening any of the host VIs, move the sub-directories installed under the example parent directory into
C:\\Program Files\\National Instruments\\NI VST\\Custom Bitfiles\\ (32-Bit Windows)
Or,
C:\\Program Files (x86)\\National Instruments\\NI VST\\Custom Bitfiles\\ (64-Bit Windows). 
The Custom Bitfiles directory may require manual creation, and this process requires administrative privileges. After moving these files, 'C:\\Program Files[ (x86)]\\National Instruments\\NI VST\\Custom Bitfiles\\[Sub-directory Name]\\Open FPGA Session.vi' should be a valid path.
**