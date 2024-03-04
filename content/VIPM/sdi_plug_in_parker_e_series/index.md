---
title: "SDI Plug-in - Parker E Series"
externalUrl: https://www.vipm.io/package/sdi_plug_in_parker_e_series
date: 2018-06-26
summary: "SoftMotion Drive Interface (SDI) Plugin for Parker E Series EtherCAT Stepper Drives"
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
 - "real-time"
---

Redirecting to https://www.vipm.io/package/sdi_plug_in_parker_e_series

Vendor: Parker Hannifin

Author(s): National Instruments
 
Full Description:
SoftMotion Drive Interface (SDI) Plug-in for Parker E Series EtherCAT stepper drives. **Please read all release notes and known issues before using.**

Allows NI SoftMotion VI's and examples to control Parker E Series EtherCAT stepper drives. Single and multiple drives supported. Multiple 3rd party EtherCAT drives on the same EtherCAT network supported.

This package requires the following installed software:
-NI LabVIEW 2016 or later
-NI Real-Time Module 16.0 or later
-NI RIO 16.0 or later (included in CompactRIO or Industrial Controller 16.0 or later)
-NI SoftMotion 2016 or later
-NI Industrial Communications for EtherCAT 16.0 or later

This package also requires VI Package Manager 2016 or later.
VI Package Manager must be run with administrator privileges to ensure this package is installed correctly.

Notes:
- Minimum Parker E Series Drive Software Version: 1.00
- Plug-in supports 1, 2, 4, and 5 millisecond Scan Engine Periods on the RT Target
- Cyclic Synchronous Position Mode supported
- Profile Velocity Mode not supported
- Profile Torque Mode not supported
- Find Reference types supported:
  Find Reference Move - Forward Limit
  Find Reference Move - Reverse Limit
  Find Reference Move - Index
  Find Reference Move - Home*
  Find Reference Move - Absolute
  Reference Move Notes:
  - After a SoftMotion Find Reference routine with Parker E Series EtherCAT drives, the position resets to 0 after any reference move. It is recommended to perform a Find Reference move before calling SoftMotion Reset Position.
  - Only DS402 Home Modes 24 and 28 are supported when performing a SoftMotion Find Home Reference Move. If a different combination of move parameters should command another homing mode, this will be overwritten with the following settings depending on starting direction:
     - Move Mode 24: Start Search Forward = TRUE, Stop on Forward Edge = FALSE, Approach Forward = TRUE
     - Move Mode 28: Start Search Forward = FALSE, Stop on Forward Edge = TRUE, Approach Forward = FALSE

- Digital I/O Support:
Parker E Series drives have 10 digital inputs and 6 digital outputs available on the I/O connector. The SDI plug-in will write the necessary objects to reassign the digital I/O lines as seen below:
Parker Limit+: Forward Limit Switch		                             Parker Out1: SoftMotion DO0
Parker Limit-: Reverse Limit Switch		                              Parker Out2: SoftMotion DO1
Parker Origin: Home Switch			                                         Parker Out3: SoftMotion DO2
Parker In1: SoftMotion DI0 / Touch Probe Input 	         Parker Out4: SoftMotion DO3
Parker In2: SoftMotion DI1		                                           	Parker Out5: SoftMotion DO4
Parker In3: SoftMotion DI2			                                           Parker Out6: SoftMotion DO5
Parker In4: SoftMotion DI3
Parker In5: SoftMotion DI4
Parker In6: SoftMotion DI5
Parker In7: SoftMotion DI6

Touch Probe Note: Touch Probe 1 is assigned to Parker In1 by writing SDO 0x60D0 in the Initialize.vi of the plug-in. The drive also supports using In2, Origin, or Z-index for the touch probe source.

- Unit Scaling:
By default, the SoftMotion axes are configured without unit scaling. This means moves will be commanded in units of encoder counts. Right click on the SoftMotion Axis and use the Encoder tab to change the position scaling by setting the number of encoder counts per desired unit.

- EtherCAT Slave Configuration:
EtherCAT Distributed Clock is not currently supported on Parker E Series drives, but it is not required for operation. If the Distributed Clock is enabled on the EtherCAT Slave, the Scan Engine will not successfully transition to Active Mode.

Support:
- For support using the LabVIEW SoftMotion Module as well as configuring or deploying to your real-time target, visit support.ni.com.
- For support configuring the E Series drive as well as wiring questions, visit parkermotion.com/support.htm.