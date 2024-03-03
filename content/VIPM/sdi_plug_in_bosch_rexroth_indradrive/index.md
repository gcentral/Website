---
title: "SDI Plug-in - Bosch Rexroth IndraDrive"
externalUrl: https://www.vipm.io/package/sdi_plug_in_bosch_rexroth_indradrive
date: 2017-11-06
summary: "NI SoftMotion Plug-in for Bosch Rexroth IndraDrive EtherCAT Servo Drives."
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

Redirecting to https://www.vipm.io/package/sdi_plug_in_bosch_rexroth_indradrive

Vendor: Bosch Rexroth AG

Author(s): Bosch Rexroth AG
 
Full Description:
NI SoftMotion Plug-in for Bosch Rexroth IndraDrive EtherCAT Servo Drives. **Please read all release notes and known issues before using.**

Allows NI SoftMotion VI's and examples to control Bosch Rexroth IndraDrive EtherCAT servo drives. Single and multiple drives supported. Multiple 3rd party EtherCAT drives on the same EtherCAT network supported.

This package requires the following installed software:
- NI LabVIEW 2016 32-bit or later
- LabVIEW 2016 Real-Time Module or later
- NI RIO 16.0 or later (included in CompactRIO or Industrial Controller 16.0 or later)
- LabVIEW 2016 SoftMotion Module or later
- NI Industrial Communications for EtherCAT 16.0 or later

This package also requires VI Package Manager 2014 or later.
VI Package Manager must be run with administrator privileges to ensure this package is installed correctly.

Supported Features and Descriptions:
- Supported Bosch Rexroth IndraDrive firmware versions: 20V08, 20V10, 20V12, 20V14
- Plug-in supports 1, 2, 4, 6, 8, and 10 millisecond Scan Engine Periods on RT Target
  - Additionally, MPB Drives support 500 microsecond period and MPC Drives support 250 and 500us periods
- Cyclic Synchronous Position Mode supported
- Profile Velocity Mode supported
- Profile Torque Mode supported
- Find Reference types supported:
  Find Reference Move - Forward Limit
  Find Reference Move - Reverse Limit
  Find Reference Move - Index
  Find Reference Move - Home (see note below)
  Find Reference Move - Absolute
  Reference Move Notes:
  - A subset of SoftMotion's available home moves are supported. The Approach Forward input is not evaluated, and moves will always approach forward during a Find Home routine.
  - The Approach Velocity parameter is not supported. All homing routines are performed at the Search Velocity.
  - The initial search direction is inverted if the home switch is initially low. Once the home switch is high, the drive reverses direction and proceed in the commanded starting direction.
- Digital I/O Support
  - Touch Probe supported
  - SoftMotion Digital Inputs 0-7 and Digital Outputs 0-7 are NOT supported
  - Digital input mapping for touch probe, home switch, and limit switches must be configured in IndraWorks

- EtherCAT Slave Configuration:
This plug-in supports multiple firmware versions of the IndraDrive which are represented as unique EtherCAT slaves. If the EtherCAT slave in the example project does not deploy correctly, delete and re-add the slave to ensure it is recognized as the correct revision.
EtherCAT Distributed Clock is supported on the IndraDrive, and it is automatically enabled by the plug-in.

Support:
- For support using the LabVIEW SoftMotion Module as well as configuring or deploying to your real-time target, visit support.ni.com.
- For support using Bosch Rexroth IndraWorks software to setup, configure, or tune the IndraDrive as well as wiring questions, visit https://www.boschrexroth.com/en/us/contact/contact.