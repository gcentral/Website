---
title: "Open eHS Real-Time Power Electronics Simul Toolbox (NI PXIe-7679R)"
externalUrl: https://www.vipm.io/package/opal_rt_technologies_lib_open_ehs_real_time_power_electronics_simul_toolbox_(ni_pxie_7679r)
date: 2016-10-20
summary: "Open eHS real-time power electronics simulation toolbox for the NI PXIe platform. Supports the NI PXIe-7976R FlexRIO target."
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
 - "FPGA"
 - "I/O"
 - "NI"
 - "NI LabVIEW Tools Network"
 - "real-time"
---

Redirecting to https://www.vipm.io/package/opal_rt_technologies_lib_open_ehs_real_time_power_electronics_simul_toolbox_(ni_pxie_7679r)

Vendor: OPAL-RT Technologies

Author(s): OPAL-RT Technologies
 
Full Description:
Open eHS Real Time Power Electronics Simul. Toolbox by OPAL-RT Technologies.Open eHS Real Time Power Electronics Simulation Toolbox is an FPGA based electrical solver developed by OPAL-RT technologies for the NI PXIe-7976R platform. The core of the system is an FPGA based electrical solver named eHS. eHS is a floating-point solver that enables the user to simulate an electric circuit on FPGA automatically, without having to write mathematical equations. The eHS firmware is reconfigurable, therefore it simulates different circuits without needing to change the FPGA firmware. It combines the simplicity of building electric circuits models using the SimPowerSystems Toolbox, Psim or Multisim 13 with the strength of OPAL-RT FPGA-based simulators to solve the currents and voltages within the circuit, in real-time with a sample time in the range from 100ns to 1us.

Hardware Requirements (other configurations are possible):
- PXI Express Chassis
      - NI PXIe-1082 (or another chassis)
- NI PXI Express Controller 
      - NI PXIe-8135 (or another controller)
- FPGA Modules
      - NI PXIe-7976R for eHS operation & Digital Input
      - NI PXIe-7976R for Analog Output
 - NI FlexRIO IO Adapter Modules
      - NI 6581B (54-Channel, DIO)
      - NI 5742 (32-Channel, 1 MS/s, 16-Bit Analog Output)
-	1300SMB Breakout Box for High-Speed Digital Devices
-	0.55 m Shielded Cable for High-Speed Digital Devices           
-	NI myRIO 1900 for external controller (optional)

Software requirements:
-	Windows 7
- LabVIEW (32-bit) Full or Professional Development System 2016 or higher
-	LabVIEW Real-Time Module 2016 or higher 
-	LabVIEW FPGA Module 2016 or higher 
-	NI-FlexRIO 16.0 or higher
- LabVIEW Control Design and Simulation Toolkit 2016 or higher (optional)
-	LabVIEW for myRIO Toolkit 2016 or higher (optional)
-	NI CompactRIO Waveform Library (install automatically by this installer)

- At least one of the following circuit editors: MATLAB®/Simulink® with SimPowerSystems™ Toolbox, MATLAB®/Simulink® with PLECS 

Blockset  PSIM, or NI Multisim 13
-	32-bit version of MATLAB® Runtime version 9.0 (R2015b) availible at:
     http://www.mathworks.com/products/compiler/mcr/index.html

Click Show Examples to open the folder containing the Example Project used for the simulation.
VI Package Manager 2014 is required to install the package.

Release Notes:
First release  September 2016

This Package depends on these other packages:
NI CompactRIO Waveform Library >= 4.1.0.9