---
title: "SDI Plug-in - Elmo Gold"
externalUrl: https://www.vipm.io/package/sdi_plug_in_elmo_gold
summary: "SoftMotion Drive Interface (SDI) Plug-in for Elmo Gold EtherCAT motor drives."
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

Redirecting to https://www.vipm.io/package/sdi_plug_in_elmo_gold

Vendor: Elmo Motion Control

Author(s): National Instruments
 
Full Description:
SoftMotion Drive Interface (SDI) Plug-in for Elmo Gold EtherCAT motor drives. **Please read all release notes and known issues before using.**

Allows NI SoftMotion VI's and examples to control Elmo Gold EtherCAT motor drives. Single and multiple drives supported. Multiple 3rd party EtherCAT drives on the same EtherCAT network supported.

This package requires the following installed software:
- NI LabVIEW 2016 or later
- NI Real-Time Module 16.0 or later
- NI RIO 16.0 or later (included in CompactRIO or Industrial Controller 16.0 or later)
- NI SoftMotion 2016 or later
- NI Industrial Communications for EtherCAT 16.0 or later

This package also requires VI Package Manager 2016 or later.
VI Package Manager must be run with administrator privileges to ensure this package is installed correctly.

Notes:
- Supported Elmo Gold firmware versions: 01.01.11.00 and 01.01.11.09
- Plug-in supports 2, 4, 6, and 8 millisecond Scan Engine Periods on the RT Target
- Cyclic Synchronous Position Mode supported
- Profile Velocity Mode supported
- Profile Torque Mode supported
- Touch Probe supported for index pulse only
- Find Reference types supported:
  Find Reference Move - Forward Limit
  Find Reference Move - Reverse Limit
  Find Reference Move - Index
  Find Reference Move - Home*
  Find Reference Move - Absolute
  Reference Move Notes:
  - After a SoftMotion Find Reference routine with Elmo Gold EtherCAT drives, the position resets to 0 after completing a reference move. It is recommended to perform a Find Reference move before calling SoftMotion Reset Position.
  - Elmo Gold drives do not map home and limit switch inputs by default. In order to use these this signals, the drive must be configured as described in the Digital I/O Support section below.
  - DS402 Home Modes 24 and 28 are not supported when performing a SoftMotion Find Home Reference Move. If the below combinations of reference move parameters are commanded, this will be overwritten with the following settings depending on starting direction:
     - Move Mode 24: Start Search Forward = TRUE, Stop on Forward Edge = FALSE, Approach Forward = TRUE
          - Becomes: Start Search Forward = TRUE, Stop on Forward Edge = TRUE, Approach Forward = TRUE
     - Move Mode 28: Start Search Forward = FALSE, Stop on Forward Edge = TRUE, Approach Forward = FALSE
          - Becomes: Start Search Forward = FALSE, Stop on Forward Edge = FALSE, Approach Forward = FALSE

- Digital I/O Support:
Elmo Gold drives have 6 digital inputs and 4 digital outputs available on the Port C connector. Of these, 3 inputs can be used for limits and home switches, the remaining inputs are general purpose, and all 4 outputs are general purpose. The default pin assignment in EASII is not fully functional with SoftMotion, as all outputs are configured as General Purpose.
The assignments in the format 'I/O Line : SoftMotion function assignment' are shown below. To enable home, forward limit, and reverse limit switches, use EASII to map each function to the desired input. This menu can be found under Drive Setup and Motion >> Application Tools >> Inputs and Outputs.

Digital Inputs:				        	        	    Digital Outputs:
Input 1 : SoftMotion DI0	        Output 1 : SoftMotion DO0
Input 2 : SoftMotion DI1		       Output 2 : SoftMotion DO1
Input 3 : SoftMotion DI2	        Output 3 : SoftMotion DO2
Input 4 : SoftMotion DI3	        Output 4 : SoftMotion DO3
Input 5 : SoftMotion DI4
Input 6 : SoftMotion DI5

- Unit Scaling:
By default, the SoftMotion axes are configured without unit scaling. This means moves will be commanded in units of encoder counts. Right click on the SoftMotion Axis and use the Encoder tab to change the position scaling by setting the number of encoder counts per desired unit. The Elmo Gold drive's counts/revolution value will depend on the drive configuration in Elmo's Elmo Application Studio II (EASII) software.

- EtherCAT Slave Configuration
Elmo Gold EtherCAT drives can be identified by two separate device ID values in the ESI (.xml) file for the EtherCAT slave description. This means that you may need to delete the EtherCAT slaves in the example project and discover the drives connected to your master.
Once complete, the SoftMotion Axes will need to be re-bound with the EtherCAT slaves. Right-click on the axes, and click 'Bind to Different Resource' to view the valid options in the project.
EtherCAT Distributed Clock is required on Elmo Gold EtherCAT drives. The plug-in automatically enables the Distributed Clock for these axes.

Support:
- For support using the LabVIEW SoftMotion Module as well as configuring or deploying to your real-time target, visit support.ni.com.
- For support using Elmo's Elmo Application Studio II (EASII) software to setup, configure, or tune the Elmo Gold drive as well as wiring questions, visit https://service.elmomc.com/.