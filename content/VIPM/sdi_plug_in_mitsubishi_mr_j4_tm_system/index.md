---
title: "SDI Plug-in - Mitsubishi MR-J4-TM (System)"
externalUrl: https://www.vipm.io/package/sdi_plug_in_mitsubishi_mr_j4_tm_system
date: 2018-03-30
summary: "SoftMotion Drive Interface (SDI) Plug-in for Mitsubishi MR-J4-TM EtherCAT servo drives."
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

Redirecting to https://www.vipm.io/package/sdi_plug_in_mitsubishi_mr_j4_tm_system

Vendor: Mitsubishi Electric

Author(s): National Instruments
 
Full Description:
SoftMotion Drive Interface (SDI) Plug-in for Mitsubishi MR-J4-TM EtherCAT servo drives. **Please read all release notes and known issues before using.**

Allows NI SoftMotion VI's and examples to control Mitsubishi MR-J4-TM EtherCAT servo drives. Single and multiple drives supported. Multiple 3rd party EtherCAT drives on the same EtherCAT network supported.

This package requires the following installed software:
-NI LabVIEW 2016 or later
-NI Real-Time Module 16.0 or later
-NI RIO 16.0 or later (included in CompactRIO or Industrial Controller 16.0 or later)
-NI SoftMotion 2016 or later
-NI Industrial Communications for EtherCAT 16.0 or later

This package also requires VI Package Manager 2016 or later.
VI Package Manager must be run with administrator privileges to ensure this package is installed correctly.

Notes:
- Supported Mitsubishi MR-J4-TM Firmware Version: B0 thru B3
- Plug-in supports 1 and 2 millisecond, 250 and 500 microsecond Scan Engine Periods on the RT Target
- Cyclic Synchronous Position Mode supported
- Cyclic Synchronous Velocity Mode supported (see note below)
- Cyclic Synchronous Torque Mode supported (see note below)
- Touch Probe supported
- Find Reference types supported:
  Find Reference Move - Index
  Find Reference Move - Home
  Find Reference Move - Absolute
  Reference Move Notes:
  - Reverse and Forward Limit reference moves are not supported by the Mitsubishi MR-J4-TM drive. The plug-in will throw Fault 1 if either move type is commanded.
  - Only DS402 Home Modes 23, 24, 27, and 28 are supported when performing a SoftMotion Find Home Reference Move. The Stop on Forward Edge control of the Find Home Reference move will be ignored. Regardless of its setting, the move will be overwritten with the following settings depending on starting direction:
     - Start Search Forward = TRUE, Stop on Forward Edge = FALSE
     - Start Search Forward = FALSE, Stop on Forward Edge = TRUE
  - After a SoftMotion Find Reference routine with Mitsubishi MR-J4-TM EtherCAT drives, the position resets to 0 after any reference move. It is recommended to perform a Find Reference move before calling SoftMotion Reset Position.

- Digital I/O Support:
Mitsubishi MR-J4-TM drives have 6 digital inputs and 3 digital outputs available on the I/O connector. Home and limit switches and touch probe functionality are supported by SoftMotion. The remainder of the digital inputs and no digital outputs are accessible by SoftMotion. The default configuration of the digital input lines are listed below in the format 'Mitsubishi Drive Function: CN3 Pin: SoftMotion Function':
TPR2: Pin 1:  Unused
LSP:  Pin 2:  Forward Limit Switch
TPR1: Pin 10: Touch Probe Input
LSN:  Pin 12: Reverse Limit Switch
DOG:  Pin 19: Home Switch
EM2:  Pin 20: Unused

- Unit Scaling:
By default, the SoftMotion axes are configured without unit scaling. This means moves will be commanded in units of encoder counts. Right click on the SoftMotion Axis and use the Encoder tab to change the position scaling by setting the number of encoder counts per desired unit.
The Mitsubishi MR-J4-TM drive's counts/revolution will depend on the electronic gearing configuration. By default, the drive reports position units as 2^22 (4,194,304) counts/revolution.

- EtherCAT Slave Configuration:
This plug-in supports multiple firmware versions of the MR-J4-TM. If the EtherCAT slave in the project does not deploy correctly, delete and re-add the slave to ensure it is recognized as the correct revision.
EtherCAT Distributed Clock is supported on the Mitsubishi MR-J4-TM EtherCAT drive, and it is automatically enabled by the plug-in.

- Move Mode Support:
SDI typically supports DS402 Profile Velocity and Profile Torque modes on supported drives. The Mitsubishi MR-J4-TM EtherCAT drive does not support transitioning between Cyclic and Profile modes, so this plug-in enables Cyclic Synchronous Velocity Mode and Cyclic Synchronous Torque Mode.
Consult the Mitsubishi MR-J4-TM operating manual for the difference between these modes. Essentially, in Cyclic mode the velocity or torque profiling is expected to be performed each EtherCAT cycle by the master. This requires writing the velocity or torque setpoint in a Timed While Loop synchronized to the Scan Engine for optimal performance.

Support:
- For support using the LabVIEW SoftMotion Module as well as configuring or deploying to your real-time target, visit support.ni.com.
- For support using the MR Configurator2 software to setup, configure, or tune the Mitsubishi MR-J4-TM drive as well as wiring questions, contact Mitsubishi support.