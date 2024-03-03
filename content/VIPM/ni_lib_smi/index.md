---
title: "System Management and Information (SMI)"
externalUrl: https://www.vipm.io/package/ni_lib_smi
date: 2016-09-16
summary: "The System Management and Information (SMI) library provides functions for the detection of network devices and the management of NI RIO hardware."
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

Redirecting to https://www.vipm.io/package/ni_lib_smi

Vendor: National Instruments

Author(s): NI Systems Engineering
 
Full Description:
The System Management and Information (SMI) library provides functions for the detection of network devices and the management of NI RIO hardware. Device detection and system configuration management is implemented by encapsulating the System Configuration (SysConfig) API, and supplemented with RIO target-specific module detection code. For example, SMI network detection encapsulates the SysConfig Find Hardware.vi to retrieve information about detected devices. C series modules in RIO chassis are detected by deploying a target specific FPGA bitfile to query module EEPROM memory for identification information.
C  Series Module Detection

In order to detect C Series modules in a RIO target, such as CompactRIO, the SMI library requires that the C Series Module Detection component is installed on the RIO real-time target. This component may be installed through custom software installation in NI MAX, or through programmatic use of SysConfig (Functions>>Measurement>>System Configuration>>Software Management>>Install.vi). Installing the C Series Module Detection component will install missing SMI component dependencies (NI-RIO, System Configuration, etc.), as well as target specific FPGA bitfiles on the RIO target..

In order for the C Series Module Detection component to appear in the LabVIEW Real-Time Software Wizard (NI MAX >> Target >> Software [right-click] >> Add/Remove Software) 'Custom software installation' features list, the SMI installation will copy a folder containing the component to the User Components directory: C:\\Program Files (x86)\\National Instruments\\RT Images\\User Components

Note: The User Components directory is a read-only directory, and some versions of the Windows OS will prevent VI Package Manager from copying files to this location during installation. If a user dialog message is displayed during installation of the SMI package stating that the component could not be copied to the intended system directory, the following (manual) steps will need to be taken to complete installation of SMI:

   1. Navigate to the temporary CDF component installation location (<LabVIEW>\\vi.lib\\NI\\SMI\\cdf\\C Series Module     Detection).
   2. Copy the C Series Module Detection folder(Ctrl-C).
   3. Navigate to the User Components directory (C:\\Program Files (x86)\\National Instruments\\RT Images\\User Components)
   4. Paste the C Series Module Detection folder inside of the User Components directory.

The NI-RIO device driver version will determine which NI hardware is supported for certain SMI features.

Supported Integrated Controller and Chassis:
cRIO-9030, cRIO-9031, cRIO-9033, cRIO-9034, cRIO-9035, cRIO-9036, cRIO-9038, cRIO-9039, cRIO-9063, cRIO-9064, cRIO-9065, cRIO-9066, cRIO-9067, cRIO-9068, cRIO-9081, and cRIO-9082.

Supported Embedded Controllers:
cRIO-9024

Supported Modular Chassis:
cRIO-9111, cRIO-9112, cRIO-9113, cRIO-9114, cRIO-9116, and cRIO-9118.

Expansion I/O:
9146, 9147, 9149, 9154, 9155, 9157, and 9159.

Supported Single-Board RIO controllers:
sbRIO-9601, sbRIO-9602, sbRIO-9607, sbRIO-9611, sbRIO-9612, sbRIO-9627, sbRIO-9631, sbRIO-9632, sbRIO-9637, sbRIO-9641, and sbRIO-9642.