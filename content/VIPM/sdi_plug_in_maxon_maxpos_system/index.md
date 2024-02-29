---
title: "SDI Plug-in - Maxon Motor MAXPOS (System)"
externalUrl: https://www.vipm.io/package/sdi_plug_in_maxon_maxpos_system
summary: "SoftMotion Drive Interface (SDI) Plug-in for Maxon Motor MAXPOS EtherCAT Servo Drives."
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

Redirecting to https://www.vipm.io/package/sdi_plug_in_maxon_maxpos_system

Vendor: Maxon Motor

Author(s): National Instruments
 
Full Description:
SoftMotion Drive Interface (SDI) Plug-in for Maxon Motor MAXPOS EtherCAT Servo Drives. **Please read all release notes and known issues before using.**

Allows NI SoftMotion VI's and examples to control Maxon Motor MAXPOS EtherCAT servo drives. Single and multiple drives supported. Multiple 3rd party EtherCAT drives on the same EtherCAT network supported.

This package requires the following installed software:
-NI LabVIEW 2016 or later
-NI Real-Time Module 16.0 or later
-NI RIO 16.0 or later (included in CompactRIO or Industrial Controller 16.0 or later)
-NI SoftMotion 2016 or later
-NI Industrial Communications for EtherCAT 16.0 or later

This package also requires VI Package Manager 2014 or later.
VI Package Manager must be run with administrator privileges to ensure this package is installed correctly.

Notes:
- Supported MAXPOS 50/5 drive firmware version: 1.2.1
- Plug-in supports 5, 4, 2, and 1 millisecond and 250, 500 microsecond Scan Engine Periods on the RT Target
- Cyclic Synchronous Position Mode supported
- Profile Velocity Mode supported
- Cyclic Synchronous Torque Mode supported (see note below)
- Touch Probe is supported
- Find Reference types supported:
  Find Reference Move - Forward Limit
  Find Reference Move - Reverse Limit
  Find Reference Move - Index
  Find Reference Move - Home
  Find Reference Move - Absolute
  Reference Move Notes:
  - After a SoftMotion Find Reference routine, the position resets to 0 after the move is complete. It is recommended to perform a Find Reference move before calling SoftMotion Reset Position.
  - Plug-in will pass fault 0x1004 if homing error bit reported from MAXPOS drive.
  - Only DS402 Home Modes 23 and 27 are supported when performing a SoftMotion Find Home Reference Move. If a different combination of move parameters should command another homing mode, this will be overwritten with the following settings depending on the Start Search direction:
     - Move Mode 23: Start Search Forward = TRUE, Stop on Forward Edge = FALSE, Approach Forward = FALSE 
     - Move Mode 27: Start Search Forward = FALSE, Stop on Forward Edge = TRUE, Approach Forward = TRUE

- Digital I/O Support:
MAXPOS drives have 6 digital inputs and 3 digital outputs available on the I/O connector. The SDI plug-in will not write the necessary objects to reassign the digital I/O lines, and the default drive configuration is not fully compatible with SoftMotion. NI recommends the following input assignments to be made in the MAXPOS Studio software in the format 'MAXPOS Signal: MAXPOS Function: SoftMotion Function':
MAXPOS DI1: Negative Limit Switch: Reverse Limit Switch
MAXPOS DI2: Positive Limit Switch: Forward Limit Switch
MAXPOS DI3: Home Switch: Home Switch
MAXPOS DI4: Touch Probe: Touch Probe Input
MAXPOS DI5: General Purpose E: SoftMotion DI4
MAXPOS DI6: General Purpose F: SoftMotion DI5

MAXPOS DO1: General Purpose A: SoftMotion DO0
MAXPOS DO2: General Purpose B: SoftMotion DO1
MAXPOS DO3: General Purpose C: SoftMotion DO2

- Unit Scaling:
By default, the SoftMotion axes are configured without unit scaling. This means moves will be commanded in units of encoder counts. Right click on the SoftMotion Axis and use the Encoder tab to change the position scaling by setting the number of encoder counts per desired unit.

- EtherCAT Slave Configuration:
EtherCAT Distributed Clock is required on the Maxon MAXPOS drive, and it is automatically enabled by the plug-in.

- Move Mode Support:
SDI typically supports DS402 Profile Torque mode on supported drives. The MAXPOS drive does not support Profile Torque mode, so this plug-in enables Cyclic Synchronous Torque Mode.
Consult the MAXPOS operating manual for the difference between these modes. Essentially, in Cyclic mode the torque profiling is expected to be performed each EtherCAT cycle by the master. This requires writing the torque setpoint in a Timed While Loop synchronized to the Scan Engine for optimal performance.

Support:
- For support using the LabVIEW SoftMotion Module as well as configuring or deploying to your real-time target, visit support.ni.com.
- For support using Maxon MAXPOS Studio software to setup, configure, or tune the MAXPOS drive as well as wiring questions, visit support.maxonmotor.com.