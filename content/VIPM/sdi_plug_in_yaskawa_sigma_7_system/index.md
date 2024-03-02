---
title: "SDI Plug-in - Yaskawa Sigma-7 (System)"
externalUrl: https://www.vipm.io/package/sdi_plug_in_yaskawa_sigma_7_system
date: 2018-04-02
summary: "SoftMotion Drive Interface (SDI) Plug-in for Yaskawa Sigma-7 EtherCAT servo drives."
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

Redirecting to https://www.vipm.io/package/sdi_plug_in_yaskawa_sigma_7_system

Vendor: Yaskawa

Author(s): National Instruments
 
Full Description:
SoftMotion Drive Interface (SDI) Plug-in for Yaskawa Sigma-7 EtherCAT servo drives. **Please read all release notes and known issues before using**.

Allows NI SoftMotion VI's and examples to control Yaskawa Sigma-7 EtherCAT servo drives. Single and multiple drives supported. Multiple 3rd party EtherCAT drives on the same EtherCAT network supported.

This package requires the following installed software:
-NI LabVIEW 2016 or later
-NI Real-Time Module 16.0 or later
-NI RIO 16.0 or later (included in CompactRIO or Industrial Controller 16.0 or later)
-NI SoftMotion 2016 or later
-NI Industrial Communications for EtherCAT 16.0 or later

This package also requires VI Package Manager 2016 or later.
VI Package Manager must be run with administrator privileges to ensure this package is installed correctly.

Notes:
- Supported Yaskawa Sigma-7 Firmware Versions: 8.00, 8.03, 8.06
- Cyclic Synchronous Position Mode supported
- Profile Velocity Mode supported
- Profile Torque Mode supported
- Touch Probe supported (see note below)
- Find Reference types supported:
  Find Reference Move - Forward Limit
  Find Reference Move - Reverse Limit
  Find Reference Move - Index
  Find Reference Move - Home
  Find Reference Move - Absolute
  Reference Move Notes:
  - The Yaskawa Sigma-7 drive supports Home and Limit moves that will seek the encoder's index after finding the active edge of the limit. These differ from SoftMotion's documented move modes and correspond to DS402's move modes 1, 2, and 7-14. The SoftMotion Reference Move parameters still apply to the move, but the move will continue until the index is found.
  - After a SoftMotion Find Reference routine with Yaskawa Sigma-7 EtherCAT drives, the position resets to 0 after any reference move. It is recommended to perform a Find Reference move before calling SoftMotion Reset Position.

- Digital I/O Support:
Yaskawa Sigma-7 drives have 7 digital inputs and 4 digital outputs available on the I/O connector. The DIO can be remapped as necessary in the SigmaWin+ utility. The default configuration of the digital I/O lines are:
Yaskawa Pin 7: Forward Limit Switch                         Yaskawa Pins 3/4: Servo Alarm Output
Yaskawa Pin 8: Reverse Limit Switch	                        Yaskawa Pins 1/2: Brake Output
Yaskawa Pin 9: SoftMotion DI3		                                Yaskawa Pins 23/24: SoftMotion DO2
Yaskawa Pin 10: Touch Probe Input* 	                      Yaskawa Pins 25/26: SoftMotion DO3
Yaskawa Pin 11: Touch Probe 2 (not used)
Yaskawa Pin 12: Home Switch
Yaskawa Pin 13: SoftMotion DI0

Touch Probe Note: Yaskawa Sigma-7 drives only support the Transition to Active Capture mode, which corresponds to the positive touch probe configuration. If the SoftMotion axis is configured as Transition to Inactive Capture mode, the capture will never be completed.

- Unit Scaling:
By default, the SoftMotion axes are configured without unit scaling. This means moves will be commanded in units of encoder counts. Right click on the SoftMotion Axis and use the Encoder tab to change the position scaling by setting the number of encoder counts per desired unit.
The Yaskawa Sigma-7 drive's counts/revolution will depend on the electronic gearing configuration. For example, an encoder with a resolution of 16,777,216 counts/revolution combined with a Electronic Gear Ratio (Parameter Pn20E) of 16 will result in an EtherCAT unit of 1,048,576 counts/revolution.

- EtherCAT Slave Configuration:
This plug-in supports three firmware versions of the Sigma-7 (8.00, 8.03, 8.06). If the EtherCAT slave in the project does not deploy correctly, delete and re-add the slave to ensure it is recognized as the correct revision.
EtherCAT Distributed Clock is supported on the Sigma-7 EtherCAT drive, and it is automatically enabled by the plug-in. 

Support:
- For support using the LabVIEW SoftMotion Module as well as configuring or deploying to your real-time target, visit support.ni.com.
- For support using Yaskawa SigmaWin+ software to setup, configure, or tune the Sigma-7 drive as well as wiring questions, visit https://www.yaskawa.com/pycprd/support/support-overview