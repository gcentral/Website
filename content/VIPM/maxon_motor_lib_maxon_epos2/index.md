---
title: "Maxon EPOS2"
externalUrl: https://www.vipm.io/package/maxon_motor_lib_maxon_epos2
date: 2016-05-19
summary: "VIs and Examples for Interfacing to EPOS2 CANopen Drives"
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
 - "I/O"
 - "NI"
 - "NI LabVIEW Tools Network"
 - "motion"
---

Redirecting to https://www.vipm.io/package/maxon_motor_lib_maxon_epos2

Vendor: Maxon Motor

Author(s): Maxon Motor
 
Full Description:
This driver provides a reusable architecture and set of VIs for communicating to the maxon motor EPOS2 positioning controller over a CANopen interface. 

The maxon EPOS2 is a modular constructed digital positioning controller. It is suitable for permanent magnet-activated brushed DC motors and electronically commutated brushless DC motors (BLDC) with incremental encoder featuring a power range from 1 W to 700 W. 

The driver includes an example of an interfacing maxon EPOS2 positioning controller with NI SoftMotion, allowing for multiaxis coordinated motion. The NI SoftMotion axis configuration is handled through an NI LabVIEW project. An example LabVIEW project with correct axis settings is available. 

The hardware layer in this driver was written to interface with the NI 9853 C Series high-speed CAN module. The driver makes it possible to replace the hardware layer to be compatible with other NI or third-party CAN controllers. 

The driver is configured to run on an NI cRIO-9073 chassis with an NI 9853 module. If you have a different reconfigurable I/O (RIO) device, select the appropriate target-specific bitfile for the CompactRIO backplane. LabVIEW 2013 bitfiles for all backplanes are available.