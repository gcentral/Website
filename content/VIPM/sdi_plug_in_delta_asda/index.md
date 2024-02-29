---
title: "SDI Plug-in - Delta ASDA"
externalUrl: https://www.vipm.io/package/sdi_plug_in_delta_asda
summary: "SoftMotion Drive Interface (SDI) Plug-in for Delta ASDA-A2-E servo drives."
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

Redirecting to https://www.vipm.io/package/sdi_plug_in_delta_asda

Vendor: Delta Products Corporation

Author(s): National Instruments
 
Full Description:
SoftMotion Drive Interface (SDI) Plug-in for Delta ASDA-A2-E servo drives. **Please read all release notes and known issues before using**.

This package requires the following installed software:
-NI LabVIEW 2016 or later
-NI Real-Time Module 16.0 or later
-NI RIO 16.0 or later (included in CompactRIO or Industrial Controller 16.0 or later)
-NI SoftMotion 16.0 or later
-NI Industrial Communications for EtherCAT 16.0 or later

This package also requires VI Package Manager 2014 or later.
VI Package Manager must be run with administrator privileges to ensure this package is installed correctly.

Notes:
- Supported Delta ASDA-A2-E firmware version: 1.643.366
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
  - After a SoftMotion Find Reference routine with Delta ASDA-A2-E drives, the position resets to 0 after any reference move. It is recommended to perform a Find Reference move before calling SoftMotion Reset Position.

- Digital I/O Support:
Delta ASDA-A2-E drives have 14 digital inputs and 5 digital outputs available on the I/O connectors. Home and limit switches and touch probe functionality are supported by SoftMotion. The remainder of the digital inputs and no digital outputs are accessible by SoftMotion. The digital inputs must be appropriately assigned in Delta ASDA-Soft to function correctly with SoftMotion.
Delta ASDA-Soft Function correlation to SoftMotion Function:
0x22: Reverse Inhibit Limit: Reverse Limit Switch
0x23: Forward Inhibit Limit: Forward Limit Switch
0x24: Homing Origin: Home Switch

- Unit Scaling:
By default, the SoftMotion axes are configured without unit scaling. The example project has been configured as 1,280,000 counts per revolution to match the default scaling of the drive. Right click on the SoftMotion Axis and use the Encoder tab to change the position scaling by setting the number of counts per desired unit.
The Delta ASDA-A2-E drive's counts/revolution will depend on the electronic gearing configuration. For unit consistency, the drive parameters P1-44 (numerator) and P1-45 (denominator) are set to 1, which always results in 1,280,000 counts per revolution.

- EtherCAT Slave Configuration:
EtherCAT Distributed Clock is supported on the Delta ASDA-A2-E EtherCAT drive, and it is automatically enabled by the plug-in.

Support:
- For support using the LabVIEW SoftMotion Module as well as configuring or deploying to your real-time target, visit support.ni.com.
- For support using the Delta ASDA-Soft software to setup, configure, or tune the Delta ASDA-A2-E drive as well as wiring questions, contact Delta support.