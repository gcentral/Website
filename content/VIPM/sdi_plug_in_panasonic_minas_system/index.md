---
title: "SDI Plug-in - Panasonic MINAS (System)"
externalUrl: https://www.vipm.io/package/sdi_plug_in_panasonic_minas_system
date: 2017-02-01
summary: "SoftMotion Drive Interface (SDI) Plugin for Panasonic MINAS EtherCAT Servo Drives"
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
 - "real-time"
---

Redirecting to https://www.vipm.io/package/sdi_plug_in_panasonic_minas_system

Vendor: Panasonic

Author(s): Panasonic
 
Full Description:
SoftMotion Drive Interface (SDI) Plug-in for Panasonic MINAS EtherCAT servo drives. Please read all release notes and known issues before using.

Allows NI SoftMotion VI's and examples to control Panasonic MINAS EtherCAT servo drives. Single and multiple drives supported. Multiple 3rd party EtherCAT drives on the same EtherCAT network supported.

This package requires the following installed software:
- NI LabVIEW 2016 or later
- NI Real-Time Module 16.0 or later
- NI RIO 16.0 or later (included in CompactRIO or Industrial Controller 16.0 or later)
- NI SoftMotion 2016 or later
- NI Industrial Communications for EtherCAT 16.0 or later

This package also requires VI Package Manager 2016 or later.
VI Package Manager must be run with administrator privileges to ensure this package is installed correctly.

Notes:
- Tested with Panasonic MINAS A5B with firmware 1.01
- Plug-in supports 4, 2, 1 millisecond, and 500, 250 microsecond Scan Engine Periods on the RT Target. The plug-in will pass fault 0x1001 if user programmatically sets any other scan cycle time.
- Cyclic Synchronous Position Mode supported
- Profile Velocity Mode supported
- Profile Torque Mode supported
- Find Reference types supported:
  Find Reference Move - Forward Limit
  Find Reference Move - Reverse Limit
  Find Reference Move - Index
  Find Reference Move - Home*
  Find Reference Move - Absolute
  Reference Move Notes:
  - After a SoftMotion Find Reference routine with Panasonic MINAS EtherCAT drives, the position resets to 0 after any reference move. It is recommended to perform a Find Reference move before calling SoftMotion Reset Position.
  - Only DS402 Home Modes 23 and 27 are supported when performing a SoftMotion Find Home Reference Move. If a different combination of move parameters should command another homing mode, this will be overwritten with the following settings depending on starting direction:
     - Move Mode 23: Start Search Forward = TRUE, Stop on Forward Edge = FALSE, Approach Forward = FALSE 
     - Move Mode 27: Start Search Forward = FALSE, Stop on Forward Edge = TRUE, Approach Forward = TRUE

- Digital I/O Support:
Panasonic MINAS A5B drives have 8 digital inputs and 3 digital outputs available on the X4 I/O connector. Of these, 3 inputs can be used for limits and home switches, 2 inputs are general purpose, and 1 output is general purpose. The default pin assignment as per the drive documentation is not fully functioal with SoftMotion.
The correct assignments in the format 'Pin number : Drive function assignment : SoftMotion function assignment' are shown below. The SDI plug-in will not write the necessary objects to reassign the digital I/O lines. These inputs must be reassigned in the PANATERM software.
Digital Inputs:
MINAS SI1 : SI-MON5 : SoftMotion DI7
MINAS SI2 : Invalid : Unused
MINAS SI3 : Invalid : Unused
MINAS SI4 : Invalid : Unused
MINAS SI5 : HOME : Home Switch [Or EXT1 : Touch Probe, see note below]
MINAS SI6 : POT : Forward Limit Switch
MINAS SI7 : NOT : Reverse Limit Switch
MINAS SI8 : SI-MON4 : SoftMotion DI6	

Digital Outputs:
MINAS SO1 : BRK-OFF : Unused
MINAS SO2 : EX-OUT1 : SoftMotion DO0
MINAS SO3 : ALM : Unused

Touch Probe Note: Touch Probe 1 can only be assigned to EXT1 on input SI5. This is also the required input for Home. Due to this, touch probe can only be configured on the MINAS A5B when a Home switch is not in use.

- Unit Scaling:
By default, the SoftMotion axes are configured without unit scaling. The included example project has been configured as 1,048,576 (2^20) counts per revolution to match the scaling of the drive.
If the unit scaling is configured differently on the drive, this value must be updated. Right click on the SoftMotion Axis and use the Encoder tab to change the position scaling by setting the number of counts per desired unit.

- EtherCAT Slave Configuration:
Each Panasonic MINAS A5B drive variant is identified by a separate device ID value in the ESI (.xml) file for the EtherCAT description. This means that unless you will most likely need to delete the EtherCAT slaves in the example project and discover the drives connected to your master.
Once complete, the SoftMotion Axes will need to be re-bound with the EtherCAT slaves. Right-click on the axes, and click 'Bind to Different Resource' to view the valid options in the project.

Support:
- For support using the LabVIEW SoftMotion Module as well as configuring or deploying to your real-time target, visit support.ni.com.
- For support using Panasonic's PANATERM software to setup, configure, or tune the Panasonic MINAS drive as well as wiring questions, visit https://industrial.panasonic.com/ww/contact-us.