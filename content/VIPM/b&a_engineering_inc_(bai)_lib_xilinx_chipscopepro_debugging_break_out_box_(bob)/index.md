---
title: "Xilinx ChipScopePro Debugging Break-Out-Box (BOB)"
externalUrl: https://www.vipm.io/package/b&a_engineering_inc_(bai)_lib_xilinx_chipscopepro_debugging_break_out_box_(bob)
summary: "This tool enables LabVIEW FPGA developers to debug code real time."
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

Redirecting to https://www.vipm.io/package/b&a_engineering_inc_(bai)_lib_xilinx_chipscopepro_debugging_break_out_box_(bob)

Vendor: B&A Engineering Inc. (BAI)

Author(s): Alireza Bakhshi
 
Full Description:
This tool enables LabVIEW FPGA developers to debug code real time. Additionally ChipScope Pro BOB provides general purpose Digital IOs for real time triggering or monitoring. This document describes how to install, configure, and verify BOB thru example codes.

-----------------------------------------------------------------------------------------------------------------------------------
System Requirements
Hardwares
'	BAI ChipScope Pro Debugging BOB
'	Unit Under Test (PXIE system with FlexRIO Adapter Module or CompactRIO)
'	Xilinx Plateform Cable USB or USBII with USB A-B cable
'	Micro USB-USB Cable can be used in place of Xilinx JTAG USB
'	5V Power Supply Adapter
'	VHDCI-VHDCI Cable depend on UUT
'	HDMI-HDMI Cable depend on UUT
'Custom Made VHDCI-X(DSub) depend on UUT (where X is the pin number of the Digital I/Os CRIO Card)

Softwares
'	LabVIEW and LabVIEW FPGA 2015 or later
'	VI Package Manager 2015 or later
'	NI HSDIO Drivers
'	NI RIO Drivers
'	ChipScope Pro Analyzer

-----------------------------------------------------------------------------------------------------------------------------------
Compatibility
FlexRIO Adapter Module (VHDCI)
'	NI 5751 16 Ch, 50 MS-s, 14-Bit Digitizer Adapter Module
'	NI 6581 Digital Adapter Module
'	NI 6583 300 Mbit-s, 32 SE and 16 LVDS Digital Adapter Module

FlexRIO Adapter Module (HDCI)
'	NI 5734 16-Bit, 120 MS-s Digitizer Adapter Module
'	NI 5741 16-Channel Signal Generator Adapter Module
'	NI 5742 32-Channel, 1 MS-s, 16-Bit Signal Generator Adapter Module
'	NI 5753 16 Ch, 120 MS-s, 16-Bit Digitizer Adapter Module
'	NI 5762 16-Bit, 250 MS-s Digitizer Adapter Module
'	NI 5772 12-Bit, 1.6 GS-s Oscilloscope Adapter Module
'	NI 5782R IF Transceiver
'	NI 5783 Baseband Transceiver
'	NI 5791R RF Transceiver Adapter Module
'	NI 5792R RF Receiver Adapter Module
'	NI 5793R RF Transmitter Adapter Module

CompactRIO
'	NI 9375 - 16 DI, 16 DO	(37-PIN DSUB)
'	NI 9401 - 8 DIO TTL	(25-PIN DSUB)
'	NI 9403 - 32 DIO TTL	(37-PIN DSUB)