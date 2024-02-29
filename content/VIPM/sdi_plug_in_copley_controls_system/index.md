---
title: "SDI Plug-in - Copley Controls (System)"
externalUrl: https://www.vipm.io/package/sdi_plug_in_copley_controls_system
summary: "SoftMotion Drive Interface (SDI) Plug-in for Copley Controls EtherCAT motor drives."
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

Redirecting to https://www.vipm.io/package/sdi_plug_in_copley_controls_system

Vendor: Copley Controls

Author(s): National Instruments
 
Full Description:
SoftMotion Drive Interface (SDI) Plug-in for Copley Controls EtherCAT motor drives. **Please read all release notes and known issues before using.**

Allows NI SoftMotion VI's and examples to control Copley Controls EtherCAT motor drives. Single and multiple drives supported. Multiple 3rd party EtherCAT drives on the same EtherCAT network supported.

This package requires the following installed software:
- NI LabVIEW 2016 or later
- NI Real-Time Module 16.0 or later
- NI RIO 16.0 or later (included in CompactRIO or Industrial Controller 16.0 or later)
- NI SoftMotion 2016 or later
- NI Industrial Communications for EtherCAT 16.0 or later

This package also requires VI Package Manager 2016 or later.
VI Package Manager must be run with administrator privileges to ensure this package is installed correctly.

Notes:
- Supports four Copley Controls EtherCAT drive variants:
  - XEL Xenus Plus Servo Drive
  - XEC Xenus Plus Compact Servo Drive
  - BEL Accelnet Plus Servo Drive
  - TEL Stepnet Plus Stepper Drive
- Minimum drive firmware version: 2.54
- Plug-in supports 500us, 1, 2, 4, and 5ms Scan Engine Periods on the RT Target
- Cyclic Synchronous Position Mode supported
- Profile Velocity Mode supported
- Profile Torque Mode supported (except for BEL stepper drive)
- Touch Probe is supported* (see note)
- Find Reference types supported:
  Find Reference Move - Forward Limit
  Find Reference Move - Reverse Limit
  Find Reference Move - Index (if encoder is equipped)
  Find Reference Move - Home*
  Find Reference Move - Absolute
  Reference Move Notes:
  - After a SoftMotion Find Reference routine with Copley Controls EtherCAT drives, the position feedback resets to 0. It is recommended to perform a Find Reference move before calling SoftMotion Reset Position.
  - Only DS402 Home Modes 23, 25, 27, and 29 are supported when performing a SoftMotion Find Home Reference Move. The Approach Forward control of the Find Home Reference move will be ignored. Regardless of its setting, the move will be overwritten with the following settings depending on starting direction:
     - Start Search Forward = TRUE, Approach Forward = FALSE
     - Start Search Forward = FALSE, Approach Forward = TRUE

- Digital I/O Support:
Copley Controls EtherCAT drives have 11 digital inputs and 3 digital outputs available on the I/O connector. Of these, 3 inputs can be used for limits and home switches, 7 inputs are general purpose or drive reprogrammable, and no outputs are general purpose. The default pin assignment is not fully functional with SoftMotion.
The SDI plug-in will not write the necessary objects to reassign the digital I/O lines. The digital inputs must be reassigned in the Copley CME 2 software. Use the Input/Output tab in CME 2 to map the desired Digital Inputs to the functions listed below to enable functionality of limit switches and home switch in SoftMotion.

Digital Inputs:
POS Limit : SoftMotion Forward Limit Switch
NEG Limit : SoftMotion Reverse Limit Switch
Home Switch : SoftMotion Home Switch
High Speed Capture: SoftMotion Position Capture
Not Configured : SoftMotion General Digital Input

- Unit Scaling:
By default, the SoftMotion axes are configured without unit scaling. This means moves will be commanded in units of encoder counts. Right click on the SoftMotion Axis and use the Encoder tab to change the position scaling by setting the number of encoder counts per desired unit.

- EtherCAT Slave Configuration:
The example project has two Copley EtherCAT drives: one BEL and one TEL. This means that you will most likely need to delete the EtherCAT slaves in the example project and discover the drives connected to your master.
Once complete, the SoftMotion Axes will need to be re-bound with the EtherCAT slaves. Right-click on the axes, and click 'Bind to Different Resource' to view the valid options in the project. If only one drive is in use, remove the second EtherCAT slave under the EtherCAT master. The second SoftMotion Axis and the Coordinate Space can be removed as well.
EtherCAT Distributed Clock is supported on Copley Controls EtherCAT drives, and it is automatically enabled by the plug-in.

- Touch Probe Support:
To enable Touch Probe, you must correctly assign the digital input in CME 2 to match the Position Capture mode in SoftMotion. The modes correspond as follows: Lo-Hi Transition = Transition to Inactive, Hi-Lo Transition = Transition to Active.

Support:
- For support using the LabVIEW SoftMotion Module as well as configuring or deploying to your real-time target, visit support.ni.com.
- For support using Copley's CME 2 software to setup, configure, or tune the Copley Controls drive as well as wiring questions, visit http://www.copleycontrols.com/Motion/Contact/index.html.