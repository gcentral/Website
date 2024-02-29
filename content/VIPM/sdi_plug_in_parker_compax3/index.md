---
title: "SDI Plug-in - Parker Compax3"
externalUrl: https://www.vipm.io/package/sdi_plug_in_parker_compax3
summary: "SoftMotion Drive Interface (SDI) Plug-in for Parker Compax3 EtherCAT servo drives."
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

Redirecting to https://www.vipm.io/package/sdi_plug_in_parker_compax3

Vendor: Parker Hannifin

Author(s): National Instruments
 
Full Description:
SoftMotion Drive Interface (SDI) Plug-in for Parker Compax3 EtherCAT servo drives. **Please read all release notes and known issues before using.**

Allows NI SoftMotion VI's and examples to control Parker Compax3 EtherCAT servo drives. Single and multiple drives supported. Multiple 3rd party EtherCAT drives on the same EtherCAT network supported.

This package requires the following installed software:
- NI LabVIEW 2016 or later
- NI Real-Time Module 16.0 or later
- NI RIO 16.0 or later (included in CompactRIO or Industrial Controller 16.0 or later)
- NI SoftMotion 2016 or later
- NI Industrial Communications for EtherCAT 16.0 or later

This package also requires VI Package Manager 2016 or later.
VI Package Manager must be run with administrator privileges to ensure this package is installed correctly.

Notes:
- Minimum firmware version: 2017R09-76
- Plug-in supports 5, 4, 2, and 1 millisecond and 500 microsecond Scan Engine Periods on the RT Target
- Cyclic Synchronous Position Mode supported
- Profile Velocity Mode supported
- Profile Torque Mode is NOT supported
- Touch Probe is NOT supported
- Find Reference types supported:
  Find Reference Move - Forward Limit
  Find Reference Move - Reverse Limit
  Find Reference Move - Index
  Find Reference Move - Home
  Find Reference Move - Absolute
  Reference Move Notes:
  - After a SoftMotion Find Reference routine with Parker Compax3 EtherCAT drives, the position resets to 0 after completing a reference move. It is recommended to perform a Find Reference move before calling SoftMotion Reset Position.

- Digital I/O Support:
Parker Compax3 drives have 8 digital inputs and 4 digital outputs available on the X12 I/O connector. Of these, 3 inputs are used for limits and home switches, 5 inputs are general purpose, and 4 outputs are general purpose. The default pin assignment as per the drive documentation fully functional with SoftMotion.
The assignments in the format 'I/O Line : SoftMotion function assignment' are shown below. Note that the 'Device I/O Assignment' setting in C3 ServoManager2 must be set to Free for the general purpose inputs and outputs to be accessible from SoftMotion.

Digital Inputs:			                            Digital Outputs:
I0 : SoftMotion DI0                       O0 : SoftMotion DO0
I1 : SoftMotion DI1		                     O1 : SoftMotion DO1
I2 : SoftMotion DI2	                     	O2 : SoftMotion DO2
I3 : SoftMotion DI3		                     O3 : SoftMotion DO3
I4 : SoftMotion DI4
I5 : Reverse Limit Switch
I6 : Forward Limit Switch
I7 : Home Switch

- Unit Scaling:
By default, the SoftMotion axes are configured without unit scaling. This means moves will be commanded in units of encoder counts. Right click on the SoftMotion Axis and use the Encoder tab to change the position scaling by setting the number of encoder counts per desired unit.
The Parker Compax3 drive's counts/revolution value will depend on the drive configuration in Parker's C3 ServoManager2 software. For compatibility, the 'Unit of Travel' must be set to 'Increments', and the 'Travel distance per revolution' should be set to the encoder's resolution.

- EtherCAT Slave Configuration
EtherCAT Distributed Clock is supported on Parker Compax3 EtherCAT drives with firmware version 2017R09-76 and newer. The plug-in automatically enables the Distributed Clock to support Scan Enginer periods of faster than 5ms, so this plug-in is not compatible with older Compax3 firmware versions.

Support:
- For support using the LabVIEW SoftMotion Module as well as configuring or deploying to your real-time target, visit support.ni.com.
- For support using Parker's C3 ServoManager2 software to setup, configure, or tune the Parker Compax3 drive as well as wiring questions, visit parkermotion.com/support.htm.