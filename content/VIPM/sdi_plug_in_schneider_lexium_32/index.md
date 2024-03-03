---
title: "SDI Plug-in - Schneider Lexium 32"
externalUrl: https://www.vipm.io/package/sdi_plug_in_schneider_lexium_32
date: 2018-04-04
summary: "SoftMotion Drive Interface (SDI) Plug-in for Schneider Lexium 32 EtherCAT servo drives."
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

Redirecting to https://www.vipm.io/package/sdi_plug_in_schneider_lexium_32

Vendor: Schneider Electric

Author(s): National Instruments
 
Full Description:
SoftMotion Drive Interface (SDI) Plug-in for Schneider Lexium 32 EtherCAT servo drives. **Please read all release notes and known issues before using.**

Allows NI SoftMotion VI's and examples to control Schneider Lexium 32 EtherCAT servo drives. Single and multiple drives supported. Multiple 3rd party EtherCAT drives on the same EtherCAT network supported.

This package requires the following installed software:
-NI LabVIEW 2016 or later
-NI Real-Time Module 16.0 or later
-NI RIO 16.0 or later (included in CompactRIO or Industrial Controller 16.0 or later)
-NI SoftMotion 2016 or later
-NI Industrial Communications for EtherCAT 16.0 or later

This package also requires VI Package Manager 2016 or later.
VI Package Manager must be run with administrator privileges to ensure this package is installed correctly.

Notes:
- Supported drive variants: Lexium 32M and Lexium 32i
- Supported Schneider Lexium 32M Firmware Version: V1.26
- Supported Schneider Lexium 32M Firmware Version: V1.06
- Plug-in supports 5, 4, 2, and 1 millisecond and 500 microsecond Scan Engine Periods on the RT Target
- Cyclic Synchronous Position Mode supported
- Cyclic Synchronous Velocity Mode supported (see note below)
- Cyclic Synchronous Torque Mode supported (see note below)
- Touch Probe is not supported
- Find Reference types supported:
  Find Reference Move - Forward Limit
  Find Reference Move - Reverse Limit
  Find Reference Move - Index
  Find Reference Move - Home
  Find Reference Move - Absolute
  Reference Move Notes:
  - After a SoftMotion Find Reference routine with Schneider Lexium 32 EtherCAT drives, the position resets to 0 after any reference move. It is recommended to perform a Find Reference move before calling SoftMotion Reset Position.

- Lexium 32M Digital I/O Support:
Schneider Lexium 32M drives have 6 digital inputs and 3 digital outputs available on the I/O connector. The default drive configuration for digital inputs is fully compatible with SoftMotion. The SDI plug-in will read the necessary objects to determine the digital input assignments. The digital outputs on the Lexium 32 Mdrive are not supported.
Lexium 32M DI0: SoftMotion DI0
Lexium 32M DI1: Home Switch
Lexium 32M DI2: Forward Limit Switch
Lexium 32M DI3: Reverse Limit Switch
Lexium 32M DI4: Not Assigned: SoftMotion DI4
Lexium 32M DI5: Not Assigned: SoftMotion DI5

- Lexium 32i Digital I/O Support:
Schneider Lexium 32i integrated servo drives have 4 digital inputs and 2 digital outputs available on the I/O connector. The default drive configuration for digital inputs is fully compatible with SoftMotion. The SDI plug-in will read the necessary objects to determine the digital input assignments. The digital outputs on the Lexium 32i drive are not supported.
Lexium 32M DI0: Forward Limit Switch
Lexium 32M DI1: Reverse Limit Switch
Lexium 32M DI2: Home Switch
Lexium 32M DI3: SoftMotion DI3

- Unit Scaling:
By default, the SoftMotion axes are configured without unit scaling. This means moves will be commanded in units of encoder counts. Right click on the SoftMotion Axis and use the Encoder tab to change the position scaling by setting the number of encoder counts per desired unit.
Schneider Lexium 32 drives report the encoder counts per revolution in object 0x3006:7 and 0x3006:8 which can be found in the configuration software or by SDO. To command moves in revolutions and revolutions per second, use this value as the SoftMotion encoder counts per unit in the Axis Configuration dialog.

- EtherCAT Slave Configuration
The example project has two Schneider Lexium 32M drives by default. If using the Lexium 32i integrated servo drive, you will need to delete the EtherCAT slaves in the example project and discover the drives connected to your master.
Once complete, the SoftMotion Axes will need to be re-bound with the EtherCAT slaves. Right-click on the axes, and click 'Bind to Different Resource' to view the valid options in the project. If only one drive is in use, remove the second EtherCAT slave under the EtherCAT master. The second SoftMotion Axis and the Coordinate Space can be removed as well.
Schneider Lexium 32 drives have optimal performance when using the EtherCAT Distributed Clock. The plug-in automatically enables the EtherCAT Distributed Clock for axes bound to Schneider Lexium 32 drives.

- Move Mode Support:
SDI typically supports DS402 Profile Velocity and Profile Torque modes on supported drives. The Schneider Lexium 32 EtherCAT drive does not support transitioning between Cyclic and Profile modes, so this plug-in enables Cyclic Synchronous Velocity Mode and Cyclic Synchronous Torque Mode.
Consult the Schneider Lexium 32 operating manual for the difference between these modes. Essentially, in Cyclic mode the velocity or torque profiling is expected to be performed each EtherCAT cycle by the master. This requires writing the velocity or torque setpoint in a Timed While Loop synchronized to the Scan Engine for optimal performance.

Support:
- For support using the LabVIEW SoftMotion Module as well as configuring or deploying to your real-time target, visit support.ni.com.
- For support using Lexium32 DTM software to setup, configure, or tune the Schneider Lexium 32 drive as well as wiring questions, contact Schneider Electric support.