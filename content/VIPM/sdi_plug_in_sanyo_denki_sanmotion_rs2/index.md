---
title: "SDI Plug-in - Sanyo Denki SANMOTION RS2"
externalUrl: https://www.vipm.io/package/sdi_plug_in_sanyo_denki_sanmotion_rs2
date: 2018-03-30
summary: "SoftMotion Drive Interface (SDI) Plug-in for Sanyo Denki SANMOTION RS2 EtherCAT servo drives."
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

Redirecting to https://www.vipm.io/package/sdi_plug_in_sanyo_denki_sanmotion_rs2

Vendor: Sanyo Denki

Author(s): National Instruments
 
Full Description:
SoftMotion Drive Interface (SDI) Plug-in for Sanyo Denki SANMOTION RS2 EtherCAT servo drives. **Please read all release notes and known issues before using.**

Allows NI SoftMotion VI's and examples to control Sanyo Denki SANMOTION RS2 EtherCAT servo drives. Single and multiple drives supported. Multiple 3rd party EtherCAT drives on the same EtherCAT network supported.

This package requires the following installed software:
-NI LabVIEW 2016 or later
-NI Real-Time Module 16.0 or later
-NI RIO 16.0 or later (included in CompactRIO or Industrial Controller 16.0 or later)
-NI SoftMotion 2016 or later
-NI Industrial Communications for EtherCAT 16.0 or later

This package also requires VI Package Manager 2016 or later.
VI Package Manager must be run with administrator privileges to ensure this package is installed correctly.

Notes:
- Supports Sanyo Denki SANMOTION R ADVANCED EtherCAT drives (also referred to as RS2)
- Supported Sanyo Denki SANMOTION RS2 Firmware Version: 58.4.05
- Plug-in supports 1, 2, 4, and 5 millisecond, 250 and 500 microsecond Scan Engine Periods on the RT Target
- Cyclic Synchronous Position Mode supported
- Profile Velocity Mode supported
- Profile Torque Mode supported
- Touch Probe supported
- Find Reference types supported:
  Find Reference Move - Forward Limit
  Find Reference Move - Reverse Limit
  Find Reference Move - Index
  Find Reference Move - Home
  Find Reference Move - Absolute
  Reference Move Notes:
  - The Sanyo Denki SANMOTION RS2 EtherCAT drive supports Home moves that will seek the encoder's index after finding the active edge of the limit. These differ from SoftMotion's documented home move modes and correspond to DS402's homing modes 7-14.
  - After a SoftMotion Find Reference routine with Sanyo Denki SANMOTION RS2 EtherCAT drives, the position resets to 0 after any reference move. It is recommended to perform a Find Reference move before calling SoftMotion Reset Position.

- Digital I/O Support:
Sanyo Denki SANMOTION RS2 EtherCAT have 8 digital inputs and 2 digital outputs available on the I/O connector. Home and limit switches and touch probe functionality are supported by SoftMotion. The remainder of the digital inputs and both digital outputs are general-purpose and accessible by SoftMotion.
The default configuration of the digital input lines are not fully compatible with SoftMotion. Use the SANMOTION Motor Setup software to map the inputs as listed below in the format 'Sanyo Denki SANMOTION RS2 EtherCAT: CN2 Signal: SoftMotion Function':
Home Switch:      CONT1: Home Switch
Touch Probe 2:   CONT2: Touch Probe Input
Positive Limit:      CONT3: Forward Limit Switch
Negative Limit:    CONT4: Reverse Limit Switch

Safety Input Support:
Safety inputs HWGOFF1 and HWGOFF2 are reported as SoftMotion Digital Inputs 6-7. If these values are False, then the SDI Plug-in will cause the axis to fault.

Generic DIO Support:
Digital Inputs CONT1-6: SoftMotion Digital Inputs 0-5
Digital Outputs OUT1-2: SoftMotion Digital Outputs 0-1

Touch Probe note:
The Sanyo Denki SANMOTION RS2 EtherCAT drive is pre-configured to use the CONT1 digital input for both the home switch and Touch Probe 1. This plug-in uses Touch Probe 2 which is mapped to the CONT2 digital input for SoftMotion's Position Capture function.

- Unit Scaling:
By default, the SoftMotion axes are configured without unit scaling. This means moves will be commanded in units of encoder counts. Right click on the SoftMotion Axis and use the Encoder tab to change the position scaling by setting the number of encoder counts per desired unit.

- EtherCAT Slave Configuration:
EtherCAT Distributed Clock is supported on the Sanyo Denki SANMOTION RS2 EtherCAT drive, but it is not automatically enabled by the plug-in.

Support:
- For support using the LabVIEW SoftMotion Module as well as configuring or deploying to your real-time target, visit support.ni.com.
- For support using the SANMOTION Motor Setup software to setup, configure, or tune the Sanyo Denki SANMOTION RS2 EtherCAT drive as well as wiring questions, contact Sanyo Denki support.