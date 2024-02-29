---
title: "SDI Plug-in - Parker P Series (System)"
externalUrl: https://www.vipm.io/package/sdi_plug_in_parker_p_series_system
summary: "SoftMotion Drive Interface (SDI) Plug-in for Parker P Series EtherCAT servo drives."
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

Redirecting to https://www.vipm.io/package/sdi_plug_in_parker_p_series_system

Vendor: Parker Hannifin

Author(s): National Instruments
 
Full Description:
SoftMotion Drive Interface (SDI) Plug-in for Parker P Series EtherCAT servo drives. **Please read all release notes and known issues before using.**

Allows NI SoftMotion VI's and examples to control Parker P Series EtherCAT servo drives. Single and multiple drives supported. Multiple 3rd party EtherCAT drives on the same EtherCAT network supported.

This package requires the following installed software:
-NI LabVIEW 2016 or later
-NI Real-Time Module 16.0 or later
-NI RIO 16.0 or later (included in CompactRIO or Industrial Controller 16.0 or later)
-NI SoftMotion 2016 or later
-NI Industrial Communications for EtherCAT 16.0 or later

This package also requires VI Package Manager 2016 or later.
VI Package Manager must be run with administrator privileges to ensure this package is installed correctly.

Notes:
- Supported Parker P Series Drive Software Versions: 0.90 and 0.93
- Plug-in supports 5, 4, 2, and 1 millisecond and 500 microsecond Scan Engine Periods on the RT Target
- Cyclic Synchronous Position Mode supported
- Profile Velocity Mode supported
- Profile Torque Mode supported
- Touch Probe is supported
- Find Reference types supported:
  Find Reference Move - Forward Limit
  Find Reference Move - Reverse Limit
  Find Reference Move - Index
  Find Reference Move - Home
  Find Reference Move - Absolute
  Reference Move Notes:
  - The Parker P Series drive supports Home and Limit moves that will seek the encoder's index after finding the active edge of the limit. These differ from SoftMotion's documented move modes and correspond to DS402's move modes 1, 2, and 7-14.
  - After a SoftMotion Find Reference routine with Parker P Series EtherCAT drives, the position resets to 0 after any reference move. It is recommended to perform a Find Reference move before calling SoftMotion Reset Position.

- Digital I/O Support:
Parker P Series drives have 8 digital inputs and 4 digital outputs available on the I/O connector. The SDI plug-in will not write the necessary objects to reassign the digital I/O lines, and the default drive configuration is not fully compatible with SoftMotion. NI recommends the following input assignments to be made in the Parker Drive Support Tool in the format 'Parker Signal: Parker Function: SoftMotion Function':
Parker DI1: POT: Forward Limit Switch
Parker DI2: NOT: Reverse Limit Switch
Parker DI3: HOME: Home Switch
Parker DI4: PROBE1: Touch Probe Input
Parker DI5: Not Assigned: SoftMotion DI4
Parker DI6: Not Assigned: SoftMotion DI5
Parker DI7: Not Assigned: SoftMotion DI6
Parker DI8: Not Assigned: SoftMotion DI7

Parker DO1: Not Assigned: SoftMotion DO0
Parker DO2: Not Assigned: SoftMotion DO1
Parker DO3: Not Assigned: SoftMotion DO2
Parker DO4: Not Assigned: SoftMotion DO3

- Unit Scaling:
By default, the SoftMotion axes are configured without unit scaling. This means moves will be commanded in units of encoder counts. Right click on the SoftMotion Axis and use the Encoder tab to change the position scaling by setting the number of encoder counts per desired unit.
Parker P Series drives report the encoder counts per revolution in object 0x2002 which can be found in the Parker Drive Support Tool. To command moves in revolutions and revolutions per second, use this value as the SoftMotion encoder counts per unit in the Axis Configuration dialog.

- EtherCAT Slave Configuration
This plug-in supports several software versions of the Parker P Series drive. If the EtherCAT slave in the project does not deploy correctly, delete and re-add the slave to ensure it is recognized as the correct revision.
Parker P Series drives have optimal performance when using the EtherCAT Distributed Clock. The plug-in automatically enables the EtherCAT Distributed Clock for axes bound to P Series drives.

Support:
- For support using the LabVIEW SoftMotion Module as well as configuring or deploying to your real-time target, visit support.ni.com.
- For support using Parker Drive Support Tool software to setup, configure, or tune the P Series drive as well as wiring questions, visit parkermotion.com/support.htm.