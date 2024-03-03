---
title: "SDI Plug-in - Dunkermotoren BG EC"
externalUrl: https://www.vipm.io/package/sdi_plug_in_dunkermotoren_bg_ec
date: 2017-10-12
summary: "SoftMotion Drive Interface (SDI) Plug-in for Dunkermotoren BG EC EtherCAT servo drives."
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

Redirecting to https://www.vipm.io/package/sdi_plug_in_dunkermotoren_bg_ec

Vendor: Dunkermotoren

Author(s): National Instruments
 
Full Description:
SoftMotion Drive Interface (SDI) Plug-in for Dunkermotoren BG EC EtherCAT servo drives. **Please read all release notes and known issues before using.**

Allows NI SoftMotion VI's and examples to control Dunkermotoren BG EC EtherCAT servo drives. Single and multiple drives supported. Multiple 3rd party EtherCAT drives on the same EtherCAT network supported.

This package requires the following installed software:
-NI LabVIEW 2016 or later
-NI Real-Time Module 16.0 or later
-NI RIO 16.0 or later (included in CompactRIO or Industrial Controller 16.0 or later)
-NI SoftMotion 2016 or later
-NI Industrial Communications for EtherCAT 16.0 or later

This package also requires VI Package Manager 2016 or later.
VI Package Manager must be run with administrator privileges to ensure this package is installed correctly.

Notes:
- Supported Dunkermotoren BG EC Drive Firmware Version: 01.86.00.76
- Plug-in supports 6, 5, 4, 2, 1 millisecond and 250, 500 microsecond Scan Engine Periods on the RT Target
- Cyclic Synchronous Position Mode supported
- Profile Velocity Mode supported
- Profile Torque Mode supported (See Torque Scaling below)
- Find Reference types supported:
  Find Reference Move - Forward Limit
  Find Reference Move - Reverse Limit
  Find Reference Move - Index
  Find Reference Move - Home
  Find Reference Move - Absolute
  Reference Move Notes:
  - After a SoftMotion Find Reference routine with Dunkermotoren BG EC EtherCAT drives, the position resets to 0 after any reference move. It is recommended to perform a Find Reference move before calling SoftMotion Reset Position.

- Digital I/O Support:
Dunkermotoren BG EC drives have 7 digital inputs and 3 digital outputs available on the I/O connector. The SDI plug-in will write the necessary objects to reassign the digital input lines, as the default is drive configuration is not fully compatible with SoftMotion. Digital outputs using SoftMotion are not supported on Dunkermotoren BG EC drives.

Digital Input Assignment:
IN 0: Reverse Limit Switch
IN 1: Forward Limit Switch
IN 2: Home Reference Switch
IN 3: SoftMotion DI3
IN 4: SoftMotion DI4
IN 5: SoftMotion DI5
IN 6: SoftMotion DI6

Note: By default, the SDI Plug-in will assign the inputs as listed above with Active High logic. This behavior can be disabled or modified by editing the Plug-in's Initialize.vi. Toggling one constant disables all input assignments, while toggling another constant changes the input logic to Active Low for all three signals.

- Unit Scaling:
By default, the SoftMotion axes are configured without unit scaling. This means moves will be commanded in units of encoder counts. Right click on the SoftMotion Axis and use the Encoder tab to change the position scaling by setting the number of encoder counts per desired unit.
Dunkermotoren BG EC drives report the encoder counts per revolution in SDO 0x4962.01. To command moves in revolutions and revolutions per second, use this value as the SoftMotion encoder counts per unit in the Axis Configuration dialog.

- Torque Scaling:
The SoftMotion Torque Setpoint and Torque Feedback values use PDOs 0x6071 (target torque) and 0x6077 (torque actual value) respectively. As defined by DS402, these are in units of thousandths of rated torque. Dunkermotoren BG EC drives have default values of 0 for objects 0x6075 (motor rated current) and 0x6072 (max torque). With these values, Profile Torque mode will not function.
To work without modification, the SDI Plug-in reads object 0x4224.03 (continuous current) from the drive and assigns the value to 0x6072 (max torque). This object is in units of mA, so object 0x6075 (motor rated current) is set to 1000. This is recommended in Dunkermotoren's documentation and ensures that other relative torque objects are in units of mA. When commanding the Torque Setpoint in SoftMotion, the unit for torque for Dunkermotoren dries is mA.

- Following Error Window
By default, Dunkermotoren BG EC drives set object 0x6065 (following error window) to 0. To prevent the drive from immediately disabling, the Plug-in sets this object to 2000. To modify this value, edit the Plug-in's Initialize.vi.

- EtherCAT Slave Configuration
Each Dunkermotoren BG EC drive variant is identified by a separate device ID value in the ESI (.xml) file for the EtherCAT description. This means that you will most likely need to delete the EtherCAT slaves in the example project and discover the drives connected to your master.
Once complete, the SoftMotion Axes will need to be re-bound with the EtherCAT slaves. Right-click on the axes, and click 'Bind to Different Resource' to view the valid options in the project.
Dunkermotoren BG EC drives do not support the EtherCAT Distributed Clock.

Support:
- For support using the LabVIEW SoftMotion Module as well as configuring or deploying to your real-time target, visit support.ni.com.
- For support wiring, configuring other parameters, or tuning the Dunkermotoren BG EC, contact Dunkermotoren support.